<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CNE CANDIDATOS</title>
  </head>
	<!-- CDN DE JQuery -->
	<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
	<!-- CDN DE BOOTSTRAP -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <!-- IMPORTACION DE API KEY DE GOOGLE MAPS -->
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBY9ocfqoH51fXQd4wPpnTsc1D7oxrXU0A&libraries=places&callback=initMap">
	</script>
  <body>


    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
     <a class="navbar-brand" href="<?php echo site_url(); ?>">CNE CANDIDATOS</a>
    </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
           <ul class="nav navbar-nav">
             <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Candidatos<span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <li><a href="<?php echo site_url(); ?>/candidatos/nuevoc"<>Nuevo Candidato</a></li>
                 <li><a href="<?php echo site_url(); ?>/candidatos/indexc">Listado Candidatos</a></li>
               </ul>
             </li>
           </ul>
           <ul class="nav navbar-nav">
             <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reportes <span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <li><a href="<?php echo site_url(); ?>/mapas/mapaPresidente">Reporte Candidatos a Presidente</a></li>
                 <li><a href="<?php echo site_url(); ?>/mapas/mapaAsambleista">Reporte Candidatos a Asambleista Nacional</a></li>
                 <li><a href="<?php echo site_url(); ?>/mapas/mapaAsambleistaPro">Reporte Candidatos a Asambleista Provincial</a></li>
                 <li><a href="<?php echo site_url(); ?>/mapas/mapaGeneral">Reporte Candidatos General</a></li>
                 <li><a href="<?php echo site_url(); ?>/mapas/mapaDoI">Reporte Candidatos Derecha o Izquierda</a></li>
               </ul>
             </li>
           </ul>
           <form class="navbar-form navbar-right">
             <div class="form-group">
               <input type="text" class="form-control" placeholder="Search">
             </div>
             <button type="submit" class="btn btn-default">Submit</button>
           </form>

          </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
          </nav>
