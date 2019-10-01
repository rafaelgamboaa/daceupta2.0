
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" name="trayecto" id="t" type="number" placeholder="Numero de trayecto">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <select name="id_carrera" class="form-control" id="c">
                                    <option selected>Seleccione la carrera</option>
                                    @foreach($carreras as $key2)
                                        <option value="{{$key2->id}}">{{$key2->carrera}}</option>    
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>