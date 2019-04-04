<?php
/**
 * Section setup.
 *
 * This file adds the section, settings and controls to the customizer. 
 *
 * @package   Taproot
 * @author    Sky Shabatura <theme@sky.camp>
 * @copyright 2018 Sky Shabatura
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://taproot-theme.com
 */


use function Taproot\Customize\range;
use function Taproot\Customize\range_atts;


# =======================================================
# Add Section
# =======================================================


$manager->add_section( 'posts--title-tablet', [
    'title' => esc_html__( 'Title - Tablet', 'taproot' ),
    'panel' => 'posts',
]);


# =======================================================
# Add Settings & Controls
# =======================================================


// Setting: Title Font Size
range( $manager, 'posts--title-tablet--font-size', [
    'section' => 'posts--title-tablet',
    'label' => esc_html__('Title Font Size', 'taproot'),    
    'atts' => range_atts( 'heading' )
]);


// Setting: Title Line Height
range( $manager, 'posts--title-tablet--line-height', [
    'section' => 'posts--title-tablet',
    'label' => esc_html__('Title Line Height', 'taproot'),    
    'atts' => range_atts( 'line-height' )
]);
