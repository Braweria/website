<?php

function braweria_wp_setup() {
	wp_enqueue_style("google-fonts", "//fonts.googleapis.com/css2?family=Heebo:wght@200;400;500;700;900&display=swap");
	wp_enqueue_style("fontawesome", "//kit.fontawesome.com/5659311191.js");
	wp_enqueue_style("style", get_stylesheet_uri(), NULL, "1.0.0", "all");
	wp_enqueue_script("navigation", get_theme_file_uri("/assets/js/navigation.js"), NULL, "1.0.0", true);
};

?>