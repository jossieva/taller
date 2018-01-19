<?php require_once '../login.php'; ?>
<!DOCTYPE  html>
<html lang="es">
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">	
	<meta name=”apple-mobile-web-app-capable” content=”yes” />
	<title>Taller.. . </title>
	<link rel="stylesheet" href="../lib/css/bootstrap.min.css" type="text/css" />
	<!-- jQuery -->
    <script src="../lib/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../lib/js/bootstrap.min.js" type="text/javascript"></script>
    <style>
    body{
			background:#000;
		}
		.fondoLogin{
			background:#FFFFFF;
			border-color: #fff;
			margin-top:50px;
			padding-bottom:50px;
			box-shadow: #000;
			box-shadow:0px 3px 5px 0px;
		}
    @media screen and (max-width: 480px) {
		    body {
		        background:#ffffff;
		    }
			.fondoLogin{
				background:#FFFFFF;
				border-color: #fff;
				padding-top:20px;
				padding-bottom:50px;
				box-shadow: none;
				
			}	
		}

		.logo{
			padding-bottom: 15px;
		}
		.textCti{
			color:#003399;
			font-family:"Arial Narrow";
			font-style:italic;
			font-weight:bold;
			font-size:medium;
		}
    </style>
	</head>
	<body>
		<section class="container" id="login">
			<section class="row">
				<article class="col-md-offset-4 col-md-4 col-sm-12 fondoLogin" >
					<div class="row">
						<div class="col-md-offset-1 col-md-10 col-sm-12">
							<img src="../images/logo.png" class="img-responsive logo" />
							<p align="center" class="textCti">
								<strong>
									Sistema de Constancia de Servicio
								</strong>
							</p>
						</div>
					</div>
					<div class="row">
						<form class="form-horizontal" method="post" action="">
							<div class="col-md-offset-1 col-md-10 col-sm-12">
								<div class="form-group">
									<div class="col-md-12">
										<div class="input-group">
		      							<div class="input-group-addon">
		      								<span class="glyphicon glyphicon-user"></span>
		      							</div>
											<input class="form-control" type="text" placeholder="Nombre de Usuario" name="usuario"/>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										<div class="input-group">
		      							<div class="input-group-addon">
		      								<span class="glyphicon glyphicon-lock"></span>
		      							</div>
											<input class="form-control" type="password" placeholder="Ingrese su Contraseña" maxlength="15" name="clave" />
										</div>
									</div>
								</div>
								<div class="col-md-12 mensaje">
									<p>
										<?php
										
											if(isset($mensaje)){
												echo "<span class='fa fa-exclamation-triangle'> ";
												echo $mensaje;
												echo "</span>";
											}											
										?>										
									</p>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										<div class="col-sm-12 col-md-12">
											<button type="submit" class="btn btn-primary btn-block" id="loginbtn" name="submit">Ingresar 
												<span class="glyphicon glyphicon-log-in"></span>									
											</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="row ">
						<div class="col-md-12">
							<h4 class="recomendar"><span class="fa fa-info-circle"></span>  Recomendaciones:</h4>
							<ul class="recomendaciones">
								<li>
									<span class="fa fa-asterisk" aria-hidden="true"></span>Por seguridad no comparta su contraseña.
								
							</ul>
						</div>
					</div>
					
				</article>
			</section>
			
		</section>
	</body>
</html>
