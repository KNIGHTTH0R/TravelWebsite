<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() 
	{ 
		modals.init();
	});

	var modals = 
	{
		autoplay:true,
		init:function()
		{
     		$(".videoPlayer").dialog({
          	width: 576,
          	height: 324,
          	autoOpen: false,
          	resizable: false,
          	show: {
               effect: 'fade', 
               duration: 1000
          	},
          	hide: {
               effect: "fade",
               duration: 1000
          }
     });

     $(".videoPlayer").each(function()
     {
          $('.ui-widget-header').remove();
     });

     $( ".loadVideo" ).click(function() 
     {
          var videoPlayerId = $(this).attr('id') + 'player';
          $("#" + videoPlayerId).dialog("open");
          if(modals.autoplay == true)
          {
               $('#' + videoPlayerId)[0].play();
          }
          $('#overlay').fadeIn();
     });

     $(document).mouseup(function (e)
     {
          if($('.videoPlayer').is(':visible'))
          {
               var container = $(".videoPlayer");

               if (!container.is(e.target) && container.has(e.target).length === 0) 
               {
                    container.dialog("close");
                    $('#overlay').fadeOut(1500);

                    $('video').each(function() 
                    {
                         $(this)[0].pause();
                    });
               }
          }
     });
}
}
</script>
 <script>
  $('.carousel').carousel({
   interval: 500
  });
 </script> 