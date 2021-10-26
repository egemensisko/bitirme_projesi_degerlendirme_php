<?php


try 

{
	$db = new PDO("mysql:host=localhost; dbname=proje; charset=utf8",'root','');
	//echo "Veritabanı baglanısı başarılı";
}
catch(Exception $e)
{
	echo  $e->getMessage() ;
}
?>