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
<body onLoad="document.formb.BUSCAR.focus()">
<?php include("conectado.php"); ?>
<link href="style.css" rel="stylesheet" type="text/css">
<table width="550" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#00FF00">
<tr><td align="center" valign="top">
<!--  BEGIN FORM -->
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td height="40" align="center" bgcolor="#EEEEEE" class="css12n"><table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td width="134" align="right" valign="middle"><img src="imagenes/vcli.jpg" width="36" height="32" /></td>
    <td width="8">&nbsp;</td>
    <td width="280" align="left">Consultar Cliente</td>
    <td width="76" align="left" valign="middle"></td>
    </tr></table>
     </td></tr>
    <tr> <td>&nbsp;</td> </tr>
  </table>
<table width="550" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000" class="css12">
<tr> <td height="20"></td>   </tr>
<tr> <td align="right">
<form id="formb" name="formb" method="post" action="" >  
<table border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F2F2F2">
<tr class="css10">
  <td height="20" colspan="3" align="left" valign="middle" bgcolor="#FFCC00" class="css12n">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ingrese Cédula / Rif. del Cliente</td>  
</tr>
<tr class="css10"><td height="7" colspan="3" align="left" valign="top" ></td></tr>
<tr class="css10"><td width="131" align="right" valign="top" class="css10n">Cédula&nbsp;/RIF.:&nbsp;&nbsp;</td>
  <td width="117" align="left" valign="bottom"><input name="BUSCAR" type="text" class="css10" id="BUSCAR" size="17" maxlength="12"  onKeyPress="return isciKey(event)" /><br /> <span class="css8n">Ejm:1500100</span></td>
  <td width="52" align="left" valign="top"><input name="Buscar" type="submit" class="css10rn" id="Buscar" value="Buscar" /></td>
</tr>  </table>
</form>  
</td>  </tr>   
<tr><td align="center">
<?php   if(($Buscar)||($HTTP_POST_VARS)) {  
if(!$BUSCAR) { $BUSCAR=0;}
$rese = mysql_query("SELECT * FROM cliente WHERE ci_clie='$BUSCAR' ORDER BY id_clie DESC ;", $DB); 
$rowe = mysql_num_rows($rese);   
while($rege = mysql_fetch_array($rese)){ 	    
echo "
<table width='450' border='0' align='center' cellpadding='0' cellspacing='0'>
  <tr><td align='center' valign='top'>
    <table width='450' border='0' align='center' cellpadding='0' cellspacing='0' class='css10'>
<tr><td height='35' colspan='5' align='right' class='css10n'></td>  </tr>
<tr><td width='136' align='right' class='css10n'>Código :&nbsp;&nbsp;</td>
    <td width='111' align='left'>$rege[0]</td>
    <td width='4'></td>
    <td width='73' align='right' class='css10n'>CI/RIF. :&nbsp;&nbsp;</td>
    <td width='126' align='left'>$rege[1]</td>
</tr>
<tr><td height='3' colspan='5'></td></tr>
<tr><td height='1' colspan='5' align='right' bgcolor='#FFCC00'></td></tr>
<tr><td height='13' colspan='5'></td></tr>
</table>
<table width='450' border='0' align='center' cellpadding='0' cellspacing='0' class='css10'>
<tr><td width='113' align='right' class='css10n'>Descripción :&nbsp;&nbsp;</td>
    <td width='337' align='left'>$rege[2]</td>
</tr>
<tr><td height='3' colspan='2'></td></tr>
<tr><td height='1' colspan='2' align='right' bgcolor='#FFCC00'></td></tr>
<tr><td height='13' colspan='2'></td></tr>
</table>
<table width='450' border='0' align='center' cellpadding='0' cellspacing='0' class='css10'>
<tr><td width='113' align='right' class='css10n'>Representante :&nbsp;&nbsp;</td>
    <td align='left'>$rege[3]</td>
</tr>    
<tr><td height='3' colspan='2'></td></tr>
<tr><td height='1' colspan='2' align='right' bgcolor='#FFCC00'></td></tr>
<tr><td height='13' colspan='2'></td></tr>
</table>
<table width='450' border='0' align='center' cellpadding='0' cellspacing='0' class='css10'>
<tr><td width='113' align='right' class='css10n'>Dirección :&nbsp;&nbsp;</td>
    <td align='left'>$rege[4]</td>
</tr>
<tr><td height='3' colspan='2'></td></tr>
<tr><td height='1' colspan='2' align='right' bgcolor='#FFCC00'></td></tr>
<tr><td height='13' colspan='2'></td></tr>
</table>
<table width='450' border='0' align='center' cellpadding='0' cellspacing='0' class='css10'>
<tr><td width='113' align='right' class='css10n'>Teléfono :&nbsp;&nbsp;</td>
    <td width='114' align='left'>$rege[5]</td>
    <td width='1'></td>
    <td width='93' align='right' class='css10n'>Celular :&nbsp;&nbsp;</td>
    <td width='129' align='left'>$rege[6]</td>
</tr>
<tr><td height='3' colspan='5'></td></tr>
<tr><td height='1' colspan='5' align='right' bgcolor='#FFCC00'></td></tr>
<tr><td height='13' colspan='5'></td></tr>
</table>
<table width='450' border='0' align='center' cellpadding='0' cellspacing='0' class='css10'>
<tr><td width='113' align='right' class='css10n'>E-Mail :&nbsp;&nbsp;</td>
    <td align='left'>$rege[7]</td>
</tr>
<tr><td height='3' colspan='2'></td></tr>
<tr><td height='1' colspan='2' align='right' bgcolor='#FFCC00'></td></tr>
<tr><td height='13' colspan='2'></td></tr>
<tr><td height='13' colspan='2'>&nbsp;</td></tr>
</table>
  </td></tr></table>
   ";  
     }  
mysql_query($sqls);
mysql_close(); 
 
if($rowe<=0){ echo " 
<table width='500' border='0' align='center' cellpadding='0' cellspacing='0' class='css10'>
<tr><td width='500' height='10'></td></tr>
<tr><td height='10' align='center'>Cédula/Rif. &nbsp;&nbsp;<b>$BUSCAR</b> &nbsp;&nbsp; no corresponde a ninguno de nuestros CLIENTES</td></tr>
<tr><td height='10'></td></tr>
<tr><td height='70' align='center' valign='middle' class='css10rn'></td></tr>
<tr><td height='30' align='right' class='css10n'><a href=?seccion=cli><img src='imagenes/mas.jpg' border='0'/>&nbsp;Agregar Cliente al Sistema</a></td></tr>
<tr><td height='10'></td></tr></table>
"; } 
  } // END IF BUSCAR  ?>   
</td>  </tr>
<tr> <td height="5" align="right"></td> </tr>    
</table> 
</td></tr></table>