@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Secciones
@endsection

@section('main-content')
<br>    
<h3 style="text-align:center">Secciones</h3>
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
                                        <th>Seccion</th>
                                        <th>Comentario</th>
                                        <th>Trayecto</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($secciones as $key)
                                        <tr> 
                                            <td>{{$key->seccion}}</td>
                                            <td>{{$key->comentario}}</td>
                                            <td>{{$key->trayecto->trayecto}}</td>
                                            <td>
                                                <a href="#"><button onclick="editar('{{ $key->id }}','{{ $key->seccion }}','{{ $key->comentario }}','{{ $key->trayecto->id }}')" data-toggle="modal" data-target="#myModal2" class="btn btn-default"><i class="fa fa-plus"></i>Editar</button></a>
                                                <a href="{{ route('secciones_delete', ['id' => $key->id] ) }}" class="btn btn-danger">Eliminar</a>
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
                            <form action="{{ url('/secciones_create')}}" method="GET">
                               @include('admin.secciones.partials.create-fields') 
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
                            <form action="{{ url('/secciones_edit')}}" method="GET">
                               @include('admin.secciones.partials.edit-fields') 
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
    function editar(id,seccion,comentario,trayecto){
        $('#id').val(id);
        $('#s').val(seccion);
        $('#c').val(comentario);
        $('#trayecto').val(trayecto);
    }
</script>  
@endsection
