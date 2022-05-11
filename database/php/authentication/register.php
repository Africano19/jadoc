<?php

include '../database/init_connection.php';

$name = $_POST['uname'];
$email = $_POST['uemail'];
$password = md5($_POST['psw']);

if(!empty($name) && !empty($email) && !empty($password))
{
    $sql = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";

    // insert in database 
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        echo("User inserted");
    }
    else
    {
        printf("Error message: %s\n", mysqli_error($conn));
    }
}

CloseCon($conn);

?>