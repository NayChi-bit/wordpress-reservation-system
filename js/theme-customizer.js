(function( $ ) {
    wp.customize( 'mytheme_hero_title', function( value ) {
        value.bind( function( newval ) {
            $( '.hero-ttl01' ).text( newval );
        });
    });

    if ( typeof wp !== 'undefined' && typeof wp.customize !== 'undefined' ) {
        wp.customize.bind( 'preview-ready', function() {
            $( 'body' ).on( 'click', '.customize-partial-edit-shortcut-button', function( event ) {
                event.preventDefault();
                wp.customize.preview.send( 'edit-shortcut-click', 'mytheme_hero_title' );
            });
        });
    }
})( jQuery );

(function( $ ) {
    wp.customize( 'mytheme_hero_title', function( value ) {
        value.bind( function( newval ) {
            $( '.hero-ttl01' ).text( newval );
        });
    });

    if ( typeof wp !== 'undefined' && typeof wp.customize !== 'undefined' ) {
        wp.customize.bind( 'preview-ready', function() {
            console.log("preview-ready event bound in theme-customizer.js");
            $( 'body' ).on( 'click', '.customize-partial-edit-shortcut-button', function( event ) {
                event.preventDefault();
                wp.customize.preview.send( 'edit-shortcut-click', 'mytheme_hero_title' );
            });
        });
    }
})( jQuery );
