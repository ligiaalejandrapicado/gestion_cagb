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
if(form.ci.value=="") men= men+"º CI/RIF. \n";
if(form.tci.value=="") men= men+"º Tipo de CI/RIF. \n";
if(form.nombre.value=="") men= men+"º Nombres y Apellidos. \n";
if(form.dir.value=="") men= men+"º Dirección. \n";
if(form.tel1.value=="") men= men+"º Teléfono 1. \n";

if(form.email.value=="") men= men+"º Email. \n";


if((form.email.value=="")|| (form.ci.value=="")|| (form.tci.value=="")||(form.nombre.value=="")||(form.dir.value=="")||(form.tel1.value=="") ){
alert(''+men+'  \n\nVerifique para continuar. ');  return (false); }   }
</script> 

<table width="550" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#00FF00">
<tr>  <td align="center" valign="top">
<?php if(!$Guardar) { ?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
  <td height="30" align="center" class="css12n">&nbsp;</td>
</tr>
<tr><td height="30" align="center" bgcolor="#EEEEEE" class="css12n"><table width="431" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td width="53" align="right" valign="middle">&nbsp;</td>
  <td width="15" align="left" class="css12n">&nbsp;</td>
    <td width="147" align="left" class="css12n">ESTUDIANTE</td>
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
          <td align="left" class="css12n">Nuevo Estudiante</td>
          <td></td>
          <td align="left"><a href="?seccion=lmili" class="css12n">Ver Listado</a></td>
      </tr>
      </table>      </td>
    </tr>
    <tr>  <td height="3" colspan="3"></td>      </tr>  
   
<tr bgcolor="#F2F2F2">
<td width="153" align="right" bgcolor="#F2F2F2"><span class="css10n">CI/RIF&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
<td width="174" align="left" bgcolor="#F2F2F2" class="css10">
<select name="tci" id="tci" class="css10">
  <option value=""  >--</option>
  <option value="E-">E-</option>
  <option value="V-">V-</option>
</select>
<input name="ci" type="text" class="css10" id="ci" size="17" maxlength="9" onKeyPress="return isciKey(event)" />
*</td>
<td width="73"></td>
</tr>
<tr bgcolor="#F2F2F2"><td height="5" colspan="3" align="right"></td></tr>
<tr><td height="3" colspan="3" bgcolor="#FFFFFF"></td></tr>
<tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Nombres y Apellidos&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10">
    <input name="nombre" type="text" class="css10" id="nombre" size="20" maxlength="50" onKeyPress="return isAlfaKey(event)" />
    *</td>
    <td>&nbsp;</td>
</tr>      
<tr bgcolor="#F2F2F2"><td height="5" colspan="3" align="right"></td></tr>
<tr><td height="3" colspan="3" bgcolor="#FFFFFF"></td></tr>    
<tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Dirección&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10">
    <input name="dir" type="text" class="css10" id="dir" size="30" maxlength="50" />
    *</td>
    <td>&nbsp;</td>
</tr>
<tr bgcolor="#F2F2F2"> <td height="5" colspan="3" align="right"></td> </tr>
<tr>
  <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
</tr>
<tr bgcolor="#F2F2F2">
  <td align="right"><span class="css10n">Teléfono 1&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
  <td align="left" bgcolor="#F2F2F2" class="css10"><input name="tel1" type="text" class="css10" id="tel1" size="17" maxlength="12" onKeyPress="return istlfKey(event)" />
    *</td>
  <td>&nbsp;</td>
</tr>
<tr bgcolor="#F2F2F2">
  <td height="5" colspan="3" align="right"></td>
</tr>
<tr> <td height="3" colspan="3" bgcolor="#FFFFFF"></td> </tr>
    <tr bgcolor="#F2F2F2">
      <td align="right"><span class="css10n">Teléfono 2&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
      <td align="left" bgcolor="#F2F2F2" class="css10">
      <input name="tel2" type="text" class="css10" id="tel2" size="17" maxlength="12" onKeyPress="return istlfKey(event)" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#F2F2F2"><td height="5" colspan="3" align="right"></td></tr>
    <tr> <td height="3" colspan="3" bgcolor="#FFFFFF"></td> </tr>
    <tr bgcolor="#F2F2F2">
      <td align="right"><span class="css10n">Email &nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
      <td align="left" bgcolor="#F2F2F2" class="css10">
      <input name="email" type="text" class="css10" id="email" size="40" maxlength="100"/>
      *</td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#F2F2F2"><td height="5" colspan="3" align="right"></td></tr>
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
$sql = "SELECT * FROM militante where ci_mte='$ci' ORDER BY ci_mte DESC ";
$result = mysql_query($sql); 
$rows=mysql_num_rows($result);
if($rows>0){
?>  <SCRIPT LANGUAGE="javascript"> location.href ="?seccion=est&men=CI : <?php echo $ci; ?> Ya Existente"; </SCRIPT> <?php } else { ?>
<?php
	$nombre=$_POST['nombre'];
	$dir=$_POST['dir'];
	$tel2=$_POST['tel2'];
	$tel1=$_POST['tel1'];
	$email=$_POST['email'];
	$tci=$_POST['tci'];$ci=$_POST['ci'];
	
	
	
$nombre=strtoupper($nombre);
$dir=strtoupper($dir);
$ci=$tci.$ci;
if($email=='')$email='NO SUMINISTRADO';
$fechar = date(d)."/".date(m)."/".date(Y) ; 

$sqls="Insert Into estudiante (ci_ste,nom_ste,dir_ste,tel1_ste,tel2_ste,email_ste,fechar_ste) values ('" .$ci. "','" .$nombre. "','" .$dir. "','" .$tel1. "','" .$tel2. "','" .$email. "','" .$fechar. "')"; 
mysql_query($sqls);    mysql_close();  ?>
<SCRIPT LANGUAGE="javascript"> location.href ="?seccion=lest"; </SCRIPT>


<?php } } ?></td>
</tr></table>