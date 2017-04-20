<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact - Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href=<?php echo "'" . base_url()?>css/bootstrap.min.css<?php echo "'"?> rel="stylesheet">
    <link href=<?php echo "'" . base_url()?>css/bootstrap.css<?php echo "'"?> rel="stylesheet">

    <!-- Custom CSS -->
    <link href=<?php echo "'" . base_url()?>css/business-casual.css<?php echo "'"?> rel="stylesheet">
    
    <link href=<?php echo "'" . base_url()?>css/bootstrap-social.css<?php echo "'"?> rel="stylesheet">
    
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src=<?php echo "'" . base_url()?>js/jquery.validate.js<?php echo "'"?>></script>
    <link href=<?php echo "'" . base_url()?>css/bower_components/font-awesome/css/font-awesome.min.css<?php echo "'"?> rel="stylesheet">
    <link href=<?php echo "'" . base_url()?>css/styles.css<?php echo "'"?> rel="stylesheet">

    <!-- Links del formulario modelo -->
        <link href=<?php echo "'" . base_url()?>vendors/bootstrap/css/bootstrap.min.css<?php echo "'"?> rel="stylesheet">

        <link href=<?php echo "'" . base_url()?>vendors/metisMenu/metisMenu.min.css<?php echo "'"?> rel="stylesheet">

        <link href=<?php echo "'" . base_url()?>dist/css/sb-admin-2.css<?php echo "'"?> rel="stylesheet">

        <link href=<?php echo "'" . base_url()?>vendors/font-awesome/css/font-awesome.min.css<?php echo "'"?> rel="stylesheet" type="text/css">

    <!--  -->
</head>

<body>

    <div class="brand">MJVC</div>
    <?php include "decolores.php"?>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href=<?php echo "'".base_url()?>welcome/index<?php echo "'"?>>Principal</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    {menu}
                    <li>
                        <a href=<?php echo "'".base_url()?>{url}<?php echo "'"?>>{texto}</a>
                    </li>
                    {/menu}
                    
                </ul>
            </div>
        </div>
    </nav>
    <br/><br/>
    <div class="container">
        
                <!--<div id="#divMensajes">-->
                        <script type="text/javascript">
                            function mostrarMensajes(errores){
                                for(i = 0; i < errores.length; i++){
                                    $("#"+errores[i]).get(0).type = 'label';
                                    $("#"+errores[i]).addClass("visible");
                                }
                            }
                        </script>
                <!--</div>--> 
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Ficha <strong>m&eacute;dica</strong>
                    </h2>
                    <hr>
                    <p>Le solicitamos completar el siguiente formulario o bien entr&eacute;guelo en forma impresa. Gracias</p>
                    <br/><br/>

                    <form id="contactForm" class="form-horizontal" method="post" role="form" action=<?php echo "'".base_url()?>contacto/index<?php echo "'"?>>


                        
                                                                <div class="form-group">
                                            <label for="nombre" class="col-lg-3 control-label">Nombre y Apellido</label>
                                            <div class="col-lg-9">
                                              <input type="nombreApell" class="form-control" id="nombreApell" placeholder="nombre y Apellido">
                                            </div>
                                        </div>
                                        </br>
                                        <div class="form-group">
                                            <label for="GruposSanguineos" class="col-lg-3 control-label">Grupos Sanguineos</label>
                                            <div class="col-lg-9">
                                              <input type="GruposSanguineos" class="form-control" id="GruposSanguineos" placeholder="Grupos Sanguineos">
                                            </div>  
                                        </div>  
                                        <div class="form-group col-lg-12">                                      
                                         <h4 class="text-primary">Enfermedades crónicas en los últimos 3 años (tacha lo que NO CORRESPONDE)</h4>
                                         </div> 

                                         <div class="form-group diabetes">
                                            <label class="col-lg-3 control-label">Diabetes</label>
                                            <div class="col-lg-9">
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInlineA" id="optionsRadios" value="option1" checked>SI
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInlineA" id="optionsRadios" value="option2">NO
                                            </label>
                                            </div>
                                        </div>
                                        
                                         
                                        <div class="form-group alergias">
                                            <label  class="col-lg-3 control-label">Alergias</label>
                                            <div class="col-lg-3">
                                                <label class="radio-inline">
                                                    <input type="radio" name="optionsRadiosInlineB" id="optionsRadiosInline4" value="1" checked>SI
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="optionsRadiosInlineB" id="optionsRadiosInline3" value="2">NO
                                                </label>
                                                 <label class="radio-inline">¿A QUE? </label>
                                             </div> 
                                             <div class="col-lg-6">
                                              <input type="GruposSanguineos" class="form-control" id="GruposSanguineos">
                                            </div>  
                                        </div>  
                                         <div class="form-group">
                                            <label class="col-lg-3 control-label">Problema de coagulación sanguínea</label>
                                            <div class="col-lg-9">
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInlineC" id="optionsRadiosInline5" value="option1" checked>SI
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInlineC" id="optionsRadiosInline6" value="option2">NO
                                            </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Celiaquía</label>
                                            <div class="col-lg-9">
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInlineD" id="optionsRadiosInline7" value="option1" checked>SI
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInlineD" id="optionsRadiosInline8" value="option2">NO
                                            </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Asma</label>
                                            <div class="col-lg-9">
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInlineE" id="optionsRadiosInline9" value="option1" checked>SI
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInlineE" id="optionsRadiosInline10" value="option2">NO
                                            </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Cardiopatías</label>
                                            <div class="col-lg-9">
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInlineF" id="optionsRadiosInline9" value="option1" checked>SI
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInlineF" id="optionsRadiosInline10" value="option2">NO
                                            </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Hipertensión</label>
                                            <div class="col-lg-9">
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInlineG" id="optionsRadiosInline11" value="option1" checked>SI
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInlineG" id="optionsRadiosInline12" value="option2">NO
                                            </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Alguna otra</label>
                                            <div class="col-lg-9">
                                              <input type="nombreApell" class="form-control" id="nombreApell">
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12">                                      
                                         <h4 class="text-primary">Medicamentos</h4>
                                         </div> 
                                         <div class="form-group">
                                            <label class="col-lg-6 control-label">¿Está actualmente en tratamiento con algún medicamento? </label>
                                            <div class="col-lg-3">
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInlineH" id="optionsRadiosInline13" value="option1" checked>SI
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInlineH" id="optionsRadiosInline14" value="option2">NO
                                            </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label class=" col-lg-6 control-label">En caso afirmativo complete lo siguiente:   </label>
                                        </div>
                                        </br>
                                        <div class="form-group">
                                            <label for="nombre" class="col-lg-6 control-label">¿Por qué enfermedad lo toma? </label>
                                            <div class="col-lg-6">
                                              <input type="nombreApell" class="form-control" id="nombreApell">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nombre" class="col-lg-6 control-label">¿Qué medicamento debe suministrarse? </label>
                                            <div class="col-lg-6">
                                              <input type="nombreApell" class="form-control" id="nombreApell" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nombre" class="col-lg-6 control-label">Nombre del medicamento </label>
                                            <div class="col-lg-6">
                                              <input type="nombreApell" class="form-control" id="nombreApell" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nombre" class="col-lg-6 control-label">Dosis:  </label>
                                            <div class="col-lg-6">
                                              <input type="nombreApell" class="form-control" id="nombreApell" >
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-lg-6 control-label">¿Toma algún medicamento en otras ocasiones?( fiebre, dolores, etc.)   </label>
                                            <div class="col-lg-3">
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInlineI" id="optionsRadiosInline15" value="option1" checked>SI
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInlineI" id="optionsRadiosInline16" value="option2">NO
                                            </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nombre" class="col-lg-6 control-label">¿Cuál?</label>
                                            <div class="col-lg-6">
                                              <input type="nombreApell" class="form-control" id="nombreApell" >
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-lg-6 control-label">¿ALGUN MEDICAMENTO QUE NO PUEDAS TOMAR?   </label>
                                            <div class="col-lg-3">
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInlineJ" id="optionsRadiosInline17" value="option1" checked>SI
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInlineJ" id="optionsRadiosInline18" value="option2">NO
                                            </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nombre" class="col-lg-6 control-label">¿Cuál?</label>
                                            <div class="col-lg-6">
                                              <input type="nombreApell" class="form-control" id="nombreApell" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="control-label text-Second">IMPORTANTE!!! No olvides tu medicación, ya que NO estamos autorizados a proporcionarla, por ello NECESITAMOS DE TU RESPONSABILIDAD!!!</label>
                                        </div>
                                    
                                    <div class="form-group col-lg-12">                                      
                                         <h4 class="text-primary">Alimentación:</h4>
                                    </div>  
                                    <div class="form-group">
                                            <label for="nombre" class="col-lg-6 control-label">¿Por qué enfermedad lo toma? </label>
                                            <div class="col-lg-6">
                                              <input type="nombreApell" class="form-control" id="nombreApell">
                                            </div>
                                    </div>  
                                    <div class="form-group">
                                    <div class="col-lg-6">
                                    </br>
                                    </div>
                                    <div class="col-lg-6">
                                          <input type="nombreApell" class="form-control" id="nombreApell">
                                          <label for="nombre" class="col-lg-6 control-label">FIRMA Y ACLARACION </label>
                                    </div>
                                    </div>  
                                    <div class="form-group">
                                        <label class="control-label text-Second">DESDE YA AGRADECEMOS SU SINCERIDAD Y CONFIANZA, YA QUE LA INFORMACION DETALLADA EN EL MISMO  NOS ES DE SUMA UTILIDAD EN CASO DE EMERGENCIA</label>
                                        </br></br>
                                        <label class=" col-lg-12 control-label text-Second">De Colores !!!</label>
                                    </div>  




                        <div class="form-group">
                            <div class="col-xs-9 col-xs-offset-3">
                                <button type="submit" id="btnEnviarMail" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>

                        <label class="col-xs-3 control-label"><i class="glyphicon glyphicon-flag"></i>&nbsp; Campos obligatorios</label>
                    </form>

                    <?php
                        if(isset($mensajeExito)){
                            echo "<div class='alert alert-success' id='divMensajeExito'>
                                    <label>{mensajeExito}</label>
                                </div>";
                        }elseif(isset($mensajeFallido)){
                            echo "<div class='alert alert-warning' id='divMensajeExito'>
                                    <label>{mensajeFallido}</label>
                                </div>";
                        }

                    ?> 
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
    
    <footer>
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <ul class="nav navbar-nav">
                        <li><a href="https://www.facebook.com/people/Mjvc-Moron/100008310218579" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/MjvcMoron?s=09" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <p style="font-size: 16px">Copyright &copy; 2016 - Todos los derechos reservados.</p>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src=<?php  echo "'" . base_url()?>js/jquery.js<?php echo "'"?>></script>

    <script src=<?php  echo "'" . base_url()?>js/bootstrap.min.js<?php echo "'"?>></script>

    <!-- Scripts del formulario modelo -->
    <script src=<?php echo "'" . base_url()?>vendors/jquery/jquery.min.js<?php echo "'"?>></script>

    <script src=<?php echo "'" . base_url()?>vendors/bootstrap/js/bootstrap.min.js<?php echo "'"?>></script>

    <script src=<?php echo "'" . base_url()?>vendors/metisMenu/metisMenu.min.js<?php echo "'"?>></script>

    <script src=<?php echo "'" . base_url()?>dist/js/sb-admin-2.js<?php echo "'"?>></script>
    <!--  -->
   
</body>

</html>