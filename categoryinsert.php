<?php
include('./vendors/conniction.php');
if(isset($_POST['add'])){
    $sql=("INSERT INTO tags(tag) VALUES(?)");
    $res=$conn->prepare($sql);
    $res->execute([$_POST['tag']]);
}
header("Location:./categories.php");
?>
