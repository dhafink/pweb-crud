<?php
include("config.php");

$id = $_GET['id'];
$sql = "DELETE FROM calon_siswa WHERE id=$id";
$query = mysqli_query($conn, $sql);

header('Location: list-siswa.php');
?>
