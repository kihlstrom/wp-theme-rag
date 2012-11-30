var rag = window.rag || {};

(function( me, $, undefined ) {

	var scroll_y = 0;
//	var document_width = 0;
	var nav_post_exists = false;
//	var nav_post_scroll_limit = 0;
	var $nav_post = null;
	var $single = null;
/*
	function on_window_resize( event ) {
		if( $( document ).width() !== document_width ) {
			document_width = $( document ).width();
			if( nav_post_exists ) {
				nav_post_scroll_limit = nav_post_get_scroll_limit();
			}
		}
	}
*/
	function nav_post_get_scroll_limit() {
		return $single.offset().top + $single.height() - 353;
	}

	function on_document_scroll( event ) {
		if( window.scrollY !== scroll_y ) {
			scroll_y = window.scrollY;
			if( nav_post_exists ) {
				if( scroll_y >= nav_post_get_scroll_limit() ) {
					$nav_post.addClass( 'nav-post-at-bottom' );
				} else {
					$nav_post.removeClass( 'nav-post-at-bottom' );
				}
			}
		}
	}

	function on_nav_post_mouseenter( event ) {
		$( this ).stop( true ).animate( { width: '20em' }, 257, 'swing' );
	}

	function on_nav_post_mouseleave( event ) {
		$( this ).stop( true ).animate( { width: '2em' }, 257, 'swing' );
	}


	function comments_init() {
		$('input[type=text], input[type=password], textarea').focus(function () {
			var textObj = $(this);
			if (textObj.val() == textObj[0].defaultValue){
				textObj.val('').css({'color':'#000'});
			}
		}).blur(function () {
			var textObj = $(this);
			if ($.trim(textObj.val()) == '') {
				textObj.val(textObj[0].defaultValue).css({'color':'#999'});
			}
		});
	}

	me.init = function() {
		$single = $( '.single' );
		$nav_post = $( '.nav-post' );
		nav_post_exists = $nav_post.length >= 1;
		if( nav_post_exists ) {
			$nav_post.find( 'a' )
				.on( 'mouseenter', on_nav_post_mouseenter )
				.on( 'mouseleave', on_nav_post_mouseleave )
			;
			$( document ).on( 'scroll', on_document_scroll );
		}
//		nav_post_scroll_limit = nav_post_get_scroll_limit();
		comments_init();
	};

	return me;

})( rag, jQuery );

rag.init();