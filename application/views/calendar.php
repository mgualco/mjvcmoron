<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
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
<script src=<?php echo "'" . base_url()?>lib/es.js<?php echo "'"?>></script>
<link href=<?php echo "'" . base_url()?>css/business-casual.css<?php echo "'"?> rel="stylesheet">
<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
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
				{/fechas}
			]
		});
		
	});

</script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>
</head>
<body>
	<div class="brand">MJVC</div>
    <?php include "decolores.php"?>

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


							<div id='calendar'></div>
							<br/>
							<!--
							<div>
					            <br/>
					            <hr>
					        		<a href=<?php echo "'" . base_url()?>welcome/index<?php echo "'"?> target="_self">
					           			<img src=<?php echo "'" . base_url()?>img/volver2.png<?php echo "'"?> class="img-responsive col-centered">
					        		</a>
					        </div>
					    	-->
					    	<br/>
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
                        <p style="font-size: 16px">Copyright &copy; 2016 - Todos los derechos reservados.</p>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src=<?php  echo "'" . base_url()?>js/bootstrap.min.js<?php echo "'"?>></script>
    <script src=<?php echo "'" . base_url()?>js/jquery.littlelightbox.js<?php echo "'"?>></script>
    <script type="text/javascript">   
            $('.lightbox').littleLightBox();    
    </script>
</body>
</html>