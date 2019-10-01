
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" name="codigo" id="c" type="text" placeholder="codigo de departamento">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                            <input class="form-control" name="carrera" id="ca" type="text" placeholder="Nombre de departamento">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <select name="id_departamento" class="form-control" id="dpto">
                                    @foreach($departamentos as $key2)
                                        <option value="{{$key2->id}}">{{$key2->departamento}}</option>    
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <select name="id_pnf" class="form-control" id="pnf">
                                    @foreach($pnf as $key3)
                                        <option value="{{$key3->id}}">{{$key3->codigo}}</option>    
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>