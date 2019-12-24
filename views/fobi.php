<?php
require_once ("../api/models/User.php");
if (!User::userSigned()){
    header("location: girisyap.php");

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Üst Başlık -->
    <title>Fobizm. - Fobiler</title>
    <link rel="icon" type="image/png" href="img/icons/favicon.ico"/>
    <!-- Css Bağlantı -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Stil Klasör Bağlantısı-->
    <link href="css/heroic-features.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
</head>

<body>

<?php include "include/bodyheader.php" ?>

<!-- Sayfa başlığı Başlangıç-->
<div class="container mt-5">
    <div class="row text-center">
        <h2 style="font-weight: 500;">FOBİLER</h2>
    </div>
</div>
<!-- Sayfa başlığı Bitiş-->
<!-- Container Başlangıç -->
<div class="container mt-5">
    <!-- Fobi Kutuları Başlanıç -->
    <div class="row text-center">
        <!-- Fobi1 -->

        <?php
        include "../api/_getMentalIssues.php";
        $issues = MentalIssuesHelper::getMentalIssues(1);
        foreach ($issues as $issue){
            $issue_id = $issue['mental_issue_id'];
            $issue_image = $issue['thumb_img_url'];
            $issue_title = $issue['issue_name'];
            echo
            "
                <div class=\"col-lg-3 col-md-6 mb-4\">
                    <div class=\"card h-100\">
                    <img src=\" $issue_image \" alt=\"\" height=\"200\" class=\"card-img-top\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\"> $issue_title </h4>
                <!--    <h4 class=\"card-title\">( Araknofobi )&nbsp;</h4> -->
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"mental_issue_content.php?issue_id=$issue_id\" class=\"btn btn-dark\">Keşfet&nbsp;</a>
                    </div>
                </div></div>";
        }

        ?>
        <!-- Fobi2 -->
<!--        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
                <img src="img/Fobiler/yükseklik.jpg" alt="" height="200" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title"> Yükseklik Fobisi</h4>
                    <h4 class="card-title">( Acrophdoia )</h4>
                </div>
                <div class="card-footer">
                    <a href="fobi2.php" class="btn btn-dark">Keşfet&nbsp;</a>
                </div>
            </div>
        </div>-->
        <!-- Fobi3 -->
<!--        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
                <img src="img/Fobiler/yol.jpg" alt="" height="200" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title"> Yoldan Karşıya Geçme Fobisi</h4>
                    <h4 class="card-title">( Agirafobi )&nbsp;</h4>
                </div>
                <div class="card-footer">
                    <a href="fobi3.php" class="btn btn-dark">Keşfet&nbsp;</a>
                </div>
            </div>
        </div>-->
    </div>
    <!-- Fobi Kutuları Bitiş -->
    <!-- Fobi Ekle Paneli Başlangıç -->
    <section class="jumbotron my-4">
        <h1 class="display-3">&nbsp;Fobilerinizi Bize İletin</h1>
        <p class="lead">Hayatınızda zincir oluşturmuş , yaşantınızı kısıtladığını düşündüğünüz fobilerinizi bizlere "Fobi Ekle" kısmından ulaştırabilirsiniz.&nbsp;&nbsp;
        </p>
        <a href="contactform.php" class="btn btn-dark btn-lg">Fobi Ekle</a>
    </section>
    <!-- Fobi Ekle Paneli Bitiş -->
</div>
<!-- Container Bitiş -->

<!-- Footer -->
<?php include "include/footer.php" ?>
<!-- Footer Bitiş-->
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
