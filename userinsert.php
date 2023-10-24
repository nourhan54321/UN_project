<?php
include('./vendors/conniction.php');
if(isset($_POST['sub'])){

    $rse=isset($_POST['active']);
    $sql=("INSERT INTO users(Name,username,email,active,passord)VALUES(?,?,?,?,?)");
    $res=$conn->prepare($sql);
    $res->execute([$_POST["fullname"],$_POST["user-name"],$_POST["email"],$rse,$_POST["password"]]);
    header("Location:  ./users.php");
    }
 
//exit();
?>