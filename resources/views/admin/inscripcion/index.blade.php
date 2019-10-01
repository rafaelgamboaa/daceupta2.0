@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Departamentos
@endsection


@section('main-content')
<br>    
<h3 style="text-align:center">Inscripcion de estudiantes</h3>
<br>
<form action="{{ url('/datosbasicos_create')}}" method="GET">
                <!-- Default box -->
                <div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Datos personales</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-md-3">
								<label for="nombre">Nombre</label>
                  				<input type="text" class="form-control" name="nombres" id="nombres" placeholder=".col-xs-3">
                			</div>
							<div class="col-md-3">
								<label for="apellido">Apellido</label>
                  				<input type="text" class="form-control" name="apellidos" id="apellidos" placeholder=".col-xs-3">
                			</div>
							<div class="col-md-3">
								<label for="nacio">Nacionalidad</label>
								 <select class="form-control" name="nacio" id="nacio">
								 	<option selected>Seleccione su nacionalidad</option>
									 <option value="Venezolano">Venezolano</option>
									 <option value="Extranjero">Extranjero</option>
								 </select> 
                			</div>
							<div class="col-md-3">
								<label for="cedula">Cedula</label>
                  				<input type="number" class="form-control" name="cedula" id="cedula" placeholder=".col-xs-3">
                			</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-3">
								<label for="paisn">Pais Nacionalidad</label>
                  				<input type="text" class="form-control" name="pais_n" id="pais_n" placeholder=".col-xs-3">
                			</div>
							<div class="col-md-3">
								<label for="edo_civil">Estado Civil</label>
                  				<input type="text" class="form-control" name="edo_civil" id="edo_civil" placeholder=".col-xs-3">
                			</div>
							<div class="col-md-3">
								<label for="fecha_nac">fecha Nacimiento</label>
                  				<input type="date" class="form-control" name="fecha_nac" id="fecha_nac" placeholder=".col-xs-3">
                			</div>
							<div class="col-md-3">
								<label for="telefono">Telefono</label>
                  				<input type="number" class="form-control" name="telefono" id="telefono" placeholder=".col-xs-3">
                			</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-3">
								<label for="fecha_gradu">Fecha de Graduación</label>
								<input type="date" class="form-control" name="fecha_gradu" id="fecha_gradu" placeholder=".col-xs-3">
                			</div>
							<div class="col-md-3">
								<label for="titulo_ob">Titulo Obtenido</label>
								<select class="form-control" name="titulo_ob" id="titulo_ob">
									 	<option selected>Titulo que posee</option>
										 <option value="Bachiller">Bachiller</option>
										 <option value="Licenciado">Licenciado</option>
										 <option value="Ingeniero">Ingeniero</option>
								</select> 
                			</div>
						</div>
						
					</div>
					<!-- /.box-body -->
		        </div>
				<!-- /.box -->

                <!-- Default box -->
                <div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Direccion y Datos Fisicos</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-md-3">
								<label for="direccion">Direccion</label>
                  				<input type="text" class="form-control" name="direccion" id="direccion" placeholder=".col-xs-3">
                			</div>
							<div class="col-md-3">
								<label for="id_ciudad">Ciudad</label>
                  				<input type="text" class="form-control" name="id_ciudad" id="id_ciudad" placeholder=".col-xs-3">
                			</div>
							<div class="col-md-3">
								<label for="id_municipio_nac">Municipio</label>
                  				<input type="text" class="form-control" name="id_municipio_nac" id="id_municipio_nac" placeholder=".col-xs-3">
                			</div>
							<div class="col-md-3">
								<label for="id_parroquia">Parroquia</label>
                  				<input type="text" class="form-control" name="id_parroquia" id="id_parroquia" placeholder=".col-xs-3">
                			</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-3">
								<label for="zona_postal">Zona Postal</label>
                  				<input type="number" class="form-control" name="zona_postal" id="zona_postal" placeholder=".col-xs-3">
                			</div>
						</div>
					</div>	
					<!-- /.box-body -->
		        	</div>
				<!-- /.box -->

                <!-- Default box -->
                <div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Discapacidad, Etnia y Genero</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-md-3">
								<label for="discapacidad">Discapacidad</label>
								<select class="form-control" name="discapacidad" id="discapacidad">
									 	<option selected>¿Posee alguna discapacidad?</option>
										 <option value="Si">SI</option>
										 <option value="No">NO</option>
								</select> 
                			</div>
							<div class="col-md-3">
								<label for="genero">Genero</label>
								<select class="form-control" name="genero" id="genero">
									 	<option selected>Seleccione su genero</option>
										 <option value="M">Masculino</option>
										 <option value="F">Femenino</option>
								</select> 
                			</div>
							<div class="col-md-3">
								<label for="etnia">Etnia</label>
								<select class="form-control" name="etnia" id="etnia">
									 	<option selected>Seleccione su genero</option>
										 <option value="M">Masculino</option>
										 <option value="F">Femenino</option>
								</select> 
                			</div>
						</div>
						<hr>
					</div>
					<!-- /.box-body -->
		        </div>
					<button type="submit" class="btn btn-success" style="margin: auto; display: block; width:200px; border-radius:4px;">Registrar Estudiante</button>
				<!-- /.box -->
				</form>
   
@endsection
