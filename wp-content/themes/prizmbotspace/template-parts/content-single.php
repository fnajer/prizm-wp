<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package prizmbotspace
 */

?>
<?php if ( 'post' === get_post_type() ) : ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="single-article__body">
	  <div class="news__item-content">
			<div class="single-article__subheader">
				<span class="item__subtitle">
					<?php 
						foreach((get_the_category()) as $category){
							echo $category->name." ";
						}	
					?>
				</span>
				<span class="item__date"><?php the_time('M d, Y' ); ?></span>
			</div>
			<h4 class="item__title"><?php the_title(); ?></h4>
			<div class="paragraph-wrapper"> <!-- the_content затирает все в родительском блоке -->
				<?php the_content() ?>
			</div>
	  </div>
	</div>
</div><!-- #post-<?php the_ID(); ?> -->
<?php endif; ?>

