<html>
	<head>
		<meta charset = "utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name = "viewport" content = "width=device-width, initial-scale=1">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<title>Flint</title>
		<!DOCTYPE html>
<html>
<head>
<style>	
.small{
	height: 5%;
	width: 9%;
}

#logo { 
	height: 7%;
	width: 4%;
	float: right;
}


ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #f3f3f3;
}


li a {
	float: left;
    display: block;
    color: #666;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #ddd;
}

li a.active {
    color: white;
    background-color: red;
}

</style>
</head>
<body>

<ul>
  <li><a  href="Claude.html">Matches</a></li>
  <li><a class="active" href="myProfile.php">My Profile</a></li>
  <li><a href="chat.php">Chats</a></li>
  <li><a href="Premium.html">Upgrade</a></li>
  <li><img src="logo.png" class='small' id='logo'></li>
</ul>

<h1 align = "center">Welcome to Flint! Begin by creating a profile.</h1><br>
<div class = "container-fluid">
	<form action = "Claude.html" method = "post" class = "form-horizontal">
		<!-- Profile Picture -->
		<div class = "input-group">
			<label class = "control-label col-sm-4">&nbsp;&nbsp;Profile Picture:</label>
			<div class = "col-sm-4">
				<input type = "file" id = "pic" accept = "image/*">
			</div>
		</div>
		<!-- First Name -->
		<div class = "form-group">
			<label class = "control-label col-sm-2 col-sm-pull-1">First Name:</label>
			<div class = "col-sm-4 col-sm-pull-1">
				<input type = "text" id = "firstName" class = "form-control" placeholder = "Richard" required>
			</div>
			
			<!-- Last Name -->
			<label class = "control-label col-sm-2 col-sm-pull-1">Last Name:</label>
			<div class = "col-sm-4 col-sm-pull-1">
				<input type = "text" id = "lastName" class = "form-control" placeholder = "Johnson" required>
			</div>
		</div>
		
		<div class = "form-group">
			<!-- Location -->
			<label class = "control-label col-sm-2 col-sm-pull-1">Location:</label>
			<div class = "col-sm-4 col-sm-pull-1">
				<input type = "text" id = "location" class = "form-control" placeholder = "College Park" required>
			</div>
			<!-- Age -->
			<label class = "control-label col-sm-2 col-sm-pull-1">Age:</label>
			<div class = "col-sm-1 col-sm-pull-1">
				<input type = "number" id = "age" class = "form-control" placeholder = "20" required>
			</div>
			<!-- Gender -->
			<div>
				<label class = "control-label">Gender:</label> 
				<label>M</label>
				<input type="radio" id="genderM">	
				<label>F</label>
				<input type="radio" id="genderF">
			</div>
		</div>
		
		<!-- Bio -->
		<div class = "form-group">
			<label class = "control-label col-sm-1">Bio:</label>
			<div>
				<textarea class = "col-sm-10" rows = "5" id = "Bio"></textarea>
			</div>
		</div>
		
		<!-- Interests -->
		<div class = "form-group">
			<label class = "control-label col-sm-1">Interests:</label>
			<div>
				<textarea class = "col-sm-10" rows = "5" id = "interests"></textarea>
			</div>
		</div>
		
		<!-- Interests -->
		<div class = "form-group">
			<label class = "control-label col-sm-1">Dislikes</label>
			<div>
				<textarea class = "col-sm-10" rows = "5" id = "interests"></textarea>
			</div>
		</div>
		
		<!-- Button -->
		
		<div class = "form-group">
			<div class = "col-sm-4 col-sm-push-4">
				<input type = "submit" value = "Update Profile" class = "form-control btn btn-danger">
			</div>
		</div>
	</form>
</div>

</body>
</html>
