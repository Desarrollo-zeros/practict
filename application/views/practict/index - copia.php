<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Material Design for Bootstrap fonts and icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

    <!-- Material Design for Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.0.0-beta.3/dist/css/bootstrap-material-design.min.css" integrity="sha384-k5bjxeyx3S5yJJNRD1eKUMdgxuvfisWKku5dwHQq9Q/Lz6H8CyL89KF52ICpX4cL" crossorigin="anonymous">
    <style>
		.barra{
			background-color: #008080;;
		}
		.form-control::-moz-placeholder {
		  color: white;
		}
		.form-control:-ms-input-placeholder {
		  color: white;
		}
		.form-control::-webkit-input-placeholder {
		  color: white;
		}
		#login{
			color: white;
			background-color: #008888;
		}
		#login:hover{
			background-color: #0B87BC
		}
		#olvidoC{
			color: aqua;
		}
		footer {
			margin-top: 20px;
		}
	</style>
  </head>
  <body>
  	<nav class="navbar navbar-light justify-content-between barra">
  		
  		<div class="container">
  			<h2 class="navbar-brand" style="color: white;">Practict</h2>
			<form class="form-inline">
				<input type="text" name="user" class="form-control mr-sm-2" placeholder="Usuario o Email" aria-label="Usuario 0 Email" style="color: white">
				<input class="form-control mr-sm-2" type="password" placeholder="Contraseña" aria-label="Contraseña" name="pass">
				<button id="login" class="btn btn-outline-info my-2 my-sm-0" type="submit" style="color: white">Iniciar Sessión</button>
				&nbsp;&nbsp;<a href="" style="color: aqua" id="olvidoC" data-toggle="modal" data-target="#exampleModal">¿Olvidaste la Contraseña?</a>
			</form>
  		</div>
	</nav>
	<div class="container">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner" style="height: 500px;margin-top: 10px;">
		<div class="carousel-item active">
		  <img class="d-block w-100" src="img/emfermeras.jpg" alt="Second slide">
		</div>
		<div class="carousel-item">
		  <img class="d-block w-100" src="img/emfermeras1.jpg" alt="Second slide">
		</div>
		<div class="carousel-item">
		  <img class="d-block w-100" src="img/Enfermeras3.jpg" alt="Third slide">
		</div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>
	</div>
	
	<div class="container">
		<div style="background-color: #C0C0C0;margin-top: 20px;padding: 20px;" class="container-fluid">
			<div class="row">
				<div class="col-sm-4">
					<h3>Objetivos</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt reiciendis quae nihil accusamus quos, nobis cupiditate eius dolores inventore vitae tempore, porro vel optio blanditiis iure. Vel illum, iusto beatae!
					</p>
				</div>
				<div class="col-sm-4">
					<h3>Caracteristicas</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam aspernatur placeat, impedit, in similique possimus excepturi ipsum doloribus amet eos inventore cumque sunt quisquam obcaecati unde quam quos molestiae ratione.
					</p>
				</div>
				<div class="col-sm-4">
					<h3>Otra Cosa</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos repellendus earum delectus commodi, cum consectetur voluptatibus labore. Reiciendis, placeat velit perferendis eos omnis magni odio, nihil nostrum voluptatum, deserunt mollitia.
					</p>
				</div>
			</div>
		</div>
		
	</div>
    <footer>
    	<nav class="navbar navbar-light barra">
		  <a class="navbar-brand" href="#">Navbar</a>
		</nav>
    </footer>
    <!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Cambiar Contraseña</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <form action="">
		  	  <div class="modal-body">
		  	  	  <div class="form-group">
					<label for="exampleInputEmail1" class="bmd-label-floating">Correo</label>
					<input type="email" class="form-control" id="exampleInputEmail1">
					<span class="bmd-help">Al correo se le llegara un link donde podra cambiar la contraseña.</span>
				  </div>
			  </div>
			  <div class="modal-footer">
				<button type="submit" class="btn btn-primary">Enviar</button>
			  </div>
		  </form>
		</div>
	  </div>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.5/dist/umd/popper.js" integrity="sha384-KlVcf2tswD0JOTQnzU4uwqXcbAy57PvV48YUiLjqpk/MJ2wExQhg9tuozn5A1iVw" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.0.0-beta.3/dist/js/bootstrap-material-design.js" integrity="sha384-hC7RwS0Uz+TOt6rNG8GX0xYCJ2EydZt1HeElNwQqW+3udRol4XwyBfISrNDgQcGA" crossorigin="anonymous"></script>
    <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
  </body>
</html>
