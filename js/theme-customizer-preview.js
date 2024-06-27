(function( $ ) {
    $(document).ready(function() {
        console.log("theme-customizer-preview.js loaded");
        if ( typeof wp !== 'undefined' && typeof wp.customize !== 'undefined' ) {
            wp.customize.bind( 'preview-ready', function() {
                console.log("preview-ready event bound in theme-customizer-preview.js");
                wp.customize.preview.bind( 'edit-shortcut-click', function( controlId ) {
                    console.log("edit-shortcut-click received for controlId:", controlId);
                    wp.customize.control( controlId ).focus();
                });
            });
        }
    });
})( jQuery );
