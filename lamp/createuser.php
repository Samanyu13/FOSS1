<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$servername = "localhost";
		$username = "sampleuser";
		$password = "helloworld";
		$dbname = "sampleuser";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		$username = $_GET['uname'];
		$password = $_GET['psw'];

		$sql = "INSERT INTO userdata (username, password)
		VALUES ('".$username."', '".$password."')";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	?> 

	<p>
		<a href="/">Go Back</a>
	</p>

</body>
</html>