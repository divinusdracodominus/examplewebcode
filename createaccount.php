<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/main.css"/>
<title>Philosophism</title>
		<link rel="shortcut icon" href="images/sun.ico" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/elements.js"></script>
</head>
<body onload="changeimage()">
<div id="stuff">
		<div id="header">
		</div>
		<script>
			create_header("header");
		</script>
		<div id="mobileheader">
			<center>
			<div id="menubutton">
			<input type="button" id="m_button" value=" ">
			<form action="/proccess.php" method="post">	
						<input type="text" id="mobilesearchfield" placeholder="search" name="term"/>
						<input type="submit" class="search" value=" ">
			</form>
		</div>
			<div id="mobilemenu">
				<h3 class="span" id="h-1">Home</h4>
					<a class="navigation" id="page1" href="/index.html">Home</a>
					<a class="navigation" id="page1-1" href="structure">structure</a>
				
				<h3 class="span" id="h-2">Community</h4>
					<a class="navigation" id="page2" href="/clubs">Clubs</a>
					<a class="navigation" id="page2-1" href="/union">Unions</a>
				
				<h3 class="span" id="h-3">Projects</h4>
					<a href="/arkproject" class="navigation" id="page3">Ark Project</a>
<a href="/education">Encourageing Education</a>
				<h3 class="span" id="h-4">Dashboard</h4>
					<a href="loggedin.php" class="navigation" id="page4-2">My Account</a>
					<a href="/login" class="navigation" id="page4">Login</a>
					<a href="/createaccount" class="navigation" id="page4-1">create account</a>
			</div>
		<center>
</div>
<div id="content">
<div id="leftdiv"></div>
<div id="middlediv">
<h1 id="space"></h1>
<h1 class="h1">Create Account</h1>
<div id="content_background">
<div id="content">
<div id="login">
<center>
<h1>create account</h1>
<form action="php/post.php" method="post" name="form">
<table class="table">
<tr><td><input type="text" placeholder="first name" name="fname"></td></tr>
<tr><td></td><td></td></tr>
<tr><td><input type="text" placeholder="last name" name="lname"></td></tr>
<tr><td></td><td></td></tr>
<tr><td><input type="text" placeholder="you@example.com" name="email"></td></tr>
<tr><td></td><td></td></tr>
<tr><td><input type="text" placeholder="username" name="user"></td></tr>
<tr><td></td><td></td></tr>
<tr><td><input type="password" placeholder="password" name="pass"></td></tr>
<tr><td></td><td></td></tr>
<tr><td><input type="password" placeholder="confirm password" name="pass2"></td></tr>
<tr><td>
<input type="hidden" value="createaccount" name="action"/>

</table>
<input type="submit" value="create account" id="loginbutton"/>
</center>
</form>
</div>
</div>
</div>
</div>
</div>
<div id="rightdiv"></div>
</div>
</div>
</body>
</html>
