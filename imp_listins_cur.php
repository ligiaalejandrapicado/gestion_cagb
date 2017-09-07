<link rel="stylesheet" type="text/css" href="default/default.css" media="screen" />
<link href="style.css" rel="stylesheet" type="text/css">



<?php include("conectado.php"); ?>


<?php $parr=$_GET['parr'];$est=$_GET['est'];
	 if($parr) { 

 $fecha= date(d)."/".date(m)."/".date(Y) ;
 
$rese = mysql_query("SELECT * FROM inscripcion a, estudiante b  where a.cod_cso='$parr'  && a.ci_ste=b.ci_ste 
ORDER BY b.nom_ste");
$rowe = mysql_num_rows($rese);   

$rese2= mysql_query("SELECT * FROM curso  where cod_cso='$parr' ORDER BY cod_cso");
$ldoc2=mysql_fetch_array($rese2);
?>



<table width="777"  border="0" align="center" cellpadding="0" cellspacing="2" > 
<tr bgcolor="#EEEEEE" >
  <td colspan="7" align="center" bgcolor="#FFFFFF" class="css10n"><a href="?seccion="><img src="imagenes/banner.jpg" alt="" width="600" height="147" /></a></td>
  </tr>
<tr bgcolor="#EEEEEE" >
  <td colspan="3" align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
  <td width="85" align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
  <td width="99" align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
  <td align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
  <td align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
</tr>
<tr bgcolor="#EEEEEE" >
  <td colspan="3" align="center" bgcolor="#FFFFFF" class="css14n"> INSCRITOS EN<br /> <?php echo $ldoc2[1];?></td>
  <td align="center" class="css10n">ESTADO</td>
  <td align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
  <td align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
  <td align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
</tr>
<tr bgcolor="#EEEEEE" >
  <td colspan="3" align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
  <td align="center" bgcolor="#00FF00" class="css10n"><span class="css14n"><?php echo $est;?></span></td>
  <td align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
  <td align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
  <td align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
</tr>
<tr bgcolor="#EEEEEE" class="css12n" >
 
  <td width="75" align="center" bgcolor="#EEEEEE" class="css10n">Nro.</td>  
  <td width="68" align="center" bgcolor="#EEEEEE" class="css10n">C.I</td>
  <td width="184" align="left" bgcolor="#EEEEEE" class="css10n">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombres y Apellidos</td>    
  <td width="207" align="center" bgcolor="#EEEEEE" class="css10n">Direcci&oacute;n</td>
  <td width="112" align="center" bgcolor="#EEEEEE" class="css10n">Tel&eacute;fono</td>
  <td width="110" align="center" bgcolor="#EEEEEE" class="css10n">Email</td>
  </tr>  
</table>
<?php $sw=0; $k=0; while($ldoc=mysql_fetch_array($rese)){ $k++;  

?>
<table width="777"  border="0" align="center" cellpadding="0" cellspacing="2" > 
<tr bgcolor="#EEEEEE" >
  <td width="75" align="center" bgcolor="#EEEEEE" class="css10n"><?=$k?></td> 
  <td width="75" align="center" bgcolor="#EEEEEE" class="css10n"><span class="css10"><?php echo $ldoc[1];?></span></td>  
  <td width="184" align="left" bgcolor="#EEEEEE" class="css10n">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="css10"><?php echo $ldoc[7];?></span></td>    
  <td width="207" align="center" bgcolor="#EEEEEE" class="css10n"><span class="css10"><?php echo $ldoc[8];?></span></td>
  <td width="112" align="center" bgcolor="#EEEEEE" class="css10n"><span class="css10"><?php echo $ldoc[9];?></span></td>
  <td width="110" align="center" bgcolor="#EEEEEE" class="css10n"><span class="css10"><?php echo $ldoc[11];?></span></td>
  </tr> 
</table>
<? }  

 
if($rowe<=0){ echo " 
<table width='500' border='0' align='center' cellpadding='0' cellspacing='0' class='css10'>
<tr><td width='500' height='10'></td></tr>
<tr><td height='10' align='center'> NO POSEE REGISTROS PARA ESTA CONSULTA</td></tr>
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