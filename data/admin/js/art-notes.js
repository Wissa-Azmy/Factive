/**
 *	Art3araby Notes Script
 *
 *	Developed by Arlind Nushi - www.art3araby.com
 */

var artNotes = artNotes || {};

;(function($, window, undefined)
{
	"use strict";
	
	$(document).ready(function()
	{
		artNotes.$container = $(".notes-env");
		
		$.extend(artNotes, {
			isPresent: artNotes.$container.length > 0,
			
			noTitleText: "Untitled",
			noDescriptionText: "(No content)",
			
			
			$currentNote: $(null),
			$currentNoteTitle: $(null),
			$currentNoteDescription: $(null),
			$currentNoteContent: $(null),
			
			addNote: function()
			{	
				var $note = $('<li><a href="#"><strong></strong><span></li></a></li>');
				
				$note.append('<div class="content"></div>').append('<button class="note-close">&times;</button>');
				
				$note.find('strong').html(artNotes.noTitleText);
				$note.find('span').html(artNotes.noDescriptionText);
				
				artNotes.$notesList.prepend($note);
				
				TweenMax.set($note, {autoAlpha: 0});
				
				var tl = new TimelineMax();
				
				tl.append( TweenMax.to($note, .10, {css: {autoAlpha: 1}}) );
				tl.append( TweenMax.to($note, .15, {css: {autoAlpha: .8}}) );
				tl.append( TweenMax.to($note, .15, {css: {autoAlpha: 1}}) );
				
				artNotes.$notesList.find('li').removeClass('current');
				$note.addClass('current');
				
				artNotes.$writePadTxt.focus();
				
				artNotes.checkCurrentNote();
			},
			
			checkCurrentNote: function()
			{
				var $current_note = artNotes.$notesList.find('li.current').first();
				
				if($current_note.length)
				{
					artNotes.$currentNote             = $current_note;
					artNotes.$currentNoteTitle        = $current_note.find('strong');
					artNotes.$currentNoteDescription  = $current_note.find('span');
					artNotes.$currentNoteContent      = $current_note.find('.content');
					
					artNotes.$writePadTxt.val( $.trim( artNotes.$currentNoteContent.html() ) ).trigger('autosize.resize');;
				}
				else
				{
					var first = artNotes.$notesList.find('li:first:not(.no-notes)');
					
					if(first.length)
					{
						first.addClass('current');
						artNotes.checkCurrentNote();
					}
					else
					{
						artNotes.$writePadTxt.val('');
						artNotes.$currentNote = $(null);
						artNotes.$currentNoteTitle = $(null);
						artNotes.$currentNoteDescription = $(null);
						artNotes.$currentNoteContent = $(null);
					}
				}
			},
			
			updateCurrentNoteText: function()
			{
				var text = $.trim( artNotes.$writePadTxt.val() );
					
				if(artNotes.$currentNote.length)
				{
					var title = '',
						description = '';
					
					if(text.length)
					{
						var _text = text.split("\n"), currline = 1;
						
						for(var i=0; i<_text.length; i++)
						{
							if(_text[i])
							{
								if(currline == 1)
								{
									title = _text[i];
								}
								else
								if(currline == 2)
								{
									description = _text[i];
								}
								
								currline++;
							}
							
							if(currline > 2)
								break;
						}
					}
					
					artNotes.$currentNoteTitle.text( title.length ? title : artNotes.noTitleText );
					artNotes.$currentNoteDescription.text( description.length ? description : artNotes.noDescriptionText );
					artNotes.$currentNoteContent.text( text );
				}
				else
				if(text.length)
				{
					artNotes.addNote();
				}
			}
		});
		
		// Mail Container Height fit with the document
		if(artNotes.isPresent)
		{
			artNotes.$notesList = artNotes.$container.find('.list-of-notes');
			artNotes.$writePad = artNotes.$container.find('.write-pad');
			artNotes.$writePadTxt = artNotes.$writePad.find('textarea');
			
			artNotes.$addNote = artNotes.$container.find('#add-note');
			
			artNotes.$addNote.on('click', function(ev)
			{
				artNotes.addNote();
			});
			
			artNotes.$writePadTxt.on('keyup', function(ev)
			{
				artNotes.updateCurrentNoteText();
			});
			
			artNotes.checkCurrentNote();
			
			artNotes.$notesList.on('click', 'li a', function(ev)
			{
				ev.preventDefault();
				
				artNotes.$notesList.find('li').removeClass('current');
				$(this).parent().addClass('current');
				
				artNotes.checkCurrentNote();
				
				
			});
			
			artNotes.$notesList.on('click', 'li .note-close', function(ev)
			{
				ev.preventDefault();
				
				var $note = $(this).parent();
				
				var tl = new TimelineMax();
				
				tl.append( 
					TweenMax.to($note, .15, {css: {autoAlpha: 0.2}, onComplete: function()
					{
						$note.slideUp('fast', function()
						{
							$note.remove();
							artNotes.checkCurrentNote();
						});
					}}) 
				);
			});
		}
	});
	
})(jQuery, window);

