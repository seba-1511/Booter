/*
Ideas of what to implement:
- Function to get the image tag of glyphish icons
- the better dialog interface form vs
- the views loading and storing of handlebars
- load js files
- load css files
- pre-load images
- isEmail function
- encrypt/decrypt with php on the other side
*/
var booter = (function() {

	var myPrivate;

	myPrivate = function (arg) {
		return arg;
	};

	return {

		base_url: '/Booter/',//Should be same as CI's base_url in config.php

		icon: function (name, color, attr) {
			var img = new Image;
			color = color || 'gray';
			attr = attr || {};
			img.src = booter.base_url + 'assets/images/icons/'+color+'/'+name+'.png';
			jQuery(img).attr(attr);
			return img;
		}
	};

})();