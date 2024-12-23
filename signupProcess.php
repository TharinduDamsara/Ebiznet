<?php

include "connection.php";


$fname = $_POST["f"];
$lname = $_POST["l"];
$email = $_POST["e"];
$password = $_POST["p"];
$mobile = $_POST["m"];
$gender = $_POST["g"];


if (empty($fname)) {
    echo "Please Enter Your First Name.";
} else if (strlen($fname) > 50) {
    echo "First Name must contain LESS THAN 50 Characters.";
} else if (empty($lname)) {
    echo "Please Enter Your Last Name.";
} else if (strlen($lname) > 50) {
    echo "Last Name must contain LESS THAN 50 Characters.";
} else if (empty($email)) {
    echo "Please Enter Your Email Address.";
} else if (strlen($email) > 100) {
    echo "Email must contain LESS THAN 100 Characters.";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid Email Address.";
} else if (empty($password)) {
    echo "Please Enter Your Password.";
} else if (strlen($password) < 5 || strlen($password) > 20) {
    echo "Password Must contain between 5 to 20 characters.";
} else if (empty($mobile)) {
    echo "Please Enter Your Mobile Number.";
} else if (strlen($mobile) != 10) {
    echo "Mobile Number Must contain exactly 10 characters.";
} else if (!preg_match("/07[0-9]{8}/", $mobile)) {
    echo "Invalid Mobile Number.";
} else {


    $rs = Database::search("SELECT * FROM `user` WHERE `email` = '" . $email . "' OR `mobile` = '" . $mobile . "'");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo "User With The Same Email Address or Mobile Number already exists.";
    } else {

     
        $d = new DateTime();
        $tz = new DateTimeZone("Asia/Colombo");
        $d->setTimezone($tz);
        $date = $d->format("Y-m-d H:i:s");

      
        // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

   
        Database::iud("INSERT INTO `user` 
            (`fname`, `lname`, `email`, `password`, `joined_date`, `mobile`, `user_status_status_id`, `gender_gender_id`) 
            VALUES 
            ('" . $fname . "', '" . $lname . "', '" . $email . "', '" . $hashed_password . "', '" . $date . "', '" . $mobile . "', '1', '" . $gender . "')");

        echo "success";
    }
}
?>
