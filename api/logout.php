<?php
include "models/User.php";
echo json_encode(User::logout());
