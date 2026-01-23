<?php

require '../config.php';

$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$question = $_POST["question"];


$sql = "INSERT INTO question VALUES ('$id','$name','$email','$question')";

if($con->query($sql))
{
    echo "Insert Sucessfull";
}
else{
    echo "Error".$con->error;
}

$con->close();

?> 