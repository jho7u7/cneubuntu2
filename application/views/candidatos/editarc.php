<br>
<main>
  <div class="row">
    <div class="col-md-12 text-center">
      <h1>~ EDITAR CANDIDATO ~</h1>
    </div>
  </div>
  <br>
  <div class="container">
    <form class=""
    action="<?php echo site_url(); ?>/candidatos/procesarActualizacion"
    method="post">
        <div class="row">
          <div class="col-md-4">
            <label for="">Cédula:</label>
            <br>
            <input type="number"
            placeholder="Ingrese la cédula"
            class="form-control"
            name="cedula_can" value=""
            id="cedula_can">
          </div>
          <div class="col-md-4 text-right"> <label for>Dignidad:</label>
          </div>
          <div class="col-md-4">
            <select type="text" id="dignidad_can" name="dignidad_can" value"">
            <option value="Presidente">Presidente</option> slot
            <option value="Asambleista_Nacional">Asambleista_Nacional</option> slot
            <option value="Asambleista_Provincial">Asambleista_Provincial</option> slot
            </select>
          </div>
        </div>
        <div class="col-md-4 text-right"> <label for>Tipo:</label>
        </div>
          <div class="col-md-4">
            <select type="text" id="tipo_can" name="tipo_can" value"">
            <option value="Derecha">Derecha</option> slot
            <option value="Izquierda">Izquierda</option> slot
            </select>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-4">
            <label for="">Apellidos:</label>
            <br>
            <input type="text"
            placeholder="Ingrese los Apellidos"
            class="form-control"
            name="apellido_can" value=""
            id="apellido_can">
          </div>
          <div class="col-md-4">
            <label for="">Nombres:</label>
            <br>
            <input type="text"
            placeholder="Ingrese los Nombres"
            class="form-control"
            name="nombre_can" value=""
            id="nombre_can">
          </div>
          <div class="col-md-4">
            <label for="">Movimiento:</label>
            <br>
            <input type="text"
            placeholder="Ingrese el nombre del Movimiento"
            class="form-control"
            name="movimiento_can" value=""
            id="movimiento_can">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-4">
            <label for="">Teléfono:</label>
            <br>
            <input type="number"
            placeholder="Ingrese un numero de contacto"
            class="form-control"
            name="telf_can" value=""
            id="telf_can">
          </div>

          <div class="col-md-4">
            <label for="">Latitud:</label>
            <br>
            <input type="number"
            placeholder="Ingrese la ubicacion en el mapa"
            class="form-control" readonly
            name="latitud_can" value=""
            id="latitud_can">
          </div>
          <div class="col-md-4">
            <label for="">Longitud:</label>
            <br>
            <input type="number"
            placeholder="Ingrese la ubicacion en el mapa"
            class="form-control" readonly
            name="longitud_can" value=""
            id="longitud_can">
          </div>
          </div>
          <br>

          <div class="row">
            <div class="col-md-12">
              <div id="mapaUbicacion" style="height:500px; width:100%; border:2px solid black;"></div>
            </div>
          </div>

          <script type="text/javascript">
            function initMap(){
              var centro=new google.maps.LatLng(-0.4116834386292155, -78.5489524702866);

              var mapa1=new google.maps.Map(
                document.getElementById('mapaUbicacion'),
                {
                  center:centro,
                  zoom:7,
                  mapTypeId:google.maps.MapTypeId.HYBRID
                }
              );
              var marcador=new google.maps.Marker({
                position:centro,
                map:mapa1,
                title:"Seleccione la direccion",
                icon:"<?php echo base_url();?>/assets/images/iconYellow.png",
                draggable:true //con este podemos mover el marcador el icono
              });
              google.maps.event.addListener(marcador, 'dragend', function(){
                // alert("Se termino el Drag");
              document.getElementById('latitud_can').value=this.getPosition().lat();
              document.getElementById('longitud_can').value=this.getPosition().lng();
            }); //le colocammos marcador porque queremos obtener los datos de la poscion que se encuentre el icono
            }//cierre dde la funcion initMap
          </script>
        <br><br>
        <div class="row">
            <div class="col-md-12 text-center">
                <button type="submit" name="button"
                class="btn btn-primary">
                  Guardar
                </button>
                &nbsp;
                <a href="<?php echo site_url(); ?>/candidatos/indexc"
                  class="btn btn-danger">
                  Cancelar
                </a>
            </div>
        </div>
        <br>
    </form>
  </div>
</main>
