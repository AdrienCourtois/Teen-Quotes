<?php session_start();
error_reporting(E_ALL ^ E_NOTICE);
header("Cache-Control: public");

// INCLUSION DES FICHIERS
require "../kernel/config.php";
$db = mysql_connect("$host", "$user", "$pass")  or die('Erreur de connexion '.mysql_error());
mysql_select_db('teenq208598',$db)  or die('Erreur de selection '.mysql_error()); 
require "../kernel/fonctions.php";
require "../lang/$language/general.php";

if(!empty($_COOKIE['mobile']))
	{
	setcookie("mobile", Yo, time()-4200);
	}

if (!$_SESSION['logged'])
{
	$_SESSION['logged'] = false;
}else{$post = mysql_real_escape_string($_SESSION['username']);}

if ($_COOKIE['Pseudo'] AND $_COOKIE['Pass']){
$pseudo = mysql_escape_string($_COOKIE['Pseudo']);
$pass = mysql_escape_string($_COOKIE['Pass']);
		$retour_nb_pseudo = mysql_num_rows(mysql_query("SELECT id FROM teen_quotes_account WHERE `username` ='$pseudo'"));
		
		if ($retour_nb_pseudo == '1')
		{
			$compte = mysql_fetch_array(mysql_query("SELECT * FROM teen_quotes_account WHERE `username` = '$pseudo'"));				
			{	
				$sha = mysql_num_rows(mysql_query("SELECT id FROM teen_quotes_account WHERE `pass` = '$pass'"));
				if ($sha == '1')
				{
					
					$_SESSION['logged'] = true;
					$_SESSION['account'] = $compte['id'];										
					$_SESSION['pseudo'] = $pseudo;
					$_SESSION['security_level'] = $compte['security_level'];									
					$_SESSION['username'] = $compte['username'];
					
					$username = $_SESSION['username'];
					$id = $_SESSION['account'];
					$email=$compte['email'];
					$is_newsletter=mysql_num_rows(mysql_query("SELECT id FROM newsletter where email='$email'")); 
					
				}
			}
		}


;} 

 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php 
// PERMET DE GERER LE TITRE DES PAGES DYNAMIQUES ET LES DESCRIPTION POUR LE SHARE SUR FB
if (isset($_GET['id_user'])) {
$id_user=mysql_real_escape_string($_GET['id_user']);
$php_self="user-$id_user";
$result = mysql_fetch_array(mysql_query("SELECT username FROM teen_quotes_account where id='$id_user'"));
$username_title = ucfirst($result['username']);
echo "<title>Teen Quotes | $username_title</title>";
}

elseif (isset($_GET['id_quote'])) {
$id_quote=mysql_real_escape_string($_GET['id_quote']);
$php_self="quote-$id_quote";
$result = mysql_fetch_array(mysql_query("SELECT texte_english FROM teen_quotes_quotes where id='$id_quote' AND approved='1'"));
$texte = $result['texte_'.$language.''];
echo "<title>Teen Quotes | Because some quotes are simply true</title>";
echo"<meta name=\"description\" content=\"$texte\"/>";
}
else {
echo"<title>Teen Quotes | Because some quotes are simply true</title>";
echo"\r\n";
echo"<meta name=\"description\" content=\"Teen Quotes : because our lives are filled full of beautiful sentences, and because some quotes are simply true\"/>";
}?>		
		<meta name="keywords" content="'Teen Quotes', 'quotes', 'teen', 'citations', 'sentences', 'Augusti', 'Twitter', 'Facebook'"/> 
		<meta name="author" content="Antoine Augusti"/> 
		<meta name="revisit-after" content="2 days"/> 
		<meta name="date-creation-ddmmyyyy" content="2609010"/> 
		<meta name="Robots" content="all"/> 
		<meta name="Rating" content="General"/> 
		<meta name="location" content="France, FRANCE"/> 
		<meta name="expires" content="never"/> 
		<meta name="Distribution" content="Global"/> 
		<meta name="Audience" content="General"/> 
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;"/> 
		<meta http-equiv="cache-control" content="no-cache"/> 
		<meta name="format-detection" content="telephone=no" /> 
		<meta name="robots" content="noindex" /> 
		<meta http-equiv="Content-Language" content="fr,en" /> 
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
		<link type="text/css" rel="stylesheet" media="screen" href="style.css" />
		
		<link rel="shortcut icon" type="image/x-icon" href="http://www.teen-quotes.com/images/favicon.gif" /> 
		<link rel="image_src" href="http://www.teen-quotes.com/images/icon50.png" /> 
		<meta property="og:image" content="http://www.teen-quotes.com/images/icon50.png" />
		
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
		<script type="text/javascript" src="http://teen-quotes.com/ajax.js"></script>
		
		<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-12045924-10']);
		_gaq.push(['_setDomainName', 'teen-quotes.com']);
		_gaq.push(['_setAllowHash', 'false']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
</head>
<body>
<div id="topbar">
	<a href="../"><img src="http://www.teen-quotes.com/images/logo.png" style="height:50px" /></a>
	</div>
</div><!-- END TOPBAR -->


<div id="content">

	<div id="wrapper"><!-- START WRAPPER -->
	<ul class="menu"> 
		<li><a href="../">Home</a></li>
		<li><a href="random">Random</a></li>
		<li><a href="searchform">Search</a></li>
		<?php if (!$_SESSION['logged']) { ?>
		<li><a href="signin">Login</a></li>
		<li><a href="signup">Sign up</a></li>
		<?php }else { ?>
		<li><a href="?deconnexion">Log out</a></li>
		<?php } ?>
	</ul>
	

	<div class="clear" style="height:10px"></div>
