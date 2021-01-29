<?php  
$query = new WP_Query(array(
    'post_type' => 'page',
    'name' => 'menukort',
    'posts_per_page' => 1,
    ));

    while($query->have_posts()){
    $query->the_post();
          get_header();
    } 
    wp_reset_postdata();
    get_template_part( '/partials/menukort/navigation' ); 
?>
    <section class="flex flex-wrap w-full max-w-full pt-12 md:max-w-screen-sm lg:max-w-screen-md xl:max-w-screen-lg 2xl:max-w-screen-xl">
        <?php get_template_part( '/partials/menukort/menucard-full'); ?>
    </section>

<?php get_footer( ); ?> 