<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div id ="frm">
		<form action="EventVolunteer.php" method="POST">
			<p>
				<label>Name : </label>
				<input type="text" id="user" name="user" />
			</p>
			<p>
				<label>Org:  </label>
				<input type="text" id="pass" name="pass" />
			</p>
			<p>
				<label>Location:  </label>
				<input type="text" id="num" name="num" />
			</p>
			<p>
				<label>Date:  </label>
				<input type="date" id="city" name="city" />
			</p>
			<p>
				<label>Duration : </label>
				<input type="text" name="duration" id="duration">
			</p>
			<p>
				<label>Skills required :  </label>
				<input type="text" name="skills" id="skills">
			</p>
			<p>
				<input type="Submit" id="btn" value="Login" />
			</p>
			
		</form>
	</div>
	
</body>
</html>