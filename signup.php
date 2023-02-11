<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>

</head>
<body>
	<div id ="frm">
		<form action="process2.php" method="POST" enctype="multipart/form-data">
			<p>
				<label>Name : </label>
				<input type="text" id="user" name="user" />
			</p>
			<p>
				<label>Email:  </label>
				<input type="email" id="pass" name="pass" />
			</p>
			<p>
				<label>Phone Number:  </label>
				<input type="text" id="num" name="num" />
			</p>
			<p>
				<label>City:  </label>
				<input type="text" id="city" name="city" />
			</p>
			<p>
				<label>Image:  </label>
				<input type="file" name="fileToUpload" id="fileToUpload">
			</p>
			<p>
				<input type="Submit" id="btn" value="Login" />
			</p>
			
		</form>
	</div>
</body>
</html>