/**sånt som ska köras när sidan laddats klart, dvs ej funktioner eller händelsehanterare (typ on click etc)**/
$(document).ready(function(){
    /** JAVASCRIPT FÖR SITE/INDEX.php **/
    /* Carouselen på startsidan
    * Documentation på options och dess alternativ: http://metroui.org.ua/carousel.html
     */
    $('.carousel').carousel({
        auto: true,
        period: 5000,
        duration: 2000,
        markers: {
            type: "square" // default, cycle eller square t.ex
        }
//        height:150
    });
    /** end site/index.php**/
});
/**END DOCUMENT READY SECTIONEN**/
/** händelsehanterare **/
$(function() {
    /*
    *Exempel: scrollar vyn till elementId vid klick på länkar som har href="#elementId"
    * */
    $('a[href*=#]:not([href=#])').on("click",function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
    /**
     * Comments
     */
    $('a[href^="#comments-"]').on('click', function(event) {
        event.preventDefault();

        // THIS IS WHERE AJAX CODE WOULD GO TO LOAD ARTICLES DYNAMICALLY
        $('#comments').toggleClass('active');
    });

    $('article > .title > .close').on('click', function(event) {
        event.preventDefault();
        $('#comments').removeClass('active');
        $(this).closest('article').removeClass('active');
    });
    $('#comments > .title > .close').on('click', function(event) {
        event.preventDefault();
        $(this).closest('#comments').removeClass('active');
    });
    /**
     * End comments
     */
});