<?php
include "config.php";

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['uname']);
    $password = mysqli_real_escape_string($con,$_POST['pass']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from register where Username='".$uname."' and Password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: home.php');
        }else{
            echo "Invalid username and password";
        }

    }

}