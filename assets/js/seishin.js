$(document).ready(function () {
	beneficios();
	select_formularios();
	contacto_empleos();
	contacto_empresa();

	$(window).on('load', function () {
		check_if_in_view_elem(".empresas_cover_bullets", ".cover_bullet.anim_izq", 1);
		check_if_in_view_elem(".empresas_cover", ".empresas_cover_cta.anim_der", 1);
		check_if_in_view_elem(".empleos_cover", ".empleos_cover_cta.anim_izq", 1);
		anim_contacto_icon();
	});
	$(window).on('scroll', function(event) {
		animacion_scroll();
	});
});
function anim_contacto_icon(){
	$(".contacto_empresa").addClass('animado');
}

function contacto_empresa(){
	$(document).on('click', '#boton_contacto_empresa', function() {
		console.log('Presionado');
		var empresa_nombre = $("#empresa_nombre").val();
		var empresa_nombre_empresa = $("#empresa_nombre_empresa").val();
		var empresa_telefono = $("#empresa_telefono").val();
		var empresa_correo = $("#empresa_correo").val();
		var empresa_comentario = $("#empresa_comentario").val();
		if(empresa_nombre == '' || empresa_nombre_empresa == '' || empresa_telefono == '' || empresa_correo == '' || empresa_comentario == ''){
			alert("Por favor completa todos los campos");
		}else{
			$(this).prop('disabled', true);
			$.post("/contacto_empresa.php", {empresa_nombre:empresa_nombre, empresa_nombre_empresa:empresa_nombre_empresa, empresa_telefono:empresa_telefono, empresa_correo:empresa_correo, empresa_comentario:empresa_comentario}, function (data) {
				var respuesta = JSON.parse(data);
				if(respuesta.success){
					alert("Gracias por ponerte en contacto, nos comunicaremos contigo enseguida.");
					$("form").find("input[type=text], textarea, input[type=file]").val("");
					$("#boton_contacto_empresa").prop('disabled', false);
				}
			});
		}
	});
}


function contacto_empleos(){
	$(document).on('click', '#boton_contacto_empleo', function () {
		var nombre = $("#full_name_id").val();
		var dia = $("#dia").val();
		var mes = $("#mes").val();
		var anio = $("#anio").val();
		var direccion = $("#street1_id").val();
		var estado = $("#state_id").val();
		var telefono = $("#telefono").val();
		var correo = $("#mail").val();
		var disponibilidad_viajar = $('input[name=disponibilidad_viajar]:checked').val();
		var tipo_trabajo = $('input[name=tipo_trabajo]:checked').val();
		var idioma = $("#idiomas").val();
		var idioma_lvl = $("#nivel_idioma").val();
		var estado_laboral = $('input[name=estado_laboral]:checked').val();
		if($('#inmediato').is(":checked")){
			var disponibilidad = "Inmediata";
		}else{
			var disponibilidad = $("#otros").val();
		}
		var cv_first = $("#CV").val();

		if(nombre == '' || dia == '' || mes == '' || anio == '' || direccion == '' || estado == '' || telefono == '' || correo == '' || disponibilidad_viajar == '' || tipo_trabajo == '' || idioma == '' || idioma_lvl == '' || estado_laboral == '' || disponibilidad == '' || cv_first == ''){
			alert("Por favor completa todos los campos");
		}else{
			$(this).prop('disabled', true);
			var formData = new FormData();
			formData.append('file', $('#CV')[0].files[0]);
			$.ajax({
				url: "/subircv.php",
				data: formData,
				cache: false,
				contentType: false,
				processData: false,
				type: 'POST',
				success: function (response) {
					data = JSON.parse(response);
					var cv = data.path;

					$.post("/contacto.php", {nombre:nombre, dia:dia, mes:mes, anio:anio, direccion:direccion, estado:estado, telefono:telefono, correo:correo, disponibilidad_viajar:disponibilidad_viajar, tipo_trabajo:tipo_trabajo, idioma:idioma, idioma_lvl:idioma_lvl, estado_laboral:estado_laboral, disponibilidad: disponibilidad, cv:cv}, function (data_respuesta) {
						var respuesta = JSON.parse(data_respuesta);
						if(respuesta.success){
							alert("Gracias por enviar tu solicitud, nos comunicaremos contigo enseguida.");
							$("form").find("input[type=text], textarea, input[type=file]").val("");
							$("form").find("select").val(0);
							$("#state_id").val("Aguascalientes");
							$("#nivel_idioma").val("Básico");
							$("form").find("input[type=radio]").prop('checked', false);
							$("#boton_contacto_empleo").prop('disabled', false);
						}
					});
				}
			});
		}


	});
}

function animacion_scroll(){
	check_if_in_view(".acerca_de_img", .15);
	check_if_in_view(".acerca_de_gris", .35);
	check_if_in_view(".anim_izq", .50);
	check_if_in_view(".anim_der", .50);
	check_if_in_view_elem(".valores_item_cont", ".valores_item", .90);
	check_if_in_view_elem(".empresas_razones", ".empresas_razones_titulo.anim_up", .7);
	check_if_in_view(".empresas_razon.anim_down", .9);
	check_if_in_view_elem(".empleos_flujo_iconos", ".empleo_flujo_icono_cont", .90);
	check_if_in_view(".control-label", .95);
	check_if_in_view("form .col-md-9", .95);
}



function select_formularios(){
	for (var i = 1; i < 33; i++) {
		
		$("#state_id").append("<option value="+estados[i]+">"+estados[i]+"</option>");
	}
	for (var j = 1; j < 32; j++) {
		$("#dia").append("<option value="+j+">"+j+"</option>");
	}
	for (var k = 2000; k > 1940; k--) {
		$("#anio").append("<option value="+k+">"+k+"</option>");
	}
}

function beneficios(){
    $(".empresas_beneficio_cont").hover(function(){
            var este = $(this);
            este.find(".beneficio_texto_cont").toggleClass("onit");
            este.find(".beneficio_titulo").toggleClass("onit");
            este.find(".beneficio_texto").toggleClass("onit");
        }
    );
}
var $window = $(window);
function check_if_in_view(elementos_anim, porce) {
	var $animation_elements = $(elementos_anim);
	var window_height = $window.height();
	var window_top_position = $window.scrollTop();
	var window_bottom_position = (window_top_position + (window_height*porce));
	//
	$.each($animation_elements, function(i) {
		var $element = $(this);
		var element_height = $element.outerHeight();
		var element_top_position = $element.offset().top;
		var element_bottom_position = (element_top_position + element_height);

		if ((element_top_position <= window_bottom_position)) {
	  		$element.addClass('animado');
		} 
	});
}
function check_if_in_view_elem(elem_padre, elem_hijo, porce) {
	var $animation_elements = $(elem_padre);
	if($animation_elements[0] != undefined || $animation_elements[0] != null){
		var window_height = $window.height();
		var window_top_position = $window.scrollTop();
		var window_bottom_position = (window_top_position + (window_height*porce));
		var $element = $animation_elements;
		var element_height = $element.outerHeight();
		var element_top_position = $element.offset().top;
		var element_bottom_position = (element_top_position + element_height);

		if ((element_top_position <= window_bottom_position)) {
			if(!$animation_elements.hasClass("animado")){
				$element.addClass('animado');
				$element.find(elem_hijo).each(function (i) {
					var elhijo = $(this);
					setTimeout(function(){
						elhijo.addClass("animado");
					}, 150*(i+1));
				});
			}
		}
	}
}

var estados = {
	'1':'Aguascalientes',
	'2':'Baja California',
	'3':'Baja California Sur',
	'4':'Campeche',
	'5':'CDMX',
	'6':'Coahuila',
	'7':'Colima',
	'8':'Chiapas',
	'9':'Chihuahua',
	'10':'Durango',
	'11':'Guanajuato',
	'12':'Guerrero',
	'13':'Hidalgo',
	'14':'Jalisco',
	'15':'México',
	'16':'Michoacán',
	'17':'Morelos',
	'18':'Nayarit',
	'19':'Nuevo León',
	'20':'Oaxaca',
	'21':'Puebla',
	'22':'Querétaro',
	'23':'Quintana Roo',
	'24':'San Luis Potosí',
	'25':'Sinaloa',
	'26':'Sonora',
	'27':'Tabasco',
	'28':'Tamaulipas',
	'29':'Tlaxcala',
	'30':'Veracruz',
	'31':'Yucatán',
	'32':'Zacatecas'
}