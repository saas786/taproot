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


// Link Color
$styles->add([
    'selector' => '.postnav__link a:link, .postnav__link a:visited',
    'styles' => [
        'color' => get_theme_mod( 'posts--nav--color' ),
    ],
]);


// Link Color: Hover
$styles->add([
    'selector' => '.postnav__link a:hover',
    'styles' => [
        'color' => get_theme_mod( 'posts--nav--color--hover' ),
    ],
]);


// Var: Link Font Size
$styles->add_var([
    'name' => 'posts--nav--font-size',
    'value' => get_theme_mod( 'posts--nav--font-size' ),
]);
