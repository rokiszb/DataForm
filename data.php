<?php
	include 'dbh.php'
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>register form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

</head>
<a href="index.php">Duomenu pateikimo forma</a><br>
<body>
<?php
$sql ="SELECT * FROM userid";
$result = mysqli_query($conn,$sql);


while ($row = $result->fetch_assoc()) {
	echo "Nr:". $row['id']."\x20|";
	echo "Vardas, Pavarde:". $row['vardas']."\x20|";
	echo "Telefono nr:".$row['phone']."\x20|";
	echo "Email:".$row['email']."<br><hr>";

}

?>
</body>
</html>
