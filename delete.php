<?php
include 'conn.php';
$id = $_GET['id'];
$q = "DELETE from `crudtable` where id = $id";
mysqli_query($conn,$q);
header('location:display.php');
?>