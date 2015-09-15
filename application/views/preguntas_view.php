<?php include('header.php'); ?>
	<header id="header" class="">

	</header>

	<section id="content" class="preguntas">
		<div class="container">
			<aside id="reduccion">
				<h3>Ya vamos reduciendo</h3>
				<div class="reducimos">
					<span class="numero">990,889</span>
					<span class="valor">tCO<sub>2</sub>eq <small>en un año</small></span>
				</div>
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

			<article class="question show">
				<div class="thing">
					<div class="girar"></div>
					<div class="base"></div>
				</div>


				<div class="cuestionario">
					<ul>
						<li class="transporte tooltip" title="El combustible utilizado en la mayoría de nuestros medios de transporte produce gases de efecto invernadero (GEI)">
							<div class="imagen">
								<img src="<?php echo STATIC_DIR; ?>/img/transporte.png">
							</div>
							<div class="info">
								<span> Transporte</span>
							</div>
						</li>
						<li class="energia tooltip"  title="La producción y distribución de ciertos tipos de alimentos contribuyen a la suma">
							<div class="imagen" id="">
								<img src="<?php echo STATIC_DIR; ?>/img/energia.png">
							</div>
							<div class="info">
								<span>Energía</span>
							</div>
						</li>
						<li class="alimentacion tooltip" title="La producción y distribución de ciertos tipos de alimentos contribuyen a la suma total de GEI.">
							<div class="imagen" id="">
								<img src="<?php echo STATIC_DIR; ?>/img/alimentacion.png">
							</div>
							<div class="info">
								<span>Alimentación</span>
							</div>
						</li>
						<li class="residuos tooltip" title="Durante el proceso de descomposición, los residuos orgánicos emiten gases con un alto nivel de efecto invernadero.">
							<div class="imagen">
								<img src="<?php echo STATIC_DIR; ?>/img/residuos.png">
							</div>
							<div class="info">
								<span>Residuos</span>
							 </div>
						</li>
						<li class="agua tooltip" id="" title="Cada día se desperdician millones de litros de este recurso. Descubre cual es tu consumo y cómo reducirlo.">
							<div class="imagen">
								<img src="<?php echo STATIC_DIR; ?>/img/agua_cuestionario.png">
							</div>
							<div class="info">
								<span>Agua</span>
							</div>
						</li>
					</ul>
				</div>

				<div id="inicio" class="preguntas_listado viewed">
					<ul>
						<li class="uno activo">
							<h3>¿Cuántas personas viven en tu hogar?</h3>

							<label>
								<span class="small">Ingrese número de personas</span>
								<input type="text" name="personas" required>
							</label>

						</li>
					</ul>

					<div class="paginador">
						<div class="left">
							<span class="numero num_actual">01</span> de <span class="numero num_final">03</span>
						</div>

						<div class="right">
							<a href="#" class="contador button">SIGUIENTE</a>
						</div>

					</div>


				</div>

				<div id="transporte" class="preguntas_listado ">
					<ul>
						<li class="tres ">
							<h3>¿Cuántas horas a la semana pasas en cada uno de estos transporte?</h3>

							<label>
								Bus o Combi
								<span class="small">Ingrese horas</span>
								<input type="text" name="transporte1" required>
							</label>

							<label>
								Tren electrico
								<span class="small">Ingrese horas</span>
								<input type="text" name="transporte1" required>
							</label>

							<label>
								Metropolitano
								<span class="small">Ingrese horas</span>
								<input type="text" name="transporte1" required>
							</label>

						</li>

						<li class="uno ">
							<h3>¿Cuánto gastas a la semana en taxis?</h3>

							<label>
								<span class="small">Ingrese costo en soles</span>
								<input type="text" name="transporte1" required>
							</label>

						</li>

						<li class="tres">
							<h3>Si usas vehículo propio: ¿Qué tipo de combustible empleas?</h3>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>Gasolina</span>
							</label>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>Diesel</span>
							</label>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>GLP</span>
							</label>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>GNV</span>
							</label>

							<label>
								<input type="radio" name="transporte5" value="noVehiculo">
								<span>No tengo vehiculo</span>
							</label>

						</li>

						<li class="uno ">
							<h3>Si usas vehículo propio: ¿Cuánto gastas en combustible a la semana? </h3>

							<label>
								<span class="small">Ingrese costo en soles</span>
								<input type="text" name="transporte1" required>
							</label>
						</li>

						<li class="tres">
							<h3>Si usas vehículo propio: ¿Cuántos años tiene tu vehículo?</h3>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>Menos de 7</span>
							</label>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>Menos de 7 y 10</span>
							</label>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>Mas de 10</span>
							</label>
						</li>

						<li class="dos">
							<h3>Si usas vehículo propio: ¿Qué tipo de vehículo?</h3>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>Sedán</span>
							</label>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>4 x 4 </span>
							</label>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>Van</span>
							</label>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>Moto</span>
							</label>
						</li>

						<li class="tres">
							<h3>Viajes en el año: ¿Cuántas horas has pasado en?</h3>

							<label>
								Avión
								<span class="small">Ingrese horas</span>
								<input type="text" name="transporte1" required>
							</label>

							<label>
								Bus
								<span class="small">Ingrese horas</span>
								<input type="text" name="transporte1" required>
							</label>

							<label>
								Vehículo
								<span class="small">Ingrese horas</span>
								<input type="text" name="transporte1" required>
							</label>


						</li>

					</ul>

					<div class="paginador">
						<div class="left">
							<span class="numero num_actual">01</span> de <span class="numero num_final">03</span>
						</div>

						<div class="right">
							<a href="#" class="contador button">SIGUIENTE</a>
						</div>

					</div>

				</div>

				<div id="energia" class="preguntas_listado">
					<ul>
						<li class="uno ">
							<h3>¿Cuánto pagas al mes por tu recibo de electricidad?</h3>

							<label>
								<span class="small">Ingrese costo</span>
								<input type="text" name="transporte1" required>
							</label>
						</li>

						<li class="uno ">
							<h3>¿Cuántos balones de gas de 10 kg consumes al mes en tu domicilio?</h3>

							<label>
								<span class="small">Ingrese costo en soles</span>
								<input type="text" name="transporte1" required>
							</label>

						</li>


						<li class="uno ">
							<h3>Si tienes conexión a gas natural ¿Cuánto pagas mensualmente?</h3>

							<label>
								<span class="small">Ingrese costo en soles</span>
								<input type="text" name="transporte1" required>
							</label>
						</li>

					</ul>

					<div class="paginador">
						<div class="left">
							<span class="numero num_actual">01</span> de <span class="numero num_final">03</span>
						</div>

						<div class="right">
							<a href="#" class="contador button">SIGUIENTE</a>
						</div>

					</div>

				</div>

				<div id="alimentacion" class="preguntas_listado">
					<ul>
						<li class="tres">
							<h3>¿A cuál de estas tres opciones se aproxima más tu dieta?</h3>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>Como carne a diario</span>
							</label>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>Como carne cada 2 o 3 días</span>
							</label>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>No como carne</span>
							</label>

						</li>

						<li class="tres">
							<h3>¿A cuál de estas tres opciones se aproxima más tu forma de adquirir alimentos?</h3>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>Cultivo y crío mis propios alimentos</span>
							</label>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>Compro en los mercados locales</span>
							</label>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>Compro en los supermercados</span>
							</label>

						</li>


						<li class="tres ">
							<h3>¿A cuál de estas tres opciones se aproxima más tu forma de adquirir alimentos?</h3>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>Todo lo que compro está envasado</span>
							</label>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>La mitad de lo que compro está envasado</span>
							</label>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>Nada de lo que compro está envasado</span>
							</label>

						</li>

					</ul>

					<div class="paginador">
						<div class="left">
							<span class="numero num_actual">01</span> de <span class="numero num_final">03</span>
						</div>

						<div class="right">
							<a href="#" class="contador button">SIGUIENTE</a>
						</div>

					</div>

				</div>

				<div id="residuos" class="preguntas_listado">
					<ul>
						<li class="tres">
							<h3>¿Qué cantidad de residuos se genera al día promedio en tu hogar?</h3>

							<label>
								Cantidad de bolsas pequeñas <br>(5 litros)
								<span class="small">Número de bolsas</span>
								<input type="text" name="transporte1" required>
							</label>

							<label>
								Cantidad de bolsas mediana <br>(10 litros)
								<span class="small">Número de bolsas</span>
								<input type="text" name="transporte1" required>
							</label>

							<label>
								Cantidad de bolsas grandes <br>(20 litros)
								<span class="small">Número de bolsas</span>
								<input type="text" name="transporte1" required>
							</label>

						</li>

						<li class="tres">
							<h3>¿Qué tipo de residuos reciclas?</h3>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>Vidrio</span>
							</label>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>Plástico</span>
							</label>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>Aluminio</span>
							</label>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>Residuos orgánicos</span>
							</label>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>Papel y cartones</span>
							</label>

						</li>
					</ul>

					<div class="paginador">
						<div class="left">
							<span class="numero num_actual">01</span> de <span class="numero num_final">03</span>
						</div>

						<div class="right">
							<a href="#" class="contador button">SIGUIENTE</a>
						</div>

					</div>

				</div>

				<div id="agua" class="preguntas_listado">
					<ul>
						<li class="uno">
							<h3>¿Cuánto pagas al mes por tu recibo de agua?</h3>

							<label>
								<span class="small">Cantidad en soles</span>
								<input type="text" name="transporte1" required>
							</label>
						</li>

						<li class="uno">
							<h3>¿Cuántas veces a la semana te duchas?</h3>

							<label>
								<span class="small">Número de veces por semana</span>
								<input type="text" name="transporte1" required>
							</label>
						</li>

						<li class="uno">
							<h3>¿Cuántos minutos demoras en ducharte?</h3>

							<label>
								<span class="small">Ingrese número de minutos</span>
								<input type="text" name="transporte1" required>
							</label>
						</li>

						<li class="uno">
							<h3>¿Tu ducha tiene el sello de producto ahorrador de agua de SEDAPAL?</h3>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>Si</span>
							</label>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>No</span>
							</label>
						</li>

						<li class="uno">
							<h3>¿Cuántas veces al día te cepillas los dientes?</h3>

							<label>
								<span class="small">Número de veces por dia</span>
								<input type="text" name="transporte1" required>
							</label>
						</li>

						<li class="uno">
							<h3>¿Cuántos minutos demoras en cepillarte?</h3>

							<label>
								<span class="small">Ingrese numero de minutos</span>
								<input type="text" name="transporte1" required>
							</label>
						</li>

						<li class="uno">
							<h3>¿Tu caño tiene el sello de producto ahorrador de agua de SEDAPAL?</h3>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>Si</span>
							</label>

							<label>
								<input type="radio" name="transporte2" value="male">
								<span>No</span>
							</label>
						</li>

						<li class="uno">
							<h3>¿Cuántas veces al día usas el inodoro de tu hogar?</h3>

							<label>
								<span class="small">Número de veces por dia</span>
								<input type="text" name="transporte1" required>
							</label>
						</li>

					</ul>


					<div class="paginador">
						<div class="left">
							<span class="numero num_actual">01</span> de <span class="numero num_final">03</span>
						</div>

						<div class="right">
							<a href="#" class="contador button">SIGUIENTE</a>
						</div>

					</div>

				</div>



			</article>

			<article class="results hide">
				<div class="thing">
					<div class="girar"></div>
					<div class="base"></div>
				</div>

				<ul class="tab-links">
					<li  class="active">
						<a href="#resultados" class="resultados">
				 			Tus Resultados
						</a>
					</li>
					<li class="">
						<a href="#compromisos" class="compromisos">
				 			Tus Compromiso
						</a>
					</li>
					<li class="">
						<a href="#contribucion" class="contribucion">
				 			Tu Contribución
						</a>
					</li>
					<li class="">
						<a href="#compartelo" class="compartelo">
				 			Compartelo
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div id="resultados"  class="tab active">

						<!-- Resultados de Huella de Carbono  -->


						<div class="resultado_numero">
							<div class="imagen">
								<img src="<?php echo STATIC_DIR; ?>/img/huella.png" alt="">
							</div>
							<div class="detalle">
								TU HUELLA DE <br>CARBONO ES:
								<div class="huella">
									<span class="numero">3,874</span>
									<span class="valor">tCO<sub>2</sub>eq <small>en un año</small></span>
								</div>
							</div>
						</div>

						<div class="resultado_detalle">
							<div class="pie">
								<canvas id="chart-area" width="80px" height="80px" style="width: 80px; height: 80px;">
								</canvas>
								<div class="historia">
									<ul>
										<li class="energia">
											<span class="porcent">42% </span>Energia
										</li>
										<li class="residuos">
											<span class="porcent">42% </span>Residuos
										</li>
										<li class="transporte">
											<span class="porcent">42% </span>Transporte
										</li>
										<li class="alimentacion">
											<span class="porcent">42% </span>Alimentación
										</li>
									</ul>
								</div>
							</div>

						</div>

						<div class="explicacion">
							<div class="texto">
								Para compensar tu Huella de Carbono se debe plantar :

							</div>
							<div class="imagen">
								<ul>
									<li> <img src="<?php echo STATIC_DIR; ?>/img/arbol.png" alt=""></li>
									<li> <img src="<?php echo STATIC_DIR; ?>/img/arbol.png" alt=""></li>
									<li> <img src="<?php echo STATIC_DIR; ?>/img/arbol.png" alt=""></li>
									<li> <img src="<?php echo STATIC_DIR; ?>/img/arbol.png" alt=""></li>
								</ul>
								<small>( 2.3 arboles )</small>
							</div>
						</div>

						<div class="texto_termometro">
							<div class="man verde"></div>
								<strong>Huella de Carbono</strong> promedio (Perú)
							<div class="man rojo"></div>
						</div>
						<div class="termometro huella">
							<div class="contenedor"></div>
						</div>
						<div class="valores_resultado">
							<div class="signal minus"> - </div>
							<div class="signal plus"> + </div>

							<div class="man marron">
								<span>Tú estas Aquí</span>
							</div>
						</div>

						<!-- Resultados de Agua -->

						<div class="resultado_numero agua">
							<div class="imagen">
								<img src="<?php echo STATIC_DIR; ?>/img/agua.png" alt="">
							</div>
							<div class="detalle">
								TU CONSUMO DE <br>AGUA ANUAL ES:
								<div class="huella">
									<span class="numero">0,762</span>
									<span class="valor">Litros</span>
								</div>
							</div>
						</div>


							<div class="explicacion agua">
								<div class="texto">
									Tu consumo de agua anual <br>equivale a:

								</div>
								<div class="imagen">
									<ul>
										<li> <img src="<?php echo STATIC_DIR; ?>/img/carrito.png" alt=""></li>
										<li> <img src="<?php echo STATIC_DIR; ?>/img/carrito.png" alt=""></li>
										<li> <img src="<?php echo STATIC_DIR; ?>/img/carrito.png" alt=""></li>
										<li> <img src="<?php echo STATIC_DIR; ?>/img/carrito.png" alt=""></li>
									</ul>
									<small>( 3.2 Camiones cisternas)</small>
								</div>
							</div>


						<div class="texto_termometro agua">
							<div class="man celeste"></div>
								Promedio de <strong>uso de Agua</strong> (Perú)
							<div class="man azul"></div>
						</div>
						<div class="termometro agua">
							<div class="contenedor"></div>
						</div>
						<div class="valores_resultado agua">
							<div class="signal minus"> - </div>
							<div class="signal plus"> + </div>

							<div class="man marron">
								<span>Tú estas Aquí</span>
							</div>
						</div>

						<div class="next_step">
							<a href="#" class="button ir_compromisos"> Reduce tu huella </a>
						</div>

					</div>

					<div id="compromisos" class="tab ">
						<h3>¿A cuánto te comprometes tú? </h3>
						<p>Perú se ha comprometido a reducir el 31% de sus emisiones del 2030
							<small>(tomando como base el nivel de crecimiento actual).</small>
						</p>

						<div class="texto_medidor">
							<div class="left"> 0 </div>

							<div class="right">
								<div class="total">
									<span class="valor">tCO<sub>2</sub>eq <small>en un año</small></span>
									<div class="numero"> 990,889</div>
								</div>
							</div>
						</div>
						<div class="medidor">
							<div class="bg"></div>
						</div>

						<p>
							Selecciona cada uno de los cinco ejes de medición y marca tus compromisos. Cada compromiso generará una reducción a tu impacto. La suma de estas reducciones será tu contribución a esta comunidad.
						</p>

						<h3>Yo me comprometo a... </h3>

						<div class="compromisos_listado">

							<ul class="tab-ejes">
								<li class="active">	<a href="#transporte" class="transporte"> Transporte </a></li>
								<li class=""> <a href="#energia" class="energia"> Energía </a></li>
								<li class=""> <a href="#alimentacion" class="alimentacion"> Alimentación </a></li>
								<li class=""> <a href="#residuos" class="residuos"> Residuos </a></li>
								<li class=""> <a href="#agua" class="agua"> Agua </a></li>
							</ul>

							<div class="tab-compromisos">
								<div id="transporte" class="eje active">
									<ul class="items first">
										<li>
											<label>
												<input type="checkbox" name="transporte1" value="male">
												<span>Ir al Trabajo en Bicicleta</span>
											</label>
											<div class="subitems disabled">
												<small>¿Cuántos días?</small>
												<ul class="days">
													<li><a href="#" title="">L</a></li>
													<li><a href="#" title="">M</a></li>
													<li><a href="#" title="">M</a></li>
													<li><a href="#" title="">J</a></li>
													<li><a href="#" title="">V</a></li>
													<li><a href="#" title="">S</a></li>
													<li><a href="#" title="">D</a></li>
												</ul>
											</div>
										</li>

										<li>
											<label>
												<input type="checkbox" name="transporte5" value="male">
												<span>Usar más transporte público</span>
											</label>
											<div class="subitems disabled">
												<div class="completo">
													<small>En vez de utilizar</small>
													<label>
														<select>
														  <option value="volvo">Auto Propio</option>
														  <option value="saab">Taxi</option>
														</select>
													</label>
												</div>

												<small>¿Cuántos días?</small>
												<ul class="days">
													<li><a href="#" title="">L</a></li>
													<li><a href="#" title="">M</a></li>
													<li><a href="#" title="">M</a></li>
													<li><a href="#" title="">J</a></li>
													<li><a href="#" title="">V</a></li>
													<li><a href="#" title="">S</a></li>
													<li><a href="#" title="">D</a></li>
												</ul>
											</div>
										</li>
										<li>
											<label>
												<input type="checkbox" name="transporte2" value="male">
												<span>Darle mantenimiento al carro</span>
											</label>
										</li>
									</ul>
									<ul class="items">
										<li>
											<label>
												<input type="checkbox" name="transporte4" value="male">
												<span>Hacer uso del automovil compartido</span>
											</label>
											<div class="subitems disabled">
												<div class="mitad first">
													<small>En vez de utilizar</small>
													<label>
														<select>
														  <option value="volvo">Auto Propio</option>
														  <option value="saab">Taxi</option>
														</select>
													</label>
												</div>

												<div class="mitad">
													<small>¿Con cuántos compartirás?</small>
													<label>
														<select>
														  <option value="1">1</option>
														  <option value="2">2</option>
														  <option value="3">3</option>
														  <option value="4">4</option>
														  <option value="5">5</option>
														</select>
													</label>
												</div>
											</div>
											<div class="subitems disabled">
												<small>¿Cuántos días?</small>
												<ul class="days">
													<li><a href="#" title="">L</a></li>
													<li><a href="#" title="">M</a></li>
													<li><a href="#" title="">M</a></li>
													<li><a href="#" title="">J</a></li>
													<li><a href="#" title="">V</a></li>
													<li><a href="#" title="">S</a></li>
													<li><a href="#" title="">D</a></li>
												</ul>
											</div>
										</li>
										<li>
											<label>
												<input type="checkbox" name="transporte3" value="male">
												<span>Compensar las emisiones de los viajes aéreos</span>
											</label>
										</li>
									</ul>
								</div>

								<div id="energia" class="eje">
									<ul class="items first">

										<li>
											<label>
												<input type="checkbox" name="energia1" value="male">
												<span>Secar la ropa tendiéndola, en vez de usar la secadora</span>
											</label>
											<div class="subitems disabled">
												<div class="completo">
													<small>¿Cuántas veces a la semana?</small>
													<input type="text" required>
												</div>
											</div>
										</li>
										<li>
											<label>
												<input type="checkbox" name="energia1" value="male">
												<span>Desconectar los aparatos eléctricos cuando no estén en uso</span>
											</label>
											<br>
										</li>
									</ul>

									<ul class="items">
										<li>
											<label>
												<input type="checkbox" name="energia1" value="male">
												<span>Instalar paneles solares en casa</span>
											</label>
											<div class="subitems disabled">
												<div class="completo">
													<small>¿Cuántos paneles de 1 m2?</small>
													<input type="text" required>
												</div>
											</div>
										</li>
										<li>
											<label>
												<input type="checkbox" name="energia1" value="male">
												<span>Instalar calentadores solares de agua</span>
											</label>
										</li>

									</ul>
								</div>

								<div id="alimentacion" class="eje">
									<ul class="items first">
										<li>
											<label>
												<input type="checkbox" name="energia1" value="male">
												<span>Disminuir el consumo de carnes rojas</span>
											</label>
											<div class="subitems disabled">
												<div class="completo">
													<small>¿Cuántos días?</small>
													<label>
														<select>
														  <option value="1">1</option>
														  <option value="2">2</option>
														  <option value="3">3</option>
														  <option value="4">4</option>
														  <option value="5">5</option>
														</select>
													</label>
												</div>
											</div>
										</li>
										<li>
											<label>
												<input type="checkbox" name="energia1" value="male">
												<span>Comprar productos de temporada</span>
											</label>
										</li>

									</ul>

									<ul class="items ">
										<li>
											<label>
												<input type="checkbox" name="energia1" value="male">
												<span>Comprar menos productos envasados</span>
											</label>
										</li>
										<li>
											<label>
												<input type="checkbox" name="energia1" value="male">
												<span>Comprar en mercados locales (en lugar de en supermercados)</span>
											</label>
										</li>

									</ul>
								</div>

								<div id="residuos" class="eje">
									<ul class="items first">
										<li>
											<label>
												<input type="checkbox" name="energia1" value="male">
												<span>Asegurarme que mis residuos de papel y cartón sean reciclados</span>
											</label>
											<br><br>
										</li>
										<li>
											<label>
												<input type="checkbox" name="energia1" value="male">
												<span>Disminuir el consumo de bolsas de plástico cuando compro en supermercados a la mitad</span>
											</label>
											<br>
										</li>

									</ul>

									<ul class="items first">
										<li>
											<label>
												<input type="checkbox" name="energia1" value="male">
												<span>Disminuir el consumo de botellas personales</span>
											</label>
											<div class="subitems disabled">
												<div class="completo">
													<small>N° botellas a la semana</small>
													<input type="text" required>
												</div>
											</div>
										</li>
									</ul>
								</div>

								<div id="agua" class="eje">
									<ul class="items first">
										<li>
											<label>
												<input type="checkbox" name="energia1" value="male">
												<span>Reducir mi tiempo de ducha en</span>
											</label>
											<div class="subitems disabled">
												<div class="completo">
													<small>¿Cuántos minutos?</small>
													<input type="text" required>
												</div>
											</div>
										</li>
										<li>
											<label>
												<input type="checkbox" name="energia1" value="male">
												<span>Apagar el agua mientras me cepillo los dientes</span>
											</label>

										</li>
									</ul>
									<ul class="items">
										<li>
											<label>
												<input type="checkbox" name="energia1" value="male">
												<span>Poner dentro del tanque del inodoro</span>
											</label>
											<div class="subitems disabled">
												<div class="completo">
													<small>¿Cuántas botellas de 0.5 litros?</small>
													<input type="text" required>
												</div>
											</div>
										</li>
										<li>
											<label>
												<input type="checkbox" name="energia1" value="male">
												<span>Reparar en mi hogar las fugas</span>
											</label>
											<div class="subitems disabled">
												<div class="completo">
													<small>¿Qué tipo de fugas?</small>
													<label>
														<select>
														  <option value="volvo">Goteo</option>
														  <option value="saab">Chorro Ligero</option>
														  <option value="saab">Chorro Regular</option>
														</select>
													</label>
												</div>
											</div>
										</li>
									</ul>
								</div>

							</div>

						</div>



						<div class="next_step normal">
							<a href="#" class="button ir_contribucion"> Suma tus compromisos </a>
						</div>


					</div>

					<div id="contribucion" class="tab ">


							<div class="felictaciones">
								<h2>Tus compromisos están evitando</h2>
								<div class="reducimos">
									<span class="numero">990,889</span>
									<span class="valor">tCO<sub>2</sub>eq <small>en un año</small></span>
								</div>
								<h2>al año en la atmósfera</h2>
							</div>

							<div class="acepta">
								<h3>Suma tu contribución a la comunidad:</h3>

								<p>Yo <strong>Geraldo Sosa Sosa</strong>, <br>
								acepto cumplir estos compromisos por un año.
								</p>

								<div class="left">
									<p> Pais de residencia </p>
									<label>
										<select name="">
											<option value="Perú"> Perú</option>
											<option value="Otros"> Otros </option>
										</select>
									</label>


								</div>

								<div class="right">
									<p> Rango de edad </p>
									<label>
										<select name="">
											<option value="0 - 17 años">0 - 17 Años</option>
											<option value="18 - 25 años">18 - 25 Años</option>
											<option value="25 - 45 años">25 - 45 Años</option>
											<option value="25 - 45 años">45 a más Años</option>
										</select>
									</label>


								</div>
								<a class="consideraciones" href="#overlay" > Consideraciones </a>

							</div>
						<div class="next_step normal">
							<a href="#" class="button ir_compartelo"> Aceptar Contribución </a>
						</div>
					</div>

					<div id="compartelo" class="tab ">
						<h2>Ya eres parte del cambio</h2>
						<h3>¡gracias por tu contribución!</h3>

						<div class="content">
							<p>Tu contribución es la <span class="contribucionnumber">XXX </span> de <span class="contribuciontotal">YYYYYYYY</span> <br>
							! Lleguemos al millón de ciudadanos comprometidos con el clima ! <br>
							Invita a tus amigos a que se sumen a esta campaña.</p>

							<ul class="share">
								<li class="facebook"><a href="#"> <i class="icon-facebook"></i> <span class="red_social"> Facebook </span></a></li>
								<li class="twitter"><a href="#"> <i class="icon-twitter"></i> <span class="red_social"> Twitter </span></a></li>
								<li class="linkedin"><a href="#"> <i class="icon-linkedin"></i> <span class="red_social"> Linkedin </span></a></li>
							</ul>

							<p class="calltohome">
								Si quieres saber más sobre el cambio climático <a href="#"> entra a Libélula.com.pe</a>
							</p>

							<a class="consideraciones" href="#overlay" > Consideraciones </a>
						</div>
					</div>


				</div>
			</article>
		</div>
	</section>

	<footer id="footer">
		<div class="left"></div>
		<div class="right"></div>
	</footer>

	<div id="overlay" style="display:none;">
	     <h2>Consideraciones</h2>
			<p>Para la construcción de la herramienta de medición se consideró el protocolo internacional GHG Protocol, elaborado por el World Resources Institute <http://www.wri.org/> (WRI) y el World Business Council for Sustainable Development (WBCSD).</p>
			<p>Adicionalmente, se utilizaron otras metodologías de manera complementaria, como el Estándar Internacional ISO 14064, las metodologías aprobadas por el Panel Intergubernamental de Cambio Climático (IPCC), entre otras fuentes con respaldo científico. Los factores de emisión provienen de fuentes confiables tanto nacionales como internacionales.</p>
			<p>La finalidad de la herramienta es proporcionar a los usuarios información referencial que promueva la generación de conciencia ambiental así como la reducción de los impactos ambientales.</p>
	</div>
<?php include('footer.php'); ?>
