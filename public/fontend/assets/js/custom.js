// =========== Main BANNER SLIDER ==============
$('.slider').owlCarousel({
    items: 1,
    nav: true
});

// ======= Search Bar option ========
(function($){
    $(document).ready(function(){
        $('#bar').click(function(){
            $('#bars_options').toggle();
        });
    });

})(jQuery)


