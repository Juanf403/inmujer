
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name = "format-detection" content = "telephone=no" />
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/camera.css">
  <link rel="stylesheet" href="css/search.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="js/camera.js"></script>
  <script src="js/search.js"></script>
  <script src="js/jquery.equalheights.js"></script>
  <script src="//maps.googleapis.com/maps/api/js?v=3.exp"></script>
  <!--[if (gt IE 9)|!(IE)]><!-->
  <script src="js/jquery.mobile.customized.min.js"></script>
  <script src="js/wow.js"></script>
  <script>
    $(document).ready(function () {
      if ($('html').hasClass('desktop')) {
        new WOW().init();
      }
    });
  </script>
  <!--<![endif]-->
  <script>
    $(document).ready(function () {
      $('#camera_wrap').camera({
        loader: true,
        pagination: false,
        minHeight: '',
        thumbnails: false,
        height: '31.70731707317073%',
        caption: true,
        navigation: true,
        fx: 'simpleFade',
        onLoaded: function () {
          $('.slider-wrapper')[0].style.height = 'auto';
        }
      });

      var map;
      function initialize() {
        var mapOptions = {
          zoom: 12,
          scrollwheel: false,
          center: new google.maps.LatLng(40.659383, -73.926059),
          mapTypeControlOptions: {
            position: google.maps.ControlPosition.RIGHT_CENTER
          }
        };
        map = new google.maps.Map(document.getElementById('google-map'),
                mapOptions);
        var marker = new google.maps.Marker({
          position: new google.maps.LatLng(40.635,-73.926059),
          map: map,
          title:"Maternity Hospital",
          icon: "images/marker.png",
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    });
  </script>
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <div id="ie6-alert" style="width: 100%; text-align:center;">
    <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0" usemap="#Map" longdesc="http://die6.frontcube.com" />
    <map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" />
      <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
    </map>
  </div>
  <![endif]-->
</head>


<body>
<!--========================================================
                          HEADER
=========================================================-->
<header id="header">
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <div class="info">
          <div class="row">
            <div class="grid_6">
              <h1 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s">
                <a href="index.html">
                  <span class="first">Maternity</span>
                  <span class="second">Hospital</span>
                </a>
              </h1>
            </div>
            <div class="grid_6">
              <div class="phone wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
                <span class="first">Call us:</span>
                <address>800 2345-6789</address>
                <p>Lorem ipsum dolor sit amet conse ctetur<br> adipisicing elit, sed do eiusmod.</p>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
  <div id="stuck_container">
    <div class="container">
      <div class="row">
        <div class="grid_9">
          <nav>
            <ul class="sf-menu">
              <li class="current"><a href="index.html">Home</a></li>
              <li><a href="index-1.html">About</a></li>
              <li><a href="index-2.html">Services</a>
                <ul>
                  <li><a href="#">Lorem ipsum</a></li>
                  <li><a href="#">Dolor sit amet</a>
                    <ul>
                      <li><a href="#">Pellentesque</a></li>
                      <li><a href="#">Aliquam</a></li>
                      <li><a href="#">Mauris</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Conse ctetur</a></li>
                </ul>
              </li>
              <li><a href="index-3.html">News &amp; Events</a></li>
              <li><a href="index-4.html">Contacts</a></li>
            </ul>
            <div class="clearfix"></div>
          </nav>
        </div>
        <div class="grid_3">
          <form id="search" class="search-form" action="search.php" method="GET" accept-charset="utf-8">
            <input type="text" name="s"/>
            <a onclick="document.getElementById('search').submit()">
              <div class="search_icon"></div>
            </a>
          </form>
        </div>
      </div>
    </div>
  </div>
</header>




<!--========================================================
                          CONTENT
=========================================================-->
<section id="content">
  <div class="slider-wrapper">
    <div id="camera_wrap">
      <div data-src="images/slider1.png">
        <div class="caption fadeIn">
          <div class="container">
            <div class="row">
              <div class="grid_12">
                <span class="first">Helping your child</span>
                <span class="second">come into this world</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-src="images/slider2.png">
        <div class="caption fadeIn">
          <div class="container">
            <div class="row">
              <div class="grid_12">
                <span class="first">Feel like in hotel</span>
                <span class="second">during your stay</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-src="images/slider3.png">
        <div class="caption fadeIn">
          <div class="container">
            <div class="row">
              <div class="grid_12">
                <span class="first">Making your stay</span>
                <span class="second">a happy one</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="wrapper1">
    <div class="container">
      <div class="row">
        <div class="grid_12">
          <div class="box1-wrapper1">
            <div class="row">
              <div class="grid_4">
                <div class="box1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                  <img src="images/page1_img1.png" alt=""/>
                  <div class="content content__inset1 maxheight">
                    <h4>
                      <a href="#">Neonatal<span class="light">Care</span></a>
                    </h4>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididun</p>
                  </div>
                </div>
              </div>

              <div class="grid_4">
                <div class="box1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                  <img src="images/page1_img2.png" alt=""/>
                  <div class="content content__inset2 maxheight">
                    <h4>
                      <a href="#">Maternity<span class="light">Care</span></a>
                    </h4>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididun</p>
                  </div>
                </div>
              </div>

              <div class="grid_4">
                <div class="box1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                  <img src="images/page1_img3.png" alt=""/>
                  <div class="content content__inset3 maxheight">
                    <h4>
                      <a href="#">Gynaecology<span class="light">Care</span></a>
                    </h4>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididun</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="wrapper2">
    <div class="container">
      <div class="row">
        <div class="grid_12">
          <div class="heading1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
            <h2>Support & assistance in delivering <span class="light">the future generation</span></h2>
          </div>
          <div class="box2-wrapper1">
            <div class="row">
              <div class="grid_4">
                <div class="box2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                  <h3 class="h3__inset1">
                    <a href="#">Lorem ipsum dolor sit amet conse ctetur</a>
                  </h3>
                  <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>

              <div class="grid_4">
                <div class="box2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                  <h3 class="h3__inset2">
                    <a href="#">Reprehenderit in voluptate velit esse cillum</a>
                  </h3>
                  <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>

              <div class="grid_4">
                <div class="box2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                  <h3 class="h3__inset3">
                    <a href="#">Voluptate velit esse cillum dolore eu fugia</a>
                  </h3>
                  <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>

              <div class="grid_12">
                <a class="btn-big wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" href="#">Read more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="wrapper3">
    <div class="container">
      <div class="row">
        <div class="grid_12">
          <div class="heading2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
            <h5>Our specialists</h5>
          </div>
          <div class="box3-wrapper1">
            <div class="row">
              <div class="grid_3">
                <div class="box3 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                  <img src="images/page1_img4.png" alt=""/>
                  <h3>
                    <a href="#">Lorem Ipsum</a>
                  </h3>
                  <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamc</p>
                </div>
              </div>

              <div class="grid_3">
                <div class="box3 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                  <img src="images/page1_img5.png" alt=""/>
                  <h3>
                    <a href="#">Excepteur sint</a>
                  </h3>
                  <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamc</p>
                </div>
              </div>

              <div class="grid_3">
                <div class="box3 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                  <img src="images/page1_img6.png" alt=""/>
                  <h3>
                    <a href="#">Occaecat cupidatat</a>
                  </h3>
                  <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamc</p>
                </div>
              </div>

              <div class="grid_3">
                <div class="box3 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                  <img src="images/page1_img7.png" alt=""/>
                  <h3>
                    <a href="#">Non proident</a>
                  </h3>
                  <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamc</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="wrapper4">
    <div class="container">
      <div class="row">
        <div class="grid_12">
          <div class="heading1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
            <h2>Providing the best of care</h2>
          </div>
          <div class="row">
            <div class="list1-wrapper1">
              <div class="grid_4">
                <ul class="list1">
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <a href="#">Lorem ipsum</a>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <a href="#">Dolor sit amet</a>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <a href="#">Conse ctetur</a>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                    <a href="#">Adipisicing</a>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <a href="#">Elit sed do eiusmod</a>
                  </li>
                </ul>
              </div>
              <div class="grid_4">
                <ul class="list1">
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <a href="#">Tempor</a>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <a href="#">Incididunt ut</a>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <a href="#">Labore</a>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                    <a href="#">Et dolore magna</a>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <a href="#">Ut enim</a>
                  </li>
                </ul>
              </div>
              <div class="grid_4">
                <ul class="list1">
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <a href="#">Ad minim veniam</a>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <a href="#">Quis nostrud</a>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <a href="#">Exercitation</a>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                    <a href="#">Ullamco laboris nisi</a>
                  </li>
                  <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <a href="#">Ut aliqu</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="map-wrapper1 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.1s">
    <div class="google-map1" id="google-map"></div>
  </div>
</section>


<!--========================================================
                          FOOTER
=========================================================-->
<footer id="footer">
  <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="grid_12">
          <div class="socials">
            <ul class="socials1">
              <li class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s"><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s"><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
          </div>
          <div class="footer_menu">
            <nav>
              <ul>
                <li class="wow fadeInUp current" data-wow-duration="1s" data-wow-delay="0.1s"><a href="index.html">Home</a></li>
                <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><a href="index-1.html">About</a></li>
                <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"><a href="index-2.html">Services</a></li>
                <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"><a href="index-3.html">News &amp; Events</a></li>
                <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"><a href="index-4.html">Contacts</a></li>
              </ul>
            </nav>
          </div>
          <div class="row">
            <div class="grid_10 preffix_1">
              <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamc.</p>
            </div>
          </div>
          <div class="privacy-block wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
            <a href="index.html">Maternity Hospital</a> &copy; <span id="copyright-year"></span>. <a
                  href="index-5.html">Privacy Policy</a>
            <!--{%FOOTER_LINK} -->
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="js/script.js"></script>
<script type="text/javascript">
 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7078796-5']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();</script>
</body>
</html>