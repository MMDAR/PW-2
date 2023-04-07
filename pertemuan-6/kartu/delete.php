<?php 
//menarik data
require_once '../dbkoneksi.php';
$id=$_GET['iddel'];
$dbh-> query ("DELETE FROM kartu WHERE id=$id");
// redirect page
header('location:index.php');
?>