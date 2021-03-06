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


// Hide when fixed?
$hide_when_fixed = get_theme_mod( 'branding--logo-fixed--hide' );

if( $hide_when_fixed ) {
    $styles->add([
        'selector' => '.app-header--fixed .app-header__logo-link',
        'styles' => ['display' => 'none'],
        'screen' => 'desktop',
    ]);
}
else {

    $logo_styles = [];
    $logo_styles['width'] = get_theme_mod( 'branding--logo-fixed--width' );
    $logo_gutter = get_theme_mod( 'branding--logo-fixed--gutter' );

    if( 'horizontal' === get_theme_mod( 'branding--layout-desktop--layout', null, true ) && $logo_gutter ) {
        $logo_styles['margin'] = sprintf( '0 %s 0 0', $logo_gutter );
    }
    elseif( $logo_gutter ) {
        $logo_styles['margin'] = sprintf( '0 0 %s 0', $logo_gutter );
    }

    // Logo Styles
    $styles->add([
        'selector' => '.app-header--fixed .app-header__logo-link',
        'styles' => $logo_styles,
        'screen' => 'desktop',
    ]);
}
