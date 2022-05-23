/**
 * @namespace
 * @desc Handles menu management.
 */
const SearchBox = (function(){

	function initialize(){

		$( '#projectSelect' ).on( 'change', function(){
			searchOption( 'project' );
		} );
		$( '#propertySelect' ).on( 'change', function(){
			searchOption( 'type' );

		} );
		$( '#locationSelect' ).on( 'change', function(){
			searchOption( 'location' );
		} );
		// $( '#priceSelect' ).on( 'change', function(){
		// 	searchOption();
		// } );
		// $( '#unitSelect' ).on( 'change', function(){
		// 	searchOption();
		// } );

		$( '.search-button' ).on( 'click', function(){
			var project          = $( '#projectSelect' ).val(),
			    propertyType     = $( '#propertySelect' ).val(),
			    unitType         = $( '#unitSelect' ).val(),
			    location         = $( '#locationSelect' ).val(),
			    price            = $( '#priceSelect' ).val();
			var url              = '/' + project + '/' + propertyType + '/' + location + '/' + unitType + '/' + price;
			window.location.href = url;
		} );

		function searchOption( selector ){
			var project      = $( '#projectSelect' ).val(),
			    propertyType = $( '#propertySelect' ).val(),
			    unitType     = $( '#unitSelect' ).val(),
			    location     = $( '#locationSelect' ).val();

			console.log( ['search', project, propertyType, unitType, location] );
			$.ajax( {
				        url:     'search',
				        method:  'POST',
				        data:    'project=' + project + '&type=' + propertyType + '&unit=' + unitType + '&location=' + location,
				        headers: {
					        'X-CSRF-TOKEN': $( 'input[name="csrf-token"]' ).attr( 'content' ),
				        },
				        success: function( result, status, xhr ){
					        console.log( result );
					        var array = JSON.parse( '[' + result + ']' );
					        console.log( array );

					        $( '#projectSelect' ).empty();
					        $( '#unitSelect' ).empty();
					        $( '#locationSelect' ).empty();
					        $( '#propertySelect' ).empty();

					        $( '#projectSelect' ).append( '<option value="all">Select Project</option>' );
					        $.each( array[0].project, function( i, itemProject ){
						        $( '#projectSelect' ).append( $( '<option >', {
							        value: itemProject.slug,
							        text:  itemProject.title,
						        } ) );
					        } );
					        $( '#projectSelect option[value=' + project + ']' ).prop( 'selected', true );

					        $.each( array[0].unitType, function( j, itemUnit ){
						        $( '#unitSelect' ).append( $( '<option>', {
							        value: itemUnit.Unit_type_name_English,
							        text:  itemUnit.Unit_type_name_English,
						        } ) );
					        } );

					        $( '#locationSelect' ).append( '<option value="all">Select Project</option>' );
					        $.each( array[0].location, function( k, itemLocation ){
						        $( '#locationSelect' ).append( $( '<option>', {
							        value:   itemLocation,
							        text:    itemLocation,
							        options: (itemLocation === location) ? 'selected' : '',
						        } ) );
					        } );
					        $( '#locationSelect option[value=' + location + ']' ).prop( 'selected', true );

					        $( '#propertySelect' ).append( '<option value="all">Select Project</option>' );
					        $.each( array[0].projectType, function( p, itemtype ){
						        $( '#propertySelect' ).append( $( '<option>', {
							        value:   itemtype,
							        text:    itemtype,
							        options: (itemtype === propertyType) ? 'selected' : '',
						        } ) );
					        } );
					        $( '#propertySelect option[value=' + propertyType + ']' ).prop( 'selected', true );

				        },
			        } );

		}

	}

	return {
		initialize: initialize,
	};
})( jQuery );