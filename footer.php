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
            <a href="https://www.freefxcourse.com/"><img class="footer-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/nehemiah-textlato1.png" alt=""/></a>
            
        </div>

        <div class="flex-container ptop-20 leftright-4 mbottom-mobile">
            <div class="row__35 mobile-fullwidth">
                <a href="https://stemedia.org/about"><h5 class="mbottom-5  footer-head">ABOUT</h5></a>
                <a href="https://stemedia.org/about"><h5 class="mbottom-5  footer-sub">Who are We</h5></a>
<<<<<<< HEAD
=======
                
>>>>>>> da873cd431f48d38024a86f19b8283ae87edd32e
            </div>

            <div class="row__35 mobile-fullwidth">
                <a href="https://www.freefxcourse.com/contact/"><h5 class="mbottom-5  footer-head">CONTACT US</h5></a>
                <a href="https://www.freefxcourse.com/contact/"><h5 class="mbottom-5  footer-sub">Talk to Us</h5></a>
                <a href="https://www.freefxcourse.com/contact/"><h5 class=" footer-sub">Support Team</h5></a>
            </div>

            <div class="row__35 mobile-fullwidth">
<<<<<<< HEAD
                <div class="mright-20 no-margin-mobile">
=======
                <div class="mright-20 ">
                    

>>>>>>> da873cd431f48d38024a86f19b8283ae87edd32e
                    <div>
                        <a href="https://www.stemedia.org/"><h5 class="mbottom-5 footer-sub"><img class="text-image mobile-off" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/web-ic.png" alt=""/> www.stemedia.org</h5></a>
                    </div>
					<div class="">
                    <a href="https://www.facebook.com/STEM.Media/"><img class="pright-15" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fb-logo.png" alt=""/></a>
                    <a class="float-right" href="https://twitter.com/_stemedia/"><img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitter-logo.png" alt=""/></a>
<<<<<<< HEAD
                </div>
=======
            </div>

                   
>>>>>>> da873cd431f48d38024a86f19b8283ae87edd32e
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-sect">
        <h5 class="copyright-text text-center">© 2019 WWW.STEMEDIA.ORG | ALL RIGHTS RESERVED | DEVELOPER&lt;MIKE QUIBIN/&gt; </h5>
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