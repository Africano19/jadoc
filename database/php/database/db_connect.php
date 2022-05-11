<?php

function OpenCon()
{


  $host = "ec2-34-246-227-219.eu-west-1.compute.amazonaws.com";
  $dbname = "d7qhm5em88onq7";
  $user = "gfbxhdxaeztipf";
  $password = "9b941ecbebb7e4952fdd5e18d0e675449cd04ea33def9da26d77ae84358d0574";
  $port = "5432";

  $con = "dbname=" . $dbname . " host=" . $host . " port=" . $port . " user=" . $user . " password=" . $password . " sslmode=require";
  echo 'j!!';
  $conn = pg_connect($con);

  if($conn){
      echo "Connected <br />" . $conn;
  }else {
      echo "Not connected";
  }

}

function CloseCon($conn)
{
    $conn -> close();
}

?>
