<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>&nbsp;Mental Health Daily</title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="//cloud.typography.com/7447892/764644/css/fonts.css" />
		<link rel="icon" type="image/png" href="http://mhdaily.org/wp-content/themes/wordpress-bootstrap-master/images/favicon.png">		
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php define('WP_DEBUG', true); ?>
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
				
	</head>
	
	<body <?php body_class(); ?>>			
		<header role="banner">
				
			<div class="navbar navbar-default navbar">
				<div class="container header">
          
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<!-- <a class="navbar-brand" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><h2><?php bloginfo('name'); ?></h2></a> -->
					</div>

						<div class="collapse navbar-collapse navbar-responsive-collapse">
						<?php
							$args = array(
								'number' => 10, 
								"pad_counts" => true,
								'orderby' => "count", 
								'order' => "DESC"
								);
							$tags = get_tags($args);
							$html = '<div class="post_tags">'; ?>

							<div class="topics">#MHDAILY</div>
							
							<?php 

								$tag_slug = get_term_by('slug', 'blog', 'post_tag'); 
								$blog_link = get_tag_link($tag_slug->term_id);

								$html .= "<a href='{$blog_link}'>$tag_slug->name</a>";

							?>

							<?php foreach ( $tags as $tag ) {
								$tag_link = get_tag_link( $tag->term_id );
										
								$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
								$html .= "{$tag->name}</a>";
							}
							$html .= '</div>';
							echo $html;
							?>

						</div>

					<div class="logo">
						<div class="logo-center">
							<a href="/">
								<img src="/wp-content/uploads/2014/05/mh_daily_site_round2-1_03-e1399436830233.png">
							</a>
						</div>
					</div>

				</div> <!-- end .container -->
			</div> <!-- end .navbar -->
		
		</header> <!-- end header -->
		
		<div class="container">


		<div class="row">
			<div class="col-sm-12 search">
			<div class="col-sm-6 sub-nav">
				<div class="date">
					<h2 class="date"><?php echo date('F j, Y'); ?></h2>
				</div>
			</div>

				<div class="col-sm-6 social-icons">
					<?php get_search_form(); ?>
					<ul class="social">
						<li class="fb">
							<a href="https://www.facebook.com/mentalhealthdaily"></a>
						</li>
						<li class="twitter">
							<a href="https://twitter.com/MH_Daily"></a>
						</li>
						<li class="mh"><a href="http://hogg.utexas.edu/"></a></li>
						<li class="rss"><a href="http://mhdaily.org/?feed=rss"></a></li>
						<li class="about"><a href="/about">About</a></li>
					</ul>
				</div>

			</div>
		</div>
