<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      <?php if (function_exists('is_tag') && is_tag()) {
        single_tag_title('Tag Archive for &quot;'); echo '&quot; - ';
      } elseif (is_archive()) {
        wp_title(''); echo ' - ';
      } elseif (is_search()) {
        echo 'Search for &quot;'.wp_specialchars($s).'&quot; - ';
      } elseif (!(is_404()) && (is_single()) || (is_page())) {
        wp_title(''); echo '  ';
      } elseif (is_404()) {
        echo 'Not Found - ';
      }
      if (is_home()) {
        bloginfo('name'); echo ' - '; bloginfo('description');
      } else {
        bloginfo('name');
      }
      if ($paged > 1) {
        echo ' - page '. $paged;
      } ?>
    </title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri();?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/foundation.css" />
    <script src="<?php echo get_template_directory_uri();?>/js/vendor/modernizr.js"></script>
    <?php wp_head();?>
  </head>
  <body <?php body_class();?>>
   <div class="large-12 columns menu">
      <div class="row menu">
                  <div class="top-bar-container contain-to-grid">
            <nav class="top-bar" data-topbar>
                <ul class="title-area">
                    <li class="name">
                        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                    </li>          
                    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                </ul>
                <section class="top-bar-section">
                    <?php foundation_top_bar_l(); ?>
                    <?php foundation_top_bar_r(); ?>
                    <ul class="right"><li><button class="tiny " data-reveal-id="myModal">Search</button></li></ul>
            </nav>
        </div>
      </div><!--end row menu-->
   </div><!--end 12 menu-->
   <div class="large-12 columns search">
  <div class="row">
      <div class="large-12 columns">
        <div id="myModal" class="reveal-modal large-2 columns" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
          <div class="large-11 columns">
            <form method="get" action="<?php echo home_url( '/' ); ?>" id="search">
    <input type="text" size="10" name="s" value="Search..." onBlur="if (this.value == '') {this.value = 'Search...';}" onFocus="if (this.value == 'Search...') {this.value = '';}" class="search_input" placeholder="Search..."/>
</form>
          </div>
          <a class="close-reveal-modal" aria-label="Close">&#215;</a>
        </div>
      </div>
  </div>
</div><!--end 12 search-->