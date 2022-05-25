/**
 * @namespace
 * @desc Handles Project page.
 */
const ProjectFilter = (function(){

	function initialize(){
		console.log( 'filter' );

		$( '.project-filler select' ).on( 'change', function(){
			filter();
		} );

		$( '.project-filler input' ).on( 'change', function(){
			filter();
		} );

		function filter(){
			var project        = $( '.project-filler #project' ).val(),
			    location       = $( '.project-filler #location' ).val(),
			    status         = document.getElementById( 'project_status' ),
			    project_status = 0;

			if( status.checked ){
				project_status = 1;
			} else {
				project_status = 0;
			}

			$.ajax( {
				        url:     'projects/filter',
				        method:  'GET',
				        data:    'project=' + project + '&location=' + location + '&projectStatus=' + project_status,
				        headers: {
					        'X-CSRF-TOKEN': $( 'input[name="csrf-token"]' ).attr( 'content' ),
				        },
				        success: function( result, status, xhr ){
					        console.log( result );
					        $( '#projects-list-box' ).html( result.data );
				        },
			        } );
		}

	}

	return {
		initialize: initialize,
	};
})( jQuery );