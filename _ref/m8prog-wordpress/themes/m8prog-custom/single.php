<?php

the_post();

get_header();

// load the data
?>
    <main class="container my-5">
        <div class="row">
            <div class="col-lg-8 ">
                <h1 class="mt-5">
                    <?php the_title() ?>
                </h1>
                <span class="post-date">Created: <?php the_date() ?></span>
                <span class="post-date">Last update: <?php echo the_modified_date() ?></span>
                <span class="post-author">
                Author:
                <div id="author-info">
                    <div id="author-avatar">
                        <?php echo get_avatar( get_the_author_meta( 'user_email' ), '80', '-' ); ?>
                    </div>
                    <div id="author-description">
                    <h3><?php
                        the_author_link(); ?></h3>
                        <?php the_author_meta( 'description' ); ?>
                    </div>
                </div>
            </span>
            <hr>

            </div>
        </div>

        <div class="row">
            <div class="col px-0">
				<?php
				the_content() ?>
            </div>
        </div>

        <div class="row">
            <div class="col my-3">
				<?php
				// Previous/next post navigation.
				the_post_navigation(
					[
						'next_text' => '<span class="meta-nav" aria-hidden="true">' .
						               __( 'Next', 'm8prog-custom' ) .
						               '</span> ' .
						               '<span class="screen-reader-text mr-2">' .
						               __( 'Next post:', 'm8prog-custom' ) .
						               '</span> ' .
						               '<span class="post-title mr-2">%title</span>',
						'prev_text' => '<span class="meta-nav" aria-hidden="true">' .
						               __( 'Previous', 'm8prog-custom' ) .
						               '</span> ' .
						               '<span class="screen-reader-text mr-2">' .
						               __( 'Previous post:', 'm8prog-custom' ) .
						               '</span> ' .
						               '<span class="post-title">%title</span>',
					] );
				?>
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
