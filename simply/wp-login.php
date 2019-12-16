<!DOCTYPE html>
	<!--[if IE 8]>
		<html xmlns="http://www.w3.org/1999/xhtml" class="ie8" lang="zh-CN">
	<![endif]-->
	<!--[if !(IE 8) ]><!-->
		<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
	<!--<![endif]-->
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>攻城狮小武 &lsaquo; 登录</title>
	<link rel='dns-prefetch' href='//s.w.org' />
<link rel='stylesheet' href='/wp-admin/load-styles.php?c=0&amp;dir=ltr&amp;load%5B%5D=dashicons,buttons,forms,l10n,login&amp;ver=4.8.12' type='text/css' media='all' />
	<meta name='robots' content='noindex,noarchive' />
	<meta name='referrer' content='strict-origin-when-cross-origin' />
		<meta name="viewport" content="width=device-width" />
	<link rel="icon" href="/wp-content/uploads/2017/12/cropped-WP3-副本-32x32.jpg" sizes="32x32" />
<link rel="icon" href="/wp-content/uploads/2017/12/cropped-WP3-副本-192x192.jpg" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="/wp-content/uploads/2017/12/cropped-WP3-副本-180x180.jpg" />
<meta name="msapplication-TileImage" content="http://www.tiaobug.com/wp-content/uploads/2017/12/cropped-WP3-副本-270x270.jpg" />
	</head>
	<body class="login login-action-login wp-core-ui  locale-zh-cn">
		<div id="login">
		<h1><a href="https://cn.wordpress.org/" title="基于WordPress" tabindex="-1">攻城狮小武</a></h1>
	
<form name="loginform" id="loginform" action="/wp-login.php" method="post">
	<p>
		<label for="user_login">用户名或电子邮件地址<br />
		<input type="text" name="log" id="user_login" class="input" value="" size="20" /></label>
	</p>
	<p>
		<label for="user_pass">密码<br />
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" /></label>
	</p>
		<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> 记住我的登录信息</label></p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="登录" />
		<input type="hidden" name="redirect_to" value="http://www.tiaobug.com/wp-admin/" />
		<input type="hidden" name="testcookie" value="1" />
	</p>
</form>

<p id="nav">
	<a href="/wp-login.php?action=lostpassword">忘记密码？</a>
</p>

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

/**
 * Filters whether to print the call to `wp_attempt_focus()` on the login screen.
 *
 * @since 4.8.0
 *
 * @param bool $print Whether to print the function call. Default true.
 */
wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>

	<p id="backtoblog"><a href="/">&larr; 返回到攻城狮小武</a></p>
	
	</div>

	
		<div class="clear"></div>
	</body>
	</html>
	