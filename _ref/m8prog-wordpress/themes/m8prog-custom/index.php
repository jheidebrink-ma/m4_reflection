<?php

get_header();?>

<main class="container my-5">
    <div class="row">
        <div class="col-lg-8">

        <?php
        // Start the loop.
        if ( have_posts() ) : ?>
            <?php
            // Load posts loop.
            while ( have_posts() ) :
                // load the data
                the_post();
                ?>
                    <div class="row">
                        <div class="col px-0">
                            <h1 class="mt-5"><?php the_title() ?></h1>
                            <?php the_content() ?>
                            <a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title()?></a>
                        </div>
                    </div>
            <?php
            endwhile;

        else:
            echo 'Volgens mij zoek je iets dat er niet is';
        endif;?>
    </div>

    <?php if ( is_active_sidebar( 'sidebar-widget-area' ) ) : ?>
        <div class="col-lg-4 px-0">
            <?php dynamic_sidebar( 'sidebar-widget-area' ); ?>
        </div>
    <?php endif; ?>
    </div>
</main>
<?php

get_footer();
