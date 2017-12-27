<?php get_header() ?>
<div class="main">
	<header class="header-bg">
		<!-- imagen cover con parallax -->
		<div class="parallax-bg">
			<div class="container hero-t">
				<h1 class="hero">Andrés Marín Pittet</h1>
				<h3 class="hero">Diseñador y Desarrollador Front End</h3>
			</div>
		</div>
	</header>
	
	<div class="container">
		<section class="personal">
			<article class="row sobremi col-lg-6 col-md-6 col-sm-12 col-xs-12" id="sobremi">
				<div class="text-box">
					<p class="titulo">Sobre mí</p>
					<img class="info_perso" src="<?php bloginfo('template_url') ?>/assets/images/info_personal-01.png" alt="tarjeta con informacion personal">
					<p class="cuerpo">Como diseñador considero que uno nunca debe dejar de aprender,
						busco nuevos desafíos día a día, que me permitan desarrollar mi
					potencial y crecer como profesional.</p> 
					<p class="cuerpo">Soy una persona con gran sentido
						de la responsabilidad, proactivo y con cualidades para el liderazgo, si tuviera que resurmirme en una palabra sería <strong class="bold">perfeccionista.</strong></p>
						<p class="cuerpo">Apasionado por la tecnología, la música, los video juegos y el trekking,
							suelo pasar mi tiempo libre tocando guitarra o investigando y
							estudiando nuevos softwares, mis vacaciones haciendo trekking en
						algún parque nacional.</p>

						<div class="educacion">
							<p class="sub-title">Educación</p>

							<div class="block" id="block1">
								<div class="fecha"><span> 2017 </span></div>
								<p class="cuerpo escuela"><strong class="bold">DESAFIO LATAM</strong></p>
								<p class="cuerpo nivel">Bootcamp Front End</p>
							</div>
							
							<div class="block" id="block2">
								<div class="fecha"><span> 2016 </span></div>
								<p class="cuerpo escuela"><strong class="bold">ICUBO UDD + STVP STANFORD</strong></p>
								<p class="cuerpo nivel">Certificado en Innovación</p>
							</div>

							<div class="block" id="block3">
								<div class="fecha"><span> 2016 </span></div>
								<p class="cuerpo escuela"><strong class="bold">UNIVERSIDAD DEL DESARROLLO</strong></p>
								<p class="cuerpo nivel">Diseño de Ambientes y Objetos</p>
							</div>

							<div class="block" id="block4">
								<div class="fecha"><span> 2010 </span></div>
								<p class="cuerpo escuela"><strong class="bold">UNIVERSIDAD DEL DESARROLLO</strong></p>
								<p class="cuerpo nivel">Bachiller en Arquitectura</p>
							</div>

							<div class="block" id="block5">
								<div class="fecha"><span> 2007 </span></div>
								<p class="cuerpo escuela"><strong class="bold">COLEGIO DEL VERBO DIVINO</strong></p>
								<p class="cuerpo nivel">Enseñanza Pre-Básica, Básica y Media</p>
							</div>

						</div>
					</div>

				</article>
				<article class="row resumen col-lg-6 col-lg-offset-6 col-md-6 col-sm-12 col-xs-12" id="resumen">
					<div class="text-box">
						<p class="titulo">Resumen</p>
						<p class="cuerpo">Titulado en Diseño de Ambientes y Objetos de la
							Universidad del Desarrollo, con certificado en
							innovación validado por el STVP de Stanford e
						iCubo de la UDD.</p>
						<p class="cuerpo">Principalmente especializado en las areas de <strong class="bold">Diseño Front End, Modelado 3D, Fabricación Digital y Desarrollo de
							Proyectos multidisciplinarios mediante Design
						Thinking.</strong></p>

						<!-- Skill Bars -->
						<div class="skills">
							<p class="sub-title">Skills</p>

							<div class="skillbar clearfix " data-percent="90%">
								<div class="skillbar-title"><span>Photoshop</span></div>
								<div class="skillbar-bar"></div>
								<div class="skill-bar-percent">90%</div>
							</div>

							<div class="skillbar clearfix " data-percent="87%">
								<div class="skillbar-title"><span>Illustrator</span></div>
								<div class="skillbar-bar"></div>
								<div class="skill-bar-percent">87%</div>
							</div>

							<div class="skillbar clearfix " data-percent="70%">
								<div class="skillbar-title"><span>HTML5</span></div>
								<div class="skillbar-bar"></div>
								<div class="skill-bar-percent">70%</div>
							</div>

							<div class="skillbar clearfix " data-percent="76%">
								<div class="skillbar-title"><span>CSS3</span></div>
								<div class="skillbar-bar"></div>
								<div class="skill-bar-percent">76%</div>
							</div>

							<div class="skillbar clearfix " data-percent="50%">
								<div class="skillbar-title"><span>Wordpress</span></div>
								<div class="skillbar-bar"></div>
								<div class="skill-bar-percent">50%</div>
							</div>

							<div class="skillbar clearfix " data-percent="80%">
								<div class="skillbar-title"><span>Blender 3D</span></div>
								<div class="skillbar-bar"></div>
								<div class="skill-bar-percent">80%</div>
							</div>

							<div class="skillbar clearfix " data-percent="90%">
								<div class="skillbar-title"><span>Rhinoceros5</span></div>
								<div class="skillbar-bar"></div>
								<div class="skill-bar-percent">90%</div>
							</div>

						</div>
						
						<div class="experiencia">
							<p class="sub-title">Experiencia Laboral</p>
							<div class="block" id="block-e1">
								<div class="fecha"><span> 2016 2017</span></div>
								<p class="cuerpo empresa"><strong class="bold">COOL MKT</strong></p>
								<p class="cuerpo cargo">Diseñador Integral y co-productor área industrial</p>
							</div>

							<div class="block" id="block-e2">
								<div class="fecha"><span>2011 2014</span></div>
								<p class="cuerpo empresa"><strong class="bold">UNIVERSIDAD DEL DESARROLLO</strong></p>
								<p class="cuerpo cargo">Ayudante Introducción Digital, Modelos Avanzados, Medios
								Digitales y Representación Digital</p>
							</div>
						</div>

					</article>
				</section>
			</div>
		
		<?php get_footer() ?>

			<button id="toTop" title="toTop"><span class="glyphicon glyphicon-chevron-up"></span></button>
		</body>
		</html>