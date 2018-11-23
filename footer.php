<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shapely
 */

?>

<footer class="footer-cont">
    <div class="maxwidth-1200 maxwidth-1200-footer">
        <div class="footer-top">
            <img class="footer-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/forextrading-logo.png" alt=""/>
            <div class="footer-ic">
                    <img class="pright-15" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fb-logo.png" alt=""/>
                    <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitter-logo.png" alt=""/>
            </div>
        </div>

        <div class="flex-container ptop-20 leftright-4">
            <div class="row__20 mobile-fullwidth">
                <h5 class="mbottom-5  footer-head">ABOUT</h5>
                <h5 class="mbottom-5  footer-sub">Who are We</h5>
                <h5 class=" footer-sub" >Benefits</h5>
            </div>

            <div class="row__30 mobile-fullwidth">
                <h5 class="mbottom-5  footer-head">CONTACT US</h5>
                <h5 class="mbottom-5  footer-sub">Talk to Us</h5>
                <h5 class=" footer-sub">Support Team</h5>
                <div class="mright-20 ">
                        <div class="image-text">
                            <h5 class="mbottom-5 footer-sub"><img class="text-image mobile-off" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sched-ic.png" alt=""/> 9AM - 5PM EST</h5>
                        </div>

                        <div>
                            <h5 class="mbottom-5 footer-sub"><img class="text-image mobile-off" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/web-ic.png" alt=""/> www.freefxcourse.com</h5>
                        </div>

                        <div>
                            <h5 class="footer-sub"><img class="text-image mobile-off" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mail-ic.png" alt=""/> support@freefxcourse.com</h5>
                        </div>
                </div>
            </div>

            <div class="row__50 mobile-fullwidth">
                <h5 class="mbottom-5  footer-head">RISK DISCLAIMER</h5>
                <h5 class="footer-sub bold">Trading foreign exchange on margin carries a high level of risk
                    and may not be suitable for all investors. Past performance is not
                    indicative of future results. </h5>
                <h5 class="footer-sub bold">Before deciding to invest in foreign exchange you should carefully
                    consider your investment objectives and risk appetite.  The possibility
                    exists that you could sustain a loss of some or all of your initial
                    investment and therefore you should not invest money that you
                    cannot afford to lose.</h5>
            </div>
        </div>


    </div>
    <div class="copyright-sect">
        <h5 class="copyright-text text-center">Copyright © 2018 Forex Trading by Bull and Bear Academy</h5>
    </div>

</footer>

<?php wp_footer(); ?>


</body>
</html>