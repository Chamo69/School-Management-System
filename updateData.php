<?php

$path = mysqli_connect("localhost", "root", "", "campus_lms");

if(isset($_POST['updatedata']))
{
    $name = $_POST['name'];
    $nic = $_POST['nic'];
    $address = $_POST['address'];
    $district = $_REQUEST['district'];
    $number = $_POST['number'];
    $course = $_POST['course'];


    $query = "UPDATE sregister SET nic='$nic', name=' $name' , address=' $address', district=' $district' , number=' $number', course=' $course' WHERE nic='$nic'  ";
    $query_run = mysqli_query($path, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: dashboard.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>