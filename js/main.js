jQuery(document).ready(function(){
  jQuery(".slider").bxSlider({
    mode: 'fade',
    captions: true,
  });

  var owl = jQuery('.owl-carousel');
  owl.owlCarousel({
    items:1,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true
  });
  jQuery('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[2000])
  })
  jQuery('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
  })

//SlickNav Active Code;
  jQuery('#nav').slicknav();
  
/*  */
});
