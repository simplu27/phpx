<?php

// custom wpalchemy


// custom-meta-produse.php

$custom_meta_produse = new WPAlchemy_MetaBox(array
(
	'id' => 'meta_info_produse',
	'title' => 'Custom Meta Produse',
	'types' => array('produse'), // added only for pages and to custom post type "events"
	'context' => 'normal', // same as above, defaults to "normal"
	'priority' => 'high', // same as above, defaults to "high"
	'template' => get_stylesheet_directory() . '/metaboxes/custom/produse-meta.php',
	// 'hide_editor' => true, // ascunde editorul pe pagina cu custom meta
));

///////////////////////////////////////////////////////////////////
// produse-meta.php
?>
<div id="produse-custom" class="my_meta_control">
 
	<p>Puteti customiza ceea ce o sa apara in pagina cu un singur produs</p>
 
	<label>Titlul produsului</label>
 
	<p>
		<?php $mb->the_field('titlu-produs'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		<span>Introduceti un titlu pentru produs</span>
	</p>
 
	<label>Descrierea produsului <span>(camp optional)</span></label>
 
	<p>
		<?php $mb->the_field('descriere-produs'); ?>
		<textarea name="<?php $mb->the_name(); ?>" rows="4"><?php $mb->the_value(); ?></textarea>
		<span>Va rugam sa introduceti o descriere</span>
		<p class="meta-save"><button type="submit" class="button-primary" name="save"><?php _e('Update');?></button></p>
	</p>

	<h1><?php _e('A single textarea that uses the wp_editor() function.');?></h1>
	<p>
		<?php $mb->the_field('test_editor_produse');

		$settings = array(
			'textarea_rows' => '14',
			'media_buttons' => false,
			'tabindex' =>2,
			'quicktags' => true,
			'drag_drop_upload' => true,
			'textarea_name' => $mb->get_the_name(),
		);

		// need to html_entity_decode() the value b/c WP Alchemy's get_the_value() runs the data through htmlentities()
		wp_editor( html_entity_decode( $mb->get_the_value() ),  $mb->get_the_id() , $settings );
		?>
		 <span>Enter in some text</span>
	</p>
	<p class="meta-save"><button type="submit" class="button-primary" name="save"><?php _e('Update');?></button></p>
</div>

<?php
//////////////////////////////////////////////////////////////////

// retrive data [single-produse.php]

// $metax = get_post_meta( get_the_id());

// echo '<pre>';
// 	print_r($metax);
// echo '</pre>';

/////////////////////////////////
// Custom meta boxes
$value = get_post_meta( get_the_id(), 'meta_info_produse', true ); 

if (! empty($value)) {
	echo '<div class="meta-box-conent">';
	echo "<strong>Titlu produs</strong>: " . $value['titlu-produs'];
	echo "<br>";
	echo "<strong>Descriere produs</strong>: " . $value['descriere-produs'];
	echo "<br>";

	echo "<strong>Custom editor</strong>: " . wpautop( $value['test_editor_produse'], $br = true );
	echo "</div>";
	echo "<br>";
}
/////////////////////////////////









