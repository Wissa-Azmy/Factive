/**
 *	Art3araby Mail Script
 *
 *	Developed by Arlind Nushi - www.art3araby.com
 */

var artMail = artMail || {};

;(function($, window, undefined)
{
	"use strict";
	
	$(document).ready(function()
	{
		artMail.$container = $(".mail-env");
		
		$.extend(artMail, {
			isPresent: artMail.$container.length > 0
		});
		
		// Mail Container Height fit with the document
		if(artMail.isPresent)
		{
			artMail.$sidebar = artMail.$container.find('.mail-sidebar');
			artMail.$body = artMail.$container.find('.mail-body');
			
			
			// Checkboxes
			var $cb = artMail.$body.find('table thead input[type="checkbox"], table tfoot input[type="checkbox"]');
			
			$cb.on('click', function()
			{
				$cb.attr('checked', this.checked).trigger('change');
				
				mail_toggle_checkbox_status(this.checked);
			});
			
			// Highlight
			artMail.$body.find('table tbody input[type="checkbox"]').on('change', function()
			{
				$(this).closest('tr')[this.checked ? 'addClass' : 'removeClass']('highlight');
			});
		}
	});
	
})(jQuery, window);


function fit_mail_container_height()
{
	if(artMail.isPresent)
	{
		if(artMail.$sidebar.height() < artMail.$body.height())
		{
			artMail.$sidebar.height( artMail.$body.height() );
		}
		else
		{
			var old_height = artMail.$sidebar.height();
			
			artMail.$sidebar.height('');
			
			if(artMail.$sidebar.height() < artMail.$body.height())
			{
				artMail.$sidebar.height(old_height);
			}
		}
	}
}

function reset_mail_container_height()
{
	if(artMail.isPresent)
	{
		artMail.$sidebar.height('auto');
	}
}

function mail_toggle_checkbox_status(checked)
{	
	artMail.$body.find('table tbody input[type="checkbox"]' + (checked ? '' : ':checked')).attr('checked',  ! checked).click();
}