<main>
	<h1 class="text-center">~ REPORTE : CANDIDATOS A ASAMBLEISTAS PROVINCIALES ~</h1>
	<div class="row">
		<div class="col-md-12">
			<div id="mapaLugaresAP" style="height:600px; width:100%; border:2px solid black;"></div>
		</div>
	</div>

<script type="text/javascript">

function initMap()
{
	var centro= new google.maps.LatLng(-0.4116834386292155, -78.5489524702866);
	var mapaLugaresAsamP= new google.maps.Map(
		document.getElementById('mapaLugaresAP'),
		{
			center:centro,
			zoom:7,
			mapTypeId:google.maps.MapTypeId.HYBRID
		}
	);
	<?php if($lugaresAsamPro): ?>
		<?php foreach ($lugaresAsamPro as $lugarTemporal): ?>
		var coordenadaTemporal=new google.maps.LatLng(<?php echo $lugarTemporal->latitud_can;?>,<?php echo $lugarTemporal->longitud_can;?>);
		var marcador=new google.maps.Marker({
			position:coordenadaTemporal,
			title:"<?php echo $lugarTemporal->nombre_can; echo ' -  ' ;echo $lugarTemporal->movimiento_can;?>",
			icon:"<?php echo base_url();?>/assets/images/iconBlue.png",
			map:mapaLugaresAsamP
		});
		<?php endforeach; ?>
	<?php endif; ?>
}//Cierre de la funcion initMap que no se entiende como es que sale que initMap no es una funcion???
</script>
</main>
