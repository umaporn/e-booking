$.ajaxSetup( {
	             headers: {
		             'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' ),
	             },
             } );

$( document )
	.ready( function(){
		/** Initialize all JavaScript modules. */
		LoadMore.initialize();
		Search.initialize();
		Confirmation.initialize();
		Form.initialize();
		PasswordToggle.initialize();

	} );