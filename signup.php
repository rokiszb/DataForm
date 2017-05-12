<?php

	include 'dbh.php';
if (isset($_POST['submit'])) {
	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'pdf');

	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 1000000) {
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				
			} else {
				echo "Failas per didelis";
			}
		} else {
			echo "Klaida ikeliant faila";
		}
	} else {
		echo "Negalima ikelti sio tipo failu";
	}

}


	$vardas= $_POST['vardas'];
	$phone= $_POST['phone'];
	$email= $_POST['email'];

	if (empty($vardas)) {
		header("Location: signup.php?error=empty");
		exit();
	}
if (empty($phone)) {
		header("Location: signup.php?error=empty");
		exit();
	}
	if (empty($email)) {
		header("Location: signup.php?error=empty");
		exit();

	}

	else {
		$sql = "INSERT INTO userid (vardas, phone, email) 
	VALUES ('$vardas', '$phone', '$email') ";
	
	$result = mysqli_query($conn, $sql);


	}


	
	




?>