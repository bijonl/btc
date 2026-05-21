<?php 

$permalink = get_the_permalink($id); 
$featured_image = get_the_post_thumbnail($id, 'full', array('class' => '')); 
$default_blog_image = get_field('default_blog_image', 'options');
$title = get_the_title($id); 
$publish_date = get_the_date($id); 
$terms = get_the_terms($id, 'category'); 
$author_display_name = get_field('author_display_name', $id);

if ($terms) {
    $terms = array_filter($terms, function($term) {
        return $term->term_id !== 1;
    });
}

$excerpt = get_the_excerpt($id); 
$blog_intro = get_field('blog_intro', $id); 





?>