<!doctype html>
<html lang="es">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
    <meta name="author" content="Mhegasdev" />    
    <meta name="description" content="Mhegasdev Generar Codigo QR">
    <link rel="icon" type="image/png" href="images/dev.jpg">   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Generador Gratuito de Codigos QR</title>
    <!-- Stylesheets & Fonts -->
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/dropzone.css" rel="stylesheet">
    <meta name="description" content="Generador de codigos Qr, creador de Qrcode, codigos Qr, Qrcode"/>
    <meta name="keywords" content="Codigo Qr, Codigos Qr, Qrcode"/>
    <meta name="robots" content="Codigo Qr, Codigos Qr, Qrcode"/>
    
  </head>
  <body>
    
    <!-- Body Inner -->
    <div class="body-inner">
    	<div id="topbar" class="topbar-fullwidth dark d-none d-xl-block d-lg-block">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<ul class="top-menu">
						<li><a href="#">Telefono: 52 (238) 110-0402</a></li>
						<li><a href="#">Email: admin@mhegasdev.com.mx</a></li>
						</ul>
					</div>
					<div class="col-md-6 d-none d-sm-block">
						<div class="social-icons social-icons-colored-hover">
							<ul>
								<li class="social-facebook"><a href="https://www.facebook.com/MhegaDevs" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-twitter"><a href="#"><i class="fab fa-twitter" target="_blank"></i></a></li>
								<li class="social-instagram"><a href="https://www.instagram.com/MhegasDev" target="_blank"><i class="fab fa-instagram"></i></a></li>
								<li class="social-pinterest"><a href="https://www.pinterest.com.mx/MhegasDev/" target="_blank"><i class="fab fa-pinterest"></i></a></li>
								<li class="social-youtube"><a href="https://www.youtube.com/channel/UCd2WF5Blvqnzc0c1yequwrg" target="_blank"><i class="fab fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- Header -->
        <header id="header" class="dark" data-fullwidth="true">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                    	<a href="index.html"><span class="logo-default">M & D</span><span class="logo-dark">Mhegas & Dev</span></a>
                    	<!-- <a href="index.html"><img src="images/logo.png" class="logo-default"><img src="images/logo.png" class="logo-dark"></a> -->
                    	<!-- <a href="index.html"><img src="images/logo.png"></a> -->
                    </div>
                    <!--End: Logo-->
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <div id="mainMenu" class="menu-creative">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="https://www.mhegasdev.com.mx">Inicio</a></li>
                                    <!-- <li><a href="https://www.mhegasdev.com.mx/#proyectos">Proyectos</a></li>
                                    <li><a href="https://www.mhegasdev.com.mx/#nosotros">Nosotros</a></li>
                                    <li><a href="https://www.mhegasdev.com.mx/#servicios">Servicios</a></li>
                                    <li><a href="https://www.mhegasdev.com.mx/#experiencia">Experiencia</a></li> -->
                                    <li><a href="#footer">Contacto</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->
        <!-- end: Page title -->
        <!-- Section -->
        <section>
            <div class="content container">
                <div class="row">
                    <div class="col-lg-12">
                        <form  id="generador" class="form-validate" method='post'>
                            <div class="row">
                            	<div class="col-lg-8 col-md-8">
                            		<div class="row">
                            			<div class="col-12 col-md-12">
                            				<div class="tabs tabs-vertical">
                            					<div class="row">
	                            					<div class="col-md-3">
	                            						<a class="navbar-brand" href="#" id="menu">Menú</a>
	                            						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#listaOpcionesMenu" aria-controls="navbarText" aria-expanded="true" aria-label="Toggle navigation"><span class="lines"></span></button>
	                            						<div class="navbar-collapse collapse" id="listaOpcionesMenu">
														<ul class="nav flex-column nav-tabs" id="listaOpciones" role="tablist" aria-orientation="vertical">
															<li class="nav-item">
																<a class="nav-link active" id="url-link" data-toggle="tab" href="#url-tab" role="tab" aria-controls="url" aria-selected="false"><i class="icon-navigation"></i>URL</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" id="vcard-link" data-toggle="tab" href="#vcard-tab" role="tab" aria-controls="vcard" aria-selected="true"><i class="fa fa-id-card"></i>VCARD</a>
															</li>
															<li class="nav-item">

																<a class="nav-link" id="texto-link" data-toggle="tab" href="#texto-tab" role="tab" aria-controls="texto" aria-selected="false"><i class="icon-file-text"></i>TEXTO</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" id="email-link" data-toggle="tab" href="#email-tab" role="tab" aria-controls="email" aria-selected="true"><i class="icon-mail"></i>EMAIL</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" id="sms-link" data-toggle="tab" href="#sms-tab" role="tab" aria-controls="sms" aria-selected="false"><i class="icon-message-circle"></i>SMS</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" id="wifi-link" data-toggle="tab" href="#wifi-tab" role="tab" aria-controls="wifi" aria-selected="true"><i class="icon-wifi"></i>WIFI</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" id="twitter-link" data-toggle="tab" href="#twitter-tab" role="tab" aria-controls="twitter" aria-selected="true"><i class="icon-twitter"></i>TWITTER</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" id="facebook-link" data-toggle="tab" href="#facebook-tab" role="tab" aria-controls="facebook" aria-selected="false"><i class="fab fa-facebook"></i>FACEBOOK</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" id="telefono-link" data-toggle="tab" href="#telefono-tab" role="tab" aria-controls="telefono" aria-selected="true"><i class="icon-phone"></i>TELEFONO</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" id="maps-link" data-toggle="tab" href="#maps-tab" role="tab" aria-controls="maps" aria-selected="true"><i class="fa fa-map-marker"></i>MAPS</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" id="evento-link" data-toggle="tab" href="#evento-tab" role="tab" aria-controls="evento" aria-selected="true"><i class="fa fa-calendar-check"></i>EVENTO</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" id="file-link" data-toggle="tab" href="#file-tab" role="tab" aria-controls="evento" aria-selected="true"><i class="fa fa-calendar-check"></i>ARCHIVO</a>
															</li>
														</ul>
														</div>
													</div>
	                            					<div class="col-md-9">
														<div class="tab-content" id="myFormTabContent">
															<form role="form" class="form-horizontal" method="post" name="generador">
												                <div class="tab-content">
												                  	<div class="tab-pane fade active show" id="url-tab" role="tabpanel" aria-labelledby="url-tab">
													                  	<fieldset>
													                  		<div class="form-row">
													                            <div class="form-group col-md-12">
																                    <legend>Código QR para una dirección Web</legend>
																                    <div role="alert" class="alert alert-warning alert-dismissible">
													                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													                                    	<span aria-hidden="true">×</span>
													                                    </button>
													                                    <strong><i class="fa fa-check-circle"></i></strong> Introduce una dirección Web para generar un Código QR.
													                                </div>
																                </div>
																            </div>
														                    <div class="form-row">
													                            <div class="form-group col-md-12">
																                   	<label for="url">Url</label>
																                    <input id="url" name="url" type="url" maxlength="250" value="" class="form-control input">
																                </div>
																            </div>
													                	</fieldset>
													                </div>
											                      	<div class="tab-pane fade" id="vcard-tab" role="tabpanel" aria-labelledby="vcard-tab">
												                      	<fieldset>
												                           <div class="form-row">
													                            <div class="form-group col-md-12">
													                            	<legend>Código QR para una Vcard</legend>
																                    <div role="alert" class="alert alert-warning alert-dismissible">
													                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													                                    	<span aria-hidden="true">×</span>
													                                    </button>
													                                    <strong><i class="fa fa-check-circle"></i></strong> Introduce los datos de contacto para generar una Tarjerta con Código QR.
													                                </div>
																                </div>
																            </div>
												                           	<div class="form-row">
												                           		<div class="form-group col-md-6">
												                           			<label for="vcard_nombre">Nombre/Apellido:</label>
														                            <input name="vcard_nombre" class="form-control input" type="text" maxlength="40" value="">
												                           		</div>
												                           		<div class="form-group col-md-6">
												                           			<label for="vcard_direccion">Dirección:</label>
														                            <input name="vcard_direccion" type="text" class="form-control input" maxlength="40" value="">
												                           		</div>
												                           	</div>
												                           	<div class="form-row">
												                           		<div class="form-group col-md-6">
												                           			<label for="vcard_ciudad">Ciudad:</label>
														                            <input name="vcard_ciudad" type="text" class="form-control input" maxlength="40" value="">
												                           		</div>
												                           		<div class="form-group col-md-6">
												                           			<label for="vcard_estado">Estado:</label>
														                            <input name="vcard_estado" type="text" class="form-control input" maxlength="40" value="">
												                           		</div>
												                           	</div>
												                           	<div class="form-row">
												                           		<div class="form-group col-md-6">
												                           			<label for="vcard_pais">Pais:</label>
														                            <input name="vcard_pais" type="text" class="form-control input" maxlength="40" value="">
												                           		</div>
												                           		<div class="form-group col-md-6">
												                           			<label for="vcard_cp">CP:</label>
														                            <input name="vcard_cp" type="text" class="form-control input" maxlength="40" value="">
												                           		</div>
												                           	</div>
												                           	<div class="form-row">
												                           		<div class="form-group col-md-6">
												                           			<label for="vcard_telefono">Teléfono Oficina:</label>
														                            <input name="vcard_telefono" type="text" class="form-control input" maxlength="20" value="">
												                           		</div>
												                           		<div class="form-group col-md-6">
												                           			<label for="vcard_celular">Teléfono Movil:</label>
														                            <input name="vcard_celular" type="text" class="form-control input" maxlength="20" value="">
												                           		</div>
												                           	</div>
												                           	<div class="form-row">
												                           		<div class="form-group col-md-6">
												                           			<label for="vcard_email">Email:</label>
														                            <input name="vcard_email" type="text" class="form-control input" maxlength="40" value="">
												                           		</div>
												                           		<div class="form-group col-md-6">
												                           			<label for="vcard_cargo">Cargo:</label>
														                            <input name="vcard_cargo" type="text" class="form-control input" maxlength="40" value="">
												                           		</div>
												                           	</div>
												                           	<div class="form-row">
												                           		<div class="form-group col-md-6">
												                           			<label for="vcard_empresa">Empresa:</label>
														                            <input name="vcard_empresa" type="text" class="form-control input" maxlength="40" value="">
												                           		</div>
												                           		<div class="form-group col-md-6">
												                           			<label for="vcard_titulo">Etiqueta:</label>
														                            <input name="vcard_titulo" type="text" class="form-control input" maxlength="40" value="">
												                           		</div>
												                           	</div>
												                        	<div class="form-row">
													                            <div class="form-group col-md-12">
														                            <label for="vcard_web">Web:</label>
														                            <input id="vcard_web" name="vcard_web" type="url" maxlength="250" value="" class="form-control input">
													                            </div>
												                        	</div>
												                        </fieldset>
											                      	</div>
											                      	<div class="tab-pane fade" id="texto-tab" role="tabpanel" aria-labelledby="texto-tab">
												                      	<fieldset>
													                        <div class="form-row">
													                            <div class="form-group col-md-12">
													                            	<legend>Código QR para Texto</legend>
																                    <div role="alert" class="alert alert-warning alert-dismissible">
													                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													                                    	<span aria-hidden="true">×</span>
													                                    </button>
													                                    <strong><i class="fa fa-check-circle"></i></strong> Introduce un texto para generar un Código QR. Este código una vez leído desde un dispositivo móvil, permitirá al usuario leer el texto.
													                                </div>
																                </div>
																            </div>
													                        <div class="form-row">
													                        	<div class="form-group col-md-12">
															                        <label for="textarea">Texto:</label>
															                        <!-- <textarea name="textarea" class="form-control input" onkeydown="textCounter(this.form.textarea,this.form.textareamax,400);" onkeyup="textCounter(this.form.textarea,this.form.textareamax,400);"></textarea> -->
															                        <textarea name="textarea" class="form-control input"></textarea>
															                        <input readonly="" type="text" name="textareamax" size="3" maxlength="3" value="160" style="border:none; background-color:#FBFBFB; color:red"> 
															                        caracteres disponibles
													                        	</div>
													                        </div>
												                    	</fieldset>
											                      	</div>
												                    <div class="tab-pane fade" id="email-tab" role="tabpanel" aria-labelledby="email-tab">
												                      	<fieldset>
													                        <div class="form-row">
													                            <div class="form-group col-md-12">
													                            	<legend>Código QR para enviar email</legend>
																                    <div role="alert" class="alert alert-warning alert-dismissible">
													                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													                                    	<span aria-hidden="true">×</span>
													                                    </button>
													                                    <strong><i class="fa fa-check-circle"></i></strong> Introduce una dirección de email, el asunto y el texto del email para generar un Código QR. Este código una vez leído desde un dispositivo móvil, permitirá al usuario enviar el email.
													                                </div>
																                </div>
																            </div>
												                         	<div class="form-row">
													                        	<div class="form-group col-md-12">
															                        <label for="email">email:</label>
															                        <input id="email" name="email" type="text" maxlength="100" class="form-control input" placeholder="el@email.com" value="">
															                        <!-- <textarea name="thebody" class="form-control input" onkeydown="textCounter(this.form.thebody,this.form.remLenbody,160);" onkeyup="textCounter(this.form.thebody,this.form.remLenbody,160);"></textarea> -->
															                    </div>
															                    <div class="form-group col-md-12">
															                        <label for="subject">Asunto:</label>
															                        <input id="subject" name="subject" type="text" maxlength="100" class="form-control input" placeholder="Asunto" value="">
															                    </div>
															                    <div class="form-group col-md-12">
															                        <label for="thebody">Mensaje:</label>
															                        <textarea name="thebody" class="form-control input"></textarea>
															                        <input readonly="" type="text" name="remLenbody" id="remLenbody" size="3" maxlength="3" value="160" style="border:none; background-color:#FBFBFB; color:red;">caracteres disponibles
															                    </div>
															                </div>
													                    </fieldset>
												                    </div>
											                      	<div class="tab-pane fade" id="sms-tab" role="tabpanel" aria-labelledby="sms-tab">
											                      		<fieldset>
													                        <div class="form-row">
													                            <div class="form-group col-md-12">
													                            	<legend>Código QR para SMS</legend>
																                    <div role="alert" class="alert alert-warning alert-dismissible">
													                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													                                    	<span aria-hidden="true">×</span>
													                                    </button>
													                                    <strong><i class="fa fa-check-circle"></i></strong> Introduce un número de teléfono móvil y un mensaje  para generar un Código QR. Este código una vez leído desde un dispositivo móvil, permitirá al usuario enviar un SMS con el mensaje introducido.
													                                </div>
																                </div>
																            </div>
												                         	<div class="form-row">
													                        	<div class="form-group col-md-12">
															                        <label for="sms_telefono">Nº Teléfono:</label>
															                        <input id="sms_telefono" name="sms_telefono" type="text" size="20" maxlength="20" class="form-control input" placeholder="Introduce un número" value="">
															                    </div>
															                </div>
															                <div class="form-row">
													                        	<div class="form-group col-md-12">
															                        <label for="mensaje">Mensaje:</label>
															                        <!-- <textarea name="mensaje" class="form-control input" onkeydown="textCounter(this.form.mensaje,this.form.remLen,160);" onkeyup="textCounter(this.form.mensaje,this.form.remLen,160);"></textarea> -->
															                        <textarea name="mensaje" class="form-control input" ></textarea>
															                        <input readonly="" type="text" name="remLen" size="3" maxlength="3" value="160" style="border:none; background-color:#FBFBFB; color:red;">caracteres disponibles
															                    </div>
															                </div>
												                    	</fieldset>
												                    </div>
													                <div class="tab-pane fade" id="wifi-tab" role="tabpanel" aria-labelledby="wifi-tab">
													                	<fieldset>
													                        <div class="form-row">
													                            <div class="form-group col-md-12">
													                            	<legend>Código QR para WIFI</legend>
																                    <div role="alert" class="alert alert-warning alert-dismissible">
													                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													                                    	<span aria-hidden="true">×</span>
													                                    </button>
													                                    <strong><i class="fa fa-check-circle"></i></strong> Introduce el nombre de la red, el password wifi y el tipo de encriptación de seguridad de tu red WIFI para generar un Código QR con los datos de acceso a la red. Este código una vez leído desde un dispositivo móvil, permitirá al usuario configurar la conexión a la red WIFI.
													                                </div>
																                </div>
																            </div>
													                        <div class="form-row">
													                        	<div class="form-group col-md-12">
															                        <label for="sid">Nombre de Red/SID:</label>
															                        <input name="sid" class="form-control input" type="text" maxlength="50" value="">
															                    </div>
															                </div>
															                <div class="form-row">
															                	<div class="form-group col-md-12">
															                        <label for="pass">Password:</label>
															                        <input name="pass" class="form-control input" type="text" maxlength="50" value="">
															                	</div>
															                </div>
															                <div class="form-row">
															                	<div class="form-group col-md-12">
															                        <label for="size">Tipo de Seguridad:</label>
															                        <select name="encrypt" id="seguridad" class="form-control input">
															                            <option value="WPA">WPA</option>
															                            <option value="WEP" selected="">WEP</option>
															                            <option value="nopass">Sin Password</option>
															                        </select>
															                	</div>
															                </div>
													                    </fieldset>
													                </div>
													                <div class="tab-pane fade" id="twitter-tab" role="tabpanel" aria-labelledby="twitter-tab">
													                  	<fieldset>
														                    <div class="form-row">
													                            <div class="form-group col-md-12">
													                            	<legend>Código QR para twitter</legend>
																                    <div role="alert" class="alert alert-warning alert-dismissible">
													                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													                                    	<span aria-hidden="true">×</span>
													                                    </button>
													                                    <strong><i class="fa fa-check-circle"></i></strong> Introduce una direccion de perfil para generar un Código QR. Este código una vez leído desde un dispositivo móvil, permitirá al usuario visitar el perfil introducido. 
													                                </div>
																                </div>
																            </div>
														                    <div class="form-row">
													                        	<div class="form-group col-md-12">
																					<!-- <div class="row">
																						<div class="col-md-12">
																							<label>Selecciona una opción:</label>
																							<div class="form-check optionTwit">
																								<input class="form-check-input" name="optTwitter" id="opcion1" value="1" checked="" type="radio">
																								<label class="form-check-label" for="opcion1">Perfil</label>
																							</div>
																							<div class="form-check optionTwit">
																								<input class="form-check-input" name="optTwitter" id="opcion2" value="2" type="radio">
																								<label class="form-check-label" for="opcion2">Publicar</label>
																							</div>
																						</div>
																					</div>
																					<div class="row" id="userTwit">
																						<div class="col-md-12">
																	                   	<label for="url">Usuario:</label>
																	                    <input id="userTwitter" name="userTwitter" type="text" maxlength="250" value="" class="form-control input">
																	                   	</div>
																					</div>
																					<div class="row" id="creaTwit">
																						<div class="col-md-12">
																		                   	<label for="creaTwitter">Mensaje:</label>
																                        	<textarea id="creaTwitter" name="creaTwitter" class="form-control" ></textarea>
																                        	<input readonly="" type="text" name="remLen" size="3" maxlength="3" value="160" style="border:none; background-color:#FBFBFB; color:red;">caracteres disponibles
															                        	</div>
																					</div> -->
																					<label for="twitter-input">Twitter</label>
																                    <input id="twitter-input" name="twitter-input" type="text" maxlength="250" value="" class="form-control input">
																                </div>
																            </div>
													                	</fieldset>
													                </div>
													                <div class="tab-pane fade" id="facebook-tab" role="tabpanel" aria-labelledby="facebook-tab">
													                  	<fieldset>
														                    <div class="form-row">
													                            <div class="form-group col-md-12">
													                            	<legend>Código QR para facebook</legend>
																                    <div role="alert" class="alert alert-warning alert-dismissible">
													                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													                                    	<span aria-hidden="true">×</span>
													                                    </button>
													                                    <strong><i class="fa fa-check-circle"></i></strong> Introduce una direccion de perfil para generar un Código QR. Este código una vez leído desde un dispositivo móvil, permitirá al usuario visitar el perfil introducido. 
													                                </div>
																                </div>
																            </div>
														                    <div class="form-row">
													                        	<div class="form-group col-md-12">
																                   	<label for="facebook-input">Facebook</label>
																                    <input id="facebook-input" name="facebook-input" type="text" maxlength="250" value="" class="form-control input">
																                </div>
																            </div>
													                	</fieldset>
													                </div>
											                     	<div class="tab-pane fade" id="telefono-tab" role="tabpanel" aria-labelledby="telefono-tab">
													                    <fieldset>
													                        <div class="form-row">
													                            <div class="form-group col-md-12">
													                            	<legend>Código QR para un Número de Teléfono</legend>
																                    <div role="alert" class="alert alert-warning alert-dismissible">
													                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													                                    	<span aria-hidden="true">×</span>
													                                    </button>
													                                    <strong><i class="fa fa-check-circle"></i></strong> Introduce una número de teléfono  para generar un Código QR. Este código una vez leído desde un dispositivo móvil, permitirá al usuario realizar una llamada al número introducido.
													                                </div>
																                </div>
																            </div>
													                        <div class="form-row">
													                        	<div class="form-group col-md-12">
															                        <label for="num_telefono">Nº Teléfono:<br></label>
															                        <input name="num_telefono" class="form-control input" type="text" size="20" maxlength="20" value="">
															                    </div>
															                </div>
												                    	</fieldset>
											                      	</div>
												                    <div class="tab-pane fade" id="maps-tab" role="tabpanel" aria-labelledby="maps-tab">
												                    	<fieldset>
													                        <div class="form-row">
													                            <div class="form-group col-md-12">
													                            	<legend>Código QR para Geolocalización</legend>
																                    <div role="alert" class="alert alert-warning alert-dismissible">
													                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													                                    	<span aria-hidden="true">×</span>
													                                    </button>
													                                    <strong><i class="fa fa-check-circle"></i></strong> Introduce una latitud y una longitud para generar un Código QR con los datos de geolocalización. Este código una vez leído desde un dispositivo móvil, permitirá al usuario ubicar la posición en una aplición de mapas como google mpas o similar.
													                                </div>
																                </div>
																            </div>
													                        <div class="form-row">
													                        	<div class="form-group col-md-12">
															                        <label for="latitud">Latitud:</label>
															                        <input name="latitud" class="form-control input" type="text" maxlength="20" value="">
															                    </div>
															                </div>
															                <div class="form-row">
													                        	<div class="form-group col-md-12">
															                        <label for="longitud">Longitud:</label>
															                        <input name="longitud" class="form-control input" type="text" maxlength="20" value="">
													                        	</div>
													                        </div>
													                    </fieldset>
													                </div>
													                <div class="tab-pane fade" id="evento-tab" role="tabpanel" aria-labelledby="evento-tab">
													                	<div class="form-row">
												                            <div class="form-group col-md-12">
												                            	<legend>Código QR para un evento</legend>
															                    <div role="alert" class="alert alert-warning alert-dismissible">
												                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
												                                    	<span aria-hidden="true">×</span>
												                                    </button>
												                                    <strong><i class="fa fa-check-circle"></i></strong>Introduce la descripción y fechas del evento, este código una vez leído desde un dispositivo móvil, permitirá al usuario agendar el evento en alguna aplicacion de calendario o similar.
												                                </div>
															                </div>
															            </div>
													                	<div class="form-row">
													                		<div class="form-group col-md-12">
															                    <label for="evento">Descripcion del evento:</label>
															                    <input id="evento" name="evento" type="text" maxlength="250" value="" class="form-control input">
													                		</div>
													                    </div>
													                	<div class="form-row">
													                		<div class="form-group col-md-6">
														                    	<label for="latitud">Inicio Evento:</label>
														                    	<span class="glyphicon glyphicon-question-sign"></span>
														                    	<input class="form-control input" type="date" name="fechaini">
													                		</div>
													                		<div class="form-group col-md-6">
														                    	<label for="latitud">Fin Evento:</label>
														                    	<span class="glyphicon glyphicon-question-sign"></span>
														                    	<input class="form-control input" type="date" name="fechafin">
													                		</div>
													                	</div>
													                </div>
													                <div class="tab-pane fade" id="file-tab" role="tabpanel" aria-labelledby="file-tab">
													                	<div class="row">
													                		<div class="form-group col-md-12">
													                			<div class="toggle accordion accordion-shadow">
														                            <div class="ac-item ac-active">
														                                <h5 class="ac-title">Vista previa archivo</h5>
														                                <div class="ac-content">
														                                    <div class='vistaPreviaArchivo text-center'>
														                                    	<!-- Preview-->
														                                    	<div id='preview' class="text-center"></div>
													                            			</div>
														                                </div>
														                            </div>
														                        </div>
																			</div>
													                	</div>
													                </div>
													                <div class="form-row">
													                   <div class="form-group col-md-6">
														                    <label for="size">Tamaño</label>
														                	<select name="size" id="size" class="form-control input">
														                    	<option value='100'>Chico</option>
																				<option value='200'>Mediano</option>
																				<option value='300' selected>Grande</option>
																				<option value='400'>Muy grande</option>
																				<!-- <option value='500'>Muy Grande</option> -->
														                    </select> 
													                    </div>
												                     	<div class="form-group col-md-6">
																		  	<label for="colorCode">Color</label>
																		    <input class="form-control input colorCode" type="color" value="#f4b300" id="colorCode">
													                  	</div>
													              	</div>
												                	<p class="text-center" style="margin-top:20px; margin-bottom:0px">
												                		<button type="submit" class="btn btn-default" style=""> <span class="glyphicon glyphicon-refresh"></span> Generar Código QR</button>
												                	</p>
												                </div><!-- .fin de los paneles -->
												                
												            </form>
														</div>
													</div>
												</div>
											</div>
                            			</div>
                            		</div>
                            	</div>
                            	<div class="col-lg-4 col-md-4">
                            		<div class="toggle accordion accordion-shadow">
			                            <div class="ac-item ac-active">
			                                <h5 class="ac-title">Codigo Generado</h5>
			                                <div class="ac-content">
			                                    <div class='result text-center'>
			                                    	<img id="vistaPrevia" class="img-fluid img-thumbnail vistaPrevia codigoGenerado" src="images/websiteQRCode_noFrame.png">
		                            			</div>
			                                </div>
			                            </div>
			                           <!--  <svg id="mySvg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"></svg> -->
			                            <!-- <div class="ac-item">
			                                <h5 class="ac-title">Plantillas</h5>
			                                <div class="ac-content" style="display: none;">
			                                    <p>When, while the lovely valley teems with vapour around me, and the meridian sun
			                                        strikes the upper surface of the impenetrable foliage of my trees, and but a few
			                                        stray gleams steal into the inner sanctuary.</p>
			                                    <p>I throw myself down among the tall grass by the trickling stream; and, as I lie
			                                        close to the earth, a thousand unknown plants are noticed by me</p>
			                                </div>
			                            </div>
			                            <div class="ac-item">
			                                <h5 class="ac-title">Logotipo</h5>
			                                <div class="ac-content" style="display: none;">
			                                    <p>As it floats around us in an eternity of bliss; and then, my friend, when
			                                        darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and
			                                        absorb its power, like the form of a beloved mistress</p>
			                                    <p>I often think with longing, Oh, would I could describe these conceptions, could
			                                        impress upon paper all that is living so full and warm within me, that it might
			                                        be the mirror of my soul, as my soul is the mirror of the infinite God! O my
			                                        friend — but it is too much for my strength — I sink under the weight of the
			                                        splendour of these visions!”</p>
			                                </div>
			                            </div> -->
			                        </div>
			                        <div class="content">
				                        <div class="row">
				                        	<div class="col-md-12 text-center">
					                        	<div class="p-dropdown p-dropdown-invert">
				                                    <a id="btnDropdown" href="#" class="btn btn-default btn-shadow">
				                                    	<i class="icon-download-cloud iconDescarga"></i>Descargar
				                                    </a>
				                                    <ul class="p-dropdown-content">
				                                        <li>
				                                        	<a href="#" class="btn btn-default jpgDownload" download="Qrcode.png">
				                                        		<i class="icon-image"></i>JPG</a>
				                                        </li>
				                                        <!-- <li>
				                                            <hr>
				                                        </li> -->
				                                        <!-- <li>
				                                        	<a href="#" class="svgDownload"><i class="icon-file"></i>SVG</a>
				                                        </li> -->
				                                    </ul>
				                                </div>
				                        	</div>
				                        </div>
			                        </div>
                            	</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Section -->
        <!-- Footer -->
        <footer id="footer" class="inverted">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4  col-lg-4 col-md-4">
                            <!-- Footer widget area 1 -->
                            <div class="widget  widget-contact-us contacto" style="background-image: url('images/world-map-dark.png'); background-position: 50% 20px; background-repeat: no-repeat">
                                <h4>Contactanos</h4>
                                <ul class="list-icon">
                                    <li><i class="fa fa-map-marker-alt"></i> <!-- 795 Folsom Ave, Suite 600  <br>-->
                                        Tehuacán, Puebla</li>
                                    <li><i class="fa fa-phone"></i> (238) 1100402 </li>
                                    <li><i class="far fa-envelope"></i> <a href="mailto:first.last@example.com">admin@mhegasdev.com.mx</a> </li>
                                    <li>
                                        <i class="far fa-clock"></i>Lunes - Viernes: <strong>09:00 - 6:00</strong>
                                        <br>Sabado, Domingo: <strong>Cerrado</strong> </li>
                                </ul>
                            </div>
                            <!-- end: Footer widget area 1 -->
                        </div>

                        <div class="col-lg-4  col-lg-4 col-md-4">
                            <!-- Footer widget area 1 -->
                            <ul class="menu-creative list-group menuFooter">
                                <li class="list-group-item menuFooterItem text-center"><a href="https://www.mhegasdev.com.mx">Inicio</a></li>
                                <!-- <li class="list-group-item menuFooterItem text-center"><a href="#">Servicios</a></li>
                                <li class="list-group-item menuFooterItem text-center"><a href="#">Nosotros</a></li>
                                <li class="list-group-item menuFooterItem text-center"><a href="#">Equipo</a></li> -->
                                <li class="list-group-item menuFooterItem text-center"><a href="#footer">Contacto</a></li>
                            </ul>
                            <!-- end: Footer widget area 1 -->
                        </div>
                        <div class="col-lg-4  col-lg-4 col-md-4">
                            <form class="widget-contact-form" novalidate="" action="include/contact-form.php" role="form" method="post">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input type="text" aria-required="true" name="widget-contact-form-name" class="form-control required name" placeholder="Nombre">
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                    </div>
                                    <input type="email" aria-required="true" required="" name="widget-contact-form-email" class="form-control required email" placeholder="Correo">
                                </div>
                                <div class="form-group mb-2">
                                    <textarea type="text" name="widget-contact-form-message" rows="5" class="form-control required" placeholder="Mensaje"></textarea>
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Enviar</button>
                                </div>
                            </form>

                        </div>


                    </div>
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Social icons -->
                            <div class="social-icons social-icons-colored-hover">
								<ul>
									<li class="social-facebook"><a href="https://www.facebook.com/MhegaDevs" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
									<li class="social-twitter"><a href="#"><i class="fab fa-twitter" target="_blank"></i></a></li>
									<li class="social-instagram"><a href="https://www.instagram.com/MhegasDev" target="_blank"><i class="fab fa-instagram"></i></a></li>
									<li class="social-pinterest"><a href="https://www.pinterest.com.mx/MhegasDev/" target="_blank"><i class="fab fa-pinterest"></i></a></li>
									<li class="social-youtube"><a href="https://www.youtube.com/channel/UCd2WF5Blvqnzc0c1yequwrg" target="_blank"><i class="fab fa-youtube"></i></a></li>
								</ul>
							</div>
                            <!-- end: Social icons -->
                        </div>

                        <div class="col-lg-6">
                            <div class="copyright-text text-center"><h5 class="fade-75">© 2020 Mhegasdev - All Rights Reserved. Mhegasdev</h5></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

		<div id="modalFile" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Subir archivo</h4>
				</div>
				<div class="modal-body">
					<!-- Form -->
					<form method='post' action='' enctype="multipart/form-data">
						<div class="dropzone clsbox" id="mydropzone"></div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				</div>
		    </div>
		  </div>
		</div>
    </div>


    <!-- end: Body Inner -->

    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/dropzone.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/codigoQr.js"></script>
    <script src="js/pdf.js"></script>

    <script src="js/imagetracer_v1.2.6.js"></script>

    <script src="plugins/validate/validate.min.js"></script>
    <script src="plugins/validate/validate-rules.js"></script>
	<!-- <div class='container' >
	<h1>Generar códigos QR con PHP y HTML</h1>
		<form method='post' id="generador">
			<div class='row'>
			<div class='col-md-4'>
				  <div class="form-group">
					<label for="textqr">Ingresa el texto</label>
					<input type="text" class="form-control input" id="textqr"  placeholder="Ingresa el texto" required>
					
				  </div>
				  
				  <button type="submit" class="btn btn-primary">Generar</button>
			</div>
			
			<div class='col-md-2'>
				  <div class="form-group">
					<label for="textqr">Tamaño</label>
					<select class='form-control input' id='sizeqr'>
						<option value='100'>100 px</option>
						<option value='200' selected>200 px</option>
						<option value='300'>300 px</option>
						<option value='400'>400 px</option>
						<option value='500'>500 px</option>
					</select>
					
				  </div>
				  
				  
			</div>
			<div class='col-md-6'>
				<div class='result'>
				
				</div>
			</div>
			</div> 
		</form>
	</div> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    
  </body>
</html>