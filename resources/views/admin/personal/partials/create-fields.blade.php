<div class="form-group">
     <div class="row">
         <div class="col-md-12">
                <select name="id_docente" class="form-control">
                                    <option selected>Docente</option>
                                    @foreach($docente as $key2)
                                        <option value="{{$key2->id}}">{{$key2->nombres}} {{$key2->apellidos}}</option>    
                                    @endforeach
                </select>
         </div>
     </div>
     <br>
     <div class="row">
         <div class="col-md-12">
                    <select name="id_materias" class="form-control">
                                    <option selected>Materia</option>
                                    @foreach($materias as $key3)
                                        <option value="{{$key3->id}}">{{$key3->materia}}</option>    
                                    @endforeach
                    </select>
         </div>
     </div>
     <br>
     <div class="row">
         <div class="col-md-12">
            <select name="id_sede" class="form-control">
                                    <option selected>Sede</option>
                                    @foreach($sede as $key4)
                                        <option value="{{$key4->id}}">{{$key4->sede}}</option>    
                                    @endforeach
            </select>
         </div>
     </div>
     <br>
     <div class="row">
         <div class="col-md-12">
            <select name="id_turno" class="form-control">
                                    <option selected>Turno</option>
                                    @foreach($turno as $key5)
                                        <option value="{{$key5->id}}">{{$key5->turnos}}</option>    
                                    @endforeach
            </select>
         </div>
     </div>
     <br>
     <div class="row">
         <div class="col-md-12">
            <select name="id_seccion" class="form-control">
                                    <option selected>Seccion</option>
                                    @foreach($seccion as $key6)
                                        <option value="{{$key6->id}}"> Seccion {{$key6->seccion}} - Trayecto {{$key6->id_trayecto}} </option>    
                                    @endforeach
            </select>
         </div>
     </div>
     <br>
     <div class="row">
         <div class="col-md-12">
            <select name="id_periodo" class="form-control">
                                    <option selected>Periodo</option>
                                    @foreach($periodos as $key7)
                                        <option value="{{$key7->id}}">{{$key7->periodo}}</option>    
                                    @endforeach
            </select>
         </div>
     </div>
     <br>
</div>