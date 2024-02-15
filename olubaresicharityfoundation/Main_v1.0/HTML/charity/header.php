<header id="mad-header" class="mad-header">
        <div class="mad-header-section--sticky-xl">
          <div class="container-fluid">
            <div class="mad-header-items">
              <div class="mad-header-item">
                <a href="index.php" class="mad-logo"><img src="images/Foundation.png" width="65"  alt="" /></a>
              </div>
              <div class="mad-header-item">
                <!--================ Navigation ================-->
                <?php
// Determine the current page
$current_page = basename($_SERVER['PHP_SELF']);

// Define an array of menu items and their corresponding links
$menu_items = [
    'index.php' => 'Home',
    'pages_about.php' => 'About Us',
    'pages_volunteer.php' => 'Volunteer',
    'causes_list_sidebar_1.php' => 'Causes',
    'portfolio_standart_2_cols.php' => 'Portfolio',
    'events_month.php' => 'Events',
    'blog_classic_sidebar_1.php' => 'Blog',
    'pages_contact_v2.php' => 'Contact Us',
];

// Create the navigation menu
echo '<nav class="mad-navigation-container">';
echo '<ul class="mad-navigation mad-navigation--vertical-sm">';
foreach ($menu_items as $link => $label) {
    // Check if the current page matches the link
    $class = ($current_page == $link) ? 'current-menu-item' : '';

    // Output the menu item
    echo '<li class="menu-item ' . $class . '">';
    echo '<a href="' . $link . '">' . $label . '</a>';
    echo '</li>';
}
echo '</ul>';
echo '</nav>';
?>

                <!--================ End of Navigation ================-->
                <div class="mad-actions">
                  <a class="login-btn" href="shop_login.php"><i class="fa-solid fa-right-to-bracket"></i></a>

                  <div class="mad-col">
                    <a href="#" data-arctic-modal="#search-modal"><i class="material-icons">search</i></a>
                  </div>
                  <div class="mad-col">
                    <a href="pages_donate.php" class="btn btn-big"><span>Donate</span> <i class="icon"><img
                          src="charity_icons_svg/heart.svg" alt="" /></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>