<?php

include("./config.php");

$acc = $_POST['acc'];
$sql_check_acc = "SELECT * FROM `users` WHERE `account` = '$acc'";

if ($_POST) {
    $result = mysqli_query($link, $sql_check_acc);
    $nums = mysqli_num_rows($result);
    if ($nums > 0) {
        echo 1;
    }
    if ($nums == 0) {
        echo 0;
    }
}
