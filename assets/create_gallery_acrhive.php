<?php 

// create a template file for the single post type if it doesn't exist
if(!file_exists(get_stylesheet_directory() . '/archive-' . 'galleries' . '.php')) {
// first check for archive.php in the current theme dir
	if(file_exists(get_stylesheet_directory() . '/archive.php')) {
		copy(get_stylesheet_directory() . '/archive.php', get_stylesheet_directory() . '/archive-' . 'galleries' . '.php');
		// if it didn't exist, check the parent theme directory
		} elseif(file_exists(get_template_directory() . '/archive.php')) {				
		copy(get_template_directory() . '/archive.php', get_stylesheet_directory() . '/archive-' . 'galleries' . '.php');
		// if both of the above failed, check for an index.php
		} else {
		// first look in the current theme dir
			if(file_exists(get_stylesheet_directory() . '/index.php')) {
			// copy index.php if archive.php doesn't exist
			copy(get_stylesheet_directory() . '/index.php', get_stylesheet_directory() . '/archive-' . 'galleries' . '.php');
			// if not found, check the parent theme dir
			} elseif (file_exists(get_stylesheet_directory() . '/index.php')) {
			copy(get_template_directory() . '/index.php', get_stylesheet_directory() . '/archive-' . 'galleries' . '.php');
			}
		}
}
	
?>