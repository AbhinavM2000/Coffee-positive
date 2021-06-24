<?php
// Initialize the session
session_start();
 
$username = $_GET['login'];
$password = $_GET['pass'];
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    $_SESSION['username'] =$username;
    $_SESSION['password'] =$password;
    header("location: welcome.php");
    exit;
}
else{
header("location: index.html");}

?>
