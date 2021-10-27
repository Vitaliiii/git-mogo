 <!-- footer -->

<footer>

    <div class="footer_map">
        <h2 class="map__title">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/PINmap.png" alt="">
            <div><i class="fas fa-map-marker-alt"></i></div>
            <a href="https://goo.gl/maps/WY67dDn51xCPSTdFA" target="_blank">Open Map</a>
        </h2>
    </div>

    <div class="footer_content">
        
        <div class="footer_subscribe_bar">
            <img class="footer_logo" src="<?php echo get_template_directory_uri();?>/assets/img/footerlogo.png" alt="">

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

            <div class="footer_subscribe_bar_info"><span>15k</span>followers</div>
            <div class="footer_link_bar">
                <div class="footer_link_bar_text">Follow us:</div>
                <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/img/icons/facebook.png" alt=""></a>
                <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/img/icons/twitter.png" alt=""></a>
                <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/img/icons/instagram.png" alt=""></a>
                <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/img/icons/pinterest.png" alt=""></a>
                <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/img/icons/google plus.png" alt=""></a>
                <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/img/icons/youtube.png" alt=""></a>
                <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/img/icons/dribbble.png" alt=""></a>
                <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/img/icons/tumblr.png" alt=""></a>
            </div>

            <form class="subscribe" action="" method="post">
                <input class="subscribe__input" type="email" name="name" placeholder="Your Email...">
                <button class="subscribe__btn" type="submit">subscribe</button>
            </form>
        </div>


        <div class="footer_blog_bar">
            <div class="footer_blog_head">Blog</div>

            <div class="footer_blog_post">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/post1.png" alt="">
                <div class="footer_blog_post_text">
                    <p class="post_text">Lorem ipsum dolor sit amet, consectetur.</p>
                    <p class="post_data">jan 01.2021</p>
                </div>
            </div>
            <div class="footer_blog_post">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/post2.png" alt="">
                <div class="footer_blog_post_text">
                    <p class="post_text">Lorem ipsum dolor sit amet, consectetur.</p>
                    <p class="post_data">jan 01.2021</p>
                </div>
            </div>
            <div class="footer_blog_post">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/post3.png" alt="">
                <div class="footer_blog_post_text">
                    <p class="post_text">Lorem ipsum dolor sit amet, consectetur.</p>
                    <p class="post_data">jan 01.2021</p>
                </div>
            </div>
        </div>
        <div class="footer_instagram_bar">
            <div class="footer_instagram_head">
                INSTAGRAM
            </div>
            <div class="instagram_container">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/insta/insta1.png" alt="">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/insta/insta2.png" alt="">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/insta/insta3.png" alt="">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/insta/insta4.png" alt="">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/insta/insta5.png" alt="">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/insta/insta6.png" alt="">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/insta/insta7.png" alt="">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/insta/insta8.png" alt="">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/insta/insta9.png" alt="">
            </div>
            <p>View more photos</p>
        </div>


    </div>

    <div class="footer_end">Vitalii</div>

</footer>




<!-- javascript -->

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>

<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- slick -->
<!-- <script type="text/javascript" src="js/slick.min.js"></script> -->

<!-- main script fail -->
<!-- <script src="js/main.js"></script> -->

<?php wp_footer() ?>

</body>
</html>
