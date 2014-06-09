/**sånt som ska köras när sidan laddats klart, dvs ej funktioner eller händelsehanterare (typ on click etc)**/
$(document).ready(function(){
    /** JAVASCRIPT FÖR SITE/INDEX.php **/
    $('.carousel').carousel({
        auto: true,
        period: 5000,
        duration: 2000,
        markers: {
            type: "square"
        },
        height:150
    });
    /** end site/index.php**/
});
/**END DOCUMENT READY SECTIONEN**/
