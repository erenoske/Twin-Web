<?php
include_once ("./config/config.php"); 

if(!(isset($_SESSION["login"]))) {
    header("location:./login.php");
}
else {
    $kullanici_id = $_SESSION['login'];
	$kullanici = DB::getRow("SELECT * FROM users WHERE id=?",array( $kullanici_id ));
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <!-- theme meta -->
    <meta name="theme-name" content="quixlab" />
  
    <title>Admin - Panel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        div.dataTables_wrapper div.dataTables_filter input {
    margin-left: 0.5em;
    display: inline-block;
    width: auto;
    border: 1px solid rgba(0, 0, 0, 0.125);
}
.pagination {
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: 0.25rem;
    justify-content: flex-end;
}
.flex-1 {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}
.flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 1em;
}
    </style>
</head>