
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" name="seccion" id="seccion" type="number" placeholder="Numero de seccion">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                            <input class="form-control" name="comentario" id="ccomentario" type="text" placeholder="descripcion de la seccion">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <select name="id_trayecto" class="form-control">
                                    <option selected>Seleccione el trayecto</option>
                                    @foreach($trayectos as $key2)
                                        <option value="{{$key2->id}}">{{$key2->trayecto}}</option>    
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>