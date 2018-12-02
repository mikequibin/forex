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
            <div class="row__35 mobile-fullwidth">
                <a href="https://www.freefxcourse.com/about/"><h5 class="mbottom-5  footer-head">ABOUT</h5></a>
                <a href="https://www.freefxcourse.com/about/"><h5 class="mbottom-5  footer-sub">Who are We</h5></a>
                <a href="https://www.freefxcourse.com/about/"><h5 class=" footer-sub" >Benefits</h5></a>
            </div>

            <div class="row__35 mobile-fullwidth">
                <a href="https://www.freefxcourse.com/contact/"><h5 class="mbottom-5  footer-head">CONTACT US</h5></a>
                <a href="https://www.freefxcourse.com/contact/"><h5 class="mbottom-5  footer-sub">Talk to Us</h5></a>
                <a href="https://www.freefxcourse.com/contact/"><h5 class=" footer-sub">Support Team</h5></a>
            </div>

            <div class="row__35 mobile-fullwidth">
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
        </div>
    </div>

    <div class="mobile-fullwidth riskdisclaimer-cont">
<!--        <h5 class="riskdisclaimer-head no-bottom footer-head">RISK DISCLAIMER</h5>-->
        <h5 class="riskdisclaimer-sub ">
            <span class="riskdisclaimer-head">RISK DISCLAIMER</span> Before deciding to invest in foreign exchange you should carefully
            consider your investment objectives and risk appetite.  The possibility
            exists that you could sustain a loss of some or all of your initial
            investment and therefore you should not invest money that you
            cannot afford to lose. Trading foreign exchange on margin carries a high level of risk
            and may not be suitable for all investors. Past performance is not
            indicative of future results.
        </h5>
    </div>

    <div class="copyright-sect">
        <h5 class="copyright-text text-center">Copyright © 2018 Forex Trading by Bull and Bear Academy</h5>
    </div>

</footer>

<?php wp_footer(); ?>

<!--Review Slider-->
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";

    }


</script>
<script>
    AOS.init();
</script>


</body>
</html>