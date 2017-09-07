
<link href="style.css" rel="stylesheet" type="text/css"><?php include("conectado.php"); ?>
<?php 
$id=$_GET['id'];
function fdif2($interval, $datefrom, $dateto, $using_timestamps = false) {
if (!$using_timestamps) { 
$datefrom = strtotime($datefrom, 0);  
$dateto = strtotime($dateto, 0);  }
$difference = $dateto - $datefrom; 
$datediff = floor($difference / 86400);
return $datediff;;
}?>





<script language="javascript">
function validar(form) {  
var men = "      Datos Incompletos   :              \n\n" ;
if(form.fc.value=="") men= men+"º Fecha de Solicitud. \n";
if(  (form.diae.value=="" || form.diae.value<0 || form.diae.value>31 ) ||
(form.mese.value=="" || form.mese.value<0 || form.mese.value>12 )||
(form.anoe.value=="" || form.anoe.value<2014 )
 ) men= men+"º Fecha de Entrega. \n";
if(form.rif.value=="") men= men+"º CI/RIF Responsable. \n";
if(form.nomb.value=="") men= men+"º Responsable de Recibir el bien. \n";
if(form.tel.value=="") men= men+"º Teléfono del Responsable de Recibir el bien. \n";
if(form.cant.value=="") men= men+"º Cantidad a solicitar. \n";
if(form.uti.value=="") men= men+"º Utilización del bien. \n";

if((form.rif.value=="") || (form.nomb.value=="")|| (form.fc.value=="")|| (form.ff.value=="")|| (form.tel.value=="")||(form.cant.value=="")|| (form.uti.value=="")||
(  (form.diae.value=="" || form.diae.value<0 || form.diae.value>31 ) ||
(form.mese.value=="" || form.mese.value<0 || form.mese.value>12 )||
(form.anoe.value=="" || form.anoe.value<2014 )
 )

){
alert(''+men+'  \n\nVerifique para continuar. ');  return (false); }   }
</script>
<?php $sub="onSubmit='return validar(this)'";        ?>
<?php $m = array( "0", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
$mn = array( "0", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");
$dn = array( "0", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10");
$hoy = date(d)." ".date(F)." ".date(Y) ;  
 ?>
<?php  
$resce  = mysql_query("select * from bien_servicio where cod_bso='$id' && exid_bso>0  order by cod_bso desc ;", $DB); 
if($resce)$rowce  = mysql_num_rows($resce);  

if($rowce )$regce  = mysql_fetch_array($resce);
 ?>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" class="e12">
<tr><td height="10"></td></tr><tr><td align="center">
  <table width="590" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
<tr><td height="20" align="left" valign="middle" bgcolor="#00CC00" class="e12bn">&nbsp;&nbsp;<span class="css10n">&nbsp;&nbsp;&nbsp;Ingrese Fecha de Solicitud</span></td>
</tr><tr><td height="25" align="left" valign="top" >&nbsp;</td></tr>
<tr><td height="7" align="center" valign="top" ><table width='595' border='0' align='center' cellpadding='0' cellspacing='2'>
<tr bgcolor='#EEEEEE'> <td width='220' align='left' valign='middle'  class='css10n'>BIEN</td>
<td width='120' align='left' valign='middle' class='css10n'>CÓDIGO</td> 
<td align='left' valign='middle' class='css10n'>UBICACIÓN</td>
</tr><tr><td height='4' colspan='3' align='right' valign='middle'></td></tr>
<tr><td align='left' valign='middle' bgcolor='#F2F2F2' class='css10'><?php echo $regce[1] ?>  </td>
<td align='left' valign='middle' bgcolor='#F2F2F2' class='css10'><?php echo $regce[0] ?></td> 
<td align='left' valign='middle' bgcolor='#F2F2F2' class='css10'><?php echo $regce[6] ?></td>
</tr></table>
    <table width='595' border='0' align='center' cellpadding='0' cellspacing='2'>
      <tr bgcolor='#EEEEEE'>
        <td align='left' valign='middle' bgcolor="#FFFFFF"  class='css10n'>&nbsp;</td>
        <td align='left' valign='middle' bgcolor="#FFFFFF" class='css10n'>&nbsp;</td>
        <td align='left' valign='middle' bgcolor="#FFFFFF" class='css10n'>&nbsp;</td>
      </tr>
      <tr bgcolor='#EEEEEE'>
        <td width='220' align='left' valign='middle'  class='css10n'>EXISTENCIA</td>
        <td width='120' align='left' valign='middle' class='css10n'>DISPONIBLES</td>
        <td align='left' valign='middle' class='css10n'>&nbsp;</td>
      </tr>
      <tr>
        <td height='4' colspan='3' align='right' valign='middle'></td>
      </tr>
      <tr>
        <td align='left' valign='middle' bgcolor='#F2F2F2' class='css10'><?php echo $regce[2] ?></td>
        <td align='left' valign='middle' bgcolor='#F2F2F2' class='css10'><?php echo $regce[3] ?></td>
        <td align='left' valign='middle' bgcolor='#F2F2F2' class='css10'>&nbsp;</td>
      </tr>
    </table></td></tr>
<tr><td height="10" align="right" valign="top" class="e10nn"></td>
</tr>
<tr><td align="center" valign="top" class="e10nn">    
<form id="form" name="form" method="post" action="" onSubmit='return validar(this)'> <table width="570" border="0" align="center" cellpadding="0" cellspacing="0">
 
<tr><td width="283" height="20" align="left" valign="middle" bgcolor="#EEEEEE" class="css10n">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha Solicitud</td>
<td width="17" bgcolor="#EEEEEE" class="css10n">&nbsp;</td>
<td width="262" align="left" valign="middle" bgcolor="#EEEEEE" class="css10n">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha Entrega          </td>
</tr><tr><td height="10" colspan="3" align="right" valign="middle">
<input name="id" type="hidden" class="e11a" id="id" size="17" maxlength="12" value="<?php echo $regce[0]; ;?>"/>
<input name="f" type="hidden" class="e11a" id="f" value="1"/></td></tr>
<tr><td align="right" valign="middle"><table width="280" border="0" align="right" cellpadding="0" cellspacing="0">
<tr>
  <td width="10" align="left" class="css10n"><input name="fc" type="text" class="css10" value="<?=date('d/m/Y');?>"   size="15" maxlength="15" readonly="readonly" />
    <input name="cod" type="hidden" id="cod" value="<?=$regce[0]?>" />
    <input name="disp" type="hidden" id="disp" value="<?=$regce[3]?>" /></td>
  </tr>
</table></td> <td></td><td align="right" valign="middle">
<table width="280" border="0" align="left" cellpadding="0" cellspacing="0">
<tr>
  <td width="10" align="left" class="css10n"><label for="diae"></label>
    <input name="diae" type="text" class="css10" id="diae" value="<?=date('d');?>" size="4" maxlength="2" />
    /
    <input name="mese" type="text" class="css10" id="mese" value="<?=date('m');?>" size="4" maxlength="2" />
    /
    <input name="anoe" type="text" class="css10" id="anoe" value="<?=date('Y');?>" size="4" maxlength="4" /></td>
  </tr>
</table></td></tr><tr><td align="right" valign="middle">&nbsp;</td><td></td>
    <td align="right" valign="middle">&nbsp;</td></tr>
 <tr>
   <td colspan="3" align="left" valign="middle"><table width="490" border="0" align="left" cellpadding="0" cellspacing="0">
     <tr>
       <td width="167" align="right" valign="middle" class="css10n"  >C.I Responsable :&nbsp;</td>
       <td width="8"></td>
       <td align="left" valign="middle" class="e11gn"><input name="rif" type="text" class="css10" id="rif" size="20" maxlength="20" /></td>
     </tr>
     <tr>
       <td align="right" valign="middle" class="css10n"  >&nbsp;</td>
       <td></td>
       <td align="left" valign="middle" class="e11gn">&nbsp;</td>
     </tr>
     <tr>
       <td align="right" valign="middle" class="css10n"  >Nombre Responsable : </td>
       <td></td>
       <td align="left" valign="middle" class="e11gn"><label>
         <input name="nomb" type="text" class="css10" id="nomb" size="20" maxlength="100" />
       </label></td>
     </tr>
     <tr>
       <td align="right" valign="middle" class="css10n"  >&nbsp;</td>
       <td></td>
       <td align="left" valign="middle" class="e11gn">&nbsp;</td>
     </tr>
     <tr>
       <td align="right" valign="middle" class="css10n"  >Teléfono: </td>
       <td></td>
       <td align="left" valign="middle" class="e11gn"><input name="tel" type="text" class="css10" id="tel" size="20" maxlength="11" /></td>
     </tr>
     <tr>
       <td align="right" valign="middle" class="css10n"  >&nbsp;</td>
       <td></td>
       <td align="left" valign="middle" class="e11gn">&nbsp;</td>
     </tr>
     <tr>
       <td align="right" valign="middle" class="css10n"  >Cantidad a solicitar:</td>
       <td></td>
       <td align="left" valign="middle" class="e11gn"><input name="cant" type="text" class="css10" id="cant" size="3" maxlength="3" /></td>
     </tr>
     <tr>
       <td align="right" valign="middle" class="css10n"  >&nbsp;</td>
       <td></td>
       <td align="left" valign="middle" class="e11gn">&nbsp;</td>
     </tr>
     <tr>
       <td align="right" valign="middle" class="css10n"  >A utilizar en:</td>
       <td></td>
       <td align="left" valign="middle" class="e11gn"><textarea name="uti" cols="20" class="css10" id="uti"></textarea></td>
     </tr>
     <tr>
       <td align="right" valign="middle" class="css10n"  >&nbsp;</td>
       <td></td>
       <td align="left" valign="middle" class="e11gn">&nbsp;</td>
     </tr>
     <tr>
       <td align="right" valign="middle" class="css10n"  >Observaciones:</td>
       <td></td>
       <td align="left" valign="middle" class="e11gn"><textarea name="obs1" cols="20" class="css10" id="obs1"></textarea></td>
     </tr>
     <tr>
       <td align="right" valign="middle" class="css10n"  >&nbsp;</td>
       <td></td>
       <td align="left" valign="middle" class="e11gn">&nbsp;</td>
     </tr>
   </table></td>
   </tr>
 <tr><td align="right" valign="middle">&nbsp;</td>   <td></td>
    <td align="right" valign="middle"><span class="e11nn">
      <input name="Solicitar" type="submit" class="e10an" id="Solicitar" value="Solicitar" />
    </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>
</table></form> </td></tr>
<tr> <td height="25" align="right" valign="top" class="e10nn"></td></tr></table> </td>  
</tr> 
<?php 


?></table> 
<?php if($Solicitar){ echo " Enviado   ";  ?>
<?php  $fhoy = date(d)."/".date(m)."/".date(Y) ; 
$est='NO ENTREGADO';
$nomb=strtoupper($nomb);
$obs1=strtoupper($obs1);
$fent=$diae."/".$mese."/".$anoe ;
?>
<?php mysql_query("insert into prestamo_bienes(cod_bso,rif_pbs,nom_pbs,tel_pbs, cant_pbs, uti_pbs, fecr_pbs, fece_pbs, obs1_pbs, est_pbs) values ('$cod','$rif','$nomb','$tel','$cant','$uti','$fhoy','$fent','$obs1','$est')");  

$dispo=$disp-$cant;

$sqls2="Update bien_servicio set exid_bso='$dispo' WHERE cod_bso='$cod'";
mysql_query($sqls2);
  
mysql_close();  ?>
<script> location.href ="?seccion=lissoli"; </script>
<?php  } ?>