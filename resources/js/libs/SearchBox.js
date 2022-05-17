/**
 * @namespace
 * @desc Handles menu management.
 */
const SearchBox = (function(){

	function initialize(){

		$( '#projectSelect' ).on( 'change', function(){
			searchOption();
		} );
		$( '#propertySelect' ).on( 'change', function(){
			searchOption();
		} );
		$( '#priceSelect' ).on( 'change', function(){
			searchOption();
		} );
		$( '#unitSelect' ).on( 'change', function(){
			searchOption();
		} );
		$( '#locationSelect' ).on( 'change', function(){
			searchOption();
		} );

		function searchOption(){
			var project      = $( '#projectSelect' ).val(),
			    propertyType = $( '#propertySelect' ).val(),
			    price        = $( '#priceSelect' ).val(),
			    unitType     = $( '#unitSelect' ).val(),
			    location     = $( '#locationSelect' ).val();
			console.log(['search',project,propertyType,price,unitType,location]);
			$.ajax( {
				        url:    'search',
				        method: 'POST',
						data: 'project='+project,
				        headers: {
					        'X-CSRF-TOKEN': $('input[name="csrf-token"]').attr('content')
				        },
				        success: function( result, status, xhr ){
				        	console.log(result)
				        }
			        });

		}

	}

	return {
		initialize: initialize,
	};
})( jQuery );