<?php

add_action('init','of_options');

if (!function_exists('of_options')) {
function of_options(){
	
// VARIABLES
$themename = wp_get_theme(STYLESHEETPATH . '/style.css');
$themename = $themename['Name'];
$shortname = "of";

// Populate OptionsFramework option in array for use in theme
global $of_options;
$of_options = get_option('of_options');

$GLOBALS['template_path'] = OF_DIRECTORY;

//Access the WordPress Categories via an Array
$of_categories = array();  
$of_categories_obj = get_categories('hide_empty=0');
foreach ($of_categories_obj as $of_cat) {
    $of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
$categories_tmp = array_unshift($of_categories, "Select a category:");    
       
//Access the WordPress Pages via an Array
$of_pages = array();
$of_pages_obj = get_pages('sort_column=post_parent,menu_order');    
foreach ($of_pages_obj as $of_page) {
    $of_pages[$of_page->ID] = $of_page->post_name; }
$of_pages_tmp = array_unshift($of_pages, "Select a page:");       

// Image Alignment radio box
$options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 

// Image Links to Options
$options_image_link_to = array("image" => "The Image","post" => "The Post"); 

//Testing 
$options_select = array("one","two","three","four","five"); 
$options_radio = array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five"); 

//Stylesheets Reader
$alt_stylesheet_path = OF_FILEPATH . '/styles/';
$alt_stylesheets = array();

if ( is_dir($alt_stylesheet_path) ) {
    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) { 
        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) {
            if(stristr($alt_stylesheet_file, ".css") !== false) {
                $alt_stylesheets[] = $alt_stylesheet_file;
            }
        }    
    }
}

//More Options
$uploads_arr = wp_upload_dir();
$all_uploads_path = $uploads_arr['path'];
$all_uploads = get_option('of_uploads');
$other_entries = array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
$body_repeat = array("no-repeat","repeat-x","repeat-y","repeat");
$body_pos = array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");

// Set the Options Array
$options = array();
/*--------------------------Facebook Section---------------------------*/
$options[] = array( "name" => "Facebook feed setting Settings",
                    "type" => "heading");
					


$options[] = array( "name" => "Facebook App ID/API Key",
					"desc" => "Get your App ID from <a href='https://developers.facebook.com/apps'>developers.facebook.com/apps</a>.",
					"id" => $shortname."_lyhfbaid",
					"std" => "",
					"type" => "text");

$options[] = array( "name" => "Facebook App Secret",
					"desc" => "Enter Your Facebook App Secret id.",
					"id" => $shortname."_lyhfbasid",
					"std" => "",
					"type" => "text");

$options[] = array( "name" => "Facebook Page ID",
					"desc" => "Enter Your Facebook Page ID.",
					"id" => $shortname."_lyhfbpid",
					"std" => "",
					"type" => "text");


/*--------------------------Flickr Section---------------------------*/
$options[] = array( "name" => "Flickr feed setting Settings",
                    "type" => "heading");
					


$options[] = array( "name" => "Flickr App ID/API Key",
					"desc" => "Enter Your Flickr App ID/API Key",
					"id" => $shortname."_lyhflaid",
					"std" => "",
					"type" => "text");

$options[] = array( "name" => "Flickr App Secret",
					"desc" => "Enter Your Flickr App Secret id.",
					"id" => $shortname."_lyhflasid",
					"std" => "",
					"type" => "text");

$options[] = array( "name" => "Flickr Tag Name",
					"desc" => "Enter Your Flickr Tag Name like: pizza, pan pizza etc.",
					"id" => $shortname."_lyhfltg",
					"std" => "",
					"type" => "text");


update_option('of_template',$options); 					  
update_option('of_themename',$themename);   
update_option('of_shortname',$shortname);





}
}


?>
