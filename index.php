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
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/style.css" id="main-styles-link">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript">
      $(function() {
        $( "#slider-range" ).slider({
          range: true,
          min: 0,
          max: 500,
          values: [ 100, 300 ],
          slide: function( event, ui ) {
            $( "#amount" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        $( "#amount1" ).val(ui.values[ 0 ]);
        $( "#amount2" ).val(ui.values[ 1 ]);
          }
        });
        $( "#amount" ).html( "$" + $( "#slider-range" ).slider( "values", 0 ) +
        " - $" + $( "#slider-range" ).slider( "values", 1 ) );
      });
    </script>
  
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



      <section id="aa-advance-search">
        <div class="container">
          <div class="aa-advance-search-area">
            <div class="form">
            <div class="aa-advance-search-top">
                <div class="row">
                  <div class="col-md-3">
                    <div class="aa-single-advance-search">
                      <input type="text" placeholder="Type Location">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="aa-single-advance-search">
                      <select>
                       <!-- <option value="0" selected>Category</option> -->
                        <option value="1">For sale</option>
                        <option value="2">For rent</option>
                        <!-- <option value="3">Plot</option>
                        <option value="4">Commercial</option> -->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="aa-single-advance-search">
                      <select>
                        <option value="0" selected>Bedrooms</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="4">5</option>
                        <option value="4">6</option>
                        <option value="4">7</option>
                      </select>
                  </div>
                  </div>
                  <!-- <div class="col-md-2">
                    <div class="aa-single-advance-search">
                      <select>
                        <option value="0" selected>Type</option>
                        <option value="1">Flat</option>
                        <option value="2">Land</option>
                        <option value="3">Plot</option>
                        <option value="4">Commercial</option>
                      </select>
                  </div>
                  </div> -->
                  <div class="col-md-3">
                    <div class="aa-single-advance-search">
                      <a class="button button-primary button-winona button-md" href="#">Search</a>
                    </div>
                  </div>
                </div>
              </div>
            <div class="aa-advance-search-bottom">
              <div class="row">
                <!-- <div class="col-md-6">
                  <div class="aa-single-filter-search">
                    <span>AREA (SQ)</span>
                    <span>FROM</span>
                    <span id="skip-value-lower" class="example-val">30.00</span>
                    <span>TO</span>
                    <span id="skip-value-upper" class="example-val">100.00</span>
                    <div id="aa-sqrfeet-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                    </div>                  
                  </div>
                </div> -->
                <div class="col-md-6">
                  <div class="aa-single-filter-search">
                    <span>PRICE RANGE</span>
                    <span>FROM</span>
                    <span id="skip-value-lower2" class="example-val">Ksh.0</span>
                    <span>TO</span>
                    <span id="skip-value-upper2" class="example-val">Ksh.1,000,000,000</span>
                    <!-- <div id="aa-price-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                    </div>       -->
                    <div id="slider-range"></div>
                  </div>
                </div>
              </div>  
            </div>
            </div>
          </div>
        </div>
      </section>

      <!-- SELECT location, COUNT(*) AS occurrences FROM property GROUP BY location ORDER BY occurrences DESC; -->

      <?php
        $result = mysqli_query($conn, "SELECT location, COUNT(*) AS occurrences FROM property GROUP BY location ORDER BY occurrences DESC;");
  
        while($row=mysqli_fetch_array($result)) {}
        foreach ($data as $row) {
          $html .= '<div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">';
          $html .= '<ul class="places-list">';
          $html .= '<li><a href="#">' . $row['location'] . ' <br/><span>' . $row['occurrences'] . ' Properties</span></a></li>';
          $html .= '</ul>';
          $html .= '</div>';
        }

        echo $html;
      ?>

      <section class="ftco-section">
        <div class="container-xl">
          <div class="row justify-content-center">
            <div class="col-md-10">
              <div class="row"></div>
            </div>
          </div>
        </div>
      </section>


      <section class="ftco-section">
        <div class="container-xl">
          <div class="row justify-content-center">
            <div class="col-md-10">
              <div class="row">
                <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                  <ul class="places-list">
                    <li>
                      <a href="#">Runda <br/><span>200 Properties</span></a>
                    </li>
                    <li>
                      <a href="#">Runda <br/><span>100 Properties</span></a>
                    </li>
                    <li>
                      <a href="#">Runda <br/><span>120 Properties</span></a>
                    </li>
                    <li>
                      <a href="#">Runda <br/><span>300 Properties</span></a>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                  <ul class="places-list">
                    <li>
                      <a href="#">Runda <br/><span>100 Properties</span></a>
                    </li>
                    <li>
                      <a href="#">Runda <br/><span>200 Properties</span></a>
                    </li>
                    <li>
                      <a href="#">Runda <br/><span>200 Properties</span></a>
                    </li>
                    <li>
                      <a href="#">Runda <br/><span>200 Properties</span></a>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
                  <ul class="places-list">
                    <li>
                      <a href="#">Runda <br/><span>422 Properties</span></a>
                    </li>
                    <li>
                      <a href="#">Runda <br/><span>200 Properties</span></a>
                    </li>
                    <li>
                      <a href="#">Runda <br/><span>200 Properties</span></a>
                    </li>
                    <li>
                      <a href="#">Runda <br/><span>200 Properties</span></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="section novi-background section-md text-center">
        <div class="container">
          <h3 class="text-uppercase font-weight-bold wow-outer"><span class="wow slideInDown">Featured properties</span></h3>
          <div class="row row-lg-50 row-35 offset-top-2">
            <div class="col-md-4 wow-outer">
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
            <div class="col-md-4 wow-outer">
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
            <div class="col-md-4 wow-outer">
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
            <div class="col-md-4 wow-outer">
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
            <div class="col-md-4 wow-outer">
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
            <div class="col-md-4 wow-outer">
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
            <div class="col-md-12 wow-outer"><a class="button button-primary button-winona button-md" href="#">view More properties</a></div>
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
                  <p class="wow fadeInUpSmall" data-wow-delay=".2s">All the results that you get from our realtors are 100% guaranteed to offer you the best choice of properties.</p>
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
    <!-- <script type="text/javascript" src="js/slider.js"></script> -->
  </body>
</html>