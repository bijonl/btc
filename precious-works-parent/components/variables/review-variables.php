<?php $review = get_field('review', $review_id);
$person = get_field('person', $review_id);
$position = get_field('position', $review_id);
$review_image = get_the_post_thumbnail($review_id, 'full')
?>