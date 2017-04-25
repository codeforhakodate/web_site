<?php
/**
 *Template Name: Full Width
 *
 * @package OnePress
 */

get_header(); ?>

	<div id="content" class="site-content">
		
		<div class="page-header" style="background-image :
		<?php if(is_page('about')): /* スラッグ＝URL */ ?>
  			url( http://codeforhakodate.sakura.ne.jp/codeforhakodate/wp-content/uploads/2017/04/about_backImg.jpg);
			background-position : center 57%;
		<?php elseif(is_page('event')): /* スラッグ＝URL */ ?>
  			url( http://codeforhakodate.sakura.ne.jp/codeforhakodate/wp-content/uploads/2017/04/event_backImg.jpg);
			background-position : center 50%;
		<?php elseif(is_page('project')): /* スラッグ＝URL */ ?>
  			url( http://codeforhakodate.sakura.ne.jp/codeforhakodate/wp-content/uploads/2017/04/project_backImg.jpg);
			background-position : center 50%;
		<?php elseif(is_page('product')): /* スラッグ＝URL */ ?>
  			url( http://codeforhakodate.sakura.ne.jp/codeforhakodate/wp-content/uploads/2017/04/product_backImg.jpg);
			background-position : center 50%;
		<?php elseif(is_page('member')): /* スラッグ＝URL */ ?>
  			url( http://codeforhakodate.sakura.ne.jp/codeforhakodate/wp-content/uploads/2017/04/product_backImg.jpg);
			background-position : center 50%;
		<?php else: ?>
			url( http://codeforhakodate.sakura.ne.jp/codeforhakodate/wp-content/uploads/2017/04/cropped-The_night_view_from_Mt_Hakodate-1-1MB.jpg);
			background-position : center center;
		<?php endif; ?>
		background-repeat : no-repeat; background-size:100% auto; ">
			<div class="container">
				<?php the_title( '<h1 class="entry-title" style="color = #ffffff;">', '</h1>' ); ?>
			</div>
		</div>

        <?php echo onepress_breadcrumb(); ?>

		<div id="content-inside" class="container no-sidebar">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'page' ); ?>

						<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>

					<?php endwhile; // End of the loop. ?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!--#content-inside -->
	</div><!-- #content -->

<?php get_footer(); ?>
