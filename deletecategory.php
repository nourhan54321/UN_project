<?php
include('./vendors/conniction.php');
$id=$_GET['id'];
$sql=("DELETE FROM tags where tag_id=?");
$res=$conn->prepare($sql);
$res->execute([$id]);
header("Location:./categories.php");
?>
