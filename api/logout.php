<?php
include "models/User.php";
json_encode(User::logout());
header("location: ../views/");