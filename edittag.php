<?php
include('./vendors/conniction.php');

$id=$_GET['id'];
if(isset($_POST['sub'])){
   $sql=("UPDATE tags SET tag=? WHERE tag_id=?");
   $rst=$conn->prepare($sql);
   $rst->execute([$_POST['tag'],$id]);
   header("location: categories.php");
}
 
?>