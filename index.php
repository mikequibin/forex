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

<!--    <header class="header">-->
<!--        <div class="header-container ptopp-5 pbottomp-5">-->
<!--            <div class="maxwidth-1200 center" style="padding-bottom: 10%;">-->
<!--                <img src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/assets/images/header-text.png" alt=""/>-->
<!--            </div>-->
<!--            <div class="maxwidth-1200">-->
<!--                <h3 class="banner-sub">Start Your <span class="extra-bold text-white">FOREX</span ><span class="extra-bold">TRADING</span> journey with the</br> #1 FOREXTRADING <span class="text-white">Education</span > and <span class="text-white">Community</span ></h3>-->
<!--            </div>-->
<!--        </div>-->
<!--    </header>-->
<!---->
<!--    <section class="white-box financial-diamond">-->
<!--        <div class="maxwidth-1200">-->
<!--            <h2 class="ptop-90 wb-heading mobile-heading"><span class="extra-bold text-orange">Your Financial</span></br> Freedom</br> Begins Here</h2>-->
<!--            <img class="bold-line" src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/assets/images/bold-line.png" alt=""/>-->
<!--            <div class="maxwidth-45p">-->
<!--                <p class="wb-par">Have you ever dreamed of being wealthy?</br> Of course, you have, but you likely never considered it</br>a possibility – that changes now!</p>-->
<!--                <p class="wb-par">Forex traders make thousands to millions of dollars</br>every day by buying and selling currency,  and with</br>proper training you too can realize financial freedom</br>through Forex.</p>-->
<!--                <p class="wb-par">Register through our free forex trading course to learn more.</p>-->
<!--                <a href="#" class="shownewsletterbox"><h3 class="mtop-50 orange-btn">Get Your 100% Free Course</h3></a>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </section>-->
<!---->
<!--    <section class="comfy-life">-->
<!--        <div class="maxwidth-1200 ptop-90 pbottom-90">-->
<!--            <div class="flex-mobile">-->
<!--                <div class="flex-container">-->
<!--                    <div class="row__50">-->
<!--                        <h2 class="wb-heading mobile-heading text-white"><span class="extra-bold text-orange">Your</br> Comfortable</br> </span>Life Awaits</h2>-->
<!--                        <img class="bold-line" src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/assets/images/bold-line.png" style="width:28%;" alt=""/>-->
<!--                        <p class="wb-par text-white">You deserve success and financial freedom, so you must take the necessary steps to achieving that goal.</p>-->
<!--                        <p class="wb-par text-white">Take control of your financial future and explore the possibilities of wealth creation with Forex trading simply take the free forex trading course.</p>-->
<!--                        <a href=""><h3 class="mtop-50 orange-btn">Get Your 100% Free Course</h3></a>-->
<!--                    </div>-->
<!---->
<!--                    <div class="row__50 mleft-60 mtop-9">-->
<!--                        <h4 class="checklist">Our Forex Education will teach you:</h4>-->
<!--                        <ul>-->
<!--                            <li class="checklist__item">How to make money in trading </li>-->
<!--                            <li class="checklist__item">Proven successful forex techniques</li>-->
<!--                            <li class="checklist__item">Risk Management Technique and Tips</li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!---->
<!--    <section class="trader-box">-->
<!--        <div class="maxwidth-1200 ptop-90 pbottom-40 padding-mobile">-->
<!--            <h2 class="pbottom-15 wb-heading text-orange text-center">Learn from <span class="text-black extra-bold">the traders</span></h2>-->
<!--            <p class="wb-par text-center bold">Be part of the community and be the next to testify with your own results</p>-->
<!--            <div class="flex-container2">-->
<!--                <div class="flex-container mtop-50 flexcont-mobile">-->
<!--                    <div class="row row__30 forex-box row-mobile">-->
<!--                        <img class="fb-image" src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/assets/images/massive-ic.png" alt=""/>-->
<!--                        <h4 class="fb-head no-bottom">Massive Income</br>-->
<!--                            Potential</h4>-->
<!--                        <img class="margin-20" src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/assets/images/gray-line.png" alt=""/>-->
<!--                        <p class="fb-cont">Be part of the community and be the next-->
<!--                            to testify with your own results. Forex-->
<!--                            trading offers a path to financial freedom.-->
<!--                            Using proven strategies, traders stand-->
<!--                            to earn millions in income and generate-->
<!--                            wealth.</p>-->
<!--                    </div>-->
<!---->
<!--                    <div class="row row__30 forex-box row-mobile top30-mobile">-->
<!--                        <img class="fb-image" src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/assets/images/flexible-ic.png" alt=""/>-->
<!--                        <h4 class="fb-head no-bottom">Flexible-->
<!--                            Hours</h4>-->
<!--                        <img class="margin-20" src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/assets/images/gray-line.png" alt=""/>-->
<!--                        <p class="fb-cont">The Foreign Exchange is a 24/7 global-->
<!--                            marketplace. Trade from the comfort of-->
<!--                            your home during your free time, or at a-->
<!--                            time that suits you.</p>-->
<!--                    </div>-->
<!--                    <div class="row row__30 forex-box row-mobile top30-mobile">-->
<!--                        <img class="fb-image" src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/assets/images/easy-ic.png" alt=""/>-->
<!--                        <h4 class="fb-head no-bottom">Easy to-->
<!--                            Learn</h4>-->
<!--                        <img class="margin-20" src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/assets/images/gray-line.png" alt=""/>-->
<!--                        <p class="fb-cont">People from all walks of life have the-->
<!--                            potential to earn $$$ trading Forex,-->
<!--                            simply take the free forex trading course-->
<!--                            and start a career in trading now.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <a href="" class="shownewsletterbox">-->
<!--                <h3 class="mtop-50 orange-btn-2">Get Your 100% Free Course</h3>-->
<!--            </a>-->
<!--        </div>-->
<!--    </section>-->
<!---->
<!--    <section class="review-bg">-->
<!--        <div class="flex-container">-->
<!--            <div class="row row__35 review-box-1 pleft-80">-->
<!--                <h2 class="wb-heading text-orange ptop-80" style="margin-left: 30px;">Our</br>-->
<!--                    <span class="text-white extra-bold">Client say</span>-->
<!--                </h2>-->
<!---->
<!--                <div class="review-text">-->
<!--                    <img class="review-quote" src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/assets/images/quote-ic.png" alt=""/>-->
<!--                    <p class="review-cont">Now I can work and trade at the-->
<!--                        side cause of swing trading.</p>-->
<!--                    <p class="review-cont">Through the guidance and the-->
<!--                        relentless passion of the founder-->
<!--                        I found my own trading plan-->
<!--                        and stick to the rules.</p>-->
<!--                    <h4 class="review-head">Jin, CA</h4>-->
<!---->
<!--                    <img class="review-quote" src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/assets/images/quote-ic.png" alt=""/>-->
<!--                    <p class="review-cont">I was already trading since 2013, after years I still didn't know much to be  able to make profits consistently cause sometimes you think you know how to trade until you do-->
<!--                        it practically. </p>-->
<!--                    <p class="review-cont">Then the trader came and taught me,-->
<!--                        trust me he knows what he is doing, so make use of this community and it will actually change your life!</p>-->
<!--                    <h4 class="review-head">Mphok, za</h4>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="row row__35 review-box-2">-->
<!--                <div class="flex-container text-image">-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="row row__35 review-box-3">-->
<!--                <div class="flex-container">-->
<!--                    <h4 class="review-head">– Mphok, ZA</h4>-->
<!--                </div>-->
<!---->
<!--                <div class="review-text mtop-10 center">-->
<!--                    <img class="review-quote-med" src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/assets/images/quoteorange-ic.png" alt=""/>-->
<!--                    <p class="review-cont text-black text-center">As a financial adviser, I was exposedand studied different kind of trading techniques. </p>-->
<!--                    <p class="review-cont text-black text-center">I never thought that a free trading course would be the one so valuable and let me be consistent on my trading journey. </p>-->
<!--                    <p class="review-cont text-black text-center mbottom-40">Thanks to the community and for the course now I can give a huge return of investment to my clients.</p>-->
<!--                    <h4 class="review-head text-black text-cente margin-0">ALLAN, PH</h4>-->
<!--                    <img class="dotted-ic" src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/assets/images/dottedcircle-ic.png"" alt=""/>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!---->
<!--    <section class="change-box">-->
<!--        <div class="maxwidth-1200 ptop-90 pbottom-40 change-box">-->
<!--                <h2 class="change-head">change your <span class="text-white extra-bold">life today</span></h2>-->
<!--                <a href="">-->
<!--                    <h3 class="mtop-30 orange-btn-3">Get Your 100% Free Course</h3>-->
<!--                </a>-->
<!--                <h5 class="change-text ptop-20 pbottom-15 text-white">Questions? Contact our Support Team</h5>-->
<!--        </div>-->
<!---->
<!---->
<!---->
<!--    </section>-->
<!---->
<!---->
<!--    </div>-->
<!---->
<!--    </div>-->
<!--                        -->
<!--         <!----><?php //echo do_shortcode("[MDSL id=1558]"); ?><!---->
<!--    </div>-->
<!--    </div>-->
<!--    </body>-->

    <section>
        <div class="aboutfx-us">
            <div class="aboutfx-content flex-container flex-container3">
                <div class="aboutfx-left row__50">
                    <h1 class="aboutfx-head">Know <span class="text-orange bold">about us</span></h1>

                    <p class="aboutfx-sub"><span class="text-orange">Bull and Bear Academy</span> was conceived by a financial trader just like you before, who was just looking for a way to make money from trading, the trader spent years trading Forex experiencing the ups and downs of the industry of how it is to be a forex trader.</p>

                    <p class="aboutfx-sub">During his career up-to this very day, the trader
                    generated thousands of dollars in income & developed strategies for trading success. <span class="text-orange">This community was developed just so he could guide and share some of the secrets that he does in his strategies.</span></p>

                    <p class="aboutfx-sub">As a newbie trader before, just like you, it is very hard to learn and be consistent in this industry as for a few reasons which are lack of guidance, costly but not effective forex courses and to many traders who are not helping each other out.</p>

                </div>

                <div class="aboutfx-right row__50">
                    <div class="fx-blackbg">
                        <h1 class="aboutfx-title no-bottom">passion</h1>
                        <p class="aboutfx-sub">The trader started teaching students & true enough the students who pushed themselves to the limits are having
                            consistent & amazing results from the course. And that's what lead to this project.</p>

                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/aboutmd-divider.png" alt=""/>

                        <h1 class="aboutfx-title no-bottom ">mission</h1>
                        <p class="aboutfx-sub">To educate and help through the free forex trading course, provide people with the tools -strategies they need and to provide 100% support from the community to achieve financial freedom and start living their dreams.</p>

                    </div>
                </div>
            </div>

        </div>
    </section>

<section>
    <div class="success-fx">
        <div class=" flex-container flex-container3">
            <div class="row__50 aboutfx-left-bg">
                <img class="mbottom-15" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/left-content.png" alt=""/>
            </div>


            <div class="row__50 mtop-85 mleft-70">
                <div>
                    <h2 class="wb-heading text-orange mbottom-15">
                        our</br>
                        <span class="text-black extra-bold">success</span></h2>
                    <img class="mbottom-15" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-divider.png" alt=""/>
                    <p class="wb-par ">Flock of students took the course with many going on to <span class="extra-bold">successful Forex careers.</span></p>

                    <p class="wb-par"><span class="extra-bold">You learn from the best.</span> All of the courses is
                    free and designed by real Forex traders and offer industry standard advice and techniques.</p>

                    <p class="wb-par"><span class="extra-bold">From risk management to the traders mindset</span>, the courses will provide you with the skills and tools you need to succeed and a roadmap for your success.</p>
                </div>
            </div>
        </div>

    </div>
</section>

    <section class="change-box">
        <div class="maxwidth-1200 ptop-90 pbottom-40 change-box">
            <h2 class="change-head">change your <span class="text-white extra-bold">life today</span></h2>
            <a href="">
                <h3 class="mtop-30 orange-btn-3">Get Your 100% Free Course</h3>
            </a>
            <h5 class="change-text ptop-20 pbottom-15 text-white">Questions? Contact our Support Team</h5>
        </div>
    </section>

    <section class="contactfx-bg">
        <div class=" flex-container3">
            <div class="padding-50">
                <h1 class="contactfx-head">Didn’t <span class="text-orange bold">find what you were looking</span></br>
                    for in our website? </h1>
                <h3 class="contactfx-sub text-white">Our team is ready to <span class="text-orange">answer your questions,</span></br>
                    to contact us today, please fill out the form below</h3>
            </div>
        </div>
    </section>

<!--    <section class="form-sec">-->
<!--       <div class="flex-container3 flex-container">-->
<!--           <div class="row__65">-->
<!--               <h4></h4>-->
<!--           </div>-->
<!---->
<!--       </div>-->
<!--    </section>-->

    <section class="review-sec ">
        <div class="flex-container mtop-50 mbottom-50 flex-container3">
            <div class="row__30 mtop-30">
                <h2 class="wb-heading text-orange">Our
                    <span class="text-black bold">Client say</span></h2>
                <img class=" bold-line1" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bold-line.png" alt=""/>
            </div>

            <div class="row__70 center mright-70">
                <img class="review-quote" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contactfx-quote.png" alt=""/>
                <p class="contact-rev ">As a financial adviser, I was exposed and studied different kind of trading
                    techniques. I never thought that a free trading course would be the one so valuable and let me be consistent on my trading journey. Thanks to the community and for the course now I can give a huge return of investment to my clients.</p>
                <h4 class="review-head text-black text-cente margin-0 ptop-30">ALLAN, PH</h4>
                <img class="ptop-30" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contactfx-dots.png" alt=""/>
            </div>
        </div>
    </section>

    <section class="form-sec">
        <div class="flex-container-contact">
             <div class="row__50 pleft-0 padding-50">
                 <h2 class="wb-heading text-orange mbottom-15">
                     Discover</br>
                     <span class="text-white bold">Trade Strategies</span>
                 </h2>

                 <img class="bold-line2 mbottom-50" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bold-line.png" alt=""/>

                  <p class="wb-par text-gray">How to break free from the time vs money trap & learn the right way to trade to build a secondary income.</p>

                  <p class="wb-par text-gray">Why you should be part of the world’s largest and most liquid market <span class="text-orange"> - unlimited money-making opportunities!</span></p>

                  <p class="wb-par text-gray">How to harness the latest technology to automate your trading –  <span class="text-orange"> let the computer do the hard stuff for you.</span></p>

                  <p class="wb-par text-gray">Learn the Forex trading strategies and risk-management tools that will <span class="text-orange">help you develop your own trading plan.</span></p>
            </div>

            <div class="row__50 white-box"></div>
        </div>
    </section>



<?php
get_footer();
