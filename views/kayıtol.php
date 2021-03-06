<?php
require_once ("../api/models/User.php");
if (User::userSigned()){
    header("location: anasayfa.php");

}

?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <title>Fobizm. -Register </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Css dosyalarının çağırılması-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Şablon için özel yazı tipleri -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Şablon için özel stiller -->
    <link href="css/grayscale.min.css" rel="stylesheet">
	
</head>

<body >
	
<div class="limiter">
    <div class="container-login100" 
		 style="background-image: url('img/daglar.jpg');  background-size: 100% 100%;">
         <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
			<!-- form başlangıç--> 
            <form class="login100-form validate-form flex-sb flex-w">
				<!-- form başlık-->
				<span class="login100-form-title p-b-32 text-center">Hesap Oluştur</span>
                <!-- form kullanıcı adı giriş-->
                <span class="txt1 p-b-11">Kullanıcı Adı</span>
                <div class="wrap-input100 validate-input m-b-36" data-validate ="Kullanıcı adınızı Giriniz">
                    <input class="input100" type="name" name="username" id="username" >
                    <span class="focus-input100"></span>
                </div>
                <!-- form email giriş-->
                <span class="txt1 p-b-11">E-mail</span>
                <div class="wrap-input100 validate-input m-b-36" data-validate = "E-postanızı Giriniz">
                    <input class="input100" type="email" name="email" id="mail" >
                    <span class="focus-input100"></span>
                </div>
                <!-- form şifre giriş-->
                <span class="txt1 p-b-11">Şifre</span>
                <div class="wrap-input100 validate-input m-b-12" data-validate = "Şifrenizi Giriniz">
					<span class="btn-show-pass"><i class="fa fa-eye"></i></span>
                    <input class="input100" type="password" name="pass" id="password-1">
                    <span class="focus-input100"></span>
                </div>
                <!-- form şifre tekrar giriş-->
                <span class="txt1 p-b-11">Şifre Tekrar</span>
                <div class="wrap-input100 validate-input m-b-12" data-validate = "Tekrar Şifrenizi Giriniz">
					<span class="btn-show-pass"><i class="fa fa-eye"></i></span>
                    <input class="input100" type="password" name="pass2" id="password-2">
                    <span class="focus-input100"></span>
                </div>
                <!-- form giriş yap link-->
                <div class="flex-sb-m w-full p-b-48">
                  <a class="txt3">Zaten bir hesabınız var mı ?</a>
                  <a href="girisyap.php" class="link">Giriş Yap</a>      
                </div>
                <!-- form Kayıt ol btn-->
                <div class="container-login100-form-btn">
                    <a onclick="uyeol(event)" class="login100-form-btn">ONAYLA </a>
                </div>
            </form>
			<!-- form bitiş--> 
        </div>
    </div>
</div>
<!-- Footer -->
<?php include "include/footer.php" ?>
  <!-- Footer Bitiş-->

<!-- JAVASCRIT DOSYALARININ BAĞLANTISI -->

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/animsition/js/animsition.min.js"></script>
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<script src="vendor/countdowntime/countdowntime.js"></script>
<script src="js/main.js"></script>
<script src="js/QueryThrower.js"></script>
<script>
    uyeol = function(event) {
        if (document.getElementById("password-1").value == document.getElementById("password-2").value){
            event.target.style.display = "none";
            throwQuery("../api/createUser", {
                username: document.getElementById("username").value,
                password: document.getElementById("password-1").value,
                password_repeat: document.getElementById("password-2").value,
                mail: document.getElementById("mail").value,
            }, "GET", (data) => {
                data = JSON.parse(data);
                if (data.status == false) {
                    alert(data.message);
                }
                location.reload();
            })
        }
        else {
            alert("Şifreler yanlış");
            event.target.style.display = "block";
        }

    }
</script>

</body>
</html>