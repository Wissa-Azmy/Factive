<?php /* Smarty version Smarty 3.1.4, created on 2015-06-12 20:17:12
         compiled from "/home/marsadmasry/public_html/data/chat/admin/layout/pages_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1374395276557b3e485ae708-91869957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c51601b81d6213cdd8a8792126f7991105cf358c' => 
    array (
      0 => '/home/marsadmasry/public_html/data/chat/admin/layout/pages_login.tpl',
      1 => 1430767108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1374395276557b3e485ae708-91869957',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username_post' => 0,
    'password_post' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_557b3e485e226',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b3e485e226')) {function content_557b3e485e226($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr"> 
<head profile="http://gmpg.org/xfn/11"> 
 
	<title>Art3araby - Administrator Panel Login</title> 
	
	<link rel="stylesheet" type="text/css" href="includes/css/login-style.css"> 
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.7.3/jquery-ui.min.js"></script>
	<script type="text/javascript" src="includes/js/scripts.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			var emitter;
			$('#logo').animate({ 'marginLeft':'0%'}, 500, function () {
				emitter = new particle_emitter({
					image: ['./images/particle.gif'],
					center: ['50%', '140px'], offset: [-250, 0], radius: 0,
					size: 2, velocity: 100, decay: 1000, rate: 20
				}).start();
			});
			$('.fwdbutton').click(function() {
				emitter.stop();
				$('#logo').animate({ 'marginLeft':'-200%'}, 500, function () {
					document.forms['login'].submit();
				});
				
			});
			$(document).keypress(function(e) {
				if(e.keyCode == 13) {
					emitter.stop();
					$('#logo').animate({ 'marginLeft':'-200%'}, 500, function () {
						document.forms['login'].submit();
					});
				}
			});
			$('.login-form').illuminate({ 'intensity':'0.3','outGlow':'true','outerGlowSize':'30px','outerGlowColor':'#ffffff','blink':'false','color':'#ffffff'});
		});
	</script>
	
</head>
<body>
	<div style="margin: 0 auto; width: 550px; text-align: center; padding-top: 100px;">
		<div id="logo" style="margin-left: -200%; width: 521px; height: 69px;">
			<img id="logo2" src="./images/img-logo.png" alt="ArrowChat Logo" border="0" />
		</div>
		<div class="login-form">
			<form autocomplete="off" action="./" id="login" method="post"> 
				<div class="admin-panel-text">Art3araby Chat Admin Panel Login</div>
				<div style="clear: both;"></div>
				<div class="input-text">Username</div>
				<div class="input-box">
					<input class="text" id="username" name="username" value="<?php if (!empty($_smarty_tpl->tpl_vars['username_post']->value)){?><?php echo $_smarty_tpl->tpl_vars['username_post']->value;?>
<?php }?>" type="text" />
				</div>
				<div style="clear: both;"></div>
				<div class="input-text">Password</div>
				<div class="input-box">
					<input class="text" name="password" value="<?php if (!empty($_smarty_tpl->tpl_vars['password_post']->value)){?><?php echo $_smarty_tpl->tpl_vars['password_post']->value;?>
<?php }?>"  type="password" />
					<input type="hidden" name="login" value="1" />
				</div>
				<div style="clear: both;"></div>
				<div class="button_container float">
					<div class="login-error">
						<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

					</div>
					<div class="floatr">
						<a class="fwdbutton">
							<span>Login</span>
						</a>
					</div>
					<div class="forgot">
						<a href="javascript:0;" class="vtip" title="The password and username can be changed in the arrowchat_admin table in your database.  The password must be converted to MD5 first.">Forgot Password</a><span class="forgot-big">&nbsp;&nbsp;&nbsp;|</span> 
					</div>
				</div>
				<div style="clear: both;"></div>
			</form> 
		</div>
	</div>
	<script type="text/javascript">
		document.getElementById("username").focus();
	</script>
</body>
</html><?php }} ?>