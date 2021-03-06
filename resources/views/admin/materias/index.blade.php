@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Carreras
@endsection

@section('main-content')
<br>    
<h3 style="text-align:center">Materias</h3>
<br>
                <!-- Default box -->
                <div class="box">
					<div class="box-header with-border">
						<h3 class="box-title"><a href="#"><button data-toggle="modal" data-target="#myModal" class="btn btn-success" style="important! float:right, padding-bottom:5px;"><i class="fa fa-plus"></i>Agregar nueva materia</button></a></h3>

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
                                        <th>Materia</th>
                                        <th>UC</th>
                                        <th>N Fases</th>
                                        <th>Malla</th>
                                        <th>Trayecto</th>
                                        <th>Status</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($materias as $key)
                                        <tr> 
                                            <td>{{$key->codigo}}</td>
                                            <td>{{$key->materia}}</td>
                                            <td>{{$key->unidad_c}}</td>
                                            <td>{{$key->num_fases}}</td>
                                            <td>{{$key->malla}}</td>
                                            <td>{{$key->id_trayecto}}</td>
                                            <td>{{$key->status}}</td>
                                            <td>
                                                <a href="#"><button onclick="editar('{{ $key->id }}','{{ $key->codigo }}','{{ $key->materia }}','{{ $key->unidad_c }}','{{ $key->num_fases }}','{{ $key->malla }}','{{ $key->id_trayecto }}','{{ $key->status }}')" data-toggle="modal" data-target="#myModal2" class="btn btn-default"><i class="fa fa-plus"></i>Editar</button></a>
                                                <a href="{{ route('materias_delete', ['id' => $key->id] ) }}" class="btn btn-danger">Eliminar</a>
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
                <h4>Nueva Materia</h4>
            </div>
            <div class="modal-body">
                <form action="{{ url('/materias_create')}}" method="GET">
                   @include('admin.materias.partials.create-fields') 
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
                <h4>Editar Materia</h4>
            </div>
            <div class="modal-body">
                <form action="{{ url('/materias_edit')}}" method="GET">
                   @include('admin.materias.partials.edit-fields') 
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
    function editar(id,codigo,materia,unidad_c,num_fases,malla,id_trayecto,status){
        $('#id').val(id)
        $('#co').val(codigo)
        $('#ma').val(materia)
        $('#un').val(unidad_c)
        $('#nu').val(num_fases)
        $('#mall').val(malla)
        $('#i').val(id_trayecto)
        $('#s').val(status)
    }
</script>  
@endsection


