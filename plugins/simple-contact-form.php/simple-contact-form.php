<?php
/**
 *  Plugin Name: Simple Contact Form
 *  Description: A form with fillable data emailed to our company
 *  Author: Mike Rechkemmer
 *  Author URI: https://www.mikerechkemmer.com
 *  Version: 1.0.0
 *  Text Domain: simple-contact-form
 * 
 */

 if( !defined('ABSPATH'))
 {
    echo '<div>';
    echo '<h1>Access Denied</h1>';
    echo '<p>You tried to access a page you do not have authorization for.';
    echo '<a class="button" href="https://www.mikerechkemmer.com">Go Back Home</a>';
    echo '</div>';
    exit;
 }

 class SimpleContactForm {
    public function __construct()
    {
        add_action('init', array($this, 'create_custom_post_type'));
    }

    public function create_custom_post_type(){
        echo "<script>alert('It Loadeded')</script>";

        $args = array(
            'public' => true,
            'has_archive' => true,
            'supports' => array('title'),
            'publicly_queryable' => false,
            'capability' => 'manage_options',
            'labels' => array(
                'name' => 'Contact Form',
                'singular_name' => 'Contact Form Entry'
            ),
            'menu_icon' => 'dashicons-media-text',
        );
        register_post_type('simple_contact_form', $args);
    }
 }

 new SimpleContactForm;