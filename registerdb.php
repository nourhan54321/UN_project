<?php
include('./vendors/conniction.php');
if(isset($_POST['sub'])){

    $rse=isset($_POST['active']);
    $sql=("INSERT INTO users(Name,username,email,active,passord)VALUES(?,?,?,?)");
    $res=$conn->prepare($sql);
    $res->execute([$_POST["fullname"],$_POST["user-name"],$_POST["email"],$_POST["password"]]);
    }
header("Location:  ../index.php");
exit();
?>