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

    <section class="white-box">
        <div class="flex-container2">
            <h1 class="ptop-20 wb-heading">Your Financial Freedom Begins Here</h1>
            <div class="flex-container mtop-30">
                <div class="row row__50">
                    <img src="assets/images/forex-banner.png" alt=""/>
                </div>
                <div class="row row__50 ">
                    <p class="wb-par">Have you ever dreamed of being wealthy?
                        Of course, you have, but you likely never considered it
                        a possibility – that changes now! </p>

                    <p class="wb-par">Forex traders make thousands to millions of dollars
                        every day by buying and selling currency,  and with
                        proper training you too can realize financial freedom
                        through Forex.  </p>

                    <p class="wb-par">Register through our free forex trading course
                        to learn more.</p>
                </div>


            </div>

        </div>
        <h3 class="mtop-30 green-btn">Get Your 100% Free Course</h3>
    </section>


















    </div>

    </div>
                        
         <!--<?php echo do_shortcode("[MDSL id=1558]"); ?>-->
    </div>
    </div>
    </body>

<?php
get_footer();
