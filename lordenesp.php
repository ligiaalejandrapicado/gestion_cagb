<?php include("conectado.php"); ?><link href="style.css" rel="stylesheet" type="text/css" />
<?php $resd = mysql_query("select * from orden_compra where est_oca!='PAGADA' order by cod_oca desc "); 

if($resd){$rowd = mysql_num_rows($resd);}?>
<table width="590" border="0" align="center" cellpadding="0" cellspacing="0"> <tr><td height="10" align="center" valign="top"></td></tr><tr> <td align="center" valign="top"><?php if ($rowd == 0){ ?>
<table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0"><tr><td > <table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0"><tr bgcolor="#EEEEEE"> <td width="11%" height="20" align="center"  >&nbsp;</td> <td width="29%" align="center" class="css10n"   >Descripción </td>
<td width="22%" align="center"></td> <td width="17%" align="center" class="e10nn"   >-</td><td width="21%" align="center"  ></td>     </tr> <tr>  <td height="50" colspan="5" align="center"><p><br><br> <br><br> 
<span class="css10n" >No hay " BIENES DISPONIBLES " en la Base de Datos.</span></p> 
<p>&nbsp;</p><br></td></tr></table></td></tr><tr> <td height="10"></td></tr></table><?php } else { ?><table width="600"  border="0" align="center" cellpadding="0" cellspacing="0" >
<tr><td align="right" bgcolor="#009900"><table width="600"  border="0" align="center" cellpadding="0" cellspacing="2" > 
  <tr bgcolor="#EEEEEE" >
    <td width="40" align="center" valign="middle" class="css10n" >Agregar</td><td width="30" align="center" class="css10n" ><b class="e10nn" >N&ordm;</b></td><td width="45" align="center" class="css10n" >Código</td>
    <td width="205" align="left" class="css10n" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rif / C.I</td>
<td width="74" align="center" class="css10n" >Fecha</td>
<td width="85" align="center" class="css10n" >Monto</td>
<td width="59" align="center" class="css10n" >Pago</td>
  </tr> 
<?php $sw=0;  while($ldoc=mysql_fetch_array($resd)){  $k++; $fi1 = 0 ; ?>

<?php if ($sw == 0) { $sw=1;	?><tr valign="middle" bgcolor="#FEFEFE">
<td align="center" class="e16nn"><a href="?seccion=cpago&amp;id=<?=$ldoc[0]?>"><img src="imagenes/mas.png"  style="border:0"width="15" height="15" /></a></td>   
<td align="center" class="css10" ><?php echo $k ;?></td><td height="15" align="center" class="css10"><?php echo $ldoc[0];?></td> <td align="left" class="css10">&nbsp;&nbsp;<?php echo $ldoc[1];?>&nbsp;</td><td align="center" class="css10"><?php echo $ldoc[2];?></td>
<td align="center" class="css10">&nbsp;&nbsp;<?php echo $ldoc[3];?>&nbsp;&nbsp;Bs.</td>
<td align="center" class="css10"><?php echo $ldoc[6];?></td>
</tr><?php } else {  $sw=0;     ?>    
<tr valign="middle"  bgcolor="#F1F1F1" ><form id="forme" name="forme" method="post" action="?seccion=soli" ><td align="center" class="e16nn"><a href="?seccion=cpago&amp;id=<?=$ldoc[0]?>"><img src="imagenes/mas.png" style="border:0" alt="" width="15" height="15" /></a></td></form><td align="center" class="css10"><?php echo $k ;?></td><td height="15" align="center"  class="css10"><?php echo $ldoc[0];?></td> <td align="left"  class="css10">&nbsp;&nbsp;<?php echo $ldoc[1];?>&nbsp;</td><td align="center"  class="css10"><?php echo $ldoc[2];?></td>
  <td align="center"  class="css10">&nbsp;&nbsp;<?php echo $ldoc[3];?>&nbsp;&nbsp;Bs.</td>
  <td align="center"  class="css10"><?php echo $ldoc[6];?></td>
</tr><?php } ?> <?php }	?></table>
</td></tr><tr><td align="right">&nbsp;</td></tr></table><?php } ?></td></tr><tr><td height="30" align="center" valign="top"></td> </tr></table>