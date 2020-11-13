<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	
	<div class="container" id="root">
		<div class="row">
			<div class="col-12">
				<input type="text" class="form-control" placeholder="Type a person's name" aria-label="Person" v-model="person.name">
			</div>
			<div class="col">
				<button type="button" class="btn btn-success btn-lg btn-block" @click="insertUpdatePerson">Save</button>
			</div>
		</div>
		<div class="row">
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Person</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr v-for="(person) in personAll">
						<td>{{ person.id }}</td>
						<td>{{ person.name }}</td>
						<td>
							<button type="button" class="btn btn-warning btn-sm" @click="editPerson(person)">Edit</button>
							<button type="button" class="btn btn-danger btn-sm" @click="deletePerson(person)">Delete</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<script src="js/axios.min.js"></script>
	<script src="js/vue.min.js"></script>
	<script src="js/app.js"></script>
</body>
</html>