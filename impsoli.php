<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("conectado.php"); ?>
<link href="style.css" rel="stylesheet" type="text/css">
<table width="530" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>  <td align="center" valign="top"><table width="530" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#00FF00" class="css12">
<?php if($id){ ?>
<?php  $rese = mysql_query("SELECT * FROM orden_ser_tec WHERE cod_ost='$id' ORDER BY cod_ost DESC ;", $DB); 
$rowe = mysql_num_rows($rese);  ?> 
<tr>
  <td height="15" align="left"><img src="imagenes/logo.jpg" width="434" height="138" /></td>
</tr>
<tr><td height="15" align="right"></td></tr>
<tr><td align="center">
<?php $rege = mysql_fetch_array($rese);

if(!$rege){ ?><SCRIPT LANGUAGE="javascript">location.href = "?seccion=lisfac";</SCRIPT><?php  } 
$rese3 = mysql_query("SELECT * FROM cliente WHERE ci_clie='$rege[1]' ORDER BY ci_clie DESC ;", $DB); 
$rowe3 = mysql_num_rows($rese3);
$rege3 = mysql_fetch_array($rese3);	
	echo "	
<table width='530' border='0' align='center' cellpadding='0' cellspacing='0'>
<tr><td align='center' valign='top'><table width='520' border='0' align='center' cellpadding='0' cellspacing='0' class='css10'>
<tr><td width='67' align='left' valign='top' class='css10n'>Orden Nº :&nbsp;&nbsp;</td>
    <td width='171' align='left' valign='top' class='css10'>$rege[0]</td>
    <td width='77' align='left' valign='top' class='css10n'>Fecha de Solicitud:&nbsp;</td>
    <td width='119' align='left' valign='top' class='css10'>$rege[4] - $rege[5]</td>
</tr>
<tr><td height='3' colspan='4'></td></tr>
<tr><td height='1' colspan='4' align='right' bgcolor='#FFCC00'></td></tr>
<tr><td height='8' colspan='4'></td></tr>
</table>
<table width='520' border='0' align='center' cellpadding='0' cellspacing='0' class='css10'>
<tr><td width='72' align='left' valign='top' class='css10n'>Cliente:&nbsp;</td>
    <td width='219' align='left' valign='top' class='css10'>$rege3[2]</td>
    <td width='92' align='left' valign='top' class='css10n'>CI/Rif:&nbsp;</td>
    <td width='137' align='left' valign='top' class='css10'>$rege3[1]</td>
</tr>
<tr><td height='3' colspan='4'></td></tr>
<tr><td height='1' colspan='4' align='right' bgcolor='#FFCC00'></td></tr>
<tr><td height='8' colspan='4'></td></tr>
</table>
<table width='520' border='0' align='center' cellpadding='0' cellspacing='0' class='css10'>
<tr><td width='70' align='left' class='css10n'>Dirección:&nbsp;</td>
    <td width='215' align='left' class='css10'>$rege3[4]</td>
    <td width='68' align='left' valign='top' class='css10n'>Visita:&nbsp;</td>
    <td width='157' align='left' valign='top' class='css10'>$rege[6] - $rege[7]</td>
</tr>
<tr><td height='3' colspan='4'></td></tr>
<tr><td height='1' colspan='4' align='right' bgcolor='#FFCC00'></td></tr>
<tr><td height='8' colspan='4'></td>
</tr>
</table>

<table width='520' border='0' align='center' cellpadding='0' cellspacing='0' class='css10'>
<tr><td width='70' align='left' valign='top' class='css10n'></td>
    <td width='215' align='left' valign='top' class='css10'></td>
    <td width='68' align='left' valign='top' class='css10n'>Estado:&nbsp;</td>
    <td width='157' align='left' class='css10'>$rege[10]</td>
</tr>
<tr><td height='3' colspan='4'></td></tr>
<tr><td height='1' colspan='4' align='right' bgcolor='#FFCC00'></td></tr>
<tr><td height='8' colspan='4'></td>
</tr>
</table>


<table width='520' border='0' align='center' cellpadding='0' cellspacing='0' class='css10'>
<tr><td width='72' align='left' class='css10n'>Motivo:&nbsp;</td>
    <td width='448' align='left' class='css10'>$rege[8]</td>
</tr>
<tr><td height='3' colspan='4'></td></tr>
<tr><td height='1' colspan='4' align='right' bgcolor='#FFCC00'></td></tr>
<tr><td height='20' colspan='4'></td></tr>
</table>

  <table width='520' border='0' align='center' cellpadding='0' cellspacing='0' class='css10'>
    <tr>
      <td width='72' align='left' class='css10n'>Observación:&nbsp;</td>
      <td width='448' align='left' class='css10'>$rege[9]</td>
    </tr>
    <tr>
      <td height='3' colspan='4'></td>
    </tr>
    <tr>
      <td height='1' colspan='4' align='right' bgcolor='#FFCC00'></td>
    </tr>
    <tr>
      <td height='20' colspan='4'></td>
    </tr>
  </table></td></tr></table>" ;		
	?>	
</td></tr>
<tr><td height="30" align="center"></td></tr>
<tr><td align="center">&nbsp;</td>
</tr>
<?php if($rowe<=0) echo "<table width='500' border='0' cellspacing='0' cellpadding='0' align='center'><tr><td>
<table width='500' border='0' cellspacing='0' cellpadding='0' class='css10'>
<tr><td width='500' height='10'></td></tr>
<tr><td height='10' align='center'>Nº Orden &nbsp;&nbsp;<b>\"$id\"</b> &nbsp;&nbsp; no corresponde a ninguno de nuestras ordenes</td></tr>
<tr><td height='10'></td></tr>
</table></td></tr></table> "; 
?> 
<?php } else { ?> <script language="Javascript">
function cerrar() { window.close();}
cerrar();
</script>  <?php     }?>
<tr><td height="5" align="right"></td></tr>    
</table> 
<!--  END FORM -->
</td>
</tr></table>
<script language="Javascript">
function imprimir() {
if (window.print)
window.print()
else
alert("Para imprimir presione Crtl+P.");
}
imprimir();
</script>