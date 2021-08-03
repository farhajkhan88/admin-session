<?php
session_start();
if (empty($_SESSION['logged_in']))
{
    header("location:../template/login_form.php");
    
}
?>

<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.dashboardpack.com/cryptocurrency-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Apr 2021 12:31:53 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Royal Punch</title>


    <link rel="icon" href="img/mini_logo.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />
    <!-- gijgo css -->
    <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

    <!-- date picker -->
     <link rel="stylesheet" href="vendors/datepicker/date-picker.css" />

     <link rel="stylesheet" href="vendors/vectormap-home/vectormap-2.0.2.css" />
     
     <!-- scrollabe  -->
     <link rel="stylesheet" href="vendors/scroll/scrollable.css" />
    <!-- datatable CSS -->
    <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />
    <!-- text editor css -->
    <link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />
    <!-- morris css -->
    <link rel="stylesheet" href="vendors/morris/morris.css">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

    <!-- menu css  -->
    <link rel="stylesheet" href="css/metisMenu.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
           
 
   

</head>
<body class="crm_body_bg">
    


<!-- main content part here -->
 
 <!-- sidebar  -->
<nav class="sidebar dark_sidebar">
    <div class="logo d-flex justify-content-between">
        <!-- <a class="large_logo" href="index-2.html"><img src="img/logo_white.png" alt=""></a> -->
        <!-- <a class="small_logo" href="index-2.html"><img src="img/mini_logo.png" alt=""></a> -->
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
   
        <li class="">
            <a class="has-arrow" href="index.php" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/1.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Dashboard </span>
                </div>
            </a>
            <?php if($_SESSION['role']=="user"){ ?>  
            <ul>
                <li><a href="">Default</a></li>
              <li><a href="">Light Sidebar</a></li>
              <li><a href="">Dark Sidebar</a></li>
            </ul>
        </li>
        <li class="">
            <a class="has-arrow" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="img/menu-icon/2.svg" alt="">
            </div>
            <div class="nav_title">
                <span>Place Qoutes</span>
            </div>
            </a>
            <ul>
                <li><a href="add_quote.php">Add Qoutes</a></li>
              <li><a href="">Remove Qoutes</a></li>
              <li><a href="">All Qoutes</a></li>
            </ul>
        </li>
        <?php }
        elseif($_SESSION['role']=="master_admin"){?>
      
        <li id="quote_class"class="">
            <a  href="admin_quote.php" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="img/menu-icon/5.svg" alt="">
            </div>
            <div class="nav_title">
                <span>All Quotes</span>
                <span id="quote_status" style="position: absolute;padding: 2px 5px;border-radius: 50%;background-color: red;color: white;" class="badge"></span>

            </div>
            </a>
        </li>
        <li class="">
            <a  href="#" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="img/menu-icon/3.svg" alt="">
            </div>
            <div class="nav_title">
                <span>Orders</span>
            </div>
            </a>
        </li>
    
       
        <li class="">
            <a class="" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/6.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Transactions</span>
                </div>
            </a>
            <!-- <ul>
              <li><a href="Request.html">Request</a></li>
              <li><a href="tan_cancel.html">Cancel</a></li>
              <li><a href="Refound.html">Refound</a></li>
              <li><a href="Payment_details.html">Payment details</a></li>
            </ul> -->
        </li>
        <li id="user_class" class="">
            <a  href="users.php" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="img/menu-icon/4.svg" alt="">
            </div>
            <div class="nav_title">
                <span>Users</span>
                <span id="user_status" style="position: absolute;padding: 2px 5px;border-radius: 50%;background-color: red;color: white;" class="badge"></span>
            </div>
            <!-- <div id="user_status" style="color:red;"><></div> -->
            </a>
        </li>
        <li id="contact_class" class="">
            <a  class="" href="contact_us.php" aria-expanded="false">
              <div class="nav_icon_small">
                  <img src="img/menu-icon/forms.svg" alt="">
              </div>
              <div class="nav_title">
                  <span>Contact_Us</span>
                <span id="contact_status" style="position: absolute;padding: 2px 5px;border-radius: 50%;background-color: red;color: white;" class="badge"></span>

              </div>
            </a>
          </li><?php } ?>
        <!-- <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/7.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Tickers</span>
                </div>
            </a>
            <ul>
              <li><a href="ticker_dark.html">Ticker Dark</a></li>
              <li><a href="Ticker_Light.html">Ticker Light</a></li>
            </ul>
        </li>
        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/8.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Apps </span>
                </div>
            </a>
            <ul>
              <li><a href="editor.html">Editor</a></li>
              <li><a href="invoice.html">Invoice</a></li>
              <li><a href="Builder.html">Builder</a></li>
              <li><a href="calender.html">Calander</a></li>
              <li><a href="Board.html">Board</a></li>
              <li><a href="basic_card.html">Basic Card</a></li>
                <li><a href="theme_card.html">Theme Card</a></li>
                <li><a href="dargable_card.html">Draggable Card</a></li>
            </ul>
        </li>
        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="img/menu-icon/Pages.svg" alt="">
            </div>
            <div class="nav_title">
                <span>Pages</span>
            </div>
            </a>
            <ul>
                <li><a href="role_permissions.html">Role & Permissions</a></li>
               <li><a href="faq.html">FAQ</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="resister.html">Register</a></li>
              <li><a href="error_400.html">Error 404</a></li>
              <li><a href="error_500.html">Error 500</a></li>
              <li><a href="forgot_pass.html">Forgot Password</a></li>
              <li><a href="gallery.html">Gallery</a></li>
              <li><a href="module_setting.html">Module Setting</a></li>
              <li><a href="Products.html">Products</a></li>
              <li><a href="Product_Details.html">Product Details</a></li>
              <li><a href="Cart.html">Cart</a></li>
              <li><a href="Checkout.html">Checkout</a></li>
            </ul>
        </li>
        <li class="">
            <a  class="has-arrow" href="#" aria-expanded="false">
              <div class="nav_icon_small">
                  <img src="img/menu-icon/General.svg" alt="">
              </div>
              <div class="nav_title">
                  <span>General</span>
              </div>
            </a>
            <ul>
              <li><a href="Minimized_Aside.html">Minimized Aside</a></li>
              <li><a href="empty_page.html">Empty page</a></li>
              <li><a href="fixed_footer.html">Fixed Footer</a></li>
            </ul>
        </li>
        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/Mail_Box.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Mail Box </span>
                </div>
            </a>
            <ul>
              <li><a href="mail_box.html">Mail Box</a></li>
              <li><a href="compose.html">Compose</a></li>
              <li><a href="important_mail.html">Important Mail</a></li>
              <li><a href="mail_trash.html">Mail Trash</a></li>
              <li><a href="chat.html">Chat</a></li>
            </ul>
        </li>
        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
              <div class="nav_icon_small">
                  <img src="img/menu-icon/icon.svg" alt="">
              </div>
              <div class="nav_title">
                  <span>Icons</span>
              </div>
            </a>
            <ul>
              <li><a href="Fontawesome_Icon.html">Fontawesome Icon</a></li>
              <li><a href="themefy_icon.html">themefy icon</a></li>
            </ul>
        </li>
        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
              <div class="nav_icon_small">
                  <img src="img/menu-icon/18.svg" alt="">
              </div>
              <div class="nav_title">
                  <span>UI Elements </span>
              </div>
            </a>
            <ul>
              <li><a href="colors.html">colors</a></li>
              <li><a href="Alerts.html">Alerts</a></li>
              <li><a href="buttons.html">Buttons</a></li>
              <li><a href="modal.html">modal</a></li>
              <li><a href="dropdown.html">Droopdowns</a></li>
              <li><a href="Badges.html">Badges</a></li>
              <li><a href="Loading_Indicators.html">Loading Indicators</a></li>
              <li><a href="color_plate.html">Color Plate</a></li>
              <li><a href="typography.html">Typography</a></li>
              <li><a href="datepicker.html">Date Picker</a></li>
              <li><a href="wow_animation.html">Animate</a></li>
                <li><a href="Scroll_Reveal.html">Scroll Reveal</a></li>
                <li><a href="tilt.html">Tilt Animation</a></li>
                <li><a href="navs.html">Navs</a></li>
            </ul>
        </li>
          <li class="">
            <a  class="has-arrow" href="#" aria-expanded="false">
              <div class="nav_icon_small">
                  <img src="img/menu-icon/forms.svg" alt="">
              </div>
              <div class="nav_title">
                  <span>forms</span>
              </div>
            </a>
            <ul>
              <li><a href="Basic_Elements.html">Basic Elements</a></li>
              <li><a href="Groups.html">Groups</a></li>
              <li><a href="Max_Length.html">Max Length</a></li>
              <li><a href="Layouts.html">Layouts</a></li>
            </ul>
          </li>
          <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
              <div class="nav_icon_small">
                  <img src="img/menu-icon/14.svg" alt="">
              </div>
              <div class="nav_title">
                  <span>Widgets</span>
              </div>
            </a>
            <ul>
              <li><a href="accordion.html">Accordions</a></li>
              <li><a href="Scrollable.html">Scrollable</a></li>
              <li><a href="notification.html">Notifications</a></li>
              <li><a href="carousel.html">Carousel</a></li>
              <li><a href="Pagination.html">Pagination</a></li>
              <li><a href="profilebox.html">Profile Box</a></li>
            </ul>
          </li>
          <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/17.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Table</span>
                </div>
            </a>
            <ul>
                <li><a href="data_table.html">Data Tables</a></li>
                <li><a href="bootstrap_table.html">Bootstrap</a></li>
            </ul>
          </li>
        <li class="">
          <a   class="has-arrow" href="#" aria-expanded="false">
            <div class="nav_icon_small">
                <img src="img/menu-icon/16.svg" alt="">
            </div>
            <div class="nav_title">
                <span>Charts</span>
            </div>
          </a>
          <ul>
            <li><a href="chartjs.html">ChartJS</a></li>
            <li><a href="apex_chart.html">Apex Charts</a></li>
            <li><a href="chart_sparkline.html">Chart sparkline</a></li>
            <li><a href="am_chart.html">am-charts</a></li>
            <li><a href="nvd3_charts.html">nvd3 charts.</a></li>
          </ul>
        </li>
        <li class="">
          <a   class="has-arrow" href="#" aria-expanded="false">
            <div class="nav_icon_small">
                <img src="img/menu-icon/map.svg" alt="">
            </div>
            <div class="nav_title">
                <span>Maps</span>
            </div>
          </a>
          <ul>
            <li><a href="mapjs.html">Maps JS</a></li>
            <li><a href="vector_map.html">Vector Maps</a></li>
          </ul>
        </li>
    </ul> -->
</nav>
 <!--/ sidebar  -->


<section class="main_content dashboard_part large_header_bg">
    <!-- menu  -->
    <div class="container-fluid no-gutters">
        <div class="row">
            <div class="col-lg-12 p-0 ">
                <div class="header_iner d-flex justify-content-between align-items-center">
                    <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="line_icon open_miniSide d-none d-lg-block">
                        <img src="img/line_img.png" alt="">
                    </div>
                    <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="header_notification_warp d-flex align-items-center">
                    
                            
                        </div>
                        <div class="profile_info d-flex align-items-center">
                            <!-- <div class="profile_thumb mr_20">
                                <img src="img/transfer/4.png" alt="#">
                            </div> -->
                            <div class="author_name">
                                <h4 class="f_s_15 f_w_500 mb-0"><?php echo $_SESSION['name']?></h4>
                                <!-- <p class="f_s_12 f_w_400">Manager</p> -->
                            </div>
                            <div class="profile_info_iner">
                                <div class="profile_author_name">
                                    <!-- <p>Manager</p> -->
                                    <h5><?php echo $_SESSION['name']?></h5>
                                </div>
                                <div class="profile_info_details">
                                    <a href="#">My Profile </a>
                                    <!-- <a href="#">Settings</a> -->
                                    <a href="logout.php">Log Out </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ menu  -->