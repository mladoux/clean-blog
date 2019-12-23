<?php

add_filter('next_posts_link_attributes', 'next_posts_link_attributes');
add_filter('previous_posts_link_attributes', 'previous_posts_link_attributes');

function next_posts_link_attributes() {
    return 'class="btn btn-primary float-right"';
}

function previous_posts_link_attributes() {
	return 'class="btn btn-primary float-left"';
}
