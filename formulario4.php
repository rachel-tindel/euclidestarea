<?php include("template/head.php");?>

<form method="post" action="formulario4.php">
  <fieldset> <br>
    <legend>Estilo de Aprendizaje</legend>
    <div class="form-group">
      <label">Recinto</label>
      <select class="form-select" name="recinto" style="width:615px">
      <option value="0"></option>
        <option value="3">Paraiso</option>
        <option value="4">Turrialba</option>
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
    <button type="submit" class="btn btn-warning" name="aceptar">Calcular</button>
  </fieldset>
</form> <br>

<?php
    if($_POST){ //Obtiene valores de entrda del formulario 
        $recinto = $_POST["recinto"];
        $promedio = $_POST["txtPromedio"];
        $sexo = $_POST["sexoSelect"];   
    

    $arrayEntry = array('entry' => array('sexo' => intval($sexo),'promedio' => floatval($promedio),'recinto' => intval($recinto))); //almacena los valores de entrada

    $host = "163.178.107.10"; //Conexion bd
    $user = "laboratorios";
    $pass = "KmZpo.2796";
    $bd = "tarea1-b97821";
    $conexion = mysqli_connect($host,$user,$pass,$bd);
    $sql = "SELECT id,sexo,promedio,numeralR from formulario2";
    $datos = mysqli_query( $conexion, $sql );


    while ( $row = mysqli_fetch_array( $datos ) ) { //Array con datos de la BD
        $basededatos[$row['id']] = array('sexo' => $row['sexo'], 'promedio' => $row['promedio'], 'recinto' => $row['numeralR']); 
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
    } //fin de la funcion


    $longitud = count($basededatos); // longitud del array de la BD
    $sql2 = "SELECT id,estilo from formulario2"; //Expresion sql para seleccionar los datos de la BD que se desean
    $datosEstilo = mysqli_query( $conexion, $sql2 );
   
  
    while ( $row = mysqli_fetch_array( $datosEstilo ) ) { //Array con datos del recinto la BD
        $estilos[$row['id']] = array('estilo' => $row['estilo']); 
    }
    //print_r($longitud);

    $result1 = sim_distance($basededatos, '1', $arrayEntry, 'entry'); //Variable fija para comparar
    $temp = [];

    for ( $var = 1; $var < $longitud; $var = $var + 1 ){  
        $result2 = sim_distance($basededatos, $var, $arrayEntry, 'entry');
        if($result2 <= $result1){
            $temp = $estilos[$var];
            $result1 = $result2; //Se actualiza resul1
        } 
    } 

    if($temp["estilo"] == '1'){
      $resultadofinal = "acomodador";
    }elseif($temp["estilo"] == '2') {
      $resultadofinal = "divergente";
    }elseif($temp["estilo"] == '3') {
      $resultadofinal = "asimilador";
    }else{
      $resultadofinal = "convergente";
    }
   
    echo "Su estilo de aprendizaje es: ". $resultadofinal;

    /*echo '<script language="javascript"> 
    alert("Su estilo de aprendizaje es: '.$resultadofinal.'");
    </script>';*/
}
    ?>

<?php include("template/footer.php");?>