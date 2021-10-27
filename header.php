<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Mogo</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <?php wp_head(); ?>

</head>
<body>

   
    <!-- Header
    =========================
    ========================= -->

    

    <header>

        <nav class="header_nuvbar">

            <div class="header_logo">
                
                <a href="<?php echo home_url() ?>"> 
                    <img alt="" src="<?php echo get_template_directory_uri();?>/assets/img/logo.png">
                </a>

            </div>

            <div>

                <nav id="nav-wrap">

                    <?php 
                        wp_nav_menu( [
                            'theme_location'  => 'topMob',
                            'container'       => null,
                            'menu_class'      => 'dropdown',
                        ] );
                    ?>

                    <!-- <div class="dropdown">
                        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        MENU
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" id="current" href="index.html">ABOUT</a></li>
                        <li><a class="dropdown-item" href="service.html">SERVICE</a></li>
                        <li><a class="dropdown-item" href="work.html">WORK</a></li>
                        <li><a class="dropdown-item" href="blog.html">BLOG</a></li>
                        <li><a class="dropdown-item" href="contact.html">CONTACT</a></li>
                        <li><a class="dropdown-item" href="#"><img class="navbar_img" src="img/cartmob.png" alt=""></a></li>
                        <li><a class="dropdown-item" href="#"><img class="navbar_img" src="img/searchmob.png" alt=""></a></li>
                        </ul>
                    </div> -->
    
                    <?php 
                        wp_nav_menu( [
                            'theme_location'  => 'top',
                            'container'       => null,
                            'menu_class'      => 'nav',
                            'menu_id'         => 'nav',
                        ] );
                    ?>

                    <!-- <ul id="nav" class="nav">
    
                        <li class="current"><a href="index.html">ABOUT</a></li>
                        <li><span><a href="service.html">SERVICE</a></span></li>
                        <li><span><a href="work.html">WORK</a></span></li>
                        <li><a href="blog.html">BLOG</a></li>
                        <li><a href="contact.html">CONTACT</a></li>
                        <li class="item"><a href=""><img class="navbar_img" src="img/cart.png" alt=""></a></li>
                        <li class="item"><a href=""><img class="navbar_img" src="img/search-13-32.png" alt=""></a></li>
    
                    </ul> end #nav -->
    
                </nav> <!-- end #nav-wrap -->
 
            </div>
            
          </div>

        </nav>

    </header>


    <!-- Intro Section
   ================================================== -->

   <section id="intro">

        <!-- Start-->

        <div id="intro-slider" class="slider">
            
            <!-- Slide -->
            <div class="slider-item">
                    
                <div class="slider-item_info">
                        
                    <div class="info-subtitle">Creative tamplate</div>
        
                    <div class="info-title">WELCOME TO MOGO</div>
        
                    <div class="title_line"></div>
        
                    <a href="№">Learn more</a>
                    
                </div>

            </div>

                <!-- Slide -->

            <div class="slider-item">

                <div class="slider-item_info">
                        
                        
                    <div class="info-subtitle">Creative tamplate</div>
        
                    <div class="info-title">WELCOME TO MOGO</div>
        
                    <div class="title_line"></div>
        
                    <a href="">Learn more</a>
                
                </div>

            </div>

                <!-- Slide -->

            <div class="slider-item">

                <div class="slider-item_info">
                        
                         
                    <div class="info-subtitle">Creative tamplate</div>
        
                    <div class="info-title">WELCOME TO MOGO</div>
        
                    <div class="title_line"></div>
        
                    <a href="">Learn more</a>
                
                </div>

            </div>

                <!-- Slide -->

            <div class="slider-item">

                <div class="slider-item_info">
                        
                         
                    <div class="info-subtitle">Creative tamplate</div>
        
                    <div class="info-title">WELCOME TO MOGO</div>
        
                    <div class="title_line"></div>
        
                    <a href="#about_us">Learn more</a>
                    
                </div>

            </div>

        </div> <!-- End-->

        <!-- bullets bar -->
        
        <div class="slider_dots">
            <div class="slider_dots_item" id="dots_item1">
                <div class="dots_box">
                    <div class="dots_number">01</div>
                    <div class="dots_text">Intro</div>
                </div>
            </div>
            <div class="slider_dots_item" id="dots_item2">
                <div class="dots_box">
                    <div class="dots_number">02</div>
                    <div class="dots_text">Work</div>
                </div>
            </div>
            <div class="slider_dots_item" id="dots_item3">
                <div class="dots_box">
                    <div class="dots_number">03</div>
                    <div class="dots_text">About</div>
                </div>
            </div>
            <div class="slider_dots_item" id="dots_item4">
                <div class="dots_box">
                    <div class="dots_number">04</div>
                    <div class="dots_text">Contacts</div>
                </div>
            </div>
        </div>

    </section> <!-- Intro Section End-->   