<?php
//require "../classes/autoload.php";
//TODO: call a controller for the view being rendered
add_theme_support('post-thumbnails');

/*
$defaults = array(
    'default-image' => '',
    'random-default' => false,
    'width' => 0,
    'height' => 0,
    'flex-height' => false,
    'flex-width' => false,
    'default-text-color' => '',
    'header-text' => true,
    'uploads' => true,
    'wp-head-callback' => '',
    'admin-head-callback' => '',
    'admin-preview-callback' => '',
    'video' => false,
    'video-active-callback' => 'is_front_page',
);
add_theme_support( 'custom-header', $defaults );

$defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'default-repeat'         => 'repeat',
	'default-position-x'     => 'left',
        'default-position-y'     => 'top',
        'default-size'           => 'auto',
	'default-attachment'     => 'scroll',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );
*/

//TODO: https://codex.wordpress.org/Content_Width
//TODO: https://codex.wordpress.org/Theme_Logo
//TODO: https://codex.wordpress.org/Using_Custom_Fields_to_attach_images,_links_or_files_to_a_post_easily
//TODO: https://www.wpbeginner.com/wp-tutorials/wordpress-custom-fields-101-tips-tricks-and-hacks/

//https://codex.wordpress.org/Using_Custom_Fields_to_attach_images,_links_or_files_to_a_post_easily
function bd_parse_post_variables(){
// bd_parse_post_variables function for WordPress themes by Nick Van der Vreken.
// please refer to bydust.com/using-custom-fields-in-wordpress-to-attach-images-or-files-to-your-posts/
// for further information or questions.
    global $post, $post_var;

// fill in all types you'd like to list in an array, and
// the label they should get if no label is defined.
// example: each file should get label "Download" if no
// label is set for that particular file.
    $types = array('image' => 'no info available',
        'file' => 'Download',
        'link' => 'Read more...');

// this variable will contain all custom fields
    $post_var = array();
    foreach(get_post_custom($post->ID) as $k => $v) $post_var[$k] = array_shift($v);

// creating the arrays
    foreach($types as $type => $message){
        global ${'post_'.$type.'s'}, ${'post_'.$type.'s_label'};
        $i = 1;
        ${'post_'.$type.'s'} = array();
        ${'post_'.$type.'s_label'} = array();
        while($post_var[$type.$i]){
            echo $type.$i.' - '.${$type.$i.'_label'};
            array_push(${'post_'.$type.'s'}, $post_var[$type.$i]);
            array_push(${'post_'.$type.'s_label'},  $post_var[$type.$i.'_label']?htmlspecialchars($post_var[$type.$i.'_label']):$message);
            $i++;
        }
    }
}

require('plugins/insert_code/index.php');
