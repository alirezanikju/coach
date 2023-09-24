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


//add event
if(isset($_POST['addEvent'])){
    $eventName = $_POST['eventName'];
    $eventCity = $_POST['eventCity'];
    $eventPlace = $_POST['eventPlace'];
    $eventDate = $_POST['eventDate'];

    $addEvent = new Events();
    $addEvent -> addEvent($eventName,$eventCity,$eventPlace,$eventDate);
}


//delete Event
if(isset($_GET['deleteEventId'])){
    $deleteEventId = $_GET['deleteEventId'];

    $rmEvent = new Events();
    $rmEvent -> removeEvent($deleteEventId);
}


//add learn item
if(isset($_POST['addLearn'])){

    $learnImgName = $_FILES['learnPhoto']['name'];
    $learnImgTmp = $_FILES['learnPhoto']['tmp_name'];
    $learnImgType = $_FILES['learnPhoto']['type'];

    $learnTitle = $_POST['learnTitle'];
    $aboutLearn = $_POST['aboutLearn'];

    $learn = new Learn();
    $learn->insertLearnItem($learnImgName, $learnImgTmp,$learnImgType,$learnTitle,$aboutLearn);
}


//remove learn
if(isset($_GET['deleteLearnId'])){
    $learnId = $_GET['deleteLearnId'];

    $learn = new Learn();
    $learn -> removeLearn($learnId);
}



//add Service
if(isset($_POST['addService'])){

    $serviceTitle = $_POST['serviceTitle'];
    $aboutService = $_POST['aboutService'];


    $addService = new Service();
    $addService -> insertService($serviceTitle,$aboutService);
}



//remove Service
if(isset($_GET['deleteServiceId'])){
    $ServiceId = $_GET['deleteServiceId'];

    $Service = new Service();
    $Service -> removeService($ServiceId);
}




//add gallery
if(isset($_POST['addgallery'])){

    $galleryImgName = $_FILES['galleryPhoto']['name'];
    $galleryImgTmp = $_FILES['galleryPhoto']['tmp_name'];
    $galleryImgType = $_FILES['galleryPhoto']['type'];

    $gallery = new Gallery();
    $gallery->insertGallery($galleryImgName,$galleryImgTmp,$galleryImgType);
}


//remove gallery
if(isset($_GET['deletegalleryId'])){
    $galleryId = $_GET['deletegalleryId'];

    $deleteGallery = new Gallery();
    $deleteGallery -> removeGallery($galleryId);
}






