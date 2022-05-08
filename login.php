<?php
session_start();
include "php/query.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	login();
}else if ($_SERVER["REQUEST_METHOD"] == 'GET' && $_GET["action"] != NULL){
	$action = $_GET["action"];
	switch ($action) {
		case "logout": 
			logout();
		break;
		case "login" && $_SESSION["active"] == TRUE:
			logout();
		break;
	}
}else{
	$redirect = $_GET["sendto"];
	if($redirect == NULL){
		$redirect = "loggedin.php";
	}
	if($_SESSION["active"] == TRUE){
		echo "<script>location.replace('$redirect')</script>";
	}
}

function login() {
    $user = $_POST["user"];
	$pass = $_POST["pass"];
	$redirect = $_POST["sendto"];
    $sql = "SELECT username, password FROM users WHERE username='$user'";
	$result = submit_query($sql);
	if($redirect == NULL){
		$redirect = "loggedin.php";
	}
    if ($result->num_rows > 0) {
       // output data of each row
        while($row = $result->fetch_assoc()) {
            if(password_verify($pass, $row["password"])){
				$_SESSION["active"] = TRUE;
				$_SESSION["user"] = $user;
				echo "<script>location.replace('$redirect')</script>";
            }
        }
        die("user not found");
    } else {
        die("couldn't read database results");
    }
}
function logout() {
	session_destroy();

	$redirect = $_GET["sendto"];
	if($redirect == NULL){
		$redirect = "index.php";
	}
	echo "<script>location.replace('$redirect');</script>";
	exit;
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/css/main.css"/>
<title>Philosophism</title>
		<link rel="shortcut icon" href="images/sun.ico" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="/js/main.js"></script>
		<script src="/js/elements.js"></script>
</head>
<body onload="changeimage()">
<div id="stuff">
		<div id="header"></div>
		<script>
			create_header("header");
		</script>
<div id="content">
<div id="leftdiv">
<!--<div id="leftadd">
<center>
<div class="addbar"><h3 class="addtitle" id="lat">some add</h3><input type="button" class="addgone" value="X" id="lca"/></div>
<iframe class="iframe" src="/profileimages/1.png" scrolling="no" id="laif"></iframe>
<p class="p" class="lac">
this would be an add
</p>-->
</center>
</div>
</div>
<div id="middlediv">
<h1 id="space"></h1>
<center>
<div id="login">
<h1>login</h1>
<form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="post">
<table class="table">
<tr><td><input class="input" type="text" placeholder="username" name="user"></td></tr>
<tr><td class="td"></td><td></td></tr>
<tr><td><input class="input" type="password" placeholder="password" name="pass"></td></tr>
<input type="hidden" name="sendto" value="<?php echo $_GET["sendto"];?>"/>
<tr><td></td><td></td></tr>
<select name="type">
    <option value="normal">admin</option>
    <option value="scavenger">scavengerhunt</option>
  </select>name
</table>
<div id="random">
<input type="submit" value="login" class="button" id="loginbutton" class="ca">
<p class="ca"> Or </p>
<a href="/createaccount" class="ca" id="ca">create account</a>
</div>
</center>
</form>
</div>
</div>
</div>
<div id="rightdiv">
<!--<div id="rightadd">
<center>
<div class="addbar"><h3 class="addtitle" id="rat">some add</h3><input type="button" class="addgone" value="X" id="rca"/></div>
<iframe class="iframe" src="/profileimages/1.png" scrolling="no" id="raif"></iframe>
<p class="p" class="rac">
this would be an add
</p>-->
</center>
</div>
</div>
</div>
</div>
	</body>
</html>
<!-- this section of text represents the devision line between the header and the body-->

