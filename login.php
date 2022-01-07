<?php
require './my_db.php';
connect_db();
session_start();
header('Content-Type: text/html; charset=UTF-8');
$member = array();
//$msg = '';
//Nhập dữ liệu từ Login Form:
if (isset($_POST['submit-login'])) 
{
$username = $_POST['cf-username'];
$password = $_POST['cf-password'];
$sql = "select * from member where username = '$username' && password = '$password'";
$query = mysqli_query($conn, $sql);
$member = array();  
$sql1 = "select * from trainer where username = '$username' && password = '$password'";
$query1 = mysqli_query($conn, $sql1);
$trainer = array();
$sql2 = "select * from admin where username = '$username' && password = '$password'";
$query2 = mysqli_query($conn, $sql2);
$admin = array();
}
//Check Admin: nếu đúng thì mở Admin Page
//Check Member: nếu đúng thì mở member page    
if(mysqli_num_rows($query2)>0){
    $_SESSION['login'] = 'true';
    $row = mysqli_fetch_assoc(($query2));
    $admin = $row;
    $_SESSION['member'] = json_encode($admin);
    header("location: ./admin/admin.php");
    
    }
else {
    //Check Member: nếu đúng thì mở member page    
    if(mysqli_num_rows($query)>0){
        $_SESSION['login'] = 'true';
        $row = mysqli_fetch_assoc(($query));
        $member = $row;
        $_SESSION['member'] = json_encode($member);
        header("location: member.php");
        
        }
    //Check Trainer: nếu đúng thì mở trainer page      
    if(mysqli_num_rows($query1)>0){
        $_SESSION['login'] = 'true';
        $row1 = mysqli_fetch_assoc(($query1));
        $trainer = $row1;
        $_SESSION['trainer'] = json_encode($trainer);
        header("location: trainer.php");
        } 
    else
    {
        echo "Không có dữ liệu";
        return; 
    }      
}    
disconnect_db();
?>