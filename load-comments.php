<?php
	include 'dbh.php'
$sql = "SELECT * FROM userid";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
	echo "Nr:". $row['id']."\x20|";
	echo "Vardas, Pavarde:". $row['vardas']."\x20|";
	echo "Telefono nr:".$row['phone']."\x20|";
	echo "Email:".$row['email']."<br><hr>";
		}
	} else {
		echo "There are no comments!";
	}

?>