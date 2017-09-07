<link href="style.css" rel="stylesheet" type="text/css" />
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
if(form.ci.value=="") men= men+"º CI/RIF. \n";
if(form.nombre.value=="") men= men+"º Nombre. \n";
if(form.ape.value=="") men= men+"º Apellido. \n";
if(form.dir.value=="") men= men+"º Dirección. \n";
if(form.tel1.value=="") men= men+"º Teléfono. \n";
if(form.pro.value=="") men= men+"º Profesión. \n";
if(form.cgo.value=="") men= men+"º Cargo. \n";
if(form.est.value=="") men= men+"º Estado. \n";
if((form.ci.value=="")||(form.nombre.value=="")||(form.ape.value=="")||(form.dir.value=="")||(form.tel1.value=="") ||(form.pro.value=="")||(form.cgo.value=="")||(form.est.value=="")){
alert(''+men+'  \n\nVerifique para continuar. ');  return (false); }   }
</script> 
<?php  
$sql = "SELECT * FROM empleado WHERE ci_epo='$ci' ORDER BY ci_epo DESC ";
$result = mysql_query($sql);   ?>
<?php if($row = mysql_fetch_array($result)) {    ?> 
<?php if(!$Guardar) { ?> 
<table width="550"  border="0" align="center" cellpadding="0" cellspacing="0">
<tr> <td height="40" bgcolor="#EEEEEE" ><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>  <td width="60" align="right" valign="middle"><img src="imagenes/apro.png" alt=""/></td>
      <td width="4"></td>
      <td width="253" align="left" valign="middle" class="css12n">MODIFICAR EMPLEADO</td>
      <td width="83" align="right" valign="middle" class="css12n"><a href="javascript:history.go(-1);" class="css12n">Atr&aacute;s</a></td>
    </tr>
  </table></td>   
  </tr>
<tr> <td valign="top">
<form id="form" name="form" method="post" onSubmit="return validar(this)" > 
<table border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#FF0000">
<tr> <td height="5" align="right"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#F2F2F2">
    <td height="25"  colspan="3" align="center" valign="middle" bgcolor="#FFCC00" ><table width="320" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="left" class="css12n">Modificar Empleado</td>
        <td></td>
        <td align="left"><a href="?seccion=lisemp" class="css12n">Ver Listado</a></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td height="3" colspan="3"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td width="153" align="right" bgcolor="#F2F2F2"><span class="css10n">CI/RIF&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td width="174" align="left" bgcolor="#F2F2F2" class="css10"><input name="ci" type="text" class="css10" id="ci" onkeypress="return isciKey(event)" value="<?php echo $row[0]; ?>" size="17" maxlength="9" readonly="readonly" /></td>
    <td width="73"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Nombre&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="nombre" type="text" class="css10" id="nombre" onkeypress="return isAlfaKey(event)" value="<?php echo $row[1]; ?>" size="20" maxlength="50"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Apellido&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="ape" type="text" class="css10" id="ape" onkeypress="return isAlfaKey(event)" value="<?php echo $row[2]; ?>" size="20" maxlength="50" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Dirección&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="dir" type="text" class="css10" id="dir" value="<?php echo $row[3]; ?>" size="30" maxlength="50" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Teléfono &nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="tel1" type="text" class="css10" id="tel1" onkeypress="return istlfKey(event)" value="<?php echo $row[4]; ?>" size="17" maxlength="12" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Email &nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="email" type="text" class="css10" id="email" value="<?php echo $row[5]; ?>" size="40" maxlength="100"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Profesión&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="pro" type="text" class="css10" id="pro" onkeypress="return isAlfaKey(event)" value="<?php echo $row[6]; ?>" size="30" maxlength="50"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Cargo&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><?php $resdp = mysql_query("SELECT * FROM cargo order by cod_cgo");
      $rowdp = mysql_num_rows($resdp);?>
      <select name="cgo" id="cgo" class="css10">
        <option >-- Seleccione --</option>
        <?php while($ldodp=mysql_fetch_array($resdp)){ ?>
        <option value="<?php echo $ldodp[0] ; ?>"><?php echo $ldodp[1] ; ?></option>
        <?php } ?>
      </select> 
      
      <?php 
	  $resd2 = mysql_query("SELECT * FROM cargo where cod_cgo='$row[7]'");
	  $ldoc2=mysql_fetch_array($resd2);
	  echo $ldoc2[1] ; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Estado&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><select name="est" id="est" class="css10">
      <option >-- Seleccione --</option>
      <option value="Disponible">Disponible</option>
      <option value="No Disponible">No Disponible</option>
    </select> <?php echo $row[8]; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
</table></td></tr>
  <tr> <td height="50" align="center" valign="middle">
  <table width="250" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td align="center"><input name="Guardar" type="submit" class="css12n" id="Guardar" value="Guardar" /></td>
      <td></td>
      <td align="center"><input name="button" type="button" class="css12n" id="button" onclick="javascript:history.go(-1);" value="Cancelar" /></td>
    </tr>
  </table> </td></tr>  
  </table> 
 </form>
 </td>   </tr>     </table> 
<?php } else { ?>


<?php
$result3="update empleado set nom_epo='".$nombre."', ape_epo='".$ape."', dir_epo='".$dir."', tel_epo='".$tel1."', email_epo='".$email."', pro_epo='".$pro."', cod_cgo='".$cgo."', est_epo='".$est."' WHERE ci_epo=$ci";
mysql_query($result3); ?>
<SCRIPT LANGUAGE="javascript">location.href = "?seccion=lisemp";</SCRIPT>
<?php } } ?>