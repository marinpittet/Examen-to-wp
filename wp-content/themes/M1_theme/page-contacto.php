<?php get_header() ?>
<div class="bg contact">
	<header class="header-bg contact">
		<!-- imagen cover con parallax -->
		<div class="parallax-bg contact">
			<div class="container hero-t contact">
				<h1 class="hero">Andrés Marín Pittet</h1>
				<h3 class="hero">Diseñador y Desarrollador Front End</h3>
			</div>
		</div>
	</header>

	<div class="formulario">
		<form class="container">
			<div class="row">
				<div class="col-md-4 mb-3">
					<label for="validationDefault01">Nombre completo</label>
					<input type="text" class="form-control" id="validationDefault01" placeholder="Escribe aquí tu nombre" required>
				</div>
				<div class="col-md-4 mb-3">
					<label for="exampleFormControlInput1">Email</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
				</div>
				<div class="col-md-4 mb-3">
					<label for="validationDefault02">Asunto</label>
					<input type="text" class="form-control" id="validationDefault02" placeholder="Escribe aquí el asunto" required>
				</div>
			</div>
			<hr>
			<div class="form-group">
				<label for="exampleFormControlTextarea1">Mensaje</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Escribe tu mensaje aquí"></textarea>
			</div>

			<button class="btn btn-success btn-send" type="submit" value="Send messaje">Enviar <i class="fas fa-paper-plane"></i></button>
		</form>
	</div>
	</div>
	
	<button id="toTop" class="contact" title="toTop"><span class="glyphicon glyphicon-chevron-up"></span></button>

<?php get_footer() ?>
</body>
</html>