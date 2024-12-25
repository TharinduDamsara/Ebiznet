<?php

include "connection.php";

$email = $_POST["e"];
$newPw = $_POST["n"];
$retypepw = $_POST["r"];
$vcode = $_POST["v"];

if (!isset($newPw)) {
    echo ("Please enter your new password.");
} else if (strlen($newPw) < 5 || strlen($newPw) > 20) {
    echo ("New Password must contain BETWEEN 5 to 20 Characters.");
} else if (!isset($retypepw)) {
    echo ("Please Retype your new password.");
} else if (strlen($retypepw) < 5 || strlen($retypepw) > 20) {
    echo ("New Password must contain BETWEEN 5 to 20 Characters.");
} else if ($newPw != $retypepw) {
    echo ("The passwords do not match.");
} else {

    $user_rs = Database::search("SELECT * FROM `user` WHERE `email` = '" . $email . "' AND `vcode` = '" . $vcode . "' ");
    $user_num = $user_rs->num_rows;

    if ($user_num == 1) {

        Database::iud("UPDATE `user` SET `password` = '" . $retypepw . "' WHERE `email` = '" . $email . "' AND `vcode` = '" . $vcode . "' ");
        echo ("success");
    } else {
        echo ("Invalid Verification Code.");
    }
}
