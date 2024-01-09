<?php
session_start();
$connection = mysqli_connect("localhost","root","","email");

if(isset($_POST['send-btn'])){

    $email = $_POST['email'];


    $insert = "INSERT INTO EmailCheck (email) VALUE ('$email')";

    $insert_query_run = mysqli_query($connection,$insert);

    if($insert_query_run){
        echo "Data Saved Successfuly";
    }
    else 
    {
        echo "Data Not Saved";
    }
}
?>