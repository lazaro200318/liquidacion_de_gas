<?php
    require_once("CONFIG/Conexion.php");
    if(isset($_POST["enviar"]) and $_POST["enviar"]=="si"){
        require_once("MODELS/Usuario.php");
        $usuario = new Usuario();
        $usuario->login();
    }
?>
<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>SISTEMA:: ACCESO: SISTEMA</title>

                
       
        
        <link href="PUBLI/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="PUBLIC/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="PUBLIC/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="PUBLIC/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="PUBLIC/img/favicon.png" rel="icon" type="image/png">
	<link href="PUBLIC/img/favicon.ico" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    
    <link rel="stylesheet" href="PUBLIC/css/separate/pages/login.css">
    <link rel="stylesheet" href="PUBLIC/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="PUBLIC/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="PUBLIC/css/main.css">
<body>

    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                <form class="sign-box" action="" method="post" id="login_form">
                    <div class="sign-avatar">
                        <img src="PUBLIC/img/gasolineria.jpg"width="1000" height ="170" alt="200">
                    </div>
                   
                    <font color="black"><font>
                    <h1><header class="sign-title">BIENVENIDO</header><font color="black"><font></h1>
                    <?php
                        if (isset($_GET["m"])){
                            switch($_GET["m"]){
                                case "1";
                                    ?>
                                        <div class="alert alert-purple alert-no-border alert-close alert-dismissible fade in" role="alert">
							                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								                <span aria-hidden="true">×</span>
							               </button>
                                           El Usuario y/o Contraseña son incorrectos.
						              </div>
                                    <?php
                                break;

                                case "2";
                                    ?>
                                       <div class="alert alert-warning alert-no-border alert-close alert-dismissible fade in" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
							Los campos estan vacios.
						</div>
                                    <?php
                                break;
                            }
                        }
                    ?>
                    
				    <div class="row">
					<div class="100x100.jpg">
						<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInput">ELIGE UNA ESTACION</label>
							<select id="exampleSelect" class="form-control">
								<option>PEMEX</option>
                                
	                         <option>LA GAS</option>
                              <option>OTROS</option>
							
	                          </select>
                     <div>
                            
                    <div class="form-group">
                        <input type="text" id="usu_correo" name="usu_correo"  class="form-control" placeholder="Correo electronico"/>
                    </div>
                    <div class="form-group">
                        <input type="password" id="usu_pass" name ="usu_pass" class="form-control" placeholder="Contraseña"/>
                    </div>
                    <div class="form-group">
                        
                        <div class="float-right reset">
                            <a href="reset-password.html">Espera un momento</a>
                        </div>
                        </div>
                        <input type="hidden" name="enviar" class= "form-control" value="si">
                        <button type="submit" class="btn btn-rounded btn-inline btn-primary-outline">Entrar</button>
                   
                    <!--<button type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>-->
                </form>
            </div>
        </div>
    </div><!--.page-center-->


<script src="PUBLIC/js/lib/jquery/jquery.min.js"></script>
<script src="PUBLIC/js/lib/tether/tether.min.js"></script>
<script src="PUBLIC/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="PUBLIC/js/plugins.js"></script>
    <script type="text/javascript" src="PUBLIC/js/lib/match-height/jquery.matchHeight.min.js"></script>
    <script>
        $(function() {
            $('.page-center').matchHeight({
                target: $('html')
            });

            $(window).resize(function(){
                setTimeout(function(){
                    $('.page-center').matchHeight({ remove: true });
                    $('.page-center').matchHeight({
                        target: $('html')
                    });
                },100);
            });
        });
    </script>
<script src="PUBLIC/js/app.js"></script>
</body>
</html>