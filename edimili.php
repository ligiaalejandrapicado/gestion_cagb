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
if(form.cmili.value=="") men= men+"º Categoría de militante. \n";
if(form.gen.value=="") men= men+"º Sexo. \n";
if(form.nombre.value=="") men= men+"º Nombres y Apellidos. \n";
if(form.dir.value=="") men= men+"º Dirección. \n";
if(form.tel.value=="") men= men+"º Teléfono. \n";
if(form.parr.value=="") men= men+"º Parroquia. \n";
if(form.est.value=="") men= men+"º Estado de militante. \n";

if( (form.gen.value=="")||(form.ci.value=="")||(form.cmili.value=="")||(form.nombre.value=="")||(form.dir.value=="")||(form.tel.value=="") || (form.parr.value=="")|| (form.est.value=="") ){
alert(''+men+'  \n\nVerifique para continuar. ');  return (false); }   }
</script> 
<?php  $ci=$_GET['ci'];
$sql = "SELECT * FROM militante WHERE ci_mte='$ci' ORDER BY ci_mte DESC ";
$result = mysql_query($sql);   ?>
<?php if($row = mysql_fetch_array($result)) {    ?> 
<?php if(!$_POST['Guardar']) { ?> 
<table width="550"  border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
  <td height="40" >&nbsp;</td>
</tr>
<tr> <td height="40" bgcolor="#EEEEEE" ><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>  <td width="60" align="right" valign="middle">&nbsp;</td>
      <td width="4"></td>
      <td width="253" align="left" valign="middle" class="css12n">MODIFICAR MILITANTE</td>
      <td width="83" align="right" valign="middle" class="css12n"><a href="javascript:history.go(-1);" class="css12n">Atr&aacute;s</a></td>
    </tr>
  </table></td>   
  </tr>
<tr> <td valign="top">
<form id="form" name="form" method="post" onSubmit="return validar(this)" > 
<table border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#FF0000">
<tr> <td height="5" align="right"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#F2F2F2">
    <td height="25"  colspan="3" align="center" valign="middle" bgcolor="#68A3C3" ><table width="320" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="left" class="css12n">Modificar </td>
        <td></td>
        <td align="left"><a href="?seccion=lmili" class="css12n">Ver Listado</a></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td height="3" colspan="3"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td width="153" align="right" bgcolor="#F2F2F2"><span class="css10n">CI/RIF&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td width="174" align="left" bgcolor="#F2F2F2" class="css10"><input name="ci" type="text" class="css10" id="ci" onkeypress="return isciKey(event)" value="<?php echo $row[0]; ?>" size="17" maxlength="9" readonly /></td>
    <td width="73"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Categoría&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><?php $resdp = mysql_query("SELECT * FROM categoria_militante order by cod_cmte");
      $rowdp = mysql_num_rows($resdp);?>
      <select name="cmili" id="cmili" class="css10">
        <option  value="">-- Seleccione --</option>
        <?php while($ldodp=mysql_fetch_array($resdp)){ 
		if($ldodp[0]==$row[1])$sele=' : Seleccionado Actual'; else $sele=''; 
		?>
        
        
        <option value="<?php echo $ldodp[0] ; ?>"><?php echo $ldodp[1].' '.$sele ; ?></option>
        <?php } ?>
      </select>
      *</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right" bgcolor="#F2F2F2"><span class="css10n">Sexo&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><select name="gen" id="gen" class="css10">
      <option value=""  >--</option>
      <option value="F">F</option>
      <option value="M">M</option>
    </select>
      *<?php echo $row[8]; ?></td>
    <td></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Nombres y Apellidos&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="nombre" type="text" class="css10" id="nombre" onkeypress="return isAlfaKey(event)" value="<?php echo $row[2]; ?>" size="20" maxlength="50"/>
      *</td>
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
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="dir" type="text" class="css10" id="dir" value="<?php echo $row[3]; ?>" size="30" maxlength="50" />
      *</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Parroquia&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><?php $resdp2 = mysql_query("SELECT * FROM parroquia where municipio_id='241' order by id");
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
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="tel" type="text" class="css10" id="tel" onkeypress="return istlfKey(event)" value="<?php echo $row[5]; ?>" size="17" maxlength="12" />
      *</td>
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
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="email" type="text" class="css10" id="email" value="<?php echo $row[6]; ?>" size="40" maxlength="100"/></td>
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
      <option value=""  >--</option>
      <option value="ACTIVO">ACTIVO</option>
      <option value="DESINCORPORADO">DESINCORPORADO</option>
    </select>
      * <?php echo $row[7]; ?></td>
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
$cmili=$_POST['cmili'];
$nombre=$_POST['nombre'];
	$dir=$_POST['dir'];
	$parr=$_POST['parr'];
	$tel=$_POST['tel'];
	$email=$_POST['email'];
	$est=$_POST['est'];
	$ci=$_POST['ci'];
	
	
$nombre=strtoupper($nombre);
$dir=strtoupper($dir);

$result3="update militante set cod_cmte='".$cmili."', nom_mte='".$nombre."', dir_mte='".$dir."', id_parroquia='".$parr."', tel_mte='".$tel."', email_mte='".$email."' , est_mte='".$est."' WHERE ci_mte='$ci'";
mysql_query($result3); ?>
<SCRIPT LANGUAGE="javascript">location.href = "?seccion=lmili";</SCRIPT>
<?php } } ?>