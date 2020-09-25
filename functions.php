<?php

function braweria_wp_setup() {
	wp_enqueue_style("google-fonts", "//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap");
	wp_enqueue_script("fontawesome", "//kit.fontawesome.com/5659311191.js");
	wp_enqueue_style("style", get_stylesheet_uri(), NULL, "1.0.0", "all");
	wp_enqueue_script("navigation", get_theme_file_uri("/assets/js/navigation.js"), NULL, "1.0.0", true);
};

?>