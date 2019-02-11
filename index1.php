<!DOCTYPE html>
<html lang="es">
<head>
  <title>CiverWin Evolution</title>
  <meta charset="utf-8">
  <meta name="author" content="Moreno Tolentino Jose Armando">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--estilos-->
  <link rel="stylesheet" type="text/css" href="xmls/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="xmls/css/estilos.css">
  <link rel="stylesheet" type="text/css" href="xmls/font-awesome/css/font-awesome.min.css">
  <style>	
  	div.ex3 {
  background-color: lightblue;
  width: 400px;
  height: 110px;
  overflow: auto;
}
  </style>
  </head>
  <body>
  <!--Barra de navegación-->
      <nav class="navbar fixed-top navbar-expand-lg navbar-ligth text-white bg-danger">
        <!--Brand-->
        <a class="navbar-brand" href="http://www.ciberwine.com.mx/index.html"><img src="xmls/imagenes/logo.png" height="50px" width="170px">
        </a>
        <!--Menu colapsable-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navResponsive" >
          <span class="navbar-toggler-icon"></span>
        </button>
      <!--links-->
        <div class="collapse navbar-collapse" id="navResponsive">
          <ul class="navbar-nav ml-auto">
            <!--<li class="nav-item col-lg-6">
              <a class="text-white" href="#">Nosotros</a>
            </li>-->
            <li class="nav-item col-lg-2">
              <a class="text-white" href="http://www.ciberwine.com.mx/index.html">Inicio</a>
            </li>
            <li class="nav-item col-lg-2">
              <a class="text-white" href="http://ciberwine.com.mx/utilerias.html">Utilerias</a>
            </li>
            <li class="nav-item col-lg-2">
              <a class="text-white" href="http://ciberwine.com.mx/dise%C3%B1o.html">Diseño</a>
            </li>
            <li class="nav-item col-lg-3">
              <a class="text-white" href="http://ciberwine.com.mx/contacto.html">Contacto</a>
            </li>
            <li class="nav-item col-lg-2">
              <a class="text-white" href="http://ciberwine.com.mx/aviso.html">Aviso</a>
            </li>
           
          </ul>
        </div>
      </nav>
  <!--fin menu-->
  <div class="container col-lg-8"><!--agarra todo el ancgo de la pantalla-->
    <center>  
      <br><br><br><br>
   <img src="xmls/imagenes/logoizquierdo.png" height="70px" width="15%">
    <img src="xmls/imagenes/nw.png" height="120px" width="120px">
    <img src="xmls/imagenes/logoderecho.png" height="70px" width="15%">
    </center>
  </div> 
  <!--header-->
      <!--header-->
  <!--seccion de nosotros-->
      <section class="">
        <div class="container ">
          <div class="row">
            <div class="col-lg-12">
              
              <h1>Carga exitosa de archivos.</h1>
              <div class="container "> 
                  <div class="row ">
                    <div class="col-lg-3 col-sm-3 "></div>
                    <div class="col-lg-3 col-sm-3 "></div>
                    <div class="col-lg-3 col-sm-3 "></div>
                    <div class="col-lg-3 col-sm-3 ">
                    </div>                     
                    </div>
                      </div>
                      <form>
                      		<?php


	$imagen=$_FILES['logo_propio']['name'];
	//$imagen=$_FILES['logo_propio']['type'];
	$imagen_tmp=$_FILES['logo_propio']['tmp_name']; 
	$confirma_logo_nominwine=$_POST['logo_nominwine'];
  
  
  
	//echo "$imagen <br>";
	//echo "$logo_nominwine <br>";
	//include "fecha_hora.php";
	require('xmls/librerias/fpdf17/fpdf.php');
	include "xmls/librerias/phpqrcode/qrlib.php"; 
	include "LeerXmlCFDI.php";
	include "objetos.php";
	include "guardar_documentos.php";
	include "comprimir.php";
	include "xmls/proceso/index.php";
	include "subir_imagenes.php";
	include "eliminar_carpeta.php";
	
  

  eliminar('archivos');
	eliminar_files("rar");
	eliminar_files("xml");
	eliminar_files("imagenes");
	$archivos_xml=guardar_todos_los_xml();
	$nombre_carpeta_asignada=fecha_hora().rand(0, 9999);
	$dirpdf="archivos/".$nombre_carpeta_asignada;
	if(!file_exists($dirpdf)){
		mkdir($dirpdf, 0777) or die("No se puede crear el directorio de extracci&oacute;n");	
	}
	$logo_propio=subir_img($dirpdf);

	foreach ($archivos_xml as $key => $value) 
	{
		//echo "xml/".$value;echo "<br>";
		generar_pdf_nomina($value,$imagen,$imagen_tmp,$confirma_logo_nominwine,$dirpdf,$logo_propio);
	}
	unlink($logo_propio);
	$descargar_archivo= comprimir($archivos_xml,$nombre_carpeta_asignada);
	
	//echo "<hr>".$descargar_archivo;
	//descargar($descargar_archivo);
	//echo "<h1>$descargar_archivo</h1>";
	echo "<center>";
	echo '<a href="index.php"><button type="button" class="btn btn-danger">Regresar</button></a>      ';
	echo '<a href="descargar.php?file='.$descargar_archivo.'.zip" directorio='.$descargar_archivo.'><button type="button" class="btn btn-primary">Descargar archivos</button></a>';
	echo "</center>";

?>	
                      </form>
            </div>
          </div>
        </div>
      </section>
      <br><hr>
      <!--fin seccion de nosotros-->
 
  </body>
    <!-- Footer -->
  <footer>
    <div class="container-fluid contentC text-center bg-danger">
          <div class=" row bg-danger">
      <div class="col-lg-4 col-sm-4">
        <h5>TELEFONOS</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"></a><i class="fa fa-angle-double-right"></i>5564.0009 / 5574.0350</li>
            <li><a href="javascript:void();"></a><i class="fa fa-angle-double-right"></i>5264.7500 / 5264.7410</li>
            <li><a href="javascript:void();"></a><i class="fa fa-angle-double-right"></i>3603.4307 / 3603.430</li>
          </ul>
      </div>
      <div class="col-lg-4 col-sm-4">
        <h5>SOPORTE</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"></a><i class="fa fa-angle-double-right"></i>Lunes a Viernes<BR><i class="fa fa-angle-double-right"></i>9:00 am a 6:30 pm</li>
          </ul>
      </div>
      <div class="col-lg-4 col-sm-4">
        <h5>EMAIL</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"></a><i class="fa fa-angle-double-right"></i>ventas@ciberwine.com.mx</li>
            <li><a href="javascript:void();"></a><i class="fa fa-angle-double-right"></i>soporte@ciberwine.com.mx</li>
          </ul>
      </div>
    </div>   
    </div>
  </footer>
  <script>  
     $(document).ready(function(){  
     $('#employee_data').DataTable();  
     });  
   </script>
  <script type="text/javascript">

function validarExtxml()
{
    var archivoInput = document.getElementById('archivoInput');
    var archivoRuta = archivoInput.value;
    var extPermitidas = /(.xml)$/i;
    if(!extPermitidas.exec(archivoRuta)){
        alert('Asegurese de haber seleccionado un xml');
        archivoInput.value = '';
        return false;
    }
    else
    {
        //PRevio del PDF
        if (archivoInput.files && archivoInput.files[0]) 
        {
            var visor = new FileReader();
            visor.onload = function(e) 
            {
                document.getElementById('visorArchivo1').innerHTML = 
                '<embed src="'+e.target.result+'" width="500" height="300" />';
            };
            visor.readAsDataURL(archivoInput.files[0]);
        }
    }
}
function validarExtimg()
{

    var archivoInput = document.getElementById('archivoInput1');
    //alert(archivoInput);
    var archivoRuta = archivoInput.value;
    var png   = /(.png)$/i;
    var jpg   = /(.jpg)$/i;
    var jpeg = /(.jpeg)$/i;
    var gif   = /(.gif)$/i;

    var Apng  = png.exec(archivoRuta);
    var Ajpg  = jpg.exec(archivoRuta);
    var Ajpeg =jpeg.exec(archivoRuta);
    var Agif  = gif.exec(archivoRuta);

        //alert(png.exec(archivoRuta));

    if(!jpg){
        alert('usted no ha seleccionado una imagen xD');

        //archivoInput.value = '';
        archivoInput.value = '';
        return false;
    }
    else
    {
        //PRevio del PDF
        if (archivoInput.files && archivoInput.files[0]) 
        {
            var visor = new FileReader();
            visor.onload = function(e) 
            {
                document.getElementById('visorArchivo2').innerHTML = 
                '<embed src="'+e.target.result+'" width="170" height="50" />';
            };
            visor.readAsDataURL(archivoInput.files[0]);
        }
    }
}


</script>
<script>
  function validarFormulario(){
    //var txtNombre = document.getElementById('nombre_usuario').value;
    //var usuario = document.getElementById('nombre_usuario').value;
    //var cmbSelector = document.getElementById('selector').selectedIndex;
    var rbtEstado   = document.getElementsByName('logo_nominwine');
    //var rbtEstado1   = document.getElementsByName('radioButton');
    var files = document.getElementById('archivoInput');
    
    var banderaRBTN = false;
    
    // radio boton
    for(var i = 0; i < rbtEstado.length; i++){
      if(rbtEstado[i].checked){
        banderaRBTN = true;
        //break;    

      }
    }
    /*if(usuario == null || !usuario){
      alert('ingrese su nombre porfavor!');
      return false;
    }*/
    if(!banderaRBTN){
      alert('ingres el tipo de documento que se hara nomina/factura');
      return false;
    }
    //Test comboBox
   /* if(cmbSelector == null || cmbSelector == 0){
      alert('Debe seleccionar la opcion en donde se le hara la representacion digital');
      return false;
    }*/
    //file
    if(files == null){
      alert('seleccione el documento indicado');
      return false;
    }
    
 
    return true;
  }
 
  </script> 
  <!--scripts-->
  <script src="xmls/js/jquery-3.3.1.min.js"></script>
  <script src="xmls/js/bootstrap.min.js"></script>
</body>
</html>
