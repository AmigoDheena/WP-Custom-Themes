<?php

function load_stylesheets(){
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), 5.0, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('bootstrap-icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), 'all');
    wp_enqueue_style('bootstrap-icons');

    wp_register_style('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(),1, 'all');
    // wp_enqueue_style('aos');

    wp_register_style('remixicon', get_template_directory_uri() . '/assets/vendor/remixicon/remixicon.css', array(), 'all');
    wp_enqueue_style('remixicon');

    wp_register_style('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', array(), 'all');
    wp_enqueue_style('swiper');

    wp_register_style('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', array(), 'all');
    wp_enqueue_style('glightbox');

    wp_register_style('mail-style', get_template_directory_uri() . '/assets/css/style.css', array(), 'all');
    wp_enqueue_style('mail-style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_scripts(){
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.js', array(), 5.0, 1, 1 );
    wp_enqueue_script('bootstrap');

    wp_register_script('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(),'',1,1 );
    // wp_enqueue_script('aos');

    wp_register_script('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(),'',1,1 );
    wp_enqueue_script('swiper');

    wp_register_script('purecounter', get_template_directory_uri() . '/assets/vendor/purecounter/purecounter.js', array(),'',1,1 );
    wp_enqueue_script('purecounter');

    wp_register_script('isotope', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(),'',1,1 );
    wp_enqueue_script('isotope');

    wp_register_script('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(),'',1,1 );
    wp_enqueue_script('glightbox');
}
add_action('wp_enqueue_scripts', 'load_scripts');


/*
<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>