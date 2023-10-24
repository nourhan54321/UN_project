<?php
include('./vendors/conniction.php');
if(isset($_POST['add'])){
    $re=isset($_POST['active']);
    $sql=("INSERT INTO photos(datte,title,license,dimension,format,active,image,tag,tag_id)VALUES(?,?,?,?,?,?,?,?,?)");
    $res=$conn->prepare($sql);
    $ta = $_POST['tag'];
    $stmt = $conn->prepare("SELECT tag_id FROM tags WHERE tag =?");
    $stmt->execute([$ta]);
    $s = $stmt->fetchColumn();
    $res->execute([$_POST['date'],$_POST['title'],$_POST['license'],$_POST['dimension'],$_POST['format'],$re,$_POST['image'],$_POST['tag'],$s]);
        header("Location:  ./photos.php");
        echo"<h1>".isset($_POST['active'])."</h1>";
}
 
?>