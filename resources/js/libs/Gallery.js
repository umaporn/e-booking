/**
 * @namespace
 * @desc Handles floor gallery management.
 */
const Gallery = (function(){
	/**
	 * @memberOf floor gallery
	 * @access public
	 * @desc Initialize floor gallery module.
	 */
	function initialize(){
		const $floor = $( '#floorGallery' ),
		      $unit  = $( '#unitGallery' );

		changeFloor( $floor.val() );
		changeUnit( $unit.val() );

		$floor.on( 'change', function(){
			let floor = this.value;
			changeFloor( floor );
		} );
		$unit.on( 'change', function(){
			let unit = this.value;
			changeUnit( unit );
		} );

		function changeFloor( floor ){
			$( '.floorGallery img' ).hide();
			$( '.floorGallery #' + floor ).fadeIn();
			$( '.download_floor' ).attr( 'href', $( '#' + floor ).attr( 'src' ) );

		}

		function changeUnit( unit ){
			$( '.unitGallery img' ).hide();
			$( '.unitGallery #' + unit ).fadeIn();
			$( '.download_unit' ).attr( 'href', $( '#' + unit ).attr( 'src' ) );
		}

	}

	return {
		initialize: initialize,
	};
})( jQuery );
