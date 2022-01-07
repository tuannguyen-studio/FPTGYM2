<?php
require './my_db.php';
connect_db();
if (isset($_POST['data-register'])) {
    $name = $_POST['cf-name'];
    $gender  = $_POST['cf-gender'];;
    $email  = $_POST['cf-email'];
    $phone  = $_POST['cf-phone'];
    $age  = $_POST['cf-age'];
    $username  = $_POST['cf-username'];
    $password = md5($_POST['cf-password']);
    $sql = "INSERT INTO member VALUES('','$name','$gender','$email','$phone','$age','$username','$password','member','','')";
    mysqli_query($conn, $sql);
    header("location: index.php");
} else {
    echo 'not working';
}
disconnect_db();