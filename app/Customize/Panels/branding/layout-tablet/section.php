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


# =======================================================
# Add Section
# =======================================================


$manager->add_section( 'branding--layout-tablet', [
    'title' => esc_html__( 'Layout - Tablet', 'taproot' ),
    'panel' => 'branding',
]);


# =======================================================
# Add Settings & Controls
# =======================================================


// Setting: Branding Layout
$manager->add_setting( 'branding--layout-tablet--layout', [
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage',
]);

$manager->add_control( 'branding--layout-tablet--layout', [
    'type' => 'radio',
    'section' => 'branding--layout-tablet',
    'label' => esc_html__( 'Branding Layout', 'taproot' ),
    'choices' => [
        'vertical' => esc_html__( 'Vertical', 'taproot' ),
        'horizontal' => esc_html__( 'Horizontal', 'taproot' ),
    ],
]);