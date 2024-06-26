
<?php 
get_header();
while (have_posts()){
the_post(); ?>

<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/1.jpg') ?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
          <p>Change me next time</p>
        </div>
      </div>
    </div>

    <div class="container container--narrow page-section">
    <?php

    $the_Parent = wp_get_post_parent_id(get_the_ID ());
      if ($the_Parent){ ?>

<div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="<?php echo get_permalink($the_Parent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($the_Parent); ?></a> <span class="metabox__main"><?php the_title()?></span>
        </p>
      </div>

     <?php }
      ?>
    
    
<?php 
$Pages_array = get_pages(array(
  'child_of'=>get_the_ID()
));
if($the_Parent or $Pages_array ) { ?>
      <div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo get_permalink ($the_Parent) ?>"><?php echo get_the_title($the_Parent) ?></a></h2>
        <ul class="min-list">
          <?php 
          if ($the_Parent){
            $find_children_of = $the_Parent;
          } else {
            $find_children_of =  get_the_ID();
          }
          wp_list_pages(array (

          'title_li'=> NULL,
          'child_of'=> $find_children_of ,
          'sort_column' =>'menu_order'
          ));

          ?>
        </ul>
      </div>
<?php } ?>
      <div class="generic-content">
        <?php the_content(); ?>
    </div>

  
 
<?php

}
get_footer();
?>