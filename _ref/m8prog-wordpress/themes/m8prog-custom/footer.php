<footer class="footer mt-auto py-3 bg-body-tertiary">
    <div class="container">
        <div class="row">
            <div class="col-6 col-lg-4 px-0">
				<?php if ( is_active_sidebar( 'footer-widget-area-1' ) ) : ?>
					<?php dynamic_sidebar( 'footer-widget-area-1' ); ?>
				<?php endif; ?>
            </div>
            <div class="col-6 col-lg-4 px-0">
				<?php if ( is_active_sidebar( 'footer-widget-area-2' ) ) : ?>
					<?php dynamic_sidebar( 'footer-widget-area-2' ); ?>
				<?php endif; ?>
            </div>
            <div class="col-6 col-lg-4 px-0">
				<?php if ( is_active_sidebar( 'footer-widget-area-3' ) ) : ?>
					<?php dynamic_sidebar( 'footer-widget-area-3' ); ?>
				<?php endif; ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>