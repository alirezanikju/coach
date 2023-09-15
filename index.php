<?php
require_once "autoload.php";

$slider = new Slider();
$sliders = $slider->getSlider();

$aboutUs = new AboutUs;
$aboutUsTxt = $aboutUs->getAboutUsTxt();

$events = new Events();
$events = $events->getEvent();
?>


<!doctype html>
<html dir="rtl" lang="en">

<head>
  <title>قالب سایت شخصی مربی :: دریافت شده از وب روبیک</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- style -->
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/bootstrap-rtl.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- style -->
</head>
<!--here we use text align rtl in css  -->

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" id="home-section" class="rtla">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">بارگذاری...</span>
    </div>
  </div>

  <div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar js-sticky-header site-navbar-target " role="banner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-xl-2 ">
            <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0">مربی<span class="text-primary">.</span> </a></h1>
          </div>
          <!-- start navbar -->
          <div class="col-12 col-md-10 d-none d-xl-block ">
            <nav class="site-navigation position-relative text-right flt-lft navcol" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">خانه</a></li>
                <li class="has-children">
                  <a href="#about-section" class="nav-link">درباره ما</a>
                  <ul class="dropdown rtla">
                    <li><a href="#training-section" class="nav-link"> آموزشهای ما</a></li>
                    <li><a href="#testimonials-section" class="nav-link">تست ها</a></li>
                    <li><a href="#gallery-section" class="nav-link">گالری</a></li>
                    <li><a href="#blog-section" class="nav-link">وبلاگ</a></li>
                    <li class="has-children">
                      <a href="#">لینک ها</a>
                      <ul class="dropdown">
                        <li><a href="#">لیست کاربر</a></li>
                        <li><a href="#">لیست مدیر</a></li>
                        <li><a href="#">لیست اتفاقات</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li><a href="#training-section" class="nav-link">آموزشهای ما</a></li>
                <li><a href="#services-section" class="nav-link">سرویس های ما</a></li>
                <li><a href="#contact-section" class="nav-link">ارتباط با ما</a></li>
              </ul>
            </nav>
          </div>

          <!-- end navbar -->
          <!-- start section header -->
          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-left"><span class="icon-menu h3"></span></a></div>
        </div>
      </div>

    </header>

    <section class="site-blocks-cover overflow-hidden ">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 align-self-center">

            <div class="row">
              <!-- here we use margin-top:-12% -->
              <div class="col-lg-12">
                <!-- in this div use text align rtl in h1 and p-->
                <h1 class="rtla">ما میخواهیم <span class="typed-words"></span></h1>
                <p class="rtla">هر چه نیاز داشته باشید ما در یک سایت به صورت جامع برایتان فراهم کردیم <a href="#">ارتباط با ما</a></p>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- end section header -->
    <!-- start section slider -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 margin-tp" dir="ltr">
            <div class="slide-one-item home-slider owl-carousel" style="float: right !important;">

              <?php foreach ($sliders as $slider) { ?>
                <img src="admin/sliderImg/<?php echo $slider['imgName']; ?>" alt="Free Website Template by Free-Templat.co" class="img-fluid img">
              <?php } ?>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end section slider -->
    <!-- start section about us-->
    <section class="site-section matgin-tp-14" id="about-section">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-3">
            <h2 class="text-black">سلام دوستان من علیرضا سرمایه گذار این کسب و کار هستم</h2>
          </div>
          <div class="col-md-6 mb-5">
            <?php foreach ($aboutUsTxt as $txt) { ?>
              <p>منابع انسانی یا به عبارت بهتر سرمایه‌های انسانی از مهم‌ترین عوامل تولید در یک سازمان به شمار می‌رود .
                از همین رو انگیزش در کارکنان و مسائل مربوط به آن، دلمشغولی‌های مهم مدیران سازمان و شرکت‌های عصر حاضر است.
                چالش اصلی یک سازمان در ایجاد انگیزه کارکنان تعادل میان اهداف آن سازمان و ارزش‌های شخصی کارکنان آن است.
              </p>
            <?php } ?>
            <p>
          </div>
          <div class="col-md-5 ml-auto">
            <h2 class="text-black mb-4 h6">رویداد های اجرا شده در این دوره</h2>
            <ul class="list-unstyled">

              <?php foreach ($events as $event) { ?>

                <li class="mb-4">
                  <h3 class="text-black m-0"><?php echo $event['eventName']  ?></h3>
                  <span class="text-muted"><?php echo $event['eventCity']; ?> ، <?php echo $event['eventPlace']; ?> ، <?php echo $event['eventDate'] ?></span>
                </li>

              <?php } ?>

            </ul>
          </div>
        </div>
        <!-- end section about us -->
        <!-- start section comment -->
        <div class="row">
          <div class="col-lg-3 text-right">
            <img src="images/person_1.jpg" alt="Free Website Template by Free-Template.co" class="rounded-circle img-fluid w-50 mb-4 rtla">
            <h3 class="h4 text-black rtla">آرزو</h3>
            <p>یکی از بهترین اتفاقات زندگی وارد شدن به این دوره زیر نظر بزرگترین اساتید بود و کمک ها و پشتیبانی های این دوره از مزایای این دوره وارتباط با بهترین افراد طول زندگی بود</p>
            <p>
              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </p>
          </div>
          <div class="col-lg-3 text-right">
            <img src="images/person_2.jpg" alt="Free Website Template by Free-Template.co" class="rounded-circle img-fluid w-50 mb-4 rtla">
            <h3 class="h4 text-black rtla">پویا</h3>
            <p>آموزشهای یادگرفته شده در این دوره منجر به پیشرفت شغلی و امکانات فوق العاده این دوره باعث شر که دوره راحت تر سپری شود و دوستانی بسیار مفید در این دوره اضافه شدند</p>
            <p>
              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </p>
          </div>
          <div class="col-lg-3 text-right">
            <img src="images/person_3.jpg" alt="Free Website Template by Free-Template.co" class="rounded-circle img-fluid w-50 mb-4 rtla">
            <h3 class="h4 text-black rtla">علیرضا</h3>
            <p>خیلی ها می گفتند نرو نمیشه...خداروشکر ما رفتیم وشد. یه پیشنهاد:شما هم برید میشه. راستی راه هایی رو که هم میشه رفت و هم بشه رو براتون آماده کردیم</p>
            <p>
              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </p>
          </div>
          <div class="col-lg-3 text-right">
            <img src="images/person_4.jpg" alt="Free Website Template by Free-Template.co" class="rounded-circle img-fluid w-50 mb-4 rtla">
            <h3 class="h4 text-black rtla">علی</h3>
            <p>هر چه درباره ی موثر بودن این دوره برایتان بگویم کم است به نظر من هر فرد باید در این دوره شرکت کند و آموزشهای لازم را به صورت تکمیلی بگذراند</p>
            <p>
              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- end section comment -->
    <!-- start section education-->
    <section class="site-section bg-light" id="training-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="text-black">آموزشهای ما</h2>
            <p>هدف از برگذاری این دوره یادگیری و انجام بهتر کارهای روزمره و رویارویی با مشکلات زندگی که برای هر شخص ممکن است پیش بیاید است </p>
          </div>
        </div>

        <div class="nonloop-block-13 owl-style owl-carousel" dir="ltr">
          <div class="training">
            <figure class="mb-4"><img src="images/coach_1_sm.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></figure>
            <h3 class="text-black mb-3">تربیت مربی زندگی</h3>
            <p>هر چه در مورد زندگی شما لازم دارید را ما برایتان در این مجموعه فراهم کردیم که در آخر یک زندگی پر از آرامش و هدفمند و سودمند داشته باشید </p>
          </div>

          <div class="training">
            <figure class="mb-4"><img src="images/coach_2_sm.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></figure>
            <h3 class="text-black mb-3">آشکار کردن پتانسیل شما</h3>
            <p>در میانه­‌ی راه، به این فکر کنید که از اول اصلا چرا وارد این راه شدید؟ علل شخصی، منطقی و مهمی که باعث شدند بخواهید به این هدف برسید چه بودند؟</p>
          </div>

          <div class="training">
            <figure class="mb-4"><img src="images/coach_3_sm.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></figure>
            <h3 class="text-black mb-3">ایجاد یک فرصت</h3>
            <p>هرگاه در زندگی برای رسیدن به هدفی برنامه‌­ریزی ­کنید، قطعا با مشکلات و سختی‌­هایی روبه‌رو خواهید شد. این مشکلات و سختی‌­ها باعث می‌­شوند انگیزه­‌ی خود را از دست بدهید</p>
          </div>

          <div class="training">
            <figure class="mb-4"><img src="images/coach_1_sm.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></figure>
            <h3 class="text-black mb-3">آموزش زندگی بهتر</h3>
            <p>شور و انگیزه، نوعی انرژی است که از درون ما نشات می‌گیرد و می‌تواند ما را به موفقیت و رشد فردی برساند. همه‌ی ما در زندگی این حس را حتی به شکل کوتاه‌مدت تجربه کرده‌ایم. </p>
          </div>

          <div class="training">
            <figure class="mb-4"><img src="images/coach_2_sm.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></figure>
            <h3 class="text-black mb-3">انگیزه در کار</h3>
            <p>هرگاه در زندگی برای رسیدن به هدفی برنامه‌­ریزی ­کنید، قطعا با مشکلات و سختی‌­هایی روبه‌رو خواهید شد. این مشکلات و سختی‌­ها باعث می‌­شوند انگیزه­‌ی خود را از دست بدهید</p>
          </div>

          <div class="training">
            <figure class="mb-4"><img src="images/coach_3_sm.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></figure>
            <h3 class="text-black mb-3">تبدیل یک فرصت</h3>
            <p>هر آدمی در دوره­‌ای از زندگی دچار رکود می­‌شود. درک علت از دست دادن انگیزه و اقدام برای رهایی هرچه سریع­‌تر از شر این رکود، کمک می­‌کند تا به موفقیت‌­های بزرگی که در انتظار شما هستند، دست پیدا کنید.</p>
          </div>
        </div>

      </div>
    </section>
    <!-- end section education -->

    <!-- start section services -->
    <section class="site-section" id="services-section" dir="ltr">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="text-black">سرویس های ما</h2>
            <p>منابع انسانی یا به عبارت بهتر سرمایه‌های انسانی از مهم‌ترین عوامل تولید در یک سازمان به شمار می‌رود . از همین رو انگیزش در کارکنان و مسائل مربوط به آن، دلمشغولی‌های مهم مدیران سازمان و شرکت‌های عصر حاضر است. چالش اصلی یک سازمان در ایجاد انگیزه کارکنان تعادل میان اهداف آن سازمان و ارزش‌های شخصی کارکنان آن است.</p>
          </div>
        </div>

        <div class="nonloop-block-13 owl-style owl-style-md owl-carousel">
          <div class="service">
            <div class="icon"><span class="flaticon-badge display-1 text-primary"></span></div>
            <h3 class="text-black mb-3">بهتر زندگی کردن</h3>
            <p>توانمندی، به شما قدرت و اعتماد به نفس می‌دهد تا شایستگی‌های نهفته‌ی خود را بیدار کنید. لازمه‌‌ی داشتن اعتماد به نفس این است که شما خود و نیازهایتان را بشناسید.</p>
          </div>

          <div class="service">
            <div class="icon"><span class="flaticon-target display-1 text-primary"></span></div>
            <h3 class="text-black mb-3">کسب یک فرصت </h3>
            <p> وقتی شما فرآیندمحور هستید و خود را تا رسیدن به هدف نهایی دور احساس نمی‌کنید، زمان به خودی خود می‌گذرد و در نهایت شما به هدف خود خواهید رسید.</p>
          </div>

          <div class="service">
            <div class="icon"><span class="flaticon-agreement display-1 text-primary"></span></div>
            <h3 class="text-black mb-3">ایجاد انگیزه فردی</h3>
            <p>طبیعتا، "انگیزه" یک شی نیست که بتوان به شکل ملموس آن را به دست آورد. بلکه یکی از حالت‌های روحی است که شور و شوق درونی شما را درگیر خود خواهد کرد.</p>
          </div>

          <div class="service">
            <div class="icon"><span class="flaticon-line-chart display-1 text-primary"></span></div>
            <h3 class="text-black mb-3">تربیت مربی زندگی</h3>
            <p>آگاهی ذهنی از شرایط به این معنا نیست که به ترافیک وحشتناک مسیر رفتن به محل کار، فکر کنید یا وقتی رئیس شما ناراحتی و خشم خود را نسبت به شما و دیگر کارمندان ابراز می‌کند، موضع بگیرید.</p>
          </div>

          <div class="service">

            <div class="icon"><span class="flaticon-target-1 display-1 text-primary"></span></div>
            <h3 class="text-black mb-3">ایجاد زندگی زیبا</h3>
            <p> وقتی شما فرآیندمحور هستید و خود را تا رسیدن به هدف نهایی دور احساس نمی‌کنید، زمان به خودی خود می‌گذرد و در نهایت شما به هدف خود خواهید رسید.</p>
          </div>

          <div class="service">
            <div class="icon"><span class="flaticon-bar-chart display-1 text-primary"></span></div>
            <h3 class="text-black mb-3">بهتر زیستن</h3>
            <p>آگاهی ذهنی از شرایط به این معنا نیست که به ترافیک وحشتناک مسیر رفتن به محل کار، فکر کنید یا وقتی رئیس شما ناراحتی و خشم خود را نسبت به شما و دیگر کارمندان ابراز می‌کند، موضع بگیرید.</p>
          </div>
        </div>

      </div>
    </section>
    <!-- end section services -->
    <!-- start section gallery -->
    <section class="site-section" id="gallery-section">
      <div class="container-fluid">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="text-black">گالری</h2>
            <p>چشمانتان را ببندید. هدف‌های بلند‌مدت خود را تا حد امکان با ریزترین جزئیات ممکن تصور کنید. سپس تمام ایده‌های خود را روی یک کاغذ مخصوص یادداشت کنید. هر چه وضوح اهداف‌تان را برای خود روشن‌تر کنید، تصور بهتری از آن‌ها پیدا خواهید کرد.</p>
          </div>
        </div>
        <div class="row">
          <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="images/coach_1_sm.jpg" data-fancybox="gal"><img src="images/coach_1_sm.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid"></a>
          <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="images/coach_2_sm.jpg" data-fancybox="gal"><img src="images/coach_2_sm.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid"></a>
          <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="images/coach_3_sm.jpg" data-fancybox="gal"><img src="images/coach_3_sm.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid"></a>
          <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="images/coach_2_sm.jpg" data-fancybox="gal"><img src="images/coach_2_sm.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid"></a>
          <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="images/coach_1_sm.jpg" data-fancybox="gal"><img src="images/coach_1_sm.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid"></a>
          <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="images/coach_2_sm.jpg" data-fancybox="gal"><img src="images/coach_2_sm.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid"></a>
          <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="images/coach_1_sm.jpg" data-fancybox="gal"><img src="images/coach_1_sm.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid"></a>
          <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="images/coach_2_sm.jpg" data-fancybox="gal"><img src="images/coach_2_sm.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid"></a>
          <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="images/coach_3_sm.jpg" data-fancybox="gal"><img src="images/coach_3_sm.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid"></a>
          <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="images/coach_2_sm.jpg" data-fancybox="gal"><img src="images/coach_2_sm.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid"></a>
          <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="images/coach_1_sm.jpg" data-fancybox="gal"><img src="images/coach_1_sm.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid"></a>
          <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="images/coach_2_sm.jpg" data-fancybox="gal"><img src="images/coach_2_sm.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid"></a>
        </div>
      </div>
    </section>
    <!-- end section gallery -->
    <!-- start section good comment -->
    <section class="site-section" id="testimonials-section" data-aos="fade" dir="ltr">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-lg-6 text-center mb-5">
            <h2 class="text-black mb-2">کارآموزان خوشنود ما</h2>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-delay="200">
          <div class="owl-carousel owl-style owl-carousel-one no-owl-nav">
            <div>
              <div class="block-testimony-1 text-center">
                <blockquote class="mb-4" dir="rtl">
                  <p>&ldquo;سپاس سلام ضمن عرض خسته نباشید به شما، سپاس فراوان دارم به خاطر برپایی این سایت ارزنده. خدماتی که ارایه می‌دهید بسیار زیبا و دلپسند هست و بنده به شخصه مشتری پر و پا قرص شما خواهم بود. این حرکت شما جوانه‌های محبت و عشق را در تار و پود جامعه می‌پراکند. با احترام و امتنان فراوان&rdquo;</p>
                </blockquote>
                <figure>
                  <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 text-black">علی مرادی</h3>
              </div>
            </div>

            <div>
              <div class="block-testimony-1 text-center">
                <blockquote class="mb-4" dir="rtl">
                  <p>&ldquo;سلام ممنونم بخاطر کار فوق العاده قشنگی که انجام دادید،شما بسیار عالی و با برنامه ریزی دقیق سفارش ها را تحویل می دهید . سه تا محصول سفارش دادم و واقعا هر سه بی نظیر و زیبا بود. با سپاس &rdquo;</p>
                </blockquote>
                <figure>
                  <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 mb-4 text-black">پویا جلالی</h3>
              </div>
            </div>

            <div>
              <div class="block-testimony-1 text-center">
                <blockquote class="mb-4" dir="rtl">
                  <p>&ldquo;سپاس سلام ضمن عرض خسته نباشید به شما، سپاس فراوان دارم به خاطر برپایی این سایت ارزنده. خدماتی که ارایه می‌دهید بسیار زیبا و دلپسند هست و بنده به شخصه مشتری پر و پا قرص شما خواهم بود. این حرکت شما جوانه‌های محبت و عشق را در تار و پود جامعه می‌پراکند. با احترام و امتنان فراوان&rdquo;</p>
                </blockquote>
                <figure>
                  <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 text-black">رویا عرب زاده</h3>
              </div>
            </div>
            <div>
              <div class="block-testimony-1 text-center">

                <blockquote class="mb-4" dir="rtl">
                  <p>&ldquo;سلام ممنونم بخاطر کار فوق العاده قشنگی که انجام دادید،شما بسیار عالی و با برنامه ریزی دقیق سفارش ها را تحویل می دهید . سه تا محصول سفارش دادم و واقعا هر سه بی نظیر و زیبا بود. با سپاس &rdquo;</p>
                </blockquote>

                <figure>
                  <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 mb-4 text-black">علیرضا مهدوی</h3>

              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- end section good comment -->
    <!-- start section blog -->
    <section class="site-section" id="blog-section">
      <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-lg-6 text-center mb-5">

            <h2 class="text-black mb-2">وبلاگ</h2>
            <p>حالا که اهداف بزرگ خود را تشخیص دادید، نوبت به رسیدگی کارهای کوچک است. واضح است که برای رسیدن به اهداف خود نیاز به پله‌هایی دارید. لیستی از تمام پله‌های مورد نیاز را پیدا کنید. به این نکته توجه داشته باشید که جزئیات را هم در لیست خود قید کنید.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="d-lg-flex blog-entry">
              <figure class="mr-4">
                <a href="single.html"><img src="images/coach_1_sm.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid rounded"></a>
              </figure>
              <div class="blog-entry-text margin-rt">
                <h3><a href="single.html">استعداد های خود را با رعایت این ۵ نکته شکوفا کنید</a></h3>
                <span class="post-meta mb-3 d-block">۲۲ خرداد ۹۸</span>
                <p>همان‌طور که درون خود را واکاوی می‌کنید، به پیشرفت‌های کوتاه‌مدت خود هم توجه کنید. چرا که اهداف کوتاه‌مدت پیوند شما را به هدف‌های بلند‌مدت، محکم‌تر می‌کند</p>
                <p><a href="#" class="">بیشتر بخوانید...</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="d-lg-flex blog-entry">
              <figure class="mr-4">
                <a href="single.html"><img src="images/coach_2_sm.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid rounded"></a>
              </figure>
              <div class="blog-entry-text margin-rt">
                <h3><a href="single.html">انگیزه خود را با ۵ حرکت به دست آورید</a></h3>
                <span class="post-meta mb-3 d-block">۱۱فروردین ۹۸</span>
                <p>درون خود را در پایان هر روز، هر هفته، هر ماه و هر سال بررسی کنید. هر چند که ممکن است کار سختی به نظر برسد اما به خاطر بسپارید که درون‌گرایی نه تنها خودآگاهی شما را بهبود</p>
                <p><a href="#" class="">بیشتر بخوانید...</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="d-lg-flex blog-entry">
              <figure class="mr-4">
                <a href="single.html"><img src="images/coach_3_sm.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid rounded"></a>
              </figure>
              <div class="blog-entry-text margin-rt">
                <h3><a href="single.html">۵ نکته مهم و اصولی برای زندگی اصولی و بهتر</a></h3>
                <span class="post-meta mb-3 d-block">۱۰ اسفند ۹۶</span>
                <p> حتی رسیدن به نقاط عطف کوچک هم، ارزش جشن گرفتن دارند. این موفقیت‌ها ممکن است در وهله‌‌ی اول به چشم شما ناچیز جلوه کنند</p>
                <p><a href="#" class="">بیشتر بخوانید...</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="d-lg-flex blog-entry">
              <figure class="mr-4">
                <a href="single.html"><img src="images/coach_2_sm.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid rounded"></a>
              </figure>
              <div class="blog-entry-text margin-rt">
                <h3><a href="single.html">راه های یک زندگی زیبا بدون نیاز به اتفاق</a></h3>
                <span class="post-meta mb-3 d-block">۲۰ بهمن ۹۸</span>
                <p>هیچ جایگزینی برای سخت کوشی وجود ندارد. بعضی از مردم تظاهر به داشتن انگیزه می‌کنند حال آن که در واقعیت، انگیزه‌‌ی درونی آن‌ها در یک حالت نوسانی قرار دارد</p>
                <p><a href="#" class="">بیشتر بخوانید...</a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- end section blog -->
    <!-- start section contact us -->
    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <h2 class="text-black">ارتباط با ما</h2>
          </div>
        </div>
        <div class="row mb-5">
          <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
            <p class="mb-0 font-weight-bold">آدرس</p>
            <p class="mb-4">شیراز بلوار جمهوری
          </div>
          <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
            <p class="mb-0 font-weight-bold">شماره تماس</p>
            <p class="mb-4 " dir="ltr"><a href="#">۰۷۱۳ ۲۳۰ ۹۵۳۴</a></p>
          </div>
          <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
            <p class="mb-0 font-weight-bold">ایمیل</p>
            <p class="mb-0"><a href="#">info@webrubik.com</a></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 mb-5">
            <form action="#" method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-3 mb-md-0">
                  <input type="text" class="form-control" placeholder="نام خانوادگی">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="نام">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="آدرس ایمیل">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="" id="" class="form-control" placeholder="پیام خود را بنویسید" cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-2 px-5 " value="ارسال نظر">
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
    <!-- end section send contact us -->
    <!-- start section footer -->

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="footer-heading mb-4">درباره ما</h2>
            <p>همه اینها دست به دست هم میدهند خیلی از افراد به صورت احساسی و بدون برنامه ریزی دست به اقداماتی شبیه خرید کتاب، ثبت نام در باشگاه ورزشی و یا شرکت در کارگاه های آموزشی میکنند اما تا نیمه راه می روند و افراد بسیار کمی هستند که تا پایان راه ادامه میدهند که دلیل آن می باشد که برنامه مناسبی ندارند و …..</p>
          </div>

          <div class="col-md-3 ml-auto">
            <h2 class="footer-heading mb-4">دسترسی سریع</h2>
            <ul class="list-unstyled">
              <li><a href="#about-section" class="smoothscroll">درباره ما</a></li>
              <li><a href="#training-section" class="smoothscroll">آموزشها</a></li>
              <li><a href="#services-section" class="smoothscroll">خدمات</a></li>
              <li><a href="#testimonials-section" class="smoothscroll">تست ها</a></li>
              <li><a href="#contact-section" class="smoothscroll">ارتباط با ما</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <div class="mb-5">
              <h2 class="footer-heading mb-4">ما را دنبال کنید</h2>
              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>

            <h2 class="footer-heading mb-4">ثبت نام در خبرنامه</h2>
            <form action="#" method="post" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="ایمیل خود را وارد کنید" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">ارسال</button>
                </div>
              </div>
            </form>

          </div>
        </div>

        <div class="row pt-5 mt-5 text-left">
          <div class="col-md-12">
            <div class="border-top pt-5 rtla">
              <p class="copyright">
                <small>
                  <!-- Link back to webrubik can't be removed.  -->
                  Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                  </script> All rights reserved | This template is made by <a href="https://colorlib.com/" target="_blank">colorlib</a></br>
                  فارسی و راست چین شده &copy توسط علیرضا <i class="icon-heart text-danger" aria-hidden="true"></i> از اعضای تیم <a href="https://webrubik.com/" target="_blank"> وب روبیک</a>
                  <!-- Link back to webrubik can't be removed.  -->
                </small>
              </p>
            </div>
          </div>

        </div>
      </div>
    </footer>
    <!-- end section footer -->
  </div> <!-- .site-wrap -->

  <!-- JS Scripts -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

  <script src="js/typed.js"></script>
  <script>
    var typed = new Typed('.typed-words', {
      strings: ["بهترین مربی انگیزشی باشیم", "بهترین سخنران در آموزش باشیم", "بهترین کارآفرین باشیم", " بهترین مربی زندگی باشیم"],
      typeSpeed: 80,
      backSpeed: 80,
      backDelay: 4000,
      startDelay: 1000,
      loop: true,
      showCursor: true
    });
  </script>
  <script src="js/main.js"></script>
  <!-- /JS Scripts -->
</body>

</html>