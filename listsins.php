<link href="style.css" rel="stylesheet" type="text/css" />
<?php include("conectado.php"); ?>
<?php $resd = mysql_query("SELECT * FROM solicitud_inscripcion a, curso b where a.cod_cso=b.cod_cso ORDER BY a.cod_sico DESC ");
$rowd = mysql_num_rows($resd);?>
<table width="550" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#FF00FF">
<tr>
  <td height="30" align="center" valign="top">&nbsp;</td>
</tr>
<tr> <td align="center" valign="top"><?php if ($rowd == 0){ ?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >  <tr><td><table width="100%"  border="0" cellspacing="0" cellpadding="0">  <tr>  <td align="right"></td></tr>  <tr>  <td height="40" ><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#EEEEEE">  <tr>  <td height="25" align="left" valign="middle" class="css12" ><span class="css12n">&nbsp;&nbsp;&nbsp;SOLICITUDES DE INSCRIPCIÓN</span> </td> 
                <td align="left" valign="middle" class="css12" ><a href="?seccion=sbins">Agregar SOLICITUD INSCRIPCIÓN</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                </tr></table></td> </tr>   <tr> <td >&nbsp;</td>  </tr> <tr> <td > <table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0"> <tr> <td width="11%" align="center"  >&nbsp;</td>      
<td width="29%" align="center" class="css10n"  >Descripción </td>      
<td width="22%" align="center" class="css10n"  >Cédula/Rif.</td>    	
<td width="17%" align="center" class="css10n"  >-</td>	
<td width="21%" align="center"  ></td>     </tr> <tr>  <td height="50" colspan="5" align="center"><p><br> <span class="css14n" >No hay Registros incluidos en la Base de Datos para este ARCHIVO.</span></p> 
<p>&nbsp;</p></td> </tr> </table>  </td> </tr> <tr> <td>&nbsp;</td> </tr> </table>    </td> </tr></table><?php } else { ?>
<table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" >
<tr> <td valign="top"> <table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr> <td align="right"></td>  
</tr>  <tr> <td height="40" align="center" valign="middle" ><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#EEEEEE"> <tr> <td height="25" align="left" valign="middle" class="css12n">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SOLICITUDES DE INSCRIPCIÓN</td>
<td align="right" valign="middle" class="css12n"><a href="?seccion=sbins" class="css12n">Agregar SOLICITUD INSCRIPCIÓN</a>&nbsp;&nbsp;&nbsp;</td>
</tr></table></td>  </tr>
  <tr>  <td height="17" align="right"  ></td>  
  </tr>  <tr>  <td align="center" valign="top" bgcolor="#FFFFFF" > <table width="818"  border="0" align="center" cellpadding="0" cellspacing="2" > 
<tr bgcolor="#EEEEEE" > <td width="26" align="center" ><b class="css10n">N&ordm;</b></td> 
  <td width="88" align="center" ><span class="css10n">C.I</span></td>
  <td width="259" align="center" class="css10n" >TALLER, CURSO O DIPLOMADO</td>
  <td width="81" align="center" class="css10n" ><b>Fecha</b></td>
  <td width="164" align="center" class="css10n" >Nro. recibo</td>
  <td width="164" align="center" class="css10n" >Monto Bs</td>
  <td width="164" align="center" class="css10n" >ESTADO</td>
  <td width="55" align="center" class="css10n" >Comprobante</td>
  <td width="71" align="center" class="css10n" >Aprobar</td>
  <td width="56" align="center" class="css10n" >Rechazar</td>
  </tr> 
<?php $sw=0;  while($ldoc=mysql_fetch_array($resd)){
	
	
	if( $ldoc[8] == "Disponible" ) $color='bgcolor="#00FF00"'; else if( $ldoc[8] == "No Disponible" ) $color='bgcolor="#FF0000"'; 
	
	$k++; $fi1 = 0 ;  if ($sw == 0) { $sw=1;	?>
<tr valign="middle" bgcolor="#FEFEFE">  <td height="15" align="center" class="css10"><?php echo $k ;?></td>
<td align="left" class="css10">&nbsp;&nbsp;<?php echo $ldoc[1];?></td>
<td align="left" class="css10"><?php echo $ldoc[11];?></td>
<td align="center" class="css10"><?php echo $ldoc[3];?></td>
<td align="center" class="css10"><?php echo $ldoc[5];?></td>
<td align="center" class="css10"><?php echo $ldoc[4];?></td>
<td align="center" class="css10"><?php echo $ldoc[7];?></td>
<td align="center" class="css10"><a href="imagen.php?id=<?php echo $ldoc[0] ;?>&t=solicitud_inscripcion&c=cod_sico" target="_blank" onClick="window.open(this.href, this.target, 'width=550,height=500,scrollbars=1'); return false;"><img src="imagenes/ver.gif" alt="Ver comprobante #<?php echo  $ldoc[1] ;?>" border="0" /></a></td>
<td align="center" class="css10">
<?php if($ldoc[7]!='PROCESADA') {?>
<a href="?seccion=insa&amp;ci=<?php echo $ldoc[1] ;?>
&cso=<?= $ldoc[2]?>&fp=<?= $ldoc[3]?>&m=<?= $ldoc[4]?>&nt=<?= $ldoc[5]?>&cod=<?= $ldoc[0]?>"><img src="imagenes/mas.png" alt="Ver" border="0"/></a><? }?></td>
<td align="center" class="css10"><a href="?seccion=vercur&amp;
ci=<?php echo $ldoc[0] ;?>

">
  <?php if($ldoc[7]!='PROCESADA') {?>
</a><a href="?seccion=insr&amp;ci=<?php echo $ldoc[0] ;?>"><img src="imagenes/delete.gif" alt="Editar" border="0"/>
<? }?>
</a></td>
</tr><?php } else {  $sw=0;     ?><tr valign="middle"  bgcolor="#F1F1F1" > <td height="15" align="center" class="css10"><?php echo $k ;?></td> 
<td align="left" class="css10" >&nbsp;&nbsp;<?php echo $ldoc[1];?></td>
<td align="left" class="css10" ><?php echo $ldoc[11];?></td>
<td align="center" class="css10" ><?php echo $ldoc[3];?></td>
<td align="center" class="css10" ><?php echo $ldoc[5];?></td>
<td align="center" class="css10" ><?php echo $ldoc[4];?></td>
<td align="center" class="css10" ><?php echo $ldoc[7];?></td>
<td align="center" class="css10" ><a href="impsoli.php?id=<?php echo $ldoc[0] ;?>" target="_blank" onClick="window.open(this.href, this.target, 'width=550,height=500,scrollbars=1'); return false;"><img src="imagenes/ver.gif" alt="Ver comprobante #<?php echo  $ldoc[1] ;?>" border="0" /></a></td>
<td align="center" class="css10" ><?php if($ldoc[7]!='PROCESADA') {?>
  <a href="?seccion=insa&amp;ci=<?php echo $ldoc[1] ;?>
&amp;cso=<?= $ldoc[2]?>&amp;fp=<?= $ldoc[3]?>&amp;m=<?= $ldoc[4]?>&amp;nt=<?= $ldoc[5]?>&amp;cod=<?= $ldoc[0]?>"><img src="imagenes/mas.png" alt="Ver" border="0"/></a>
  <? }?></td>
  <td align="center" class="css10" ><a href="?seccion=vercur&amp;
ci=<?php echo $ldoc[0] ;?>

">
    <?php if($ldoc[7]!='PROCESADA') {?>
  </a><a href="?seccion=insr&amp;ci=<?php echo $ldoc[0] ;?>"><img src="imagenes/delete.gif" alt="Editar" border="0"/>
  <? }?>
  </a></td>
  </tr>        <?php 		}	   }	?> </table>   </td>   
  </tr>   </table></td></tr></table><?php } ?></td></tr><tr>   <td height="30" align="center" valign="top"></td> 
  </tr></table>