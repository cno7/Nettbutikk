$(document).ready(function(){
    // Activate Carousel
    $("#multiCarousel1").carousel();

    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#multiCarousel1").carousel(0);
    });
    $(".item2").click(function(){
        $("#multiCarousel1").carousel(1);
    });
    $(".item3").click(function(){
        $("#multiCarousel1").carousel(2);
    });
    $(".item4").click(function(){
        $("#multiCarousel1").carousel(3);
    });

    // Enable Carousel Controls
    $(".left").click(function(){
        $("#multiCarousel1").carousel("prev");
    });
    $(".right").click(function(){
        $("#multiCarousel1").carousel("next");
    });
});