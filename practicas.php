<!-- Modal -->
<div id="modal-practica" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content bg-azul-oficial">
      <div class="modal-body">
      	<div class="text-right">
       		<button type="button" class="close text-white" data-dismiss="modal">&times;</button>
      	</div>
      	<div class="paddin-8">
      		<h3 class="text-white" id="text-title"></h3>
      		<hr class="bg-azul-oficial linea linea-center-small" style="background-color: white; width: 30%; margin-left: 0%;">
	       <p class="text-justify text-white paddin-top-2" id="text-description">
	       </p>
      	</div>

      </div>
    </div>

  </div>
</div>

<!--Practicas -->
<section id="areas-practicas">
	<div class="container">
		<hr class="bg-azul-oficial linea">
		<div class="row">
			<div class="col-md-12 paddin-top-bottom-2">
				<h3 class="text-center text-azul"> <strong>ÁREAS DE PRÁCTICA</strong> </h3>
				<hr class="bg-azul-oficial linea linea-center-small">
			</div>
		</div>
		<div class="row paddin-top-bottom-2">
			<div class="col-xs-6 col-md-4 practica-area click-modal-practica cursor" data-toggle="modal" data-target="#modal-practica" title="DERECHO FINANCIERO" description='Representación y defensa de entidades financieras en litigios derivados de la responsabilidad civil contractual y extracontractual de sus agentes, análisis jurídico de riesgos financieros. '>
				<img src="img/iconos/icon-gris/1.png" alt='derecho-financiero' class="redes center-block img-responsive">
				<h5 class="text-center"><strong><?php echo strtoupper("Derecho <br> Financiero") ?></strong></h5>
			</div>
			<div class="col-xs-6 col-md-4 practica-area click-modal-practica cursor" data-toggle="modal" data-target="#modal-practica" title="DERECHO COMERCIAL" description='Asesoramiento y práctica societaria integral, contratos de colaboración empresarial, contratos societarios,  asesoramiento en inversión extranjera.'>
				<img src="img/iconos/icon-gris/2.png" alt="derecho-comercial" class="redes center-block img-responsive">
				<h5 class="text-center"><strong><?php echo strtoupper("Derecho <br> Comercial") ?></strong></h5>
			</div>
			<div class="col-xs-6 col-md-4 practica-area click-modal-practica cursor" data-toggle="modal" data-target="#modal-practica" title="DERECHO ADMINISTRATIVO" description='Procesos administrativos y vía administrativa, responsabilidad patrimonial de la administración pública, acciones contencioso administrativas, acciones constitucionales y juicios de responsabilidad fiscal.'>
				<img src="img/iconos/icon-gris/3.png" alt="derecho-administrativo" class="redes center-block img-responsive">
				<h5 class="text-center"><strong><?php echo strtoupper("Derecho <br> Administrativo") ?></strong></h5>
			</div>
		<!-- </div>
		<div class="row paddin-top-bottom-2"> -->
			<div class="col-xs-6 col-md-4 margin-top-2 practica-area click-modal-practica cursor" data-toggle="modal" data-target="#modal-practica" title="DERECHO LABORAL Y SEGURIDAD SOCIAL" description='Asesoramiento integral a empresas del sector real en aspectos relacionados con la práctica laboral, respuesta ágil a consultas requeridas para el tratamiento de conflictos diarios de la vida empresarial.'>
				<img src="img/iconos/icon-gris/4.png" alt="derecho-laboral" class="redes center-block img-responsive">
				<h5 class="text-center"><strong><?php echo strtoupper("Derecho Laboral <br> y Seguridad <br> Social") ?></strong></h5>
			</div>
			<div class="col-xs-6 col-md-4 margin-top-2 practica-area click-modal-practica cursor" data-toggle="modal" data-target="#modal-practica" title="SERVICIOS PÚBLICOS Y DOMICILIARIO Y NO DOMICILIARIO" description='Asesoramos, gestionamos y representamos a consumidores y usuarios ante los diferentes agentes prestadores, comercializadores y reguladores de los servicios públicos domiciliarios y no domiciliarios, reclamaciones derivadas del contrato de condiciones uniformes y los contratos de suministro privado a grandes clientes.'>
				<img src="img/iconos/icon-gris/5.png" alt="servios-publico" class="redes center-block img-responsive">
				<h5 class="text-center"><strong><?php echo strtoupper("Servicios Publicos <br> Domiciliario y <br> No Domiciliario ") ?></strong></h5>
			</div>
			<div class="col-xs-6 col-md-4 margin-top-2 practica-area click-modal-practica cursor" data-toggle="modal" data-target="#modal-practica" title='<?php echo strtoupper("Estudio De Títulos Inmobiliarios y Análisis Escritural") ?>' description='Análisis de títulos de propiedad, escrituras, y trámites notariales.'>
				<img src="img/iconos/icon-gris/6.png" alt="estudios-titulo" class="redes center-block img-responsive">
				<h5 class="text-center"><strong><?php echo strtoupper("Estudio De Titulos <br> Inmobiliarios y <br> Analisis Escritural") ?></strong></h5>
			</div>
		</div>
	</div>
		<hr class="bg-azul-oficial linea margin-top-1 margin-top-movil">
</section>

<script>
	$(document).ready(function(){
		$('.click-modal-practica').click(function(){

			var title 		= $(this).attr('title');
			var description = $(this).attr('description');

			$("#text-title").text(title);
			$("#text-description").text(description);

		})
	})
</script>