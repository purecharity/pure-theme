<div class="col span_6 restags">
	<h3>View By Tag</h3>
	<?php wp_tag_cloud( array( 
		'taxonomy'	=> 'resource-tag',
		'smallest'	=> 14, 
		'largest' 	=> 14,
		'orderby'	=> 'name', 
		'separator'	=> "<br/>",
		'order'		=> 'ASC'
		)); 
	?>
</div>