
   
   <link rel="stylesheet" href="styles.css">
   <script src="jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>


<div id='cssmenu'>
<ul>
   <li class='active'><a href='?seccion='><span>Inicio</span></a></li>
   <li class='has-sub'><a href='#'><span>Estudiantes</span></a>
      <ul>
         <li><a href='?seccion=est'><span>Nuevo Registro</span></a></li>
         <li><a href='?seccion=verest'><span>Consulta</span></a></li>
          <li><a href='?seccion=lest'><span>Listado</span></a></li>
         
      </ul>
   </li>
   
    <li class='has-sub'><a href='#'><span>Inscripciones</span></a>
      <ul>
         <li><a href='?seccion=sbins'><span>Nueva Solicitud</span></a></li>
         <li><a href='?seccion=bins'><span>Nueva Inscripción</span></a></li>
         <!--<li><a href='?seccion='><span>Consulta de Inscripciones</span></a></li> -->
         <li><a href='?seccion=lisinsc'><span>Listado por Curso</span></a></li>
         <li><a href='?seccion=lissins'><span>Listado de Solicitudes</span></a></li>
         
      </ul>
   </li>
   
   <li class='has-sub'><a href='#'><span>Notas</span></a>
      <ul>
         <li><a href='?seccion=bnta'><span>Nuevo Registro</span></a></li>
         <li><a href='?seccion=bntae'><span>Consulta de Estudiante</span></a></li>
          <!--<li><a href='?seccion='><span>Listado por Curso</span></a></li> -->
         
      </ul>
   </li>
   
   
     <li class='has-sub'><a href='#'><span>Cursos y Talleres</span></a>
      <ul>
         <li><a href='?seccion=cur'><span>Nuevo Registro</span></a></li>
         <li><a href='?seccion=mod'><span>Nuevo Módulo</span></a></li>
         <li class='last'><a href='?seccion=lcur'><span>Listado de Cursos</span></a></li>
         <li ><a href='?seccion=lmod'><span>Listado de Módulos</span></a></li>
      </ul>
   </li>
   
   <li class='has-sub'><a href='#'><span>Pagos</span></a>
      <ul>
         <li><a href='?seccion=bpgo'><span>Nuevo Registro </span></a></li>
         <li><a href='?seccion=bpgoe'><span>Consulta de Pagos Estudiante </span></a></li>
        <!-- <li><a href='?seccion='><span>Listado </span></a></li>
         <li class='last'><a href='?seccion=liscpago'><span>Comprobantes de Pago</span></a></li>
        <li class='last'><a href='?seccion=liscpago2'><span>Comprobantes de Nomina</span></a></li> -->
      </ul>
   </li>    
 <!--  <li class='has-sub'><a href='#'><span>Reportes</span></a>
      <ul>
         <li><a href='?seccion='><span>REPORTE 1</span></a></li>
         <li class='last'><a href='?seccion='><span>REPORTE 2</span></a></li>

         <li class='last'><a href='?seccion='>REPORTE 3</a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Cuentas Conare</span></a>
      <ul>
         <li><a href='?seccion=cue'><span>Nuevo Registro</span></a></li>
         <li class='last'><a href='?seccion=listcue'><span>Listado de Cuentas</span></a></li>
      </ul>
   </li>
    
   
    <li class='has-sub'><a href='#'><span>% de IVA</span></a>
      <ul>
         <li><a href='?seccion=aiva'><span>Actualizar IVA</span></a></li>
         <li class='last'><a href='?seccion=listiva'><span>Listado % de IVA</span></a></li>
      </ul>
   </li> -->
   
   <li class='last'><a href='<?php echo $logoutAction ?>'><span>Salir</span></a></li>
</ul>
</div>
