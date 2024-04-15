<?php get_header(); ?>  

   <div class="center">
    <div class="text">
	 <div class="in1"> 
	  <div class="in2">
		
		
<?php echo '<h1>'.get_the_title(21).'</h1>'; ?>
		
		<div class="about">
		<div class="ryska"></div>
		<div class="inslide">
		<?php
		$queried_post = get_post(21);
		echo apply_filters('the_content',$queried_post->post_content);
		?>
		<div class="slideshow">
		    <a href="/wp-content/themes/hutor/slides/1.jpg">
                <img 
				    alt=""
                    src="/wp-content/themes/hutor/slides/1.jpg" >
            </a>
		    <a href="/wp-content/themes/hutor/slides/8.jpg">
                <img 
				    alt=""
                    src="/wp-content/themes/hutor/slides/8.jpg" >
            </a>	 
		    <a href="/wp-content/themes/hutor/slides/3.jpg">
                <img
                    alt=""				
                    src="/wp-content/themes/hutor/slides/3.jpg"  >
            </a>
            <a href="/wp-content/themes/hutor/slides/4.jpg">
                <img
                    alt=""				
                    src="/wp-content/themes/hutor/slides/4.jpg" >
            </a>
            <a href="/wp-content/themes/hutor/slides/5.jpg">
                <img
                    alt="" 				
                    src="/wp-content/themes/hutor/slides/5.jpg" >
            </a>
            <a href="/wp-content/themes/hutor/slides/6.jpg">
                <img
                    alt=""				
                    src="/wp-content/themes/hutor/slides/6.jpg">
            </a>
            <a href="/wp-content/themes/hutor/slides/7.jpg">
                <img
                    alt=""
                    src="/wp-content/themes/hutor/slides/7.jpg">
            </a>
            <a href="/wp-content/themes/hutor/slides/8.jpg">
                <img
                    alt=""
                    src="/wp-content/themes/hutor/slides/8.jpg">
            </a>
            <a href="/wp-content/themes/hutor/slides/10.jpg">
                <img
                    alt=""
                    src="/wp-content/themes/hutor/slides/10.jpg">
            </a>
            <a href="/wp-content/themes/hutor/slides/11.jpg">
                <img
                    alt=""
                    src="/wp-content/themes/hutor/slides/11.jpg">
            </a>
            <a href="/wp-content/themes/hutor/slides/12.jpg">
                <img
                    alt=""
                    src="/wp-content/themes/hutor/slides/12.jpg">
            </a>
            <a href="/wp-content/themes/hutor/slides/13.jpg">
                <img
                    alt=""
                    src="/wp-content/themes/hutor/slides/13.jpg">
            </a>






		
		</div>
		</div>
		<div class="ryska"></div>
		
<?php
            if(qtrans_getLanguage() == "ru") { ?>
                <h2>Новости</h2>
<?php 
                $readmore = "читать далее";
            }                                  
if(qtrans_getLanguage() == "en") { ?>
    <h2>News</h2>
<?php 
    $readmore = "read more";
}

if(qtrans_getLanguage() == "by") { ?>
<h2>Навiны</h2>
<?php 
$readmore = "чытаць далей";
}

if(qtrans_getLanguage() == "pl") { ?>
    <h2>Aktualności</h2>
    <?php 
    $readmore = "czytaj więcej";
    }

if(qtrans_getLanguage() == "de") { ?>
<h2>Nachrichten</h2>
<?php 
$readmore = "mehr lesen";
}

?>

<?php
$post = query_posts($query_string.'&cat=4&showposts=2'); // выводзім апошнія два запісы з навінаў
for ($i = 0; $i < 2; $i++) {
    $text = $post[$i]->post_content;
    $text_without_img = preg_replace('/<img(?:\\s[^<>]*)?>/i', '', $text);
    $title = $post[$i]->post_title;
    $url = $post[$i]->guid;
    $images = get_img($text);
    $text = $text_without_img;
    $n = $i + 1;
    echo '<p class="nav'.$n.'">';
    echo '<span>'.$title.'</span>.&nbsp;&nbsp;';
    echo strip_tags($text); 
    echo "<a href=\"$url\"><span>...</span>".$readmore."</a>";
    #if (isset($images[0])) { 
     #   echo '<img class="img_news'.$n.'" src="'.$images[0]['src'].'" />';
    #}
    echo '</p>';
}
?>		

<div class="ryska last"></div>
		</div>

	  </div>
	 </div>
	</div>
   </div>
  
<?php get_footer(); ?>  
  
  </div>
 </div>
</div>

<script>

    // Load the classic theme
    Galleria.loadTheme('/wp-content/themes/hutor/galleria.classic.min.js');

    // Initialize Galleria
    Galleria.run('.slideshow', {autoplay: 3000});

    </script>

</body>
</html>
