<?php

include "connection.php";
include "SMTP.php";
include "PHPMailer.php";
include "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_GET["e"])) {

    $email = $_GET["e"];
    $user_rs = Database::search("SELECT * FROM `user` WHERE `email`= '" . $email . "'");
    $user_num = $user_rs->num_rows;

    if ($user_num == 1) {

        $user_data = $user_rs->fetch_assoc();

        // $code = str_pad(random_int(0, 999999), 6, "0", STR_PAD_LEFT);

        $code = str_pad(random_int(0, 999999), 6, "0", STR_PAD_LEFT);
        Database::iud("UPDATE `user` SET `vcode`= '" . $code . "' WHERE `email`= '" . $email . "'");

        // email code
        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'savindunimesh84@gmail.com';
        $mail->Password = 'wjkccprwppwtcgel';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('savindunimesh84@gmail.com', 'nimesh');
        $mail->addReplyTo('savindunimesh84@gmail.com', 'nimesh');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'vananebiznet forgot password verification code';
        $bodyContent = '<h1 style = "color:blue" >your verification code is' . $code . '</h1>';
        $bodyContent .= '******************';
        $mail->Body    = $bodyContent;

        if (!$mail->send()) {
            echo ("verification sending failed.");
        } else {
            echo ("success");
        }
    } else {
        echo ("Invalid Email Address");

    }
} else {
    echo ("Please enter your email address.");
}
