
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" name="codigo" id="codigo" type="text" placeholder="Codigo de la carrera">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                            <input class="form-control" name="carrera" id="carrera" type="text" placeholder="Nombre de la carrera">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <select name="id_departamento" class="form-control">
                                    <option selected>Seleccione el departamento</option>
                                    @foreach($departamentos as $key2)
                                        <option value="{{$key2->id}}">{{$key2->departamento}}</option>    
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <select name="id_pnf" class="form-control">
                                    <option selected>Seleccione el pnf</option>    
                                    @foreach($pnf as $key3)
                                        <option value="{{$key3->id}}">{{$key3->codigo}}</option>    
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>