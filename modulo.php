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
if(form.curso.value=="") men= men+"º Curso o Taller. \n";
if(form.estado.value=="") men= men+"º Estado. \n";

if((form.des.value=="")|| (form.fechai.value=="")|| (form.fechaf.value=="")||(form.curso.value=="")||(form.estado.value=="") ){
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
<tr><td width="53" align="right" valign="middle">&nbsp;</td>
  <td width="15" align="left" class="css12n">&nbsp;</td>
    <td width="147" align="left" class="css12n">AGREGAR MÓDULO</td>
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
      <table width="320" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
          <td align="left" class="css12n">Nuevo Módulo</td>
          <td></td>
          <td align="left"><a href="?seccion=lmod" class="css12n">Ver Listado</a></td>
      </tr>
      </table>      </td>
    </tr>
<tr><td height="3" colspan="3" bgcolor="#FFFFFF"></td></tr>
<tr bgcolor="#F2F2F2">
    <td width="153" align="right"><span class="css10n">Descripción&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td width="174" align="left" bgcolor="#F2F2F2" class="css10">
    <input name="des" type="text" class="css10" id="des" size="20" maxlength="50"  />
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
      <td align="right"><span class="css10n">Curso o Taller&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
      <td align="left" bgcolor="#F2F2F2" class="css10">
        <?php $resdp2 = mysql_query("SELECT * FROM curso  order by cod_cso");
      $rowdp2 = mysql_num_rows($resdp2);?>
        <select name="curso" id="curso" class="css10">
          <option  value="">-- Seleccione --</option>
          <?php while($ldodp2=mysql_fetch_array($resdp2)){
		
		?>
          <option value="<?php echo $ldodp2[0] ; ?>"><?php echo $ldodp2[1]; ?></option>
          <?php } ?>
        </select>        *</td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#F2F2F2"><td height="5" colspan="3" align="right"></td></tr>
    <tr> <td height="3" colspan="3" bgcolor="#FFFFFF"></td> </tr>
    <tr>
      <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
    </tr>
    <tr bgcolor="#F2F2F2">
      <td align="right"><span class="css10n">Estado&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
      <td align="left" bgcolor="#F2F2F2" class="css10"><select name="estado" id="estado" class="css10">
        <option value=""  >--</option>
        <option value="REALIZADO">REALIZADO</option>
        <option value="POR REALIZAR">POR REALIZAR</option>
        <option value="SUSPENDIDO">SUSPENDIDO</option>
      </select>
        * </td>
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
	$curso=$_POST['curso'];
	$estado=$_POST['estado'];
	
	
$sql = "SELECT * FROM curso_detalle where des_csod='$des' ORDER BY des_csod DESC ";
$result = mysql_query($sql); 
$rows=mysql_num_rows($result);
if($rows>0){
?>  <SCRIPT LANGUAGE="javascript"> alert('YA EXISTE EN NUESTRO REGISTROS ESA DESCRIPCIÓN');location.href ="?seccion=mod&men=CI : <?php echo $ci; ?> Ya Existente"; </SCRIPT> <?php } else { ?>
<?php


$sqls="Insert Into curso_detalle ( cod_cso, des_csod , feci_csod , fecf_csod , est_csod ) values ( '" .$curso. "','" .$des. "','" .$fechai. "','" .$fechaf. "','" .$estado. "')"; 
mysql_query($sqls);    mysql_close();  ?>
<SCRIPT LANGUAGE="javascript"> location.href ="?seccion=lmod"; </SCRIPT>


<?php } } ?></td>
</tr></table>