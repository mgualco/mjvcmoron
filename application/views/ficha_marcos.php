<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href=<?php echo "'" . base_url()?>vendors/bootstrap/css/bootstrap.min.css<?php echo "'"?> rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href=<?php echo "'" . base_url()?>vendors/metisMenu/metisMenu.min.css<?php echo "'"?> rel="stylesheet">

    <!-- Custom CSS -->
    <link href=<?php echo "'" . base_url()?>dist/css/sb-admin-2.css<?php echo "'"?> rel="stylesheet">

    <!-- Custom Fonts -->
    <link href=<?php echo "'" . base_url()?>vendors/font-awesome/css/font-awesome.min.css<?php echo "'"?> rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

      
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header ">Ficha Medica </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-11">
                                    <form class="form-horizontal role="form">
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
										
																		
                                    </form>
                                </div>
						
                            
                            </div>
							
						
							
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src=<?php echo "'" . base_url()?>vendors/jquery/jquery.min.js<?php echo "'"?>></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=<?php echo "'" . base_url()?>vendors/bootstrap/js/bootstrap.min.js<?php echo "'"?>></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=<?php echo "'" . base_url()?>vendors/metisMenu/metisMenu.min.js<?php echo "'"?>></script>

    <!-- Custom Theme JavaScript -->
    <script src=<?php echo "'" . base_url()?>dist/js/sb-admin-2.js<?php echo "'"?>></script>

</body>

</html>
