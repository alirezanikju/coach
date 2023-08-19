<?php

require_once "actions.php";
require_once "../autoload.php";

?>

<!DOCTYPE html>
<html lang="en" class="d" style="direction: rtl">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../css/bootstrap-rtl.min.css">
</head>
<body>



<?php if (Db::$msg) { ?>
    <div class="alert alert-success text-center mb-0 fontSize576 rounded-0"><?php echo Db::$msg; ?></div>
<?php } ?>
<?php if (Db::$error) { ?>
    <div class="alert alert-danger text-center mb-0 fontSize576 rounded-0"><?php echo Db::$error; ?></div>
<?php } ?>


<div class="container d-flex justify-content-center mt-5">

    <div class="card col-12 col-md-5 shadow-sm p-0">
        <div class="card-header bg-primary text-white text-center">صفحه ورود به پنل مدیریت </div>
        <div class="card-body">

            <form action="adminLogin.php" method="post">
                <p class="card-text">ایمیل خود را وارد کنید</p>
                <input type="email" name="emailAdmin" class="form-control m-2 col ms-0">
                <p class="card-text">پسورد دلخواه خود را وارد کنید</p>
                <input type="password" name="pwdAdmin" class="form-control m-2 col ms-0">
                <input type="submit" name="adminLogin" class="btn btn-success w-100" value="ورود به پنل مدیریت">
            </form>

        </div>

    </div>
</div>
</body>
</html>
