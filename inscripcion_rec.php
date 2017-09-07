<link href="style.css" rel="stylesheet" type="text/css" />
<script language="javascript">
function validar(form) {  
var men = "      Datos Incompletos   :              \n\n" ;

if(form.obs.value=="") men= men+"º Observaciones. \n ";



if(
(form.obs.value=="")

){
alert(''+men+'  \n\nVerifique para continuar. ');  return (false); }   }
</script> 

<?php include("conectado.php"); $ci=$_GET['ci']; ?> 
<?php $sql = "SELECT * FROM solicitud_inscripcion WHERE cod_sico='$ci' ORDER BY cod_sico DESC ";
      $result = mysql_query($sql);   ?>
<?php if($row = mysql_fetch_array($result)) {    ?> 
<?php  if (!$_POST['Guardar']){   ?>    
<table width="550"  border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
  <td height="40" >&nbsp;</td>
</tr>
<tr>
  <td height="40" bgcolor="#EEEEEE" ><table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="10%" align="right">&nbsp;</td>
      <td width="1%"></td>
      <td width="75%" align="left" valign="middle" class="css12n">RECHAZAR SOLICITUD</td>
      <td width="14%"><a href="javascript:history.go(-1);" class="css12n">Atr&aacute;s</a></td>
    </tr>
  </table></td></tr>
<tr> <td valign="top">
<form id="form" name="form" method="post" action="" onSubmit="return validar(this)">  
<table border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#FF0000">
<tr>
  <td height="5" align="right">&nbsp;</td>
</tr>
<tr>
  <td height="5" align="right"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr bgcolor="#F2F2F2">
      <td height="25" colspan="3" align="center" bgcolor="#990000" class="css12bn">RECHAZAR</td>
    </tr>
    <tr>
      <td height="3" colspan="3"></td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td align="right" bgcolor="#F2F2F2"><span class="css10n">C.I&nbsp;:&nbsp;&nbsp;</span></td>
      <td align="left" bgcolor="#F2F2F2" class="css12n"><?php echo $row[1]; ?></td>
      <td></td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td height="5" colspan="3" align="right"></td>
    </tr>
    <tr>
      <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td align="right"><span class="css10n">Nro. de comprobante&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
      <td align="left" bgcolor="#F2F2F2" class="css12n"><?php echo $row[5]; ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td height="5" colspan="3" align="right"></td>
    </tr>
    <tr>
      <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td width="153" align="right" bgcolor="#F2F2F2"><span class="css10n">Estado&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
      <td width="174" align="left" bgcolor="#F2F2F2" class="css14r">RECHAZADO</td>
      <td width="73"></td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td height="5" colspan="3" align="right"></td>
    </tr>
    <tr>
      <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td align="right" bgcolor="#F2F2F2"><span class="css10n">Observaciones&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
      <td align="left" bgcolor="#F2F2F2" class="css14r"><textarea name="obs" cols="30" rows="5" class="css10" id="obs"></textarea></td>
      <td></td>
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
<?php } else if ($Guardar) { 
?> 
<?php 
$obs=$_POST['obs'];
$obs=strtoupper($obs);
$estado='RECHAZADA';


$result="Update solicitud_inscripcion set est_sico='".$estado."',obs_sico='".$obs."' WHERE cod_sico='$ci'";  mysql_query($result); ?>
<SCRIPT LANGUAGE="javascript">location.href = "?seccion=lissins";  </SCRIPT>
<?php }  ?><?php } ?>