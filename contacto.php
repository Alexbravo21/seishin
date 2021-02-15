<?php include 'header.php'; ?>

<div class="empresas_cover cover_gen">
    <img src="assets/img/contacto.jpg" alt="" class="img_cover_gen d-none d-md-block">
    <img src="assets/img/contacto_mobile.jpg" alt="" class="img_cover_gen d-block d-md-none">
</div>

<div class="contacto_form_cont container">
    <p class="contacto_titulo">Registro de datos personales</p>
    <form enctype="multipart/form-data">
        <div class="form-group col-12"> 
            <div class="row">
                <label for="full_name_id" class="control-label col-12 col-md-3">Nombre Completo</label>
                <input type="text" class="form-control col-12 col-md-9" id="full_name_id" name="full_name" placeholder="Fabián Castruita Ordoñez">
            </div>
        </div>	

        <div class="form-group col-12"> 
            <div class="row">
                <label for="street1_id" class="control-label col-12 col-md-3">Dirección</label>
                <input type="text" class="form-control col-12 col-md-9" id="street1_id" name="street1" placeholder="Calle, Num, Int, Colonia, CP y Ciudad">
            </div>
        </div>									
                                
        <div class="form-group col-12"> 
            <div class="row">
                <label for="state_id" class="control-label col-12 col-md-3">Estado</label>
                <select class="form-control col-12 col-md-9" id="state_id"></select>
            </div>					
        </div>
        
        <div class="form-group col-12"> 
            <div class="row">
                <label for="telefono" class="control-label col-12 col-md-3">Teléfono</label>
                <input type="text" class="form-control col-12 col-md-9" id="telefono" name="telefono" placeholder="Fijo o celular">
            </div>
        </div>

        <div class="form-group col-12"> 
            <div class="row">
                <label for="mail" class="control-label col-12 col-md-3">Correo electrónico</label>
                <input type="text" class="form-control col-12 col-md-9" id="mail" name="mail" placeholder="seishin@seishin.com.mx">
            </div>
        </div>

        <div class="form-group col-12"> 
            <div class="row">
                <label for="viajar" class="control-label col-12 col-md-3">Disponibilidad<br> para viajar</label>
                <div class="col-12 col-md-9">
                    <div class="row">
                        <div class="col-3">
                            <div class="row">
                                <label for="" class="col-10">Si</label>
                                <input type="radio" class="col-2" id="viajar_si" value="Si" name="disponibilidad_viajar">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <label for="" class="col-10">No</label>
                                <input type="radio" class="col-2" id="viajar_no" value="No" name="disponibilidad_viajar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>	

        <div class="form-group col-12"> 
            <div class="row">
                <label for="viajar" class="control-label col-12 col-md-3">Tipo de trabajo<br> que buscas</label>
                <div class="col-12 col-md-9 text-center">
                    <div class="row">
                        <div class="col-4">
                            <div class="row">
                                <label for="" class="col-10">Tiempo completo</label>
                                <input type="radio" class="col-2" id="tiempo_completo" value="Tiempo completo" name="tipo_trabajo">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <label for="" class="col-10">Trato directo</label>
                                <input type="radio" class="col-2" id="trato_directo" value="Trato directo" name="tipo_trabajo">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <label for="" class="col-10">Por horas</label>
                                <input type="radio" class="col-2" id="horas" value="Por horas" name="tipo_trabajo">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <label for="" class="col-10">Temporal</label>
                                <input type="radio" class="col-2" id="temporal" value="Temporal" name="tipo_trabajo">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <label for="" class="col-10">Traducción de documentos</label>
                                <input type="radio" class="col-2" id="traduccion_documentos" value="Traducción de documentos" name="tipo_trabajo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group col-12"> 
            <div class="row">
                <label for="idiomas" class="control-label col-12 col-md-3">Idiomas</label>
                <div class="col-12 col-md-9">
                    <div class="row">
                        <input type="text" class="form-control col-6 col-md-5" id="idiomas" name="idiomas">
                        <select class="form-control col-5 offset-1 col-md-3 offset-md-1" id="nivel_idioma">
                            <option value="Básico">Basico</option>
                            <option value="Intermedio">Intermedio</option>
                            <option value="Experto">Experto</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>	

        <div class="form-group col-12"> 
            <div class="row">
                <label for="estado_laboral" class="control-label col-12 col-md-3">Estado laboral</label>
                <div class="col-12 col-md-9">
                    <div class="row">
                        <div class="col-4">
                            <div class="row">
                                <label for="trabajando" class="col-10">Trabajando</label>
                                <input type="radio" class="col-2" id="trabajando" value="Trabajando" name="estado_laboral">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <label for="contrato" class="col-10">Contrato temporal</label>
                                <input type="radio" class="col-2" id="contrato" value="Contrato temporal" name="estado_laboral">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <label for="ninguno" class="col-10">Ninguno</label>
                                <input type="radio" class="col-2" id="ninguno" value="Ninguno" name="estado_laboral">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group col-12"> 
            <div class="row">
                <label for="disponibilidad" class="control-label col-12 col-md-3">Disponibilidad</label>
                <div class="col-12 col-md-9">
                    <div class="row">
                        <div class="col-4">
                            <div class="row">
                                <label for="inmediata" class="col-10">Inmediata</label>
                                <input type="radio" class="col-2" id="inmediato" name="trabajando">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="row">
                                <label for="otros" class="col-6 disponibilidad_otros">Otros</label>
                                <input type="text" class="form-control col-6" id="otros" name="contrato">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
        <div class="form-group col-12"> 
            <div class="row">
                <label for="" class="control-label col-12 col-md-3">Estado</label>
                <input type="file" id="CV" class="col-12 col-md-9" name="attachments[]" accept="image/png, image/jpeg, application/pdf,application/msword application/vnd.openxmlformats-officedocument.wordprocessingml.document">
            </div>
        </div>   
        
        <div class="form-group col-12"> 
            <div class="row">
                <button type="button" id="boton_contacto_empleo" class="boton_contacto block_center">ENVIAR</button>
            </div>
        </div>     
    </form>	
</div>

<?php include 'footer.php'; ?>