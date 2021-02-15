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
                <label for="empresa_nombre" class="control-label col-12 col-md-3">Nombre Completo</label>
                <input type="text" class="form-control col-12 col-md-9" id="empresa_nombre" name="empresa_nombre" placeholder="Fabián Castruita Ordoñez">
            </div>
        </div>	
        <div class="form-group col-12"> 
            <div class="row">
                <label for="empresa_nombre_empresa" class="control-label col-12 col-md-3">Nombre de la empresa</label>
                <input type="text" class="form-control col-12 col-md-9" id="empresa_nombre_empresa" name="empresa_nombre_empresa" placeholder="Seishin Group">
            </div>
        </div>	
        <div class="form-group col-12"> 
            <div class="row">
                <label for="empresa_telefono" class="control-label col-12 col-md-3">Teléfono</label>
                <input type="text" class="form-control col-12 col-md-9" id="empresa_telefono" name="empresa_telefono" placeholder="5520489203">
            </div>
        </div>	
        <div class="form-group col-12"> 
            <div class="row">
                <label for="empresa_correo" class="control-label col-12 col-md-3">Correo electrónico</label>
                <input type="text" class="form-control col-12 col-md-9" id="empresa_correo" name="empresa_correo" placeholder="alejandro@tucompañia.com">
            </div>
        </div>	
        <div class="form-group col-12"> 
            <div class="row">
                <label for="empresa_comentario" class="control-label col-12 col-md-3">Comentario</label>
                <textarea class="form-control col-12 col-md-9" id="empresa_comentario" name="empresa_comentario" rows="10"></textarea>
            </div>
        </div>	 
        
        <div class="form-group col-12"> 
            <div class="row">
                <button type="button" id="boton_contacto_empresa" class="boton_contacto block_center">ENVIAR</button>
            </div>
        </div>     
    </form>	
</div>

<?php include 'footer.php'; ?>