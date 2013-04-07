<?php

    # Theme customization options
    function aviator_customize_register($wp_customize) {
        // Add Custom Colors
        $colors = array();
        $colors[] = array( 'slug'=>'text_color', 'default' => '#343434', 'label' => __( 'Text Color', 'aviator' ) );
        $colors[] = array( 'slug'=>'title_text_color', 'default' => '#fff', 'label' => __( 'Title Text Color', 'aviator' ) );
        $colors[] = array( 'slug'=>'home_page_title_text_color', 'default' => '#e0c58a', 'label' => __( 'Home Page Title Text Color', 'aviator' ) );
        $colors[] = array( 'slug'=>'home_page_subtitle_text_color', 'default' => '#80652b', 'label' => __( 'Home Page Subtitle Text Color', 'aviator' ) );
        $colors[] = array( 'slug'=>'home_page_description_text_color', 'default' => '#ccc', 'label' => __( 'Home Page Description Text Color', 'aviator' ) );
        $colors[] = array( 'slug'=>'nav_link_color', 'default' => '#cdcecf', 'label' => __( 'Nav Link Color', 'aviator' ) );
        $colors[] = array( 'slug'=>'active_nav_link_color', 'default' => '#ffd675', 'label' => __( 'Active Nav Link Color', 'aviator' ) );

        foreach($colors as $color)
        {
            // Settings & Controls
            $wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options' ));
            $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'settings' => $color['slug'] )));
        }

        // Add Contact Info
        $wp_customize->add_section( 'aviator_contact_info' , array(
            'title'      => __('Contact Info','aviator'),
            'priority'   => 30,
        ) );
        $contact_info = array();
        $contact_info[] = array( 'slug'=>'contact_address', 'default' => '123 MyStreet St, San Francisco, CA', 'label' => __( 'Contact Address', 'aviator' ) );
        $contact_info[] = array( 'slug'=>'contact_email', 'default' => 'myemail@example.com', 'label' => __( 'Contact Email', 'aviator' ) );

        foreach($contact_info as $contact_info_item)
        {
            // Settings & Controls
            $wp_customize->add_setting( $contact_info_item['slug'], array( 'default' => $contact_info_item['default'], 'type' => 'option', 'capability' => 'edit_theme_options' ));
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, $contact_info_item['slug'], array( 'label' => $contact_info_item['label'], 'section' => 'aviator_contact_info', 'settings' => $contact_info_item['slug'] )));
        }

        // Add description
        $wp_customize->add_setting( 'site_description', array( 'default' => 'Longer description of site', 'type' => 'option', 'capability' => 'edit_theme_options' ));
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'site_description', array( 'label' => 'Description', 'section' => 'title_tagline', 'settings' => 'site_description' )));
    }
    add_action( 'customize_register', 'aviator_customize_register' );


    # Theme background image customization support
    if (function_exists('add_theme_support')) {
        $custom_background_support = array(
            'default-color'          => '000',
            'default-image'          => get_template_directory_uri() . '/images/default-bg-image.jpg',
        );

        add_theme_support( 'custom-background', $custom_background_support );
    }

    # Theme custom CSS
    function aviator_customize_css()
    {
        ?>
        <style type="text/css">
            p,a,a:hover { color: <?php echo get_option('text_color'); ?>; }
            h1,h2,h3 { color: <?php echo get_option('title_text_color'); ?>; }
            .home-page h1 { color:  <?php echo get_option('home_page_title_text_color'); ?>; }
            .home-page h2 { color:  <?php echo get_option('home_page_subtitle_text_color'); ?>; }
            .home-page h3 { color:  <?php echo get_option('home_page_title_text_color'); ?>; }
            .home-page .description { color:  <?php echo get_option('home_page_description_text_color'); ?>; }
            header a {color: <?php echo get_option('nav_link_color'); ?>;}
            header li.current_page_item a {color: <?php echo get_option('active_nav_link_color'); ?>;}
            .page-content h1,.page-content h2,.page-content h3 { color: <?php echo get_option('text_color'); ?>; }
        </style>
    <?php
    }
    add_action( 'wp_head', 'aviator_customize_css');