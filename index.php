<?php
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PWD = '1234';


// Create a connection
$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PWD);

// Check the connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (!mysqli_select_db($conn, 'archtest')) {
  die("Oops database selection problem ! --> " . mysqli_connect_error());
}

// Create an SQL query to fetch properties
$sql = "SELECT * FROM properties";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Archstone realtors</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800%7CPoppins:300,400,700">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css" id="main-styles-link">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <!--onloading -->
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-logo"><img src="images/archstone_logo.png" alt="" width="151" height="44" srcset="images/archstone_logo.png"/>
      </div>
      <div class="preloader-body">
        <div id="loadingProgressG">
          <div class="loadingProgressG" id="loadingProgressG_1"></div>
        </div>
      </div>
    </div>

    <div class="page">
      <!-- Page Header<a class="banner banner-top" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" target="_blank"><img src="images/intense_02.jpg" alt=""/></a> -->
      
      <?php include('header.php'); ?>

      <section class="section swiper-container swiper-slider swiper-slider-minimal" data-loop="true" data-slide-effect="fade" data-autoplay="4759" data-simulate-touch="true">
        <div class="swiper-wrapper">
          <div class="swiper-slide swiper-slide_video" data-slide-bg="https://archstonekenya.com/images/fulls/rol1.jpg">
            <div class="container">
              <div class="jumbotron-classic-content">
                <div class="wow-outer">
                  <div class="title-docor-text font-weight-bold title-decorated text-uppercase wow slideInLeft text-white">Offering Diverse</div>
                </div>
                <h1 class="text-uppercase text-white font-weight-bold wow-outer"><span class="wow slideInDown" data-wow-delay=".2s">Properties</span></h1>
                <p class="text-white wow-outer"><span class="wow slideInDown" data-wow-delay=".35s">Archstone Kenya provides you with lots of great properties throughout Kenya so that you could easily choose your dream property.</span></p>
                <div class="wow-outer button-outer"><a class="button button-md button-primary button-winona wow slideInDown" href="properties.php" data-wow-delay=".4s">View Properties</a></div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="https://images.pexels.com/photos/3288103/pexels-photo-3288103.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
            <div class="container">
              <div class="jumbotron-classic-content">
                <div class="wow-outer">
                  <div class="title-docor-text font-weight-bold title-decorated text-uppercase wow slideInLeft text-white">Easily</div>
                </div>
                <h1 class="text-uppercase text-white font-weight-bold wow-outer"><span class="wow slideInDown" data-wow-delay=".2s">Rent & Sale</span></h1>
                <p class="text-white wow-outer"><span class="wow slideInDown" data-wow-delay=".35s">With the help of our services and property management solutions, you can rent or buy any house or apartment.</span></p>
                <div class="wow-outer button-outer"><a class="button button-md button-primary button-winona wow slideInDown" href="properties.php" data-wow-delay=".4s">View properties</a></div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="https://images.pexels.com/photos/3288102/pexels-photo-3288102.png?auto=compress&cs=tinysrgb&w=600">
            <div class="container">
              <div class="jumbotron-classic-content">
                <div class="wow-outer">
                  <div class="title-docor-text font-weight-bold title-decorated text-uppercase wow slideInLeft text-white">More Than 20 Years of</div>
                </div>
                <h1 class="text-uppercase text-white font-weight-bold wow-outer"><span class="wow slideInDown" data-wow-delay=".2s">Experience</span></h1>
                <p class="text-white wow-outer"><span class="wow slideInDown" data-wow-delay=".35s">Founded in 1989, our company is a team of renowned property management and real estate experts always ready to help you.</span></p>
                <div class="wow-outer button-outer"><a class="button button-md button-primary button-winona wow slideInDown" href="properties.php" data-wow-delay=".4s">View properties</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination-outer container">
          <div class="swiper-pagination swiper-pagination-modern swiper-pagination-marked" data-index-bullet="true"></div>
        </div>
      </section>
      <section class="section novi-background section-md text-center">
        <div class="container">
          <h3 class="text-uppercase font-weight-bold wow-outer"><span class="wow slideInDown">Popular properties</span></h3>
          <div class="row row-lg-50 row-35 offset-top-2">
            <div class="col-md-6 wow-outer">
              <!-- Post Modern-->
              <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img src="https://archstonekenya.com/images/fulls/liv11.jpg.jpeg" alt="" width="571" height="353"/></a>
                <h4 class="post-modern-title"><a class="post-modern-title" href="#">Lower Kabete</a></h4>
                <ul class="post-modern-meta">
                  <li><a class="button-winona" href="#">Ksh-125 million</a></li>
                  <!-- <li>30 Sq. Ft.</li> -->
                  <li>5 Bedrooms</li>
                </ul>
                <p>Very beautiful 5 bedroom with and an extra room on the lower floor house in a gated community</p>
              </article>
            </div>
            <div class="col-md-6 wow-outer">
              <!-- Post Modern-->
              <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img src="http://archstonekenya.com/images/fulls/WhatsApp%20Image%202020-06-08%20at%2010.52.36%20(1).jpeg" alt="" width="571" height="353"/></a>
                <h4 class="post-modern-title"><a class="post-modern-title" href="#">Ridgeways</a></h4>
                <ul class="post-modern-meta">
                  <li><a class="button-winona" href="#">$1300/mon</a></li>
                  <!-- <li>40 Sq. Ft.</li> -->
                  <li>4 Bedrooms</li>
                </ul>
                <p>Well finished four bedroom townhouse in a gated community with a study room</p>
              </article>
            </div>
            <div class="col-md-6 wow-outer">
              <!-- Post Modern-->
              <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img src="http://archstonekenya.com/images/fulls/Ben1.webp" alt="" width="571" height="353"/></a>
                <h4 class="post-modern-title"><a class="post-modern-title" href="#">Lavington</a></h4>
                <ul class="post-modern-meta">
                  <li><a class="button-winona" href="#">Ksh-340,000/mon</a></li>
                  <!-- <li>50 Sq. Ft.</li> -->
                  <li>5 Bedrooms</li>
                </ul>
                <p>5 bedroom all ensuite spacious house in a compound of two houses</p>
              </article>
            </div>
            <div class="col-md-6 wow-outer">
              <!-- Post Modern-->
              <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img src="https://archstonekenya.com/images/fulls/Living.jpeg" alt="" width="571" height="353"/></a>
                <h4 class="post-modern-title"><a class="post-modern-title" href="#">Rossyln</a></h4>
                <ul class="post-modern-meta">
                  <li><a class="button-winona" href="#">Ksh-410,000/mon</a></li>
                  <!-- <li>90 Sq. Ft.</li> -->
                  <li>5 Bedrooms</li>
                </ul>
                <p>In Rosslyn 5 bedroom all ensuite Villa in a gated community, Has its private gate.</p>
              </article>
            </div>
            <div class="col-md-12 wow-outer"><a class="button button-primary button-winona button-md" href="properties.php">view More properties</a></div>
          </div>
        </div>
      </section>
      <section class="section novi-background section-lg bg-gray-100">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-lg-4 wow-outer">
              
              <article class="box-minimal">
                <div class="box-chloe__icon novi-icon linearicons-user wow fadeIn"></div>
                <div class="box-minimal-main wow-outer">
                  <h4 class="box-minimal-title wow slideInDown">Qualified Employees</h4>
                  <p class="wow fadeInUpSmall">Our team consists of more than 20 qualified and experienced real estate brokers and property managers ready to help you.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow-outer">
              <!-- Box Minimal-->
              <article class="box-minimal">
                <div class="box-chloe__icon novi-icon linearicons-bubble-text wow fadeIn" data-wow-delay=".1s"></div>
                <div class="box-minimal-main wow-outer">
                  <h4 class="box-minimal-title wow slideInDown" data-wow-delay=".1s">Free Consultations</h4>
                  <p class="wow fadeInUpSmall" data-wow-delay=".1s">Our acquaintance with a client always begins with a free consultation to find out what kind of property they are looking for.</p>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow-outer">
              <!-- Box Minimal-->
              <article class="box-minimal">
                <div class="box-chloe__icon novi-icon linearicons-star wow fadeIn" data-wow-delay=".2s"></div>
                <div class="box-minimal-main wow-outer">
                  <h4 class="box-minimal-title wow slideInDown" data-wow-delay=".2s">100% Guaranteed</h4>
                  <p class="wow fadeInUpSmall" data-wow-delay=".2s">All the results that you get from our realtors are 100% guaranteed to offer you the best choice of properties throughout the USA.</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- Services-->
      <section class="section novi-background section-lg text-center">
        <div class="container">
          <h3 class="text-uppercase">property categories</h3>
          <p><span class="text-width-1">At our agency, we work with various types of real estate property. You can find out more about our properties by browsing our website.</span></p>
          <div class="row row-35 row-xxl-70 offset-top-2">
            <div class="col-sm-6 col-lg-3">
              <!-- Thumbnail Light-->
              <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img class="thumbnail-light-image" src="https://livedemo00.template-help.com/wt_51575/images/service-thumbnail-1-270x300.jpg" alt="" width="270" height="300"/></a>
                <h4 class="thumbnail-light-title"><a href="#">Single-Family Homes</a></h4>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3">
              <!-- Thumbnail Light-->
              <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img class="thumbnail-light-image" src="http://archstonekenya.com/images/fulls/IMG-20230416-WA0000.jpg" alt="" width="270" height="300"/></a>
                <h4 class="thumbnail-light-title"><a href="#">Townhouses</a></h4>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3">
              <!-- Thumbnail Light-->
              <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img class="thumbnail-light-image" src="https://livedemo00.template-help.com/wt_51575/images/service-thumbnail-3-270x300.jpg" alt="" width="270" height="300"/></a>
                <h4 class="thumbnail-light-title"><a href="#">Ambassadorial Homes</a></h4>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3">
              <!-- Thumbnail Light-->
              <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img class="thumbnail-light-image" src="http://archstonekenya.com/images/fulls/offf1.jpg" alt="" width="270" height="300"/></a>
                <h4 class="thumbnail-light-title"><a href="#">Offices</a></h4>
              </article>
            </div>
            <!-- <div class="col-md-12 wow-outer"><a class="button button-primary button-winona button-md" href="properties.php">view all properties</a></div> -->
          </div>
        </div>
      </section>
      
      <!-- <a class="banner" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" target="_blank"><img src="images/intense_big_02.jpg" alt=""/></a> -->
      <?php include('footer.php'); ?>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>