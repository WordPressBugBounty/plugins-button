<?php 
if ( ! defined( 'ABSPATH' ) ) { exit; }
function button_default_settings() {
	return json_encode( array(
		'button_layout'					=> esc_html__('simple_button', 'button-pro'),
		'button_text'					=> esc_html__('Your Text','button-pro'),
		'attribute_id'					=> '',
		'attribute_value'				=> '',
		'selector'						=> '',
		'button_link'					=> esc_html__('#', 'button-pro'),
		'button_target'					=> esc_html__('1','button-pro'),
		'padding_top'					=> esc_html__('10','button-pro'),
		'padding_right'					=> esc_html__('10','button-pro'),
		'padding_bottom'				=> esc_html__('10','button-pro'),
		'padding_left'					=> esc_html__('10','button-pro'),
		'button_width'					=> esc_html__('140','button-pro'),
		'button_height'					=> esc_html__('45','button-pro'),
		'button_text_color'				=> esc_html__('#ffffff','button-pro'),
		'button_text_hover_color'		=> esc_html__('#823aa0','button-pro'),		
		'font_size'						=> esc_html__('20','button-pro'),
		'text_bold'						=> '',
		'text_italic'					=> '',
		'text_align'					=> esc_html__('center','button-pro'),
		'button_circle'					=> esc_html__('0','button-pro'),
		'border_top_left'				=> esc_html__('10','button-pro'),
		'border_top_right'				=> esc_html__('10','button-pro'),
		'border_bottom_left'			=> esc_html__('10','button-pro'),
		'border_bottom_right'			=> esc_html__('10','button-pro'),
		'border_style'					=> esc_html__('solid','button-pro'),
		'border_width'					=> esc_html__('1','button-pro'),
		'border_color'					=> esc_html__('#823aa0','button-pro'),
		'border_hover_color'			=> esc_html__('#823aa0','button-pro'),
		'border_shadow_color'			=> esc_html__('#b5b5b5','button-pro'),
		'border_shadow_hover_color'		=> esc_html__('#b5b5b5','button-pro'),
		'border_shadow_offset_left'		=> esc_html__('0','button-pro'),
		'border_shadow_offset_top'		=> esc_html__('0','button-pro'),
		'border_shadow_blur'			=> esc_html__('0','button-pro'),
		'button_bg_color_start'			=> esc_html__('#823aa0','button-pro'),
		'button_bg_color_end'			=> esc_html__('#823aa0','button-pro'),
		'button_bg_hover_color_start'	=> esc_html__('#ffffff','button-pro'),
		'button_bg_hover_color_end'		=> esc_html__('#ffffff','button-pro'),
		'opacity_start'					=> esc_html__('100','button-pro'),
		'opacity_end'					=> esc_html__('100','button-pro'),
		'hover_opacity_start'			=> esc_html__('100','button-pro'),
		'hover_opacity_end'				=> esc_html__('100','button-pro'),
		'gradient_stop'					=> esc_html__('45','button-pro'),
		'container_use'					=> esc_html__('0','button-pro'),
		'container_center'				=> esc_html__('1','button-pro'),
		'container_width'				=> esc_html__('140','button-pro'),
		'button_align'					=> esc_html__('center','button-pro'),
		'margin_top'					=> esc_html__('10','button-pro'),
		'margin_right'					=> esc_html__('10','button-pro'),
		'margin_bottom'					=> esc_html__('10','button-pro'),
		'margin_left'					=> esc_html__('10','button-pro'),
		'shadow_offset_left'			=> esc_html__('0','button-pro'),
		'shadow_offset_top'				=> esc_html__('0','button-pro'),
		'shadow_blur'					=> esc_html__('0','button-pro'),
		'shadow_color'					=> esc_html__('#ffffff','button-pro'),
		'shadow_hover_color'			=> esc_html__('#ffffff','button-pro'),							
		'custom_css'					=> '',
	));
}