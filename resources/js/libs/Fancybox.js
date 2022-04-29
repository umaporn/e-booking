/**
 * @namespace
 * @desc fancybox
 */
const Fancybox = (function(){
    /**
     * @memberOf Fancybox gallery
     * @desc Initialize Fancybox module.
     * @access public
     */
    function initialize(){
        $( '#button-viewmore' ).on( 'click', function(){
            console.log( 'hello' );
            alert( 'Hello toon' );
        } );
    };
    return {
        initialize: initialize,
    };
})( jQuery );
