<?php 
header("Access-Control-Allow-Origin: *");
require "../kernel/config.php";
$db = mysql_connect($host, $user, $pass)  or die('Erreur de connexion '.mysql_error());
mysql_select_db($user,$db)  or die('Erreur de selection '.mysql_error()); 
require "../kernel/fonctions.php";
include '../lang/'.$language.'/favorite.php'; 

$id_quote=mysql_real_escape_string($_POST['id_quote']);
$id = mysql_real_escape_string($_POST['id_user']);

if (preg_match('/'.$domaine_fr.'/', $_SERVER['SERVER_NAME']) OR preg_match('/'.$domaine_en.'/', $_SERVER['SERVER_NAME'])) 
	{
	if (empty($id_quote) OR empty($id))
		{
		echo 'Erreur id !';
		}
	else
		{
		$query = mysql_query('INSERT INTO teen_quotes_favorite (id_quote, id_user) VALUES ('.$id_quote.','.$id.')');
		$update_fav = mysql_query('UPDATE teen_quotes_quotes SET nb_fav=nb_fav+1 WHERE id = '.$id_quote.'');
		 
		if($query) 
			{
			echo ''.$add_succes.'';
			}
		else
			{
			echo '<h2>'.$error.'</h2>';
			}
		}
	}
else
	{
	echo ''.$_SERVER['SERVER_NAME'].'';
	}
	
?>