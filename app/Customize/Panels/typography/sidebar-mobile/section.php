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


$manager->add_section( 'typography--sidebar-mobile', [
    'title' => esc_html__( 'Sidebar', 'taproot' ),
    'panel' => 'typography',
]);


# =======================================================
# Add Settings & Controls
# =======================================================



// Font Size
range( $manager, 'typography--sidebar-mobile--font-size', [
    'section' => 'typography--sidebar-mobile',
    'label' => esc_html__('Font Size', 'taproot'),    
    'atts' => range_atts( 'heading' )
]);


// Line Height
range( $manager, 'typography--sidebar-mobile--line-height', [
    'section' => 'typography--sidebar-mobile',
    'label' => esc_html__('Line Height', 'taproot'),    
    'atts' => range_atts( 'line-height' )
]);
