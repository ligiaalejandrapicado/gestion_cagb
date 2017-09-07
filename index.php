<?php if($doLogout!='true')session_start();?>
<?php /* iniciar sesion*/
/* desconectar sesion. */ $logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);  }
if ((isset($_GET['doLogout'])) && ($_GET['doLogout']=="true")){ session_destroy(); ?>
 <script>alert('Ha culminado su sesión'); location.href = "?seccion="; </script>
 
 <?  /* Cerrar sesion */
  session_unregister('usuario');  session_unregister('grupo');  session_unregister('nom');  session_unregister('niv'); 
  session_unregister('subniv');	   $logoutGoTo = "index.php"; 
  if ($logoutGoTo) { header("Location: $logoutGoTo");  exit;  }
   } 
   include('conectado.php'); ?>
   
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es"> 
<head profile="http://gmpg.org/xfn/11"> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<title>||  SISTEMA DE CONTROL ACADEMICO ADMINISTRATIVO  ||</title>   
<link href="style.css" rel="stylesheet" type="text/css">
</head><body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td width="100%" height="100%" align="center" valign="top"><table width="789" border="0" align="center" cellpadding="0" cellspacing="0" >
<tr> 
  <td align="center" valign="top">
    
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  class="css10">
      <tr><td height="5" align="left" valign="top">&nbsp;</td></tr>
      <tr>
        <td height="5" align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td height="5" align="left" valign="top"><a href="?seccion="><img src="imagenes/banner.jpg" alt="" /></a></td>
      </tr>
      <tr><td height="70" align="left" valign="middle">
        <?php if($totalRows==0 && ((isset($_SESSION['nom'])))){  ?>
        <table border="0" align="left" cellpadding="0" cellspacing="0">
          <tr><td width="70"></td>
            <td width="20"></td>   
            <td><a href="?seccion=bins"><img src="imagenes/militantes.jpg" alt="" border="0" /></a></td>
            <td width="35"></td>
            <td><a href="?seccion=lest"><img src="imagenes/simpa.jpg" alt="" width="200" height="200" border="0" /></a></td>
            <td width="35"></td>  
            <td><a href="?seccion=lcur"><img src="imagenes/comi.jpg" alt="" border="0" /></a></td>
            <td width="20"></td> 
            <td><a href="?seccion="><img src="imagenes/reportes.jpg" alt="" border="0" /></a></td>
            <td width="20"></td>
            <td><a href="<?php echo $logoutAction ?>"><img src="imagenes/salir_.jpg" alt="" width="200" height="200" border="0"/></a></td><td></td> 
            </tr>
          </table>
        <?php } ?></td></tr>
      <tr><td height="2" align="center"></td></tr>
      <tr><td height="2"></td></tr>
      </table>
    <?php /* Validacion necesaria par el sitio*/
if (!isset($_SESSION)) {  session_start(); }      
$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {  $_SESSION['PrevUrl'] = $_GET['accesscheck'];  }
if (isset($_POST['login'])) {
$loginUsername=$_POST['login'];  
$password=$_POST['pass'];
$MM_fldUserAuthorization = "";  
$MM_redirectLoginSuccess = "./?seccion=";
$MM_redirectLoginFailed = "malo.php";  $MM_redirecttoReferrer = false;
$result=sprintf("SELECT * FROM usuarios WHERE login='%s' AND pass='%s'", get_magic_quotes_gpc() ? $loginUsername : addslashes($loginUsername), get_magic_quotes_gpc() ? $password : addslashes($password)); 
$LoginRS = mysql_query($result) or die(mysql_error());  $row= mysql_fetch_assoc($LoginRS); 
$loginFoundUser = mysql_num_rows($LoginRS);  $totalRows= mysql_num_rows($LoginRS);
if ($loginFoundUser) {     $loginStrGroup = "";
//declare  session variables and assign them
$_SESSION['usuario'] = $loginUsername;  $_SESSION['grupo'] = $loginStrGroup;	      
$_SESSION['nom']=$row['nom']; $_SESSION['niv']=$row['niv'];	
$_SESSION['subniv']=$row['subniv'];	
if (isset($_SESSION['PrevUrl']) && false){ $MM_redirectLoginSuccess = $_SESSION['PrevUrl']; }?>
    <SCRIPT LANGUAGE="javascript">location.href="";</SCRIPT>
    <?php }else {   echo'<table width="400" border="0" align="center">
<tr><td height="25"></td></tr>
<tr><td align="center" class="css12rn"><b> Usuario o Contraseña No Valido<br> Verifique los datos</b></td>  </tr></table>'; }   } ?>
    <?php if($totalRows==0 && !((isset($_SESSION['nom'])))){  ?>
    <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>  <td height="400" align="center" valign="top">    
        <form action="" method="post" name="form1" id="form1" onSubmit="MM_validateForm('login','','R','pass','','R');return document.MM_returnValue">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr><td height="40"></td>  </tr>
            <tr><td align="center" valign="middle"><table width="260" border="0" align="center" cellpadding="5" cellspacing="2" bgcolor="#F2F2F2">
              <tr>
                <td colspan="2" align="center" bgcolor="#990000" class="css10bn">INICIO DE SESIÓN</td>     
                </tr>
              <tr><td height="15" colspan="2" class="css12n"></td>  </tr>
              <tr><td align="left" bgcolor="#F2F2F2" class="css10n">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Usuario :</td>
                <td align="left" bgcolor="#F2F2F2" class="css10n">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contraseña :</td>
                </tr>
              <tr><td align="center" bgcolor="#FFFFFF">&nbsp;&nbsp;&nbsp;<input name="login" type="text" class="css10" id="login" size="15" /></td>
                <td align="center" bgcolor="#FFFFFF">&nbsp;&nbsp;&nbsp;<input name="pass" type="password" class="css10" id="pass" size="15" /></td>
                </tr>
              <tr><td height="40" colspan="2"></td>   </tr>
              <tr><td colspan="2" align="center" valign="middle"><input name="Submit" type="submit" class="css12n" value="Entrar" /></td>     </tr>
            </table></td>
              </tr>
            </table>
          </form>  </td></tr></table>  
    <script language="javascript">document.form1.login.focus();</script>
    <?php }else{ ?>
    <table width="730" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F8F8F8">
      <tr> <td width="170" align="center" valign="top">
        <?php include("menu.php"); ?></td>
        <td align="center" valign="top" bgcolor="#FFFFFF"><table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
          <tr><td align="center" class="css10">
            <?php switch ($_GET['seccion']) {  
			
			
			
 case mili:  include("militante.php"); break;
 case lmili:  include("listmili.php"); break;
 case lmili_act:  include("listmili_act.php"); break;
 case lmili_noact:  include("listmili_noact.php"); break;


case rspar:  include("reporte_parroquia.php"); break;


 case vermili:  include("vermili.php"); break;
 case edimili:  include("edimili.php"); break;
 case rmf:  include("listmili_fem.php"); break;
 case rmm:  include("listmili_mas.php"); break;
case rsf:  include("listsim_fem.php"); break;
case rsm:  include("listsim_mas.php"); break;
  case reportes:  include("reportes.php"); break;
 
 case est:  include("estudiante.php"); break;
 case lest:  include("listest.php"); break;
 case verest:  include("verest.php"); break;
 case ediest:  include("ediest.php"); break;
 
 
 case cur:  include("curso.php"); break;
 case lcur:  include("listcur.php"); break;
 case vercur:  include("vercur.php"); break;
 case edicur:  include("edicur.php"); break;
 
 
 case mod:  include("modulo.php"); break;
 case lmod:  include("listmod.php"); break;
 case edimod:  include("edimod.php"); break;
 case elimod:  include("elimod.php"); break;



case bnta:  include("bus_nota.php"); break;
case bntae:  include("bus_nota_est.php"); break;
case edinta:  include("edi_nota.php"); break;


case bpgo:  include("bus_pago.php"); break;
case pgo:  include("pago.php"); break;
case bpgoe:  include("bus_pago_est.php"); break;

 case bins:  include("solest.php"); break;
 case sbins:  include("solest_sins.php"); break;
 
 case ins:  include("inscripcion.php"); break;
 case insa:  include("inscripcion_apro.php"); break;
 case insr:  include("inscripcion_rec.php"); break;
 case sins:  include("solicitar_ins_RESPALDO.php"); break;
 case soli:  include("solicitar.php"); break;
 
 case lissins:  include("listsins.php"); break;
 case lisinsc:  include("listins_cur.php"); break; 
 case edisoli:  include("edisoli.php"); break;
 case impsoli:  include("versoli.php"); break;
 


 
 default:  include("bienvenido.php");    
 }  	?>
            
            </td> </tr>
          <tr> <td height="5"></td>
            </tr>
          </table></td>  </tr></table>
    <?php } ?>
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr><td align="right">
        </td>  </tr>
      <tr><td height="10" bgcolor="#990000" ></td></tr><tr><td align="right" class="css10n">&nbsp;</td> </tr>
    </table></td>
  </tr>
</table>
</td></tr></table>
</body>