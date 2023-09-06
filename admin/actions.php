<?php

require_once "../autoload.php";

if(isset($_POST['adminLogin'])){

    $emailAdmin = $_POST['emailAdmin'];
    $pwdAdmin = $_POST['pwdAdmin'];

    $adminLogin = new Admin();
    $adminLogin->adminLogin($emailAdmin,$pwdAdmin);

}


//add slider
if(isset($_POST['addSliderPhoto'])){
    $imgName = $_FILES['sliderPhoto']['name'];
    $imgTmp = $_FILES['sliderPhoto']['tmp_name'];
    $imgType = $_FILES['sliderPhoto']['type'];

    $slider = new Slider();
    $slider->addSlider($imgName,$imgTmp,$imgType);


}


//delete slider
if(isset($_GET['deleteSlideId'])){
    $slideId = $_GET['deleteSlideId'];

    $slider = new Slider();
    $slider->removeSlider($slideId);
}



//about us
if(isset($_POST['addAboutUs'])){
    $aboutUsTxt = $_POST['aboutUsTxt'];
    $aboutUs = new AboutUs;
    $aboutUs->addAboutUsTxt($aboutUsTxt);
}













