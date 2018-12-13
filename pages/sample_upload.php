<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
  	// echo "<pre>";
  	// print_r($_FILES['uploaded_file']);
  	// echo "</pre>";
  	// die();
    $target_dir = "assets/upload/"; //yg ni kena create folder directory ni dulu dekat folder project kita
	$target_file = $target_dir . basename($_FILES["uploaded_file"]["name"]);

	//print_r($target_file);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image

	//die();
	if(isset($_POST["submit"])) {
	    
	   if($imageFileType != "pdf") {
	    	$sql = "INSERT INTO upload 
			    (name, location, size, type)
			    VALUES (?, ?, ?, ?)";

			    $afilm = array("name" => $_FILES["uploaded_file"]["name"],
			                  "location" => $target_file,
			                  "size" => $_FILES["uploaded_file"]["size"],
			                  "type" => $imageFileType,
			              );

			$result = setUpload($sql, $afilm);

			if($result > 0){
		    	move_uploaded_file( $_FILES['uploaded_file']['tmp_name'], $target_file);
				header('Location:http://localhost/sakilamanagement/index.php?page=listupload');
			}else{
				echo "Failed upload";
			}
	    } else {
    		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    }
	}
  }
?>

<div class="block-header">
     <h2>SAMPLE UPLOAD</h2>
</div>


  <form enctype="multipart/form-data" action="?page=sample_upload" method="post">
    <p>Upload your file</p>
    <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Upload" name="submit"></input>
  </form>