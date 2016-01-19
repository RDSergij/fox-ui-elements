<?php
/**
 * Description: Fox ui-elements
 * Author: Osadchyi Serhii
 * Author URI: https://github.com/RDSergij
 *
 * @package ui_input_fox
 *
 * @since 0.2.1
 */
?>

<?php if ( ! empty( $label ) ) : ?>
<label><?php echo $label ?></label>
<?php endif; ?>
<input <?php echo $attributes ?>
	<?php if ( !empty( $datalist ) ) : ?>
	datalist="<?php echo $name ?>-datalist"
	<?php endif; ?>
>

<?php if ( !empty( $datalist ) ) : ?>
<datalist id="<?php echo $name ?>-datalist">
	<?php foreach ( $datalist as $dataitem ) : ?>
	<option value="Firefox">
	<?php endforeach; ?>
</datalist>
<?php endif; ?>