<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Perfil de los jugadores" />
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/jugadores_style.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/reset.css">
</head>
	<script src="<?=base_url()?>assets/js/jquery-1.10.2.min.js"></script>
	<script src="<?=base_url()?>assets/js/semantic.js"></script>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/semantic.css">
<body>
	
		<header>
			<div id="divlogo">
				<img src="<?=base_url()?>assets/images/sportsapp.png" alt="SportsApp">

			    <div style="display:none;" id="login" class="ui green button">Log-in</div>

			</div>
			<div id="like" class="fb-like" data-href="https://facebook.com/sportsapp.cd" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
		</header>
		<nav>
			<div id="menusito" class="ui green inverted menu" style="padding-left:20%;padding-right:20%;">
			  <a class="item" id="inicio" href="<?=base_url()?>index.php/principal">
			    <i class="home icon"></i>Inicio
			  </a>
			  <a class="item">
			    <i class="trophy icon"></i> Equipos
			  </a>
			  <a class="item" href="<?=base_url()?>index.php/perfiles">
			    <i class="users icon"></i> Jugadores
			  </a>
			  <a class="item" href="<?=base_url()?>index.php/empresa">
			    <i class="globe icon"></i> ¿Quienes somos?
			  </a>
			</div>
		</nav>		
		<section>
			<article>		
				<figure>
					<img src="<?=base_url()?>assets/images/messi.jpg">			
				</figure>
				
				<div id="datos">
					<span>Nombre</span><span>Jesús Ernesto Cervantes García</span>
					<br/><br/>
					<span>Pases Acertados</span><span class="datos">109</span>
					<br/><br/>
					<span>Goles</span><span>12</span>
					<br/><br/>
					<span>Asistencias</span><span>18</span>
					<br/><br/>
					<span>Faltas Cometidas</span><span>10</span>	
					<br/><br/>
					<span>Tarjetas Amarillas</span><span>6</span>					
					<br/><br/>
					<span>Tarjetas Rojas</span><span>2</span>	
				</div>
							
			</article>			

		</section>	

			<div id="socialbar">
				<font face=Arial size=2 color=008C00>
				<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;<b>Copyright ©2013 SportsApp. All rights reserved.<a href="#"><font face=Arial size=2 color=008C00> Designed by Cultura Digital.</b></a>
				<ul>
					<li><a href="https://www.facebook.com/sportsapp.cd"><img id="t" src="<?=base_url()?>assets/images/t.png" width=18 height=20></a></li>
					<li><a href="https://twitter.com/@SportsAppCD"><img id="f" src="<?=base_url()?>assets/images/f.png" width=18 height=20></a></li>
				</ul>
			</div>
			<div id="logo2" src="images/logo2.png"></div>
	
</body>
</html>