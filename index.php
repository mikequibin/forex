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
        <div class="header-container ptopp-5 pbottomp-5">
            <div class="maxwidth-1200 center anim-tradeanywhere" style="padding-bottom: 10%;">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/header-text.png" alt=""/>
            </div>
            <div class="maxwidth-1200 anim-top1">
                <h3 class="banner-sub">Start Your <span class="extra-bold text-white">FOREX</span ><span class="extra-bold">TRADING</span> journey with the</br> #1 FOREXTRADING <span class="text-white">Education</span > and <span class="text-white">Community</span ></h3>
            </div>
        </div>
    </header>



    <section class="white-box financial-diamond anim-financial">
        <div class="maxwidth-1200">
            <h2 class="ptop-90 wb-heading mobile-heading"><span class="extra-bold text-orange">Your Financial</span></br> Freedom</br> Begins Here</h2>
            <img class="bold-line" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bold-line.png" alt=""/>
            <div class="maxwidth-45p">
                <p class="wb-par">Have you ever dreamed of being wealthy?</br> Of course, you have, but you likely never considered it</br>a possibility – that changes now!</p>
                <p class="wb-par">Forex traders make thousands to millions of dollars</br>every day by buying and selling currency,  and with</br>proper training you too can realize financial freedom</br>through Forex.</p>
                <p class="wb-par">Register through our free forex trading course to learn more.</p>
                <a href="https://freefxcourse.com/contact/">
                    <h3 class="mtop-50 orange-btn slide code code--small code--left aos-init aos-animate" data-aos="fade-right">Get Your 100% Free Course</h3>
                </a>
            </div>

        </div>
    </section>

    <section class="comfy-life">
        <div class="maxwidth-1200 ptop-90 pbottom-90">
            <div class="">
                <div class="flex-container flex-formsec">
                    <div class="row__50 mobile-width2">
                        <h2 class="wb-heading mobile-heading text-white"><span class="extra-bold text-orange">Your</br> Comfortable</br> </span>Life Awaits</h2>
                        <img class="bold-line" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bold-line.png" style="width:28%;" alt=""/>
                        <p class="wb-par text-white">You deserve success and financial freedom, so you must take the necessary steps to achieving that goal.</p>
                        <p class="wb-par text-white">Take control of your financial future and explore the possibilities of wealth creation with Forex trading simply take the free forex trading course.</p>
                        <a href="https://freefxcourse.com/contact/">
                            <h3 class="mtop-50 orange-btn1 slide code code--small code--left aos-init aos-animate" data-aos="fade-right">Get Your 100% Free Course</h3>
                        </a>
                    </div>

                    <div class="row__50 mleft-60 mtop noleft-margin mobile-width2 leftno-mobile top-mobile5">
                        <h4 class="checklist nobottom-mobile center mleft">Our Forex Education will teach you:</h4>
                        <ul>
                            <div class="flex-container comf-border">
                                <img class="icon-width" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/b-1.png" style="" alt="" data-aos="fade-left">
                                <p class="comf-par text-white">How to make money in trading </p>
                            </div>

                            <div class="flex-container comf-border">
                                <img class="icon-width" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/b-2.png" style="" alt="" data-aos="fade-left"/>
                                <p class="comf-par text-white">Proven successful Forex techniques</p>
                            </div>

                            <div class="flex-container comf-border">
                                <img class="icon-width" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/b-3.png" style="" alt="" data-aos="fade-left"/>
                                <p class="comf-par text-white">Risk Management Technique and Tips</p>
                            </div>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="trader-box">
        <div class="maxwidth-1200 ptop-90 pbottom-40 padding-mobile">
            <h2 class="pbottom-15 wb-heading text-orange text-center">Learn from <span class="text-black extra-bold">the traders</span></h2>
            <p class="wb-par text-center bold">Be part of the community and be the next to testify with your own results</p>
            <div class="flex-container2">
                <div class="flex-container mtop-50 flexcont-mobile">
                    <div class="row row__30 forex-box row-mobile">
                        <img class="fb-image code code--small code--left aos-init aos-animate" data-aos="fade-down-right" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/massive-ic.png" alt=""/>
                        <h4 class="fb-head no-bottom">Massive Income</br>
                            Potential</h4>
                        <img class="margin-20" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gray-line.png" alt=""/>
                        <p class="fb-cont">Be part of the community and be the next
                            to testify with your own results. Forex
                            trading offers a path to financial freedom.
                            Using proven strategies, traders stand
                            to earn millions in income and generate
                            wealth.</p>
                    </div>

                    <div class="row row__30 forex-box row-mobile top30-mobile">
                        <img class="fb-image code code--small code--left aos-init aos-animate" data-aos="fade-down" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/flexible-ic.png" alt=""/>
                        <h4 class="fb-head no-bottom">Flexible
                            Hours</h4>
                        <img class="margin-20" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gray-line.png" alt=""/>
                        <p class="fb-cont">The Foreign Exchange is a 24/7 global
                            marketplace. Trade from the comfort of
                            your home during your free time, or at a
                            time that suits you.</p>
                    </div>
                    <div class="row row__30 forex-box row-mobile top30-mobile">
                        <img class="fb-image code code--small code--left aos-init aos-animate" data-aos="fade-down-left" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/easy-ic.png" alt=""/>
                        <h4 class="fb-head no-bottom">Easy to
                            Learn</h4>
                        <img class="margin-20" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gray-line.png" alt=""/>
                        <p class="fb-cont">People from all walks of life have the
                            potential to earn $$$ trading Forex,
                            simply take the free forex trading course
                            and start a career in trading now.</p>
                    </div>
                </div>
            </div>
            <a href="https://freefxcourse.com/contact/" class="shownewsletterbox">
                <h3 class="mtop-50 orange-btn-2 slide code code--small code--left aos-init aos-animate" data-aos="fade-up">Get Your 100% Free Course</h3>
            </a>
        </div>
    </section>

    <section>
        <div class="">
            <img class="rev-bg" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/review-bg2.jpg" style="width:28%;" alt=""/>
        </div>
        <div class="review-sec rev-icon">
            <div class=" flex-container mtop-50 mbottom-50 flex-container3 flex-reviewsec ">
                <div class="row__30 mtop-30 mobile-reviewsec mobile-width">
                    <h2 class="wb-heading text-orange mobile-center">Our<br>
                        <span class="text-black bold">Client say</span></h2>
                    <p><img class=" bold-line1" src="https://i.imgur.com/hNhZ5gW.png" alt=""></p>
                </div>
                <div class="row__70 center mright-70 mobile-width mobile-top"><img class="review-quote" src="https://i.imgur.com/8aSGLrK.png" alt="">
                    <div class="slideshow-container">
                        <div class="mySlides fader">
                            <p class="contact-rev">As a financial adviser, I was exposed and studied different kind of trading<br>
                                techniques. I never thought that a free trading course would be the one so valuable and let me be consistent on my trading journey. Thanks to the community and for the course now I can give a huge return of investment to my clients.<br>
                            </p><h4 class="text-black text-center margin-0 ptop-30">ALLAN, PH</h4>
                        </div>
                        <div class="mySlides fader">
                            <p class="contact-rev">Now I can work and trade at the side cause of swing trading.</p>
                            <p class="contact-rev">Through the guidance and the relentless passion of the founder I found my own trading plan and stick to the rules.</p>
                            <h4 class="text-black text-center margin-0 ptop-30">JIN, CA</h4>
                        </div>
                        <div class="mySlides fader">
                            <p class="contact-rev">I was already trading since 2013, after years I still didn't know much to be able to make profits consistently cause sometimes you think you know how to trade until you do it practically.</p>
                            <p class="contact-rev">Then the trader came and taught me, trust me he knows what he is doing, so make use of this community and it will actually change your life!</p>
                            <h4 class="text-black text-center margin-0 ptop-30">MPHOK, ZA</h4>
                        </div>
                    </div>
                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span><span class="dot" onclick="currentSlide(2)"></span><span class="dot" onclick="currentSlide(3)"></span></div>
                </div>
            </div>
        </div>
    </section>



    <section class="change-box">
        <div class="maxwidth-1200 ptop-90 pbottom-40 change-box">
            <h2 class="change-head">change your <span class="text-white extra-bold">life today</span></h2>
            <a href="https://freefxcourse.com/contact/">
                <h3 class="mtop-30 orange-btn-3 slide code code--small code--left aos-init aos-animate" data-aos="fade-up">Get Your 100% Free Course</h3>
            </a>
            <h5 class="change-text ptop-20 pbottom-15 text-white">Questions? Contact our Support Team</h5>
        </div>
    </section>


    </div>

    </div>


    </div>
    </div>
    </body>


    <!--sample-->

<!--sample-->










<?php
get_footer();





