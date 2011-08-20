<?php include 'head.php' ?>
<span class="titre">&raquo; Acc�s rapide</span>
<center><a href="#cible">Cible vis�e </a> || <a href="#revenus">Revenus</a> || <a href="#tech">Aspect technique</a> || <a href="#contact">Contact</a></center>
<br /><br /><br />

	<span class="titre">Pr�sentation <img src="images/infos.png" class="icone" /></span>
<div class="texte">
Teen Quotes est un site regroupant tout un tas de citations du quotidien, que l'on consid�re comme "vraies". Le site est principalement en anglais, mais toute l'interface est traduite en fran�ais et en anglais.
<br /><br />
Vous l'aurez s�rement remarqu�, l'architecture du site ressemble beaucoup � VDM / FML... En effet le principe est globalement le m�me : vous pouvez proposer vos citations, les commenter, les partager.
<br /><br />
Le site est tr�s orient� r�seaux sociaux, vous trouverez beaucoup de liens de partage vers Facebook / Twitter. Je pense que le trafic principal viendra des r�seaux sociaux d'ailleurs.
<br />
<h4>D'o� viennent les citations ?</h4>
Les citations viennent pour la plupart de Twitter, plusieurs comptes proposent de nombreuses citations int�ressantes par jour. J'en garde quelques unes que je modifie, ou non. Bien �videmment, quand je suis inspir�, il m'arrive d'en �crire moi m�me.</div>
	
	
	<span id="cible" class="titre">Cible vis�e <img src="images/target.gif" class="icone" /></span>

<div class="texte">	
La cible de ce projet est principalement les adolescents : en effet, ces citations parlent g�n�ralement des petits tracas de la vie quotidienne (amours, amis, cours, devoirs, musique, sorties...) et plus pr�cis�ment f�minine : les filles sont plus tracass�es ou attach�es � ces petites choses du quotidien.<br>

<h4>Les sources de trafic</h4>
La source de trafic vis�e est celle venant des r�seaux sociaux : tout est fait pour que l'utilisateur partage le plus possible. En effet, les boutons bleus de partage de Twitter et Facebook ressortent bien du design g�n�ral, sans pour autant choquer gr�ce � une reprise de la couleur dans le fond m�me du site.<br>
<br />
Le partage doit �tre imm�diat, l'utilisateur doit avoir envie de partager ce qu'il a tenu pour vrai en venant de le lire. Il repose sur un sentiment impulsif.<br>

<h4>Pourquoi Twitter et Facebook ?</h4>
Ces 2 r�seaux sociaux sont les plus utilis�s au monde. Twitter est sont vraiment tr�s pr�sent dans les pays anglophones, surtout aux USA. Le concept m�me de ces petites citations vraies vient de Twitter : il y a de nombreux comptes, g�n�ralement avec plus de 50 000 followers qui proposent quelques unes de ces citations par jour.<br>
<br />

</div>

	

	<span id="revenus" class="titre">Revenus <img src="images/money.png" class="icone" /></span>
<div class="texte">
La source de revenus la plus adapt�e pour Teen Quotes est vraisemblablement la publicit�. La publicit� peut facilement �tre plac�e sur la sidebar de droite : ce sont plus de 900px de hauteur qui sont disponibles sur la page proposant l'acc�s aux derni�res citations.<br>
<br />
La navigation type d'un utilisateur se limitera certainement � la consultation de quelques citations, donc cet utilisateur utilisera toujours ce m�me sch�ma de page. En cas de besoin, on peut envisager un grand bandeau large, petit en hauteur, plac� juste avant les derni�res citations.<br>

<h4>Une strat�gie ayant fait ses preuves</h4>
Utilisant la m�me architecture que VDM / FML, il est pr�f�rable d'utiliser le m�me syst�me commercial qu'eux, d�cris juste auparavant. Dans un avenir, on peut �galement envisager la production de produits d�riv�s : de petits livrets, o� quelques citations appara�traient.
</div>


<span id="tech" class="titre">Aspect technique <img src="images/competences.png" class="icone" /></span>
<div class="texte">
Teen Quotes est d�velopp� en xHTML / CSS / PHP et utilise une base de donn�es MySQL. Les tables sont : comptes / citations / commentaires / citations favorites et comportent des jointures internes afin d'�viter de surcharger les requ�tes SQL.<br>

<h4>Un site optimis�</h4>
Le code tr�s propre permet d'avoir un chargement rapide, malgr� le nombre de requ�tes SQL important sur chaque page. Les scripts externes propres � Facebook et Twitter sont appel�s en toute fin de page et ne g�ne pas l'affichage du chargement, comme si ils �taient plac�s dans l'ent�te.<br>
<br />
Teen Quotes utilise �norm�ment de propri�t� CSS3, et ne comporte que son image de fond, r�p�t�e, comme �l�ment pur du design. Le reste du design est en CSS, sauf pour les icones, toutes en PNG et qui sont d'une taille tr�s petite (entre 500 octets et 5ko par image).<br>
<br />
J'ai choisi d'utiliser le script JS bien connu Roundies afin de reproduire les effets du border radius sous IE. Bien �videmment ce script est appel� en fin de page et ne g�ne pas le chargement.<br>
<h4>Une version mobile</h4>
Teen Quotes existe en version mobile, optimis� pour les smartphones � l'adresse <a href="http://m.teen-quotes.com" target="_blank">http://m.teen-quotes.com</a>.<br>
<br />
Ainsi les utilisateurs acc�dant � Teen Quotes depuis un smartphone naviguent sur un site adapt�, clair et optimis� pour leur appareil mobile. Les utilisateurs trouvent rapidement et facilement les citations qu'ils veulent, toujours dans les 2 langues.<br>
<br />
L'accent est mis sur la facilit� d'utilisation, et sa rapidit� !<br>
<br />
<h4>Concernant la traduction de l'interface</h4>
La traduction de l'interface se fait en fonction du cookie de langue stock� chez le client. En fonction de celui ci, diff�rents fichiers de langages sont appel�s. Ainsi, tout le texte est s�par� pour les 2 langues (fran�ais et anglais) et l'ajout d'une autre langue peut se faire tr�s facilement.
</div>


<span id="contact" class="titre">Contact <img src="images/contact.png" class="icone" /></span>
<div class="texte">
<li><span class="bleu">Email :</span> antoine@augusti.fr</li>
<li><span class="bleu">Windows Live :</span> antoine@augusti.fr</li>
<li><span class="bleu">Site internet :</span> <a href="http://www.antoine-augusti.fr" target="_blank">http://www.antoine-augusti.fr</a></li>
<li><span class="bleu">Facebook :</span> <a href="http://facebook.com/AntoineAug" target="_blank">http://www.facebook.com/AntoineAugusti</a></li>
<li><span class="bleu">Twitter :</span> <a href="http://twitter.com/AntoineAug" target="_blank">http://twitter.com/AntoineAug</a></li>
<li><span class="bleu">Skype :</span> AntoineAugusti</li>
</div>


<?php include 'footer.php' ?>

