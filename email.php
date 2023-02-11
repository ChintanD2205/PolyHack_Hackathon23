<?php 

	include 'process.php';
	include 'EventVolunteer.php';
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
	echo "Connected successfully";

    $sql = "SELECT email FROM user_accounts WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

	
    // Check if the query returns any row
    if (mysqli_num_rows($result) > 0) {

    	$to = "$sql";
		$subject = "Event Confirmation";
		$message = "This is an email to confirm your participation in $usernam on $cit";
		$headers = "From: dodia2208@gmail.com";

		if (mail($to, $subject, $message, $headers)) {
		    echo "Email sent successfully.";
		} else {
		    echo "Failed to send email.";
		}
        //header("Location: " . $_SERVER['HTTP_REFERER']);
		//exit;
        // Login successful
        // Store the user information in a session
        // Redirect the user to the dashboard
    } 
    else {
        echo "ERROR";// Login failed
        // Show an error message
    }
?>