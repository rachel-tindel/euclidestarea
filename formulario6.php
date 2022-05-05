<?php include("template/head.php");?>

<form method="post" action="formulario6.php">
  <fieldset> <br>
    <legend>Clasificación de Redes</legend>
    <div class="form-group">
      <label">Fiabilidad de la red</label>
      <select class="form-select" name="fiabilidad" style="width:615px">
      <option value="0"></option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>
    <div class="form-group">
      <label">Número de enlaces</label>
      <select class="form-select" name="enlaces" style="width:615px">
      <option value="0"></option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
      </select>
    </div>
    <div class="form-group">
      <label">Capacidad Total de la Red</label>
      <select class="form-select" name="capacidad" style="width:615px">
      <option value="0"></option>
        <option value="1">Baja</option>
        <option value="2">Media</option>
        <option value="3">Alta</option>
      </select>
    </div>
    <div class="form-group">
      <label">Costo de la Red</label>
      <select class="form-select" name="costo" style="width:615px">
      <option value="0"></option>
        <option value="1">Baja</option>
        <option value="2">Media</option>
        <option value="3">Alta</option>
      </select>
    </div>
    <fieldset> <br>
    <button type="submit" class="btn btn-success" name="aceptar">Calcular</button>
  </fieldset>
</form> <br>

<?php
    if($_POST){ //Obtiene valores de entrda del formulario 
        $re = $_POST["fiabilidad"];
        $li = $_POST["enlaces"];
        $ca = $_POST["capacidad"];
        $co = $_POST["costo"];   
    

    $arrayEntry = array('entry' => array('re' => intval($re),'li' => floatval($li),'ca' => intval($ca), 'co' => intval($co))); //almacena los valores de entrada

    $host = "163.178.107.10"; //Conexion bd
    $user = "laboratorios";
    $pass = "KmZpo.2796";
    $bd = "tarea1-b97821";
    $conexion = mysqli_connect($host,$user,$pass,$bd);
    $sql = "SELECT id,fiabilidad,enlances,capacidad,costo from redes"; //Seleccionar los datos que se desean de la BD
    $datos = mysqli_query( $conexion, $sql );


    while ( $row = mysqli_fetch_array( $datos ) ) { //Array con datos de la BD
        $basededatos[$row['id']] = array('re' => $row['fiabilidad'], 'li' => $row['enlances'], 'ca' => $row['capacidad'], 'co' => $row['costo']); 
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
    $sql2 = "SELECT id,clase from redes"; //Expresion sql para seleccionar los datos de la BD que se desean
    $datosClase = mysqli_query( $conexion, $sql2 );
   
  
    while ( $row = mysqli_fetch_array( $datosClase ) ) { //Array con datos del recinto la BD
        $clases[$row['id']] = array('clase' => $row['clase']); 
    }
    //print_r($longitud);

    $result1 = sim_distance($basededatos, '1', $arrayEntry, 'entry'); //Variable fija para comparar
    $temp = [];

    for ( $var = 1; $var < $longitud; $var = $var + 1 ){  //Ciclo para averiguar el resultado final
        $result2 = sim_distance($basededatos, $var, $arrayEntry, 'entry');
        if($result2 <= $result1){
            $temp = $clases[$var];
            $result1 = $result2; //Se actualiza resul1
        } 
    } 

    echo "La clasificación de la red es: ". $temp['clase'];

    /*echo '<script language="javascript"> 
    alert("La clasificación de la red es: '.$temp["clase"].'");
    </script>';*/
}
    ?>

<?php include("template/footer.php");?>