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
        <div class="maxwidth-1200 center anim-tradeanywhere" style="padding-bottom: 10%;position: relative; padding-top: 4%; padding-left: 24%;">
            <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/main-text.png" alt=""/> -->
        </div>
        <video autoplay muted loop class="fullvideo-container" poster="">
            <!--            <source src="https://player.vimeo.com/external/333935388.m3u8?s=ad529643216e37d7c63148426e033c6cc3fea094&autoplay=1" type="video/mp4">-->
        </video>
    </header>
    ﻿<section class="remove-gray white-box financial-diamond anim-financial">
        <div class="flex-container maxwidth-1200">
            <div class="row__60 ptop-20 row-60-mobile">
                ﻿<h2 class="wb-heading mobile-heading mbottom-30"><span class="extra-bold text-green">Your Financial</span><br> Investments<br> Begins Here</h2>
                <p><img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/green-separator.png" alt=""></p>
                <div class="width-90 mobile-first-section">
                    <p class="wb-par">
                        Megaeast Properties Inc. is fast-rising to be amongst the industry leaders in the field of property marketing and sales, condominium, house and lot, and commercial.</p>
                    <p class="wb-par">
                        <span class="extra-bold">Palo Alto</span> at the boundary of Antipolo and Tanay leisure farm and residential resorts with water falls and forest reserves.
                    </p>
                </div>
                <a href="https://pilipinaspropertyforsale.com/book-trippings/" class="shownewsletterbox" >
                    <h3 class="mtop-50 darkgreen-btn-1 slide code code--small code--left aos-init aos-animate" data-aos="fade-up">Inquire Now!</h3>
                </a>
            </div>
        </div>
    </section>

    ?<section class="remove-gray comfy-life">
        <div class="maxwidth-1200 ptop-90 pbottom-90">
            <div class="">
                <div class="flex-container flex-formsec">
                    <div class="row__50 mtop noleft-margin mobile-width2 leftno-mobile top-mobile5">
                        <h2 class="wb-heading mobile-heading mbottom-30 extra-bold text-green">Your Comfortable<br> <span class="extra-bold text-white">Life Awaits</h2>
                        <p><img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/green-separator.png" alt=""></p>
                        <p class="wb-par text-white">
                            With great establishments and city necessities within
                            comfortable reach, Mega East  fulfills the needs of its growing community of diverse residents in the storey units and villas.
                        </p>
                        <p class="wb-par text-white">
                            The exclusive Mega East community, which includes businessmen, corporate executives, families, and students enjoy premium living spaces with world-class condominium
                            amenities – from the fully equipped fitness centers, outdoor lap and kiddie pools, to its prominent lifestyle hubs.
                        </p>
                        <a href="https://freefxcourse.com/contact/" class="shownewsletterbox" >
                            <h3 class="mtop-50 darkgreen-btn-2 slide code code--small code--left aos-init aos-animate" data-aos="fade-up">Inquire Now!</h3>
                        </a>
                    </div>
                    <div class="row__50 mtop noleft-margin mobile-width2 leftno-mobile top-mobile5 mleft-10 mtop-40">
                        <h4 class="text-white">Unit For Sale</h4>
                        <ul>
                            <div class="flex-container comf-border">
                                <img class="green-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/green-ico.png" style="" alt="" data-aos="fade-left">
                                <p class="comf-par text-white">Creates an exclusive community </p>
                            </div>
                            <div class="flex-container comf-border">
                                <img class="green-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/green-ico.png" style="" alt="" data-aos="fade-left"/>
                                <p class="comf-par text-white">Secure, comfortable neighborhood imbued
                                    with a sense of tasteful living</p>
                            </div>
                            <div class="flex-container comf-border no-border">
                                <img class="green-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/green-ico.png" style="" alt="" data-aos="fade-left"/>
                                <p class="comf-par text-white">Utmost convenience in the middle
                                    of the city</p>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    ﻿<section class="remove-gray trader-box">
        <div class="maxwidth-1200 ptop-90 pbottom-40 padding-mobile">
            <h2 class="pbottom-15 wb-heading text-green text-center">Featured <span class="text-black extra-bold">Projects</span></h2>
            <p class="wb-par text-center bold">Condominium, House & Lot and Properties</p>
            <div class="flex-container2">
                <div class="flex-container mtop-50 flexcont-mobile">
                    <div class="row row__30 forex-box row-mobile">
                        <img class="fb-image code code--small code--left aos-init aos-animate" data-aos="fade-down-right" src="<?php echo    get_stylesheet_directory_uri(); ?>/assets/images/ebar.png" alt=""/>
                        <h4 class="fb-head no-bottom text-green">East Bel-Air Residence</h4>
                        <img class="margin-20" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gray-line.png" alt=""/>
                        <p class="fb-cont">The complex strategically located at the Cainta- Pasig corridor at the midpoint of the highly commercial Felix Avenue and near the giant Sta.Lucia Mall.</p>
                    </div>
                    <div class="row row__30 forex-box row-mobile top30-mobile">
                        <img class="fb-image code code--small code--left aos-init aos-animate" data-aos="fade-down" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/birmingham-project.png" alt=""/>
                        <h4 class="fb-head no-bottom text-green">Birmingham Project</h4>
                        <img class="margin-20" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gray-line.png" alt=""/>
                        <p class="fb-cont">There has never been a better time to buy a new house and lot.  HDC-Birmingham subdivisions offers a very affordable house and lot for sale and we would be honored to assist you.</p>
                    </div>
                    <div class="row row__30 forex-box row-mobile top30-mobile">
                        <img class="fb-image code code--small code--left aos-init aos-animate" data-aos="fade-down-left" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/palo-alto.png" alt=""/>
                        <h4 class="fb-head no-bottom text-green">Palo Alto</h4>
                        <img class="margin-20" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gray-line.png" alt=""/>
                        <p class="fb-cont">Palo Alto at the boundary of Antipolo/ Baras and Tanay leisure farm & residental resort with water falls and forest reserves.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="remove-gray change-box">
        <div class="maxwidth-1200 ptop-90 pbottom-40 change-box">
            <h2 class="change-head text-green">Change <span class="text-white extra-bold">Your Life Today!</span></h2>
            <a href="https://freefxcourse.com/contact/">
                <h3 class="mtop-30 darkgreen-btn-3 slide code code--small code--left aos-init aos-animate" data-aos="fade-up">Inquire Now!</h3>
            </a>
            <h5 class="change-text ptop-20 pbottom-15 text-white">Questions? Contact our Support Team</h5>
        </div>
    </section>

    <section class="remove-gray trader-box">
        <div class="maxwidth-1200 ptop-90 pbottom-40 padding-mobile">
            <h2 class="pbottom-15 wb-heading text-green text-center">Archives <span class="text-black extra-bold">Gallery</span></h2>
            <p class="wb-par text-center bold">House and Lot Residential Projects</p>
            <div class="flex-container4">
                <div class="flex-container mtop-50 flexcont-mobile">
                    <div class="row row__30 gallery-box row-mobile">
                        <img class="margin-5" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/g1-cincohermanos.jpg" alt=""/>
                        <p class="fb-cont fb-cont-i">Birmingham Cinco Hermanos</br>Industrial Valley, Marikina</p>
                    </div>
                    <div class="row row__30 gallery-box row-mobile top30-mobile">
                        <img class="margin-5" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/g2-birminghamsotera.jpg" alt=""/>
                        <p class="fb-cont fb-cont-i">Birmingham Sotera</br>Gen. Trias, Cavite</p>
                    </div>
                    <div class="row row__30 gallery-box row-mobile top30-mobile">
                        <img class="margin-5" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/g3-xavierville.jpg" alt=""/>
                        <p class="fb-cont fb-cont-i">Birmingham Xavierville</br>Quezon City</p>
                    </div>
                </div>
                <div class="flex-container mtop-50 flexcont-mobile">
                    <div class="row row__30 gallery-box row-mobile">
                        <a href="https://www.pilipinaspropertyforsale.com/product/birmingham-alberto/"><img class="margin-5" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/g4-birminghamalberta.jpg" alt=""/></a>
                        <a class="prop-btn" href="https://www.pilipinaspropertyforsale.com/product/birmingham-alberto/"><p class="fb-cont fb-cont-i">Birmingham Alberto</br>San Mateo, Rizal</p></a>
                    </div>
                    <div class="row row__30 gallery-box row-mobile top30-mobile">
                        <a href="https://www.pilipinaspropertyforsale.com/product/birmingham-camden/"><img class="margin-5" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/g5-birminghamcamden.jpg" alt=""/></a>
                        <a class="prop-btn" href="https://www.pilipinaspropertyforsale.com/product/birmingham-camden/"><p class="fb-cont fb-cont-i">Birmingham Camden</br>Antipolo City, Rizal</p></a>
                    </div>
                    <div class="row row__30 gallery-box row-mobile top30-mobile">
                        <img class="margin-5" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/g6-simeonaduplex.jpg" alt=""/>
                        <p class="fb-cont fb-cont-i">Birmingham Simeona Duplex</br>Concepcion II, Marikina City</p>
                    </div>
                </div>
                <div class="flex-container mtop-50 flexcont-mobile">
                    <div class="row row__30 gallery-box row-mobile">
                        <img class="margin-5" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/g7-birminghanspringfield.jpg" alt=""/>
                        <p class="fb-cont fb-cont-i">Birmingham Springfield</br>Cainta, Rizal</p>
                    </div>
                    <div class="row row__30 gallery-box row-mobile top30-mobile">
                        <img class="margin-5" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/g8-birminghamvillas.jpg" alt=""/>
                        <p class="fb-cont fb-cont-i">Birmingham Villas</br>Tagaytay City</p>
                    </div>
                    <div class="row row__30 gallery-box row-mobile top30-mobile">
                        <a href="https://www.pilipinaspropertyforsale.com/product/birmingham-sotera/"><img class="margin-5" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/g11-heights" alt=""/></a>
                        <a class="prop-btn" href="https://www.pilipinaspropertyforsale.com/product/birmingham-sotera/"><p class="fb-cont fb-cont-i">Birmingham Heights</br>Fortune, Marikina City</p></a>
                    </div>
                </div>
                <div class="flex-container mtop-50 flexcont-mobile">

                </div>
            </div>
            <a href="https://freefxcourse.com/contact/" class="shownewsletterbox" >
                <h3 class="mtop-50 darkgreen-btn-3 slide code code--small code--left aos-init aos-animate" data-aos="fade-up">Inquire Now!</h3>
            </a>
        </div>
    </section>




    ﻿<section class="remove-gray review-nh">-->
        <div class="maxwidth-1200 ptop-90 pbottom-90">
            <div class="">
                <div class="flex-container flex-formsec">
                    <div class="row__50 mobile-width2">
                    </div>

                    <div class="row__50 mleft-100 mtop noleft-margin mobile-width2 leftno-mobile top-mobile5">
                        <h2 class="wb-heading mobile-heading text-green mbottom-30"><span class="extra-bold text-black">Our Client's Review</h2>
                        <p><img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/green-separator.png" alt=""></p>
                        <div class="comf-border">
                            <h5 class="checklist nobottom-mobile mleft" style="margin-bottom: 0px;">Dexter CO<br>Businessman</h5>
                            <p class="wb-par" style="color: #000!important;">“Purchased lots in Rizal Technopark. It was so nice to work with them. The transaction went smoothly. The after sales services are excellent. Just one message away”</p>
                        </div>
                        <div class="comf-border">
                            <h5 class="checklist nobottom-mobile mleft" style="margin-bottom: 0px; margin-top: 20px;">Marietta Subong, Pokwang<br>Filipino Comedian<br></h5>
                            <p class="wb-par" style="color: #000!important;">“We tripped to Alta Vista, Antipolo Rizal with my baby. We also used their own car. The team was very accomodating!”</p>
                        </div>
                        <div class="comf-border">
                            <h5 class="checklist nobottom-mobile mleft" style="margin-bottom: 0px; margin-top: 20px;">Kim Domingo<br>Filipino Actress</h5>
                            <p class="wb-par">“I can't believe I already bought my own house. Glad I found an agent who can offer me a property that suits with my needs and wants.”</p>
                        </div>
                        <div style="color: #000!important;">
                            <h5 class="checklist nobottom-mobile mleft" style="margin-bottom: 0px; margin-top: 20px;">Client<br>Sales Manager</h5>
                            <p class="wb-par">“Wonderful customer service. Excellent communication. Ms. Joan worked very hard to help me get this wonderful place to call home. ”</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>







    </div>

    </div>


    </div>
    </div>
    </body>











<?php
get_footer();





