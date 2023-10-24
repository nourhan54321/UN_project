<?php
include('./vendors/conniction.php');
$id = $_GET['id'];

if (isset($_POST['sub'])) {
    $rse=isset($_POST['active']);
    $sql = ("UPDATE users SET Name=?,username=?, email=?, active=?, passord=?  WHERE id=?");
    $rst = $conn->prepare($sql);
    $rst->execute([$_POST['fn'],$_POST["user-name"],$_POST['email'], $rse,$_POST["password"], $id]);
 
    header("Location: users.php");
}
 
?>