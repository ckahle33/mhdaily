				<div class="col-sm-12" role="complementary">

				<?php the_field('videoarea'); ?>
	

			<div class="row">
					<?php if ( is_active_sidebar( 'homepage-body' ) ) : ?>

						<?php dynamic_sidebar( 'homepage-body' ); ?>

					<?php else : ?>


						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert alert-message">
						
							<p><?php _e("Please activate some Widgets","wpbootstrap"); ?>.</p>
						
						</div>
			</div>

					<?php endif; ?>

				</div>