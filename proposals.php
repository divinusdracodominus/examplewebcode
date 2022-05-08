<?php
session_start();
if($_SESSION["active"] != TRUE){
    header("Location: /login.php?sendto=proposals.php");
}
?>