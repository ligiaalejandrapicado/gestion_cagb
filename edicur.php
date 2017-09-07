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
if(form.des.value=="") men= men+"º Descripción. \n";
if(form.fechai.value=="") men= men+"º Fecha de inicio. \n";
if(form.fechaf.value=="") men= men+"º Fecha de fin. \n";
if(form.dir.value=="") men= men+"º Dirección. \n";
if(form.fp1.value=="") men= men+"º Fecha de pago 1. \n";
if(form.estado.value=="") men= men+"º Estado. \n";
if(form.cupos.value=="") men= men+"º Cupos Disponibles. \n";
if(form.costo.value=="") men= men+"º Costo en Bs. \n";

if((form.des.value=="")|| (form.fechai.value=="")|| (form.fechaf.value=="")||(form.dir.value=="")||(form.fp1.value=="")||(form.estado.value=="")||(form.cupos.value=="")||(form.costo.value=="") ){
alert(''+men+'  \n\nVerifique para continuar. ');  return (false); }   }
</script>
<?php  $ci=$_GET['ci'];
$sql = "SELECT * FROM curso WHERE cod_cso='$ci' ORDER BY cod_cso DESC ";
$result = mysql_query($sql);   ?>
<?php if($row = mysql_fetch_array($result)) {    ?> 
<?php if(!$_POST['Guardar']) { ?> 
<table width="550"  border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
  <td height="40" >&nbsp;</td>
</tr>
<tr> <td height="40" bgcolor="#EEEEEE" ><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>  <td align="left" valign="middle" class="css12n">MODIFICAR CURSO, TALLER O DIPLOMADO</td>
      <td width="83" align="right" valign="middle" class="css12n"><a href="javascript:history.go(-1);" class="css12n">Atr&aacute;s</a></td>
    </tr>
  </table></td>   
  </tr>
<tr> <td valign="top">
<form id="form" name="form" method="post" onSubmit="return validar(this)" > 
<table border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#FF0000">
<tr> <td height="5" align="right"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#F2F2F2">
    <td height="25"  colspan="3" align="center" valign="middle" bgcolor="#68A3C3" ><table width="320" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="left" class="css12n">Modificar </td>
        <td></td>
        <td align="left"><a href="?seccion=lcur" class="css12n">Ver Listado</a></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td height="3" colspan="3"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td width="153" align="right" bgcolor="#F2F2F2"><span class="css10n">Código&nbsp;:&nbsp;&nbsp;</span></td>
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
    <td align="right"><span class="css10n">Descripción&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="des" type="text" class="css10" id="des" onkeypress="return isAlfaKey(event)" value="<?php echo $row[1]; ?>" size="20" maxlength="50"/>
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
    <td align="right"><span class="css10n">Dirección&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="dir" type="text" class="css10" id="dir" value="<?php echo $row[4]; ?>" size="30" maxlength="50" />
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
    <td align="right"><span class="css10n">Fecha de Inicio&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="fechai" type="text" class="css10" id="fechai" onkeypress="return istlfKey(event)" value="<?php echo $row[2]; ?>" size="17" maxlength="12" />
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
    <td align="right"><span class="css10n">Fecha de Fin&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="fechaf" type="text" class="css10" id="fechaf" onkeypress="return istlfKey(event)" value="<?php echo $row[3]; ?>" size="17" maxlength="12" />
      *</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Fecha Pago 1 &nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="fp1" type="text" class="css10" id="fp1" value="<?php echo $row[5]; ?>" size="12" maxlength="12"/>
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
    <td align="right"><span class="css10n">Fecha Pago 2 &nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="fp2" type="text" class="css10" id="fp2" value="<?php echo $row[6]; ?>" size="12" maxlength="12"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Fecha Pago 3 &nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="fp3" type="text" class="css10" id="fp3" value="<?php echo $row[7]; ?>" size="12" maxlength="12"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Fecha Pago 4 &nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="fp4" type="text" class="css10" id="fp4" value="<?php echo $row[8]; ?>" size="12" maxlength="12"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Estado&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><select name="estado" id="estado" class="css10">
      <option value=""  >--</option>
      <option value="REALIZADO">REALIZADO</option>
      <option value="POR REALIZAR">POR REALIZAR</option>
      <option value="SUSPENDIDO">SUSPENDIDO</option>
    </select>
      * </td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Cupos del curso&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="cupos" type="text" class="css10" id="cupos" value="<?php echo $row[10]; ?>" size="12" maxlength="12"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Costo Bs&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="costo" type="text" class="css10" id="costo" value="<?php echo $row[11]; ?>" size="12" maxlength="12"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
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
$des=$_POST['des'];
	$fechai=$_POST['fechai'];
	$fechaf=$_POST['fechaf'];
	$dir=$_POST['dir'];
	$fp1=$_POST['fp1'];
	$fp2=$_POST['fp2'];
	$fp3=$_POST['fp3'];
	$fp4=$_POST['fp4'];
	$estado=$_POST['estado'];
	$cupos=$_POST['cupos'];
	$costo=$_POST['costo'];



$result3="UPDATE curso SET  des_cso='".$des."', feci_cso='".$fechai."', fecf_cso='".$fechaf."', dir_cso='".$dir."', fpag1_cso='".$fp1."', fpag2_cso='".$fp2."', fpag3_cso='".$fp3."', fpag4_cso='".$fp4."', cupos_cso='".$cupos."', costo_cso='".$costo."'  WHERE cod_cso='".$ci."'";
mysql_query($result3); ?>
<SCRIPT LANGUAGE="javascript">location.href = "?seccion=lcur";</SCRIPT>
<?php } } ?>