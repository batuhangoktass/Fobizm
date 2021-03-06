<?php ?>
<!--İletişim-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fobizm. - İletişimFormu</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--CSS Bağlantıları-->
    <link rel="icon" type="image/png" href="img/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
    <link rel="stylesheet" type="text/css" href="css/util_contact.css">
    <link rel="stylesheet" type="text/css" href="css/main_contact.css">

</head>

<body>

<?php include "include/bodyheader.php" ?>

<!-- İletişim form Başlangıç -->
<div class="container-contact100 mt-5"
     style="background-image: url('img/signup.jpg');  background-size: 100% 100%;">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form">
            <span class="contact100-form-title">Bize Ulaşın</span>

            <div class="wrap-input100 validate-input bg1" data-validate="Lütfen bir isim giriniz">
                <span class="label-input100">İSİM *</span>
                <input class="input100" type="text" name="name" placeholder="Size hitap etmemizi istediğiniz isim">
            </div>

            <div class="wrap-input100 validate-input bg1" data-validate = "Lütfen geçerli bir eposta adresi giriniz (@)">
                <span class="label-input100">Email *</span>
                <input class="input100" type="text" name="email" placeholder="Email adresiniz ">
            </div>

            <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
                <span class="label-input100">Konu Başlığı *</span>
                <div>
                    <select class="js-select2" name="service">
                        <option>Öneri</option>
                        <option>İstek</option>
                        <option>Şikayet</option>
                        <option>Fobi Ekle</option>
                        <option>Travma Ekle</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>

            <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Mesaj kısmı boş bırakılamaz">
                <span class="label-input100">Mesajınız *</span>
                <textarea class="input100" name="message" placeholder="Mesajınızı buraya giriniz..."></textarea>
            </div>

            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
						<span>
							GÖNDER
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
                </button>
            </div>
        </form>
    </div>
</div>
<!-- İletişim form bitiş -->
<!--J.Script bağlantıları ve eposta gönderme scriptleri-->

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min_contact.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min_contact.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min_contact.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<script>
    $(".js-select2").each(function(){
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });


        $(".js-select2").each(function(){
            $(this).on('select2:close', function (e){
                if($(this).val() == "Please chooses") {
                    $('.js-show-service').slideUp();
                }
                else {
                    $('.js-show-service').slideUp();
                    $('.js-show-service').slideDown();
                }
            });
        });
    })
</script>
<!--J.Script bağlantıları-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<script src="vendor/countdowntime/countdowntime.js"></script>
<script src="vendor/noui/nouislider.min.js"></script>
<script>
    var filterBar = document.getElementById('filter-bar');

    noUiSlider.create(filterBar, {
        start: [ 1500, 3900 ],
        connect: true,
        range: {
            'min': 1500,
            'max': 7500
        }
    });

    var skipValues = [
        document.getElementById('value-lower'),
        document.getElementById('value-upper')
    ];

    filterBar.noUiSlider.on('update', function( values, handle ) {
        skipValues[handle].innerHTML = Math.round(values[handle]);
        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
    });
</script>
<script src="js/main_contact.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

<!-- Footer -->
<?php include "include/footer.php" ?>
<!-- Footer Bitiş-->
</body>
</html>
