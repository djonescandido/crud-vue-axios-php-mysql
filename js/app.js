var route = 'http://localhost/crud-vue-axios-php-mysql/';

var app = new Vue({

  el: "#root",
  data: {
	  person:{id:0, name:''},
	  personAll:[]
  },

  mounted: function () {
	  this.selectAllPerson();
  },

  methods: {

  	selectAllPerson: function () {
  		axios.get(route + 'php/api.php?action=selectAll')
  		.then(function (response) {
			  
			if (!response.data.error) {
				app.personAll = response.data.personAll;
				app.clear();
			}
		  });
		  
	},
	insertUpdatePerson: function () {
		axios.post(route + 'php/api.php?action=insertUpdate', app.person)
		.then(function (response) {
			
		  if (!response.data.error) {
				app.selectAllPerson();
		  }
			
		});
	},
	deletePerson: function (person) {
		axios.post(route + 'php/api.php?action=delete', person).then(function (response) {
		  if (!response.data.error) {
				app.selectAllPerson();
		  }
			
		});
	},
	editPerson: function (e) {
		app.person.id = e.id;
		app.person.name = e.name;
	},
	clear: function (){
		app.person.id = 0;
		app.person.name = '';
	}
	

	  
  }

});