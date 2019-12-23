<?php
include "models/User.php";
if (!empty($_GET["username"]) && !empty($_GET["password"]))
    echo json_encode(User::login($_GET["username"], $_GET["password"]));
else
    echo  json_encode(["SAVUNMADIM, ÇIKAR GÖSTER!"]);