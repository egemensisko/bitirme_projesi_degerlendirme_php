<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">

		<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body >

	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1> Giriş yap</h1>


		</div>
		<form action="islem.php" method="post">
		<div class="login-form">
			<div class="control-group">
				<input type="text" name="username" class="login-field" placeholder="Kullanıcı Adı" id="login-name">
				<label class="login-field-icon fui-user" for="login-name"> </label>

			</div>

			<div class="control-group"> 
			<input type="pasword" name="pasword" class="login-field" placeholder="Şifre" id="login-pass">

			<label class="login-field-icon fui-user" for="login-pass"></label>
			</div>
			<button href="index.php" name="giris" class="btn btn-primary btn-large btn-block"> Giriş Yap</button>
			<a  href="kayit.php" class="btn btn-primary btn-large btn-block">	Kayıt Ol	</a>
		</div>
		
	</form>

</div>
</div>

</body>
</html>