<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Movimiento de Jornada de Vida Cristiana</title>

    <link href=<?php echo "'" . base_url()?>css/bootstrap.min.css<?php echo "'"?> rel="stylesheet">
    <link href=<?php echo "'" . base_url()?>css/bootstrap.css<?php echo "'"?> rel="stylesheet">

    <!-- Custom CSS -->
    <link href=<?php echo "'" . base_url()?>css/business-casual.css<?php echo "'"?> rel="stylesheet">
    <link href=<?php echo "'" . base_url()?>css/jquery.littlelightbox.css<?php echo "'"?> rel="stylesheet">

    
   
    <link href=<?php echo "'" . base_url()?>css/bower_components/font-awesome/css/font-awesome.min.css<?php echo "'"?> rel="stylesheet">
    <link href=<?php echo "'" . base_url()?>css/styles.css<?php echo "'"?> rel="stylesheet">
    
    <link href=<?php echo "'" . base_url()?>css/font-awesome.min.css<?php echo "'"?> rel="stylesheet">
    <link href=<?php echo "'" . base_url()?>css/bootstrap-social.css<?php echo "'"?> rel="stylesheet">

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
        {comisiones}
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                        <h2 class="intro-text text-center">Comisi&oacute;n
                            <strong>{nombre}</strong>
                        </h2>
                        <hr>
                        <img class="img-responsive img-border img-left" src=<?php  echo "'" . base_url()?>{pathImagen}<?php echo "'"?> alt="">
                        <hr class="visible-xs">
                        <p>
                        Nexo Secretariado: {nexo}
                        <br/>
                        Coordinadores: {coordinadores} 
                        <div class="right" id="{alias}">
                            <a href=<?php  echo "'" . base_url()?>plegarias/cargaPlegaria<?php echo "'"?>>    
                                <img src=<?php  echo "'" . base_url()?>{imgLink}<?php echo "'"?> alt="Cargar plegaria">
                            </a>
                            <p class="leyendaPlegarias">Cargar plegaria</p>
                        </div>
                        <div class="right" id="{aliaslink2}">
                            <a href=<?php  echo "'" . base_url()?>plegarias/listarPlegarias<?php echo "'"?>>    
                                <img src=<?php  echo "'" . base_url()?>{imgLink2}<?php echo "'"?> alt="Ver plegarias">
                            </a>
                            <p class="leyendaPlegarias">Listado plegarias</p>
                        </div>
                        <br/>
                        <a class="btn btn-block btn-social btn-facebook" href="#"><img src=<?php  echo "'" . base_url()?>img/imgFacebook.png<?php echo "'"?>>{nombre}</a>
                        </p>
                        
                </div>
            </div>
        </div>
        {/comisiones}
               
    </div>

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
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script src=<?php echo "'" . base_url()?>js/jquery.littlelightbox.js<?php echo "'"?>></script>
    <script type="text/javascript">
            $('.lightbox').littleLightBox(); 
            $(document).ready(function(){
                $('#link').show(); 
                $('#link2').show();
                $('#pyd').hide();
                $('#pre').hide();
                $('#pos').hide();
                $('#fin').hide();
                $('#eve').hide();
                $('#pyd2').hide();
                $('#pre2').hide();
                $('#pos2').hide();
                $('#eve2').hide();
                $('#fin2').hide();
            });   
    </script>
</body>

</html>
