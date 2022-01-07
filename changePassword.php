<?php
session_start();
require './my_db.php';
connect_db();
$member = array();
// if (!isset($_SESSION['login'])) {
//     header("location: index.php");
// }
if (isset($_POST['new-password'])) {
    echo 'work';
    $id = $_POST['id'];
    $newPassword = md5($_POST['new-password']);
    $sql = "UPDATE member SET password ='$newPassword' WHERE member_id = '$id'";
    mysqli_query($conn, $sql);
    header("location: index.php");
}
disconnect_db();