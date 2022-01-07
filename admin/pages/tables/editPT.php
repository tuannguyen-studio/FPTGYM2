<?php
    $conn = new mysqli('localhost','root','','gym') or die("Kết nối thất bại");
    mysqli_query($conn,'SET NAMES UTF8');

?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Đồ Án CC</title>
  
    <!-- Bootstrap CSS -->
    <link href="../../css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/bootstrap.min.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/modal.css">
    <link rel="stylesheet" href="../../css/button.css">
    <link rel="stylesheet" href="../../css/course.css">
    <link rel="stylesheet" href="../../css/submit.css">
</head>
<body>
<?php
    if (isset($_SESSION['userName']) && $_SESSION['userName']){
       }
       else{
       die("error");
       }
       ?> 
<?php       
      if(isset($_GET['id'])){
        $id = $_GET['id'];
      $sql = "select * from pt where maPT = '$id'";
     $rs = mysqli_query($conn,$sql);
     if( mysqli_num_rows($rs)>0)
     {
     $r = mysqli_fetch_assoc($rs);
     $tenPT = $r['tenPT'] ;
     $GioiTinh = $r['GioiTinh'];
     $SDT = $r['SDT'];
     $GiaThue = $r['GiaThue'];
     }
    }
?>
    <form class="form-sample" method = "post">
        <p class="card-description">
          Personal info
        </p>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Họ Tên</label>
              <div class="col-sm-9">
                <input name="hoten" type="text" value="<?php echo $tenPT ?>" class="form-control" />
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Giới Tính</label>
              <div class="col-sm-9">
                <select name="gioitinh" class="form-control">
                <option><?php echo "$GioiTinh" ?></option>
                  <option>Nam</option>
                  <option>Nữ</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Số Điện Thoại</label>
              <div class="col-sm-9">
                <input name ="sdt" class="form-control" value="<?php echo $SDT ?>"  placeholder="Number"/>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Giá Thuê</label>
                  <div class="col-sm-9">
                    <input name="giathue"  class="form-control" value="<?php echo $GiaThue ?>"  placeholder="VND"/>
                  </div>
                </div>
              </div>
        </div>
        <?php 
            if(isset($_POST['accept'])){
              $tenPT = $_POST['hoten'];
              $SDT = $_POST['sdt'];
              $GioiTinh = $_POST['gioitinh'];
              $GiaThue = $_POST['giathue'];
              $query= "update pt set tenPT = N'$tenPT',GioiTinh = N'$GioiTinh',SDT = N'$SDT',GiaThue = N'$GiaThue' where maPT = '$id'";
              mysqli_query($conn,$query) or die*("Error");
              header('location:formquanliuser.php');
            }
        ?>      
      </div>
      <br><br>
      <div class="submit__info">
        <button class="submit__btn"><a href="formquanliuser.php">TRỞ LẠI</a></button>
        <button name ='accept' class="submit__btn">XÁC NHẬN</button>
        </form>

<script src="../../js/jquery.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/parallax.js"></script>
<script src="../../js/wow.js"></script>
<script src="../../js/main.js"></script>
<script src="../../js/tab.js"></script>
</body>
</html>