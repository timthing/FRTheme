<?php
/*
Template Name: Custom Page Example
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="twelvecol first clearfix" role="main">
							
							<article>
							<?php
								$post_id = 1;
								$queried_post = get_post($post_id);
							?>
								<header>
									<h2><?php echo $queried_post->post_title; ?></h2>
								</header>
								<section>
										<?php echo $queried_post->post_content; ?>
								</section>
							</article>

						</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
