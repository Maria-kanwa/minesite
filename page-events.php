<?php get_header(); ?>
<?php do_shortcode('[weather]') ?>

</div>



<div class="fourth">
    <?php
    $events = new wp_Query(array(
        'post_type'=> 'event',
        'post_per_page'=>-1,
    ));
    while($events->have_posts()){
        $events-> the_post();
   
    ?>
    <a href="<?php the_permalink();?>"><h3><?php echo get_the_title();?></h3></a>
    <p><?php echo get_the_content();?></p>
    <?php echo get_the_date();?>
    <?php echo get_the_author();?>
    
    <?php }
    ?>
</div>



<?php get_footer(); ?>