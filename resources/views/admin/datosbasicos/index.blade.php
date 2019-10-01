@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Carreras
@endsection

@section('main-content')
<br>    
<h3 style="text-align:center">Estudiantes</h3>
<br>
                <!-- Default box -->
                <div class="box">
					<div class="box-header with-border">
						<h3 class="box-title"><a href="/inscripcion"><button class="btn btn-success" style="important! float:right, padding-bottom:5px;"><i class="fa fa-plus"></i>Agregar nuevo estudiante</button></a></h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body">
                        <table class="table table-bordered">
                                <thead>
                                    <tr> 
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Cedula</th>
                                        <th>Carrera</th>
                                        <th>Trayecto</th>
                                        <th>Seccion</th>
                                        <th>Periodo</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                            </table>
					</div>
					<!-- /.box-body -->
		        </div>
				<!-- /.box -->
 
            <!--CARRERAS-->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Nuevo estudiante</h4>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('/datosbasicos_create')}}" method="GET">
                               @include('admin.datosbasicos.partials.create-fields') 
                                <button type="submit" class="btn btn-success">Enviar</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <p>Footer</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="myModal2" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Editar estudiante</h4>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('/datosbasicos_edit')}}" method="GET">
                               @include('admin.datosbasicos.partials.edit-fields') 
                               <input type="hidden" id="id" name="id">
                                <button type="submit" class="btn btn-success">Enviar</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <p>Footer</p>
                        </div>
                    </div>
                </div>
            </div>

            <br>    
<h3 style="text-align:center">Estudiantes Preinscritos</h3>
<br>
                <!-- Default box -->
                <div class="box">
					<div class="box-header with-border">
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body">
                        <table class="table table-bordered">
                                <thead>
                                    <tr> 
                                        <th>Nombre y Apellido</th>
                                        <th>Cedula</th>
                                        <th>Municipio</th>
                                        <th>Parroquia</th>
                                        <th>Ciudad</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                            </table>
					</div>
					<!-- /.box-body -->
		        </div>
				<!-- /.box -->
 
            <!--CARRERAS-->
            <div id="myModal3" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Nuevo estudiante</h4>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('/datosbasicos_create')}}" method="GET">
                               @include('admin.datosbasicos.partials.create-fields') 
                                <button type="submit" class="btn btn-success">Enviar</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <p>Footer</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="myModal4" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Editar estudiante</h4>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('/datosbasicos_edit')}}" method="GET">
                               @include('admin.datosbasicos.partials.edit-fields') 
                               <input type="hidden" id="id" name="id">
                                <button type="submit" class="btn btn-success">Enviar</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <p>Footer</p>
                        </div>
                    </div>
                </div>
            </div>



<script type="text/javascript">
    function editar(id,codigo,carrera,departamento,pnf){
        $('#id').val(id);
        $('#c').val(codigo);
        $('#ca').val(carrera);
        $('#dpto').val(departamento);
        $('#pnf').val(pnf);
    }
</script>
<script type="text/javascript">
    $(document).ready(function(){
        alert('holaaa');
    });
</script>  
@endsection
