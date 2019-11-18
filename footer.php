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
            <a href="https://pilipinaspropertyforsale.com/"><img class="footer-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ppfs-logo-2.png" alt=""/></a>

        </div>

        <div class="flex-container ptop-20 leftright-4">
            <div class="row__25 mobile-fullwidth text-center mbotom-mobile-15">
                <a href="https://pilipinaspropertyforsale.com/about"><h5 class="mbottom-5  footer-head">ABOUT</h5></a>
            </div>

            <div class="row__25 mobile-fullwidth text-center mbotom-mobile-15">
                <a href="https://pilipinaspropertyforsale.com/projects/"><h5 class="mbottom-5  footer-head">PROJECTS</h5></a>
                <a href="https://www.pilipinaspropertyforsale.com/product-category/lot-for-sale/"><h5 class="mbottom-5  footer-sub">Lot for Sale</h5></a>
                <a href="https://pilipinaspropertyforsale.com/product-category/house-and-lot/"><h5 class="mbottom-5  footer-sub">House and Lot</h5></a>
                <a href="https://www.pilipinaspropertyforsale.com/product-category/condominium/"><h5 class="mbottom-5  footer-sub">Condominuim</h5></a>
            </div>

            <div class="row__25 mobile-fullwidth text-center mbotom-mobile-15">
                <a href="https://pilipinaspropertyforsale.com/property/shop/"><h5 class="mbottom-5  footer-head">PROPERTY</h5></a>
            </div>

            <div class="row__25 mobile-fullwidth text-center mbotom-mobile-15">
                <a href="https://pilipinaspropertyforsale.com/events/"><h5 class="mbottom-5  footer-head">WHAT'S NEW</h5></a>
            </div>

            <div class="row__25 mobile-fullwidth text-center mbotom-mobile-15">
                <a href="https://pilipinaspropertyforsale.com/inquire-now-2"><h5 class="mbottom-5  footer-head">INQUIRE NOW</h5></a>
            </div>

        </div>
    </div>

    <div class="copyright-sect">
        <h5 class="copyright-text text-center">© 2019 WWW.PILIPINASPROPERTYFORSALE.COM | ALL RIGHTS RESERVED </h5>
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