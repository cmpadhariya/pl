<!DOCTYPE html>
<html lang="en">
<?php
/**
 * The template for displaying header.
 *
 * The area of the page that contains site logo,menu and other social link.
 *
 * @package WordPress tutorials
 * @subpackage WordPress tutorials
 */

?>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php the_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<div class="container">
				<div class="header__inner">
					<?php
						$logoimg = get_header_image();
					?>
					<div class="header__inner--logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $logoimg ); ?>" alt="header-logo"></a>
					</div>
					<div class="header__inner--menu">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'wordpresstutorials-header-menu',
							)
						);
						?>
					</div>
				</div>
			</div>
		</div>
</body>
</html>
