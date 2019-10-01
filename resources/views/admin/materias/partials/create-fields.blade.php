<div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" name="codigo" id="codigo" type="text" placeholder="Codigo de la materia">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                            <input class="form-control" name="materia" id="materia" type="text" placeholder="Nombre de la materia">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                            <input class="form-control" name="unidad_c" id="unidad_c" type="text" placeholder="Unidades de credito">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                            <input class="form-control" name="num_fases" id="num_fases" type="text" placeholder="fases de la materia">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                            <select class="form-control" name="malla" id="malla">
                                    <option selected>Malla de la Materia</option>
                                    <option value="0">MALLA 0</option>
                                    <option value="1">MALLA 1</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select name="id_trayecto" class="select2 form-control">
                                        <option selected>Seleccionar trayecto</option>
                                        @foreach($trayectos as $key2)
                                            <option value="{{$key2->id}}">{{$key2->trayecto}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <select class="form-control" name="status" id="status">
                                    <option selected>Seleccione el status de la Materia</option>
                                    <option value="si">SI</option>
                                    <option value="no">NO</option>
                                </select>
                            </div>
                        </div>
                    </div>