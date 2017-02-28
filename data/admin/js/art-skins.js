/**
 *	Art3araby Demo Scripts (Demo Version Only)
 *
 *	Developed by Arlind Nushi - www.art3araby.com
 */


;(function($, window, undefined)
{
	"use strict";
	
	$(document).ready(function()
	{
		
		var domain = $("body").data('url').replace('http://', '').replace('/art', '').replace('themes.', '');
		
		
		//Cookies.set('current-skin', 'cafe', {domain: domain});
		
		$(".theme-skins").on('click', 'li a', function(ev)
		{
			ev.preventDefault();
			
			var $this = $(this);
			
			Cookies.set('current-skin', $this.data('skin'), {domain: domain, expires: 3600});
			
			window.location.href = $this.attr('href');
		});
	
	});
	
})(jQuery, window);
