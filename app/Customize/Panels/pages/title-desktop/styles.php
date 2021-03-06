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


use function Rootstrap\get_theme_mod;


// Var: Title Font Size
$styles->add_var([
    'name' => 'pages--title--font-size',
    'value' => get_theme_mod( 'pages--title-desktop--font-size' ),
    'screen' => 'desktop'
]);


// Var: Title Line Height
$styles->add_var([
    'name' => 'pages--title--line-height',
    'value' => get_theme_mod( 'pages--title-desktop--line-height' ),
    'screen' => 'desktop'
]);
