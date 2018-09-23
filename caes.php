<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Início</title>

  <!-- CSS  -->
  <link href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="grey lighten-3">


	<div id="container">
  		<div id="menu">
	    	<ul id="slide-out" class="side-nav fixed">
	    		<br>
	    		<center><i class="large material-icons">person</i></center>
	    		<center><h4 class="card-title">Juarez</h4></center>
	    		<br>
	    		<li><a href="gerente.php"><i class="material-icons">home</i>início</a></li>
	    		<li><a href="arquivados.php"><i class="material-icons">call_to_action</i>Arquivados</a></li>
	    		<li><a href="solicitacoes.php"><i class="material-icons">drafts</i>Solicitações</a></li>
	    		<li><a href="cadastrarpet.php"><i class="material-icons">add</i>Cadastrar pet</a></li>
	      		<li><a href="cadastrargerente.php"><i class="material-icons">add</i>Cadastrar gerente</a></li>
	    		<li class="no-padding">
			        <ul class="collapsible collapsible-accordion">
			         	<li>
			            	<a class="collapsible-header">Pets<i class="material-icons">arrow_drop_down</i></a>
			            	<div class="collapsible-body">
			             		<ul>
			                		<li><a href="gatos.php">Gatos</a></li>
			                		<li><a href="caes.php">Cães</a></li>
			              		</ul>
			            	</div>
			          	</li>
			        </ul>
	      		</li>
	      		<li><a href="#!"><i class="material-icons red-text">exit_to_app</i>Sair</a></li>
	    	</ul>
  		</div>
		<div class="navbar-fixed">
	  		<nav class="white" role="navigation">
			    <div class="nav-wrapper container">
			      <a id="logo-container" href="gerente.php" class="brand-logo"><i class="material-icons">pets</i>PetFree</a>
			    </div>
			</nav>
		</div>


		<div id="content" class="grey lighten-3">

    		<a href="#" data-activates="slide-out" class="button-collapse hide-on-large-only"><i class="material-icons">menu</i></a>

    		<h4>Cães cadastrados</h4>
    	</div>
    </div>

	<!--  Scripts-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src="js/materialize.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js'></script>
    <script  src="js/func.js"></script>

  </body>
</html>