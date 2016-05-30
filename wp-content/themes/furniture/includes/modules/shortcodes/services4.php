<?php  
   ob_start() ;?>

<div class="column4">
<div class="row m0 sideBox">
	<div class="row imgB m0">
		<img src="<?php echo wp_get_attachment_url($img, 'full')?>" alt="">
	</div>
	<div class="row m0 icoPlus">
		<img src="<?php echo wp_get_attachment_url($img2, 'full')?>" alt=""><br>
		<a href="<?php echo esc_url($btn_link);?>"><span><?php echo balanceTags($btn_text);?></span></a>
	</div>
</div>
</div>

<?php 
$output = ob_get_contents(); 
ob_end_clean(); 
return $output ; ?>