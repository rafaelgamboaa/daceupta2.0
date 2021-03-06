@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Carreras
@endsection

@section('main-content')
<br>    
<h3 style="text-align:center">Cargas Academicas</h3>
<br>
                <!-- Default box -->
                <div class="box">
					<div class="box-header with-border">
                    <h3 class="box-title"><a href="#"><button data-toggle="modal" data-target="#myModal" class="btn btn-success" style="important! float:right, padding-bottom:5px;"><i class="fa fa-plus"></i>Agregar nueva seccion</button></a></h3>
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body">
                        <table class="table table-bordered">
                                <thead>
                                    <tr> 
                                        <th>Nombre Docente</th>
                                        <th>Materia</th>
                                        <th>Sede</th>
                                        <th>Turno</th>
                                        <th>Seccion</th>
                                        <th>Periodo</th>
                                        <th>Status</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($personal as $key)
                                        <tr> 
                                            <td>{{$key->docente->nombres}} {{$key->docente->apellidos}}</td>
                                            <td>{{$key->materia->materia}}</td>
                                            <td>{{$key->sede->sede}}</td>
                                            <td>{{$key->turno->turnos}}</td>
                                            <td>Seccion {{$key->seccion->seccion}} - Trayecto {{$key->seccion->id_trayecto}} </td>
                                            <td>{{$key->periodo->periodo}}</td>
                                            <td>{{$key->status}}</td>
                                        </tr>
                                    @endforeach()
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
                            <h4>Nuevo Registro</h4>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('/personal_create')}}" method="GET">
                               @include('admin.personal.partials.create-fields') 
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
                            <h4>Editar registro</h4>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('/personal_edit')}}" method="GET">
                               @include('admin.personal.partials.edit-fields') 
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
    $(document).ready(function(){
        alert('holaaa');
    });
</script>  
@endsection
