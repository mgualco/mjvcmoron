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
            
            <!-- /.navbar-collapse -->
        </div>
        
        <!-- /.container -->
    </nav>
    <br/><br/>
    <div class="container">
                        <script type="text/javascript">
                            function mostrarMensajes(errores){
                                for(i = 0; i < errores.length; i++){
                                    $("#"+errores[i]).get(0).type = 'label';
                                    $("#"+errores[i]).addClass("visible");
                                }
                            }
                        </script>
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Carga tu <strong>plegaria</strong>
                    </h2>
                    <hr>
                    
                    <br/><br/>

                    <form id="contactForm" class="form-horizontal" method="post" action=<?php echo "'".base_url()?>plegarias/cargaPlegaria<?php echo "'"?>>
                        <div class="form-group">
                            <label class="col-xs-3 control-label">&nbsp;&nbsp;&nbsp;De</label>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" id="nombreDe" name="nombreDe" placeholder="Ingrese su nombre completo"/>
                            </div>
                            
                        </div>

                        <div class="form-group">
                            <label class="col-xs-3 control-label">&nbsp;<i class="glyphicon glyphicon-flag"></i>&nbsp;&nbsp;Para</label>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" id="nombrePara" name="nombrePara" placeholder="Ingrese la persona a la que se dirije la plegaria" required/>
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            <label class="col-xs-3 control-label"><i class="glyphicon glyphicon-flag"></i>&nbsp;&nbsp;Motivo</label>
                            <div class="col-xs-9">
                                <textarea class="form-control" id="motivo" name="motivo" rows="7" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-9 col-xs-offset-3">
                                <button type="button" id="btnCargaPlegaria" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                        <label class="col-xs-3 control-label"><i class="glyphicon glyphicon-flag"></i>&nbsp; Campos obligatorios</label>
                    </form>
                    <div id="notificacionExito" class="oculto">
                        <div class='alert alert-success' id='divMensajeExito'>
                            <label><strong>Plegaria cargada con &eacute;xito</strong></label>
                        </div>
                    </div>
                    <div id="notificacionFallo" class="oculto">
                        <div class='alert alert-warning' id='divMensajeExito'>
                            <label><strong>Hubo un inconveniente. Le rogamos que proceda nuevamente m&aacute;s tarde</strong></label>
                        </div>
                    </div>
                    <script type="text/javascript">
                        function notificacion(flag){
                            if(flag){
                                $('#nombreDe').val('');
                                $('#nombrePara').val('');
                                $('#motivo').val('');
                                $('#notificacionFallo').addClass('oculto');
                                $('#notificacionExito').addClass('visible');
                            }else{
                                $('#nombreDe').val('');
                                $('#nombrePara').val('');
                                $('#motivo').val('');
                                $('#notificacionExito').addClass('oculto');
                                $('#notificacionFallo').addClass('visible'); 
                            }
                        }
                    </script>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('#btnCargaPlegaria').click(function(){
                var dataString = $('#contactForm').serialize();
                $.post('<?php echo base_url()?>plegarias/cargaPlegaria',{dataString},function(response){
                    if(response === true){
                        notificacion(true);
                    }else{
                        notificacion(false);
                    }
                });
            });
                
        });

    </script>
</body>

</html>