<?php

require_once "actions.php";


$events = new Events();
$events = $events->getEvent();

?>
<!DOCTYPE html>
<html lang="en" class="d" style="direction: rtl">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>



    <?php if (Db::$msg) { ?>
        <div class="alert alert-success text-center mb-0 fontSize576 rounded-0"><?php echo Db::$msg; ?></div>
    <?php } ?>
    <?php if (Db::$error) { ?>
        <div class="alert alert-danger text-center mb-0 fontSize576 rounded-0"><?php echo Db::$error; ?></div>
    <?php } ?>



    <div class="container">
        <h5 class="h5 mt-2 pb-2 border-bottom border-primary">
            پنل مدیریت
        </h5>
        <div class="row">
            <div class="card col-12 col-md-3 border-0 mb-2">
                <ul class="list-group-flush border-end pe-1 ps-0">
                    <a href="#" class="list-group-item rounded-1 btn_style col bg-primary text-decoration-none text-white">اسلایدر</a>
                    <a href="#" class="list-group-item rounded-1 btn_style col bg-primary text-decoration-none text-white mt-1">درباره ما</a>
                    <a href="#" class="list-group-item rounded-1 btn_style col bg-primary text-decoration-none text-white mt-1 border rounded">رویدادها</a>
                </ul>
            </div>
            <div class="card col-12  col-md-9 shadow-sm p-0">
                <div class="card-header ">رویدادها</div>

                <div class="">
                    <form action="adminEvents.php" method="post">
                        <ul class="list-group-flush ps-0">
                            <li class="list-group-item">
                                عنوان رویداد:
                                <input type="text" name="eventName" class="form-control mt-1" placeholder="مثلا : جلسه ساختار زندگی">
                            </li>
                            <li class="list-group-item">
                                نام شهر:
                                <input type="text" name="eventCity" class="form-control mt-1" placeholder="مثلا : تهران">
                            </li>
                            <li class="list-group-item">
                                محل برگذاری:
                                <input type="text" name="eventPlace" class="form-control mt-1" placeholder="مثلا : برج میلاد">
                            </li>
                            <li class="list-group-item">
                                تاریخ برگذاری:
                                <input type="text" name="eventDate" class="form-control mt-1" placeholder="مثلا : آذر۹۸">
                            </li>

                            <li class="list-group-item float-left">
                                <input type="submit" class="btn btn-success mt-1 float-left" name="addEvent" value="افزودن رویداد">
                            </li>
                    </form>
                </div>

                <hr>
                <div class="row">
                    <?php foreach ($events as $event) { ?>

                        <div class="col-6 card">

                            <div class="card-body">
                                <p>عنوان : <?php echo $event['eventName']; ?></p>
                                <p>در شهر : <?php echo $event['eventCity']; ?></p>
                                <p>در مکان : <?php echo $event['eventPlace']; ?></p>
                                <p> در تاریخ : <?php echo $event['eventDate']; ?></p>
                                <a href="?deleteEventId=<?php echo $event['id']; ?>" class="btn btn-danger w-100">حذف رویداد</a>
                            </div>

                        </div>

                    <?php } ?>

                </div>

            </div>


        </div>

    </div>
    </div>



    <!--footer-->
    <div class="container-fluid bg-primary mt-5">
        <div class="container">

            <div class="row mt-5 p-3 bg-primary ">
                <div class="card bg-primary text-white mb-5 border-0 pt-2">
                    <h4 class="card-title">آکادمی کدلاین</h4>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, commodi earum eos explicabo magnam modi optio, rem sed soluta suscipit velit, vitae! Debitis laborum magni obcaecati porro quasi quidem repellendus.
                    </div>
                </div>
                <div class="card col-md-4 border-0 bg-primary text-white border-0">
                    <a href="#" class="text-decoration-none">
                        <ul class="list-group-flush">
                            <li class="list-group-item bg-primary text-white">
                                مقالات
                            </li>
                            <li class="list-group-item bg-primary text-white">
                                قوانین
                            </li>
                            <li class="list-group-item bg-primary text-white">
                                درباره ما
                            </li>
                            <li class="list-group-item bg-primary text-white">
                                ارتباط با ما
                            </li>
                        </ul>
                    </a>
                </div>
                <div class="card col-md-4 border-0 bg-primary text-white border-0">
                    <a href="#" class="text-decoration-none">
                        <ul class="list-group-flush">
                            <li class="list-group-item bg-primary text-white">
                                tset1
                            </li>
                            <li class="list-group-item bg-primary text-white">
                                tset1
                            </li>
                            <li class="list-group-item bg-primary text-white">
                                tset1
                            </li>
                        </ul>
                    </a>
                </div>
                <div class="card col-md-4 border-0 bg-primary text-white border-0">
                    <a href="#" class="text-decoration-none">
                        <ul class="list-group-flush">
                            <li class="list-group-item bg-primary text-white">
                                tset1
                            </li>
                            <li class="list-group-item bg-primary text-white">
                                tset1
                            </li>

                        </ul>
                    </a>
                </div>
            </div>

        </div>
        <div class="border-top border-white bg-primary text-center text-white p-2">
            تمام حقوق محفوظ است.
        </div>
    </div>
</body>

</html>