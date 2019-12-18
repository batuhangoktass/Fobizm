<?php ?>
<!DOCTYPE html>
<html lang="tr">

<head>
	<title>Fobizm. - Şifremi Unuttum </title>
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
			 style="background-image: url('img/signup.jpg');  background-size: 100% 100%;">
			 <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<!-- form başlangıç--> 
				<form class="login100-form validate-form flex-sb flex-w">
					<!-- form başlık-->
					<span class="login100-form-title p-b-32 text-center">Şifre Yenileme</span>
                    <!-- form email giriş -->
					<span class="txt1 p-b-11">E-mail</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "E-postanızı Giriniz" >
						<input class="input100" type="email" name="email" >
						<span class="focus-input100"></span>
					</div>
					
					<!-- form giriş yap btn-->
					<div class="container-login100-form-btn">
						<a href="#" class="login100-form-btn">E-posta Doğrula</a>
					</div>
				</form>
				<!-- form bitiş-->
			</div>
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

</body>
</html>