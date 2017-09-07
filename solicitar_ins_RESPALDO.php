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



if(  (form.curso.value=="")|| (form.fechap.value=="")||(form.monto.value=="")|| (form.ntra.value=="")||(form.com.value=="")
 ){
alert(''+men+'  \n\nVerifique para continuar. ');  return (false); }   }
</script>
<?php  $ci=$_GET['ci'];
$sql = "SELECT * FROM estudiante WHERE ci_ste='$ci' ORDER BY ci_ste DESC ";
$result = mysql_query($sql);   


?>
<?php if($row = mysql_fetch_array($result)) {    ?> 
<?php if(!$_POST['Guardar']) { ?> 
<table width="550"  border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
  <td height="40" >&nbsp;</td>
</tr>
<tr> <td height="40" bgcolor="#EEEEEE" ><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>  <td width="60" align="right" valign="middle">&nbsp;</td>
      <td width="4"></td>
      <td width="253" align="left" valign="middle" class="css12n">SOLICITUD DE INSCRIPCIÓN</td>
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
    <td align="left" bgcolor="#F2F2F2" class="css10"><?php $resdp2 = mysql_query("SELECT * FROM curso  order by cod_cso");
      $rowdp2 = mysql_num_rows($resdp2);?>
      <select name="curso" id="curso" class="css10">
        <option  value="">-- Seleccione --</option>
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
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="fechap" type="text" class="css10" id="fechap" onkeypress="return istlfKey(event)" value="<?=date('d/m/Y');?>" size="17" maxlength="12" />
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
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="monto" type="text" class="css10" id="monto" onkeypress="return istlfKey(event)" size="17" maxlength="12" />
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
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="ntra" type="text" class="css10" id="ntra" onkeypress="return istlfKey(event)" size="17" maxlength="30" />
      
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
    <td align="left" bgcolor="#F2F2F2" class="css10">
      <textarea name="obs" id="obs" cols="30" rows="5"></textarea></td>
    <td>&nbsp;</td>
  </tr>
 

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
	$fecha = date(d)."/".date(m)."/".date(Y) ; 
	$estado='PENDIENTE';
	
	
	
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
	
	
	
	

$sqls="Insert Into solicitud_inscripcion ( ci_ste,cod_cso,fecha_sico,monto_sico,ntra_sico,com_sico,est_sico,obs_sico,tipo_imagen ) values ( '" .$ci. "','" .$curso. "','" .$fechap. "','" .$monto. "','" .$ntra. "','" .$data. "','" .$estado. "','" .$obs. "','" .$tipo. "')"; 
mysql_query($sqls); 




mysql_close(); 

 ?>
<SCRIPT LANGUAGE="javascript">location.href = "?seccion=lissins";</SCRIPT>
<?php } } ?>