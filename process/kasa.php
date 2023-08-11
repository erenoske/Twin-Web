<?php 
require_once '../functions.php';
require_once '../config/config.php';

if ( !isset($_SESSION['login']) ) {
	header('location:../login.php');
}

if($_POST)
{
    $text = $_POST['text'];
    $gelir = floatval($_POST['gelir']);
    $gider = floatval($_POST['gider']);
    $ay = $_POST['ay'];
    $year = $_POST['year'];
    
    $kasay = ($gelir - $gider);

    // En son eklenen kaydın ID'sini al
    $sql = "SELECT id, kasa FROM finances ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $lastInsertedID = $row["id"];
        $kasax= $row["kasa"];
    } else {
        $lastInsertedID = 0; // Kayıt yoksa
        $kasax = 0;
    }

    $kasa = (floatval($kasax) + floatval($kasay));
    

    $sql = "INSERT INTO finances (text, gelir, gider, kasa, ay, yıl) VALUES (?,?,?,?,?,?)";
    $stmt= $db->prepare($sql);
    $stmt->execute([$text, $gelir, $gider, $kasa, $ay, $year]);
    header("location: ../kasa.php?ay=$ay&yıl=$year");
    exit();
}