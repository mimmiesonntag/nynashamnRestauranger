<?php

  add_action("init", "register_my_menu"); 
  add_theme_support( 'post-thumbnails' ); 
  add_theme_support( 'custom-background' );     
  add_shortcode('wpbsearch', 'get_search_form');
  

function theme_name_scripts() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' ); 
    }
    add_action('wp_enqueue_scripts', 'theme_name_scripts');
    
            
function local_register_sidebars() {
 
    register_sidebar(
    array(
    'id' => 'social-knappar',
    'name' => __( 'Social Knappar' ),
                   'description' => __( 'Social Knappar' ),
                   'before_widget' => '<div id="" class="widget %2$s">',
                   'after_widget' => '</div>',
                   'before_title' => '<h3 class="widgettitle">',
                   'after_title' => '</h3>',
                   )
                    );

                    register_sidebar(
                        array(
                       'id' => 'category',
                       'name' => __( 'category' ),
                       'description' => __( 'category' ),
                       'before_widget' => '<div id="" class="widget %2$s">',
                       'after_widget' => '</div>',
                       'before_title' => '<h3 class="widgettitle">',
                       'after_title' => '</h3>',
                       )
                        );

                        register_sidebar(
                            array(
                           'id' => 'category2',
                           'name' => __( 'category2' ),
                           'description' => __( 'category2' ),
                           'before_widget' => '<div id="" class="widget %2$s">',
                           'after_widget' => '</div>',
                           'before_title' => '<h3 class="widgettitle">',
                           'after_title' => '</h3>',
                           )
                            );

                            register_sidebar(
                                array(
                               'id' => 'category3',
                               'name' => __( 'category3' ),
                               'description' => __( 'category3' ),
                               'before_widget' => '<div id="" class="widget %2$s">',
                               'after_widget' => '</div>',
                               'before_title' => '<h3 class="widgettitle">',
                               'after_title' => '</h3>',
                               )
                                );

               
            }

            add_action( 'widgets_init','local_register_sidebars');

        function register_my_menu(){
            register_nav_menus(
                array(
                   'hem' => __( ' hem' ),
                   'kategorier' => __( 'kategorier' ),    
                   'Nynashamn' => __( ' Nynashamn ' ),        
                    )
                );
            }

            function google_fonts() {
                wp_enqueue_style('google-fonts',
               'https://fonts.googleapis.com/css2?family=Smooch+Sans:wght@300;500&display=swap', true );
               }
          
               
          
               add_action( 'wp_enqueue_scripts', 'google_fonts' );?>