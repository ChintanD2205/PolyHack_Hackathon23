<?php 
	/*$uname = $_POST['user'];
	$pass = $_POST['pass'];

	$uname = stripcslashes($uname);
	$pass = stripcslashes($pass);
	$uname = mysql_real_escape_string($uname);
	$pass = mysql_real_escape_string($pass);

	mysql_connect("localhost", "root", "");
	mysql_select_db("test");

	$result = mysql_query("select * from 'login data' where Username = '$uname' and Password = '$pass'")
		or die("Failed to query databse");

	$row = mysql_fetch_array($result);

	if($row['Username'] == $uname && $row['Password'] == $pass)
	{
		echo "Login Success !!! Welcome ".$row['Username'];
	}
	else
	{
		echo "Failed to login";
	}*/

	$host = 'localhost';
	$user = 'root';
	$password = '';
	$db = 'skillsource';

	$conn = mysqli_connect($host, $user, $password, $db);

	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";

	$username = $_POST['user'];
    $password = $_POST['pass'];
    
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    
    $sql = "SELECT * FROM user_accounts WHERE username = '$username' or email = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

	
    // Check if the query returns any row
    if (mysqli_num_rows($result) > 0) {
        echo "LOGIN SUCCESSFUL";
    } 
    else {
        echo "ERROR";
    }

    
	header("Location: https://shahhet828.wixsite.com/skillsource");
	exit;
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

    /*print_r($_FILES['fileToUpload']);
    if (is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {
    	echo "Uploaded";
    // the file was successfully uploaded
    // do something with the file
	} else {
	    // the file was not uploaded successfully
	    echo "Error: The file was not uploaded successfully.";
	}

    $sql = "SELECT Image FROM user_accounts WHERE username = '$username' AND password = '$password'";

	$result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

	$image = $row['tmp_name'];

	#echo '<img src="data:image/jpeg;base64,'.base64_encode($image).'"/>';*/
?>