<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Projeto Objeto</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div class="container">
		<header>
			<h1>Projeto Objeto</h1>
		</header>
		<?php
     		 include_once "menu.php";
    	?>  
	

		<div class="imagens">		
  			<div class="row">
    			<div class="col">
    			</div>
    			<div class="col">
    				<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
		  				<div class="carousel-inner">
		    				<div class="carousel-item active">
		      					<img class="carousel" src="imagem/pc01.jpg" class="d-block w-100" alt="pc01">
		    				</div>
		    				<div class="carousel-item">
		      					<img class="carousel" src="imagem/pc02.jpg" class="d-block w-100" alt="pc02">
		    				</div>
		    				<div class="carousel-item">
		      					<img class="carousel" src="imagem/pc03.jpg" class="d-block w-100" alt="pc03">
		    				</div>
		  				</div>
					  		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
					    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    		<span class="visually-hidden">Previous</span>
					  		</button>
					  		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
					    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
					    		<span class="visually-hidden">Next</span>
					  		</button>
					</div>	
				</div>
				<div class="col">
    			</div>	
    		</div>    			
  		</div>
  		<footer>
  			<h3>Feito por turma 2021.3</h3>
  			<p>Técnico de Informática<br>
  				Professor: Clayton Oliveira</p>
  		</footer>					
	</div>	
</body>
</html>