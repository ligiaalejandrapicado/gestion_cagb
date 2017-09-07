<link href="style.css" rel="stylesheet" type="text/css">
<body onLoad="document.form.ci.focus()">
<?php include("conectado.php"); ?>
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
<script language="javascript">
function validar(form) {  
var men = "      Datos Incompletos   :              \n\n" ;
if(form.des.value=="") men= men+"º Descripción. \n";
if(form.fechai.value=="") men= men+"º Fecha de inicio. \n";
if(form.fechaf.value=="") men= men+"º Fecha de fin. \n";
if(form.dir.value=="") men= men+"º Dirección. \n";
if(form.fp1.value=="") men= men+"º Fecha de pago 1. \n";
if(form.cupos.value=="") men= men+"º Cupos disponibles para el curso. \n";
if(form.costo.value=="") men= men+"º Costo en Bs. \n";

if((form.des.value=="")|| (form.fechai.value=="")|| (form.fechaf.value=="")||(form.dir.value=="")||(form.fp1.value=="")||(form.cupos.value=="")||(form.costo.value=="") ){
alert(''+men+'  \n\nVerifique para continuar. ');  return (false); }   }
</script> 

<table width="550" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#00FF00">
<tr>  <td align="center" valign="top">
<?php if(!$_POST['Guardar']) { ?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
  <td height="30" align="center" class="css12n">&nbsp;</td>
</tr>
<tr><td height="30" align="center" bgcolor="#EEEEEE" class="css12n"><table width="431" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
  <td align="left" valign="middle" class="css12n">CURSO, TALLER O DIPLOMADO</td>
  <td width="84" align="right" valign="middle"><a href="javascript:history.go(-1);" class="css12n">Atr&aacute;s</a></td>
</tr>
</table> </td>   </tr>
<tr> <td>&nbsp;</td> </tr>  </table>
<form id="form" name="form" method="post" action="" onSubmit="return validar(this)">  
<table border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#99FF00">
<tr><td> 
  <table border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#FF0000">
  <tr> <td height="5" align="right"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#F2F2F2">
    <td colspan="3" align="center" valign="middle" ></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td colspan="3" align="center" valign="middle" class="css12r" ><?php echo $men ;?></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td colspan="3" align="center" valign="middle" ></td>
  </tr>
  <tr bgcolor="#F2F2F2">
     <td height="25"  colspan="3" align="center" valign="middle" bgcolor="#68A3C3" >
      <table width="320" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
          <td align="right" class="css12n"><a href="?seccion=lcur" class="css12n">Ver Listado</a></td>
          <td></td>
          <td align="right">&nbsp;</td>
      </tr>
      </table>      </td>
    </tr>
<tr><td height="3" colspan="3" bgcolor="#FFFFFF"></td></tr>
<tr bgcolor="#F2F2F2">
    <td width="153" align="right"><span class="css10n">Descripción&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td width="174" align="left" bgcolor="#F2F2F2" class="css10">
    <input name="des" type="text" class="css10" id="des" size="20" maxlength="50" onKeyPress="return isAlfaKey(event)" />
    *</td>
    <td width="73">&nbsp;</td>
</tr>      
<tr bgcolor="#F2F2F2"><td height="5" colspan="3" align="right"></td></tr>
<tr><td height="3" colspan="3" bgcolor="#FFFFFF"></td></tr>    
<tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Fecha de inicio&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10">
<input name="fechai" type="text" class="css10" id="fechai" value="<?=date('d/m/Y');?>" size="12" maxlength="12"/>
*</td>
    <td>&nbsp;</td>
</tr>
<tr bgcolor="#F2F2F2"> <td height="5" colspan="3" align="right"></td> </tr>
<tr>
  <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
</tr>
<tr bgcolor="#F2F2F2">
  <td align="right"><span class="css10n">Fecha de fin&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
  <td align="left" bgcolor="#F2F2F2" class="css10"><input name="fechaf" type="text" class="css10" id="fechaf" value="<?=date('d/m/Y');?>" size="12" maxlength="12"/>
    *</td>
  <td>&nbsp;</td>
</tr>
<tr bgcolor="#F2F2F2">
  <td height="5" colspan="3" align="right"></td>
</tr>
<tr> <td height="3" colspan="3" bgcolor="#FFFFFF"></td> </tr>
    <tr bgcolor="#F2F2F2">
      <td align="right"><span class="css10n">Dirección&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
      <td align="left" bgcolor="#F2F2F2" class="css10">
      <input name="dir" type="text" class="css10" id="dir" size="30" maxlength="250" onKeyPress="return istlfKey(event)" />
      *</td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#F2F2F2"><td height="5" colspan="3" align="right"></td></tr>
    <tr> <td height="3" colspan="3" bgcolor="#FFFFFF"></td> </tr>
    <tr bgcolor="#F2F2F2">
      <td align="right"><span class="css10n">Fecha Pago 1 &nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
      <td align="left" bgcolor="#F2F2F2" class="css10">
      <input name="fp1" type="text" class="css10" id="fp1" value="<?=date('d/m/Y');?>" size="12" maxlength="12"/>
      *</td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#F2F2F2"><td height="5" colspan="3" align="right"></td></tr>
    <tr>
      <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td align="right"><span class="css10n">Fecha Pago 2 &nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
      <td align="left" bgcolor="#F2F2F2" class="css10"><input name="fp2" type="text" class="css10" id="fp2" size="12" maxlength="12"/></td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td height="5" colspan="3" align="right"></td>
    </tr>
    <tr>
      <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td align="right"><span class="css10n">Fecha Pago 3 &nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
      <td align="left" bgcolor="#F2F2F2" class="css10"><input name="fp3" type="text" class="css10" id="fp3" size="12" maxlength="12"/></td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td height="5" colspan="3" align="right"></td>
    </tr>
    <tr>
      <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td align="right"><span class="css10n">Fecha Pago 4 &nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
      <td align="left" bgcolor="#F2F2F2" class="css10"><input name="fp4" type="text" class="css10" id="fp4" size="12" maxlength="12"/></td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td height="5" colspan="3" align="right"></td>
    </tr>
    <tr>
      <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td align="right"><span class="css10n">Cupos del curso&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
      <td align="left" bgcolor="#F2F2F2" class="css10"><input name="cupos" type="text" class="css10" id="cupos" size="12" maxlength="12"/></td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td height="5" colspan="3" align="right"></td>
    </tr>
    <tr>
      <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td align="right"><span class="css10n">Costo Bs&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
      <td align="left" bgcolor="#F2F2F2" class="css10"><input name="costo" type="text" class="css10" id="costo" size="12" maxlength="12"/></td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td height="5" colspan="3" align="right"></td>
    </tr>
    <tr><td height="3" colspan="3" bgcolor="#FFFFFF"></td></tr>      
      
  </table></td></tr>
<tr><td height="50" align="center" valign="middle"><table width="250" border="0" cellspacing="0" cellpadding="0">
<tr><td align="center" valign="middle"><input name="Guardar" type="submit" class="css12n" id="Guardar" value="Guardar" /></td>
    <td>&nbsp;</td>
    <td align="left"><input name="button" type="button" class="css12n" id="button" onClick="javascript:location.href='?seccion=lispro'" value="Cancelar" /></td>
      </tr></table></td></tr>  
  </table></td></tr>
</table>
</form>
<?php } else { ?>
<?php  

$des=$_POST['des'];
	$fechai=$_POST['fechai'];
	$fechaf=$_POST['fechaf'];
	$dir=$_POST['dir'];
	$fp1=$_POST['fp1'];
	$fp2=$_POST['fp2'];
	$fp3=$_POST['fp3'];
	$fp4=$_POST['fp4'];
	$estado='POR REALIZAR';
	$cupos=$_POST['cupos'];
	$costo=$_POST['costo'];
	
$sql = "SELECT * FROM curso where des_cso='$des' ORDER BY des_cso DESC ";
$result = mysql_query($sql); 
$rows=mysql_num_rows($result);
if($rows>0){
?>  <SCRIPT LANGUAGE="javascript"> location.href ="?seccion=cur&men=CI : <?php echo $ci; ?> Ya Existente"; </SCRIPT> <?php } else { ?>
<?php


$sqls="Insert Into curso ( des_cso , feci_cso , fecf_cso , dir_cso , fpag1_cso , fpag2_cso , fpag3_cso , fpag4_cso , est_cso,cupos_cso,costo_cso ) values ( '" .$des. "','" .$fechai. "','" .$fechaf. "','" .$dir. "','" .$fp1. "','" .$fp2. "','" .$fp3. "','" .$fp4. "','" .$estado. "','" .$cupos. "','" .$costo. "')"; 
mysql_query($sqls);    mysql_close();  ?>
<SCRIPT LANGUAGE="javascript"> location.href ="?seccion=lcur"; </SCRIPT>


<?php } } ?></td>
</tr></table>