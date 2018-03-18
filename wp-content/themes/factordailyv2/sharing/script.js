
        function openShareWindow( url, w, h ) {

            var screenLeft = window.screenLeft !== undefined ? window.screenLeft : screen.left;
            var screenTop = window.screenTop !== undefined ? window.screenTop : screen.top;
            var width = window.innerWidth ? window.innerWidth : doc.documentElement.clientWidth ? doc.documentElement.clientWidth : screen.width;
            var height = window.innerHeight ? window.innerHeight : doc.documentElement.clientHeight ? doc.documentElement.clientHeight : screen.height;

            var left = ( ( width / 2 ) - ( w / 2 ) ) + screenLeft;
            var top = ( ( height / 2 ) - ( h / 2 ) ) + screenTop;

            var newWin = window.open( url, "", "scrollbars=no,width=" + w + ",height=" + h + ",top=" + top + ",left=" + left );

            if ( newWin ) {
                newWin.focus();
            }

        }

        function getHighlight() {

            var selection = window.getSelection();

            var object = {
                parent : null,
                text   : '',
                rect : null
            };

            if ( selection.rangeCount > 0 ) {
                object = {
                    parent : selection.anchorNode.parentNode,
                    text   : selection.toString().trim(),
                    rect   : selection.getRangeAt(0).getBoundingClientRect()
                };
            }


            console.log( object );

            return object;
        }

        var sharing = document.querySelector( '.sharing' );

        function showMenu() {

            var highlight = getHighlight();

            if ( highlight.text === '' ) {

                sharing.setAttribute( 'class', 'sharing' );
                sharing.style.left = 0;
                sharing.style.top  = 0;

                return;
            }

            if ( highlight.parent.nodeName !== 'P' ) {
                return;
            }

            var width = ( highlight.rect.width / 2 ) - 42;

            sharing.setAttribute( 'class', 'sharing sharing--shown' );
            sharing.style.left = ( highlight.rect.left + width ) + "px";
            sharing.style.top  = ( highlight.rect.top - 40 ) + "px";
        }

        // Upon releasing mouse button.
//        document.body.addEventListener( 'mouseup', function() {
//             setTimeout( showMenu, 100 );
//        } );
var el = document.getElementById('share');
if(el){
  el.addEventListener( 'mouseup', function() {
             setTimeout( showMenu, 100 );
        } );
}

        // Facebook.
		if(el){
        el.addEventListener( 'click', function() {

            var highlight = getHighlight();

            if ( highlight.text !== '' && highlight.parent.nodeName === 'P' ) {
                FB.ui({
                    method : 'share',
                    mobile_iframe: true,
                    href   : 'http://bitly.com/2aiHmCs',
                    quote  : highlight.text
                }, function(response){});
            }

            event.preventDefault();
        } );
		}
        // Tweet.
		var el = document.getElementById('tweet');
		if(el){
        el.addEventListener( 'click', function() {

            var highlight = getHighlight();

            if ( highlight.text !== '' && highlight.parent.nodeName === 'P' ) {

                var docURL = encodeURIComponent( 'http://bitly.com/2aiHmCs' );
                var tweetText = encodeURIComponent( highlight.text );
                var tweetURL = 'https://twitter.com/intent/tweet?via=wdtuts&url=' + docURL + '&text=' + tweetText;

                openShareWindow( tweetURL, 600, 420 );
            }

            event.preventDefault();
        } );
		}

