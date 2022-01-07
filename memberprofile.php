<?php
session_start();
$name = '';
$gender = '';
$email = '';
$phone = '';
$age = '';
if ($_SESSION['login']) {
    $id =  json_decode($_SESSION['member'])->member_id;
    $name = json_decode($_SESSION['member'])->name;
    $gender = json_decode($_SESSION['member'])->gender;
    $email = json_decode($_SESSION['member'])->email;
    $phone = json_decode($_SESSION['member'])->phone;
    $age = json_decode($_SESSION['member'])->age;
} else {
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/memberprofile.css" />
    <title>Profile</title>
</head>

<body>

    <div class="container">
        <div class="main-body">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>

                    <li class="breadcrumb-item active" aria-current="page">
                        User Profile
                    </li>
                    <li style="margin-left: 50rem;">
                        <a name="" id="logout" href="#" onclick="logout()">Đăng
                            xuất</a>
                    </li>
                </ol>



            </nav>
            <!-- /Breadcrumb -->

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                    class="rounded-circle" width="150" />
                                <div class="mt-3">
                                    <h4><?= $name ?></h4>
                                    <p class="text-secondary mb-1">Member FPTGym Fitness</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <ul class="list-group list-group-flush">
                            <li class="
                    list-group-item
                    d-flex
                    justify-content-between
                    align-items-center
                    flex-wrap
                  ">
                                <h6 class="mb-0">Fullname</h6>
                                <span class="text-secondary"><?= $name ?></span>
                            </li>
                            <li class="
                    list-group-item
                    d-flex
                    justify-content-between
                    align-items-center
                    flex-wrap
                  ">
                                <h6 class="mb-0">Giới tính</h6>
                                <span class="text-secondary"><?= $gender ?></span>
                            </li>
                            <li class="
                    list-group-item
                    d-flex
                    justify-content-between
                    align-items-center
                    flex-wrap
                  ">
                                <h6 class="mb-0">Email</h6>
                                <span class="text-secondary"><?= $email ?></span>
                            </li>
                            <li class="
                    list-group-item
                    d-flex
                    justify-content-between
                    align-items-center
                    flex-wrap
                  ">
                                <h6 class="mb-0">Phone</h6>
                                <span class="text-secondary"><?= $phone ?></span>
                            </li>
                            <li class="
                    list-group-item
                    d-flex
                    justify-content-between
                    align-items-center
                    flex-wrap
                  ">
                                <h6 class="mb-0">Tuổi</h6>
                                <span class="text-secondary"><?= $age ?></span>
                            </li>
                            <li class="
                    list-group-item
                    d-flex
                    justify-content-between
                    align-items-center
                    flex-wrap
                  ">
                                <h6 class="mb-0">
                                    <a class="btn btn-light" target="__blank" href="#" data-toggle="modal"
                                        data-target="#edit">Edit Profile</a>
                                    <a class="btn btn-light" target="__blank" href="#" data-toggle="modal"
                                        data-target="#changePass">Change Password</a>
                                </h6>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-8" table>
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Class_Name</th>
                                <th scope="col">Number_of_Student</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Room 1</td>
                                <td>80</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Room 2</td>
                                <td>60</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Room 3</td>
                                <td>100</td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">Member ID</th>
                                <th scope="col">Member Fullname</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Male</td>
                                <td>012345678</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                        </tbody>
                    </table>

                </div>

                <hr />



            </div>
        </div>
    </div>
    </div>
    </div>

    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">

            <div class="modal-content">
                <div class="modal-header">

                    <h2 class="modal-title" id="membershipFormLabel">Cập nhật thông tin cá nhân</h2>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form class="membership-form webform" role="form" action="edit.php" method="POST">
                        <input type="text" name="id" style="display: none;" value="<?= $id ?>">
                        <input type="text" class="form-control mt-1" name="cf-name" placeholder="Họ và Tên"
                            value="<?= $name ?>">
                        <select class="form-control mt-1" name="cf-gender">
                            <option selected>Chọn giới tính</option>
                            <option class="form-control" <?= $gender == 'nam' ? 'selected' : '' ?> value="nam">Nam
                            </option>
                            <option class="form-control" <?= $gender == 'nu' ? 'selected' : '' ?> value="nu">Nữ</option>
                            <option class="form-control" <?= $gender == 'khac' ? 'selected' : '' ?> value="khac">Khác
                            </option>
                        </select>

                        <input type="email" class="form-control mt-1" name="cf-email" placeholder="Email"
                            value="<?= $email ?>">

                        <input type="tel" class="form-control mt-1" name="cf-phone" placeholder="123-456-7890"
                            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value="<?= $phone ?>">

                        <input type="text" class="form-control mt-1" name="cf-age" placeholder="Tuổi"
                            value="<?= $age ?>">

                        <button type="submit" class=" form-control mt-1" id="submit-button" name="data-edit">Cập
                            Nhật</button>

                    </form>
                </div>

                <div class="modal-footer"></div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="changePass" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">

            <div class="modal-content">
                <div class="modal-header">

                    <h2 class="modal-title" id="membershipFormLabel" style="text-align: center;">Đổi mật khẩu</h2>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form class="membership-form webform" name="formChangePass" role="form" action="changePassword.php"
                        method="POST">
                        <input type="text" name="id" style="display: none;" value="<?= $id ?>">
                        <div class="form-group">
                            <label for=""></label>
                            <input type="password" class="form-control" name="new-password" placeholder="Mật khẩu mới"
                                required>
                            <small id="helpId" class="form-text text-muted ernp"></small>
                        </div>
                        <div class="form-group">
                            <label for=""></label>
                            <input type="password" class="form-control" name="re-password"
                                placeholder="Nhập lại mật khẩu" required>
                        </div>
                        <small id="helpId" class="form-text text-muted error" style="color: red;"></small>
                        <button type="submit" class="form-control mt-1" id="submit-change" name="submit-change">Đổi mật
                            khẩu</button>
                    </form>
                </div>

                <div class="modal-footer"></div>

            </div>
        </div>
    </div>

    <script>
    document.getElementById('submit-change').addEventListener('click', e => {
        e.preventDefault();
        let send = true;
        let newPass = document.forms['formChangePass']['new-password'].value;
        let rePass = document.forms['formChangePass']['re-password'].value;
        if (newPass == '') {
            document.querySelector('.ernp').innerText = 'Mật khẩu không được rỗng!';
            send = false;
        }
        if (newPass != rePass) {
            document.querySelector('.error').innerText = 'Mật khẩu phải trùng nhau!';
            send = false;
        }
        if (send) {
            document.forms['formChangePass'].submit();
            // logout();
        }
    })

    function logout() {
        document.cookie = 'PHPSESSID =; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
        window.location.reload()
    }
    </script>

    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>