<?php

get_header(); ?>

    <main class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1>De zoek resultaten voor: <?php the_search_query() ?> </h1>
            </div>
        </div>
        <div class="row">
			<?php
			// Start the loop.
			if ( have_posts() ) : ?>
				<?php
				// Load posts loop.
				while ( have_posts() ) :
					// load the data
					the_post();
					?>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="border border-1 border-success bg-success-subtle p-2 m-2 h-100">
                            <a href="<?php
							the_permalink() ?>" title="<?php
							the_title() ?>">
								<?php
								the_post_thumbnail( 'medium', [ 'class' => 'w-100' ] ) ?>
                                <div class="text-center mt-2 mb-0">
                                    <?php the_title() ?>
                                </div>
                            </a>
                            <div class="text-center small mt-2 mb-0">
		                        <?php the_excerpt() ?>
                            </div>
                        </div>
                    </div>
				<?php
				endwhile;

			else: ?>
                <div class="col-lg-8">
                    Ik heb niets kunnen vinden.
                </div>
			<?php
			endif; ?>
        </div>
    </main>
<?php

get_footer();
