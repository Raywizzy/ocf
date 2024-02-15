<!DOCTYPE html>
<html lang="en">

<head>
  <!--================ Basic page needs ================-->
  <title>OCF | Portfolio</title>
  <meta charset="UTF-8" />
  <meta name="author" content="" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <!--================ Mobile specific metas ================-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!--================ Favicon ================-->
  <link rel="shortcut icon" href="images/Foundation.png" />
  <!--================ Google web fonts ================-->
  <link
    href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@400;500;700;800;900&family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css?family=Material+Icons%7CMaterial+Icons+Outlined%7CMaterial+Icons+Two+Tone%7CMaterial+Icons+Round%7CMaterial+Icons+Sharp"
    rel="stylesheet" />
  <!--================ Vendor CSS ================-->
  <link rel="stylesheet" href="vendors/owl-carousel/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/arcticmodal/jquery.arcticmodal-0.3.css" />
  <link rel="stylesheet" href="css/fontawesome-all.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.js" />
  <link rel="stylesheet" href="vendors/revolution/css/settings.css" />
  <link rel="stylesheet" href="vendors/revolution/css/layers.min.css" />
  <link rel="stylesheet" href="vendors/revolution/css/navigation.min.css" />
  <!--================ Theme CSS ================-->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <!--================ Vendor JS ================-->
</head>

<body class="mad-body--scheme-brown">
  <div class="mad-preloader"></div>
  <div id="mad-page-wrapper" class="mad-page-wrapper">
    <div class="container wide">
      <!--================ Search Modal ================-->
      <div class="mad-d-none">
        <div id="search-modal" class="mad-modal mad-modal--search">
          <h6 class="mad-title">Search</h6>
          <!--================ Search Form ================-->
          <form class="mad-search-section">
            <input type="text" placeholder="Start Typing Here..." />
            <button type="submit" class="btn"><i class="material-icons">search</i><span>Search</span></button>
          </form>
          <!--================ End of Search Form ================-->
          <button type="button" class="arcticmodal-close">
            <i class="material-icons">close</i>
          </button>
        </div>
      </div>
      <!--================ End of Search Modal ================-->
      <!--================ Header ================-->
      <?php include 'header.php'; ?>
      <!--================ End of Header ================-->
      <!--================ End of Header ================-->
      <!--================ Breadcrumb ================-->
      <div class="mad-breadcrumb with-bg-img with-overlay" data-bg-image-src="images/1792x512_bg1.jpg">
        <div class="container wide">
          <h1 class="mad-page-title">Portfolio</h1>
          <nav class="mad-breadcrumb-path">
            <span><a href="index.php" class="mad-link">Home</a></span> / <span>Portfolio</span>
          </nav>
        </div>
      </div>
      <!--================ End of Breadcrumb ================-->
      <div class="mad-content">
        <div class="container">
          <!--================ Filter ================-->
          <nav class="mad-filter-wrap">
            <ul id="portfolio-filter" class="mad-filter justify-content-center">
              <li><a href="#" data-filter="*" class="mad-active">All</a></li>
              <li>
                <a href="#" data-filter=".mad-category-volunteering">Volunteering</a>
              </li>
              <li>
                <a href="#" data-filter=".mad-category-campaigns">Campaigns</a>
              </li>
              <li>
                <a href="#" data-filter=".mad-category-fundraising">Fundraising</a>
              </li>
              <li>
                <a href="#" data-filter=".mad-category-donation">Donation</a>
              </li>
            </ul>
          </nav>
          <!--================ End of Filter ================-->
          <!--================ Gallery ================-->
          <div data-isotope-layout="grid" data-isotope-filter="#portfolio-filter"
            class="mad-portfolio item-col-2 mad-grid--isotope">
            <div class="mad-grid-sizer"></div>
            <div class="mad-grid-item mad-category-fundraising">
              <!--================ Gallery Item ================-->
              <div class="mad-gallery-item">
                <a href="#" class="mad-gallery-media"><img src="images/img_4344.jpg"
                    alt="" /></a>
                <div class="mad-gallery-desc">
                  <a href="#" class="mad-gallery-cat">Fundraising</a>
                  <h4 class="mad-gallery-name">
                    <a href="#">Community Drives</a>
                  </h4>
                </div>
              </div>
              <!--================ End Of Gallery Item ================-->
            </div>
            <div class="mad-grid-item mad-category-volunteering">
              <!--================ Gallery Item ================-->
              <div class="mad-gallery-item">
                <a href="#" class="mad-gallery-media"><img src="images/volunteer-south-africa-1.jpg"
                    alt="" /></a>
                <div class="mad-gallery-desc">
                  <a href="#" class="mad-gallery-cat">Volunteering</a>
                  <h4 class="mad-gallery-name">
                    <a href="#">Education Support</a>
                  </h4>
                </div>
              </div>
              <!--================ End Of Gallery Item ================-->
            </div>
            <div class="mad-grid-item mad-category-volunteering">
              <!--================ Gallery Item ================-->
              <div class="mad-gallery-item">
                <a href="#" class="mad-gallery-media"><img src="images/IMG_0904.jpgAPHRC-768x512.jpg"
                    alt="" /></a>
                <div class="mad-gallery-desc">
                  <a href="#" class="mad-gallery-cat">Volunteering</a>
                  <h4 class="mad-gallery-name">
                    <a href="#">Healthcare Initiatives</a>
                  </h4>
                </div>
              </div>
              <!--================ End Of Gallery Item ================-->
            </div>
            <div class="mad-grid-item mad-category-fundraising">
              <!--================ Gallery Item ================-->
              <div class="mad-gallery-item">
                <a href="#" class="mad-gallery-media"><img src="images/rsz_20181123_102743.jpg"
                    alt="" /></a>
                <div class="mad-gallery-desc">
                  <a href="#" class="mad-gallery-cat">Fundraising</a>
                  <h4 class="mad-gallery-name">
                    <a href="#">Peer-to-Peer Fundraising</a>
                  </h4>
                </div>
              </div>
              <!--================ End Of Gallery Item ================-->
            </div>
            <div class="mad-grid-item mad-category-donation">
              <!--================ Gallery Item ================-->
              <div class="mad-gallery-item">
                <a href="#" class="mad-gallery-media"><img src="images/R (30).jpg"
                    alt="" /></a>
                <div class="mad-gallery-desc">
                  <a href="#" class="mad-gallery-cat">Donation</a>
                  <h4 class="mad-gallery-name">
                    <a href="#">Disaster Relief</a>
                  </h4>
                </div>
              </div>
              <!--================ End Of Gallery Item ================-->
            </div>
            <div class="mad-grid-item mad-category-campaigns">
              <!--================ Gallery Item ================-->
              <div class="mad-gallery-item">
                <a href="#" class="mad-gallery-media"><img src="images/R (28).jpg"
                    alt="" /></a>
                <div class="mad-gallery-desc">
                  <a href="#" class="mad-gallery-cat">Campaigns</a>
                  <h4 class="mad-gallery-name">
                    <a href="#">Healthcare Heroes Campaign</a>
                  </h4>
                </div>
              </div>
              <!--================ End Of Gallery Item ================-->
            </div>
          </div>
          <!--================ End of Gallery ================-->
          <div class="align-center">
            <a href="#" class="btn btn-big style-2"><span>Load More</span><span class="icon material-icons">
                arrow_forward_ios </span></a>
          </div>
        </div>
      </div>
      <div class="mad-social-section">
        <div class="container">
          <div class="mad-social-wrap">
            <div class="mad-col">
              <h5>Stay Informed With News & Updates</h5>
              <form class="mad-newsletter-form one-line size-2">
                <input type="email" name="email" placeholder="Enter Email Address" />
                <button type="submit" class="btn btn-huge btn-style-3"><img src="charity_icons_svg/envelope.svg" alt=""
                    class="svg" /></button>
              </form>
            </div>
            <div class="mad-col">
              <h5>Follow Us on Our Social Channels</h5>
              <div class="mad-social-icons size-3">
                <ul class="justify-content-center">
                  <li>
                    <a href="https://www.facebook.com/monkeysan"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="https://twitter.com/velikorodnov"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="https://www.youtube.com/channel/UCHLY0iBPh03oLba9Hc0ABMg"><i
                        class="fab fa-youtube"></i></a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com/in/sergii-velykorodnov-714b5a25/"><i
                        class="fab fa-pinterest-p"></i></a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com/in/sergii-velykorodnov-714b5a25/"><i
                        class="fab fa-linkedin-in"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
  <!--================ Footer ================-->
  <?php include 'footer.php'; ?>
  <!--================ End of Footer ================-->
</div>
</div>
<script src="vendors/modernizr.js"></script>
<script src="vendors/jquery-3.6.0.min.js"></script>
<script src="vendors/jquery.easing.1.3.min.js"></script>
<script src="vendors/jquery.parallax-1.1.3.min.js"></script>
<script src="vendors/monkeysan.tabs.min.js"></script>
<script src="vendors/monkeysan.jquery.nav.1.0.js"></script>
<script src="vendors/monkeysan.validator.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="vendors/handlebars-v4.0.5.min.js"></script>
<script src="vendors/isotope.pkgd.min.js"></script>
<script src="vendors/arcticmodal/jquery.arcticmodal-0.3.min.js"></script>
<script src="vendors/retina.min.js"></script>
<script src="vendors/fancybox/jquery.fancybox.min.js"></script>
<script src="vendors/mad.customselect.js"></script>
<script src="js/modules/mad.isotope.js"></script>
<script src="js/modules/mad.alert-box.min.js"></script>
<script src="js/modules/mad.newsletter-form.min.js"></script>
<script src="js/modules/mad.sticky-header-section.min.js"></script>
<script src="js/mad.app.js"></script>
</body>

</html>