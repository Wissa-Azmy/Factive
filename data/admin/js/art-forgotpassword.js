/**
 *	Art3araby Register Script
 *
 *	Developed by Arlind Nushi - www.art3araby.com
 */

var artForgotPassword = artForgotPassword || {};

;(function($, window, undefined)
{
	"use strict";
	
	$(document).ready(function()
	{
		artForgotPassword.$container = $("#form_forgot_password");
		artForgotPassword.$steps = artForgotPassword.$container.find(".form-steps");
		artForgotPassword.$steps_list = artForgotPassword.$steps.find(".step");
		artForgotPassword.step = 'step-1'; // current step
		
				
		artForgotPassword.$container.validate({
			rules: {
				
				email: {
					required: true,
					email: true
				}
			},
			
			messages: {
				
				email: {
					email: 'Invalid E-mail.'
				}	
			},
			
			highlight: function(element){
				$(element).closest('.input-group').addClass('validate-has-error');
			},
			
			
			unhighlight: function(element)
			{
				$(element).closest('.input-group').removeClass('validate-has-error');
			},
			
			submitHandler: function(ev)
			{
				$(".login-page").addClass('logging-in');
				
				// We consider its 30% completed form inputs are filled
				artForgotPassword.setPercentage(30, function()
				{
					// Lets move to 98%, meanwhile ajax data are sending and processing
					artForgotPassword.setPercentage(98, function()
					{
						// Send data to the server
						$.ajax({
							url: baseurl + 'data/sample-forgotpassword-form.php',
							method: 'POST',
							dataType: 'json',
							data: {
								email: $("input#email").val(),
							},
							error: function()
							{
								alert("An error occoured!");
							},
							success: function(response)
							{
								// From response you can fetch the data object retured
								var email = response.submitted_data.email;
								
								
								// Form is fully completed, we update the percentage
								artForgotPassword.setPercentage(100);
								
								
								// We will give some time for the animation to finish, then execute the following procedures	
								setTimeout(function()
								{
									// Hide the description title
									$(".login-page .login-header .description").slideUp();
									
									// Hide the register form (steps)
									artForgotPassword.$steps.slideUp('normal', function()
									{
										// Remove loging-in state
										$(".login-page").removeClass('logging-in');
										
										// Now we show the success message
										$(".form-forgotpassword-success").slideDown('normal');
										
										// You can use the data returned from response variable
									});
									
								}, 1000);
							}
						});
					});
				});
			}
		});
	
		// Steps Handler
		artForgotPassword.$steps.find('[data-step]').on('click', function(ev)
		{
			ev.preventDefault();
			
			var $current_step = artForgotPassword.$steps_list.filter('.current'),
				next_step = $(this).data('step'),
				validator = artForgotPassword.$container.data('validator'),
				errors = 0;
			
			artForgotPassword.$container.valid();
			errors = validator.numberOfInvalids();
			
			if(errors)
			{
				validator.focusInvalid();
			}
			else
			{
				var $next_step = artForgotPassword.$steps_list.filter('#' + next_step),
					$other_steps = artForgotPassword.$steps_list.not( $next_step ),
					
					current_step_height = $current_step.data('height'),
					next_step_height = $next_step.data('height');
				
				TweenMax.set(artForgotPassword.$steps, {css: {height: current_step_height}});
				TweenMax.to(artForgotPassword.$steps, 0.6, {css: {height: next_step_height}});
				
				TweenMax.to($current_step, .3, {css: {autoAlpha: 0}, onComplete: function()
				{
					$current_step.attr('style', '').removeClass('current');
					
					var $form_elements = $next_step.find('.form-group');
					
					TweenMax.set($form_elements, {css: {autoAlpha: 0}});
					$next_step.addClass('current');
					
					$form_elements.each(function(i, el)
					{
						var $form_element = $(el);
						
						TweenMax.to($form_element, .2, {css: {autoAlpha: 1}, delay: i * .09});
					});
					
					setTimeout(function()
					{
						$form_elements.add($next_step).add($next_step).attr('style', '');
						$form_elements.first().find('input').focus();
						
					}, 1000 * (.5 + ($form_elements.length - 1) * .09));
				}});
			}
		});
		
		artForgotPassword.$steps_list.each(function(i, el)
		{
			var $this = $(el),
				is_current = $this.hasClass('current'),
				margin = 20;
			
			if(is_current)
			{
				$this.data('height', $this.outerHeight() + margin);
			}
			else
			{
				$this.addClass('current').data('height', $this.outerHeight() + margin).removeClass('current');
			}
		});
		
		
		// Login Form Setup
		artForgotPassword.$body = $(".login-page");
		artForgotPassword.$login_progressbar_indicator = $(".login-progressbar-indicator h3");
		artForgotPassword.$login_progressbar = artForgotPassword.$body.find(".login-progressbar div");
		
		artForgotPassword.$login_progressbar_indicator.html('0%');
		
		if(artForgotPassword.$body.hasClass('login-form-fall'))
		{
			var focus_set = false;
			
			setTimeout(function(){ 
				artForgotPassword.$body.addClass('login-form-fall-init')
				
				setTimeout(function()
				{
					if( !focus_set)
					{
						artForgotPassword.$container.find('input:first').focus();
						focus_set = true;
					}
					
				}, 550);
				
			}, 0);
		}
		else
		{
			artForgotPassword.$container.find('input:first').focus();
		}
		
		
		// Functions
		$.extend(artForgotPassword, {
			setPercentage: function(pct, callback)
			{
				pct = parseInt(pct / 100 * 100, 10) + '%';
				
				// Normal Login
				artForgotPassword.$login_progressbar_indicator.html(pct);
				artForgotPassword.$login_progressbar.width(pct);
				
				var o = {
					pct: parseInt(artForgotPassword.$login_progressbar.width() / artForgotPassword.$login_progressbar.parent().width() * 100, 10)
				};
				
				TweenMax.to(o, .7, {
					pct: parseInt(pct, 10),
					roundProps: ["pct"],
					ease: Sine.easeOut,
					onUpdate: function()
					{
						artForgotPassword.$login_progressbar_indicator.html(o.pct + '%');
					},
					onComplete: callback
				});
			}
		});
	});
	
})(jQuery, window);