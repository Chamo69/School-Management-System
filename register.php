<?php

$path = mysqli_connect("localhost", "root", "", "campus_lms");

$nic = $_REQUEST['nic'];
$name = $_REQUEST['name'];
$address = $_REQUEST['address'];
$district = $_REQUEST['district'];
$tel_no = $_REQUEST['number'];
$course = $_REQUEST['course'];


if (isset($_POST['register'])) {

    
    $select = "SELECT * FROM sregister WHERE nic = '$nic'";
    $result = mysqli_query($path, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'User already exists!';
        
        
    } else {
       
        $insert = "INSERT INTO sregister (nic, name, address, district, number, course) VALUES ('$nic', '$name', '$address', '$district', '$tel_no', '$course')";
            mysqli_query($path, $insert);
            header('location: dashboard.php');

    }

    if (isset($error)) {
        foreach ($error as $err) {
            echo "<p style='color:red; text-align: center; font-size: 25px;'>$err</p>";
        }
    }
};

?>