<?php get_header(); ?>




<div style="display:flex; flex-direction:column;align-items:center;justify-content:center;">
<?php

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

        <h1> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a> </h1>
        <?php the_post_thumbnail( )?>
        <p> <?php the_content(); ?> </p>
        <p> <?php the_category(); ?> </p>
      
      
        
          <p> <?php the_author();?></p>

          <p> <?php the_date();?></p>  
          <p> <?php the_time();?></p> 
          <p> <?php wp_list_comments();?></p> 
    
        <hr>
        <?php
    endwhile;
endif;


?>
</div>

<?php get_footer(); ?>

