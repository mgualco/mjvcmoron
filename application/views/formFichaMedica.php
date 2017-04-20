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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src=<?php echo "'" . base_url()?>js/jquery.validate.js<?php echo "'"?>></script>
    <link href=<?php echo "'" . base_url()?>css/bower_components/font-awesome/css/font-awesome.min.css<?php echo "'"?> rel="stylesheet">
    <link href=<?php echo "'" . base_url()?>css/styles.css<?php echo "'"?> rel="stylesheet">
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

                    <form id="contactForm" class="form-horizontal" method="post" action=<?php echo "'".base_url()?>contacto/index<?php echo "'"?>>


                        
                        <div class="col-xs-10">
                                <label class=" col-xs-4 control-label">&nbsp;<i class="glyphicon glyphicon-flag"></i>&nbsp;&nbsp;Nombre y apellido</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="apyn" placeholder="Ingrese su nombre completo" required/>
                            </div>
                        </div>
                    
                        <div class=" col-xs-10">
                            <label class="col-xs-4 control-label">&nbsp;<i class="glyphicon glyphicon-flag"></i>&nbsp;&nbsp;Grupo sangu&iacute;neo</label>
                            <div class="col-xs-6">
                                <input type="text" class="form-control" name="gruposanguineo" placeholder="Ingrese su nombre completo" required/>
                            </div>
                        </div>
                        <br/>
                        <label class="col-xs-6 control-label"><h5>&nbsp;&nbsp;&nbsp;Enfermedades cr&oacute;nicas en los &uacute;ltimos tres a&ntilde;os</h5></label>
                        <br/>
                        <br/><br/><br/>
                        <div class=" col-xs-10">
                             <label class="col-xs-4 control-label">&nbsp;<i class="glyphicon glyphicon-flag"></i>&nbsp;&nbsp;Diabetes</label>
                                 <input type="radio" name="diabetes" value="Si" required/>Si
                                 <input type="radio" name="diabetes" value="No" required/>No
                        </div>
                       
                        <br/><br/>
                        <br/><br/>
                        <div class="row">
                            
                            <div class="form-group  col-md-3">
                                <label class="col-md-3 control-label">&nbsp;<i class="glyphicon glyphicon-flag"></i>&nbsp;&nbsp;Alergias</label>
                                <div>
                                    <input type="radio" name="alergia" value="No" class="radio-inline" required/>Si
                                    <input type="radio" name="alergia" value="No" class="radio-inline" required/>No
                                </div>
                            </div>
                            

                            <div class="col-md-4">
                                <label class="control-label">&nbsp;<i class="glyphicon glyphicon-flag"></i>&nbsp;&nbsp;¿A qu&eacute;?</label>
                                <div>
                                    <input type="text" class="form-control" name="especificaAlergia" required/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label">&nbsp;<i class="glyphicon glyphicon-flag"></i>&nbsp;&nbsp;Problema de coagulaci&oacute;n sangu&iacute;nea</label>
                            <div class="col-xs-4">
                                <input type="radio" name="problemaCoagulacion" value="Si" required/>Si
                                <input type="radio" name="problemaCoagulacion" value="No" required/>No
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-xs-3 control-label">&nbsp;<i class="glyphicon glyphicon-flag"></i>&nbsp;&nbsp;Celiaquu&iacute;a</label>
                            <div class="col-xs-4">
                                <input type="radio" name="celiaquii" value="Si" required/>Si
                                <input type="radio" name="celiaquia" value="No" required/>No
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-xs-3 control-label">&nbsp;<i class="glyphicon glyphicon-flag"></i>&nbsp;&nbsp;Asma</label>
                            <div class="col-xs-4">
                                <input type="radio" name="asma" value="Si" required/>Si
                                <input type="radio" name="asma" value="No" required/>No
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-xs-3 control-label">&nbsp;<i class="glyphicon glyphicon-flag"></i>&nbsp;&nbsp;Cardiopat&iacute;as</label>
                            <div class="col-xs-4">
                                <input type="radio" name="cardiopatia" value="Si" required/>Si
                                <input type="radio" name="cardiopatia" value="No" required/>No
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label">&nbsp;<i class="glyphicon glyphicon-flag"></i>&nbsp;&nbsp;Hipertensi&oacute;n</label>
                            <div class="col-xs-4">
                                <input type="radio" name="hipertension" value="Si" required/>Si
                                <input type="radio" name="hipertension" value="No" required/>No
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label">&nbsp;<i class="glyphicon glyphicon-flag"></i>&nbsp;&nbsp;Alguna otra</label>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" name="otraEnfermedadCronica" required/>
                            </div>
                        </div>
                        <br/>
                        <label class="col-xs-3 control-label">&nbsp;<i class="glyphicon glyphicon-flag"></i>&nbsp;&nbsp;Medicamentos</label>
                        <br/>
                        <div class="form-group">
                            <label class="col-xs-7 control-label">&nbsp;<i class="glyphicon glyphicon-flag"></i>&nbsp;&nbsp;¿Est&aacute; actualmente en tratamiento con alg&uacute;n medicamento?</label>
                            <div class="col-xs-4">
                                <input type="radio" name="tratamiento" value="Si" required/>Si
                                <input type="radio" name="tratamiento" value="No" required/>No
                            </div>
                        </div>
                        <label class="col-xs-3 control-label">&nbsp;<i class="glyphicon glyphicon-flag"></i>&nbsp;&nbsp;En caso afirmativo complete lo siguiente</label>
                        <div class="form-group">
                            <label class="col-xs-3 control-label">&nbsp;<i class="glyphicon glyphicon-flag"></i>&nbsp;&nbsp;¿Por qu&eacute; enfermedad lo toma?</label>
                            <div class="col-xs-4">
                                <input type="radio" name="enfermedad" value="Si" required/>Si
                                <input type="radio" name="enfermedad" value="No" required/>No
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label">&nbsp;<i class="glyphicon glyphicon-flag"></i>&nbsp;&nbsp;¿Qu&eacute; medicamento debe suministrarse?</label>
                            <div class="col-xs-4">
                                <input type="radio" name="medicamento" value="Si" required/>Si
                                <input type="radio" name="medicamento" value="No" required/>No
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label">&nbsp;<i class="glyphicon glyphicon-flag"></i>&nbsp;&nbsp;Nombre del medicamento</label>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" name="nombreMedicamento" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label">&nbsp;<i class="glyphicon glyphicon-flag"></i>&nbsp;&nbsp;Dosis</label>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" name="dosisMedicamento" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label">&nbsp;<i class="glyphicon glyphicon-flag"></i>&nbsp;&nbsp;¿Toma alg&uacute;n medicamento en otras ocasiones?(fiebre, dolores, etc)</label>
                            <div class="col-xs-4">
                                <input type="radio" name="medicamentoOcasiones" value="Si" required/>Si
                                <input type="radio" name="medicamentoOcasiones" value="No" required/>No
                            </div>
                            <div class="col-xs-4" id="medicamentoEnOcasiones">
                                <input type="text" class="form-control" name="medicamentoEnOcasiones" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label">&nbsp;<i class="glyphicon glyphicon-flag"></i>&nbsp;&nbsp;¿Alg&uacute;n medicamento que NO puedas tomar?</label>
                            <div class="col-xs-4">
                                <input type="radio" name="medicamentoNoAceptado" value="Si" required/>Si
                                <input type="radio" name="medicamentoNoAceptado" value="No" required/>No
                            </div>
                            <div class="col-xs-4" id="medicamentoEnOcasiones">
                                <input type="text" class="form-control" name="medicamentoEnOcasiones" required/>
                            </div>
                        </div>




                        <div class="form-group">
                            <label class="col-xs-3 control-label">Telefono</label>
                            <div class="col-xs-5">
                                <input type="number" class="form-control" name="telefono" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-xs-3 control-label">&nbsp;<i class="glyphicon glyphicon-flag"></i>&nbsp;&nbsp;Email</label>
                            <div class="col-xs-5">
                                <input type="email" class="form-control" name="email" required/>
                            </div>
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

    <!-- jQuery -->
    <script src=<?php  echo "'" . base_url()?>js/jquery.js<?php echo "'"?>></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=<?php  echo "'" . base_url()?>js/bootstrap.min.js<?php echo "'"?>></script>

   
</body>

</html>