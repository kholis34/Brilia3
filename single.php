<?php global $smof_data; ?>
<?php get_header();?>
<div class="large-12 columns maincontent">
  <div class="row maincontent">
 <?php if (function_exists('kholis_breadcrumbs')) kholis_breadcrumbs(); ?>
     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="artikel-brilia">
      <a href="<?php the_permalink();?>"><h2 class="single" style="color:<?php echo $smof_data ['title_color']; ?>;"><?php the_title();?></h2></a>
      <?php echo $data['adsense2'];?>
      <p><?php the_content();?></p>
      <div class="adsene">
        <?php echo $data['adsense3'];?>
      </div>
      <div class="tags">
        <?php the_tags();?>
      </div>
</div><!--end artikel-brilia-->
 <?php endwhile; else: ?>
      <div class="search">
        <h2 class="center">Not Found</h2>
        <p class="center">Sorry, but you are looking for something that isn't here.</p>
      </div>
      <?php endif; ?>
  </div><!--end row maincontent-->
  <div class="row reco">
    <h6 class="reco">RECOMMENDED FOR YOU</h6>
<?php
$args = array( 'numberposts' => 6 , 'orderby' => 'rand', 'post_status' => 'publish', 'offset' => 1);
$rand_posts = get_posts( $args );
foreach( $rand_posts as $post ) : ?>
   
      <h6 class="recommended"><a href="<?php the_permalink();?>"><?php the_title();?></a></h6>
    
 <?php endforeach; ?> 
  </div>
</div><!--end 12 maincontent-->
<?php get_footer();?>