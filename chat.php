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
	height: 5%;
	width: 3%;
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
    background-color: #4CAF50;
}
.wrapper
{
width:100%;
height:100px;
position:relative;
}

.arrow
{
width:10px;
height:10px;
position:absolute;
right:0px;
bottom:0px;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  <li><img src="logo.png" class='small' id='logo'></li>
</ul>

<div class="wrapper">
    <div class="arrow">Hello</div>
</div>




</body>
</html>
