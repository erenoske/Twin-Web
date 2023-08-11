<?php
require_once '../functions.php';
require_once '../config/config.php';

if ( !isset($_SESSION['login']) ) {
	header('location:../login.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM finances WHERE id=$id";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 while ($row = mysqli_fetch_assoc($result)) {
 $gelir = $row['gelir'];
 $gider = $row['gider'];
 $ay = $row['ay'];
 $year = $row['yıl'];
}}

$toplam = ($gelir - $gider);

$sql = "UPDATE finances SET kasa = kasa - $toplam WHERE id > $id";
$result = mysqli_query($conn, $sql);

if($result) {
    $sql = "DELETE FROM finances WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    
    
    if ($result) {
            header("location:../kasa.php?ay=$ay&yıl=$year");
            exit();
    }
}