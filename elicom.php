<?php include("conectado.php"); ?>
<?php $result = mysql_query("SELECT * FROM comite a , categoria_comite b , parroquia c WHERE a.ci_com='$ci' and b.cod_ccom=a.cod_ccom and a.id_parroquia=c.id ORDER BY a.ci_com DESC ;", $DB);
      $rege=mysql_fetch_array($result);  
	  
	  
	  ?>
<link href="style.css" rel="stylesheet" type="text/css" />
<table width="550"  border="0" align="center" cellpadding="0" cellspacing="0">
<tr>   <td align="center" valign="top">
<?php if (!$HTTP_POST_VARS){ ?>	
<table width="550"  border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td width="26%" height="25" align="right" valign="middle" bgcolor="#EEEEEE" class="titulo1" >&nbsp;&nbsp;</td>
          <td width="4%" align="right" valign="middle" bgcolor="#EEEEEE" class="titulo1" >&nbsp;</td>
          <td width="52%" height="40" align="left" valign="middle" bgcolor="#EEEEEE" class="css12n" >ELIMINAR DEL COMITÉ</td>
          <td width="18%" align="left" valign="middle" bgcolor="#EEEEEE" class="css12n" ><a href="javascript:history.go(-1);" class="css12n">Atr&aacute;s</a></td>
</tr>
<tr> <td height="30" colspan="4" ></td> </tr>
<tr> <td colspan="4"><table width="400"  border="0" align="center" cellpadding="0" cellspacing="0">
<tr> <td><div align="center" class="css10rn"  >&iquest;Desea realmente ELIMINAR este Registro?<br>
<br>En caso de proceder a ELIMINAR toda la informaci&oacute;n relacionada con esta sede ser&aacute; borrada del sistema.<br> <br> </div></td> </tr>
          </table></td>
        </tr>        
<tr><td colspan="4" ></td></tr>
<tr><td colspan="4"><form action="" method="post">
<table width="96%"  border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td width="100%" height="22" ><table width="200"  border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td align="center" valign="middle">
<input name="id" type="hidden" id="id" value="<? echo $id; ?>" />
<input name="enviar" type="submit" class="css12n" id="enviar" value="Eliminar"></td>
<td align="center" valign="middle">&nbsp;</td>
<td align="center" valign="middle"><input name="button" type="button" class="css12n" id="button" onclick="javascript:history.go(-1);" value="Cancelar" /></td>
</tr></table></td>
</tr></table>
<?php echo "
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
          <td width='113' align='right' class='css10n'>Categoría:&nbsp;&nbsp;</td>
          <td width='337' align='left'>$rege[9]</td>
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
          <td width='113' align='right' class='css10n'>Nombres y Apellidos:&nbsp;&nbsp;</td>
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
          <td width='113' align='right' class='css10n'>Dirección :&nbsp;&nbsp;</td>
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
          <td width='113' align='right' class='css10n'>Parroquia:&nbsp;&nbsp;</td>
          <td align='left'>$rege[12]</td>
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
          <td width='113' align='right' class='css10n'>Teléfono :&nbsp;&nbsp;</td>
          <td align='left'>$rege[5]&nbsp;&nbsp;</td>
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
      </table>
      <table width='450' border='0' align='center' cellpadding='0' cellspacing='0' class='css10'>
        <tr>
          <td width='113' align='right' class='css10n'>Estado :&nbsp;&nbsp;</td>
          <td align='left'>$rege[7]</td>
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
</table></td></tr></table>

    ";      }    
mysql_query($sqls);
mysql_close(); 
  ?>  </form></td>        </tr>    </table></td>  </tr>  <tr>    <td ></td>  </tr></table>
<?php if ($HTTP_POST_VARS){
include("conectado.php");
$Delete="DELETE FROM comite Where ci_com='$ci' ";
$rs = mysql_query($Delete); ?>
<SCRIPT LANGUAGE="javascript">location.href = "?seccion=lcom";</SCRIPT>
<?php  } ?>	