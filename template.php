<?php
/*
Template Name: Мой шаблон страницы
Template Post Type: post, page, product
*/
?>

<?php get_header(  ) ?>
<div class="content">
	<div class="content__inner container">
		<div class="content__banner">
			<div class="banner row">
				<img src="<?php  bloginfo( 'template_url' )?>/image/content/slider.jpg" alt="" class="banner__item">
			</div>
		</div>
		<div class="content__pagination">
			
		</div>
		<div class="content__block">
			<div class="main-block row">
				<div class="col-md-4">
					<div class="sidebar row">

<?php
wp_nav_menu( array(
  'menu'     => 'новое меню',
  'sub_menu' => true
) );			?>
					</div>
				</div>
				<div class="col-md-8">
					<div class="post">
						<?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>    
                
                        <?php  the_title(  )?>
                   
                   
                        <?php the_content() ?>
                 
                <?php endwhile; ?>
              <?php endif; ?> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(  ) ?>

              