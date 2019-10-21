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
<!--            <a href="https://www.freefxcourse.com/"><img class="footer-logo" src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/assets/images/nehemiah-textlato1.png" alt=""/></a>-->
            <a href="https://pilipinaspropertyforsale"><h5 class="mbottom-5  footer-text-logo">PILIPINAS PROPERTY FOR SALE</h5></a>
        </div>

        <div class="flex-container ptop-20 leftright-4">
            <div class="row__25 mobile-fullwidth text-center mbotom-mobile-15">
                <a href="https://pilipinaspropertyforsale/about"><h5 class="mbottom-5  footer-head">ABOUT</h5></a>
                <a href="https://pilipinaspropertyforsale/about"><h5 class="mbottom-5  footer-sub">About</h5></a>
            </div>

            <div class="row__25 mobile-fullwidth text-center mbotom-mobile-15">
                <a href="https://pilipinaspropertyforsale/"><h5 class="mbottom-5  footer-head">CONTACT US</h5></a>
                <a href="https://pilipinaspropertyforsale/"><h5 class="mbottom-5  footer-sub">Talk to Us</h5></a>
                <a class="" href="https://pilipinaspropertyforsale/"><h5 class=" footer-sub mb-mobile">Support Team</h5></a>
            </div>

            <div class="row__25 mobile-fullwidth text-center mbotom-mobile-15">
                <a href="https://pilipinaspropertyforsale/"><h5 class="mbottom-5  footer-head">PROJECTS</h5></a>
                <a href="https://pilipinaspropertyforsale/"><h5 class="mbottom-5  footer-sub">Residential</h5></a>
                <a href="https://pilipinaspropertyforsale/"><h5 class="mbottom-5  footer-sub">House and Lot</h5></a>
                <a href="https://pilipinaspropertyforsale/"><h5 class="mbottom-5  footer-sub">Condominuims</h5></a>
            </div>

            <div class="row__25 mobile-fullwidth text-center">
                <a href="https://pilipinaspropertyforsale/"><h5 class="mbottom-5  footer-head">BOOK A TRIPPING NOW!</h5></a>
            </div>

        </div>
    </div>

    <div class="copyright-sect">
        <h5 class="copyright-text text-center">© 2019 WWW.PILIPINASPROPERTYFORSALE.COM | ALL RIGHTS RESERVED | DEVELOPER&lt;MIKE QUIBIN/&gt; </h5>
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