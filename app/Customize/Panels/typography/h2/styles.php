<?php
/**
 * Styles for our section.
 *
 * This file creates the front end styles for our customizer controls. 
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


// Var: Heading color
$styles->add([
    'selector' => 'h2',
    'styles' => [ 'color' => get_theme_mod( 'typography--h2--color' ) ],
]);


// Font Family
$styles->add([
    'selector' => 'h2',
    'styles' => [
        'font-family' => get_font_family( get_theme_mod( 'typography--h2--font-family' ) )
    ]
]);


// Font Styles
$styles->add([
    'selector' => 'h2',
    'styles' => get_font_styles( 'typography--h2--font-styles' )
]);
