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

		let page        = 1,
		    page_filter = 1;

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

		$( document ).on( 'click', '#project-load', function(){

			var project        = $( '.project-filler #project' ).val(),
			    location       = $( '.project-filler #location' ).val(),
			    status         = document.getElementById( 'project_status' ),
			    project_status = 0;
			page_filter        = parseInt( page_filter + 1 );

			let url = $( this ).attr( 'data-url' );

			if( status.checked ){
				project_status = 1;
			} else {
				project_status = 0;
			}

			$.ajax( {
				        url:     url,
				        method:  'GET',
				        data:    'page=' + page_filter + '&project=' + project + '&location=' + location + '&projectStatus=' + project_status,
				        headers: {
					        'X-CSRF-TOKEN': $( 'input[name="csrf-token"]' ).attr( 'content' ),
				        },
				        success: function( result, status, xhr ){
					        if( result.data ){
						        $( '#projects-list-box' ).append( result.data );
					        } else {
						        $( '#roject-load' ).hide();
						        $( '#project-load' ).css( 'display', 'none' );
					        }
				        },
			        } );
		} );

	}

	return {
		initialize: initialize,
	};
})
( jQuery );
