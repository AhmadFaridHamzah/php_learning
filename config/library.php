<?php

function connectionOOP(){
	$conn = new mysqli(DB_SERVERNAME,DB_USERNAME,DB_PASSWORD,DB_NAME);

	if($conn->connect_error){
		die("Connection failed: ".$conn->connect_error);
	}

	return $conn;
}

function setStaff($sql,$data){

	$conn = connectionOOP();


	if($stmt = $conn->prepare($sql)){

	}else{
		die($conn->error);
	}

	$stmt->bind_param('sss',$first_name,$last_name,$email);

	//extract array to variable
	extract($data);

	if($result = $stmt->execute()){

	}else{
		die($conn->error);
	}

	return $result;

}

function getResult($sql){
	$conn = connectionOOP();

	$result = $conn->query($sql);
	$aResult = [];

	if($result){
		if($result->num_rows > 0){
			while ($rs = $result->fetch_assoc()) {
				$aResult[] = $rs;
			}

			return $aResult;
		}
	}else{
		die("DB error:".$conn->error);
	}
}

function updateSql($sql){
	$conn = connectionOOP();
	
	if($conn->query($sql) === TRUE){
		return TRUE;
	}else{
		die("db error:".$conn->error);
	}
}

function deleteSql($sql){
	$conn = connectionOOP();

	if($conn->query($sql) === TRUE){
		return TRUE;
	}else{
		die("db error:".$conn->error);
	}
}

function setUpload($sql , $data){
	$conn = connectionOOP();

	if($stmt = $conn->prepare($sql)){

	}else{
		die($conn->error);
	}

	$stmt->bind_param('ssis', $name, $location,
		$size, $type);

	//extract array to variable
	extract($data);

	if($result = $stmt->execute()){}else{
		die($conn->error);
	}

	return $result;
}

?>