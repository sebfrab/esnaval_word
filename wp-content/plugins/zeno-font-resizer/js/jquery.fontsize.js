
/*
 * JavaScript functions for Zeno Font Resizer.
 * Uses js.cookie.js
 */

jQuery.fn.zeno_font_resizer_manager = function () {
	var zeno_font_resizer_value       = jQuery('#zeno_font_resizer_value').val();
	var zeno_font_resizer_ownid       = jQuery('#zeno_font_resizer_ownid').val();
	var zeno_font_resizer_ownelement  = jQuery('#zeno_font_resizer_ownelement').val();
	var zeno_font_resizer_resizeMax   = parseFloat( jQuery('#zeno_font_resizer_resizeMax').val() );
	var zeno_font_resizer_resizeMin   = parseFloat( jQuery('#zeno_font_resizer_resizeMin').val() );
	var zeno_font_resizer_resizeSteps = parseFloat( jQuery('#zeno_font_resizer_resizeSteps').val() );
	var zeno_font_resizer_cookieTime  = parseFloat( jQuery('#zeno_font_resizer_cookieTime').val() );
	var zeno_font_resizer_element     = zeno_font_resizer_value;

	if (zeno_font_resizer_value == "innerbody") {
		zeno_font_resizer_element = "div#innerbody";
	} else if(zeno_font_resizer_value == "ownid") {
		zeno_font_resizer_element = "div#" + zeno_font_resizer_ownid;
	} else if(zeno_font_resizer_value == "ownelement") {
		zeno_font_resizer_element = zeno_font_resizer_ownelement;
	}

	var startFontSize = parseFloat( jQuery(zeno_font_resizer_element + "").css("font-size") );
	var savedSize = parseFloat( Cookies.get('fontSize') );

	if ( savedSize > zeno_font_resizer_resizeMin && savedSize < zeno_font_resizer_resizeMax ) {
		jQuery(zeno_font_resizer_element).css("font-size", savedSize + "px");
	}

	/* The Click events */
	jQuery('.zeno_font_resizer_add').click(function() {
		var newFontSize = parseFloat(jQuery(zeno_font_resizer_element + "").css("font-size"));
		newFontSize = newFontSize + parseFloat(zeno_font_resizer_resizeSteps);
		var maxFontSize = startFontSize + ( zeno_font_resizer_resizeSteps * 5 );
		if (newFontSize > maxFontSize) { return false; }
		if (newFontSize > zeno_font_resizer_resizeMax) { return false; }
		jQuery(zeno_font_resizer_element + "").css("font-size", newFontSize + "px");
		Cookies.set('fontSize', newFontSize, {expires: parseInt(zeno_font_resizer_cookieTime), path: '/'});
		return false;
	});
	jQuery('.zeno_font_resizer_minus').click(function() {
		var newFontSize = parseFloat(jQuery(zeno_font_resizer_element + "").css("font-size"))
		newFontSize = newFontSize - zeno_font_resizer_resizeSteps;
		var minFontSize = startFontSize - ( zeno_font_resizer_resizeSteps * 5 );
		if (newFontSize < minFontSize) { return false; }
		if (newFontSize < zeno_font_resizer_resizeMin) { return false; }
		jQuery("" + zeno_font_resizer_element + "").css("font-size", newFontSize + "px");
		Cookies.set('fontSize', newFontSize, {expires: parseInt(zeno_font_resizer_cookieTime), path: '/'});
		return false;
	});
	jQuery('.zeno_font_resizer_reset').click(function() {
		jQuery("" + zeno_font_resizer_element + "").css("font-size", startFontSize);
		Cookies.set('fontSize', startFontSize, {expires: parseInt(zeno_font_resizer_cookieTime), path: '/'});
		return false;
	});
}


jQuery(document).ready(function(){
	jQuery(".zeno_font_resizer").zeno_font_resizer_manager();
});
