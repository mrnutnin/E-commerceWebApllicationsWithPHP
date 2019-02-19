<?php include '../../timeoutSession.php'; ?>
<?php include '../../connect.php'; ?>

<?php
 $stmt = $pdo->prepare("SELECT * FROM users");
 $stmt->execute();
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <title>Forget password</title>
     
       <link data-stencil-stylesheet="" href="../../font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet"> 

         <!-- LoGO -->
    <link rel="icon" href="../../logo/logo.ico"/>
    <!-- Responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link data-stencil-stylesheet="" href="../../stylesheet.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto:400|Volkhov:400|Oswald:300" rel="stylesheet">
    <script src="../../JS.js"></script>  
     <script type="text/javascript" src="../../stopcpy.js"></script>   
        <!-- snippet location htmlhead -->
    </head>



    <body>
        <!-- snippet location header -->
        
        <header class="header" role="banner">
    <a href="#" class="mobileMenu-toggle" data-mobile-menu-toggle="menu">
        <span class="mobileMenu-toggleIcon">Toggle menu</span>
    </a>

    <nav class="navUser">
    
     <ul class="navUser-section navUser-section--alt">


        
            <?php
            if(isset($_SESSION["username"])){?>

            <li class="navUser-item navUser-item--cart">
                    <span class="navUser-item-cartLabel">   
                        <a href="../../cart/cart.php" class="navUser-action" data-options="align:right"> 
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart (<?php if(!isset($_SESSION['cart'])){echo "0";}else{echo sizeof($_SESSION['cart']);} ?>)    
                        </a> 
                    </span>
            </li>
                <li class="navUser-item navUser-item--account">
                <a class="navUser-action" href="../profile.php"> <i class="fa fa-user" aria-hidden="true"></i>  <?=$_SESSION["username"]?> </a>
                 </li>
                  
                 <li class="navUser-item navUser-item--account">
                <a class="navUser-action" href="../editprofile.php?mid=<?=$_SESSION["mid"] ?>"> <i class="fa fa-wrench" aria-hidden="true"></i> Edit Profile </a>
                 </li>
                 <li class="navUser-item navUser-item--account">
                 <a class="navUser-action" href="logout.php"> <i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                </li>

           <?php  }  else { ?>
                <li class="navUser-item navUser-item--account">
                <a class="navUser-action" href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign in</a>
                <span class="navUser-or">or</span> <a class="navUser-action" href="../registermember.php"> <i class="fa fa-user-plus" aria-hidden="true"></i> Register</a>
                </li>

          <?php } ?>

        </ul>


</nav>

        <div class="header-logo header-logo--center">
            <a href="../../index.php">
        <span class="header-logo-text">Photo Store</span>
</a>
        </div>


    <div class="navPages-container" id="menu" data-menu="">
        <nav class="navPages">
    
    <ul class="navPages-list">
            <li class="navPages-item">
                <a class="navPages-action" href="../../all-photo/allphoto.php">All Photo</a>>
            </li>
            
            </li>
            <li class="navPages-item">
                <a class="navPages-action has-subMenu" href="index.php" data-collapsible="navPages-18">
    Types <i class="icon navPages-action-moreIcon" aria-hidden="true"><svg><use xlink:href="#icon-chevron-down"></use></svg></i>
</a>
<div class="navPage-subMenu" id="navPages-18" aria-hidden="true" tabindex="-1">
    <ul class="navPage-subMenu-list">
        <li class="navPage-subMenu-item">
            <a class="navPage-subMenu-action navPages-action" href="../../types/types.php">All Types</a>
        </li>
            <li class="navPage-subMenu-item">
                    <a class="navPage-subMenu-action navPages-action" href="../../types/portrait/portrait.php">Portrait</a>
            </li>
            <li class="navPage-subMenu-item">
                    <a class="navPage-subMenu-action navPages-action" href="../../types/landscape/landscape.php">Landscape</a>
            </li>
            <li class="navPage-subMenu-item">
                    <a class="navPage-subMenu-action navPages-action" href="../../types/dark/dark.php">Dark</a>
            </li>
    </ul>
</div>
            </li>
                 <li class="navPages-item navPages-item-page">
                     <a class="navPages-action" href="../../about/about.php">About</a>
                 </li>
                 <li class="navPages-item navPages-item-page">
                     <a class="navPages-action" href="../../contact/contact.php">Contact</a>
                 </li>
                 
    </ul>
    
</nav>
    </div>

</header>
        

<main class="page">
                         
    <div class="body">

        <div class="container">
            <div class="account account--fixedSmall">
                <ul class="breadcrumbs">
                    <li class="breadcrumb ">
                        <a href="../../index.php" class="breadcrumb-label">Home</a>
                    </li>
                    <li class="breadcrumb is-active">
                        <span class="breadcrumb-label">Forget Password</span>
                    </li>
                </ul>
                <h2 class="page-heading">Forget password</h2>
                <p style="text-align: center">If you can answer thr question, i will tell your password.</p>
                
                <form action='yourpass.php' class="form forgot-password-form" method="post">

                    <label class="form-label" for="email">Email Address</label>
                    <div class="form-prefixPostfix wrap">
                        <input class="form-input" name="Email" id="email" type="email" formnovalidate required>
                    </div>

                    <label class="form-label" style="margin-top: 20px" >Question</label>
                    <div class="form-prefixPostfix wrap">
                        <select name="question" id="question">
                            <option value=""></option>
                            <option value="1">Your mother name?</option>
                            <option value="2">Your father name?</option>
                            <option value="3">Have you ever made sex?</option>
                            <option value="4">Have you ever made sex in the refrigerator?</option>
                            <option value="5">My air condition broke. can you repair it?</option>
                        </select>
                    </div>

                    <label class="form-label" style="margin-top: 20px">Answer</label>
                    <div class="form-prefixPostfix wrap">
                        <input class="form-input" name="answer" id="answer" formnovalidate required> 
                    </div>

                    <label class="form-label" style="margin-top: 20px"></label>
                    <div class="form-prefixPostfix wrap">
                        <input type="submit" class="button button--primary form-prefixPostfix-button--postfix" value="I'm stupid">
                    </div>
                   
                </form>
            </div>

        </div>
        
    </div>




</main>


    </div>
</div>
        

<footer class="footer" role="contentinfo">
    <div class="container">
        <section class="footer-info">
            <article class="footer-info-col footer-info-col--small" data-section-type="footer-webPages">
                <h5 class="footer-info-heading">Navigate</h5>
                <ul class="footer-info-list">
                    <li><a href="../../about/about.php">About</a></li>
                    <li><a href="../../contact/contact.php">Contact</a></li>
                    <?php
                                if(isset($_SESSION["username"])){?>
                                    <li><a href="../profile.php"> <?=$_SESSION["username"]?> </a></li>

                                <?php  }  else { ?>
                                    <li><a href="login.php"> Login </a></li>
                                <?php } ?>
                    <li><a href="../../cart/cart.php">Cart</a></li>
                </ul>
            </article>

            <article class="footer-info-col footer-info-col--small" data-section-type="footer-categories">
                <h5 class="footer-info-heading">Categories</h5>
                <ul class="footer-info-list">
                    <li><a href="../../all-photo/allphoto.php">All Photo</a></li>
                    <li><a href="../../types/portrait/portrait.php">Portrait</a></li>
                    <li><a href="../../types/landscape/landscape.php">Landscape</a></li>
                    <li><a href="../../types/dark/dark.php">Dark</a></li>
                </ul>
            </article>

            <article class="footer-info-col footer-info-col--small" data-section-type="footer-brands">
                <h5 class="footer-info-heading">Author</h5>
                <ul class="footer-info-list">
                    <li><a href="https://www.facebook.com/NutNinlaong">Purinut</a></li>
                    <li><a href="https://www.facebook.com/Ruengyod">Ruengyod</a></li>
                    <li><a href="https://www.facebook.com/foursqweez">Jeerasak</a></li>
                </ul>
            </article>

            <article class="footer-info-col footer-info-col--small" data-section-type="storeInfo">
                <h5 class="footer-info-heading">Info</h5>
                <address>ComputerScience<br>KhonkaenUniversity</address>
                <strong>Call us at 0-4336-2188-90</strong>
            </article>

            <article class="footer-info-col" data-section-type="newsletterSubscription">
                <h5 class="footer-info-heading">Subscribe to our newsletter</h5>
                <p>Get the latest updates on new products and upcoming sales</p>

                <form class="form" action="../../subscribe.php" method="post">
                    <fieldset class="form-fieldset">
                        <input type="hidden" name="action" value="subscribe">
                        <input type="hidden" name="nl_first_name" value="bc">
                        <input type="hidden" name="check" value="1">
                        <div class="form-field">
                            <label class="form-label is-srOnly" for="nl_email">Email Address</label>
                            <div class="form-prefixPostfix wrap">
                                <input class="form-input" id="nl_email" name="emailAddress" type="email" value="" placeholder="Your email address"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                                <input class="button button--primary form-prefixPostfix-button--postfix" type="submit" value="Subscribe">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </article>
        </section>
        <div class="footer-copyright">
            <p class="powered-by">Powered by <a href="http://mrnutninlaong.ueuo.com/" rel="nofollow">Xhamster</a></p>
        </div>
        <div class="footer-copyright">
            <p class="powered-by">&copy; <span id="copyright_year"></span> ComputerScience </p>
        </div>
        <script type="text/javascript">document.getElementById("copyright_year").innerHTML = new Date().getFullYear();</script>
    </div>
</footer>











        
        <script>window.__webpack_public_path__ = "http://cdn6.bigcommerce.com/s-efzfxrs/stencil/e9f6adc0-17ce-0135-3cf0-525400dfdca6/dist/";</script>
        <script src="../../theme.js"></script>

        <script>
            // Exported in app.js
            window.stencilBootstrap("pages/page", "{\"themeSettings\":{\"amp_analytics_id\":\"\",\"homepage_new_products_count\":12,\"homepage_featured_products_count\":8,\"homepage_top_products_count\":8,\"homepage_show_carousel\":true,\"homepage_stretch_carousel_images\":false,\"homepage_new_products_column_count\":4,\"homepage_featured_products_column_count\":4,\"homepage_top_products_column_count\":4,\"homepage_blog_posts_count\":3,\"productpage_videos_count\":8,\"productpage_reviews_count\":9,\"productpage_related_products_count\":10,\"productpage_similar_by_views_count\":10,\"categorypage_products_per_page\":12,\"brandpage_products_per_page\":12,\"searchpage_products_per_page\":12,\"show_product_quick_view\":true,\"show_powered_by\":true,\"shop_by_brand_show_footer\":true,\"show_copyright_footer\":true,\"show_accept_amex\":false,\"show_accept_discover\":false,\"show_accept_mastercard\":false,\"show_accept_paypal\":false,\"show_accept_visa\":false,\"product_list_display_mode\":\"grid\",\"logo-position\":\"center\",\"logo_size\":\"250x100\",\"brand_size\":\"190x250\",\"gallery_size\":\"300x300\",\"productgallery_size\":\"500x659\",\"product_size\":\"500x659\",\"productthumb_size\":\"100x100\",\"thumb_size\":\"100x100\",\"zoom_size\":\"1280x1280\",\"blog_size\":\"190x250\",\"default_image_brand\":\"/assets/img/BrandDefault.gif\",\"default_image_product\":\"/assets/img/ProductDefault.gif\",\"default_image_gift_certificate\":\"/assets/img/GiftCertificate.png\",\"body-font\":\"Google_Roboto_400\",\"headings-font\":\"Google_Volkhov_400\",\"logo-font\":\"Google_Oswald_300\",\"fontSize-root\":14,\"fontSize-h1\":28,\"fontSize-h2\":25,\"fontSize-h3\":22,\"fontSize-h4\":20,\"fontSize-h5\":15,\"fontSize-h6\":13,\"applePay-button\":\"black\",\"color-textBase\":\"#74685c\",\"color-textBase--hover\":\"#736457\",\"color-textBase--active\":\"#736457\",\"color-textSecondary\":\"#a18d7a\",\"color-textSecondary--hover\":\"#806f58\",\"color-textSecondary--active\":\"#a18d7a\",\"color-textLink\":\"#74685c\",\"color-textLink--hover\":\"#a18d7a\",\"color-textLink--active\":\"#74685c\",\"color-textHeading\":\"#736457\",\"color-primary\":\"#5c5245\",\"color-primaryDark\":\"#806f58\",\"color-primaryDarker\":\"#2d2d2d\",\"color-primaryLight\":\"#b37134\",\"color-secondary\":\"#db8a40\",\"color-secondaryDark\":\"#e8e8e8\",\"color-secondaryDarker\":\"#e8e8e8\",\"color-error\":\"#ff7d7d\",\"color-errorLight\":\"#ffdddd\",\"color-info\":\"#757575\",\"color-infoLight\":\"#bebebe\",\"color-success\":\"#69d66f\",\"color-successLight\":\"#d5ffd8\",\"color-warning\":\"#d4cb49\",\"color-warningLight\":\"#fffdea\",\"color-black\":\"#000000\",\"color-white\":\"#ffffff\",\"color-whitesBase\":\"#f8f8f8\",\"color-grey\":\"#4f4f4f\",\"color-greyDarkest\":\"#2d2d2d\",\"color-greyDarker\":\"#454545\",\"color-greyDark\":\"#666666\",\"color-greyMedium\":\"#989898\",\"color-greyLight\":\"#a5a5a5\",\"color-greyLighter\":\"#dfdfdf\",\"color-greyLightest\":\"#e8e8e8\",\"button--default-color\":\"#5c5245\",\"button--default-colorHover\":\"#b39b7b\",\"button--default-colorActive\":\"#5c5245\",\"button--default-borderColor\":\"#d6cdc1\",\"button--default-borderColorHover\":\"#b39b7b\",\"button--default-borderColorActive\":\"#b39b7b\",\"button--primary-color\":\"#ffffff\",\"button--primary-colorHover\":\"#ffffff\",\"button--primary-colorActive\":\"#ffffff\",\"button--primary-backgroundColor\":\"#5c5245\",\"button--primary-backgroundColorHover\":\"#806f58\",\"button--primary-backgroundColorActive\":\"#b39b7b\",\"button--disabled-color\":\"#ffffff\",\"button--disabled-backgroundColor\":\"#dfddda\",\"button--disabled-borderColor\":\"#dfddda\",\"icon-color\":\"#806f58\",\"icon-color-hover\":\"#b37134\",\"button--icon-svg-color\":\"#4f4f4f\",\"icon-ratingEmpty\":\"#dfddda\",\"icon-ratingFull\":\"#b37134\",\"carousel-bgColor\":\"#db8a40\",\"carousel-title-color\":\"#ffffff\",\"carousel-description-color\":\"#ffffff\",\"carousel-dot-color\":\"#806f58\",\"carousel-dot-color-active\":\"#b37134\",\"carousel-dot-bgColor\":\"#5c5245\",\"carousel-arrow-color\":\"#db8a40\",\"carousel-arrow-bgColor\":\"#ffffff\",\"card-title-color\":\"#b37134\",\"card-title-color-hover\":\"#806f58\",\"card-figcaption-button-background\":\"#db8a40\",\"card-figcaption-button-color\":\"#ffffff\",\"card--alternate-backgroundColor\":\"#ffffff\",\"card--alternate-borderColor\":\"#ffffff\",\"card--alternate-color--hover\":\"#ffffff\",\"form-label-font-color\":\"#74685c\",\"input-font-color\":\"#a18d7a\",\"input-border-color\":\"#d6cdc1\",\"input-border-color-active\":\"#a18d7a\",\"input-bg-color\":\"#ffffff\",\"input-disabled-bg\":\"#ffffff\",\"select-bg-color\":\"#ffffff\",\"select-arrow-color\":\"#a18d7a\",\"checkRadio-color\":\"#a18d7a\",\"checkRadio-backgroundColor\":\"#ffffff\",\"checkRadio-borderColor\":\"#d6cdc1\",\"alert-color\":\"#4f4f4f\",\"alert-color-alt\":\"#ffffff\",\"storeName-color\":\"#a18d7a\",\"body-bg\":\"#ffffff\",\"header-backgroundColor\":\"#ffffff\",\"footer-backgroundColor\":\"#ffffff\",\"navUser-color\":\"#5e5240\",\"navUser-color-hover\":\"#a18d7a\",\"navUser-dropdown-backgroundColor\":\"#f2eee9\",\"navUser-dropdown-borderColor\":\"#f2eee9\",\"navUser-indicator-backgroundColor\":\"#db8a40\",\"navPages-color\":\"#5e5240\",\"navPages-color-hover\":\"#a18d7a\",\"navPages-subMenu-backgroundColor\":\"#f2eee9\",\"navPages-subMenu-separatorColor\":\"#d6cdc1\",\"dropdown--quickSearch-backgroundColor\":\"#f2eee9\",\"blockquote-cite-font-color\":\"#b39c88\",\"container-border-global-color-base\":\"#d6cdc1\",\"container-border-global-color-dark\":\"#d6cdc1\",\"container-fill-base\":\"#ffffff\",\"container-fill-dark\":\"#f2eee9\",\"label-backgroundColor\":\"#b37134\",\"label-color\":\"#ffffff\",\"overlay-backgroundColor\":\"#5c5245\",\"loadingOverlay-backgroundColor\":\"#ffffff\",\"pace-progress-backgroundColor\":\"#db8a40\",\"spinner-borderColor-dark\":\"#db8a40\",\"spinner-borderColor-light\":\"#f2eee9\",\"hide_content_navigation\":false,\"optimizedCheckout-header-backgroundColor\":\"#F2EEE9\",\"optimizedCheckout-show-backgroundImage\":false,\"optimizedCheckout-backgroundImage\":\"\",\"optimizedCheckout-backgroundImage-size\":\"1000x400\",\"optimizedCheckout-show-logo\":\"none\",\"optimizedCheckout-logo\":\"\",\"optimizedCheckout-logo-size\":\"250x100\",\"optimizedCheckout-logo-position\":\"left\",\"optimizedCheckout-headingPrimary-color\":\"#74685c\",\"optimizedCheckout-headingPrimary-font\":\"Google_Volkhov_400\",\"optimizedCheckout-headingSecondary-color\":\"#74685c\",\"optimizedCheckout-headingSecondary-font\":\"Google_Volkhov_400\",\"optimizedCheckout-body-backgroundColor\":\"#ffffff\",\"optimizedCheckout-contentPrimary-color\":\"#74685c\",\"optimizedCheckout-contentPrimary-font\":\"Google_Roboto_400\",\"optimizedCheckout-contentSecondary-color\":\"#a18d7a\",\"optimizedCheckout-contentSecondary-font\":\"Google_Roboto_400\",\"optimizedCheckout-buttonPrimary-font\":\"Google_Roboto_400\",\"optimizedCheckout-buttonPrimary-color\":\"#ffffff\",\"optimizedCheckout-buttonPrimary-colorHover\":\"#ffffff\",\"optimizedCheckout-buttonPrimary-colorActive\":\"#ffffff\",\"optimizedCheckout-buttonPrimary-backgroundColor\":\"#5c5245\",\"optimizedCheckout-buttonPrimary-backgroundColorHover\":\"#666666\",\"optimizedCheckout-buttonPrimary-backgroundColorActive\":\"#989898\",\"optimizedCheckout-buttonPrimary-borderColor\":\"#5c5245\",\"optimizedCheckout-buttonPrimary-borderColorHover\":\"#0d0d0d\",\"optimizedCheckout-buttonPrimary-borderColorActive\":\"#000000\",\"optimizedCheckout-buttonSecondary-font\":\"Google_Roboto_400\",\"optimizedCheckout-buttonSecondary-color\":\"#4f4f4f\",\"optimizedCheckout-buttonSecondary-backgroundColor\":\"#ffffff\",\"optimizedCheckout-buttonSecondary-borderColor\":\"#d6cdc1\",\"optimizedCheckout-link-color\":\"#74685c\",\"optimizedCheckout-link-font\":\"Google_Roboto_400\",\"optimizedCheckout-discountBanner-backgroundColor\":\"#F2EEE9\",\"optimizedCheckout-discountBanner-textColor\":\"#333333\",\"optimizedCheckout-discountBanner-iconColor\":\"#333333\",\"optimizedCheckout-orderSummary-backgroundColor\":\"#ffffff\",\"optimizedCheckout-step-backgroundColor\":\"#5c5245\",\"optimizedCheckout-step-textColor\":\"#ffffff\",\"optimizedCheckout-form-textColor\":\"#74685c\",\"optimizedCheckout-formField-backgroundColor\":\"white\",\"optimizedCheckout-formField-borderColor\":\"#989898\",\"price_as_low_as\":false,\"product_sale_badges\":\"none\",\"color_badge_product_sale_badges\":\"#007dc6\",\"color_text_product_sale_badges\":\"#ffffff\",\"color_hover_product_sale_badges\":\"#000000\",\"restrict_to_login\":false,\"swatch_option_size\":\"22x22\",\"social_icon_placement_top\":false,\"social_icon_placement_bottom\":\"bottom_none\",\"geotrust_ssl_common_name\":\"\",\"geotrust_ssl_seal_size\":\"M\",\"navigation_design\":\"simple\"},\"genericError\":\"Oops! Something went wrong.\",\"maintenanceMode\":{\"header\":null,\"notice\":null,\"message\":null,\"securePath\":\"https://store-efzfxrs.mybigcommerce.com\",\"password\":null},\"urls\":{\"home\":\"http://cornerstone-warm-demo.mybigcommerce.com/\",\"account\":{\"index\":\"/account.php\",\"orders\":{\"all\":\"/account.php?action=order_status\",\"completed\":\"/account.php?action=view_orders\",\"save_new_return\":\"/account.php?action=save_new_return\"},\"update_action\":\"/account.php?action=update_account\",\"returns\":\"/account.php?action=view_returns\",\"addresses\":\"/account.php?action=address_book\",\"inbox\":\"/account.php?action=inbox\",\"send_message\":\"/account.php?action=send_message\",\"add_address\":\"/account.php?action=add_shipping_address\",\"wishlists\":{\"all\":\"/wishlist.php\",\"add\":\"/wishlist.php?action=addwishlist\",\"edit\":\"/wishlist.php?action=editwishlist\",\"delete\":\"/wishlist.php?action=deletewishlist\"},\"details\":\"/account.php?action=account_details\",\"recent_items\":\"/account.php?action=recent_items\"},\"brands\":\"http://cornerstone-warm-demo.mybigcommerce.com/brands/\",\"gift_certificate\":{\"purchase\":\"/giftcertificates.php\",\"redeem\":\"/giftcertificates.php?action=redeem\",\"balance\":\"/giftcertificates.php?action=balance\"},\"auth\":{\"login\":\"/login.php\",\"check_login\":\"/login.php?action=check_login\",\"create_account\":\"/login.php?action=create_account\",\"save_new_account\":\"/login.php?action=save_new_account\",\"forgot_password\":\"/login.php?action=reset_password\",\"send_password_email\":\"/login.php?action=send_password_email\",\"save_new_password\":\"/login.php?action=save_new_password\",\"logout\":\"/login.php?action=logout\"},\"product\":{\"post_review\":\"/postreview.php\"},\"cart\":\"/cart.php\",\"checkout\":{\"single_address\":\"/checkout.php\",\"multiple_address\":\"/checkout.php?action=multiple\"},\"rss\":{\"products\":{\"new\":\"/rss.php?type=rss\",\"new_atom\":\"/rss.php?type=atom\",\"popular\":\"/rss.php?action=popularproducts&type=rss\",\"popular_atom\":\"/rss.php?action=popularproducts&type=atom\",\"featured\":\"/rss.php?action=featuredproducts&type=rss\",\"featured_atom\":\"/rss.php?action=featuredproducts&type=atom\",\"search\":\"/rss.php?action=searchproducts&type=rss\",\"search_atom\":\"/rss.php?action=searchproducts&type=atom\"},\"blog\":\"/rss.php?action=newblogs&type=rss\",\"blog_atom\":\"/rss.php?action=newblogs&type=atom\"},\"contact_us_submit\":\"/pages.php?action=sendContactForm\",\"search\":\"/search.php\",\"compare\":\"/compare\",\"sitemap\":\"/sitemap.php\",\"subscribe\":{\"action\":\"/subscribe.php\"}}}").load();
        </script>

        <script type="text/javascript" src="http://cdn5.bigcommerce.com/r-241f8bd274a850676bd9dcc9abbd8dacf8704e66/javascript/visitor_stencil.js?b112e"></script>

        <!-- snippet location footer -->
    </body>
</html>
