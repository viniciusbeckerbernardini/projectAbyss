<!DOCTYPE html>
<html>
	<head>
		<title>Welcome to the Abyss, there's no way out...</title>
		<meta charset="utf-8">
		<meta name="author" content="Leonardo P. Oliveira & Vinícius B. Bernardini.">
		<meta name="description" content="In the Age of Ancients the world was unformed, shrouded by fog. A land of grey crags, arch-trees and everlasting dragons. But then there was Fire, and with Fire came Disparity. Heat and cold, life and death, and of course... Light and Dark. Then, from the Dark they came and found the Souls of Lords within the flame. Nito, the First of the Dead; The Witch of Izalith and her daughters of Chaos; Gwyn, the Lord of Sunlight, with his faithful knights; And the furtive pygmy, so easily forgotten. With the Strength of Lords, they challenged the dragons. Gwyn's mighty bolts peeled apart their stone scales. The witches weaved great firestorms. Nito unleashed a miasma of death and disease. And Seath the Scaleless betrayed his own and the dragons were no more. Thus began the Age of Fire... But soon, the flames will fade and only Dark will remain. Even now, there are only embers and man sees not light, but only endless nights. Amongst the living are seen carriers of the accursed Darksign.">
		<meta name="keywords" content="Dark Souls, Artorias, Manus, Sif, Abyss">
		<!--Link nosso CSS-->
		<!--Puxando o CSS próprio-->
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
		<!--Preparando para o uso do Bootstrap-->
		<!--Liberar leitura das medias queries:-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Adicionando favicon:-->
		<link rel="icon" href="../images/icon.png">
		<!--Incorporando o css do Bootstrap:-->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<!--Incorporando o JS do Bootstrap: -->
		<script src="../js/bootstrap.min.js"></script>
		<!--Incorporando o JQuery do Bootstrap: -->
		<script src="../js/jquery-3.1.1.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=IM+Fell+English+SC" rel="stylesheet">
	</head>
	<body>
	<header id="menu">
		<div class="media">
			<img src="../images/topo.png" alt="topo" class="img-responsive" style="width:55%;">
		</div>
			<nav class="navbar navbar-inverse"  style="margin-bottom: 0;">
		  		<div class="container-fluid">
					<ul class="nav navbar-nav">
						<li> <a href="../index.html">Home</a></li>
						<li> <a href="../galeria.html">Galery</a></li>
						<li> <a href="../personagens.html">Lores</a></li>
						<li class="active"> <a href="../visao/contato.html">Contact</a></li>
						<li> <a href="http://www.fromsoftware.jp/pc_en/">From Software</a></li>
						<li> <a href="http://store.steampowered.com/app/211420/">Buy it!</a></li>
					</ul>
		  		</div>	
			</nav>
		</header>
		<section id="conteudo" style="margin-bottom:0; border-bottom:0;">
		    <div class="principal">
	            <h1 class="titulos" style="margin-top:0;">You died</h1>
                    <?php
    	                $nome = $_GET['nome'];
		                $email = $_GET['email'];
		                $telefone = $_GET['telefone'];
		                $assunto = $_GET['assunto'];
		                echo '<p class="pilot">Nome: '.$nome.
      		            '<br />Email: '.$email.
      		            '<br />Telefone: '.$telefone.
      		            '<br />Assunto: '.$assunto.'</p>'
	                ?>
	       </div>
		</section>
		<footer class="row" style="margin-top: 0; border-top:0;">	
		    <span>Vinicius B. Bernardini &amp; Leonardo P. Oliveira. 1994-2017 FromSoftware, Inc. All right reserved &copy; </span>
		</footer>		
	</body>	
</html>