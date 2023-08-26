<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="image" property="og:image" content="https://uaisolutions.com/wp-content/uploads/2021/05/3_logo.png">
	<?php wp_head(); ?>
	<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
	<title>Underwater Acoustics International</title>
	<style type="text/css">
		.acf-map {
			width: 100%;
			height: 400px;
			border: #ccc solid 1px;
			margin: 20px 0;
		}

		/
		/
		Fixes potential theme css conflict.
		.acf-map img {
			max-width: inherit !important;
		}
	</style>
	<script type='text/javascript' data-cfasync='false'>window.purechatApi = {
			l: [], t: [], on: function () {
				this.l.push(arguments);
			}
		};
		(function () {
			var done = false;
			var script = document.createElement('script');
			script.async = true;
			script.type = 'text/javascript';
			script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript';
			document.getElementsByTagName('HEAD').item(0).appendChild(script);
			script.onreadystatechange = script.onload = function (e) {
				if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {
					var w = new PCWidget({c: '853874da-dd8f-4a93-867d-1fdf39d8fe31', f: true});
					done = true;
				}
			};
		})();</script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZSK2HTT2Y4"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}

		gtag('js', new Date());

		gtag('config', 'G-ZSK2HTT2Y4');
	</script>


</head>
<body class="preloader-active">

<div class="e-loadholder">
	<div class="m-loader">
		<span class="e-text">Loading</span>
	</div>
</div>
<div id="particleCanvas-Blue"></div>
<div id="particleCanvas-White"></div>


<?php $menu_items = get_field( 'menu_items' ); ?>
<h1 class="invisible-title">Underwater Acoustics International</h1>
<div class="mobile-menu_wrapper js_menu_wrapper">
	<div class="mobile-menu js_mobile-menu">
		<ul class="mobile-menu_list js_mobile-menu_list">
			<?php if ( $menu_items['services_text'] ): ?>
				<li class="mobile-menu_item js_mobile-menu_link" data-id="services">
					<button
							class="mobile-menu_link js_mobile-menu_link menu--link js_highlight"
							data-id="services"
					>
						<?php echo $menu_items['services_text']; ?>
					</button>
				</li>
			<?php endif; ?>
			<?php if ( $menu_items['technology_text'] ): ?>
				<li class="mobile-menu_item js_mobile-menu_link" data-id="technology">
					<button
							class="mobile-menu_link js_mobile-menu_link menu--link js_highlight"
							data-id="technology"
					>
						<?php echo $menu_items['technology_text']; ?>
					</button>
				</li>
			<?php endif; ?>
			<?php if ( $menu_items['projects_text'] ): ?>
				<li class="mobile-menu_item js_mobile-menu_link" data-id="projects">
					<button
							class="mobile-menu_link js_mobile-menu_link menu--link js_highlight"
							data-id="projects"
					>
						<?php echo $menu_items['projects_text']; ?>
					</button>
				</li>
			<?php endif; ?>
			<?php if ( $menu_items['mapanalyst_text'] ): ?>
				<li class="mobile-menu_item js_mobile-menu_link">
					<button
							class="mobile-menu_link js_mobile-menu_link menu--link js_highlight"
							data-id="map-analyst"
					>

						<?php echo $menu_items['mapanalyst_text']; ?>
						<sup><?php echo $menu_items['mapanalyst_text_end']; ?></sup>
					</button>
				</li>
			<?php endif; ?>
			<?php if ( $menu_items['news_text'] ): ?>
				<li class="mobile-menu_item">
					<button class="mobile-menu_link js_news-btn menu--link ">
						<?php echo $menu_items['news_text']; ?>
					</button>
				</li>
			<?php endif; ?>
			<?php if ( $menu_items['gallery'] ): ?>
				<li class="mobile-menu_item js_mobile-menu_link" data-id="gallery">
					<button
							class="mobile-menu_link js_mobile-menu_link menu--link js_highlight"
							data-id="gallery"
					>
						<?php echo $menu_items['gallery']; ?>
					</button>
				</li>
			<?php endif; ?>

			<?php if ( $menu_items['contact_us_link'] ): ?>
				<li class="mobile-menu_item nav_item--highlight">

					<button
							class="mobile-menu_link js_mobile-menu_link menu--link js_highlight"
							data-id="contact-us"
					>
						<?php echo $menu_items['contact_us_text']; ?>
					</button>

					<img
							src="<?php bloginfo( 'template_directory' ); ?>/img/highlight.png"
							alt=""
							class="nav_img--highlight transition"
					/>
				</li>
			<?php endif; ?>

			<?php
			if ( $menu_items['client_login'] ):?>
				<li class="mobile-menu_item">
					<a target="_blank" href="<?php echo $menu_items['client_login']; ?>" class="mobile-menu_link js_client-btn menu--link js_highlight">
						Client Login
					</a>
				</li>
			<?php endif; ?>
		</ul>
	</div>
</div>
<header class="header js_header " id="home">
	<div class="section header_content">
		<?php if ( $menu_items['logo_image'] ): ?>

			<img
					src="<?php echo $menu_items['logo_image']; ?>"
					alt=""
					class="header_logo__image js_logo_link" data-id="home"
			/>

		<?php endif; ?>
		<button class="mobile-menu_btn js_mobile-menu_btn">
			<span class="mobile-menu_btn__span"></span>
		</button>
		<nav class="nav">
			<ul class="nav_list js_mobile-main-list">
				<?php if ( $menu_items['services_text'] ): ?>
					<li class="nav_item">
						<button
								class="nav_link mobile-menu_link js_menu_link menu--link js_highlight"
								data-id="services"
						>
							<?php echo $menu_items['services_text']; ?>
						</button>
					</li>
				<?php endif; ?>
				<?php if ( $menu_items['technology_text'] ): ?>
					<li class="nav_item">
						<button
								class="nav_link mobile-menu_link js_menu_link menu--link js_highlight"
								data-id="technology"
						>
							<?php echo $menu_items['technology_text']; ?>
						</button>
					</li>
				<?php endif; ?>
				<?php if ( $menu_items['projects_text'] ): ?>
					<li class="nav_item">
						<button
								class="nav_link mobile-menu_link js_menu_link menu--link js_highlight"
								data-id="projects"
						>
							<?php echo $menu_items['projects_text']; ?>
						</button>
					</li>
				<?php endif; ?>
				<?php if ( $menu_items['mapanalyst_text'] ): ?>
					<li class="nav_item">
						<button
								class="nav_link mobile-menu_link js_menu_link menu--link js_highlight"
								data-id="map-analyst"
						>
							<?php echo $menu_items['mapanalyst_text']; ?>
							<sup><?php echo $menu_items['mapanalyst_text_end']; ?></sup>
						</button>
					</li>
				<?php endif; ?>

				<?php if ( $menu_items['news_text'] ): ?>
					<li class="nav_item">
						<button class="nav_link mobile-menu_link js_news-btn menu--link">
							<?php echo $menu_items['news_text']; ?>
						</button>
					</li>
				<?php endif; ?>

				<?php if ( $menu_items['gallery'] ): ?>
					<li class="nav_item">
						<button
								class="nav_link mobile-menu_link js_menu_link menu--link js_highlight"
								data-id="gallery"
						>
							<?php echo $menu_items['gallery']; ?>
						</button>
					</li>
				<?php endif; ?>

				<?php if ( $menu_items['contact_us_link'] ): ?>
					<li class="nav_item ">
						<button
								class="nav_link mobile-menu_link js_menu_link menu--link js_highlight"
								data-id="contact-us"
						>
							<?php echo $menu_items['contact_us_text']; ?>
						</button>

					</li>
				<?php endif; ?>

								<?php
				if ( $menu_items['client_login'] ):?>
					<li class="mobile-menu_item nav_item--highlight">

						<a target="_blank" href="<?php echo $menu_items['client_login']; ?>" class="nav_link mobile-menu_link js_client-btn menu--link">
							Client Login
						</a>
											<img
								src="<?php bloginfo( 'template_directory' ); ?>/img/highlight.png"
								alt=""
								class="nav_img--highlight transition"
						/>
					</li>
				<?php endif; ?>
			</ul>
		</nav>
	</div>
</header>


