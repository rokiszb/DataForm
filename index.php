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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

</head>

<body>
<a href="data.php">Duomenys</a>
    <div class="wrapper">
        <form action="signup.php" method="POST" enctype="multipart/form-data">
            <h1>Iveskite duomenis</h1>
                <input class="eilute" type="text" name="vardas" placeholder="Vardas, Pavardė" ><br>
                <input class="eilute" type="text" pattern="[0-9]"  name="phone" placeholder="Telefono nr." required><br>
                <input class="eilute" type="email" name="email" placeholder="Email" required><br>
                <div><label>Ikelkite failą</label>
                <input class="mygtukas" type="file" name="file"><br>
                </div>
            <br>
            <button type="submit" name="submit">Pateikti</button>
        </form>
    </div>
    
    <script>
     	$(document).ready(function() {
		$("button").click(function() {
			$("#comments").load("load-comments.php");
		});
	});
    </script>

    <div id="comments">
    ewe
    </div>
    <div class="knopke">
        <button class="database">Rodyti duombaze</button>
    </div>
</body>
</html>












