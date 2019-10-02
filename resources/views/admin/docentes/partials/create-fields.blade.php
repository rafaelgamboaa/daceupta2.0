<div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" name="nacio" id="nacio" type="text" placeholder="Nacionalidad">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                            <input class="form-control" name="cedula" id="cedula" type="number" placeholder="Cedula">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                            <input class="form-control" name="nombres" id="nombre" type="text" placeholder="Nombre Docente">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                            <input class="form-control" name="apellidos" id="apellido" type="text" placeholder="apellido Docente">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                            <input class="form-control" name="telefono" id="telefono" type="number" placeholder="numero de telefono">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                            <input class="form-control" name="direccion" id="direccion" type="text" placeholder="direccion">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                            <input class="form-control" name="correo" id="correo" type="mail" placeholder="correo electronico">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                            <select name="id_area" class="form-control">
                                    <option selected>Seleccione el area del Docente</option>
                                    @foreach($areas as $key2)
                                        <option value="{{$key2->id}}">{{$key2->area}}</option>    
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                            <select name="id_dedicacion" class="form-control">
                                    <option selected>Seleccione el horario del docente</option>
                                    @foreach($dedicacion as $key3)
                                        <option value="{{$key3->id}}">{{$key3->dedicacion}}</option>    
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                            <select name="id_carrera" class="form-control">
                                    <option selected>Seleccione la carrera</option>
                                    @foreach($carreras as $key4)
                                        <option value="{{$key4->id}}">{{$key4->carrera}}</option>    
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                    </div>