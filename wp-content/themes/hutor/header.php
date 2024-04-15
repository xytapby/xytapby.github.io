<!DOCTYPE html>
<html lang=<?php echo qtrans_getLanguage();?>>
<head>
<!-- 

Programmer: Sakalou Aliaksei 

[my contacts]
email: nullbsd at gmail dot com
telegram: @gnupg

-->
<title>ХУТАР.by</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="/wp-content/themes/hutor/favicon.jpg" rel="shortcut icon" type="image/x-icon" />

    <!-- load jQuery -->
	
	<?php
	if ( is_front_page() ) {
     print '<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>'; 
    } else {
	print '<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script>
   <script>
		!window.jQuery &amp;&amp; document.write("&lt;script src="jquery-1.4.3.min.js"&gt;&lt;\/script&gt;");
	</script>
	
	<script src="/wp-content/themes/hutor/js/jquery.mousewheel-3.0.4.pack.js" type="text/javascript"> </script>
	<script src="/wp-content/themes/hutor/js/jquery.fancybox-1.3.4.pack.js" type="text/javascript"> </script>';	
	}
	?>
	
	<!-- load Galleria -->
    
	<?php
	if ( is_front_page() ) {
     print '<script src="/wp-content/themes/hutor/galleria-1.3.5.min.js"></script>'; 
    } 
	?>
	
	<?php /*wp_head();*/ ?>
	
<link href="/wp-content/themes/hutor/css/1.css" rel="stylesheet">
<link href="/wp-content/themes/hutor/css/jquery.fancybox-1.3.4.css" rel="stylesheet">
<style>
#main { position:relative;background:url(/wp-content/themes/hutor/img/bg.png) top center no-repeat fixed #fff; width:1440px; margin:0 auto; }
.home #main { background:url(/wp-content/themes/hutor/img/bg.png) top center no-repeat scroll #fff; }
</style>
<?php wp_footer(); ?>
</head>

<?php
   $lang = qtrans_getLanguage(); 
   $site = $_SERVER['SERVER_NAME'];
   $request = $_SERVER['REQUEST_URI'];
   if (strlen($request) <= 4)
      $request = "/";

?>

<body <?php body_class($class); ?>>

<div id="main" class="<?php echo $lang; ?>"> 


<div class="grad-left"></div>
<div class="grad-right"></div>
 <div class="inside">
  <div class="content<?php if ( !is_front_page() ) { print ' not-front'; } ?>">
  
  <header>
      
<a href="/<?php echo $lang; ?>" id="logo"></a>   
   
   <nav>
   <?php
   wp_nav_menu('menu=main'); 
   //wp_nav_menu('menu=topmenu'); 
   ?>
   <div class="langs">
   <?php
	$request = str_replace('/en/', '/', $request);
	$request = str_replace('/ru/', '/', $request);
	$request = str_replace('/by/', '/', $request);
	$request = str_replace('/pl/', '/', $request);
	$request = str_replace('/de/', '/', $request);
   ?>

   <a class="b1 <?php  if (qtrans_getLanguage() == "en") echo "active";?>" href="<?php echo "http://".$site."/en".$request; ?>">EN</a>
   <a class="b2 <?php  if (qtrans_getLanguage() == "ru") echo "active";?>" href="<?php echo "http://".$site."/ru".$request; ?>">RU</a>
   <a class="b3 <?php  if (qtrans_getLanguage() == "by") echo "active";?>" href="<?php echo "http://".$site."/by".$request; ?>">BY</a>
   <a class="b4 <?php  if (qtrans_getLanguage() == "pl") echo "active";?>" href="<?php echo "http://".$site."/pl".$request; ?>">PL</a>
   <a class="b5 <?php  if (qtrans_getLanguage() == "de") echo "active";?>" href="<?php echo "http://".$site."/de".$request; ?>">DE</a>

</div>
   <?php wp_nav_menu('menu=menu2'); ?>
   
   </nav>
  </header>
