<?php
// Initialize the session
session_start();
$username = $_SESSION['username'];
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.html");
    exit;
}
?>


<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=0.75">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<script>
var username='<?php echo $username; ?>';

Swal.fire({
  icon: 'info',
  title: 'Welcome ' + username,
  text: 'You are successfully logged in !',
}).then((result) => {
  alert("You can close this page now");
})
</script>
</body>
</html>
