<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		fieldset{
			width: 25cm;
			height : 4.2cm;
			border-radius: 25px;
			margin-left: 6.8cm;
			margin-top: 5cm;
			border-color: white;
			border-width: 0px;
		}
		.new{
			width: 1.7cm;
			border-radius: 25px;
			margin-left: 16.8cm;
			color: crimson;
		}
		body {
  font-family: Arial, sans-serif;
  background-color: crimson;
  color: #00FFFF;
}
	</style>
</head>
<body>
	<div>
		<fieldset>
			<?php 
			$host = 'localhost';
			$user = 'root';
			$password = '';
			$db = 'skillsource';

			// Create connection
			$conn = mysqli_connect($host, $user, $password, $db);

			// Check connection
			if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
			}
			#echo "Connected successfully";
		    // Query to check if the user exists
		    
		    $sql = "SELECT * FROM event";
		    $result = mysqli_query($conn, $sql);

			//echo $result;
		    // Check if the query returns any row
		    if (mysqli_num_rows($result) > 0) {
		    	while ($row = mysqli_fetch_assoc($result)) {
			        $username = $row["EventName"];
				    $email =$row["Organisation"];
				    $number = $row["Location"];
				    $city = $row["Date"];
				    $duration = $row["Duration"];
				    $skills = $row["Required Skills"];
				    echo "<h3>$username - $number</h3>";
				    echo "<h4>$email</h4>";
				    echo "<h4>$city : $duration</h4>";
				    echo "<h5><i>$skills</i></h5>";
				    echo "<form action='email.php' method='post' id='new'>";
				    echo "<input type='submit' name='submit' value='+'>";
				    echo "</form>";
				    echo "<hr>";
				}
				$usernam = $_POST['user'];
			    $emai = $_POST['pass'];
			    $numbe = $_POST['num'];
			    $cit = $_POST['city'];
			    $duratio = $_POST['duration'];
			    $skill = $_POST['skills'];

			    $sql = "INSERT INTO `event` (`EventName`, `Organisation`, `Location`, `Date`, `Duration`, `Required Skills`) VALUES ('$usernam', '$emai', '$numbe', '$cit', '$duratio', '$skill')";
			    // Query to check if the user exists
			    $result = mysqli_query($conn, $sql)
			    	or die("Query Failed : " . $conn -> error);
			        // Login successful
			        // Store the user information in a session
			        // Redirect the user to the dashboard
			    } 
			    else {
			        echo "No events added";// Login failed
			        // Show an error message
			    }
	?>
		</fieldset>
	</div>
</body>
</html>