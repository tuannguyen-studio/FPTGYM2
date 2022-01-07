<?php
$conn = new mysqli('localhost','root','','gym') or die("Kết nối thất bại");
                        mysqli_query($conn,'SET NAMES UTF8');

                        if(isset($_GET['id'])){
                            $id = $_GET['id'];
                            $time = $_GET['time'];
                            $type = $_GET['type'];
                            $query ="delete from dondk where userName = '$id'";
                            mysqli_query($conn,$query) or die("Error");
                            $query1 ="update khachhang set ngayBD = '$time',GoiTap = '$type' where userName = '$id'";
                            mysqli_query($conn,$query1) or die("Error");                           
                            header('location:mdi.php');
                        }
?>