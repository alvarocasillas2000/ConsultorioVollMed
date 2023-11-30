<?php include_once("encabezado.php"); ?>
<h1 class="text-center"><?php
  if (isset($datos["subtitulo"])) {
    print $datos["subtitulo"];
  }
  ?>
</h1>

<div class ="container">
  <div class = "row">
    <div class = "col-sm">
      <img src="public/img/cuidado-de-la-salud.png" alt="foto">
    </div>
    <div class="col-sm card p-4 text-success-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
  <table class="table table-striped" width="100%">
  <thead>
    <tr>
    <th>Doctor</th>
    <th>Paciente</th>
    <th>Fecha</th>
    <th>Hora</th>
    <th>Estado</th>
    <th>Modificar</th>
    <th>Borrar</th>
  </tr>
  </thead>
  <tbody>
    <?php
    for($i=0; $i<count($datos['data']); $i++){
      $id = $datos["data"][$i]['id'];
      $paciente = substr($datos["data"][$i]['pacienteApellidos'].", ".$datos["data"][$i]['pacienteNombre'],0,30);
      $doctor = substr($datos["data"][$i]['doctorApellidos'].", ".$datos["data"][$i]['doctorNombre'],0,30);
      print "<tr>";
      print "<td class='text-left'>".$doctor."</td>";
      print "<td class='text-left'>".$paciente."</td>";
      print "<td class='text-left'>".$datos["data"][$i]["fecha"]."</td>";
      print "<td class='text-left'>".substr($datos["data"][$i]["horario"],0,5)."</td>";
      print "<td class='text-left'>".$datos["data"][$i]["estadoCita"]."</td>";
      //
      //
      print "<td><a href='".RUTA."citas/cambio/".$id."' class='btn btn-info'>Modificar</a></td>";
      //
      print "<td><a href='".RUTA."citas/baja/".$id."' class='btn btn-danger'>Borrar</a></td>";
      print "</tr>";
    }
    ?>
  </tbody>
  </table>
</div><!--card-->
  </div>

</div>

<a href="<?php print RUTA; ?>citas/alta" class="btn btn-primary">
  Dar de alta una cita</a>
<?php include_once("piepagina.php"); ?>