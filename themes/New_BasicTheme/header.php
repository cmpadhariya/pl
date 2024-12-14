<!DOCTYPE html>
<html lang="en">
<?php
/**
 * The template for displaying header.
 *
 * The area of the page that contains site logo,menu and other social link.
 *
 * @package NewBasicTheme
 * @subpackage NewBasicTheme
 */

?>
<head>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-FGW8R6Z8VN"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-FGW8R6Z8VN');
	</script>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php the_title(); ?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
	<?php wp_head(); ?>
	<!-- Meta Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '628029625680854');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=628029625680854&ev=PageView&noscript=1"/></noscript>
	<!-- End Meta Pixel Code -->

	<!-- <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js<?php echo esc_url( self::LOADER_URL ); ?>"></script> -->
	<amp-ad width="100vw" height="320"
		type="adsense"
		data-ad-client="ca-pub-4105069321268320"
		data-ad-slot="4534730783"
		data-auto-format="rspv"
		data-full-width="">
	<div overflow=""></div>
	</amp-ad>
</head>
<body>
	<div class="wrapper">
		<header>
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
									'theme_location' => 'newbasictheme-header-menu',
								)
							);
							?>
						</div>
					</div>
				</div>
			</div>
		</header>
</body>
</html>
