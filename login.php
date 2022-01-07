<?php
require './my_db.php';
connect_db();
session_start();
header('Content-Type: text/html; charset=UTF-8');
$member = array();
if (isset($_POST['submit-login'])) {
    $username = addslashes($_POST['cf-username']);
    $password = md5(addslashes($_POST['cf-password']));
    $sql = "select member_id, name,gender,email,phone,age from member where username = '{$username}' and password = '{$password}'";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        $_SESSION['login'] = 'true';
        $row = mysqli_fetch_assoc($query);
        $member = $row;
        $_SESSION['member'] = json_encode($member);
    }
    header("location: index.php");
    // die();
    disconnect_db();
}