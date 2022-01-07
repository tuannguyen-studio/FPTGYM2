<?php
global $conn;
//Hàm kết nối database
function connect_db(){
    global $conn;
    if (!$conn) {
        $conn = mysqli_connect('localhost','root','','fptgym')
            or die('Cannot connect database');
        mysqli_set_charset($conn, 'utf8');
    }
}
//Hàm đóng kết nối database
function disconnect_db(){
    global $conn;
    if ($conn) {
        mysqli_close($conn);
    }
}