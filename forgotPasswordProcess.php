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
        $fname = $user_data["fname"];

        $user_data = $user_rs->fetch_assoc();

        // $code = str_pad(random_int(0, 999999), 6, "0", STR_PAD_LEFT);

        $code = str_pad(random_int(0, 999999), 6, "0", STR_PAD_LEFT);
        Database::iud("UPDATE `user` SET `vcode`= '" . $code . "' WHERE `email`= '" . $email . "'");

        // EMAIL CODE

        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'vananebiznet@gmail.com';
        $mail->Password = 'xktx pbnt dtvc nbtz';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('vananebiznet@gmail.com', 'VananeBiznet Reset Password');
        $mail->addReplyTo('vananebiznet@gmail.com', 'VananeBiznet Reset Password');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Forgot password verification code';
        $bodyContent = '
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            overflow: hidden;
        }

        .header {
            background-color: #112e42;
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }

        .header img {
            max-width: 50px;
            margin-bottom: 10px;
        }

        .content {
            padding: 20px;
            color: #333333;
            text-align: center;
        }

        .content h1 {
            margin-top: 0;
        }

        .verification-code {
            font-size: 24px;
            font-weight: bold;
            background-color: #f3f3f3;
            padding: 10px 20px;
            display: inline-block;
            margin: 20px 0;
            border-radius: 5px;
            color: #4A90E2;
        }

        .footer {
            background-color: #f3f3f3;
            color: #777777;
            text-align: center;
            padding: 10px;
            font-size: 12px;
        }

        .footer a {
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="https://png.pngtree.com/png-vector/20240531/ourmid/pngtree-colorful-bird-logo-design-illustration-png-image_12584961.png" alt="Logo">
            <h1>Email Verification</h1>
        </div>
        <div class="content">
            <p>Hello <strong>' . $fname . '</strong>,</p>
            <p>Thank you for joining us! We need a little more information to update your New Password, including the confirmation of your email.</p>
            <p>Please use the verification code below to complete your verification:</p>
            <div class="verification-code">' . $code . '</div>
        </div>
        <div class="footer">
            <p>If you didn’t request this email, please ignore it or contact our support VananeBiznet team.</p>
            <p><a href="#">Contact Support</a> | <a href="#">Privacy Policy</a></p>
        </div>
    </div>
</body>

</html>
        '; //content of the email

        $mail->Body    = $bodyContent;

        if (!$mail->send()) {
            echo ("Verification Sending Failed.");
        } else {
            echo ("success");
        }

        // EMAIL CODE

    } else {
        echo ("Invalid Email Address");
    }
} else {
    echo ("Please Enter Your Email Address.");
}
