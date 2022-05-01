<?php

include("./config.php");

$uname  = $_POST['username'];
$sql_check_n = "SELECT * FROM `users` WHERE `username` = '$uname'";

if ($_POST) {
    $result = mysqli_query($link, $sql_check_n);
    $nums = mysqli_num_rows($result);
    if ($nums > 0) {
        echo 1;
    }
    if ($nums == 0) {
        echo 0;
    }
}
