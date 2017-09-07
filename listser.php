<link href="style.css" rel="stylesheet" type="text/css" />
<?php include("conectado.php"); ?>
<?php $resd = mysql_query("SELECT * FROM orden_ser_tec, cliente where orden_ser_tec.ci_cte=cliente.ci_clie ORDER BY orden_ser_tec.cod_ost DESC");
$rowd = mysql_num_rows($resd);?>
<table width="550" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#FF00FF">
<tr> <td align="center" valign="top"><?php if ($rowd == 0){ ?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >  <tr><td><table width="100%"  border="0" cellspacing="0" cellpadding="0">  <tr>  <td align="right"></td></tr>  <tr>  <td height="40" ><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#EEEEEE">  <tr>  <td width="30%" height="25" align="left" valign="middle" class="css12" >
<span class="css12n">&nbsp;&nbsp;&nbsp;</span> <span class="css10n">SERVICIO TÉCNICO</span></td> 
<td width="43%" align="left" valign="middle" class="css12" >&nbsp;</td>
<td width="9%" align="left" valign="middle" class="css12" >&nbsp;</td>
<td width="18%" align="left" valign="middle" class="css12n" >&nbsp;</td>
</tr></table></td> </tr>   <tr> <td >&nbsp;</td>  </tr> <tr> <td > <table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0"> <tr> <td width="11%" align="center"  >&nbsp;</td>      
<td width="29%" align="center" class="css10n"  >Descripción </td>      
<td width="22%" align="center" class="css10n"  ></td>    	
<td width="17%" align="center" class="css10n"  >-</td>	
<td width="21%" align="center"  ></td>     </tr> <tr>  <td height="50" colspan="5" align="center"><p><br> <span class="css14n" >No hay Registros incluidos en la Base de Datos para este ARCHIVO.</span></p> 
<p>&nbsp;</p></td> </tr> </table>  </td> </tr> <tr> <td>&nbsp;</td> </tr> </table>    </td> </tr></table><?php } else { ?>
<table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" >
<tr> <td valign="top"> <table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr> <td align="right"></td>  
</tr>  <tr> <td height="40" align="center" valign="middle" ><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#EEEEEE"> <tr> <td width="34%" height="25" align="left" valign="middle" class="css10n">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SERVICIO TÉCNICO  &nbsp;&nbsp; </td>
              <td width="43%" align="right" valign="middle" class="css12n">&nbsp;</td>
              <td width="2%" align="right" valign="middle" class="css12n">&nbsp;</td>
              <td width="21%" align="left" valign="middle" class="css12"></td>
</tr></table></td>  </tr>
  <tr>  <td align="right" height="15"></td>  
  </tr>  <tr>  <td align="center" valign="top" bgcolor="#FFFFFF" > <table width="700"  border="0" align="center" cellpadding="0" cellspacing="2" > 
<tr bgcolor="#EEEEEE" > <td width="20" align="center" ><b class="css10n">N&ordm;</b></td> 
  <td width="68" align="center" bgcolor="#EEEEEE" class="css10n">Nº Orden</td>  
  <td width="160" align="left" bgcolor="#EEEEEE" class="css10n">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cliente</td>    
  <td width="85" align="center" bgcolor="#EEEEEE" class="css10n">Fecha</td>
  <td width="99" align="center" bgcolor="#EEEEEE" class="css10n">Observación</td>
  <td width="99" align="center" bgcolor="#EEEEEE" class="css10n">Estado</td>
  <td align="center" class="css10n" >Editar</td>
  <td align="center" class="css10n" >Ver</td>
  <td align="center" class="css10n" >Imprimir</td>
  </tr> 
<?php $sw=0;  while($ldoc=mysql_fetch_array($resd)){  $k++; $fi1 = 0 ; ?>
<?php if ($sw == 0) { $sw=1;	?>
<tr valign="middle" bgcolor="#FEFEFE">  <td align="center" class="css10"><?php echo $k ;?></td>
<td height="15" align="center" class="css10"><?php echo $ldoc[0];?></td> 
<td align="left" bgcolor="#FEFEFE" class="css10">&nbsp;&nbsp;&nbsp;<?php echo $ldoc[13];?></td>
<td align="center" bgcolor="#FEFEFE" class="css10"><?php echo $ldoc[4];?></td>
<td align="center" bgcolor="#FEFEFE" class="css10"><?php echo $ldoc[9];?>&nbsp;&nbsp;&nbsp;</td>
<? if( $ldoc[10] == "ABIERTO" ) $color='bgcolor="#00FF00"'; else if( $ldoc[10] == "CANCELADO" ) $color='bgcolor="#FF0000"';else if( $ldoc[10] == "CERRADO" ) $color='bgcolor="#00CCFF"';?>
<td align="center" <?=$color ?> class="css10n">

<?php echo $ldoc[10];?></td>
<td width="18" align="center" class="css10"><a href="?seccion=ediser&amp;id=<?php echo $ldoc[0] ;?>"><img src="imagenes/edit.gif" alt="Editar" border="0"/></a></td>
<td width="30" align="center" bgcolor="#FEFEFE" class="css10"><a href="?seccion=verser&id=<?php echo $ldoc[0] ;?>"><img src="imagenes/ver.gif" alt="Ver" border="0"/></a></td>
<td align="center" bgcolor="#FEFEFE" class="css10"><a href="impser.php?id=<?php echo $ldoc[0] ;?>" target="_blank" onClick="window.open(this.href, this.target, 'width=550,height=500,scrollbars=1'); return false;"><img src="imagenes/print.gif" alt="Imprimir Orden #<?php echo  $ldoc[1] ;?>" border="0" /></a></td>
</tr><?php } else {  $sw=0;     ?><tr valign="middle"  bgcolor="#F1F1F1" > <td align="center" class="css10"   ><?php echo $k ;?></td> 
<td height="15" align="center" class="css10" ><?php echo $ldoc[0];?></td> 
<td align="left" bgcolor="#F1F1F1" class="css10" >&nbsp;&nbsp;&nbsp;<?php echo $ldoc[13];?></td>
  <td align="center" bgcolor="#F1F1F1" class="css10" ><?php echo $ldoc[4];?></td>
  <td align="center" bgcolor="#F1F1F1" class="css10" ><?php echo $ldoc[9];?>&nbsp;&nbsp;&nbsp;</td>
  
  <? if( $ldoc[10] == "ABIERTO" ) $color='bgcolor="#00FF00"'; else if( $ldoc[10] == "CANCELADO" ) $color='bgcolor="#FF0000"';else if( $ldoc[10] == "CERRADO" ) $color='bgcolor="#00CCFF"';?>
  <td align="center" <?=$color ?> class="css10n" ><?php echo $ldoc[10];?></td>
  <td align="center" class="css10" ><a href="?seccion=ediser&amp;id=<?php echo $ldoc[0] ;?>"><img src="imagenes/edit.gif" alt="Editar" border="0"/></a></td>
  <td align="center" bgcolor="#F1F1F1" class="css10" ><a href="?seccion=verser&id=<?php echo $ldoc[0] ;?>"><img src="imagenes/ver.gif" alt="Ver" border="0"/></a></td>
  <td align="center" bgcolor="#F1F1F1" class="css10" ><a href="impser.php?id=<?php echo $ldoc[0] ;?>" target="_blank" onClick="window.open(this.href, this.target, 'width=550,height=500,scrollbars=1'); return false;"><img src="imagenes/print.gif" alt="Imprimir Orden #<?php echo  $ldoc[1] ;?>" border="0" /></a></td>
  </tr>        <?php 		}	   }	?> </table>   </td>   </tr>   </table></td></tr></table><?php } ?></td></tr><tr>   <td height="30" align="center" valign="top"></td> 
  </tr></table>