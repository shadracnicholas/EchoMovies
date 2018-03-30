(function() {
    "use strict";

    // custom scrollbar

    $("html").niceScroll({styler:"fb",cursorcolor:"#000", cursorwidth: '4', cursorborderradius: '10px', background: '#ccc', spacebarenabled:false, cursorborder: '0',  zindex: '1000'});

    $(".scrollbar1").niceScroll({styler:"fb",cursorcolor:"#000", cursorwidth: '4', cursorborderradius: '0',autohidemode: 'false', background: '#ccc', spacebarenabled:false, cursorborder: '0'});

	
	
    $(".scrollbar1").getNiceScroll();
    if ($('body').hasClass('scrollbar1-collapsed')) {
        $(".scrollbar1").getNiceScroll().hide();
    }

})(jQuery);


$(document).ready(function() {

  $('#trending-movies-slider').owlCarousel({
        items:6,
        loop:true,
        margin:10,
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        autoplayHoverPause:false,
        itemsDesktopSmall : [900,4], // betweem 900px and 601px
        itemsTablet: [600,1],
    });

    $('#latest-movies-slider').owlCarousel({
        items:6,
        loop:true,
        margin:10,
        autoPlay: 5000, //Set AutoPlay to 3 seconds
        autoplayHoverPause:false,
        itemsDesktopSmall : [900,4], // betweem 900px and 601px
        itemsTablet: [600,1],
    });



      /* Get iframe src attribute value i.e. YouTube video url
        and store it in a variable */
        var url = $("#videoId").attr('src');
        
        /* Assign empty url value to the iframe src attribute when
        modal hide, which stop the video playing */
        $("#movieTrailer").on('hide.bs.modal', function(){
            $("#videoId").attr('src', '');
            $('.modal-background').fadeOut();
        });
        /* Assign the initially stored url back to the iframe src
        attribute when modal is displayed again */
        $("#movieTrailer").on('show.bs.modal', function(){
            $("#videoId").attr('src', url);
            $('.modal-background').fadeIn();
        });


});
                     
     
  
