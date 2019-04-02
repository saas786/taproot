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


// Var: Body Text Color
$styles->add_var([
    'name' => 'colors--theme--text',
    'value' => get_theme_mod( 'colors--theme--text', null, true ),
]);


// Var: Accent Color
$styles->add_var([
    'name' => 'colors--theme--accent',
    'value' => get_theme_mod( 'colors--theme--accent', null, true ),
]);


// Var: Accent Contrast Color
$styles->add_var([
    'name' => 'colors--theme--accent-contrast',
    'value' => get_theme_mod( 'colors--theme--accent-contrast', null, true ),
]);


// Var: Meta Light
$styles->add_var([
    'name' => 'colors--theme--meta-light',
    'value' => get_theme_mod( 'colors--theme--meta-light', null, true ),
]);


// Var: Meta Medium
$styles->add_var([
    'name' => 'colors--theme--meta-medium',
    'value' => get_theme_mod( 'colors--theme--meta-medium', null, true ),
]);


// Var: Meta Dark
$styles->add_var([
    'name' => 'colors--theme--meta-dark',
    'value' => get_theme_mod( 'colors--theme--meta-dark', null, true ),
]);
