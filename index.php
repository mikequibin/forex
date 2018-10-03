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

    <header class="header">


        <div class="header-container ptopp-10 mleft-5 pbottomp-10">
            <h1 class="banner-heading">TRADE ANYWHERE, HAVE YOUR</br>
                FREEDOM AND YOUR OWN TIME </h1>

            <h3 class="banner-sub">Start Your Forex Trading journey with the #1</br>
                Forex Trading Education and Community</h3>
        </div>



                <div class="border-line">
                    <a class="jumper" href="#four">
                        <img class="logo-feat" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-feat3.png" alt=""/>
                    </a>
                </div>






    </header>


















    </div>

    </div>
                        
         <!--<?php echo do_shortcode("[MDSL id=1558]"); ?>-->
    </div>
    </div>
    </body>

<?php
get_footer();
