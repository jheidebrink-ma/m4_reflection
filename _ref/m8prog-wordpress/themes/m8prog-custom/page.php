<?php

get_header();

// load the data
?>
    <main class="container my-5">
        <div class="row">
            <h1 class="mt-5">
                <?php the_title() ?>
            </h1>
            <hr>
            <div class="col-lg-8 px-0">
                <?php the_content() ?>
            </div>
	        <?php if ( is_active_sidebar( 'sidebar-widget-area' ) ) : ?>
                <div class="col">
			        <?php dynamic_sidebar( 'sidebar-widget-area' ); ?>
                </div>
	        <?php endif; ?>
        </div>
    </main>
<?php
get_footer();
