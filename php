function custom_get_the_excerpt() {
    $excerpt = get_the_excerpt(); 
    return '<span style="color: #000;">' . $excerpt . '</span>'; 
}
add_shortcode('output_post_excerpt', 'custom_get_the_excerpt');


This is to add a shortcode to page

[output_post_excerpt]
