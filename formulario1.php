<?php include("template/head.php");?>



<script language="JavaScript">

function calcular(){

	ec = parseInt(document.estilo.c5.value)+parseInt(document.estilo.c9.value)+parseInt(document.estilo.c13.value)+parseInt(document.estilo.c17.value)+parseInt(document.estilo.c25.value)+parseInt(document.estilo.c29.value);
	or = parseInt(document.estilo.c2.value)+parseInt(document.estilo.c10.value)+parseInt(document.estilo.c22.value)+parseInt(document.estilo.c26.value)+parseInt(document.estilo.c30.value)+parseInt(document.estilo.c34.value);
	ca = parseInt(document.estilo.c7.value)+parseInt(document.estilo.c11.value)+parseInt(document.estilo.c15.value)+parseInt(document.estilo.c19.value)+parseInt(document.estilo.c31.value)+parseInt(document.estilo.c35.value);
	ea = parseInt(document.estilo.c4.value)+parseInt(document.estilo.c12.value)+parseInt(document.estilo.c24.value)+parseInt(document.estilo.c28.value)+parseInt(document.estilo.c32.value)+parseInt(document.estilo.c36.value);

	caec = ca-ec;
	eaor = ea-or;

	document.final.EC.value = ec;
	document.final.RO.value = or;
	document.final.CA.value = ca;
	document.final.EA.value = ea;
	document.final.CAEC.value = caec;
	document.final.EAOR.value = eaor;
	document.final.ESTILOFINAL.value = estilo;
}

  </script>  
  <meta http-equiv="CONTENT-TYPE" content="text/html; charset=utf-8">

  
  <meta name="generator" content="Bluefish 2.2.2" >

  
  <style type="text/css">
	<!--
		@page { margin: 2cm }
		P { margin-bottom: 0cm; text-align: justify }
		P.western { so-language: es-ES }
	-->
	</style>
</head>
<body>
<p class="western" align="justify" lang="es-ES"><font color="#FF0000"><font size="3"><b>CUAL ES SU ESTILO DE APRENDIZAJE?</b></font></font></p>

<p class="western" align="justify" lang="es-ES"><font color="#000000"><font size="3"> </font></font></p>

<big><big><br>
Yo aprendo...</big></big>
<form name="estilo">
  <table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="vertical-align: top; width: 25%;">
        <select name="c1">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
discerniendo<br>
        </td>
        <td style="vertical-align: top; width: 25%;">
        <select name="c2">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
ensayando<br>
        </td>
        <td style="vertical-align: top;">
        <select name="c3">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
involucrándome</td>
        <td style="vertical-align: top;">
        <select name="c4">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
practicando</td>
      </tr>
      <tr>
        <td style="vertical-align: top; width: 25%;">
        <select name="c5">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
receptivamente </td>
        <td style="vertical-align: top; width: 25%;">
        <select name="c6">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
relacionando </td>
        <td style="vertical-align: top;">
        <select name="c7">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
analíticamente </td>
        <td style="vertical-align: top;">
        <select name="c8">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
imparcialmente </td>
      </tr>
      <tr>
        <td style="vertical-align: top; width: 25%;">
        <select name="c9">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
sintiendo </td>
        <td style="vertical-align: top; width: 25%;">
        <select name="c10">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
observando </td>
        <td style="vertical-align: top;">
        <select name="c11">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
pensando </td>
        <td style="vertical-align: top;">
        <select name="c12">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
haciendo </td>
      </tr>
      <tr>
        <td style="vertical-align: top; width: 25%;">
        <select name="c13">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
aceptando </td>
        <td style="vertical-align: top; width: 25%;">
        <select name="c14">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
arriesgando </td>
        <td style="vertical-align: top;">
        <select name="c15">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
evaluando </td>
        <td style="vertical-align: top;">
        <select name="c16">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
con cautela </td>
      </tr>
      <tr>
        <td style="vertical-align: top; width: 25%;">
        <select name="c17">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
intuitivamente </td>
        <td style="vertical-align: top; width: 25%;">
        <select name="c18">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
productivamente </td>
        <td style="vertical-align: top;">
        <select name="c19">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
lógicamente </td>
        <td style="vertical-align: top;">
        <select name="c20">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
cuestionando </td>
      </tr>
      <tr>
        <td style="vertical-align: top; width: 25%;">
        <select name="c21">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
abstracto </td>
        <td style="vertical-align: top; width: 25%;">
        <select name="c22">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
observando </td>
        <td style="vertical-align: top;">
        <select name="c23">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
concreto </td>
        <td style="vertical-align: top;">
        <select name="c24">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
activo </td>
      </tr>
      <tr>
        <td style="vertical-align: top; width: 25%;">
        <select name="c25">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
orientado al presente </td>
        <td style="vertical-align: top; width: 25%;">
        <select name="c26">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
reflexivamente </td>
        <td style="vertical-align: top;">
        <select name="c27">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
orientado hacia el futuro </td>
        <td style="vertical-align: top;">
        <select name="c28">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
pragmático </td>
      </tr>
      <tr>
        <td style="vertical-align: top; width: 25%;">
        <select name="c29">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
aprendo más de la experiencia </td>
        <td style="vertical-align: top; width: 25%;">
        <select name="c30">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
aprendo más de la observación </td>
        <td style="vertical-align: top;">
        <select name="c31">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
aprendo más de la conceptualización </td>
        <td style="vertical-align: top;">
        <select name="c32">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
aprendo más de la experimentación </td>
      </tr>
      <tr>
        <td style="vertical-align: top; width: 25%;">
        <select name="c33">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
emotivo </td>
        <td style="vertical-align: top; width: 25%;">
        <select name="c34">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
reservado </td>
        <td style="vertical-align: top;">
        <select name="c35">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
racional </td>
        <td style="vertical-align: top;">
        <select name="c36">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
abierto </td>
      </tr>

    </tbody>
  </table>
  <br>
  <font color="#ff0000"><font size="4"> ------------------</font></font><input value="CALCULAR" onclick="calcular()" type="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</form>

<form name="final" action="estilo.php" method="post">
<input name="EC" maxlength="12" size="12" type="hidden" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name="RO" maxlength="12" size="12" type="hidden" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input name="CA" maxlength="12" size="12" type="hidden" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input name="EA" maxlength="12" size="12" type="hidden" ><br>

<input type="hidden" maxlength="3" size="3" name="CAEC">&nbsp;&nbsp;&nbsp;&nbsp;
<input type="hidden" maxlength="3" size="3" name="EAOR">&nbsp;<br><br>

ESTILO&nbsp;&nbsp; <input maxlength="12" size="12" name="ESTILOFINAL">
  <br>
  Escriba su carnet:<input type="Text" name="carnet"><br>
  Sexo:<select name="sex" value="Sexo">
        <option value="f">Femenino</option>
        <option value="m">Masculino</option>
        </select><br>
  Escoja su recinto:<select name="recinto" value="Recinto">
        <option value="p">Paraíso</option>
        <option value="t">Turrialba</option>
        </select><br>
  <font color="#ff0000"><font size="4"> -------------------------------------------------</font></font><input value="ENVIAR" type="submit">
</form>

<?php include("template/footer.php");?>