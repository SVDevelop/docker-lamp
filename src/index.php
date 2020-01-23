<?php
print_r($_POST);

error_reporting(E_ALL);

include ($_SERVER['DOCUMENT_ROOT'].'/main_menu.php');

function isAuth ()
{
	if( isset($_POST['auth']) && !empty(trim($_POST['login'])) && !empty(trim($_POST['password'])) ) {

		include ($_SERVER['DOCUMENT_ROOT'].'/data/logins.php');
		include ($_SERVER['DOCUMENT_ROOT'].'/data/passwords.php');

		for ($i=0; $i < count($logins); $i++) {
			$logAndPass[$logins[$i]] = $passwords[$i];
		}
		return array_search($_POST['password'], $logAndPass) == $_POST['login'];
	} else 
	{
		// input enpty
		// if ()
		return -1;
	}
}
// $logAndPass = array_combine($logins, $passwords);

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="/styles.css" rel="stylesheet">
	<title>Project - ведение списков</title>
</head>

<body>

	<div class="header">
		<div class="logo"><img src="/i/logo.png" width="68" height="23" alt="Project"></div>
		<div class="clearfix"></div>
	</div>

	<div class="clear">
		<ul class="main-menu">
			<?php	route($menu);?>
		</ul>
	</div>

	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td class="left-collum-index">

				<h1>Возможности проекта —</h1>
				<p>Вести свои личные списки, например покупки в магазине, цели, задачи и многое другое. Делится списками с друзьями и просматривать списки друзей.</p>

			</td>
			<td class="right-collum-index">

				<div class="project-folders-menu">
					<ul class="project-folders-v">
						<li class="project-folders-v-active"><a href="/?login=yes">Авторизация</a></li>
						<li><a href="#">Регистрация</a></li>
						<li><a href="#">Забыли пароль?</a></li>
					</ul>
					<div class="clearfix"></div>
				</div>

				<div class="index-auth">
					<?php
					if (isAuth () != -1) {
						if ( isAuth () ) {
							include($_SERVER['DOCUMENT_ROOT'].'/include/success.php');
						} else {
							include($_SERVER['DOCUMENT_ROOT'].'/include/error.php');
						}
					}

					if (isset($_GET['login']) && $_GET['login'] == "yes") { ?>
					<form action="index.php" method="POST">

						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td class="iat">
									<label for="login_id">Ваш e-mail:</label>
									<input id="login_id" size="30" name="login" value="<?=empty($_POST['login']) ? '' : $_POST['login']; ?>">
								</td>
							</tr>
							<tr>
								<td class="iat">
									<label for="password_id">Ваш пароль:</label>
									<input id="password_id" size="30" name="password" type="password" value="<?=@$_POST['password'];?>">
								</td>
							</tr>
							<tr>
								<td><input type="submit" value="Войти" name="auth"></td>
							</tr>
						</table>
					</form>
					<?php } ?>
				</div>

			</td>
		</tr>
	</table>

	<div class="clearfix">
		<ul class="main-menu bottom">
			<?php	route($menu);?>
		</ul>
	</div>

	<div class="footer">&copy;&nbsp;<nobr>2018</nobr> Project.</div>

</body>
</html>