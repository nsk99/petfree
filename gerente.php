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
	    		<li class="grey lighten-3"><a href="gerente.php"><i class="material-icons">home</i>início</a></li>
	    		<li><a href="arquivados.php"><i class="material-icons">call_to_action</i>Arquivados</a></li>
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

		<div class="fixed-action-btn horizontal click-to-toggle">
		  <a class="btn-floating btn-large black" href="#modal-criar-publicacao">
		    <i class="material-icons">add_a_photo</i>
		  </a>
		</div>

		<!-- Modal para criar publicação -->
		<div id="modal-criar-publicacao" class="modal">
		    <div class="modal-content">

		      <h4>Criar nova publicação</h4>

		      <div class="row">

			    <form class="col s12">
			      <div class="row">
			        <div class="input-field col s12">
			          <textarea id="textarea1" class="materialize-textarea"></textarea>
			          <label for="textarea1">Título</label>
			        </div>
			      </div>
			    </form>

			    <form class="col s12">
			      <div class="row">
			        <div class="input-field col s12">
			          <textarea id="textarea1" class="materialize-textarea"></textarea>
			          <label for="textarea1">Escreva alguma coisa sobre o pet</label>
			        </div>
			      </div>
			    </form>
			 </div>

			 <form action="#">
			    <div class="file-field input-field">
			      <div class="btn black">
			        <span>Imagem</span>
			        <input type="file" multiple>
			      </div>
			      <div class="file-path-wrapper">
			        <input class="file-path validate" type="text" placeholder="Faça o upload de uma ou mais fotos">
			      </div>
			    </div>
			 </form>

		    </div>

		    <div class="modal-footer">
		    	<a href="#!" class="modal-close waves-effect waves-green btn-flat">Publicar</a>
		      	<a href="#!" class="modal-close waves-effect btn-flat">Cancelar</a>
		    </div>
		 </div>

  		<div id="content" class="grey lighten-3">

    		<a href="#" data-activates="slide-out" class="button-collapse hide-on-large-only"><i class="material-icons">menu</i></a>
    
    		<h4>Informações atuais</h4>

    		<div class="row">
			    <div class="col s6 m6">
			      <div class="card white">
			        <div class="card-content">
			          <span class="card-title">Animais em espera</span>
			          <h1>25</h1>
			        </div>
			      </div>
			    </div>

			    <div class="col s6 m6">
			      <div class="card white">
			        <div class="card-content">
			          <span class="card-title">Animais adotados</span>
			          <h1>7</h1>
			        </div>
			      </div>
			    </div>
			</div>

			<h4>Suas publicações</h4>

				<div class="row">
				    <div class="col s6 m6">
				      <div class="card large">
				        <div class="card-image">
				          <img src="sample-1.jpg">
				          <span class="card-title">Nome do pet</span>
				          <a class="btn-floating halfway-fab waves-effect waves-light black"><i class="material-icons">create</i></a>
				        </div>
				        <div class="card-content">
				          <p>Aqui serão apresentadas as características do pet em questão.</p>
				        </div>
				      </div>
				    </div>

				    <div class="col s6 m6">
				      <div class="card large">
				        <div class="card-image">
				          <img src="sample-1.jpg">
				          <span class="card-title">Nome do pet</span>
				          <a class="btn-floating halfway-fab waves-effect waves-light black"><i class="material-icons">create</i></a>
				        </div>
				        <div class="card-content">
				          <p>Aqui serão apresentadas as características do pet em questão.</p>
				        </div>
				      </div>
				    </div>
				</div>
				    
    		

  		</div>
    
	</div>


    <!--  Scripts-->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script src="js/materialize.js"></script>
 
  <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js'></script>
  <script  src="js/func.js"></script>

  </body>
</html>