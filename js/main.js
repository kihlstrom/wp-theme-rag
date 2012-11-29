var rag = window.rag || {};

(function( me, $, undefined ) {

	function on_nav_post_mouseenter( event ) {
		$( this ).stop( true ).animate( { width: '20em' }, 257, 'swing' );
	}

	function on_nav_post_mouseleave( event ) {
		$( this ).stop( true ).animate( { width: '2em' }, 257, 'swing' );
	}

	me.init = function() {
		$( '.nav-post a' )
			.on( 'mouseenter', on_nav_post_mouseenter )
			.on( 'mouseleave', on_nav_post_mouseleave )
		;
	}

	return me;

})( rag, jQuery );

rag.init();