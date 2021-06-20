<?php
/**
 * Customizer settings: Other Pages > Search Page
 *
 * @package Suki
 **/

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) exit;

$section = 'suki_section_search_results';

/**
 * ====================================================
 * Content Header
 * ====================================================
 */

// Title text
$key = 'search_results_title_text';
$wp_customize->add_setting( $key, array(
	'default'     => suki_array_value( $defaults, $key ),
	'sanitize_callback' => array( 'Suki_Customizer_Sanitization', 'text' ),
) );
$wp_customize->add_control( $key, array(
	'section'     => $section,
	'label'       => esc_html__( 'Title text', 'suki' ),
	'description' => esc_html__( 'Use {{keyword}} to display search keyword.', 'suki' ),
	'priority'    => 21,
	'input_attrs' => array(
		'placeholder' => esc_html__( 'Search results for: "{{keyword}}"', 'suki' ),
	),
) );

/**
 * ====================================================
 * Results List
 * ====================================================
 */

// Heading: Results List
$wp_customize->add_control( new Suki_Customize_Control_Heading( $wp_customize, 'heading_search_results_layout', array(
	'section'     => $section,
	'settings'    => array(),
	'label'       => esc_html__( 'Results List', 'suki' ),
	'priority'    => 10,
) ) );

// No results found text
$key = 'search_results_not_found_text';
$wp_customize->add_setting( $key, array(
	'default'     => suki_array_value( $defaults, $key ),
	'sanitize_callback' => array( 'Suki_Customizer_Sanitization', 'textarea' ),
) );
$wp_customize->add_control( $key, array(
	'type'        => 'textarea',
	'section'     => $section,
	'label'       => esc_html__( 'No results found text', 'suki' ),
	'priority'    => 10,
	'input_attrs' => array(
		'placeholder' => esc_html__( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'suki' ),
	),
) );