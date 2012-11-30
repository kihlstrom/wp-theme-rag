var rag = window.rag || {};

(function( me, $, undefined ) {

	var has_post_navigation = false;
	var scroll_y = 0;
	var $nav_post;

	function on_document_scroll( event ) {
		if( window.scrollY !== scroll_y ) {
			scroll_y = window.scrollY;
			if( has_post_navigation ) {

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
		$nav_post = $( '.nav-post' );
		$nav_post.find( 'a' )
			.on( 'mouseenter', on_nav_post_mouseenter )
			.on( 'mouseleave', on_nav_post_mouseleave )
		;
		$( document ).on( 'scroll', on_document_scroll );
		has_post_navigation = $nav_post.length >= 1;
		comments_init();
	};

	return me;

})( rag, jQuery );

rag.init();