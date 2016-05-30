<?php  
   $count = 1; 
   $query_args = array('post_type' => 'product' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   
   if( $cat ) $query_args['product_cat'] = $cat;
   $query = new WP_Query($query_args) ;
   ob_start() ;?>
   
<?php if($query->have_posts()): ?>

<div class="proMediaCol woocommerce">
<div class="row proMedia">
	<h5 class="heading"><?php echo balanceTags($title);?></h5>
	
	<?php while($query->have_posts()): $query->the_post();
               global $post ; 
               $meta = _WSH()->get_meta() ; 
	?>
	
	<div class="media">
		<div class="media-left"><a href="<?php the_permalink();?>">
			<?php the_post_thumbnail('84x84');?>
		</a>
		</div>
		<div class="media-body">
			<h6 class="heading"><?php the_title();?></h6>
			<h5 class="heading"><?php woocommerce_template_loop_price(); ?></h5>
		</div>
	</div>
	
	<?php endwhile;?>
	
</div>
</div>

<?php endif;  ?>

<?php 
   $output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>