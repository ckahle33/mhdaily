				<!--Right Sidebar -->
				
			
				<div id="sidebar1" class="col-sm-3" role="complementary"> 
				<h2 class="widgettitle">
					<!-- Needs to be done thru WP this way -->
<!-- 					<?php $categoryID = get_cat_ID('Conversations'); ?>
					<?php $categorylink = get_category_link($categoryID); ?> -->
						<a href="/?cat=8">Conversations</a>
				</h2>
					<?php query_posts('cat=8'); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						   <ul>
							   <li><h4><a href="<?php the_permalink(); ?>">
							   	<?php the_title(); ?>
							   </a></h4></li>
							</ul>

						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>
				</div>