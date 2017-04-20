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
    <link href=<?php echo "'" . base_url()?>css/modern-business.css<?php echo "'"?> rel="stylesheet">
    <link href=<?php echo "'" . base_url()?>css/font-awesome.min.css<?php echo "'"?> rel="stylesheet">
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <link href=<?php echo "'" . base_url()?>css/bower_components/font-awesome/css/font-awesome.min.css<?php echo "'"?> rel="stylesheet">
    <link href=<?php echo "'" . base_url()?>css/styles.css<?php echo "'"?> rel="stylesheet">
    <link href=<?php echo "'" . base_url()?>css/bootstrap-social.css<?php echo "'"?> rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">MJVC</div>
    <?php include "decolores.php"?>

    </div>

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
                <div class="col-lg-12 text-center">
                    <!--
                    <div id="carousel-example-generic" class="carousel slide">

                        
                        <div class="carousel-inner">
                                <div class="item active">
                                    <img class="img-responsive img-full" src=<?php  echo "'" . base_url()?>img/movimiento_origen.jpg<?php echo "'"?> alt="">
                                </div>
                                {imagenesSlider}
                                <div class="item">
                                    <img class="img-responsive img-full" src=<?php  echo "'" . base_url()?>img/{nombre}<?php echo "'"?> alt="">
                                </div>
                                {/imagenesSlider}
                                
                        </div>
                        

                        
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    -->
                    <h2 class="brand-before">
                        <small>Bienvenidos al sitio del Movimiento de Jornadas de Vida Cristiana</small>
                    </h2>
                    <!--
                    <h1 class="brand-name">Business Casual</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Start Bootstrap</strong>
                        </small>
                    </h2>
                    -->
                </div>
            </div>
        </div>
        <!--
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    
                    <h2 class="intro-text text-center">¿Qu&eacute; es el
                        <strong>MJVC?</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/intro-pic.jpg" alt="">
                    <hr class="visible-xs">
                    <p>Es un movimiento de lglesia y para la lglesia. No es un movimiento independiente. Su finalidad es insertar a los J&oacute;venes directamente en sus respectivas parroquias. Por lo tanto, por ser de lglesia y netamente diocesano, ningún secretariado puede funcionar sin el reconocimiento del Obis­po, teniendo la obligaci&oacute;n, cada secretariado, de mantener constante comunicaci&oacute;n con su Pastor en cuanto a las actividades propias del movimiento como as&iacute; también en la parti­cipaci&oacute;n diocesana: "NADA SIN EL OBISPO". 
                    Dios quiso que su Pueblo se ordenara jer&aacute;rquicamente: 
                    "Cristo, el Se&ntilde;or, para asegurar al Pueblo de Dios, Pastores y medios de crecimiento, ha instituido en la lglesia diversos ministerios que tienden al bien de todo el Cuerpo. Los minis­tros, disponen de potestad, están al servicio de sus herma­nos... As&iacute; los Obispos, sucesores de los Ap&oacute;stoles, con el sucesor de Pedro, Vicario de Cristo y Jefe invisible de toda la lglesia, tienen el cargo de dirigir la casa de Dios" (L.G. 18). 
                    En el dinamismo de la acci&oacute;n pastoral de la lglesia "los Obispos tienen el sagrado derecho y el deber de regular todo cuanto pertenece a la organizaci&oacute;n del apostolado" (L.G. 27). "Los Obispos, cada uno en su di&oacute;cesis, son principio y fundamento de unidad de sus Iglesias particulares" (L.G. 23).</p>
                </div>
            </div>
        </div>
        -->
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">¿Que es el
                        <strong>MOVIMIENTO DE JORNADA DE VIDA CRISTIANA?</strong>
                    </h2>
                    <hr>
                    <p>Es un movimiento de IGLESIA y para la IGLESIA. En su finalidad, quiere insertar a los j&oacute;venes en sus respectivas parroquias y siendo de la iglesia y diocesano, trabaja con el reconocimiento de Obispo. Nace y vive en la Iglesia.<br/>
                    Además es un Movimiento de jóvenes: “j&oacute;venes, ustedes son la iglesia, son mi esperanza…” Juan Pablo II. Son los jóvenes los que podrán devolverle al cristianismo su dimensión heroica, en una época de actitudes absurdas, cómodas y cobardes.Los jóvenes de hoy, convencidos y comprometidos con un cristianismo autentico y vivencia. Aseguran la orientación  de las estructuras hacia Dios, es una mañana que inexorable lo tendrán en sus manos.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>ESENCIA Y FINALIDAD DEL MJVC</strong>
                    </h2>
                    <hr>
                    <p>El MJVC es CRISTOCENTRICO, esto significa que es Cristo quien está en el punto de partida y de llegada, de un movimiento circular que dé El desciende hasta el corazón de los hombres, para que todos juntos volvamos a EL y con El al Padre pero, por supuesto, siempre de la mano de Maria nuestra guía y modelo. Pretende llevar al joven a la VIVENCIA DE LA VIDA, (CRISTO) como verdaderos HOMBRES , MUJERES que asumiendo a Cristo como maestro, vayan por un camino de SANTIDAD a cumplir esa misión APOSTOLICA que anuncian los Evangelios. Que opten por Cristo integralmente. Esta opción lograra la unidad entre la vida y la fe. La GRACIA SANTIICANTE es y será siempre la regla de nuestra vida, la fuerza que pugna por transformar nuestra vida. La Gracia es la presencia inmediata de DIOS en nuestra vida, es la fuerza impulsadora. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>METODOLOGIA DEL MJVC</strong>
                    </h2>
                    <hr>
                    <p>Se conduce al Joven a un triple encuentro: CONSIGO MISMO, CON DIOS Y CON LOS DEMAS.<br/>
                    A través de dos medios: PROCLAMACION DE LA PALABRA Y TESTIMONIO.<br/>
                    Con método la pedagogía propia: esto posibilita que se cree en el joven una disposición a la integración del grupo de la jornada y le ayude a estar abierto al cambio y al compromiso.  Junto al método, la Oración es el medio principal que se confía para el buen éxito de la jornada. En esto se manifiesta una devoción fuerte al espíritu santo y una devoción Mariana. Justamente Maria es el ejemplo del Si a la entrega a la voluntad de Dios.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>¿COMO LLEGA EL MJVC A LA ARGENTINA?</strong>
                    </h2>
                    <hr>
                    <p>Un poco de Historia... Nos remontamos hacia fines de la década del cuarenta, allí se inician los "Cursillos de Cristiandad" que nacen como fruto de trabajos y meditación, de formar una mentalidad y cuajar un núcleo de ideas, ajenos a cualquier improvisación. El primer cursillo nace en 1949, iniciado para jóvenes. Vistos los logros obtenidos, fue nutriéndose de adultos, quienes resultaron más perseverantes, el tiempo hizo que los cursillos se orientaran hacia los adultos y desde España se irradian sobre el mundo. Con la necesidad de conquistar jóvenes, surge en México las "Jornadas de Vida Cristiana", modalidad independiente de los cursillos de Cristiandad. En 1966 viajan a México los Padres AdanRecofsky y Adolfo Ruhl con la finalidad de conocer y empaparse del Movimiento de Cursillos de Cristiandad pero allí se encuentran con el Movimiento de Jornadas de Vida Cristiana para Jóvenes. En octubre de 1967 tuvo lugar la primera jornada para muchachos en Rafael Calzada, diócesis de Lomas de Zamora. Con el transcurso del tiempo, se van sumando otros sacerdotes, llevando a Rafael Calzada jóvenes de otros lugares y con el tiempo comenzaron a realizarse jornadas directamente en otras diócesis. Así el Movimiento se extendió, creando comunidades, enriqueció a parroquias, revitalizando grupos de otros movimientos o instituciones juveniles.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>¿COMO LLEGA EL MJVC A MORON?</strong>
                    </h2>
                    <hr>
                    <p>Todo se inició cuando el Padre Jorge Juan Manuel y Fray Miguel Monaldi, sacerdotes franciscanos, decidieron traer el Movimiento a nuestra diócesis. Muchas cosas pasaron desde aquellos días de agosto de 1971, cuando se realizó la primera Jornada, a pocas cuadras de la Parroquia Maria Reina, donde el Padre Jorge era Párroco. Hoy, podemos ver y maravillarnos por todo lo obrado por el Señor, valiéndose del Movimiento. Ya han pasado 40 años de aquella primera jornada realizada en nuestra diócesis... Si hacemos un balance del camino que hemos recorrido en la Diócesis de Moron, podemos decir que el resultado es muy positivo, ya que el Movimiento ha aportado mucho a nuestra Iglesia diocesana. Y esto no es hablar bien de quienes la componen, sino del SEÑOR que hace posible que EXISTA. ... A la hora de hacer una reseña de los frutos concretos de nuestro querido M.J.V.C. , podríamos señalar que a partir de nuestra diócesis el Movimiento ha colaborado para su expansión en diócesis vecinas y han sido jóvenes jornaditas, quienes iniciaron en Moron el Movimiento de Caminos de Vida Cristiana.
                    Nosotros, Movimiento de Jornadas de Moron, acción y presencia del Espíritu Santo, agradecemos a Jesucristo, por estos 45 años de actividad... tendientes a evangelizar a los Jóvenes "esperanza de la Iglesia y del mundo" (Juan Pablo II) .
                    Somos un movimiento de Iglesia y para los jóvenes, pretendemos la vivencia de la vida como Hombre/Mujer, Cristiano/a, Santo/a, Apóstol. ... Debemos ser instrumento de Pastoral de la Iglesia... Debemos "transmitir la palabra de Dios, para despertar y alimentar la Fe"... "Porque creemos en el Dios que ama a los Jóvenes... No nos cansemos de hacer el bien"...</p>
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

    <!-- Script to Activate the Carousel 
    
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    -->
</body>

</html>
