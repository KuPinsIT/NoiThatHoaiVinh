<?php /* Template Name: VC Page */
get_header() ;
$meta = _WSH()->get_meta();
$meta1 = _WSH()->get_meta('_sh_header_settings');
?>
<?php if(sh_set($meta1, 'bread_crumb')):?>
<?php $header_bg_image = sh_set( $meta1, 'bg_image' ) ? ' style=background-image:url('.$meta1['bg_image'].');' : ''; ?>
<section id="breadcrumbRow" class="row">
	<h2 <?php if($header_bg_image):?>style="background-image: url('<?php echo esc_url($header_bg_image); ?>');"<?php endif;?>><?php if(sh_set($meta1, 'header_title')) echo sh_set($meta1, 'header_title'); else echo wp_title('');?></h2>
	<div class="row pageTitle m0">
		<div class="container">
			<h4 class="fleft"><?php if(sh_set($meta1, 'header_title')) echo sh_set($meta1, 'header_title'); else echo wp_title('');?></h4>
			<ul class="breadcrumb fright">
			    <?php echo get_the_breadcrumb(); ?>
        	</ul>
		</div>
	</div>
</section>
<?php endif;?>
<?php //if( !sh_set( $meta, 'is_home' ) ) get_template_part( 'includes/modules/header/header', 'single' ); ?>
<div class="white-bg">
	<?php while( have_posts() ): the_post(); ?>
	     <?php the_content(); ?>
	<?php endwhile;  ?>
</div>
<?php get_footer() ; ?>