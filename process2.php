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

	// Create connection
	$conn = mysqli_connect($host, $user, $password, $db);

	// Check connection
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";

	$username = $_POST['user'];
    $email = $_POST['pass'];
    $number = $_POST['num'];
    $city = $_POST['city'];
    if (isset($_FILES['fileToUpload'])) {
    $file = $_FILES['fileToUpload'];
    $file_path = $file['tmp_name'];
    echo "File path: $file_path";
	}
    //$image = addslashes(file_get_contents($_FILES['fileToUpload']['tmp_name']));
    //$imgname=$_FILES['fileToUpload']['tmp_name'];
    #print_r($_FILES['fileToUpload']);
    
    // Escape special characters in the input data to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $email = mysqli_real_escape_string($conn, $email);
    $number = mysqli_real_escape_string($conn, $number);
    $city = mysqli_real_escape_string($conn, $city);
    
    $sql = "SELECT ID FROM `user_accounts`";
    $id = mysqli_query($conn, $sql);
    $i = (int)$id;
    $i++;
    $sql = "INSERT INTO `user_accounts` (`Name`, `Contact`, `Email`, `Address`) VALUES ('$username', $number, '$email', '$city')";
    #echo $sql;
    // Query to check if the user exists
    $result = mysqli_query($conn, $sql)
    	or die("Query Failed : " . $conn -> error);
    
    /*if (is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {
    	echo "Uploaded";
    // the file was successfully uploaded
    // do something with the file
	} else {
	    // the file was not uploaded successfully
	    echo "Error: The file was not uploaded successfully.";
	}*/

	header("Location: https://shahhet828.wixsite.com/skillsource");
	exit;
    // Check if the query returns any row
    /*if (mysqli_num_rows($result) > 0) {
        echo "LOGIN SUCCESSFUL";
        // Login successful
        // Store the user information in a session
        // Redirect the user to the dashboard
    } 
    else {
        echo "ERROR";// Login failed
        // Show an error message
    }
    $target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"][$username]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	  if($check !== false) {
	    echo "File is an image - " . $check["mime"] . ".";
	    $uploadOk = 1;
	  } else {
	    echo "File is not an image.";
	    $uploadOk = 0;
	  }
}*/
?>