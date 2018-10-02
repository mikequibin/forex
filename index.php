<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shapely
 */
get_header(); ?>
<?php $layout_class = shapely_get_layout_class();?>

    <body>

    <header>
        <video autoplay muted loop class="fullvideo-container" poster="https://imgur.com/lKlQQfN.jpg">

        </video>

        <div class="border-line">
            <a class="jumper" href="#four">
                <img class="logo-feat" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-feat3.png" alt=""/>
            </a>
        </div>
    </header>
                            <script>
                                //Note: this script should be placed at the bottom of the page, or after the slider markup. It cannot be placed in the head section of the page.
                                var thumbs1 = document.getElementById("thumbnail-slider");
                                var thumbs2 = document.getElementById("thumbs2");
                                var closeBtn = document.getElementById("closeBtn");
                                var slides = thumbs1.getElementsByTagName("li");
                                for (var i = 0; i < slides.length; i++) {
                                    slides[i].index = i;
                                    slides[i].onclick = function (e) {
                                        var li = this;
                                        var clickedEnlargeBtn = false;
                                        if (e.offsetX > 220 && e.offsetY < 25) clickedEnlargeBtn = true;
                                        if (li.className.indexOf("active") != -1 || clickedEnlargeBtn) {
                                            thumbs2.style.display = "block";
                                            mcThumbs2.init(li.index);
                                        }
                                    };
                                }

                                thumbs2.onclick = closeBtn.onclick = function (e) {
                                    //This event will be triggered only when clicking the area outside the thumbs or clicking the CLOSE button
                                    thumbs2.style.display = "none";
                                };
                            </script>
                        </div>

                        </div>
                        
                        <!--<?php echo do_shortcode("[MDSL id=1558]"); ?>-->
                    </div>
                </div>
    </body>

<?php
get_footer();
