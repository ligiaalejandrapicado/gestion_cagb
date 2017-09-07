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
<tr>
  <td align="center" valign="middle">AGREGAR PAGO A ESTUDIANTE</td>
    <td width="48" align="left" valign="middle"></td>
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
  <td height="20" colspan="3" align="left" valign="middle" bgcolor="#990000" class="css12bn">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ingrese Cédula del estudiante</td>  
</tr>
<tr class="css10"><td height="7" colspan="3" align="left" valign="top" ></td></tr>
<tr class="css10">
  <td width="131" align="right" valign="top" class="css10n">Cédula&nbsp;.:&nbsp;&nbsp;</td>
  <td width="117" align="left" valign="bottom"><input name="BUSCAR" type="text" class="css10" id="BUSCAR" size="17" maxlength="12"  onKeyPress="return isciKey(event)" /><br /> 
  <span class="css8n">Ejm:1500100</span></td>
  <td width="52" align="left" valign="top"><input name="Buscar" type="submit" class="css10rn" id="Buscar" value="Buscar" /></td>
</tr>  </table>
</form>  
</td>  </tr>   
<tr><td align="center">
<?php   if(($Buscar)||($HTTP_POST_VARS)) { 
 $BUSCAR=$_POST['BUSCAR'];
if(!$BUSCAR) { $BUSCAR=0;}
$rese = mysql_query("SELECT * FROM estudiante WHERE ci_ste='$BUSCAR' ORDER BY ci_ste DESC ;", $DB); 
$rowe = mysql_num_rows($rese);   
while($rege = mysql_fetch_array($rese)){ 	    
echo "
<table width='450' border='0' align='center' cellpadding='0' cellspacing='0'>
<tr><td align='center' valign='top'><table width='450' border='0' align='center' cellpadding='0' cellspacing='0'>
  <tr>
    <td align='center' valign='top'><table width='450' border='0' align='center' cellpadding='0' cellspacing='0' class='css10'>
      <tr>
        <td height='35' colspan='5' align='right' class='css10n'></td>
      </tr>
      <tr>
        <td width='136' align='right' class='css10n'>&nbsp;</td>
        <td width='111' align='left'>&nbsp;</td>
        <td width='4'></td>
        <td width='73' align='right' class='css10n'>CI :&nbsp;&nbsp;</td>
        <td width='126' align='left'>$rege[0]</td>
      </tr>
      <tr>
        <td height='3' colspan='5'></td>
      </tr>
      <tr>
        <td height='1' colspan='5' align='right' bgcolor='#68A3C3'></td>
      </tr>
      <tr>
        <td height='13' colspan='5'></td>
      </tr>
    </table>
      <table width='450' border='0' align='center' cellpadding='0' cellspacing='0' class='css10'>
        <tr>
          <td width='113' align='right' class='css10n'>Nombres y Apellidos:&nbsp;&nbsp;</td>
          <td align='left'>$rege[1]</td>
        </tr>
        <tr>
          <td height='3' colspan='2'></td>
        </tr>
        <tr>
          <td height='1' colspan='2' align='right' bgcolor='#68A3C3'></td>
        </tr>
        <tr>
          <td height='13' colspan='2'></td>
        </tr>
    </table>
      <table width='450' border='0' align='center' cellpadding='0' cellspacing='0' class='css10'>
        <tr>
          <td width='113' align='right' class='css10n'>Dirección :&nbsp;&nbsp;</td>
          <td align='left'>$rege[2]</td>
        </tr>
        <tr>
          <td height='3' colspan='2'></td>
        </tr>
        <tr>
          <td height='1' colspan='2' align='right' bgcolor='#68A3C3'></td>
        </tr>
        <tr>
          <td height='13' colspan='2'></td>
        </tr>
      </table>
      <table width='450' border='0' align='center' cellpadding='0' cellspacing='0' class='css10'>
        <tr>
          <td width='113' align='right' class='css10n'>Teléfono 1:&nbsp;&nbsp;</td>
          <td align='left'>$rege[3]</td>
        </tr>
        <tr>
          <td height='3' colspan='2'></td>
        </tr>
        <tr>
          <td height='1' colspan='2' align='right' bgcolor='#68A3C3'></td>
        </tr>
        <tr>
          <td height='13' colspan='2'></td>
        </tr>
      </table>
      <table width='450' border='0' align='center' cellpadding='0' cellspacing='0' class='css10'>
        <tr>
          <td width='113' align='right' class='css10n'>Teléfono 2 :&nbsp;&nbsp;</td>
          <td align='left'>$rege[4]&nbsp;&nbsp;</td>
          </tr>
        <tr>
          <td height='3' colspan='2'></td>
        </tr>
        <tr>
          <td height='1' colspan='2' align='right' bgcolor='#68A3C3'></td>
        </tr>
        <tr>
          <td height='13' colspan='2'></td>
        </tr>
    </table>
      <table width='450' border='0' align='center' cellpadding='0' cellspacing='0' class='css10'>
        <tr>
          <td width='113' align='right' class='css10n'>E-Mail :&nbsp;&nbsp;</td>
          <td align='left'>$rege[5]</td>
        </tr>
        <tr>
          <td height='3' colspan='2'></td>
        </tr>
        <tr>
          <td height='1' colspan='2' align='right' bgcolor='#68A3C3'></td>
        </tr>
        <tr>
          <td height='13' colspan='2'></td>
        </tr>
      </table>
      <table width='450' border='0' align='center' cellpadding='0' cellspacing='0' class='css10'>
        <tr>
          <td width='113' align='right' class='css10n'>Fecha de Registro :&nbsp;&nbsp;</td>
          <td align='left'>$rege[6]</td>
        </tr>
        <tr>
          <td height='3' colspan='2'></td>
        </tr>
        <tr>
          <td height='1' colspan='2' align='right' bgcolor='#68A3C3'></td>
        </tr>
        <tr>
          <td height='13' colspan='2'></td>
        </tr>
      </table></td>
  </tr>
</table></td></tr></table>   ";  
   ?>
                                        
<?php 
//a.ci_ste='$rege[0]' && a.cod_cso=b.cod_cso && b.cod_csod=c.cod_csod && a.cod_ico=c.cod_ico
$resd = mysql_query("SELECT * FROM inscripcion a, curso b where 
 a.ci_ste='$BUSCAR' && a.cod_cso=b.cod_cso  ORDER BY a.cod_ico DESC");
$rowd = mysql_num_rows($resd);?>
<table width="550" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#FF00FF">
<tr> <td align="center" valign="top"><?php if ($rowd == 0){ ?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >  <tr><td><table width="100%"  border="0" cellspacing="0" cellpadding="0">  <tr>  <td align="right"></td></tr>  <tr>  <td height="40" ><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#EEEEEE">  <tr>  <td width="48%" height="25" align="left" valign="middle" class="css12" >
<span class="css12n">&nbsp;&nbsp;&nbsp;</span> <span class="css10n">CURSOS  DISPONIBLES PARA AGREGAR PAGO</span></td> 
<td width="25%" align="left" valign="middle" class="css12" >&nbsp;</td>
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
</tr>  <tr> <td height="40" align="center" valign="middle" ><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#EEEEEE"> <tr> <td width="34%" height="25" align="left" valign="middle" class="css10n">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CURSOS DE ESTUDIANTE </td>
              <td width="43%" align="right" valign="middle" class="css12n">&nbsp;</td>
              <td width="2%" align="right" valign="middle" class="css12n">&nbsp;</td>
              <td width="21%" align="left" valign="middle" class="css12"></td>
</tr></table></td>  </tr>
  <tr>  <td align="right" height="15"></td>  
  </tr>  <tr>  <td align="center" valign="top" bgcolor="#FFFFFF" > <table width="700"  border="0" align="center" cellpadding="0" cellspacing="2" > 
<tr bgcolor="#EEEEEE" > <td width="20" align="center" ><b class="css10n">N&ordm;</b></td> 
  <td width="446" align="left" bgcolor="#EEEEEE" class="css10n">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Curso, Taller o Diplomado</td>    
  <td width="226" align="center" class="css10n" >AGREGAR PAGO</td>
  </tr> 
<?php $sw=0;  while($ldoc=mysql_fetch_array($resd)){  $k++; $fi1 = 0 ; ?>
<?php if ($sw == 0) { $sw=1;	?>
<tr valign="middle" bgcolor="#FEFEFE">  <td height="15" align="center" class="css10"><?php echo $k ;?></td>
<td align="left" bgcolor="#FEFEFE" class="css10">&nbsp;&nbsp;&nbsp;<?php echo $ldoc[7];?></td>
<? if( $ldoc[10] == "ABIERTO" ) $color='bgcolor="#00FF00"'; else if( $ldoc[10] == "CANCELADO" ) $color='bgcolor="#FF0000"';else if( $ldoc[10] == "CERRADO" ) $color='bgcolor="#00CCFF"';?>
<td align="center" class="css10"><a href="?seccion=pgo&amp;id=<?php echo $ldoc[0] ;?>&ci=<?php echo $BUSCAR ;?>"><img src="imagenes/mas.png" alt="Editar" border="0"/></a></td>
</tr><?php }  else if ($sw == 1) {  $sw=0;     ?><tr valign="middle"  bgcolor="#F1F1F1" > <td height="15" align="center" class="css10"   ><?php echo $k ;?></td> 
<td align="left" bgcolor="#F1F1F1" class="css10" >&nbsp;&nbsp;&nbsp;<?php echo $ldoc[7];?></td>
  <? if( $ldoc[10] == "ABIERTO" ) $color='bgcolor="#00FF00"'; else if( $ldoc[10] == "CANCELADO" ) $color='bgcolor="#FF0000"';else if( $ldoc[10] == "CERRADO" ) $color='bgcolor="#00CCFF"';?>
  <td align="center" class="css10" ><a href="?seccion=pgo&id=<?php echo $ldoc[0] ;?>&ci=<?php echo $BUSCAR ;?>"><img src="imagenes/mas.png" alt="Editar" border="0"/></a></td>
  </tr>        <?php 		}	   }	?> </table>   </td>   </tr>   </table></td></tr></table><?php } ?></td></tr><tr>   <td height="30" align="center" valign="top"></td> 
  </tr></table>   
   
   <?
     }  
mysql_query($sqls);
mysql_close(); 
 
if($rowe<=0){ echo " 
<table width='500' border='0' align='center' cellpadding='0' cellspacing='0' class='css10'>
<tr><td width='500' height='10'></td></tr>
<tr><td height='10' align='center'>Cédula &nbsp;&nbsp;<b>$BUSCAR</b> &nbsp;&nbsp; no corresponde a ninguno de nuestros ESTUDIANTES</td></tr>
<tr><td height='10'></td></tr>
<tr><td height='70' align='center' valign='middle' class='css10rn'>Para continuar con la ventael registro debe registrar el estudiante en la base de datos.</td></tr>
<tr><td height='30' align='right' class='css10n'><a href=?seccion=cli><img src='imagenes/mas.jpg' border='0'/>&nbsp;Agregar Cliente al Sistema</a></td></tr>
<tr><td height='10'></td></tr></table>
"; } 
  } // END IF BUSCAR  ?>   
</td>  </tr>
<tr> <td height="5" align="right"></td> </tr>    
</table> 
<!--  END FORM --> 
</td></tr></table>