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


// Var: Main Font Size
$styles->add_var([
    'name' => 'typography--main-two-col--font-size',
    'value' => get_theme_mod( 'typography--main-desktop-two-col--font-size' ),
    'screen' => 'desktop',
]);


// Var: Main Line Height
$styles->add_var([
    'name' => 'typography--main-two-col--line-height',
    'value' => get_theme_mod( 'typography--main-desktop-two-col--line-height' ),
    'screen' => 'desktop',
]);
