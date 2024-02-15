<!DOCTYPE html>
<html lang="en">

<head>
  <!--================ Basic page needs ================-->
  <title>OCF | Login</title>
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
      <!--================ Breadcrumb ================-->
      <div class="mad-breadcrumb with-bg-img with-overlay" data-bg-image-src="images/1792x512_bg6.jpg">
        <div class="container wide">
          <h1 class="mad-page-title">Login</h1>
          <nav class="mad-breadcrumb-path">
            <span><a href="index.html" class="mad-link">Home</a></span> / <span>Login</span>
          </nav>
        </div>
      </div>
      <!--================ End of Breadcrumb ================-->
      <div class="mad-content">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-10">
              <h2 class="mad-page-title align-center">Login</h2>
              <!-- - - - - - - - - - - - - - Login Form - - - - - - - - - - - - - - - - -->
              <form class="mad-form type-2 item-col-1">
                <div class="mad-col">
                  <div class="content-element-4">
                    <div class="row align-items-center">
                      <div class="col-sm-6">
                        <div class="input-box">
                          <label class="no-cap">Username or Email <span>*</span></label>
                          <input type="text" required="" placeholder="Username or email" />
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="input-box">
                          <label>Password <span>*</span></label>
                          <input type="text" required="" placeholder="Password" />
                        </div>
                      </div>
                      <div class="col-lg-6 col-sm-7">
                        <div class="btn-set size-2 align-items-center">
                          <a href="#" class="btn btn-big"><span>Submit</span> <span
                              class="icon material-icons">arrow_forward_ios</span> </a>
                          <div class="content-element-2">
                            <div style="display: block" class="mad-toggled-fields size-2">
                              <input type="checkbox" name="checkbox-1" id="checkbox-1" />
                              <label for="checkbox-1" class="mad-label-checkbox">Remember me</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-sm-5">
                        <div class="lg-align-right"><a href="#" class="mad-link mad-text-medium mad-fw-medium">Lost your
                            password? </a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!-- - - - - - - - - - - - - - End of Login Form - - - - - - - - - - - - - - - - -->
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
  <script src="vendors/monkeysan.accordion.js"></script>
  <script src="vendors/monkeysan.jquery.nav.1.0.js"></script>
  <script src="vendors/monkeysan.validator.min.js"></script>
  <script src="vendors/handlebars-v4.0.5.min.js"></script>
  <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
  <script src="vendors/arcticmodal/jquery.arcticmodal-0.3.min.js"></script>
  <script src="vendors/retina.min.js"></script>
  <script src="vendors/sticky-sidebar.js"></script>
  <script src="vendors/monkeysan.tabs.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/mad.customselect.js"></script>
  <script src="vendors/fancybox/jquery.fancybox.min.js"></script>
  <script src="vendors/elevatezoom.min.js"></script>
  <script src="js/modules/mad.alert-box.min.js"></script>
  <script src="js/modules/mad.newsletter-form.min.js"></script>
  <script src="js/modules/mad.sticky-header-section.min.js"></script>
  <script src="js/mad.app.js"></script>
</body>

</html>