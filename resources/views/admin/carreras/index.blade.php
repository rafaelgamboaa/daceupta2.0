@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Departamentos
@endsection


@section('main-content')
    <div class="content-wrapper"> 
        <a href="#"><button data-toggle="modal" data-target="#myModal" class="btn btn-success" style="important! float:right, padding-bottom:5px;"><i class="fa fa-plus"></i>Agregar nueva carrera</button></a>
        <section class="content-header">
            @yield('contentheader_tittle','Carreras')
        </section>
	    <div class="container-fluid spark-screen">
            <br>
            <br>
	    	<div class="row">
	    		<div class="col-md-8 col-md-offset-2">

	    			<table class="table table-bordered">
                        <thead>
                            <tr> 
                                <th>Nombre</th>
                                <th>Código</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($carreras as $key)
                                <tr> 
                                    <td>{{$key->nombre}}</td>
                                    <td>{{$key->codigo}}</td>
                                    <td>
                                        <a href="#"><button onclick="editar('{{ $key->id }}','{{ $key->nombre }}','{{ $key->codigo }}')" data-toggle="modal" data-target="#myModal2" class="btn btn-default"><i class="fa fa-plus"></i>Editar</button></a>
                                        <a href="{{ route('carreras_delete', ['id' => $key->id] ) }}" class="btn btn-danger">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach()
                        </tbody>
                    </table>

	    		</div>
	    	</div>
	    </div>
    </div>

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
    function editar(id,nombre,codigo){
        $('#id').val(id)
        $('#n').val(nombre)
        $('#c').val(codigo)
    }
</script>  
@endsection