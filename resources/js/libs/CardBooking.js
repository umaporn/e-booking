/**
 * @namespace
 * @desc Handles card booking
 */
const CardBooking = (function(){

    /**
     * @memberOf CardBooking
     * @desc Initialize Booking card.
     * @access public
     */
    function initialize(){
        var elementClicked = false;
        // scroll functions
        $( window ).scroll( function( e ){

            var scroll = $( window ).scrollTop();
            if( scroll >= 1 ){
                if( window.innerWidth >= 768 ){
                    // alert("window "+window.innerWidth+" / doc "+document.documentElement.scrollWidth)
                    if( !elementClicked ){
                        $( '#hide-detail-booking' ).css( 'display', 'block' );
                        $( '#show-detail-booking' ).css( 'display', 'none' );
                    }

                    $( '#hide-detail-booking' ).click( function(){
                        $( '#show-detail-booking' ).css( 'display', 'block' );
                        $( '#show-detail-booking' ).addClass( 'toggle' );
                        $( '#btn-icon-down' ).css( 'display', 'block' );
                        $( '#hide-detail-booking' ).css( 'display', 'none' );
                        elementClicked = true;
                    } );

                    $( '#btn-icon-down' ).click( function(){
                        $( '#hide-detail-booking ' ).css( 'display', 'block' );
                        $( '#show-detail-booking' ).css( 'display', 'none' );
                    } );

                    if( !elementClicked ){
                        setTimeout( function(){
                            $( '#show-detail-booking' ).css( 'display', 'block' );
                            $( '#show-detail-booking ' ).addClass( 'toggle' );
                            $( '#btn-icon-down' ).css( 'display', 'block' );
                            $( '#hide-detail-booking' ).css( 'display', 'none' );
                            elementClicked = true;
                        }, 240000 );

                    }

                }
            } else {
                $( '#hide-detail-booking' ).css( 'display', 'none' );
                $( '#show-detail-booking ' ).removeClass( 'toggle' );
                $( '#show-detail-booking' ).css( 'display', 'block' );
            }

        } );

    }

    return {
        initialize: initialize,
    };
})( jQuery );
