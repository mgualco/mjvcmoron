<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Movimiento de Jornada de Vida Cristiana</title>

    <!-- Bootstrap Core CSS -->
    <link href=<?php echo "'" . base_url()?>css/bootstrap.min.css<?php echo "'"?> rel="stylesheet">
    <link href=<?php echo "'" . base_url()?>css/bootstrap.css<?php echo "'"?> rel="stylesheet">

    <!-- Custom CSS -->
    <link href=<?php echo "'" . base_url()?>css/business-casual.css<?php echo "'"?> rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <link href=<?php echo "'" . base_url()?>css/jquery.littlelightbox.css<?php echo "'"?> rel="stylesheet">
    <link href=<?php echo "'" . base_url()?>css/bower_components/font-awesome/css/font-awesome.min.css<?php echo "'"?> rel="stylesheet">
    <link href=<?php echo "'" . base_url()?>css/styles.css<?php echo "'"?> rel="stylesheet">
    
    <link href=<?php echo "'" . base_url()?>lib/fullcalendar.min.css<?php echo "'"?> rel='stylesheet' />
    <link href=<?php echo "'" . base_url()?>lib/fullcalendar.print.min.css<?php echo "'"?> rel='stylesheet' media='print' />
    <script src=<?php echo "'" . base_url()?>lib/moment.min.js<?php echo "'"?>></script>
    <script src=<?php echo "'" . base_url()?>lib/jquery.min.js<?php echo "'"?>></script>
    <script src=<?php echo "'" . base_url()?>lib/fullcalendar.min.js<?php echo "'"?>></script>
    <link href=<?php echo "'" . base_url()?>css/business-casual.css<?php echo "'"?> rel="stylesheet">
    <script>

        $(document).ready(function() {
            
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay',
                    height: 650
                },
                defaultDate: '2016-12-12',
                navLinks: true, // can click day/week names to navigate views
                //editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: [
                    {fechas}
                        {
                            title: '{titulo}',
                            start: '{inicio}',
                            end: '{fin}',
                            url: 'getFile?path={path}'
                        },
                    /*
                    {
                        title: 'Long Event',
                        start: '2016-12-07',
                        end: '2016-12-10'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2016-12-09T16:00:00'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2016-12-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: '2016-12-11',
                        end: '2016-12-13'
                    },
                    {
                        title: 'Meeting',
                        start: '2016-12-12T10:30:00',
                        end: '2016-12-12T12:30:00'
                    },
                    {
                        title: 'Lunch',
                        start: '2016-12-12T12:00:00'
                    },
                    {
                        title: 'Meeting',
                        start: '2016-12-12T14:30:00'
                    },
                    {
                        title: 'Happy Hour',
                        start: '2016-12-12T17:30:00'
                    },
                    {
                        title: 'Dinner',
                        start: '2016-12-12T20:00:00'
                    },
                    {
                        title: 'Birthday Party',
                        start: '2016-12-13T07:00:00'
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: '2016-12-28'
                    }
                    */
                    
                    {/fechas}
                ]
            });
            
        });

    </script>
</head>

<body>
    
    <div id='calendar'></div>
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

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    
                    <h2 class="intro-text text-center">Fechas
                        <strong>a tener en cuenta</strong>
                    </h2>
                    <hr>
                    
                    <hr class="visible-xs">
                    <img src=<?php echo "'" . base_url()?>img/fechas/invitacion_fondo_celeste.png<?php echo "'"?> class="img-responsive col-centered">
                    <div class="col-lg-3 col-centered">
                        <br/>
                        <hr>

                        <a href=<?php echo "'" . base_url()?>calendario/index<?php echo "'"?> target="_blank">
                            <img src=<?php echo "'" . base_url()?>img/fechas/calendario_actividades.png<?php echo "'"?> class="img-responsive col-centered">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

        

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <ul class="nav navbar-nav">
                        <li><a href="https://www.facebook.com/people/Mjvc-Moron/100008310218579" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/MjvcMoron?s=09" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <!--
                        <li><a href="https://www.youtube.com/user/laboratoriolaca" target="_blank" title="YouTube"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="https://www.pinterest.com/laboratoriolaca/" target="_blank" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="http://instagram.com/laboratoriolaca" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>-->
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
       
        
    </script>
</body>

</html>