<?php
// add_action( 'customize_register' , 'my_theme_options' );

// function my_theme_options( $wp_customize ) {
        
//     $wp_customize->add_section( 
//         'mytheme_footer_options', 
//         array(
//             'title'       => __( 'Footer Background Settings', 'mytheme' ),
//             'priority'    => 100,
//             'capability'  => 'edit_theme_options',
//             'description' => __('Change footer options here.', 'mytheme'), 
//         ) 
//     );

//     $wp_customize->add_setting( 'footer_bg_color',
// 	  array(
// 		'default' => 'f1f1f1',
// 		'transport' => 'postMessage'
// 	   )
//     );

//     $wp_customize->add_control( new WP_Customize_Color_Control( 
//         $wp_customize, 
//         'footer_bg_color_control',
//         array(
//             'label'    => __( 'Footer Background Color', 'mytheme' ), 
//             'section'  => 'mytheme_footer_options',
//             'settings' => 'footer_bg_color',
//             'priority' => 10,
//         ) 
//     ));
    

// }

// add_action( 'wp_head' , 'my_dynamic_css' );

// function my_dynamic_css() {
/*	?> *
<!-- // 	<style type='text/css'> -->
<!-- // 	#site-footer {
// 		background-color:#<?php echo get_theme_mod('footer_bg_color') ?> ;
// 	} -->
<!-- // 	</style>
// 	<?php //-->
// }

// add_action( 'customize_preview_init' , 'my_customizer_preview' );
// function my_customizer_preview() {
// 	wp_enqueue_script( 
// 		'my_theme_customizer',
// 		get_template_directory_uri() . '/js/theme-customizer.js',
// 		array(  'jquery', 'customize-preview' ),
// 		'',
// 		true
// 	);

// }
// <script>
// ( function( $ ) {

// 	wp.customize( 'footer_bg_color', function( value ) {
// 		value.bind( function( newval ) {
// 			$('#footer').css( 'background-color', newval );
// 		} );
// 	} );
	
// } )( jQuery );
// </script>
*/

//Flexible Sidebar Control Using Customizer
// function Ari_customize_register( $wp_customize ) {
  
//     $colors = array();
//     $colors[] = array(
//       'slug'=>'content_text_color', 
//       'default' => '#333',
//       'label' => __('Content Text Color', 'Ari')
//     );
//     $colors[] = array(
//       'slug'=>'content_link_color', 
//       'default' => '#88C34B',
//       'label' => __('Content Link Color', 'Ari')
//     );
//     foreach( $colors as $color ) {
//       // SETTINGS
//       $wp_customize->add_setting(
//         $color['slug'], 
//         array(
//             'default' => $color['default'],
//             'type' => 'option', 
//             'capability' => 'edit_theme_options'
//         )
//       );
//       // CONTROLS
//     $wp_customize->add_control(
//         new WP_Customize_Color_Control(
//           $wp_customize,
//           $color['slug'], 
//           array(
//             'label' => $color['label'], 
//             'section' => 'colors',
//             'settings' => $color['slug'])
//         )
//       );
//     }

//     $wp_customize->add_setting('sidebar_position', array());
//         $wp_customize->add_control('sidebar_position', array(
//         'label'      => __('Sidebar position', 'Ari'),
//         'section'    => 'layout',
//         'settings'   => 'sidebar_position',
//         'type'       => 'radio',
//         'choices'    => array(
//             'left'   => 'left',
//             'right'  => 'right',
//         ),
//     ));

//     $wp_customize->add_section('layout' , array(
//         'title' => __('Layout','Ari'),
//     ));
// }
// add_action( 'customize_register', 'Ari_customize_register' );

// $sidebar_position = get_theme_mod('sidebar_position');

// add_action('wp_head',function(){
//   echo "<style type='text/css'>
//           .sidebar {
//               float:$sidebar_position}
//        </style>";
//    });
//
