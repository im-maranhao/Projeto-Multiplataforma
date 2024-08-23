var owl = $('.owl-carousel');
owl.owlCarousel({
    items:4,
    loop:true,
    margin:5,
    center:true,
    autoplay:true,
    autoplayTimeout:700,
    // autoplayHoverPause:true
});

$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})

$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})