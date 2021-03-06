<?php
/**
 * Styles output on block editor admin pages. 
 * 
 * This file adds customizer setting styles to the block editor. 
 *
 * @package   Taproot
 * @author    Sky Shabatura <theme@sky.camp>
 * @copyright 2018 Sky Shabatura
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://taproot-theme.com
 */


use function Taproot\Customize\get_font_family;
use function Taproot\Customize\get_font_styles;
use function Rootstrap\get_theme_mod;


# =======================================================
# Headings - Color
# =======================================================


// Var: Heading Color
$styles->add_var([
    'name' => 'typography--headings--text-color',
    'value' => get_theme_mod( 'typography--headings--text-color' ),
]);


# =======================================================
# Headings - Font Family
# =======================================================


// Var: Font Family
$styles->add_var([
    'name' => 'typography--headings--font-family',
    'value' => get_font_family( get_theme_mod( 'typography--headings--font-family' ) ),
]);


# =======================================================
# Headings - Font Styles
# =======================================================


// Headings Font Style
$styles->add([
    'selector' => 'h1, h2, h3, h4, h5, h6',
    'styles' => get_font_styles( 'typography--headings--font-styles' )
]);
