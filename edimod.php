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
if(form.des.value=="") men= men+"º Descripción. \n";
if(form.fechai.value=="") men= men+"º Fecha de inicio. \n";
if(form.fechaf.value=="") men= men+"º Fecha de fin. \n";
if(form.estado.value=="") men= men+"º Estado. \n";
if(form.curso.value=="") men= men+"º Curso. \n";

if((form.des.value=="")|| (form.fechai.value=="")|| (form.fechaf.value=="")||(form.estado.value=="") ||(form.curso.value=="") ){
alert(''+men+'  \n\nVerifique para continuar. ');  return (false); }   }
</script>
<?php  $ci=$_GET['ci'];
$sql = "SELECT * FROM curso_detalle WHERE cod_csod='$ci' ORDER BY cod_csod DESC ";
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
      <td width="253" align="left" valign="middle" class="css12n">MODIFICAR CURSO</td>
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
        <td align="left"><a href="?seccion=lcur" class="css12n">Ver Listado</a></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td height="3" colspan="3"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td width="153" align="right" bgcolor="#F2F2F2"><span class="css10n">Código&nbsp;:&nbsp;&nbsp;</span></td>
    <td width="174" align="left" bgcolor="#F2F2F2" class="css12r"> &nbsp;<?php echo $row[0]; ?></td>
    <td width="73"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td height="5" colspan="3" align="right"></td>
  </tr>
  <tr>
    <td height="3" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr bgcolor="#F2F2F2">
    <td align="right"><span class="css10n">Descripción&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="des" type="text" class="css10" id="des"  value="<?php echo $row[2]; ?>" size="20" maxlength="50"/>
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
    <td align="right"><span class="css10n">Curso o Taller&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><?php $resdp2 = mysql_query("SELECT * FROM curso  order by cod_cso");
      $rowdp2 = mysql_num_rows($resdp2);?>
      <select name="curso" id="curso" class="css10">
        <option  value="">-- Seleccione --</option>
        <?php while($ldodp2=mysql_fetch_array($resdp2)){
		
		?>
        <option value="<?php echo $ldodp2[0] ; ?>"><?php echo $ldodp2[1]; ?></option>
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
    <td align="right"><span class="css10n">Fecha de Inicio&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="fechai" type="text" class="css10" id="fechai" onkeypress="return istlfKey(event)" value="<?php echo $row[3]; ?>" size="17" maxlength="12" />
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
    <td align="right"><span class="css10n">Fecha de Fin&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><input name="fechaf" type="text" class="css10" id="fechaf" onkeypress="return istlfKey(event)" value="<?php echo $row[4]; ?>" size="17" maxlength="12" />
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
    <td align="right"><span class="css10n">Estado&nbsp;&nbsp;:&nbsp;&nbsp;</span></td>
    <td align="left" bgcolor="#F2F2F2" class="css10"><select name="estado" id="estado" class="css10">
      <option value=""  >--</option>
      <option value="REALIZADO">REALIZADO</option>
      <option value="POR REALIZAR">POR REALIZAR</option>
      <option value="SUSPENDIDO">SUSPENDIDO</option>
      </select>
      * <?php echo $row[5]; ?></td>
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
    $des=$_POST['des'];
	$fechai=$_POST['fechai'];
	$fechaf=$_POST['fechaf'];
	$curso=$_POST['curso'];
	$estado=$_POST['estado'];



$result3="UPDATE curso_detalle SET  cod_cso='".$curso."',des_csod='".$des."', feci_csod='".$fechai."', fecf_csod='".$fechaf."', est_csod='".$estado."'  WHERE cod_csod='".$ci."'";
mysql_query($result3); ?>
<SCRIPT LANGUAGE="javascript">location.href = "?seccion=lmod";</SCRIPT>
<?php } } ?>