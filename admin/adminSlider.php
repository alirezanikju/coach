<?php

require_once "actions.php";


$slider = new Slider();
$sliders = $slider->getSlider();

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
                </ul>
            </div>
            <div class="card col-12  col-md-9 shadow-sm p-0">
                <div class="card-header ">اسلایدر</div>

                <div class="">
                    <form action="adminSlider.php" method="post" enctype="multipart/form-data">
                        <ul class="list-group-flush ps-0">
                            <li class="list-group-item">
                                تصویر مورد نظر:
                                <input type="file" name="sliderPhoto" class="form-control mt-1">
                            </li>

                            <li class="list-group-item float-left">
                                <input type="submit" class="btn btn-success mt-1 float-left" name="addSliderPhoto" value="افزودن تصویر اسلایدر">
                            </li>
                    </form>
                </div>

                <hr>
                <div class="row m-3">
                    <?php foreach ($sliders as $slider) { ?>

                        <div class="col-6 card">
                            <div class="card-body">
                                <img src="sliderImg/<?php echo $slider['imgName']; ?>" class="card-img-top">
                                <a href="?deleteSlideId=<?php echo $slider['id']; ?>" class="btn btn-danger w-100">حذف تصویر اسلاید</a>
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