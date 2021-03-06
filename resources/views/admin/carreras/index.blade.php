@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Carreras
@endsection

@section('main-content')
<br>    
<h3 style="text-align:center">Carreras</h3>
<br>
                <!-- Default box -->
                <div class="box">
					<div class="box-header with-border">
						<h3 class="box-title"><a href="#"><button data-toggle="modal" data-target="#myModal" class="btn btn-success" style="important! float:right, padding-bottom:5px;"><i class="fa fa-plus"></i>Agregar nueva carrera</button></a></h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body">
                        <table class="table table-bordered">
                                <thead>
                                    <tr> 
                                        <th>Codigo</th>
                                        <th>Carrera</th>
                                        <th>Departamento</th>
                                        <th>Pnf</th>
                                        <th>status</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($carreras as $key)
                                        <tr> 
                                            <td>{{$key->codigo}}</td>
                                            <td>{{$key->carrera}}</td>
                                            <td>{{$key->departamento->departamento}}</td>
                                            <td>{{$key->pnf->codigo}}</td>
                                            <td>{{$key->status}}</td>
                                            <td>
                                                <a href="#"><button onclick="editar('{{ $key->id }}','{{ $key->codigo }}','{{ $key->carrera }}','{{ $key->departamento->id }}','{{ $key->pnf->id }}')" data-toggle="modal" data-target="#myModal2" class="btn btn-default"><i class="fa fa-plus"></i>Editar</button></a>
                                                <a href="{{ route('carreras_delete', ['id' => $key->id] ) }}" class="btn btn-danger">Eliminar</a>
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
                            <form action="{{ url('/carreras_create')}}" method="GET">
                               @include('admin.carreras.partials.create-fields') 
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
                            <form action="{{ url('/carreras_edit')}}" method="GET">
                               @include('admin.carreras.partials.edit-fields') 
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
@endsection
