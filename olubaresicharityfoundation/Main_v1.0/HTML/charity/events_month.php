<!DOCTYPE html>
<html lang="en">

<head>
  <!--================ Basic page needs ================-->
  <title>OCF | Events</title>
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
      <div class="mad-breadcrumb with-bg-img with-overlay" data-bg-image-src="images/1792x512_bg1.jpg">
        <div class="container wide">
          <h1 class="mad-page-title">Upcoming Events</h1>
          <nav class="mad-breadcrumb-path">
            <span><a href="index.php" class="mad-link">Home</a></span> / <span>Upcoming Events</span>
          </nav>
        </div>
      </div>
      <!--================ End of Breadcrumb ================-->
      <div class="mad-content">
        <div class="container">
          <div class="mad-events-nav">
            <form class="mad-form">
              <div class="mad-col">
                <input type="text" placeholder="Search For Events" />
                <i class="material-icons">search</i>
              </div>
              <div class="mad-col">
                <input type="text" placeholder="In a Location" />
                <i><img src="charity_icons_svg/location.svg" alt="" class="svg" /></i>
              </div>
              <div class="mad-col">
                <button class="btn btn-big">Find Events</button>
                <button id="mad-toggle-filter" class="mad-toggle-filter"><i class="material-icons"> tune </i>Hide
                  Filters</button>
                <div class="mad-custom-select">
                  <select data-default-text="List">
                    <option>List</option>
                    <option>Month</option>
                    <option>Day</option>
                  </select>
                </div>
              </div>
            </form>
            <div id="mad-filters" class="mad-filters">
              <div class="mad-col">
                <div class="mad-event-select">
                  <button>Visual Events</button>
                  <div class="mad-event-select-box">
                    <a href="#" class="mad-event-close"><span class="material-icons"> close </span></a>
                    <div class="mad-select-title">Visual Events</div>
                    <div class="form-control">
                      <div style="display: block" class="mad-toggled-fields">
                        <input type="radio" name="radio-1" id="radio-1" checked="checked" />
                        <label for="radio-1" class="mad-label-radio">Show all events</label>
                        <input type="radio" name="radio-1" id="radio-2" />
                        <label for="radio-2" class="mad-label-radio">Show only virtual events</label>
                        <input type="radio" name="radio-1" id="radio-3" />
                        <label for="radio-3" class="mad-label-radio">Hide virtual events </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mad-col">
                <div class="mad-event-select">
                  <button>Featured Events</button>
                  <div class="mad-event-select-box">
                    <a href="#" class="mad-event-close"><span class="material-icons"> close </span></a>
                    <div class="mad-select-title">Featured Events</div>
                    <div class="form-control">
                      <div style="display: block" class="mad-toggled-fields">
                        <input type="checkbox" name="checkbox-1" id="checkbox-1" />
                        <label for="checkbox-1" class="mad-label-radio">Show featured events only</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mad-col">
                <div class="mad-event-select">
                  <button>Event Category</button>
                  <div class="mad-event-select-box">
                    <a href="#" class="mad-event-close"><span class="material-icons"> close </span></a>
                    <div class="mad-select-title">Event Category</div>
                    <ul>
                      <li><a href="#">Campaigns</a></li>
                      <li><a href="#">Donation</a></li>
                      <li><a href="#">Fundraising</a></li>
                      <li><a href="#">Volunteering</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="mad-col">
                <div class="mad-event-select">
                  <button>Organizers</button>
                  <div class="mad-event-select-box">
                    <a href="#" class="mad-event-close"><span class="material-icons"> close </span></a>
                    <div class="mad-select-title">Organizers</div>
                    <ul>
                      <li><a href="#">John McCoist</a></li>
                      <li><a href="#">Olivia Kromstain</a></li>
                      <li><a href="#">Alan Smith</a></li>
                      <li><a href="#">Chandra Vancova</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="mad-col">
                <div class="mad-event-select">
                  <button>Tags</button>
                  <div class="mad-event-select-box">
                    <a href="#" class="mad-event-close"><span class="material-icons"> close </span></a>
                    <div class="mad-select-title">Tags</div>
                    <div class="tagcloud">
                      <a href="blog_classic_sidebar.html">abuse</a>
                      <a href="blog_classic_sidebar.html">charity</a>
                      <a href="blog_classic_sidebar.html">Child</a>
                      <a href="blog_classic_sidebar.html">Covid-19</a>
                      <a href="blog_classic_sidebar.html">Disaster</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mad-col">
                <div class="mad-event-select">
                  <button>Day</button>
                  <div class="mad-event-select-box">
                    <a href="#" class="mad-event-close"><span class="material-icons"> close </span></a>
                    <div class="mad-select-title">Day</div>
                    <div class="form-control">
                      <div style="display: block" class="mad-toggled-fields">
                        <input type="checkbox" name="checkbox-2" id="checkbox-2" />
                        <label for="checkbox-2" class="mad-label-radio">Sunday</label>
                        <input type="checkbox" name="checkbox-3" id="checkbox-3" />
                        <label for="checkbox-3" class="mad-label-radio">Monday</label>
                        <input type="checkbox" name="checkbox-4" id="checkbox-4" />
                        <label for="checkbox-4" class="mad-label-radio">Tuesday</label>
                        <input type="checkbox" name="checkbox-5" id="checkbox-5" />
                        <label for="checkbox-5" class="mad-label-radio">Wednesday</label>
                        <input type="checkbox" name="checkbox-6" id="checkbox-6" />
                        <label for="checkbox-6" class="mad-label-radio">Thursday</label>
                        <input type="checkbox" name="checkbox-7" id="checkbox-7" />
                        <label for="checkbox-7" class="mad-label-radio">Friday</label>
                        <input type="checkbox" name="checkbox-77" id="checkbox-77" />
                        <label for="checkbox-77" class="mad-label-radio">Saturday</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mad-col">
                <div class="mad-event-select">
                  <button>Time</button>
                  <div class="mad-event-select-box">
                    <a href="#" class="mad-event-close"><span class="material-icons"> close </span></a>
                    <div class="mad-select-title">Time</div>
                    <div class="form-control">
                      <div style="display: block" class="mad-toggled-fields">
                        <input type="checkbox" name="checkbox-8" id="checkbox-8" />
                        <label for="checkbox-8" class="mad-label-radio">All Day</label>
                        <input type="checkbox" name="checkbox-9" id="checkbox-9" />
                        <label for="checkbox-9" class="mad-label-radio">Morning</label>
                        <input type="checkbox" name="checkbox-10" id="checkbox-10" />
                        <label for="checkbox-10" class="mad-label-radio">Afternoon</label>
                        <input type="checkbox" name="checkbox-11" id="checkbox-11" />
                        <label for="checkbox-11" class="mad-label-radio">Evening</label>
                        <input type="checkbox" name="checkbox-12" id="checkbox-12" />
                        <label for="checkbox-12" class="mad-label-radio">Night</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mad-col">
                <div class="mad-event-select">
                  <button>Cost ($)</button>
                  <div class="mad-event-select-box">
                    <a href="#" class="mad-event-close"><span class="material-icons"> close </span></a>
                    <div class="mad-select-title">Cost ($)</div>
                    <div class="mad-range-slider-field">
                      <div class="mad-range-slider"></div>
                      <input type="text" value="Price: $1,000 - $99,000" name="check_availability_price" readonly
                        class="mad-range-slider-input" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mad-event-menu">
              <div class="mad-item">
                <div class="mad-event-arrows">
                  <a href="#"><i class="material-icons">arrow_back_ios</i></a>
                  <a href="#"><i class="material-icons">arrow_forward_ios</i></a>
                </div>
              </div>
              <div class="mad-item">
                <a href="#" class="btn btn-small btn-style-2">Today</a>
              </div>
              <div class="mad-item">
                <div class="mad-dropdown">
                  <button type="button" class="mad-dropdown-title"><span>October 2023</span><i
                      class="material-icons">keyboard_arrow_down</i></button>
                  <!-- message box -->
                  <div class="mad-dropdown-element">
                    <div class="calendar_wrap mad-calendar-rendered">
                      <table class="wp-calendar">
                        <caption> September 2022 <a class="calendar-caption-prev" href="#"><i
                              class="material-icons">keyboard_arrow_left</i></a>
                          <a class="calendar-caption-next" href="#"><i
                              class="material-icons">keyboard_arrow_right</i></a>
                        </caption>
                        <thead class="div">
                          <tr>
                            <th>Sun</th>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="first">30</td>
                            <td>31</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                          </tr>
                          <tr>
                            <td class="first">6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                            <td>11</td>
                            <td>12</td>
                          </tr>
                          <tr>
                            <td class="first">13</td>
                            <td>14</td>
                            <td>15</td>
                            <td class="mad-td-link"><a href="#">16</a></td>
                            <td>17</td>
                            <td>18</td>
                            <td>19</td>
                          </tr>
                          <tr>
                            <td class="first">20</td>
                            <td>21</td>
                            <td>22</td>
                            <td>23</td>
                            <td>24</td>
                            <td>25</td>
                            <td>26</td>
                          </tr>
                          <tr>
                            <td class="first">27</td>
                            <td>28</td>
                            <td>29</td>
                            <td>30</td>
                            <td>
                              <div class="marker">1</div>
                            </td>
                            <td>
                              <div class="marker">2</div>
                            </td>
                            <td>
                              <div class="marker">3</div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- end of message box -->
                </div>
              </div>
            </div>
          </div>
          <div id="calendar-wrap2" class="calendar_wrap big-calendar mad-calendar-rendered">
            <table id="wp-calendar-2" class="mad-table--responsive-md">
              <thead>
                <tr>
                  <th>Sun</th>
                  <th>Mon</th>
                  <th>Tue</th>
                  <th>Wed</th>
                  <th>Thu</th>
                  <th>Fri</th>
                  <th>Sat</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="active">30</td>
                  <td class="active">31</td>
                  <td class="active">1</td>
                  <td class="active">2</td>
                  <td class="active">3</td>
                  <td class="active">
                    <div class="event-holder">
                      <div class="mad-event">
                        <span class="td-num">4</span>
                        <figure class="mad-img">
                          <img src="images/164x96_img1.jpg" alt="" />
                        </figure>
                        <a href="#" class="mad-link"><span class="icon material-icons"> bookmark_border
                          </span><span>8:00 am - 5:00 pm</span></a>
                        <h6 class="mad-title"><a href="#" class="calendar-popup">Great London Marathon
                            2022</a></h6>
                      </div>
                      <div class="mad-event mad-event-popup">
                        <figure class="mad-img">
                          <img src="images/215x125_img1.jpg" alt="" />
                        </figure>
                        <a href="#" class="mad-link">October 21 @ 8:00 am - 5:00 pm</a>
                        <h6 class="mad-title"><a href="#">Great London Marathon 2022</a></h6>
                        <p> Join us for a beautiful summer walkathon to support our cause. Let's walk together for a brighter future.</p>
                        <span class="mad-event-price">Free</span>
                      </div>
                    </div>
                  </td>
                  <td class="active">5</td>
                </tr>
                <tr>
                  <td class="active">6</td>
                  <td class="active">7</td>
                  <td class="active">8</td>
                  <td>
                    <div>9</div>
                  </td>
                  <td>
                    <div class="event-holder">
                      <div class="mad-event">
                        <span class="td-num">10</span>
                        <a href="#" class="mad-link">1:00 am - 7:00 Am</a>
                        <h6 class="mad-title"><a href="#" class="calendar-popup">Glasgow Street
                            Concert</a></h6>
                      </div>
                      <div class="mad-event mad-event-popup">
                        <a href="#" class="mad-link">October 21 @ 1:00 am - 7:00 Am</a>
                        <h6 class="mad-title"><a href="#">Glasgow Street Concert</a></h6>
                        <p> Join us for a thrilling night of music at the Glasgow Street Concert. Enjoy live performances and create unforgettable memories.</p>
                        <span class="mad-event-price">Free</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div>11</div>
                  </td>
                  <td class="first">
                    <div>12</div>
                  </td>
                </tr>
                <tr>
                  <td>13</td>
                  <td>
                    <div>14</div>
                  </td>
                  <td>15</td>
                  <td>
                    <div class="td-link">16</div>
                  </td>
                  <td>17</td>
                  <td>18</td>
                  <td>19</td>
                </tr>
                <tr>
                  <td class="first">20</td>
                  <td class="active">
                    <div class="event-holder">
                      <div class="mad-event">
                        <span class="td-num">21</span>
                        <a href="#" class="mad-link">1:00 am - 7:00 Am</a>
                        <h6 class="mad-title"><a href="#" class="calendar-popup">Child Victims of
                            Domestic Abuse</a></h6>
                      </div>
                      <div class="mad-event mad-event-popup">
                        <figure class="mad-img">
                          <img src="images/215x125_img2.jpg" alt="" />
                        </figure>
                        <a href="#" class="mad-link">October 21 @ 1:00 am - 7:00 Am</a>
                        <h6 class="mad-title"><a href="#">Child Victims of Domestic Abuse</a></h6>
                        <p>Join us in supporting child victims of domestic abuse. Your involvement can make a significant difference in their lives, providing hope and a safe environment.</p>

                        <span class="mad-event-price">Free</span>
                      </div>
                    </div>
                  </td>
                  <td class="">22</td>
                  <td>
                    <div>23</div>
                  </td>
                  <td class="active">24</td>
                  <td class="active">
                    <div>25</div>
                  </td>
                  <td class="active">26</td>
                </tr>
                <tr>
                  <td class="active">27</td>
                  <td class="active">28</td>
                  <td class="active">
                    <div>29</div>
                  </td>
                  <td class="active">30</td>
                  <td class="active">1</td>
                  <td class="active">2</td>
                  <td class="active">
                    <div>3</div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <ul class="mad-pagination justify-content-center">
            <li>
              <a href="#" class="prev mad-arrows"><span class="material-icons"> add </span><span>Export
                  Events </span></a>
            </li>
          </ul>
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
  <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
  <script src="vendors/monkeysan.jquery.nav.1.0.js"></script>
  <script src="vendors/monkeysan.validator.min.js"></script>
  <script src="vendors/monkeysan.tabs.min.js"></script>
  <script src="vendors/handlebars-v4.0.5.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/arcticmodal/jquery.arcticmodal-0.3.min.js"></script>
  <script src="vendors/retina.min.js"></script>
  <script src="vendors/mad.customselect.js"></script>
  <script src="js/modules/mad.alert-box.min.js"></script>
  <script src="js/modules/mad.newsletter-form.min.js"></script>
  <script src="js/modules/mad.sticky-header-section.min.js"></script>
  <script src="js/mad.app.js"></script>
</body>

</html>