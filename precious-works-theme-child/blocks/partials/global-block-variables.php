<?php 
// Section Variables
$section_aria_label = get_field('section_aria_label');
$top_section_padding = get_field('top_section_padding');
$bottom_section_padding = get_field('bottom_section_padding');
$section_background_color = get_field('section_background_color');

// Title Variables
$section_title = get_field('section_title');
$section_subtitle = get_field('section_subtitle');
$section_title_tag = get_field('section_title_tag');
$has_title_area = !empty($section_title) || !empty($section_subtitle); 

// Button Variables
$section_button = get_field('section_button');
$section_button_aria_label = get_field('section_button_aria_label');
$has_button_area = !empty($section_button); 


?>