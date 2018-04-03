<script type="text/javascript">
$('#myCollapsible').collapse({
  toggle: true
})

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:false,
            loop:false
        }
    }
})
</script>

