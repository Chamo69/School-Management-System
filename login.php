<?php
session_start(); 

$path = mysqli_connect("localhost", "root", "", "campus_lms");

$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];


if (!$path) {
    die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['login'])) {

    $query = "SELECT username, password FROM admin WHERE username = '$user' AND password = '$pass'";
    
    $result = mysqli_query($path, $query);

    if (mysqli_num_rows($result) > 0) {

        $_SESSION['username'] = $user;
         header('location: dashboard.php');

    } else {
        $_SESSION['status'] = "<p style='color:red;'>Username or Password is Incorrect!</p>";
        header('location: home.php'); 
    }
}

?>

