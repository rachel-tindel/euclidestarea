<?php include("template/head.php");?>
<br> 
<br> 
 
<form method="post" action="formulario5.php">
  <fieldset><br>
    <legend>Tipo de Profesor</legend>
    <div class="form-group">
      <label">Edad</label>
      <select class="form-select" name="edad" style="width:615px">
      <option></option>
        <option value="1">Menor o igual a 30 años</option>
        <option value="2">Mayor a 30 años y menor o igual a 50 años</option>
        <option value="3">Mayor a 50 años</option>
      </select>
    </div>
    <div class="form-group">
      <label">Género</label>
      <select class="form-select" name="sexo" style="width:615px">
      <option></option>
        <option value="1">Masculino</option>
        <option value="2">Femenino</option>
        <option value="3">No especificado</option>
      </select>
    </div>
    <div class="form-group">
      <label>Autoevaluación de los profesores</label>
      <select class="form-select" name="autoeva" style="width:615px">
      <option></option>
        <option value="1">Principiante</option>
        <option value="2">Intermedio</option>
        <option value="3">Avanzando</option>
      </select>
    </div>  
    <div class="form-group">
      <label>Cantidad de veces que el profesor dio el curso</label>
      <select class="form-select" name="veces" style="width:615px">
      <option></option>
        <option value="1">Nunca</option>
        <option value="2">1 a 5 veces</option>
        <option value="3">Más de 5 veces</option>
      </select>
    </div>  
    <div class="form-group">
      <label>Área de experiencia del profesor</label>
      <select class="form-select" name="disciplinaProfe" style="width:615px">
      <option></option>
        <option value="1">Toma de desiciones</option>
        <option value="2">Diseño de redes</option>
        <option value="3">Otro</option>
      </select>
    </div> 
    <div class="form-group">
      <label>Habilidades del profesor usando computadoras</label>
      <select class="form-select" name="habilidadProfe" style="width:615px">
      <option></option>
        <option value="1">Baja</option>
        <option value="2">Media</option>
        <option value="3">Alta</option>
      </select>
    </div>  
    <div class="form-group">
      <label>Experiencia del profesor en el uso de tecnologías basadas en la web para la enseñanza </label>
      <select class="form-select" name="tecnologiasEns" style="width:615px">
      <option></option>
        <option value="4">Nunca</option>
        <option value="1">Algunas veces</option>
        <option value="2">Frecuente</option>
      </select>
    </div>  
    <div class="form-group">
      <label> Experiencia del profesor usando páginas web</label>
      <select class="form-select" name="paginasWebProfe" style="width:615px">
      <option></option>
        <option value="4">Nunca</option>
        <option value="1">Algunas veces</option>
        <option value="2">Frecuente</option>
      </select>
    </div>  
    <fieldset> <br>
    <button type="submit" class="btn btn-success" name="aceptar">Calcular</button> 
  </fieldset>
</form> <br>

<?php
    if($_POST){ //Obtiene valores de entrda del formulario 
        $A = $_POST["edad"];
        $B = $_POST["sexo"];
        $C = $_POST["autoeva"];  
        $D = $_POST["veces"];
        $E = $_POST["disciplinaProfe"];
        $F = $_POST["habilidadProfe"];  
        $G = $_POST["tecnologiasEns"];
        $H = $_POST["paginasWebProfe"];  

        //array de datos de entrada
    $arrayEntry = array('entry' => array('A' => intval($A),'B' => floatval($B),'C' => intval($C),'D' => floatval($D),'E' => floatval($E), 'F' => floatval($F),'G' => floatval($G) ,'H' => floatval($H))); //almacena los valores de entrada
    
    $host = "163.178.107.10"; //Conexion bd
    $user = "laboratorios";
    $pass = "KmZpo.2796";
    $bd = "tarea1-b97821";
    $conexion = mysqli_connect($host,$user,$pass,$bd);
    $sql = "SELECT id,A,B,C,D,E,F,G,H from profesores"; //Consulta a base de datos
    $datos = mysqli_query($conexion, $sql); // conexion


    while ( $row = mysqli_fetch_array( $datos ) ) { //Array con datos de la BD
        $basededatos[$row['id']] = array('A' => $row['A'], 'B' => $row['B'], 'C' => $row['C'], 'D' => $row['D'], 'E' => $row['E'], 'F' => $row['F'], 'G' => $row['G'], 'H' => $row['H']); 
    }

    function sim_distance($prefs, $x, $array, $y) {// funcion para sacar la distancia entre dos puntos
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
    $sql2 = "SELECT id,Class from profesores"; //Expresion sql para seleccionar los datos de la BD que se desean
    $datosClass = mysqli_query( $conexion, $sql2 );
   
    while ( $row = mysqli_fetch_array( $datosClass ) ) { //Array con datos del recinto la BD
        $clase[$row['id']] = array('Class' => $row['Class']); 
    }

   $result1 = sim_distance($basededatos, '1', $arrayEntry, 'entry'); //Variable fija para comparar
    $temp = [];

    for ( $var = 1; $var < $longitud; $var = $var + 1 ){  //empieza a comparar para obtener el resultado
        $result2 = sim_distance($basededatos, $var, $arrayEntry, 'entry');
        if($result2 <= $result1){
            $temp = $clase[$var];
            $result1 = $result2; //Se actualiza resul1
        } 
    }   

    echo "El tipo de profesor es: ". $temp['Class'];

    /*echo '<script language="javascript"> 
    alert("El tipo de profesor es: '.$temp["Class"].'");
    </script>';*/
}
    ?>

<?php include("template/footer.php");?>