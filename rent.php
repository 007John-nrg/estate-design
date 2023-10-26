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
      
    <?php include('header.php'); ?>

      <section class="section novi-background section-md text-center">
        <div class="container">
          <h3 class="text-uppercase font-weight-bold wow-outer"><span class="wow slideInDown">properties for rent</span></h3>

          <div class="row row-lg-50 row-35 offset-top-2">
        
            <?php    
              if(isset($_POST['filter']))
              {
                $filter = $_POST['filter'];
                $result = mysqli_query($conn, "SELECT * FROM property where rooms like '%$filter%' or Category like '%$filter%' or location like '%$filter%' or price like '%$filter%' or propertytype like '%$filter%' ");
                          
              } else {
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $limit = 9;
                $offset = ($page - 1) * $limit;

                // $result = mysqli_query($conn, "SELECT * FROM property where id not in('139','138','136','165') and not status ='Unavailable'  ORDER BY  indexp DESC LIMIT $page1,9 ");
                $result = mysqli_query($conn, "SELECT * FROM property WHERE category = 'Rental' AND status = 'Available' LIMIT $limit OFFSET $offset;");
              }
                
              if($result){        
              while($row=mysqli_fetch_array($result)){

                $description = $row['Description'];
                $periodPos = strpos($description, '.');
                if ($periodPos !== false) {
                  $description = substr($description, 0, $periodPos + 1);
                }
                
              $prodID = $row["ID"];
                echo '<div class="col-md-4 wow-outer">';
                echo '<article class="post-modern wow slideInLeft"><a class="post-modern-media" href="details.php"><img src="https://archstonekenya.com/images/fulls/'.$row['imgUrl'].'" alt="" width="571" height="353"/></a>
                <h4 class="post-modern-title"><a class="post-modern-title" href="#">'.$row['location'].'</a></h4>
                <ul class="post-modern-meta">
                  <li><a class="button-winona" href="#">'.$row['Price'].'</a></li>
                  <li>'.$row['rooms'].' Bedrooms</li>
                </ul>
                <p>' . $description . '</p>
                </article>';
                echo '</div>'; 
              }
             }
            ?>
          </div>

          <!-- <div class="row row-lg-50 row-35 offset-top-2">
            <div class="col-md-4 wow-outer">
              
              <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img src="https://archstonekenya.com/images/fulls/liv11.jpg.jpeg" alt="" width="571" height="353"/></a>
                <h4 class="post-modern-title"><a class="post-modern-title" href="#">Lower Kabete</a></h4>
                <ul class="post-modern-meta">
                  <li><a class="button-winona" href="#">Ksh-125 million</a></li>
                  
                  <li>5 Bedrooms</li>
                </ul>
                <p>Very beautiful 5 bedroom with and an extra room on the lower floor house in a gated community</p>
              </article>
            </div>
            <div class="col-md-4 wow-outer">
              <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img src="http://archstonekenya.com/images/fulls/WhatsApp%20Image%202020-06-08%20at%2010.52.36%20(1).jpeg" alt="" width="571" height="353"/></a>
                <h4 class="post-modern-title"><a class="post-modern-title" href="#">Ridgeways</a></h4>
                <ul class="post-modern-meta">
                  <li><a class="button-winona" href="#">$1300/mon</a></li>
                  <li>4 Bedrooms</li>
                </ul>
                <p>Well finished four bedroom townhouse in a gated community with a study room</p>
              </article>
            </div>
            <div class="col-md-4 wow-outer">
              <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img src="http://archstonekenya.com/images/fulls/Ben1.webp" alt="" width="571" height="353"/></a>
                <h4 class="post-modern-title"><a class="post-modern-title" href="#">Lavington</a></h4>
                <ul class="post-modern-meta">
                  <li><a class="button-winona" href="#">Ksh-340,000/mon</a></li>
                  <li>5 Bedrooms</li>
                </ul>
                <p>5 bedroom all ensuite spacious house in a compound of two houses</p>
              </article>
            </div>
            <div class="col-md-4 wow-outer">
              <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img src="https://archstonekenya.com/images/fulls/Living.jpeg" alt="" width="571" height="353"/></a>
                <h4 class="post-modern-title"><a class="post-modern-title" href="#">Rossyln</a></h4>
                <ul class="post-modern-meta">
                  <li><a class="button-winona" href="#">Ksh-410,000/mon</a></li>
                  <li>5 Bedrooms</li>
                </ul>
                <p>In Rosslyn 5 bedroom all ensuite Villa in a gated community, Has its private gate.</p>
              </article>
            </div>
            <div class="col-md-4 wow-outer">
              <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img src="http://archstonekenya.com/images/fulls/Ben1.webp" alt="" width="571" height="353"/></a>
                <h4 class="post-modern-title"><a class="post-modern-title" href="#">Lavington</a></h4>
                <ul class="post-modern-meta">
                  <li><a class="button-winona" href="#">Ksh-340,000/mon</a></li>
                  <li>5 Bedrooms</li>
                </ul>
                <p>5 bedroom all ensuite spacious house in a compound of two houses</p>
              </article>
            </div>
            <div class="col-md-4 wow-outer">
              <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img src="https://archstonekenya.com/images/fulls/Living.jpeg" alt="" width="571" height="353"/></a>
                <h4 class="post-modern-title"><a class="post-modern-title" href="#">Rossyln</a></h4>
                <ul class="post-modern-meta">
                  <li><a class="button-winona" href="#">Ksh-410,000/mon</a></li>
                  <li>5 Bedrooms</li>
                </ul>
                <p>In Rosslyn 5 bedroom all ensuite Villa in a gated community, Has its private gate.</p>
              </article>
            </div> -->

            <!--             
            <div class="col-md-12 wow-outer"><a class="button button-primary button-winona button-md" href="#">view More properties</a></div> -->
          </div>

          <div class="container">
            <?php
              $result = mysqli_query($conn, "SELECT * FROM property WHERE category = 'Rental' AND status = 'Available' ;");
              $cou = mysqli_num_rows($result);
              $a = $cou/9;
              $a=ceil($a);
                echo "<br>";
              echo "<br>";
              echo "<br>";
              echo "<br/>";
              for ($b=1; $b<=$a ; $b++) { 

              ?>
              <a href="rent.php?page=<?php echo $b;?>" style="background-color:#377386; color:#fff; padding:8px; text-align:center; border-radius: .5rem; "><?php echo "\n\n".$b."";  ?></a> &nbsp;&nbsp;<?php
              }

            ?>
          </div>
        </div>
      </section>
      
      <!-- Services-->
      
      
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