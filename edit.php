<?php
session_start();
require './my_db.php';
connect_db();
$member = array();
// if (!isset($_SESSION['login'])) {
//     header("location: index.php");
// }
if (isset($_POST['data-edit'])) {
    $id = $_POST['id'];
    $name = $_POST['cf-name'];
    $gender  = $_POST['cf-gender'];;
    $email  = $_POST['cf-email'];
    $phone  = $_POST['cf-phone'];
    $age  = $_POST['cf-age'];
    $sql = "UPDATE member SET name ='$name', gender = '$gender', email = '$email',phone = '$phone',age = '$age' WHERE member_id = '$id'";
    mysqli_query($conn, $sql);
    $sql2 = "select member_id, name,gender,email,phone,age from member where member_id = $id";
    $query = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        $member = $row;
        $_SESSION['member'] = json_encode($member);
    }
    header("location: memberprofile.php");
}
disconnect_db();