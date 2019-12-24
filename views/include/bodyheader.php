<!-- ÜST MENÜ BAŞLANGIÇ -->
<header class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <em><h1><a class="nav-item text-white" style="font-family: DHF-Story" href="anasayfa.php">Fobizm.</a></h1></em>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="btn <?= basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == 'anasayfa.php' ? 'text-dark alert-light' : 'text-light' ?>" href="anasayfa.php">Anasayfa</a>
                </li>
                <li class="nav-item">
                    <a class="btn <?= basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == 'fobi.php' ? 'text-dark alert-light' : 'text-light' ?>" href="fobi.php">Fobi</a>
                </li>
                <li class="nav-item">
                    <a class="btn <?= basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == 'travma.php' ? 'text-dark alert-light' : 'text-light' ?>" href="travma.php">Travma</a>
                </li>
                <li class="nav-item">
                    <a class="btn <?= basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == 'contactform.php' ? 'text-dark alert-light' : 'text-light' ?>" href="contactform.php">İletişim</a>
                </li>
                <li class="nav-item">
                    <a class="btn <?= basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == 'contactform.php' ? 'text-dark alert-light' : 'text-light' ?>" href="../api/logout.php">Çıkış yap</a>
                </li>

            </ul>
        </div>
    </div>
</header>
<!-- ÜST MENÜ BİTİŞ-->