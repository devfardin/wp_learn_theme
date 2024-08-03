<?php
get_header(); ?>
<main class="main">
   <div id="main-content" class="wrapper">
        <div class="container">
          <div class="row">
                <div class="col-md-8">
                    <?php if( have_posts() ) : ?>
						<?php while( have_posts() ) : the_post(); ?>
							<article class="post">
								<h2 class="post__title">
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h2>
								<div class="post__excerpt">
									<?php the_excerpt(); ?>
									<a class="btn btn--primary" href="<?php the_permalink(); ?>">Read More</a>
								</div>
							</article>
						<?php endwhile; ?>
					<?php endif; ?>
                </div>
				<?php get_sidebar(); ?>
          </div>
        </div>
   </div>
</main>
<?php get_footer(); ?>