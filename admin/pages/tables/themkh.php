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
        $time = date("d/m/Y");
       }
       else{
       die("error");
       }

       ?>

    <form  method ="post" class="form-sample">
        <p class="card-description">
          Personal info
        </p>
         <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
            <label  class="col-sm-3 col-form-label" >Mã KH</label>
              <div class="col-sm-9">
                <input name = "id" type="text"  class="form-control" placeholder = "KHxx"  />
              </div>
              </div>
              </div>
              <div class="col-md-6">
            <div class="form-group row">
              <label  class="col-sm-3 col-form-label" >Họ Tên</label>
              <div class="col-sm-9">
                <input name = "tenKH" type="text"  class="form-control" />
              </div>
              </div>
              </div>
              </div>
              <div class="col-md-6">
            <div class="form-group row">
              <div class="col-sm-6">
               <label class="col-sm-3 col-form-label">Gói Tập</label>
               <select name="GoiTap" class="form-control">
                  <option>1month</option>
                  <option>6month</option>
                  <option>1year</option>
                </select>   
              </div>   
                     
            </div>
          </div>
              <div class="col-md-6">
            <div class="form-group row">
              <label  class="col-sm-3 col-form-label" >Ngày Bắt Đầu</label>
              <div class="col-sm-9">
                <input name = "ngayBD" type="text" value="<?php echo "$time" ?>" class="form-control" />
              </div>
            </div>
          </div>                  
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Giới Tính</label>
              <div class="col-sm-9">
                <select name="GioiTinh" class="form-control"  >
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
                <input name="SDT" class="form-control" placeholder="Number"/>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tên Đường</label>
                  <div class="col-sm-9">
                    <input name="DiaChi" class="form-control"  placeholder="Số nhà tên đường"/>
                  </div>
                </div>
              </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Địa Chỉ</label>
              <div class="col-sm-9">
                <select name="Quan" class="form-control">
                  <option>Quận 1</option>
                  <option>Quận 2</option>
                  <option>Quận 3</option>
                  <option>Quận 4</option>
                  <option>Quận 5</option>
                  <option>Quận 6</option>
                  <option>Quận 7</option>
                  <option>Quận 8</option>
                  <option>Quận 9</option>
                  <option>Quận 10</option>
                  <option>Quận 11</option>
                  <option>Quận 12</option>
                  <option>Quận Tân Bình</option>
                  <option>Quận Tân Gò Vấp</option>
                  <option>Quận Bình Tân</option>
                  <option>Quận Thủ Đức</option>
                  <option>Quận Bình Thạnh</option>
                  <option>Huyện Củ Chi </option>
                  <option>Huyện Cần Giờ</option>
                  <option>Huyện Hóc Môn</option>
                  <option>Huyện Bình Chánh</option>
                  <option>Huyện Nhà Bè</option>
                </select>
              </div>
            </div>
          </div>
        </div>
<?php
      if(isset($_POST['accept'])){
          $id = $_POST['id'];
        $tenKH1 = $_POST['tenKH'];
        $GioiTinh1 = $_POST['GioiTinh'];
        $SDT1 = $_POST['SDT'];
        $DiaChi1 = $_POST['DiaChi'];
        $Quan1 = $_POST['Quan'];
        $GoiTap = $_POST['GoiTap'];
        $NgayBD = $_POST['ngayBD'];
        $query= "insert into khachhang values('$id',N'$tenKH1',N'$GioiTinh1',N'$SDT1',N'$DiaChi1',N'$Quan1',N'$GoiTap',N'$NgayBD',NULL)";
        mysqli_query($conn,$query) or die*("Error");
        echo "Thành Công!";  
}
?>
      </div>
      <br><br>
      <div class='submit__info'>
      <button class='submit__btn'><a href="formquanliuser.php">TRỞ LẠI </a></button>
        <button name= 'accept' class='submit__btn'>XÁC NHẬN</button>
        </form>
<script src="../../js/jquery.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/parallax.js"></script>
<script src="../../js/wow.js"></script>
<script src="../../js/main.js"></script>
<script src="../../js/tab.js"></script>
</body>
</html>