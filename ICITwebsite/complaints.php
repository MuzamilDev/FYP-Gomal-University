<?php


$connection = mysqli_connect("localhost","root","","complaints");


if(isset($_POST['send-button'])){

    $formName = $_POST['formno'];
    $stdName  = $_POST['stdname'];
    $stdfather = $_POST['Ftname'];
    $sessionName = $_POST['stdsession'];
    $className = $_POST['stdclass'];
    $date = $_POST['date'];
    $filledcomp = $_POST['textsareas'];

    $insert_form_data = "INSERT INTO stdcomplaints (formno,stdname,Ftname,stdsession,stdclass,date,textsareas) VALUEs ('$formName','$stdName','$stdfather','$sessionName','$className','$date','$filledcomp')";

    $insert_data_run = mysqli_query($connection,$insert_form_data);

    if($insert_data_run){
        echo "data sended confirm it";
    }
    else
    {
        echo "data not sended";
    }
}
?>