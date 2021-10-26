<?php


require 'baglan.php';

if (isset($_POST["kayit"])) {

$username=$_POST['username'];
$pasword=$_POST['pasword'];
$password_again=$_POST['pasword-again'];




if (!$username) {
	# code...
	echo "lütfen kullaınıcı adınızı giriniz";
}
elseif (!$pasword || !$password_again) {

echo "lütfen şifrenizi giriniz";

}
elseif ($pasword !=$password_again ) {

	echo "Girdiginiz şifreler birbiryle aynı degil  ";
	# code...
}

else {
	  $sorgu= $db->prepare('INSERT INTO kullanıcı SET user_name =?,user_password =? ');
	  $ekle=$sorgu->execute([
          $username,$pasword

	  ]);

	  if ($ekle) {
	  	echo "kayıt başarıyla gerçekleşti yönlendiriliyorsunuz";
	  	header('Refresh:2;   index.php'  );
	  	# code...
	  }
	  else
	  {
	  	echo "bir hata oluştu tekar kontrol edin";
	  }
	# code...
}

}

if (isset($_POST['giris'])) {


$username=$_POST['username'];
$pasword=$_POST['pasword'];

if (!$username) {
	echo "lütfen kullanıcı adınızı girin";
	# code...
}
else if (!$pasword) {
	echo "Şifrenizi girin";
	# code...
}
else 
{
	$kullanıcı_sor =$db->prepare('SELECT * FROM kullanıcı WHERE user_name =? || user_password=? ');
	$kullanıcı_sor->execute([


$username,$pasword
	]);
	echo $say=$kullanıcı_sor->rowCount();

  if($say==1)
  {
  	$_SESSION['username']=$username;
  	echo "başarıyla giriş yapıldı";
  	header('Refresh:2;  degerlendirme.php  ');
  }
  else
  {
  	echo "bir hata oldu tekrar deneyin lütfen";
  }
}
}


if (isset($_POST['kaydet'])) {

	$ogrenciıd=$_POST['ogrenciıd'];
$projead=$_POST['projead'];
$projedanısman=$_POST['projedanısman'];
$ilkjuri=$_POST['ilkjüri'];

$ıkıncıjuri=$_POST['ikijuri'];
$ucjuri=$_POST['ucjuri'];
$projesure=$_POST['projesure'];

$t=$projedanısman+$ilkjuri+$ıkıncıjuri+$ucjuri;

$toplam=$t/4;


if(!$ogrenciıd)
{
	echo "bu alan boş bırakılamaz";


}
else if (!$projead) {
	echo "bu alan boş bırakılamaz";
	# code...
}


else {


	  $sorgum= $db->prepare('INSERT INTO deger SET ogrenci_id =?,	proje_ad =?,proje_danısman =?, juri_1 =?,
	     juri_2 =?, juri_3=? ,		proje_sure=? 	');
	  $eklem=$sorgum->execute([
          $ogrenciıd,$projead,$projedanısman,$ilkjuri,$ıkıncıjuri,$ucjuri,$projesure

	  ]);

  if ($eklem) {
	  	echo "Notunuz Hesaplanıyor lütfen bekleyin";
         
         echo "<br>";
	  	echo "Notunuz :";
          echo   $toplam;
	  }
}
}


?>