<?php
/**
 * tcaster Theme Customizer
 *
 * @package tcaster
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function tcaster_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'tcaster_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function tcaster_customize_preview_js() {
	wp_enqueue_script( 'tcaster_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'tcaster_customize_preview_js' );

function enlaces_redes_sociales($wp_customize){

	$wp_customize->add_section('enlaces_redes_sociales', array(
        'title'    => __('Enlaces Redes Sociales', 'tcaster'),
        'description' => 'Diferentes enlaces a redes sociales',
        'priority' => 30,
    ));

 	// WP THEME CUSTOMIZER: COLORS
	$redes = array();
	$redes[] = array(
	    'slug'=>'twitter', 
	    'default' => '',
	    'description' => 'No incluyas el http://twitter.com/ ',
	    'label' => ('Usuario de Twitter'),
	    'type' => 'text',
	   );
	$redes[] = array(
	    'slug'=>'facebook', 
	    'default' => '',
	    'description' => 'No incluyas el http://facebook.com/ ',
	    'label' => ('Enlace de Facebook')
	);
	$redes[] = array(
	    'slug'=>'instagram', 
	    'default' => '',
	    'description' => 'No incluyas el http://instagram.com/ ',
	    'label' => ('Enlace de Instagram')
	);
	$redes[] = array(
	    'slug'=>'rss', 
	    'default' => '',
	    'description' => 'Incluye la direcci&oacute;n completa de tu feed',
	    'label' => ('Enlace de Feed')
	);
	$redes[] = array(
	    'slug'=>'newsletter', 
	    'default' => '',
	    'description' => 'Incluye la direcci&oacute;n completa de tu newsletter',
	    'label' => ('Enlace de Newsletter')
	);

foreach( $redes as $red ) {
    // SETTINGS	
    $wp_customize->add_setting(
        $red['slug'], array(
            'default' => $red['default'],
            'capability' => 
            'edit_theme_options',
            'sanitize_callback' => '',
        )
    );
    // CONTROLS
    $wp_customize->add_control(
            $red['slug'], 
            array('label' => $red['label'], 
            'section' => 'enlaces_redes_sociales',
            'settings' => $red['slug'],
            'description' => $red['description']
            
            )        
    );
}

}

add_action( 'customize_register', 'enlaces_redes_sociales' );