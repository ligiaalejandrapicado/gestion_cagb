<link href="style.css" rel="stylesheet" type="text/css" />
<script language="javascript">
function validar(form) {  
var men = "      Datos Incompletos   :              \n\n" ;

if(form.est.value=="") men= men+"º Estado. \n";


if((form.est.value=="")){
alert(''+men+'  \n\nVerifique para continuar. ');  return (false); }   }
</script> 
<?php include("conectado.php"); ?> 
<?php $sql = "SELECT * FROM prestamo_bienes WHERE cod_pbs='$id' ORDER BY cod_pbs DESC ";
      $result = mysql_query($sql); 
	  

	    ?>
<?php if($row = mysql_fetch_array($result)) {    ?> 
<?php  if (!$HTTP_POST_VARS){   ?>    
<table width="550"  border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
  <td height="40" >&nbsp;</td>
</tr>
<tr>
  <td height="40" bgcolor="#EEEEEE" ><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td width="60" align="right" valign="middle"><img src="imagenes/pres.jpg" alt=""/></td>
    <td width="4"></td>
    <td width="253" align="left" valign="middle" class="css12n">MODIFICAR PRESTAMO</td>
    <td width="83" align="right" valign="middle" class="css12n"><a href="javascript:history.go(-1);" class="css12n">Atr&aacute;s</a></td>
</tr></table></td></tr>
<tr> <td valign="top">
<form id="form" name="form" method="post" action="" onSubmit="return validar(this)">  
<table border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#FF0000">
<tr>
  <td height="5" align="right"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr bgcolor="#F2F2F2">
      <td height="25" colspan="3" align="center" bgcolor="#00CC33" class="css12n">Modificar Prestamo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="?seccion=lissoli">Ver Listado</a></td>
    </tr>
    <tr>
      <td height="3" colspan="3"></td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td align="right" bgcolor="#F2F2F2"><span class="css10n">Código&nbsp;:&nbsp;&nbsp;</span></td>
      <td align="left" bgcolor="#F2F2F2" class="css10"><input name="cod" type="text" class="css10" id="cod" value="<?php echo $row[0]; ?>" size="20" maxlength="50"  readonly="readonly" /></td>
      <td></td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td height="5" colspan="3" align="right"></td>
    </tr>
    <tr>
      <td height="3" colspan="3"></td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td width="153" align="right" bgcolor="#F2F2F2"><span class="css10n">C.I / Rif Cliente:&nbsp;&nbsp;</span></td>
      <td width="174" align="left" bgcolor="#F2F2F2" class="css10"><input  readonly="readonly"name="ci" type="text" class="css10" id="ci" value="<?php echo $row[2]; ?>" size="20" maxlength="50"  /></td>
      <td width="73"></td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td height="5" colspan="3" align="right"></td>
    </tr>
    <tr>
      <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td align="right"><span class="css10n">Teléfono&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
      <td align="left" bgcolor="#F2F2F2" class="css10"><input name="eqi" type="text" class="css10" id="eqi" value="<?php echo $row[3]; ?>" size="20" maxlength="50" readonly="readonly" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td height="5" colspan="3" align="right"></td>
    </tr>
    <tr>
      <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td align="right"><span class="css10n">Fecha&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
      <td align="left" bgcolor="#F2F2F2" class="css10">Solicitud: <br />
        <input name="fec" type="text" class="css10" id="fec" value="<?php echo $row[7]; ?>" size="20" maxlength="50" readonly="readonly"  />
        <br />Entrega: <br />
        <input name="hor" type="text" class="css10" id="hor" value="<?php echo $row[8]; ?>" size="20" maxlength="50" readonly="readonly"  /></td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td height="5" colspan="3" align="right"></td>
    </tr>
    <tr>
      <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td align="right"><span class="css10n">Responsable&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
      <td align="left" bgcolor="#F2F2F2" class="css10"><input name="res" type="text" class="css10" id="res" value="<?php echo $row[3]; ?>" size="20" readonly="readonly" maxlength="50"  />
        <input name="csol" type="hidden"  id="csol" value="<?php echo $row[5]; ?>" />
        <input name="bso" id="bso" type="hidden" value="<?php echo $row[1]; ?>" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td height="5" colspan="3" align="right"></td>
    </tr>
    <tr>
      <td height="39" colspan="3" bgcolor="#FFFFFF"></td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td align="right"><span class="css10n">Observación de Prestamo&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
      <td align="left" bgcolor="#F2F2F2" class="css10"><textarea name="fec" cols="20" readonly="readonly" class="css10" id="fec"><?php echo $row[9]; ?></textarea></td>
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
      <td align="left" bgcolor="#F2F2F2" class="css10"><span class="css10n">
        <select name="est" class="css10" id="tpgo3">
          <option value=""> -- Seleccione --</option>
          <option value="ENTREGADO">ENTREGADO</option>
          <option value="NO ENTREGADO">NO ENTREGADO</option>
        </select><br />
      </span><span class="css10r">&nbsp;<?php echo $row[11]; ?></span></td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td height="5" colspan="3" align="right"></td>
    </tr>
    <tr>
      <td height="39" colspan="3" bgcolor="#FFFFFF"></td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td align="right"><span class="css10n">Observación de Entrega&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
      <td align="left" bgcolor="#F2F2F2" class="css10"><textarea name="obs2" cols="20" class="css10" id="obs2"></textarea></td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td height="5" colspan="3" align="right"></td>
    </tr>
    <tr>
      <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
    </tr>
  </table></td>
</tr>
  <tr> <td height="50" align="center" valign="middle">
<table width="250" border="0" cellspacing="0" cellpadding="0">
<tr><td align="center">
<input name="Guardar" type="submit" class="css12n" id="Guardar" value="Guardar" /></td>
<td></td>
<td align="center">
<input name="button" type="button" class="css12n" id="button" onclick="javascript:history.go(-1);" value="Cancelar" /></td>
</tr>
  </table> </td></tr>  
  </table> 
 </form>
 </td>   </tr>     </table> 	
<?php } ?>
<?php if ($HTTP_POST_VARS) { ?> 
<?php
$result="Update prestamo_bienes set obs2_pbs='".$obs2."', est_pbs='".$est."' WHERE cod_pbs='$id'";  mysql_query($result); 

if($est=='ENTREGADO')
{
	
	$sql20 = "SELECT * FROM bien_servicio WHERE cod_bso='$bso' ORDER BY cod_bso DESC ";
	$result20 = mysql_query($sql20); 
	$row20 = mysql_fetch_array($result20);
    $cantdipo=	$row20[3]+$csol;
	
	$result2="Update bien_servicio set exid_bso='$cantdipo' WHERE cod_bso='$bso'";  
	mysql_query($result2);}
?>
<SCRIPT LANGUAGE="javascript">location.href = "?seccion=lissoli";  </SCRIPT>
<?php }  ?><?php } ?>