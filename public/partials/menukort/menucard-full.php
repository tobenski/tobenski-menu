<!-- MENU CARD-->
<div class="card card-full">
    <div class="card-image">
        <img src="<?php the_post_thumbnail_url( ); ?>">                
    </div>
    <div class="card-content">
        <div class="card-header">
            <a href="<?php the_permalink( ) ?> ">
                <h4 class=""><?php the_title(); ?></h4>
            </a>
        </div>
        <p class="font-bold">
        <?php the_field('note'); ?>
        </p>
        <p class="">
            <?php the_field('avalibel'); ?>
        </p>
        <p>
            <?php next_post_link( '%link', 'Se næste menu', true, '', 'menu_type' ) ?>
        </p>
        <p class="mt-4 border-black border-t pt-4">
            <?php the_content(); ?>
        </p>
    </div>            
</div>