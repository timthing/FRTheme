				<div id="sidebartop" class="center content-wrap clearfix" role="complementary">

					<?php if ( is_active_sidebar( 'sidebartop' ) ) : ?>

						<?php dynamic_sidebar( 'sidebartop' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->

						<div class="alert alert-help">
							<p><?php _e("Please activate some Widgets.", "bonestheme");  ?></p>
						</div>

					<?php endif; ?>

				</div>