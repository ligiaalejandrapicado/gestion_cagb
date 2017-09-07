<link rel="stylesheet" type="text/css" href="default/default.css" media="screen" />
<link href="style.css" rel="stylesheet" type="text/css">



<?php include("conectado.php"); ?>


<?php $parr=$_GET['parr'];
	$est=$_GET['est'];  if((($est)&& ($parr))) { 

 $fecha= date(d)."/".date(m)."/".date(Y) ;
 
$rese = mysql_query("SELECT * FROM simpatizante a , parroquia b  where a.id_parroquia='$parr' && a.est_sim='$est' 
ORDER BY a.ci_sim");
$rowe = mysql_num_rows($rese);   

?>



<table width="700"  border="0" align="center" cellpadding="0" cellspacing="2" > 
<tr bgcolor="#EEEEEE" >
  <td colspan="6" align="center" bgcolor="#FFFFFF" class="css10n"><a href="?seccion="><img src="imagenes/banner.jpg" alt="" width="600" height="147" /></a></td>
  </tr>
<tr bgcolor="#EEEEEE" >
  <td colspan="2" align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
  <td width="85" align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
  <td width="99" align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
  <td align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
  <td align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
</tr>
<tr bgcolor="#EEEEEE" >
  <td colspan="2" align="center" bgcolor="#FFFFFF" class="css10n">SIMPATIZANTES POR PARROQUIA</td>
  <td align="center" bgcolor="#FFFFFF" class="css10n">ESTADO</td>
  <td align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
  <td align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
  <td align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
</tr>
<tr bgcolor="#EEEEEE" >
  <td colspan="2" align="center" bgcolor="#EEEEEE" class="css10n">&nbsp;</td>
  <td align="center" bgcolor="#EEEEEE" class="css10n"><span class="css10"><?php echo $est;?></span></td>
  <td align="center" bgcolor="#EEEEEE" class="css10n">&nbsp;</td>
  <td align="center" bgcolor="#EEEEEE" class="css10n">&nbsp;</td>
  <td align="center" bgcolor="#EEEEEE" class="css10n">&nbsp;</td>
</tr>
<tr bgcolor="#EEEEEE" > <td width="68" align="center" bgcolor="#EEEEEE" class="css10n">C.I</td>  
  <td width="160" align="left" bgcolor="#EEEEEE" class="css10n">&nbsp;NOMBRES Y APELLIDOS</td>    
  <td colspan="2" align="center" bgcolor="#EEEEEE" class="css10n">DIRECCIÓN</td>
  <td width="99" align="center" bgcolor="#EEEEEE" class="css10n">TELÉFONO</td>
  <td width="99" align="center" bgcolor="#EEEEEE" class="css10n">EMAIL</td>
  </tr> 
</table>
<?php $sw=0;  while($ldoc=mysql_fetch_array($rese)){   

?>
<table width="700"  border="0" align="center" cellpadding="0" cellspacing="2" > 
<tr bgcolor="#EEEEEE" > <td width="80" align="center" bgcolor="#EEEEEE" class="css10n"><span class="css10"><?php echo $ldoc[0];?></span></td>  
  <td width="175" align="left" bgcolor="#EEEEEE" class="css10n">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="css10"><?php echo $ldoc[1];?></span></td>    
  <td width="211" align="center" bgcolor="#EEEEEE" class="css10n"><span class="css10"><?php echo $ldoc[2];?></span></td>
  <td width="102" align="center" bgcolor="#EEEEEE" class="css10n"><span class="css10"><?php echo $ldoc[4];?></span></td>
  <td width="120" align="center" bgcolor="#EEEEEE" class="css10n"><span class="css10"><?php echo $ldoc[5];?></span></td>
  </tr> 
</table>
<? }  

 
if($rowe<=0){ echo " 
<table width='500' border='0' align='center' cellpadding='0' cellspacing='0' class='css10'>
<tr><td width='500' height='10'></td></tr>
<tr><td height='10' align='center'>Fechas . &nbsp;&nbsp;<b>$fc - $ff</b> &nbsp;&nbsp; NO POSEE REGISTROS PARA ESTA CONSULTA</td></tr>
<tr><td height='10'></td></tr>
<tr><td height='70' align='center' valign='middle' class='css10rn'></td></tr>
<tr><td height='30' align='right' class='css10n'></td></tr>
<tr><td height='10'></td></tr></table>
"; } 
  } // END IF BUSCAR  ?>   
    
<script language="Javascript">
function imprimir() {
if (window.print)
window.print()
else
alert("Para imprimir presione Crtl+P.");
}
imprimir();
</script>