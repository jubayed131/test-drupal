<?php 
// increases by 1 with each row
$static++;
// EDIT THESE VALUES to match your ideal attachment settings
$offset = 1;
$items_per_page = 8;
$desired_items_per_attachment = 1;

// the un-googleable % below means 'modulus', i.e. 'remainder after dividing left by right' 
if (( $static + $offset + $items_per_page ) % ($offset + $items_per_page + $desired_items_per_attachment) == 0) {

// EDIT THIS replacing [nothing] with the Replacement Pattern of your combined field
 <div class="row">
   <div class="thumb-view">
		<div class="col-sm-4">
			{{ field_image }}
		</div>
		<div class="col-sm-8 thumb-view-content">
			<h5>
				{{ title }}
			</h5>
			<time>
				{{ created }}
			</time>
		</div>
   </div>
</div>

} else {
// do nothing
}
?>