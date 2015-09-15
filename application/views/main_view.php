<?php include('header.php'); ?>
	
    <header id="header" class="">
		
	</header>

	<section id="content" class="home">
		<div class="container">
			<aside id="reduccion">
				<h3>Ya vamos reduciendo</h3>
				<div class="reducimos">
					<span class="numero">990,889</span>
					<span class="valor">tCO<sub>2</sub>eq <small>en un año</small></span>
				</div>
				<h4>POR LOS COMPROMISOS ASUMIDOS <br>POR ESTA COMUNIDAD</h4>
				<div class="equivalencia">
					<div class="equi_txt">
						EQUIVALENTE A<br>GLOBOS AEROSTÁTICOS
					</div>
					<div class="equi_cant">
						300
					</div>
				</div>

				<div class="cf"></div>
			</aside>

			<div class="globo animated infinite"></div>
			<article class="message ">
				<h1>SUMA TU COMPROMISO <br>POR EL CLIMA</h1>
				<h2>Calcula tu impacto. Comprométete a reducirlo.</h2>
				<p>En la COP21 de París, el Perú y otros 194 países firmarán sus compromisos para reducir emisiones de gases de efecto invernadero. Así trataremos de evitar una crisis climática en los próximos años. </p>
				<p>Sin tu ayuda, estos esfuerzos no serán suficientes.</p>
				<p>Esta calculadora te mostrará tu impacto sobre el clima y te enseñará a reducirlo con compromisos de acciones sencillas. 
				Tus compromisos se sumarán al aporte del Perú frente al cambio climático.</p>

				<div class="call">
					<a href="#" class="button sumate">
						Súmate
					</a>
				</div>		
			</article>

			<article class="message hide">
				<h1>SUMA TU COMPROMISO <br>POR EL CLIMA</h1>
				<h2>Calcula tu impacto. Comprométete a reducirlo.</h2>
				<form action="index_submit" method="post" accept-charset="utf-8">
					<p>
						<label>
							<span>Nombre: </span>
							<input type="text" name="nombre" required />
						</label>
					</p>
					<p>
						<label>
							<span>Apellidos: </span>
							<input type="text" name="apellidos" required />
						</label>
					</p>
					<p>
						<label>
							<span>Correo electrónico: </span>
							<input type="email" name="email" required />
						</label>
					</p>

				</form>

				<div class="call">
					<a href="#" class="button sumate">
						Continuar
					</a>
				</div>		
			</article>

			<article class="message hide ">
				<h1>descubre tu Impacto </h1>
				<h2>Esta calculadora te ayudará a conocer:</h2>
				
				<div class="info">
					<div class="titulo">
						<div class="imagen">
							<img src="<?php echo STATIC_DIR; ?>/img/huella.png" alt="">
						</div>
						<div class="texto">
							<h3>Tu huella de carbono</h3>
						</div>
					</div>
					<p>
						Los gases de efecto invernadero (GEI) que se producen por la quema de combustibles fósiles son los causantes del cambio climático.
						La mayor parte de nuestra huella no la generamos nosotros mismos, pero sí tenemos muchas formas de reducirla.
					</p>
				</div>

				<div class="info last">
					<div class="titulo">
						<div class="imagen">
							<img src="<?php echo STATIC_DIR; ?>/img/agua.png" alt="">
						</div>
						<div class="texto">
							<h3>Tu consumo de agua</h3>
						</div>
					</div>
					<p>
						El agua dulce es un bien escaso e indispensable para la vida.
						Muchas veces no hacemos un buen uso de ella por costumbres diarias de las que no somos conscientes.
					</p>			
				</div>

				<div class="cf"></div>
				<div class="call">
					<a href="#" class="button sumate final">
						Empecemos
					</a>
				</div>		
			</article>

			<div class="auspiciador">
				<a href="" title=""><img src="<?php echo STATIC_DIR; ?>/img/pondetuparte.png" alt=""></a>
			</div>

		</div>
	</section>

	<footer id="footer">
		<div class="left"></div>
		<div class="right"></div>
	</footer>

<?php include('footer.php'); ?>