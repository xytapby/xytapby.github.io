<?php get_header(); ?>  


   <div class="center page">
    <div class="text">
	
        
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<div class="about">
		<div class="ryska"></div>
		<div class="ins">

		<?php the_content(); ?>
		
		</div>
		<div class="ryska last"></div>
		</div>
		
		<?php endwhile; endif; ?>				
    
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
	function meow2() {
	$ins = $('.about');
    if($ins.height()>273) { 
	h = $ins.height()-266;
	ins = $ins.height();
	el1 = h+4+"px";
	el2 = h+187+"px";
	$('.ink2').css("height",el1);
	$('.ink3').css("top",el2);
	}
	
	
}
meow2();
	</script>

</body>
</html>
