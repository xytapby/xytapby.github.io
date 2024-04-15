<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

<div class="center page">
    <div class="text">
		<h1>404 - page not found :(</h1>
	
<?php
		print '<div class="about">
		<div class="ryska"></div>
		<div class="ins">';
		
		print '</div>
		<div class="ryska last"></div>
		</div>';				
						?>			
    
	<div class="ink1"></div>
	<div class="ink2"></div>
	<div class="ink3"></div>
		
		
	</div>
   </div>
  
<?php get_footer(); ?>  
  
  </div>
 </div>
</div>

<script>
	$(function() {
	$ins = $('.about');
    if($ins.height()>273) { 
	h = $ins.height()-266;
	ins = $ins.height();
	el1 = h+4+"px";
	el2 = h+187+"px";
	$('.ink2').css("height",el1);
	$('.ink3').css("top",el2);
	}

	
});
	</script>

</body>
</html>


