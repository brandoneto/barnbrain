<?php
/**
 * Elgg tag input
 *
 * Accepts a single tag value
 *
 * @uses $vars['value'] The default value for the tag
 * @uses $vars['class'] Additional CSS class
 */

if (isset($vars['class'])) {
	$vars['class'] = "elgg-input-tag {$vars['class']}";
} else {
	$vars['class'] = "elgg-input-tag";
}

$defaults = array(
	'value' => '',
	'disabled' => false,
	'autocapitalize' => 'off',
);

$vars = array_merge($defaults, $vars);
?>

<input type="text" placeholder="tag1, tag2..." <?php echo elgg_format_attributes($vars); ?> />
