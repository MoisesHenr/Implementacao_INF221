<!DOCTYPE html>
<html lang="pt-br">
<head>
  	<title>Sistema de Avaliação de Disciplinas</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <nav id="menu_navbar" class="navbar navbar-inverse">
		<div class="container-fluid">
	    	<ul class="nav navbar-nav">
	      		<li class="active"><a class="navbar-brand" tabindex="-1">GAME OF SAPIENS</a></li>
	      		<li><button type="button" class="btn btn-default navbar-btn">Avaliar</button></li>
	      		<li><button type="button" class="btn btn-link navbar-btn">Perfil</button></li>
	      		<li><button type="button" class="btn btn-link navbar-btn">Sair</button></li>
	    	</ul>
	  	</div>
    </nav>

    <script type="text/javascript">
    	var canvas = document.getElementById('canvas');
		var ctx = canvas.getContext('2d');

		ctx.fillStyle = 'green';
		ctx.fillRect(10, 10, 100, 100);
    </script>

</head>

<body>

    <div class="container">
        <h3><b>Física 1 (FIS 201)</b></h3>
        <hr size="20" width="100%">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4><b>Média das avaliações</b></h4>
                <hr size="20" width="100%">

                <label>
                		<h4><b>Dedicação necessária: </b><b id="dedicação">4.8</b></h4>
                </label>
                <br>
                <label>
                		<h4><b>Trabalho extra sala: </b><b id="trabalho">0</b></h4>
                </label>
                <br>
                <label>
                		<h4><b>Nível de dificuldade: </b><b id="dificuldade">3.0</b></h4>
                </label>
                <br>
                <label>
                		<h4><b>Utilidade: </b><b id="Utilidade">4.1</b></h4>
                </label>
                <br>
                <br>

                <div class="panel panel-default">
				  	<div class="panel-heading">Avaliações</div>
				  	<div class="panel-body">
				    	<p>"A matéria da P1 é a mais fácil"</p>
				    	<p>"É tranquila, mas recomendo ir na monitoria"</p>
				    	<p>"Reprovei 3 vezes, no entanto, adorei"</p>
				    	<br>
				    	<center><a>Ver tudo</a></center>
				  	</div>
				</div>
            </div>
            <div class="col-md-6">
                <div class="col-md-12">
                	<button type="button" class="btn btn-outline-primary navbar-right" data-toggle="modal" data-target="#modalAvalicao">Avaliar disciplina</button>
                	<br>
                	<br>
                	<br>
                	<br>
                	<br>
                	<br>
                </div>

                <div class="col-md-12" align="center">
                	<canvas id="canvas"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalAvalicao" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<form>
						<div class="container">
							<div class="row">
							
								<div class="col-md-5">
									<h4><b>Avaliação disciplina</b></h4>
	                				<hr size="20" width="100%">
	                				
                					<label>
	                					<h5><b>Facilidade: </b></h5>
					                </label>
				                	<input type="radio" name="facilidade" class="facilidade" value="0"> 0
								    <input type="radio" name="facilidade" class="facilidade" value="1"> 1
								  	<input type="radio" name="facilidade" class="facilidade" value="2"> 2
								  	<input type="radio" name="facilidade" class="facilidade" value="3"> 3
								    <input type="radio" name="facilidade" class="facilidade" value="4"> 4
								  	<input type="radio" name="facilidade" class="facilidade" value="5"> 5
					                
					                <br>
					                <label>
					                	<h5><b>Utilidade: </b></h5>
					                </label>
				                	<input type="radio" name="utilidade" class="utilidade" value="0"> 0
								    <input type="radio" name="utilidade" class="utilidade" value="1"> 1
								  	<input type="radio" name="utilidade" class="utilidade" value="2"> 2
								  	<input type="radio" name="utilidade" class="utilidade" value="3"> 3
								    <input type="radio" name="utilidade" class="utilidade" value="4"> 4
								  	<input type="radio" name="utilidade" class="utilidade" value="5"> 5

					                <br>
					                <label>
					                	<h5><b>Recomenda: </b></h5>
					                </label>
				                	<input type="radio" name="recomenda" class="recomenda" value="sim"> Sim
								    <input type="radio" name="recomenda" class="recomenda" value="nao"> Não

					                <br>
					                <label>
					                	<h5><b>Conceito: </b></h5>
					                </label>
					                <select id="conceito" class="form-control">
									  	<option value="passeiDireto">Passei direto</option>
									  	<option value="passeiFinal">Passei final</option>
									  	<option value="reprovei">Reprovei</option>
									</select>
								</div>	
								<div class="col-md-9">
									<label>
					                	<h5><b>Comentário (opcional): </b></h5>
					                </label>
					                <textarea name="comentario" id="comentario" class="form-control" placeholder="Conte-nos como foi sua experiência com a disciplina... Lembre-se do seu professor..."></textarea>
					                <br>
									<br>
									<br>
								</div>
								<div class="col-md-12"></div>

								<div class="col-md-3">
									<label>
					                	<h5><b>Ocultar nome: </b></h5>
					                </label>
					                <input type="checkbox" id="ocultarNome">
								</div>
								<div class="col-md-3">
									<center><button type="button" class="btn btn-outline-primary" data-dismiss="modal">Avaliar disciplina</button></center>
								</div>
							
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
