/**
 * Customize controls preview scripts
 *
 * This file binds javascript actions to cutomize controls.
 *
 * @package   Taproot
 * @author    Sky Shabatura <theme@sky.camp>
 * @copyright 2018 Sky Shabatura
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 */


// Logo width
wp.customize( 'branding--logo-tablet--width', function( value ) {
    value.bind( function( to ) {
        rootstrap.var({
            name: 'branding--logo--width',
            value: to,
            screen: 'tablet-and-up',
        });
    });
});


// Logo gutter
wp.customize( 'branding--logo-tablet--gutter', function( value ) {
    value.bind( function( to ) {
        rootstrap.var({
            name: 'branding--logo--gutter',
            value: to,
            screen: 'tablet-and-up',
        });
    });
});
