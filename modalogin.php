<?php

session_start();

include "config.php";

if(isset($_POST['but_submit'])){

    $user = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $pass = mysqli_real_escape_string($con,$_POST['txt_pwd']);


      if($user=="" || $pass=="")
        {

        //echo "<script>alert( 'Os campos tem de estar prenchidos');</script>";

        }
        else
        {
            $sql= "select * from users where Username='".$user."' and Password='".$pass."'";
            $result= mysqli_query($con,$sql) or die("Sql Error".mysql_error());
            $num_rows= mysqli_num_rows($result);
           if($num_rows>0)
           {
               while($dados = mysqli_fetch_array($result)){
                   $id=$dados['ID_User'];
              if($dados['Ativo']==1){
                  if (isset ($_SESSION["ID"])){
            $_SESSION["ID"] = "$id";

            }else{
            $_SESSION["ID"] = "$id";

            }
            $url = 'Dashboard/dashboard.php';
            echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
               }else if ($dados['Ativo']==0){

          //  echo "<script>alert( 'O Utilizador não está ativo');</script>";
            //$url = 'login.php';
          //  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
               }
           }
            }
            else
            {
            {
                echo "document.getElementById('click2').click();";
                //$url = 'login.php';
          //  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

            }
        }


}
}

?>
