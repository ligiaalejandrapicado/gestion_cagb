<link href="style.css" rel="stylesheet" type="text/css" />
<script language="javascript">
function validar(form) {  
var men = "      Datos Incompletos   :              \n\n" ;

if(form.cta.value=="") men= men+"º Nro. de cuenta. \n ";
if(form.ban.value=="") men= men+"º Banco. \n";
if(form.tit.value=="" ) men= men+"º Titular. \n";


if(
(form.cta.value=="")||
(form.ban.value=="") ||
(form.tit.value=="" )


){
alert(''+men+'  \n\nVerifique para continuar. ');  return (false); }   }
</script> 

<?php include("conectado.php"); ?> 
<?php $sql = "SELECT * FROM cuenta WHERE cod_cta='$id' ORDER BY cod_cta DESC ";
      $result = mysql_query($sql);   ?>
<?php if($row = mysql_fetch_array($result)) {    ?> 
<?php  if (!$Guardar){   ?>    
<table width="550"  border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
  <td height="40" >&nbsp;</td>
</tr>
<tr>
  <td height="40" bgcolor="#EEEEEE" ><table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="10%" align="right">&nbsp;</td>
      <td width="1%"></td>
      <td width="75%" align="left" valign="middle" class="css12n">MODIFICAR CUENTA BANCARIA DE CONARE</td>
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
  <td height="5" align="right"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr bgcolor="#F2F2F2">
      <td height="25" colspan="3" align="center" bgcolor="#00CC33" class="css12n">Modificar Cuenta&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="?seccion=listcue">Ver Listado</a></td>
    </tr>
    <tr>
      <td height="3" colspan="3"></td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td align="right" bgcolor="#F2F2F2"><span class="css10n">Nro. de Cuenta&nbsp;:&nbsp;&nbsp;</span></td>
      <td align="left" bgcolor="#F2F2F2" class="css10"><input name="cta" type="text" class="css10" id="cta" value="<?php echo $row[1]; ?>" size="20" maxlength="50" /></td>
      <td></td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td height="5" colspan="3" align="right"></td>
    </tr>
    <tr>
      <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td align="right"><span class="css10n">Banco&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
      <td align="left" bgcolor="#F2F2F2" class="css10"><input name="ban" type="text" class="css10" id="ban" value="<?php echo $row[2]; ?>" size="20" maxlength="50" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td height="5" colspan="3" align="right"></td>
    </tr>
    <tr>
      <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td width="153" align="right" bgcolor="#F2F2F2"><span class="css10n">Titular&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
      <td width="174" align="left" bgcolor="#F2F2F2" class="css10"><input name="tit" type="text" class="css10" id="tit" value="<?php echo $row[3]; ?>" size="20" maxlength="50"  /></td>
      <td width="73"></td>
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
$ban=strtoupper($ban);
$tit=strtoupper($tit);
$result="Update cuenta set nro_cta='".$cta."',ban_cta='".$ban."', tit_cta='".$tit."' WHERE cod_cta='$id'";  mysql_query($result); ?>
<SCRIPT LANGUAGE="javascript">location.href = "?seccion=listcue";  </SCRIPT>
<?php }  ?><?php } ?>