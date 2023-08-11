<?php
if ( $_POST ) {
    require_once '../functions.php';
    require_once '../config/config.php';

    $username = $_POST['username'];
    $sifre = $_POST['password'];

    $recaptchaResponse = $_POST["g-recaptcha-response"];

    $userIp = get_client_ip();

    $request = "https://www.google.com/recaptcha/api/siteverify?secret={$secretkey}&response={$recaptchaResponse}&remoteip={$userIp}";
    $content = file_get_contents($request);
    $json = json_decode($content);
    
    if($json->success == "true") {
     $sql = "SELECT * FROM users WHERE isim='$username'";
	 $result = mysqli_query($conn, $sql);
	 if (mysqli_num_rows($result) > 0) {
	 	while ($row = mysqli_fetch_assoc($result)) {
	 	$hashedPwd = $row['sifre']; }}
 
     if(password_verify($sifre, $hashedPwd)) {
         $kontrol = DB::getRow("SELECT * FROM users WHERE isim=? AND sifre=?",array(
             $username,
             $hashedPwd
         ));
         if ($kontrol) {
             $_SESSION ['login'] = $kontrol->id;
             header("Location:../index.php");
             die();
         } else {
            header ("location:../login.php?error=1");  
         }
     } else {
        header ("location:../login.php?error=2");
     }
    } else {
       header ("location:../login.php?robot=1");
    }
}