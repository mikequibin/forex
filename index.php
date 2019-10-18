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
        <div class="maxwidth-1200 center anim-tradeanywhere" style="padding-bottom: 10%;position: relative; padding-top: 8%; padding-left: 24%;">
<!--            <img src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/assets/images/nehemiah-textlato1.png" alt=""/>-->
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
                        Settle into the luxurious work-of-art by <span class="extra-bold">East Bel-Air.</span> A contemporary and comfortable home known for its distinctive blend of executive & exclusive living</p>
                    <p class="wb-par">
                        <span class="extra-bold">Palo Alto</span> at the boundary of Antipolo and Tanay leisure farm and residential resorts with water falls and forest reserves.
                    </p>
                    <p class="wb-par">
                        Register through our <span class="extra-bold">MegaEast Residential States</span> to learn more.
                    </p>
                </div>
                <a href="https://freefxcourse.com/contact/" class="shownewsletterbox" >
                    <h3 class="mtop-50 darkgreen-btn-1 slide code code--small code--left aos-init aos-animate" data-aos="fade-up">Book a Tripping Now!</h3>
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
                            comfortable reach, Mega East  fulfills the needs of its growing community of diverse residents in its towering apartments
                            for resale or rent.
                        </p>
                        <p class="wb-par text-white">
                            The exclusive Mega East community, which includes businessmen, corporate executives, families, and students enjoy premium living spaces with world-class condominium
                            amenities – from the fully equipped fitness centers,
                            outdoor lap and kiddie pools, to its prominent lifestyle
                            hubs.
                        </p>
                        <a href="https://freefxcourse.com/contact/" class="shownewsletterbox" >
                            <h3 class="mtop-50 darkgreen-btn-2 slide code code--small code--left aos-init aos-animate" data-aos="fade-up">Book a Tripping Now!</h3>
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
                            <div class="flex-container comf-border">
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
            <p class="wb-par text-center bold">Condominium, House & Lot and Residential Resort For Sale</p>
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
            <a href="https://freefxcourse.com/contact/" class="shownewsletterbox" >
                <h3 class="mtop-50 darkgreen-btn-3 slide code code--small code--left aos-init aos-animate" data-aos="fade-up">Book a Tripping Now!</h3>
            </a>
        </div>
    </section>

    <section class="remove-gray comfy-life">
        <div class="maxwidth-1200 ptop-90 pbottom-90">
            <div class="">
                <div class="flex-container flex-formsec">
                    <div class="row__50 mtop noleft-margin mobile-width2 leftno-mobile top-mobile5">
                        <h2 class="wb-heading mobile-heading mbottom-30 extra-bold text-green">There's Something<br> <span class="extra-bold text-white">Inspiring About Inspiring</span></h2>
                        <p class="label-par  bold">Popular Speaking Topics</p>
                        <p><img class="" src="http://localhost/devmike/wp-content/themes/forex/assets/images/green-separator.png" alt=""></p>
                        <ul>
                            <div class="flex-container comf-border">
                                <img class="icon-width aos-init" src="http://www.nehemiahmabry.com/wp-content/themes/forex/assets/images/bv-1.png" style="" alt="" data-aos="fade-left">
                                <p class="comf-par text-white">Student Success &amp; Perseverance</p>
                            </div>
                            <div class="flex-container comf-border">
                                <img class="icon-width aos-init" src="http://www.nehemiahmabry.com/wp-content/themes/forex/assets/images/bv-2.png" style="" alt="" data-aos="fade-left">
                                <p class="comf-par text-white">STEM + Arts &amp; Creativity</p>
                            </div>
                            <div class="flex-container comf-border">
                                <img class="icon-width aos-init" src="http://www.nehemiahmabry.com/wp-content/themes/forex/assets/images/bv-3.png" style="" alt="" data-aos="fade-left">
                                <p class="comf-par text-white">STEM/STEAM Leadership Development</p>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="comment-sec">
        <div class="flex-container flexcom-mobile">
            <div class="row__35 black-bg">
                ﻿<h2 class="wb-heading mobile-heading mbottom-30 extra-bold text-green">Our<br> <span class="extra-bold text-white">Client Say</h2>
                <img class="slide code code--small code--left aos-init aos-animate" data-aos="fade-up" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/quote-ic.png" alt=""/>
               <div class="comment-div">
                   <p class="cm-par "> It is always a pleasure to make new friends, Ms. Joan became our friend. She delivered correspondence and documents on a very timely basis and the sale went smooth. The closing went very well.</p>
                   <p class="cm-par text-white bold">Dexter CO</p>
               </div>
                <img class="slide code code--small code--left aos-init aos-animate" data-aos="fade-up" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/quote-ic.png" alt=""/>
                <div class="comment-div">
                    <p class="cm-par ">Ms. Joan helped us with the purchase of our dream property! Our questions were answered quickly and the whole process was seamless. Thank You!</p>
                    <p class="cm-par text-white bold">Celebrity POKWANG</p>
                </div>
            </div>
            <div class="row__35 col-bg">
            </div>
            <div class="row__35 white-bg text-center">
                <img class=" code code--small code--left aos-init aos-animate" data-aos="fade-up" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/quote-green.png" alt=""/>
                <p class="cm-par text-black mtop-30">Ms. Joan went above and beyond to obtain the information we needed to purchase our home as well as answering each and every question we had. She truly is an agent who listens to what your needs & wants are and doesn't stop looking until she has found the property that best suits your requirements.</p>
                <p class="cm-par text-black">Her fun and positive attitude made her a joy to work with and her honesty was refreshing. We would highly recommend Ms. Joan Eduarte to anyone interested in purchasing a home!</p>
                <p class="cm-par text-black bold">Kim DOMINGO</p>
                <img  class="mtop-30  code code--small code--left aos-init aos-animate" data-aos="fade-up" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/green-dots.png" alt=""/>
            </div>
        </div>
    </section>

<!--    ﻿<section class="remove-gray review-nh">-->
<!--        <div class="maxwidth-1200 ptop-90 pbottom-90">-->
<!--            <div class="">-->
<!--                <div class="flex-container flex-formsec">-->
<!--                    <div class="row__50 mobile-width2">-->
<!---->
<!--                    </div>-->
<!---->
<!--                    <div class="row__50 mleft-100 mtop noleft-margin mobile-width2 leftno-mobile top-mobile5">-->
<!--                        <h2 class="wb-heading mobile-heading text-white mbottom-30"><span class="extra-bold text-blue">What they are Saying</h2>-->
<!--                        <p><img class="" src="https://i.imgur.com/hNhZ5gW.png" alt=""></p>-->
<!--                        <div class="comf-border">-->
<!--                            <h5 class="checklist nobottom-mobile mleft" style="margin-bottom: 0px;">Dr. Louis Martin-Vega<br>Dean of Engineering<br>North Carolina State University</h5>-->
<!--                            <p class="wb-par" style="color: #000!important;">“The impact of his creation, STEMedia, has been so significant that I invited Nehemiah [Dr. Mabry] to participate as a guest speaker at a 2013 presentation of the College of Engineering to the NC State Board of Trustees, a moment that not only resulted in a resounding standing ovation for this exceptional young man but also a testament to how his work inspires audiences of all ages.”</p>-->
<!--                        </div>-->
<!--                        <div class="comf-border">-->
<!--                            <h5 class="checklist nobottom-mobile mleft" style="margin-bottom: 0px; margin-top: 20px;">A. Monica Cutno<br>Co-Founder & Board Chair<br>Envision Science Academy</h5>-->
<!--                            <p class="wb-par" style="color: #000!important;">“Dr. Mabry kicked off our Career Day as keynote speaker where he engaged around 200 middle school students and numerous administrators and staff. His presentation was so motivational and encouraging, teachers and students sang his praises the entire day. Dr. Mabry’s presence at Envision Science Academy is critically important for our young scholars, as he is the epitome of STEAM (science, technology, engineering, arts, and mathematics).”</p>-->
<!--                        </div>-->
<!--                        <div class="comf-border">-->
<!--                            <h5 class="checklist nobottom-mobile mleft" style="margin-bottom: 0px; margin-top: 20px;">William Smith<br>Director of International Programs<br>Purdue University College of Veterinary Medicine</h5>-->
<!--                            <p class="wb-par">“Dr. Nehemiah Mabry, President of STEMedia, spoke to the Purdue Black Male Excellence Network today and did an excellent job in not only encouraging our young men to engineer their path to success but to find their "zone of genius". I think he would be of great value to your programs and college. When I come across inspirational and excellent content for our community, I like to pass it along.”</p>-->
<!--                        </div>-->
<!--                        <div style="color: #000!important;">-->
<!--                            <h5 class="checklist nobottom-mobile mleft" style="margin-bottom: 0px; margin-top: 20px;">Summer Roberts<br>STEM Early College High School Teacher</h5>-->
<!--                            <p class="wb-par">“Thank you for your engaging presentation! I know it helped my students engage with and understand more about the power of wordplay and poetry. They also got to practice working as a team thanks to your interactive approach... your presentation and activities provided a great example of integrating the sciences and the arts.”</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!---->
<!--        <section>-->
<!--            <div class="">-->
<!--                <img class="rev-bg" src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/assets/images/review-bg2.jpg" style="width:28%;" alt=""/>-->
<!--            </div>-->
<!--            <div class="review-sec rev-icon">-->
<!--                <div class=" flex-container mtop-50 mbottom-50 flex-container3 flex-reviewsec ">-->
<!--                    <div class="row__30 mtop-30 mobile-reviewsec mobile-width">-->
<!--                        <h2 class="wb-heading text-orange mobile-center">Our<br>-->
<!--                            <span class="text-black bold">Client say</span></h2>-->
<!--                        <p><img class=" bold-line1" src="https://i.imgur.com/hNhZ5gW.png" alt=""></p>-->
<!--                    </div>-->
<!--                    <div class="row__70 center mright-70 mobile-width mobile-top"><img class="review-quote" data-aos="fade-up" src="https://i.imgur.com/8aSGLrK.png" alt="">-->
<!--                        <div class="slideshow-container">-->
<!--                            <div class="mySlides fader">-->
<!--                                <p class="contact-rev">As a financial adviser, I was exposed and studied different kind of trading<br>-->
<!--                                    techniques. I never thought that a free trading course would be the one so valuable and let me be consistent on my trading journey. Thanks to the community and for the course now I can give a huge return of investment to my clients.<br>-->
<!--                                </p><h4 class="text-black text-center margin-0 ptop-30">ALLAN, PH</h4>-->
<!--                            </div>-->
<!--                            <div class="mySlides fader">-->
<!--                                <p class="contact-rev">Now I can work and trade at the side cause of swing trading.</p>-->
<!--                                <p class="contact-rev">Through the guidance and the relentless passion of the founder I found my own trading plan and stick to the rules.</p>-->
<!--                                <h4 class="text-black text-center margin-0 ptop-30">JIN, CA</h4>-->
<!--                            </div>-->
<!--                            <div class="mySlides fader">-->
<!--                                <p class="contact-rev">I was already trading since 2013, after years I still didn't know much to be able to make profits consistently cause sometimes you think you know how to trade until you do it practically.</p>-->
<!--                                <p class="contact-rev">Then the trader came and taught me, trust me he knows what he is doing, so make use of this community and it will actually change your life!</p>-->
<!--                                <h4 class="text-black text-center margin-0 ptop-30">MPHOK, ZA</h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div style="text-align:center">-->
<!--                            <span class="dot" onclick="currentSlide(1)"></span><span class="dot" onclick="currentSlide(2)"></span><span class="dot" onclick="currentSlide(3)"></span></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->



    <section class="remove-gray change-box">
        <div class="maxwidth-1200 ptop-90 pbottom-40 change-box">
            <h2 class="change-head text-green">Change <span class="text-white extra-bold">Your Life Today!</span></h2>
            <a href="https://freefxcourse.com/contact/">
                <h3 class="mtop-30 darkgreen-btn-3 slide code code--small code--left aos-init aos-animate" data-aos="fade-up">Book a Tripping Now!</h3>
            </a>
            <h5 class="change-text ptop-20 pbottom-15 text-white">Questions? Contact our Support Team</h5>
        </div>
    </section>


    </div>

    </div>


    </div>
    </div>
    </body>











<?php
get_footer();





