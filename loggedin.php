<?php
session_start();
if($_SESSION["active"] != TRUE){
    header("Location: /login.php?sendto=loggedin.php");
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
        <div id="header"></div>
        <script>
            create_header("header");
        </script>
        <div id="content">
            <div id="leftdiv"></div>
            <div id="middlediv"></div>
            <div id="rightdiv"></div>
        </div>
    </body>
</html>