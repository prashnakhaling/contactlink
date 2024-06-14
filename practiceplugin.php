<?php
/**
 * Plugin Name: practiceplugin
 * Plugin URI:
 * Description: Test
 * Version :0.1
 * Author: Code Pixelz Media
 * Author URI: 
 **/
/* Main Plugin File */

//  function to check if the post is a page or a post

function contactpage($contact) {
    if (get_post_type() == 'page'){
    $contact_page = get_page_by_path('contact-us'); // to get the link of the page by its slug particularly for pages
    $contact_link = get_permalink($contact_page->ID); 
    $contact = '<p>Need More Help? <a href="' . $contact_link . '">Contact us</a>.</p>';
    }
    return $contact;
}
add_filter( 'the_content','contactpage');


//function that creates the dropdown
