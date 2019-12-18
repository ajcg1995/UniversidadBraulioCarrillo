<!doctype html>
<html>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<?php include("includes.php"); ?>
	<link rel="stylesheet" type="text/css" href="css/index.css">

</head>

<body>
	<?php include("header.php");	?>


	<div class="container-fluid">

		<!--  INICIO DEL CARRUSEL-->
		<div class="container-fluid">
			<!--Incio de carrusel-->
			<div id="myCarousel" class="carousel slide">
				<div id="carrusel" class="carousel-inner">
					<div class="item active ">
						<div class="portada3"></div>
						<div class="carousel-caption">
							<h3 id="descripcion" class="aniview  slides-h3 " data-av-animation="slideInUp">
								UNIVERISIDAD <br>
								BRAULIO CARRILLO
							</h3>
							<p id="descripcion2" class="aniview slides-p " data-av-animation="slideInUp">
								Pionera en Aduanas y <br>
								Comercio Exterior
							</p>
							<br>
							<a class="btn btnSlide aniview" data-av-animation="slideInUp" href="acercaNosotros.php">Conózcanos</a>
						</div>
					</div>

					<div class="item">
						<div class="portada1"></div>
						<div class="carousel-caption">
							<h3 id="descripcion" class="aniview slides-h3" data-av-animation="slideInUp">
								EDUCACIÓN CONTINUA
							</h3>
							<p id="descripcion2" class="aniview slides-p" data-av-animation="slideInUp">
								Sí te interesa la actualización en nuestras <br>
								áreas de estudio, no dudes en ser <br>
								parte de nuestro programa de <br>
								Educación Continua.
							</p>
							<br>
							<a class="btn btnSlide aniview" data-av-animation="slideInUp" href="educacioncontinua.php">Educación Continua</a>
						</div>
					</div>

					<div class="item ">
						<div class="portada2"></div>
						<div class="carousel-caption">
							<h3 id="descripcion" class="aniview slides-h3" data-av-animation="slideInUp">
								NUESTRA OFERTA ACADÉMICA
							</h3>
							<p id="descripcion2" class="aniview slides-p" data-av-animation="slideInUp">
								Contamos con una amplia gamas de carreras <br>
								relacionadas con Aduanas y <br>
								Comercio Exterior
							</p>
							<br>
							<a class="btn btnSlide aniview" data-av-animation="slideInUp" href="ofertaAcademica.php">Oferta Académica</a>
						</div>
					</div>

					<!--Indicadores-->
					<ol class="carousel-indicators">
						<li class="active " data-target="#myCarousel" data-slide-to="0"></li>
						<li class=" " data-target="#myCarousel" data-slide-to="1"></li>
						<li class=" " data-target="#myCarousel" data-slide-to="2"></li>

					</ol>
					<!--Controles-->
					<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<!-- termina carrusel -->
				<div id="popup" class="overlay" style="display:none">
					<div id="boton-atras">
					</div>
				</div>

				<!--  FINAL DEL CARRUSEL-->

				<section id="section-descripcion" class="row">
					<div class="col-xs-12 col-sm-12 col-md-2"></div>
					<div class="col-xs-12 col-sm-12 col-md-8 descripcion-div">
						<h3>
							UNIVERSIDAD BRAULIO CARRILLO
						</h3>
						<h2> UN HITO</h2>
						<hr width="5%">
						<p> La fundación de la Universidad Braulio Carrillo es, sin duda alguna,
							uno de los hitos más significativos dentro de la actividad aduanera del país,
							de la cual dependió, depende y dependerá parte importante de los ingresos reales
							del Presupuesto Nacional y de aquella otro en que se sustenta con gran relevancia
							el comercio exterior de nuestra patria que debido al limitado tamaño de su economía,
							buscó la apertura hacia la economía mundial, para obtener los bienes y servicios
							que internamente no podían producirse.
						</p>
						<div class="leer-mas ">
							<a class="btnCarreras" href="resources/boletines/Boletin_Historia.pdf">Lee más</a>
						</div>
					</div>
				</section>


				<section id="section-descripcion1" class="row contenido-informativo">
					<div class="col-xs-12 col-sm-12 col-md-1"></div>
					<div id="contenido-informativo-texto" class="col-xs-12 col-sm-12 col-md-5 texto">
						<div>
							<h3>UNIVERSIDAD</h3>
							<h3>BRAULIO CARRILLO</h3>
						</div>
						<p>
							Pionera en Aduanas y Comercio Exterior, al servicio del país.
						</p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-5 ">
						<img id="imagen-descripcion" class="imagen-descripcion" src="resources/imagen/inicio.jpg" />
					</div>
				</section>


				<section id="section-links">
					<div id="box-links" class="aniview" data-av-animation="lightSpeedIn">
						<article class="article-links" id="conteimagenbuho">

							<div class="tarjeta-wrap">
								<a href="acercaNosotros.php">
									<div id="tarjeta" class="tarjetas"></div>
								</a>
							</div>
							<h2>ACERCA DE</h2>
							<h2>NOSOTROS</h2>
						</article>
						<article class="article-links" id="conteimagenlibro">

							<div class="tarjeta-wrap">
								<a href="ofertaAcademica.php">
									<div id="tarjeta1" class="tarjetas"> </div>
								</a>
							</div>
							<h2>OFERTA</h2>
							<h2>ACADÉMICA</h2>
						</article>
						<article class="article-links" id="conteimagenbuho">

							<div class="tarjeta-wrap">
								<a href="educacioncontinua.php">
									<div id="tarjeta3" class="tarjetas"></div>
								</a>
							</div>
							<h2>EDUCACIÓN</h2>
							<h2>CONTINUA</h2>
						</article>
						<article class="article-links" id="conteimagentelefono">

							<div class="tarjeta-wrap">
								<a href="contactos.php">
									<div id="tarjeta2" class="tarjetas"></div>
								</a>
							</div>
							<h2>CONTÁCTENOS</h2>
						</article>
					</div>
				</section>
				<section id="acerca-logros" class="row">
					<div id="contenido-oferta" class=" col-xs-12 col-sm-12 col-md-12 ">
						<h3>OFERTA ACADÉMICA</h3>
						<hr width="5%" />
					</div>
					<div class=" col-xs-12 col-sm-12 col-md-11 row contenido-plan">
						<div class=" col-xs-4 col-sm-4 col-md-2">
							<div class="card">
								<h3>TÉCNICOS</h3>
								<ul>
									<li class="row">
										<p class="col-10 texto-plan">
											<a href="tecnico-logistica.php">
												Técnico en Logística
											</a>
										</p>
									</li>
									<li class="row">
										<p class="col-10 texto-plan">
											<a href="tecnico-merceologia.php">
												Técnico en Merceología
											</a>
										</p>
									</li>
									<li class="row">
										<p class="col-10 texto-plan">
											<a href="#">
												Técnico en Operaciones Aduaneras 
											</a>
										</p>
									</li>
									<li class="row">
										<p class="col-10 texto-plan">
											<a href="#">
												Técnico en Gestión del Comercio Internacional
											</a>
										</p>
									</li>
								</ul>
							</div>
						</div>
						<div class=" col-xs-4 col-sm-4 col-md-2">
							<div class="card">
								<h3>BACHILLERATOS</h3>
								<ul>
									<li class="row">
										<p class="col-10 texto-plan">
											<a href="bachillerato-comercio-exterior.php">
												Bachillerato Comercio Exterior
											</a>
										</p>
									</li>
									<li class="row">
										<p class="col-10 texto-plan">
											<a href="bachillerato-administracion-aduanera.php">
												Bachillerato en Administración Aduanera
											</a>
										</p>
									</li>
								</ul>
							</div>
						</div>
						<div class=" col-xs-4 col-sm-4 col-md-2">
							<div class="card">
								<h3>LICENCIATURAS</h3>
								<ul>
									<li class="row">
										<p class="col-10 texto-plan">
											<a href="licenciatura-legislacion-aduanera.php">
												Licenciatura en Legislación Aduanera
											</a>
										</p>
									</li>
									<li class="row">
										<p class="col-10 texto-plan">
											<a href="licenciatura-clasificacion-arancelaria.php">
												Licenciatura en Clasificación Arancelaria
											</a>
										</p>
									</li>
								</ul>
							</div>
						</div>
						<div class=" col-xs-4 col-sm-4 col-md-2">
							<div class="card">
								<h3>MAESTRÍA</h3>
								<ul>
									<li class="row">
										<p class="col-10 texto-plan">
											<a href="maestria-comercio-exterior.php">
												Maestría en Comercio Exterior
											</a>
										</p>
									</li>									
								</ul>
							</div>
						</div>
						<div class=" col-xs-4 col-sm-4 col-md-2">
							<div class="card">
								<h3>ESPECIALIZACIÓN</h3>
								<ul>
									<li class="row">
										<p class="col-10 texto-plan ">
											<a href="especializacion-normas-origen.php">
												Especialización en Normas de Origen
											</a>
										</p>
									</li>									
								</ul>
							</div>
						</div>
					</div>
				</section>

				<section id="video-cuadro" class="row">
					<div class="video col-xs-12 col-sm-12 col-md-6">
						<video src="resources/videos/ubcAniversario.mp4" width="100%" height="100%" controls> </video>
					</div>
					<div id="cuadros" class="col-xs-12 col-sm-12 col-md-6">
						<div class="row">
							<div id="video-cuadro-1" class="video-cuadro col-xs-6 col-sm-6 col-md-6">
								<img src="resources/imagen/educon.png" width="85%" />
							</div>
							<div id="video-cuadro-2" class="video-cuadro col-xs-6 col-sm-6 col-md-6">
								<p>Son programas profesionales a
									través de seminarios, talleres, capacitaciones, que buscan la
									actualización constante en temas aduaneros y de comercio exterior.
									<br>
									<a href="educacioncontinua.php" class="btn btn-primary">Educación Continua</a>
								</p>
							</div>
						</div>
						<div class="row">
							<div id="video-cuadro-3" class="video-cuadro col-xs-6 col-sm-6 col-md-6">
								<p>Entérate de nuestros próximos seminarios </p>
							</div>
							<div id="video-cuadro-4" class="video-cuadro col-xs-6 col-sm-6 col-md-6">
								<img src="resources/boletines/boletin5.jpg" width="100%" />
							</div>
						</div>
					</div>
				</section>

				<section id="section-news" class="row">
					<div class="col-xs-1 col-sm-1 col-md-1"> </div>
					<div class="col-xs-12 col-sm-12 col-md-3">
						<h4>Próximas actividades</h4>
						<hr width="100%" />
						<iframe src="https://calendar.google.com/calendar/embed?title=Actividades%20Importantes&amp;showDate=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=300&amp;wkst=1&amp;src=ubrauliocarrillo%40gmail.com&amp;color=%231B887A&amp;ctz=America%2FCosta_Rica&amp;margin=auto" width="90%" height="50%" frameborder="0" scrolling="no"></iframe>
						<p style="width:90%;">Acercate y conocé nuestras actividades anuales. </p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4">
						<h4>La Maestría en Comercio Exterior </h4>
						<hr width="100%" />
						<div class="video" style="text-align:center">
							<video src="resources/videos/ubcMaestria.mp4" width="70%" height="50%" controls> </video>
							<p>¿Sabés que es el comercio exterior? En este video te damos un recorrido por
								la carrera.
							</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3">
						<h4>Noticias recientes</h4>
						<hr width="100%" />
						<p>Enterate de nuestros procesos de matrícula, horarios, carreras y mucho más. </p>
						<a href="#">
							<div id="anuncio"></div>
						</a>
					</div>
				</section>
				<section class="row redes-sociales">
					<div class="col-xs-1 col-sm-1 col-md-1"></div>
					<div class="col-xs-12 col-sm-6 col-md-7">
						<h4>¡Ingresá a nuestra página en Facebook!</h4>
					</div>
					<div class="col-xs-12 col-sm-5 col-md-4">
						<Button type class="btn btn-primary  btn-lg"><a style="color:white" href="https://www.facebook.com/ubrauliocarrillo/">Más información</a></Button>
					</div>
				</section>
				<!--
			<section id="section-contactenos">
				<div id="div-red-social">
					<h3>¡Ingresá a nuestra página en Facebook!</h3> <br />
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fubrauliocarrillo%2F&tabs=timeline&width=500&height=520&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="400" height="520" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
				</div>
				<div id="div-contacto">
					<h3>Contáctenos</h3><br />

					<div id="formulario-contactos">
						<h2>Contáctenos</h2>
						<form action="mail.php" method="post">
							<input type="text" class="campo-texto-formulario" name="nombre" placeholder=" Nombre y apellido" required=""><br>
							<input type="mail" class="campo-texto-formulario" name="correo" placeholder=" Correo electrónico" required=""><br>
							<input type="text" class="campo-texto-formulario" name="telefono" placeholder=" Teléfono" required=""><br>
							<textarea id="mensaje" name="mensaje" class="campo-texto-formulario" placeholder=" Escribe tu mensaje aquí..." required=""></textarea><br><br><br>
							<input id="btnEnviar" type="submit" id="boton" value="Enviar" /><br>
							<input type="hidden" name="formIndex" value="1">
						</form>
						<div id="contenedor-redessociales">
							<h2>Redes Sociales</h2>
							<a id="face" href="https://www.facebook.com/ubrauliocarrillo/"> <span class="icon-facebook2"> </span> </a>
							<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fubrauliocarrillo%2F&width=79&layout=button&action=like&size=small&show_faces=true&share=false&height=65&appId" width="79" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true">
							</iframe>
							<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fubrauliocarrillo%2F&width=60&layout=button&action=recommend&size=small&show_faces=true&share=false&height=65&appId" width="100" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true">
							</iframe>
						</div>
					</div>
			</section> -->
			</div>
			<?php include("footer.php"); ?>
			<?php include("includesjs.php"); ?>
</body>

<!-- Chat en Linea -->

<script type="text/javascript" async="async" defer="defer" src="https://dattachat.com/chat/cargar/wid/5b311bba20004026576706"></script>
<a href="javascript:;" onclick="dcJs.startSend()"><img style="border:0px;" id="dc_ImgStatus" src="https://dattachat.com/chat/img/wid/5b311bba20004026576706" /></a>

</html>