<?php get_header(); ?>
    <section class="flex flex-wrap w-full max-w-full pb-12 md:max-w-screen-sm lg:max-w-screen-md xl:max-w-screen-lg 2xl:max-w-screen-xl">
      <?php
      
          $taxonomies = array('frokost', 'eftermiddag', 'anbefaler', 'aften', 'born');
          foreach ($taxonomies as $tax) {
          $args = array(
            'post_type' => 'menu',
            'tax_query' => array(
              array(
                'taxonomy' => 'menu_type',
                'field' => 'slug',
                'terms' => $tax,
              ),
            ),
            'posts_per_page' => 1,
            'meta_key' => '_expiration-date',
            'orderby' => 'meta_value_date',
            'order' => 'ASC',
          );
          $query = new WP_Query($args);
          
          if ($query->have_posts()){
            while($query->have_posts()) {
              $query->the_post();
              get_template_part( '/partials/menukort/menucard');
            }
          } else {
            echo "No $tax menues";
          } 
          wp_reset_postdata(  );
        }
      ?>
    </section>
<?php get_footer( ); ?> 