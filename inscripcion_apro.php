<link href="style.css" rel="stylesheet" type="text/css" />
<?php include("conectado.php"); ?> 
<script language="javascript">
function isciKey(evt)
{ var charCode = (evt.which) ? evt.which : event.keyCode
if ( (charCode>31&&(charCode<48||charCode>57))&&(charCode!=86)&&(charCode!=69)&&(charCode!=74)&&(charCode<45 || charCode>45))return false;
return true; }
function isAlfaKey(evt)
{ var charCode = (evt.which) ? evt.which : event.keyCode
if ( ((charCode<65||charCode>90)&&(charCode<97||charCode>122))&&(charCode!=164)&&(charCode!=165)&&(charCode!=32) )return false;
return true; }
function istlfKey(evt)
{ var charCode = (evt.which) ? evt.which : event.keyCode
if ( (charCode>31&&(charCode<48||charCode>57))&&(charCode!=45))return false;
return true; }
</script>
<script language="javascript">
function validar(form) {  
var men = "      Datos Incompletos   :              \n\n" ;
if(form.curso.value=="") men= men+"º Curso, Taller o Diplomado. \n";
if(form.fechap.value=="") men= men+"º Fecha de pago. \n";
if(form.monto.value=="") men= men+"º Monto Bs. \n";
if(form.ntra.value=="") men= men+"º nro. transferencia o recibo. \n";
if(form.com.value=="") men= men+"º Comprobante. \n";
if(form.datos.value<=0 && form.foto.value=="" ) men= men+"º Foto del estudiante. \n";
if(form.datos.value<=0 && form.prof.value=="" ) men= men+"º Profesión del estudiante. \n";
if(form.datos.value<=0 && form.cid.value=="" ) men= men+"º C.I digital del estudiante. \n";
if(form.datos.value<=0 && form.sc.value=="" ) men= men+"º Síntesis Curricular del estudiante. \n";
if(form.datos.value<=0 && form.fn.value=="" ) men= men+"º Copia del fondo negro del estudiante. \n";


if(  (form.curso.value=="")|| (form.fechap.value=="")||(form.monto.value=="")|| (form.ntra.value=="")||(form.com.value=="")
|| (form.datos.value<=0 && form.foto.value=="" ) || (form.datos.value<=0 && form.prof.value=="" )||(form.datos.value<=0 && form.cid.value=="" ) || (form.datos.value<=0 && form.sc.value=="" )|| (form.datos.value<=0 && form.fn.value=="" )

 ){
alert(''+men+'  \n\nVerifique para continuar. ');  return (false); }   }
</script>
<?php  
$ci=$_GET['ci'];
$cso=$_GET['cso'];
$fp=$_GET['fp'];
$m=$_GET['m'];
$nt=$_GET['nt'];
$cod=$_GET['cod'];

$sql = "SELECT * FROM estudiante WHERE ci_ste='$ci' ORDER BY ci_ste DESC ";
$result = mysql_query($sql);   


$sql2 = "SELECT * FROM datos_estudiante WHERE ci_ste='$ci' ORDER BY ci_ste DESC ";
$result2 = mysql_query($sql2);
$nrow = mysql_num_rows($result2);


?>
<?php if($row = mysql_fetch_array($result)) {    ?> 
<?php if(!$_POST['Guardar']) { ?> 
<table width="550"  border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
  <td height="40" >&nbsp;</td>
</tr>
<tr> <td height="40" bgcolor="#EEEEEE" ><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>  <td align="left" valign="middle" class="css12n">APROBAR INSCRIPCIÓN</td>
      <td width="83" align="right" valign="middle" class="css12n"><a href="javascript:history.go(-1);" class="css12n">Atr&aacute;s</a></td>
    </tr>
  </table></td>   
  </tr>
<tr> <td valign="top">
<form id="form" name="form" method="post" onSubmit="return validar(this)" enctype="multipart/form-data" > 
<table border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#FF0000">
<tr> <td height="5" align="right"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#F2F2F2">
    <td height="25"  colspan="3" align="center" valign="middle" bgcolor="#68A3C3" ><table width="320" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="left" class="css12n">&nbsp;</td>
        <td></td>
        <td align="left">&nbsp;</td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td height="3" colspan="3"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td width="153" align="right" bgcolor="#F2F2F2"><span class="css10n">C.I&nbsp;:&nbsp;&nbsp;</span></td>
    <td width="174" align="left" bgcolor="#F2F2F2" class="css12r"> &nbsp;<?php echo $row[0]; ?></td>
    <td width="73"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Curso, Taller o Diplomado &nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><?php $resdp2 = mysql_query("SELECT * FROM curso where 
	cod_cso='$cso'  order by cod_cso");
      $rowdp2 = mysql_num_rows($resdp2);?>
      <select name="curso" id="curso" class="css10">
        
        <?php while($ldodp2=mysql_fetch_array($resdp2)){
		
		?>
        <option value="<?php echo $ldodp2[0] ; ?>"><?php echo $ldodp2[1]; ?></option>
        <?php } ?>
      </select>
      *</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Fecha de pago&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="fechap" type="text" class="css10" id="fechap" onkeypress="return istlfKey(event)" value="<?=$fp?>" size="17" maxlength="12" />
      *</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Monto Pagado&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="monto" type="text" class="css10" id="monto" onkeypress="return istlfKey(event)" value="<?=$m?>" size="17" maxlength="12" />
      Bs
      *</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Nro. Recibo o transferencia:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="ntra" type="text" class="css10" id="ntra" onkeypress="return istlfKey(event)" value="<?=$nt?>" size="17" maxlength="30" />
      
      *</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Comprobante de pago digital&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="com" type="file" class="css10" id="com" size="30"  /></td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Observaciones&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="datos" type="hidden" id="datos" value="<?=$nrow?>" />
    <input name="sico" type="hidden" id="sico" value="<?=$cod?>" />
      <textarea name="obs" id="obs" cols="30" rows="5"></textarea></td>
    <td>&nbsp;</td>
  </tr>
 
 
 <?php if($nrow<=0) {    ?>
 
 
 
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td colspan="3" align="center" valign="middle" class="css14n">DATOS PERSONALES</td>
    </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right" bgcolor="#FFFFFF"></td>
    <td align="left" bgcolor="#FFFFFF" class="css10">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Foto tipo carnet&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="foto" type="file" class="css10" id="cid3" size="30"  /></td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Profesión&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="prof" type="text" class="css10" id="prof"  size="17" maxlength="12" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">C.I digital&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="cid" type="file" class="css10" id="cid" size="30"  /></td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Síntesis Curricular&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="sc" type="file" class="css10" id="sc" size="30"  /></td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Copia Fondo Negro&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="fn" type="file" class="css10" id="fn" size="30"  /></td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  
  
  
  <? } // end fi datos?>
  
  
  
  
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
</table></td></tr>
  <tr> <td height="50" align="center" valign="middle">
  <table width="250" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td align="center"><input name="Guardar" type="submit" class="css12n" id="Guardar" value="Guardar" /></td>
      <td></td>
      <td align="center"><input name="button" type="button" class="css12n" id="button" onclick="javascript:history.go(-1);" value="Cancelar" /></td>
    </tr>
  </table> </td></tr>  
  </table> 
 </form>
 </td>   </tr>     </table> 
<?php } else { ?>


<?php
    $curso=$_POST['curso'];
	$fechap=$_POST['fechap'];
	$monto=$_POST['monto'];
	$ntra=$_POST['ntra'];
	$com=$_POST['com'];
	$obs=$_POST['obs'];
	$sico=$_POST['sico'];
	$fecha = date(d)."/".date(m)."/".date(Y) ; 
	$estado='PROCESADA';
	
	$foto=$_POST['foto'];
	$prof=$_POST['prof'];
    $cid=$_POST['cid'];
    $sc=$_POST['sc'];
	$fn=$_POST['fn'];
	
	?> <script>alert(<?=$sico?>);</script><?
	
$result_up="update solicitud_inscripcion set est_sico='".$estado."' where cod_sico='".$sico."'";

$sql_c2 = "SELECT * FROM curso where cod_cso='$curso' ORDER BY cod_cso DESC ";
$result_c2 = mysql_query($sql_c2);  
$row_c2= mysql_fetch_array($result_c2);
$cupos=$row_c2[10]-1;




$result_up2="update curso set cupos_cso='".$cupos."' where cod_cso='".$curso."'";

$sqls="Insert Into inscripcion ( ci_ste,cod_cso,fecha_ico,est_ico,obs_ico ) values ( '" .$ci. "','" .$curso. "','" .$fecha. "','" .$estado. "','" .$obs. "')"; 
mysql_query($sqls); 

  mysql_query($result_up);
mysql_query($result_up2);



//comprobamos si ha ocurrido un error.
if ( ! isset($_FILES["com"]) || $_FILES["com"]["error"] > 0){
    echo "ha ocurrido un error";
} else {
    //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
    //y que el tamano del archivo no exceda los 16mb
    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    $limite_kb = 16384; //16mb es el limite de medium blob
     
    if (in_array($_FILES['com']['type'], $permitidos) && $_FILES['com']['size'] <= $limite_kb * 1024){
     
        //este es el archivo temporal
        $imagen_temporal  = $_FILES['com']['tmp_name'];  
        //este es el tipo de archivo
        $tipo = $_FILES['com']['type'];
        //leer el archivo temporal en binario
        $fp     = fopen($imagen_temporal, 'r+b');
        $data = fread($fp, filesize($imagen_temporal));
        fclose($fp);
        //escapar los caracteres
        $data = mysql_escape_string($data);
   
    } else {
        echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
		?><SCRIPT LANGUAGE="javascript">alert("ERROR AL COPIAR EL ARCHIVO");</SCRIPT><? 		
    }
}
   
$sql_c = "SELECT * FROM inscripcion ORDER BY cod_ico DESC ";
$result_c = mysql_query($sql_c);  
$row_c = mysql_fetch_array($result_c);
$codigo=$row_c[0];



$sql_cur = "SELECT * FROM curso_detalle where cod_cso='$curso' ORDER BY cod_csod DESC ";
$result_cur = mysql_query($sql_cur);  
while ( $row_cur = mysql_fetch_array($result_cur) ){
	$pts='--';
	$sqls_cur="Insert Into notas ( cod_csod,cod_ico,pts_nta,obs_nta ) values ( '" .$row_cur[0]. "','" .$codigo. "','" .$pts. "','" .$obs. "')"; 
mysql_query($sqls_cur);  
	
	}


$sqls_pgo="Insert Into pagos ( cod_ico,fecha_pgo,monto_pgo,ntra_pgo,com_pgo,obs_pgo,tipo_imagen) values ( '" .$codigo. "','" .$fechap. "','" .$monto. "','" .$ntra. "','" .$data. "','" .$obs. "','" .$tipo. "')"; 
mysql_query($sqls_pgo);   

   if($nrow<=0) {  
   
   
   
   
  //FOTO
  if ( ! isset($_FILES["foto"]) || $_FILES["foto"]["error"] > 0){
    echo "ha ocurrido un error";
} else {
    //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
    //y que el tamano del archivo no exceda los 16mb
    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    $limite_kb = 16384; //16mb es el limite de medium blob
     
    if (in_array($_FILES['foto']['type'], $permitidos) && $_FILES['foto']['size'] <= $limite_kb * 1024){
     
        //este es el archivo temporal
        $imagen_temporal  = $_FILES['foto']['tmp_name'];  
        //este es el tipo de archivo
        $tipo1 = $_FILES['foto']['type'];
        //leer el archivo temporal en binario
        $fp1     = fopen($imagen_temporal, 'r+b');
        $data1 = fread($fp1, filesize($imagen_temporal));
        fclose($fp1);
        //escapar los caracteres
        $data1 = mysql_escape_string($data1);
   
    } else {
        echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
		?><SCRIPT LANGUAGE="javascript">alert("ERROR AL COPIAR EL ARCHIVO");</SCRIPT><? 		
    }
} 
  


  
	
	// CI DIGITAL
	if ( ! isset($_FILES["cid"]) || $_FILES["cid"]["error"] > 0){
    echo "ha ocurrido un error";
} else {
    //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
    //y que el tamano del archivo no exceda los 16mb
    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    $limite_kb = 16384; //16mb es el limite de medium blob
     
    if (in_array($_FILES['cid']['type'], $permitidos) && $_FILES['cid']['size'] <= $limite_kb * 1024){
     
        //este es el archivo temporal
        $imagen_temporal  = $_FILES['cid']['tmp_name'];  
        //este es el tipo de archivo
        $tipo2 = $_FILES['cid']['type'];
        //leer el archivo temporal en binario
        $fp2     = fopen($imagen_temporal, 'r+b');
        $data2 = fread($fp2, filesize($imagen_temporal));
        fclose($fp2);
        //escapar los caracteres
        $data2 = mysql_escape_string($data2);
   
    } else {
        echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
		?><SCRIPT LANGUAGE="javascript">alert("ERROR AL COPIAR EL ARCHIVO");</SCRIPT><? 		
    }
}
   
   
   	// sintesis
	if ( ! isset($_FILES["sc"]) || $_FILES["sc"]["error"] > 0){
    echo "ha ocurrido un error";
} else {
    //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
    //y que el tamano del archivo no exceda los 16mb
    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    $limite_kb = 16384; //16mb es el limite de medium blob
     
    if (in_array($_FILES['sc']['type'], $permitidos) && $_FILES['sc']['size'] <= $limite_kb * 1024){
     
        //este es el archivo temporal
        $imagen_temporal  = $_FILES['sc']['tmp_name'];  
        //este es el tipo de archivo
        $tipo3 = $_FILES['sc']['type'];
        //leer el archivo temporal en binario
        $fp3     = fopen($imagen_temporal, 'r+b');
        $data3 = fread($fp3, filesize($imagen_temporal));
        fclose($fp3);
        //escapar los caracteres
        $data3 = mysql_escape_string($data3);
   
    } else {
        echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
		?><SCRIPT LANGUAGE="javascript">alert("ERROR AL COPIAR EL ARCHIVO");</SCRIPT><? 		
    }
}	
	
		// fondo negro
	if ( ! isset($_FILES["fn"]) || $_FILES["fn"]["error"] > 0){
    echo "ha ocurrido un error";
} else {
    //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
    //y que el tamano del archivo no exceda los 16mb
    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    $limite_kb = 16384; //16mb es el limite de medium blob
     
    if (in_array($_FILES['fn']['type'], $permitidos) && $_FILES['fn']['size'] <= $limite_kb * 1024){
     
        //este es el archivo temporal
        $imagen_temporal  = $_FILES['fn']['tmp_name'];  
        //este es el tipo de archivo
        $tipo4= $_FILES['fn']['type'];
        //leer el archivo temporal en binario
        $fp4     = fopen($imagen_temporal, 'r+b');
        $data4 = fread($fp4, filesize($imagen_temporal));
        fclose($fp4);
        //escapar los caracteres
        $data4 = mysql_escape_string($data4);
   
    } else {
        echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
		?><SCRIPT LANGUAGE="javascript">alert("ERROR AL COPIAR EL ARCHIVO");</SCRIPT><? 		
    }
}
	
   
   
   $sqls_dto="Insert Into datos_estudiante ( ci_ste,pro_dto,cid_dto,tipo_cid,cv_dto,tipo_cv,fon_dto,tipo_fon,foto_dto,tipo_foto ) values ( '" .$ci. "','" .$prof. "','" .$data2. "','" .$tipo2. "','" .$data3. "','" .$tipo3. "','" .$data4. "','" .$tipo4. "','" .$data1. "','" .$tipo1. "')"; 
mysql_query($sqls_dto);
   
   }  




mysql_close(); 

 ?>
<SCRIPT LANGUAGE="javascript">location.href = "?seccion=lissins";</SCRIPT>
<?php } } ?>