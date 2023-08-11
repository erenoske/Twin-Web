<?php include_once ("./config/config.php"); ?>
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Panel - Giriş Yap</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
		<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"async defer></script>
    
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    



    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <form class="mt-5 mb-5 login-input" method="POST" action="./process/login.php">
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control" placeholder="Kullanıcı Adı">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Şifre">
                                    </div>
                                    <div class="form-group">
                                     <center><div class="g-recaptcha" style="margin-top: 5px; margin-bottom: 10px;" data-sitekey="<?php echo $sitekey ?>"></div></center>
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Giriş Yap</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
    <script>
     $(function(){
       function rescaleCaptcha(){
         var width = $('.g-recaptcha').parent().width();
         var scale;
         if (width < 302) {
           scale = width / 302;
         } else{
           scale = 1.0; 
         }
     
         $('.g-recaptcha').css('transform', 'scale(' + scale + ')');
         $('.g-recaptcha').css('-webkit-transform', 'scale(' + scale + ')');
         $('.g-recaptcha').css('transform-origin', '0 0');
         $('.g-recaptcha').css('-webkit-transform-origin', '0 0');
       }
     
       rescaleCaptcha();
       $( window ).resize(function() { rescaleCaptcha(); });
     
     });
	</script>
</body>
</html>
