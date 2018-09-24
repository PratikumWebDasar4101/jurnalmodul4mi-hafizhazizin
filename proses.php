<?php
session_start();

$foto = $_FILES['file']['name'];
$tmp_foto = $_FILES['file']['tmp_name'];
$dir = 'foto/';
$target = $dir.$foto;

$_SESSION['hobby'] = $_POST['hobby'];
$_SESSION['file'] = $target;
if(!move_uploaded_file($tmp_foto, $target)){
    die("gagal upload");
}
header("location:halamanakhir.php");
?>
