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
        <div class="header-container ptopp-20 pbottomp-12">
            <div style="max-width: 1280px; margin: 0 auto; padding-bottom: 10%;">
                <h1 class="banner-heading">Trade anywhere,</br>
                    Have your Freedom</br>
                    & your own time</h1>
                <img style="position: absolute; right: 0; margin-right: 24%; margin-top: -17%; max-width: 100%;" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/float-box.png">
            </div>

            <div style="max-width: 1280px; margin: 0 auto;">
                <h3 class="banner-sub">Start Your <span class="extra-bold text-white">FOREX</span ><span class="extra-bold">TRADING</span> journey with the #1</br>FOREXTRADING <span class="text-white">Education</span > and <span class="text-white">Community</span ></h3>
            </div>

        </div>
    </header>

    <section class="white-box">
        <div class="flex-mobile">
            <div class="flex-container">
                <div class="row row__40 mleft-8">
                    <h2 class="ptop-50 mbottom-15 wb-heading mobile-heading"><span class="extra-bold text-orange">Your Financial</span></br> Freedom</br> Begins Here</h2>

                    <img class="bold-line" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bold-line.png"" alt=""/>

                    <p class="wb-par">Have you ever dreamed of being wealthy?
                        Of course, you have, but you likely never considered it
                        a possibility – that changes now!
                    </p>

                    <p class="wb-par">Forex traders make thousands to millions of dollars
                        every day by buying and selling currency,  and with
                        proper training you too can realize financial freedom
                        through Forex.
                    </p>

                    <p class="wb-par">Register through our free forex trading course
                        to learn more.
                    </p>

                    <a href="">
                        <h3 class="mtop-30 orange-btn">Get Your 100% Free Course</h3>
                    </a>

                </div>

                <div class="row row__60">
                    <img class="mleft-23 tiles-cut" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/financial-tiles-cut.png" alt=""/>
                </div>
            </div>
        </div>
    </section>

    <section class="black-bg">
        <div class="flex-mobile">
            <div class="flex-container ptop-40 pbottom-40">
                <div class="row row__40 mleft-8 ">
                    <h2 class="ptop-0 mbottom-15 wb-heading mobile-heading text-white"><span class="extra-bold text-orange">Your</br> Comfortable</br> </span>Life Awaits</h2>

                    <img class="bold-line" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bold-line.png"" alt=""/>

                    <p class="wb-par text-white">You deserve success and financial freedom, so you must
                        take the necessary steps to achieving that goal.
                    </p>

                    <p class="wb-par text-white">Take control of your financial future and explore the
                        possibilities of wealth creation with Forex trading –
                        simply take the free forex trading course.
                    </p>

                    <a href="">
                        <h3 class="mtop-30 orange-btn">Get Your 100% Free Course</h3>
                    </a>
                </div>

                <div class="row row__60">
                    <h4 class="checklist">Our Forex Education will teach you:</h4>
                    <ul>
                        <li class="checklist__item">How to make money in trading </li>
                        <li class="checklist__item">Proven successful forex techniques</li>
                        <li class="checklist__item">Risk Management Technique and Tips</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <section class="lightpink-box no-bottom">
        <div class="flex-container2">
            <h1 class="ptop-20 wb-heading">Learn from the trader</h1>
            <p class="wb-par text-center">Be part of the community and be the next to testify with your own results</p>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/community.png" alt=""/>
    </section>

    <section class="lightpink-box">
        <div class="flex-container2">
            <h1 class="wb-heading ptop-20">Assurance and Benefits</h1>
            <div class="flex-container mtop-30">
                <div class="row row__30 forex-box">
                    <img class="fb-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/income-ic.png" alt=""/>
                    <h4 class="fb-head no-bottom">Massive Income</br>
                        Potential</h4>
                    <img class="margin-20" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/divider.png" alt=""/>
                    <p class="fb-cont">Be part of the community and be the next
                        to testify with your own results. Forex
                        trading offers a path to financial freedom.
                        Using proven strategies, traders stand
                        to earn millions in income and generate
                        wealth.</p>
                </div>
                <div class="row row__30 forex-box">
                    <img class="fb-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hour-ic.png" alt=""/>
                    <h4 class="fb-head no-bottom">Flexible</br>
                        Hours</h4>
                    <img class="margin-20" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/divider.png" alt=""/>
                    <p class="fb-cont">The Foreign Exchange is a 24/7 global
                        marketplace. Trade from the comfort of
                        your home during your free time, or at a
                        time that suits you.</p>
                </div>
                <div class="row row__30 forex-box">
                    <img class="fb-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/learn-ic.png" alt=""/>
                    <h4 class="fb-head no-bottom">Easy to</br>
                        Learn</h4>
                    <img class="margin-20" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/divider.png" alt=""/>
                    <p class="fb-cont">People from all walks of life have the
                        potential to earn $$$ trading Forex,
                        simply take the free forex trading course
                        and start a career in trading now.</p>
                </div>
            </div>
        </div>
        <a href=""><h3 class="mbottom-50 mtop-50 green-btn">Get Your 100% Free Course</h3></a>
    </section>

    <section class="white-box">
        <div class="flex-container2 pbottom-40">
            <h1 class="ptop-20 wb-heading">Here’s what they think!</h1>
            <div class="flex-container ptop-20">
                <div class="row row__35 review-box">
                    <div class="flex-container text-image">
                        <img class="review-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/review-img.png" alt=""/>
                        <h4 class="review-head">– Jin, CA</h4>
                    </div>

                    <p class="review-cont">Now I can work and trade at the
                        side cause of swing trading.</p>
                        <p class="review-cont">Through the guidance and the
                        relentless passion of the founder
                        I found my own trading plan
                        and stick to the rules.</p>
                </div>
                <div class="row row__35 review-box">
                    <div class="flex-container text-image">
                        <img class="review-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/review-img.png" alt=""/>
                        <h4 class="review-head">– Allan, PH</h4>
                    </div>

                    <p class="review-cont">As a financial adviser, I was exposed
                        and studied different kind of trading
                        techniques.</p>
                    <p class="review-cont">I never thought that a
                        free trading course would be the
                        one so valuable and let me be
                        consistent on my trading journey.</p>
                    <p class="review-cont">Thanks to the community and for
                        the course now I can give a huge
                        return of investment to my clients.</p>
                </div>
                <div class="row row__35 review-box">
                    <div class="flex-container text-image">
                        <img class="review-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/review-img.png" alt=""/>
                        <h4 class="review-head">– Mphok, ZA</h4>
                    </div>
                    <p class="review-cont">I was already trading since 2013, after
                        years I still didn't know much to be
                        able to make profits consistently
                        cause sometimes you think you
                        know how to trade until you do
                        it practically.</p>
                    <p class="review-cont">Then the trader came and taught me,
                        trust me he knows what he is doing, so
                        make use of this community and it
                        will actually change your life!</p>
                </div>
            </div>
        </div>
    </section>

    <section class="green-box">
        <div class="flex-container2">
            <div class="change-box">
                <h1 class="change-head ptop-20 no-bottom">change your life today</h1>
                <a class="ptop-20" href=""><h3 class=" gray-btn">Get Your 100% Free Course</h3></a>
                <div class="row row__50 margin-0">
<!--                    <img src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/assets/images/small-icon.png" alt=""/>-->
                    <h5 class="change-text ptop-20">Questions? Contact our Support Team</h5>
                </div>

            </div>
        </div>
    </section>


    </div>

    </div>
                        
         <!--<?php echo do_shortcode("[MDSL id=1558]"); ?>-->
    </div>
    </div>
    </body>

<?php
get_footer();
