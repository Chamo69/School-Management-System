<?php

$path = mysqli_connect("localhost", "root", "", "campus_lms");

if(isset($_POST['deletedata']))
{
    $nic = $_POST['delete_id'];

    $query = "DELETE FROM sregister WHERE nic='$nic'";
    $query_run = mysqli_query($path, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:dashboard.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>