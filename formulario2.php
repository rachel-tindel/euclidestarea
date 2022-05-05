<?php include("template/head.php");?>

<form method="post" action="formulario2.php">
  <fieldset> <br>
    <legend>Recinto de Origen</legend>
    <div class="form-group">
      <label for="apredizajeSelect">Estilo de aprendizaje</label>
      <select class="form-select" name="aprendizaje" style="width:615px">
      <option value="0"></option>
        <option value="2">divergente</option>
        <option value="4">convergente</option>
        <option value="3">asimilador</option>
        <option value="1">acomodador</option>
      </select>
    </div>
    <div class="form-group">
      <label">Último promedio de matrícula</label>
      <input type="text" class="form-control"  name="txtPromedio" id="promedio" placeholder="" style="width:615px">
    </div>
    <div class="form-group">
      <label>Sexo</label>
      <select class="form-select" name="sexoSelect" style="width:615px">
      <option value="0"></option>
        <option value="2">femenino</option>
        <option value="1">masculino</option>
      </select>
    </div>  
    <fieldset> <br>
    <button type="submit" class="btn btn-success" name="aceptar">Calcular</button>
  </fieldset>
</form> <br>

<?php
    if($_POST){ //Obtiene valores de entrda del formulario 
        $aprendizaje = $_POST["aprendizaje"];
        $promedio = $_POST["txtPromedio"];
        $sexo = $_POST["sexoSelect"];   
    

    $arrayEntry = array('entry' => array('sexo' => intval($sexo),'promedio' => floatval($promedio),'estilo' => intval($aprendizaje))); //almacena los valores de entrada

    $host = "163.178.107.10"; //Conexion bd
    $user = "laboratorios";
    $pass = "KmZpo.2796";
    $bd = "tarea1-b97821";
    $conexion = mysqli_connect($host,$user,$pass,$bd);
    $sql = "SELECT id,sexo,promedio,estilo from formulario2";
    $datos = mysqli_query( $conexion, $sql );


    while ( $row = mysqli_fetch_array( $datos ) ) { //Array con datos de la BD
        $basededatos[$row['id']] = array('sexo' => $row['sexo'], 'promedio' => $row['promedio'], 'estilo' => $row['estilo']); 
    }

    function sim_distance($prefs, $x, $array, $y) {

    # get the list of shared items
    $si = array_keys(array_intersect_key($prefs[$x], $array[$y]));

    # if the have no ratings in common, return 0
    if(0 === count($si)) return 0;
    $sum_of_squares = 0;
    foreach($si as $item) {
        $sum_of_squares += pow($prefs[$x][$item]-$array[$y][$item],2);
    }
    return 1/(1+sqrt($sum_of_squares));
    }

    $longitud = count($basededatos); // longitud del array de la BD
    $sql2 = "SELECT id,recinto from formulario2";
    $datosRecinto = mysqli_query( $conexion, $sql2 );
   
  
    while ( $row = mysqli_fetch_array( $datosRecinto ) ) { //Array con datos del recinto la BD
        $recintos[$row['id']] = array('recinto' => $row['recinto']); 
    }
    //print_r($longitud);

    $result1 = sim_distance($basededatos, '1', $arrayEntry, 'entry');
    $temp = [];

    for ( $var = 1; $var < $longitud; $var = $var + 1 ){  
        $result2 = sim_distance($basededatos, $var, $arrayEntry, 'entry');
      //  print_r($var);
        if($result2 <= $result1){
            $temp = $recintos[$var];
            $result1 = $result2; //Se actualiza resul1
        } 
    } 
   
    //print_r($temp['recinto']);
    echo "Su recinto de origen es: ". $temp['recinto'];

    /*echo '<script language="javascript"> 
    alert("Su recinto de origen es: '.$temp["recinto"].'");
    </script>';*/
}
    ?>

<?php include("template/footer.php");?>