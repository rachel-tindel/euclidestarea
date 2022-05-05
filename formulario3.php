<?php include("template/head.php");?>

<form method="post" action="formulario3.php">
  <fieldset> <br>
    <legend>Sexo del Estudiante</legend>
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
      <input type="text" class="form-control"  name="txtPromedio" placeholder="" style="width:615px">
    </div>
    <div class="form-group">
      <label>Recinto</label>
      <select class="form-select" name="recintoSelect" style="width:615px">
      <option value="0"></option>
        <option value="4">Turrialba</option>
        <option value="3">Paraiso</option>
      </select>
    </div>  
    <fieldset> <br>
    <button type="submit" class="btn btn-info" name="aceptar">Calcular</button>
  </fieldset>
</form> <br>

<?php
    if($_POST){ //Obtiene valores de entrda del formulario 
        $aprendizaje = $_POST["aprendizaje"];
        $promedio = $_POST["txtPromedio"];
        $recinto = $_POST["recintoSelect"];   
    

    $arrayEntry = array('entry' => array('promedio' => intval($promedio),'aprendizaje' => floatval($aprendizaje),'recinto' => intval($recinto))); //almacena los valores de entrada

    $host = "163.178.107.10"; //Conexion bd
    $user = "laboratorios";
    $pass = "KmZpo.2796";
    $bd = "tarea1-b97821";
    $conexion = mysqli_connect($host,$user,$pass,$bd);
      //Expresion SQL para seleccionar los datos deseados
    $sql = "SELECT id,promedio,estilo,numeralR from formulario2";
    $datos = mysqli_query( $conexion, $sql );


    while ( $row = mysqli_fetch_array( $datos ) ) { //Array con datos de la BD
        $basededatos[$row['id']] = array('promedio' => $row['promedio'], 'estilo' => $row['estilo'], 'recinto' => $row['numeralR']); 
    }

    function sim_distance($prefs, $x, $array, $y) { //contiene el codigo de la formula de Euclides
    # get the list of shared items
    $si = array_keys(array_intersect_key($prefs[$x], $array[$y]));
    # if the have no ratings in common, return 0
    if(0 === count($si)) return 0;
    $sum_of_squares = 0;
    foreach($si as $item) {
        $sum_of_squares += pow($prefs[$x][$item]-$array[$y][$item],2);
    }
    return 1/(1+sqrt($sum_of_squares));
    } // fin funcion

    $longitud = count($basededatos); // longitud del array de la BD
    $sql2 = "SELECT id,sexo from formulario2"; //Expresion SQL para seleccionar los datos deseados
    $datosRecinto = mysqli_query( $conexion, $sql2 ); //conexion
   
  
    while ( $row = mysqli_fetch_array( $datosRecinto ) ) { //Array con datos del recinto la BD
        $sexoR[$row['id']] = array('sexo' => $row['sexo']); 
    }
    //print_r($longitud);

    $result1 = sim_distance($basededatos, '1', $arrayEntry, 'entry'); // se llama la funcion y se asigna a una variable estatica
    $temp = []; // arreglo temporal

    for ( $var = 1; $var < $longitud; $var = $var + 1 ){   // ciclo para averiguar el resultado
        $result2 = sim_distance($basededatos, $var, $arrayEntry, 'entry'); // variable cambiante
        if($result2 <= $result1){
            $temp = $sexoR[$var];
            $result1 = $result2; //Se actualiza resul1
        } 
    } 
   //Muestra el resultado
  /* */
    if($temp["sexo"] == '1'){
      $resultadofinal = "masculino";
    }else {
      $resultadofinal = "femenino";
    }
    
    echo "Su sexo es: ". $resultadofinal;

    /*echo '<script language="javascript"> 
    alert("Su sexo es: '.$resultadofinal.'");
    </script>';*/
}
    ?>

<?php include("template/footer.php");?>