

	
jQuery(window).scroll(function(){
    var fromTopPx = 600; // distance to trigger
    var responsiveWidth = 807;
    var scrolledFromtop = $(this).scrollTop();
    var responsive = jQuery(window).width() > responsiveWidth

        if(scrolledFromtop > fromTopPx && responsive){

           $('#burgerBlock > .menuCard > .foodAnimated').css({"display" : "block"});

        }

        if (scrolledFromtop > (fromTopPx * 2) && responsive){

          $('#hotdogBlock > .menuCard > .foodAnimated').css({"display" : "block"});

        }

        if (scrolledFromtop > (fromTopPx * 3) && responsive){

          $('#sandwichBlock > .menuCard > .foodAnimated').css({"display" : "block"});

        }

        if (scrolledFromtop > (fromTopPx * 4) && responsive){

          $('#seafoodBlock > .menuCard > .foodAnimated').css({"display" : "block"});

        }

        if(!responsive) {
            $('.foodAnimated').css({"display" : "none"})
        }
});


