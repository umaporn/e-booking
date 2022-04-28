/**
 * @namespace
 * @desc Handles Lazyload management.
 */
const LoadMore = (function(){
	/**
	 * @memberOf LoadMore
	 * @access public
	 * @desc Initialize LoadMore module.
	 */
	function initialize(){

		let page = 1;
		$( document ).on( 'click', '#loadMore', function(){
			Utility.clearErrors();
			page    = parseInt( page + 1 );
			let url = $( this ).attr( 'data-url' ) + '?page=' + page;
			console.log( ['loadmore', url, page] );
			$.ajax( {
				        url:         url,
				        method:      'GET',
				        cache:       false,
				        contentType: false,
				        processData: false,
				        success:     function( result ){

					        if( result.data ){
						        $( '#content-list-box' ).append( result.data );
					        } else {
						        $( '#loadMore' ).hide();
						        $( '#loadmoreBox' ).css( 'display', 'none' );
					        }

				        },
			        } );
		} );

	}

	return {
		initialize: initialize,
	};
})( jQuery );
