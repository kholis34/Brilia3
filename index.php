<?php get_header();?>
<div class="large-12 columns maincontent">
  <div class="row maincontent">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="artikel">
      <a href="<?php the_permalink();?>"><h2 style="color:<?php echo $smof_data ['title_color']; ?>;"><?php the_title();?></h2></a>
    </div>
    <?php endwhile; else: ?>
      <div class="search">
        <h2 class="center">Not Found</h2>
        <p class="center">Sorry, but you are looking for something that isn't here.</p>
      </div>
      <?php endif; ?> 
      <?php
      include('wp-pagenavi.php');
      if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
    ?>
  </div><!--end row maincontent-->
</div><!--end 12 maincontent-->
<?php get_footer();?>