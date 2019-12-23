<?php
include "models/User.php";
if (!empty($_GET["username"]) && !empty($_GET["password"]) && !empty($_GET["mail"]))
    echo json_encode(User::createNewUser($_GET["username"],$_GET["password"],$_GET["password"],$_GET["mail"]));