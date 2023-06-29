<main>
	<h1 class="text-center">~ REPORTE GENERAL ~</h1>
	<div class="row">
    <div class="col-md-10">
			<div id="mapaLugares" style="height:600px; width:100%; border:2px solid black;"></div>
		</div>
    <div class="col-md-2">
			<br>
			<table class="table table-striped table-hover table-responsive" >
					<tr>
							<th class="text-center"><img src="<?php echo base_url();?>/assets/images/iconRed.png"></th>
							<td class="text-center">~ CANDIDATO A PRESIDENTE ~</td>
					</tr>
					<tr>
							<th class="text-center"><img src="<?php echo base_url();?>/assets/images/iconBlackB.png"></th>
							<td class="text-center">~ CANDIDATO A ASAMBLEISTA NACIONAL ~</td>
					</tr>
					<tr>
							<th class="text-center"><img src="<?php echo base_url();?>/assets/images/iconBlue.png"></th>
							<td class="text-center">~ CANDIDATO A ASAMBLEISTA PROVINCIAL ~</td>
					</tr>
			</table>
		</div>

	</div>

<script type="text/javascript">

function initMap()
{
	var centro= new google.maps.LatLng(-0.4116834386292155, -78.5489524702866);
	//Permite construir el mapa
	var mapaLugaresTuristicos= new google.maps.Map(
		document.getElementById('mapaLugares'),
		{
			center:centro,
			zoom:7,
			mapTypeId:google.maps.MapTypeId.HYBRID
		}
	);

	<?php if($lugaresPre && $lugaresAsam && $lugaresAsamPro): ?>
		<?php foreach ($lugaresPre as $lugarTemporal): ?>
		var coordenadaTemporal=new google.maps.LatLng(<?php echo $lugarTemporal->latitud_can;?>,<?php echo $lugarTemporal->longitud_can;?>);
		var marcador=new google.maps.Marker({
			position:coordenadaTemporal,
			title:"<?php echo $lugarTemporal->nombre_can; echo ' - ' ;echo $lugarTemporal->movimiento_can;?>",
			icon:"<?php echo base_url();?>/assets/images/iconRed.png",
			map:mapaLugaresTuristicos
		});
		<?php endforeach; ?>

		<?php foreach ($lugaresAsam as $lugarTemporal): ?>
		var coordenadaTemporal=new google.maps.LatLng(<?php echo $lugarTemporal->latitud_can;?>,<?php echo $lugarTemporal->longitud_can;?>);
		var marcador=new google.maps.Marker({
			position:coordenadaTemporal,
			title:"<?php echo $lugarTemporal->nombre_can; echo ' - ' ;echo $lugarTemporal->movimiento_can;?>",
			icon:"<?php echo base_url();?>/assets/images/iconBlackB.png",
			map:mapaLugaresTuristicos
		});
		<?php endforeach; ?>

		<?php foreach ($lugaresAsamPro as $lugarTemporal): ?>
		var coordenadaTemporal=new google.maps.LatLng(<?php echo $lugarTemporal->latitud_can;?>,<?php echo $lugarTemporal->longitud_can;?>);
		var marcador=new google.maps.Marker({
			position:coordenadaTemporal,
			title:"<?php echo $lugarTemporal->nombre_can; echo ' - ' ;echo $lugarTemporal->movimiento_can;?>",
			icon:"<?php echo base_url();?>/assets/images/iconBlue.png",
			map:mapaLugaresTuristicos
		});
		<?php endforeach; ?>
	<?php endif; ?>
	}//Cierre de la funcion initMap
</script>
</main>
