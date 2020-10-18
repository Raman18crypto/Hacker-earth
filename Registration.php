<?php

$server="localhost";
$user="root";
$pass="";
$dbname="hcker_earth";

//Creating the cnnection with sql

$conn= new mysqli($server,$user,$pass,$dbname);

//Checking the connection

if($conn->connect_error)
{
    die("The connection with database failed".$conn->connect_error);
}

//Fetching the details of the user

$First_name=$_POST["First_name"];

$Second_name=$_POST["Second_name"];

$mail=$_POST["mail"];

$psw=$_POST["psw"];

$confirm_psw=$_POST["confirm_psw"];


$sql="insert into data(First_name,Second_name,mail,psw,confirm_psw) values ('$First_name','$Second_name','$mail','$psw','$confirm_psw')";

if($conn->query($sql)===TRUE)

{
    echo"<h1>Your data has been successfully submitted</h1>";
}

else

{
    echo"Error".$sql."</br>".$conn->error;

}

$conn->close();

header("refresh:2;url=Login.html")

?>