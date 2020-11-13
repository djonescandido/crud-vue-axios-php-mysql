<?php

	
	header("Content-type: application/json");

	$conn = new mysqli("localhost", "root", "", "crud_person");

	$response = array('error' => true);
	$data = json_decode(file_get_contents("php://input"));
	$action = $_GET['action'];

	switch ($action) {

		case 'selectAll':
			
			
			$sql = "SELECT * FROM `person`;";
			
			$result = mysqli_query($conn,$sql);
			$personAll  = array();

			while ($row = mysqli_fetch_assoc($result)) {
				array_push($personAll, $row);
			}
			$response['personAll'] = $personAll;
			$response['error'] = false;
			
			break;

		case 'insertUpdate':
		
			if($data->id == 0){
				$sql = "INSERT INTO `person`(`name`) VALUES ('$data->name');";
			}else{
				$sql = "UPDATE `person` SET `name`='$data->name' WHERE `id` = $data->id;";
			}

			if(mysqli_query($conn,$sql)){
				$response['error'] = false;
			}

			break;
		case 'delete':
	
			$sql = "DELETE FROM `person` WHERE `id` = $data->id ;";	

			if(mysqli_query($conn,$sql)){
				$response['error'] = false;
			}

			break;		
		default:
			break;

			

	}
	


	$conn->close();


	echo json_encode($response);
	die();

?>