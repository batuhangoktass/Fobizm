<?php
require_once("../api/models/User.php");
if (!User::userSigned()) {
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
    <title>Fobizm. - Yas</title>
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
        <h4 style="...">Travmatik Yas</h4>

    </div>
</div>
<!-- Sayfa başlığı Bitiş-->
<!-- Container Başlangıç -->
<div class="container mt-4" style="min-height: 98vh">


    <?php
    require_once "../api/DatabaseConnection.php";
    require_once "../api/models/User.php";
    $db = DatabaseConnection::getInstance();
    $signedUser = User::getSignedUser();
    if (!empty($_GET["issue_id"])) {
        $q = $db->prepare("SELECT * FROM comment where  mental_issue_id = :mental;");
        if ($q->execute(array(":mental" => $_GET["issue_id"]))) {
            $all = $q->fetchAll(PDO::FETCH_ASSOC);
            foreach ($all as $item) {
                $userNm = User::getUser($item["user_id"])->getUsername();
                $comment = $item["comment_text"];
                echo "<div>
                        <p style=\"font-size: 20px\">
                        <b>@$userNm</b>
            $comment
                </p>
    </div>";
            }
        }
    }

    ?>
    <!-- TABLOLARI DİV leri BURAYA EKLE -->
    <!--    <div>
            <p style="font-size: 20px">
                Ablam kocası vefat ettiğinden beri sürekli olarak ellerini yıkayıp duruyor. Elleri yıkanmaktan tahriş olmuş
                durumda ve psikoloğa ya da
                psikiyatriye gitmeyi reddediyor. Eşi vefat edesiye kadar böyle bir sorunu yoktu ne yapacağımı bilmiyorum.
                Eşinin vefatının kendisinde bir travma yarattığını
                düşünüyorum.
            </p>
        </div>-->
    <div>Sorununuzu girin</div>
    <input type="text" id="comment">
    <button onclick="addComment(event)">Gönder</button>
</div>

<!-- Container Bitiş -->

<!-- Footer -->
<?php include "include/footer.php" ?>
<!-- Footer Bitiş-->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="js/vue.js"></script>
<script src="js/QueryThrower.js"></script>
<script src="js/QueryThrower.js"></script>
<script>
    addComment = function (event) {
        event.target.style.display = "none";
        throwQuery("../api/addComment", {
                comment: document.getElementById("comment").value,
                mental_issue_id: <?php echo $_GET["issue_id"]?>
            },
            "GET",
            (data) => {
                alert(data);
                data = JSON.parse(data);
                //event.target.style.display = "block";
                location.reload();
            });
    }
</script>
</body>

</html>

