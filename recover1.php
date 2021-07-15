<?php
include "config.php";

$uname = mysqli_real_escape_string($con,$_POST['username']);
$recover = mysqli_real_escape_string($con,$_POST['password']);


if ($uname != "" && $recover != ""){

    $sql_query = "SELECT count(*) as cntUser FROM account WHERE username='".$uname."' and recover='".$recover."'";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        $_SESSION['uname'] = $uname;
        echo 1;
    }else{
        echo 0;
    }

}