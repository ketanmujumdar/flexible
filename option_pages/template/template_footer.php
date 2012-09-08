<?php

?>

<div id="flexi_footer">
<!--bottom dock -->
<div class="dock" id="dock2">
  		<div class="dock-container2">
			  <a class="dock-item2" href="#"><span>Home</span><img src="<?php echo get_template_directory_uri().'/option_pages/'; ?>images/home.png" alt="home" /></a> 
			  <a class="dock-item2" href="#"><span>Contact</span><img src="<?php echo get_template_directory_uri().'/option_pages/'; ?>images/email.png" alt="contact" /></a> 
			  <a class="dock-item2" href="#"><span>Portfolio</span><img src="<?php echo get_template_directory_uri().'/option_pages/'; ?>images/portfolio.png" alt="portfolio" /></a> 
			  <a class="dock-item2" href="#"><span>Music</span><img src="<?php echo get_template_directory_uri().'/option_pages/'; ?>images/music.png" alt="music" /></a> 
			  <a class="dock-item2" href="#"><span>Video</span><img src="<?php echo get_template_directory_uri().'/option_pages/'; ?>images/video.png" alt="video" /></a> 
			  <a class="dock-item2" href="#"><span>History</span><img src="<?php echo get_template_directory_uri().'/option_pages/'; ?>images/history.png" alt="history" /></a> 
			  <a class="dock-item2" href="#"><span>Calendar</span><img src="<?php echo get_template_directory_uri().'/option_pages/'; ?>images/calendar.png" alt="calendar" /></a> 
			  <a class="dock-item2" href="#"><span>Links</span><img src="<?php echo get_template_directory_uri().'/option_pages/'; ?>images/link.png" alt="links" /></a> 
			  <a class="dock-item2" href="#"><span>RSS</span><img src="<?php echo get_template_directory_uri().'/option_pages/'; ?>images/rss.png" alt="rss" /></a> 
			  <a class="dock-item2" href="#"><span>RSS2</span><img src="<?php echo get_template_directory_uri().'/option_pages/'; ?>images/rss2.png" alt="rss" /></a> 
  		</div>
	</div>
</div>
<!--dock menu JS options -->
<script type="text/javascript">
	
	jQuery(document).ready(
		function()
		{
			jQuery('#dock2').Fisheye(
				{
					maxWidth: 60,
					items: 'a',
					itemsText: 'span',
					container: '.dock-container2',
					itemWidth: 40,
					proximity: 80,
					alignment : 'left',
					valign: 'bottom',
					halign : 'center'
				}
			)
		}
	);

</script>