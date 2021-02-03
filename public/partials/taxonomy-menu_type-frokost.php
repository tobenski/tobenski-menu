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
?>

    <section class="flex flex-wrap w-full max-w-full pb-12 md:max-w-screen-sm lg:max-w-screen-md xl:max-w-screen-lg 2xl:max-w-screen-xl">
        <?php 
        $args = array(
            'post_type' => 'menu',
            'tax_query' => array(
            array(
                'taxonomy' => 'menu_type',
                'field' => 'slug',
                'terms' => 'frokost',
            ),
            ),
            'posts_per_page' => 1,
            'meta_key' => '_expiration-date',
            'order_by' => 'meta_value_date',
            'order' => 'ASC',
        );
        $query = new WP_Query($args);
                
        if ($query->have_posts()){
            while($query->have_posts()) {
            $query->the_post();
            get_template_part( '/partials/menukort/menucard'); 
            } wp_reset_postdata(  );
        }else {
            echo 'Ingen Frokost Menuer';
        }

        $args = array(
            'post_type' => 'menu',
            'tax_query' => array(
            array(
                'taxonomy' => 'menu_type',
                'field' => 'slug',
                'terms' => 'eftermiddag',
            ),
            ),
            'posts_per_page' => 1,
            'meta_key' => '_expiration-date',
            'order_by' => 'meta_value_date',
            'order' => 'ASC',
        );
        $query = new WP_Query($args);
                
        if ($query->have_posts()){
            while($query->have_posts()) {
            $query->the_post();
            get_template_part( '/partials/menukort/menucard');
            } wp_reset_postdata(  );
        }else {
            echo 'Ingen Eftermiddags Menuer';
        }
        ?>
    </section>
<?php get_footer( ); ?> 