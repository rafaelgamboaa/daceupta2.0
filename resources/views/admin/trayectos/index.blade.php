@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Trayectos
@endsection

@section('main-content')
<br>    
<h3 style="text-align:center">Trayectos</h3>
<br>
                <!-- Default box -->
                <div class="box">
					<div class="box-header with-border">
						<h3 class="box-title"><a href="#"><button data-toggle="modal" data-target="#myModal" class="btn btn-success" style="important! float:right, padding-bottom:5px;"><i class="fa fa-plus"></i>Agregar nuevo trayeto</button></a></h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body">
                        <table class="table table-bordered">
                                <thead>
                                    <tr> 
                                        <th>Trayecto</th>
                                        <th>Carrera</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($trayectos as $key)
                                        <tr> 
                                            <td>{{$key->trayecto}}</td>
                                            <td>{{$key->carreras->carrera}}</td>
                                            <td>
                                                <a href="#"><button onclick="editar('{{ $key->id }}','{{ $key->trayecto }}','{{ $key->carreras->id }}')" data-toggle="modal" data-target="#myModal2" class="btn btn-default"><i class="fa fa-plus"></i>Editar</button></a>
                                                <a href="{{ route('trayectos_delete', ['id' => $key->id] ) }}" class="btn btn-danger">Eliminar</a>
                                            </td>
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
                            <h4>Nueva Carrera</h4>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('/trayectos_create')}}" method="GET">
                               @include('admin.trayectos.partials.create-fields') 
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
                            <h4>Editar Carrera</h4>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('/trayectos_edit')}}" method="GET">
                               @include('admin.trayectos.partials.edit-fields') 
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
    function editar(id,trayecto,carreras){
        $('#id').val(id);
        $('#t').val(trayecto);
        $('#c').val(carreras);
    }
</script>  
@endsection