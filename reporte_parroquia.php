<link rel="stylesheet" type="text/css" href="default/default.css" media="screen" />
<link href="style.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="ic/jmcore.js"></script>
<script type="text/javascript" src="ic/jmmore.js"></script>
<script type="text/javascript" src="ic/jcgori.js"></script>
<script type="text/javascript">
window.addEvent('domready', function() {		
new gorilla('fc',  {  'defaultDate': 'today','theme': 'default blue','disallowUserInput': true,'format': '%d/%m/%Y','minDate': 'last','toggler': 'exampleIII-cs1', 'offsetY': -4 });		
new gorilla('ff',  {  'defaultDate': 'today','theme': 'default blue','disallowUserInput': true,'format': '%d/%m/%Y','minDate': 'last','toggler': 'exampleIII-cs1', 'offsetY': -4 });	
	});	
</script> 

<script language="javascript">
function validar(formb) {  
var men = "      Datos Incompletos   :              \n\n" ;

if(formb.parr.value=="") men= men+"º Parroquia. \n";
if(formb.est.value=="") men= men+"º Estado. \n";

if((formb.est.value=="") || (formb.parr.value=="") ){
alert(''+men+'  \n\nVerifique para continuar. ');  return (false); }   }
</script> 
<?php include("conectado.php"); ?>

<table width="550" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#00FF00">
<tr><td align="center" valign="top">
<!--  BEGIN FORM -->
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td height="40" align="center" bgcolor="#EEEEEE" class="css12n"><table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td width="134" align="right" valign="middle">&nbsp;</td>
    <td width="8">&nbsp;</td>
    <td width="280" align="left" class="css12n">REPORTE DE SIMPATIZANTES POR PARROQUIA</td>
    <td width="76" align="left" valign="middle"></td>
    </tr></table>
     </td></tr>
    <tr> <td>&nbsp;</td> </tr>
  </table>
<table width="550" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000" class="css12">
<tr> <td height="20"></td>   </tr>
<tr> <td align="right">
<form id="formb" name="formb" method="post" onSubmit="return validar(this)" >  
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F2F2F2">
<tr class="css10">
  <td height="20" colspan="3" align="left" valign="middle" bgcolor="#68A3C3" class="css12n">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ingrese datos de Consulta</td>  
</tr>
<tr class="css10"><td height="7" colspan="3" align="left" valign="top" ></td></tr>
<tr class="css10">
  <td height="7" align="right" valign="top" class="css10n" >Parroquia:</td>
  <td height="7" align="left" valign="top" ><?php $resdp2 = mysql_query("SELECT * FROM parroquia where municipio_id='241' order by id");
      $rowdp2 = mysql_num_rows($resdp2);?>
    <select name="parr" id="parr" class="css10">
      <option  value="">-- Seleccione --</option>
      <?php while($ldodp2=mysql_fetch_array($resdp2)){ 
		
		if($ldodp2[0]==$row[4])$sele2=' : Seleccionado Actual'; else $sele2=''; 
		
		?>
      <option value="<?php echo $ldodp2[0] ; ?>"><?php echo $ldodp2[1].' '.$sele2 ; ?></option>
      <?php } ?>
    </select>
*</td>
  <td height="7" align="left" valign="top" ></td>
</tr>
<tr class="css10">
  <td height="7" align="right" valign="top" class="css10n" >Estado: </td>
  <td height="7" align="left" valign="top" ><select name="est" id="est" class="css10">
    <option value=""  >--</option>
    <option value="ACTIVO">ACTIVO</option>
    <option value="DESINCORPORADO">DESINCORPORADO</option>
  </select>
    *</td>
  <td height="7" align="left" valign="top" ></td>
</tr>
<tr class="css10"><td width="131" align="right" valign="top" class="css10n">&nbsp;</td>
  <td width="117" align="left" valign="bottom">&nbsp;</td>
  <td width="52" align="left" valign="top"><input name="Buscar" type="submit" class="css10rn" id="Buscar" value="Buscar" /></td>
</tr>  </table>
</form>  
</td>  </tr>   
<tr><td align="center">
<?php   
	$parr=$_POST['parr'];
	$est=$_POST['est'];
	if(($_POST['Buscar'])) { 

 $fecha= date(d)."/".date(m)."/".date(Y) ;
 
$rese = mysql_query("SELECT * FROM simpatizante a , parroquia b  where a.id_parroquia='$parr' && a.est_sim='$est' 
ORDER BY a.ci_sim");
$rowe = mysql_num_rows($rese);   

?>
<table width="700"  border="0" align="center" cellpadding="0" cellspacing="2" > 
<tr bgcolor="#EEEEEE" >
  <td colspan="2" align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
  <td width="85" align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
  <td width="99" align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
  <td align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
  <td align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
</tr>
<tr bgcolor="#EEEEEE" >
  <td colspan="2" align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
  <td align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
  <td align="center" bgcolor="#FFFFFF" class="css10n">&nbsp;</td>
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
<tr><td height='10' align='center'>Fechas . &nbsp;&nbsp;<b>$parr - $est</b> &nbsp;&nbsp; NO POSEE REGISTROS PARA ESTA CONSULTA</td></tr>
<tr><td height='10'></td></tr>
<tr><td height='70' align='center' valign='middle' class='css10rn'></td></tr>
<tr><td height='30' align='right' class='css10n'></td></tr>
<tr><td height='10'></td></tr></table>
"; } 
  } // END IF BUSCAR  ?>   
</td>  </tr>
<tr> <td height="5" align="right"><a href="imp_reporte_parroquia.php?est=<?php echo $est ;?>&parr=<?php echo $parr ;?>" target="_blank" class="css10n" onClick="window.open(this.href, this.target, 'width=1000,height=700,scrollbars=1'); return false;"><img src="imagenes/print.gif" alt="Imprimir" border="0" /> </a></td> 
</tr>    
</table> 
</td></tr></table>