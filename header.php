<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
	<?php wp_body_open(); ?>
    <div class="container-header">
		<header class="main-header">
			<div class="logo">
				<?php if(!is_front_page()){
					?><a href="<?php echo home_url(); ?>">
					<?php } ?>
					<img src="<?= get_stylesheet_directory_uri();?>/pics/logosss.png" alt="logo" width="400" height="200"/>
					<?php if(!is_front_page()){?>
				</a><?php } ?>
			</div>
			<nav class="main-nav">
				<button aria-expanded="false" aria-controls="main-menu" class="togle">Menu</button>
				<?php 
				wp_nav_menu(
					[
						'theme_location'=>"menu-du-header",
						'items_wrap'    => '<ul id="main-menu" class="menu" hidden>%3$s</ul>'
					]
				);
				?>
			</nav>
       	</header>
	</div>
	<div class="tri"></div>


