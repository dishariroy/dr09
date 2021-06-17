<?php

$con = mysqli_connect('localhost', 'root');

if($con)
{
    echo "connected";
}
else{
    echo "not";
}

mysqli_select_db($con, 'website');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = " insert into userinfodata (Name, Email, Message) 
values ('$name', '$email', '$message') ";

echo "$query";

mysqli_query($con,$query );

header('location: ../index.html');


?>