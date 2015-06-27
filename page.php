<?php global $smof_data; ?>
<?php get_header();?>
<div class="large-12 columns maincontent">
  <div class="row maincontent">
     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="artikel-brilia">
      <a href="<?php the_permalink();?>"><h2 class="single"><?php the_title();?></h2></a>
      <p><?php the_content();?></p>
</div><!--end artikel-brilia-->
 <?php endwhile; else: ?>
      <div class="search">
        <h2 class="center">Not Found</h2>
        <p class="center">Sorry, but you are looking for something that isn't here.</p>
      </div>
      <?php endif; ?>
  </div><!--end row maincontent-->
</div><!--end 12 maincontent-->
<?php get_footer();?>