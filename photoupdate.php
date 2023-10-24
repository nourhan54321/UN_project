<?php
include('./vendors/conniction.php');
$id = $_GET['id'];

if (isset($_POST['sub'])) {
    $rse=isset($_POST['active']);
    $sql = ("UPDATE photos SET datte=?,title=?, license=?, dimension=?, format=?,active=?,image=?,tag=?,tag_id=?  WHERE id=?");
    $rst = $conn->prepare($sql);
    $ta = $_POST['tag'];
    $stmt = $conn->prepare("SELECT tag_id FROM tags WHERE tag =?");
    $stmt->execute([$ta]);
    $s = $stmt->fetchColumn();
    $rst->execute([$_POST['dt'],$_POST["title"],$_POST['license'],$_POST['dimension'],$_POST['format'] ,$rse,$_POST["image"],$_POST['tag'],$ta, $id]);
 
    header("Location: photos.php");
}
 
?>