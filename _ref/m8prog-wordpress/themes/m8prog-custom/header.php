<!doctype html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?php the_title() ?> | <?php bloginfo( 'title' ) ?></title>
	<?php wp_head() ?>
</head>

<body <?php body_class() ?>>
<?php wp_body_open() ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?php echo get_home_url() ?>">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
		<?php
		wp_nav_menu(
			[
				'menu'            => 'header',
				'link_before'     => '',
				'link_after'      => '',
				'menu_class'      => 'navbar-nav me-auto mb-2 mb-lg-0',
				'container'       => 'div',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'navbarSupportedContent',
				'add_li_class'    => 'nav-item',
				'add_a_class'     => 'nav-link',
			]
		);
		?>

        <form class="d-flex" role="search" action="<?php echo get_home_url() ?>" method="get">
            <input name="s" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="<?php the_search_query() ?>">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</nav>
