@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Departamentos
@endsection

@section('main-content')
<br>    
<h3 style="text-align:center">Departamentos</h3>
<br>
                <!-- Default box -->
                <div class="box">
					<div class="box-header with-border">
						<h3 class="box-title"><a href="#"><button data-toggle="modal" data-target="#myModal" class="btn btn-success" style="important! float:right, padding-bottom:5px;"><i class="fa fa-plus"></i>Agregar nuevo departamento</button></a></h3>

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
                                        <th>Departamento</th>
                                        <th>status</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($departamentos as $key)
                                        <tr> 
                                            <td>{{$key->codigo}}</td>
                                            <td>{{$key->departamento}}</td>
                                            <td>{{$key->status}}</td>
                                            <td>
                                                <a href="#"><button onclick="editar('{{ $key->id }}','{{ $key->codigo }}','{{ $key->departamento }}')" data-toggle="modal" data-target="#myModal2" class="btn btn-default"><i class="fa fa-plus"></i>Editar</button></a>
                                                <a href="{{ route('departamentos_delete', ['id' => $key->id] ) }}" class="btn btn-danger">Eliminar</a>
                                            </td>
                                        </tr>
                                    @endforeach()
                                </tbody>
                            </table>
					</div>
					<!-- /.box-body -->
		        </div>
				<!-- /.box -->

                <!-- Default box -->
                <div class="box">
					<div class="box-header with-border">
                    <h3 class="box-title"><a href="#"><button data-toggle="modal" data-target="#myModal3" class="btn btn-success" style="important! float:right, padding-bottom:5px;"><i class="fa fa-plus"></i>Agregar nuevo PNF</button></a></h3>

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
                                            <th>Status</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pnf as $key2)
                                            <tr> 
                                                <td>{{$key2->codigo}}</td>
                                                <td>{{$key2->status}}</td>
                                                <td>
                                                    <a href="#"><button onclick="editar2('{{ $key2->id }}','{{ $key2->codigo }}')" data-toggle="modal" data-target="#myModal4" class="btn btn-default"><i class="fa fa-plus"></i>Editar</button></a>
                                                    <a href="{{ route('pnf_delete', ['id' => $key2->id] ) }}" class="btn btn-danger">Eliminar</a>
                                                </td>
                                            </tr>
                                        @endforeach()
                                    </tbody>
                        </table>
					</div>
					<!-- /.box-body -->
		        </div>
                <!-- /.box -->
                
            <!--DEPARTAMENTOS-->
                <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Nuevo Departamento</h4>
            </div>
            <div class="modal-body">
                <form action="{{ url('/departamentos_create')}}" method="GET">
                   @include('admin.departamentos.partials.create-fields') 
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
                <h4>Editar Departamento</h4>
            </div>
            <div class="modal-body">
                <form action="{{ url('/departamentos_edit')}}" method="GET">
                   @include('admin.departamentos.partials.edit-fields') 
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

<!--PNF-->
<div id="myModal3" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Nuevo PNF</h4>
            </div>
            <div class="modal-body">
                <form action="{{ url('/pnf_create')}}" method="GET">
                   @include('admin.departamentos.partials.create2-fields') 
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
                <h4>Editar PNF</h4>
            </div>
            <div class="modal-body">
                <form action="{{ url('/pnf_edit')}}" method="GET">
                   @include('admin.departamentos.partials.edit2-fields') 
                   <input type="hidden" id="id2" name="id2">
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
    function editar(id,codigo,departamento){
        $('#id').val(id);
        $('#c').val(codigo);
        $('#d').val(departamento);
    }
    function editar2(id,codigo){
        $('#id2').val(id);
        $('#co').val(codigo);
    }
</script>  
@endsection

