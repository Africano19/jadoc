<?php

include '../database/init_connection.php';

$email = $_POST['uemail'];
$password = md5($_POST['psw']);

if(!empty($email) && !empty($password))
{
    $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";

    // insert in database
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        $result_array = array();
        while($row = mysqli_fetch_assoc($result)){
            $result_array[] = $row;
        }

        echo json_encode($result_array);
    }
    else
    {
        printf("Error message: %s\n", mysqli_error($conn));
    }
}

CloseCon($conn);

?>
