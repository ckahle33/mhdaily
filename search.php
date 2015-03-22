<?php get_header(); ?><div class="row">
	

	
		<div id="content" class="clearfix row">
			<?php get_sidebar('left-sidebar'); // sidebar 1 ?>
			<div id="main" class="col-sm-9 clearfix" id="post-stream" role="main">

			<div class="row">
				<h2>	
					<span><?php _e("Search","wpbootstrap"); ?>:</span> <?php echo esc_attr(get_search_query()); ?>			
				</h2>
								
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
						
							<div class="title large"><a href="<?php the_field('post_url'); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>

							</div>
							
							<div class="italic"><?php the_field('post_source'); ?></div> -  <?php echo get_the_date('F j, Y'); ?>							
	
						</header> <!-- end article header -->
					
						<section class="post_content">
							<?php the_excerpt('<span class="read-more">' . __("Read more on","wpbootstrap") . ' "'.the_title('', '', false).'" &raquo;</span>'); ?>
							
						</section> <!-- end article section -->
						
						<footer>
					
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php endwhile; ?>	
					
					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi(); // use the page navi function ?>
						
					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="clearfix">
								<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "wpbootstrap")) ?></li>
								<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "wpbootstrap")) ?></li>
							</ul>
						</nav>
					<?php } ?>			
					
					<?php else : ?>
					
					<!-- this area shows up if there are no results -->
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
				</div>	
				
			</div> <!-- end #main -->
    	</div>
			
	</div> <!-- end #content -->

<?php get_footer(); ?>