<link href="style.css" rel="stylesheet" type="text/css" />
<?php include("conectado.php"); ?>
<?php $resd = mysql_query("SELECT * FROM simpatizante  where gen_sim='F' ORDER BY ci_sim ");
$rowd = mysql_num_rows($resd);?>
<table width="550" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#FF00FF">
<tr>
  <td height="30" align="center" valign="top">&nbsp;</td>
</tr>
<tr> <td align="center" valign="top"><?php if ($rowd == 0){ ?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >  <tr><td><table width="100%"  border="0" cellspacing="0" cellpadding="0">  <tr>  <td align="right"></td></tr>  <tr>  <td height="40" ><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#EEEEEE">  <tr>  <td height="25" align="left" valign="middle" class="css12" ><span class="css12n">&nbsp;&nbsp;&nbsp;SIMPATIZANTES</span> FEMENINOS</td> 
                <td width="9%" align="left" valign="middle" class="css12" >&nbsp;</td>
                <td width="35" align="left" valign="middle" class="css12n" >&nbsp;</td>
                <td width="18%" align="left" valign="middle" class="css12n" >&nbsp;</td>
</tr></table></td> </tr>   <tr> <td >&nbsp;</td>  </tr> <tr> <td > <table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0"> <tr> <td width="11%" align="center"  >&nbsp;</td>      
<td width="29%" align="center" class="css10n"  >Descripción </td>      
<td width="22%" align="center" class="css10n"  >Cédula/Rif.</td>    	
<td width="17%" align="center" class="css10n"  >-</td>	
<td width="21%" align="center"  ></td>     </tr> <tr>  <td height="50" colspan="5" align="center"><p><br> <span class="css14n" >No hay Registros incluidos en la Base de Datos para este ARCHIVO.</span></p> 
<p>&nbsp;</p></td> </tr> </table>  </td> </tr> <tr> <td>&nbsp;</td> </tr> </table>    </td> </tr></table><?php } else { ?>
<table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" >
<tr> <td valign="top"> <table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr> <td align="right"></td>  
</tr>  <tr> <td height="40" align="center" valign="middle" ><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#EEEEEE"> <tr> <td width="34%" height="25" align="left" valign="middle" class="css12n">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIMPATIZANTES FEMENINOS</td>
<td width="43%" align="right" valign="middle" class="css12n">&nbsp;</td>
<td width="2%" align="right" valign="middle" class="css12n">&nbsp;</td>
<td width="21%" align="left" valign="middle" class="css12">&nbsp;</td>
</tr></table></td>  </tr>
  <tr>  <td height="17" align="right"  ></td>  
  </tr>  <tr>  <td align="center" valign="top" bgcolor="#FFFFFF" > <table width="700"  border="0" align="center" cellpadding="0" cellspacing="2" > 
<tr bgcolor="#EEEEEE" > <td width="32" align="center" ><b class="css10n">N&ordm;</b></td> 
  <td width="63" align="center" ><b class="css10n">CI</b></td>  
  <td width="224" align="center" ><b class="css10n">Nombres y Apellidos</b></td>
  <td width="224" align="center" class="css10n" >Dirección</td>
  <td width="45" align="center" class="css10n" >Sexo</td>
  <td width="104" align="center" class="css10n" ><b>Teléfono</b></td>
  <td width="83" align="center" class="css10n" >Estado</td>
  </tr> 
<?php $sw=0;  while($ldoc=mysql_fetch_array($resd)){
	
	
	if( $ldoc[8] == "Disponible" ) $color='bgcolor="#00FF00"'; else if( $ldoc[8] == "No Disponible" ) $color='bgcolor="#FF0000"'; 
	
	$k++; $fi1 = 0 ;  if ($sw == 0) { $sw=1;	?>
<tr valign="middle" bgcolor="#FEFEFE">  <td align="center" class="css10"><?php echo $k ;?></td>
<td height="15" align="center" class="css10"><?php echo $ldoc[0];?></td> 
<td align="left" class="css10">&nbsp;&nbsp;<?php echo $ldoc[1];?></td>
<td align="left" class="css10"><?php echo $ldoc[2];?></td>
<td align="left" class="css10"><?php echo $ldoc[7];?></td>
<td align="center" class="css10"><?php echo $ldoc[4];?></td>
<td align="center" class="css10"><?php echo $ldoc[6];?></td>
</tr><?php } else {  $sw=0;     ?><tr valign="middle"  bgcolor="#F1F1F1" > <td align="center" class="css10"><?php echo $k ;?></td> 
<td height="15" align="center" class="css10" ><?php echo $ldoc[0];?></td> 
<td align="left" class="css10" >&nbsp;&nbsp;<?php echo $ldoc[1];?></td>
<td align="left" class="css10" ><?php echo $ldoc[2];?></td>
<td align="left" class="css10" ><?php echo $ldoc[7];?></td>
<td align="center" class="css10" ><?php echo $ldoc[4];?></td>
<td align="center" class="css10" ><?php echo $ldoc[6];?></td>
</tr>        <?php 		}	   }	?> </table>   </td>   
  </tr>   </table></td></tr></table><?php } ?></td></tr><tr>   <td height="30" align="center" valign="top"></td> 
  </tr></table>