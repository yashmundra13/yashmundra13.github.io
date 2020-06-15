// JavaScript Document

function redirect_to_http() {
    var url = location.href;

    if ( url.match(/^https:/) ) {
		url = url.replace( /^[^:]+:/, "http:" );
        location.href = url;
    }
}

redirect_to_http();