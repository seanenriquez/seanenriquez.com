<!-- jQuery -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>


<script type="text/javascript">
	
	jQuery(window).scroll(function(){
    var fromTopPx = 600; // distance to trigger
    var scrolledFromtop = jQuery(window).scrollTop();
    if(scrolledFromtop > fromTopPx){
        jQuery('#logo,.nav-icon span').addClass('scrolled');
    }else{
        jQuery('#logo,.nav-icon span').removeClass('scrolled');
    }
});

    $(document).ready(function(){
    $('.nav-icon,.modalContent a').click(function(){
        $(this).toggleClass('open');
        $('#openModal').toggle()
    });

    $('.block-1').hover(function(){
        console.log("WRoRKSD!")
        $(this).find('.text-overlay').fadeToggle( "fast", "swing" );
        //$('#openModal').toggle()

    });
});

</script>
<!-- Nav Modal-->
