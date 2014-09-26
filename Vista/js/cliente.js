var confLoad = ({css: {border: 'none', 
				
		        backgroundColor: '#000', 
		        '-webkit-border-radius': '30px', 
		        '-moz-border-radius': '50px', 
		        opacity: .5, 
		        color: '#fff' },
                        message: '<img src="icon/ajax-loader.gif" height="60px" /><p>Cargando...</p>'});



$(document).ready(function(){
	$("#ingreso").click(function(){
		$(document).ajaxStart($.blockUI(confLoad)).ajaxStop($.unblockUI);
		$("#contenido").load("ingresoCliente.html");
		$("#contenido2").empty();
		$("#listaDesplegable").empty();
		$("#ingreso").css({"background-color":"#99E479","color":"#1368A1","border-top-right-radius":"4px","border-top-left-radius":"4px","marginRight":"2px","marginLeft":"2px","paddingLeft":"4px" }); 
		$("#listarClientes").css({"background-color":"#3BAB12","color":"#fff"});
		$("#buscarCliente").css({"background-color":"#3BAB12","color":"#fff"});
		
	});
	
        
	
	$("#listarClientes").click(function(){
		$(document).ajaxStart($.blockUI(confLoad)).ajaxStop($.unblockUI);
		$("#listaDesplegable").load("listaDesplegable.html");
		$("#contenido").load("listadoClientes.php");
		
		$("#contenido2").empty();
		$("#listarClientes").css({"background-color":"#99E479","color":"#1368A1","border-top-right-radius":"4px","border-top-left-radius":"4px","marginRight":"2px","marginLeft":"1px","paddingLeft":"4px"}); 
		$("#ingreso").css({"background-color":"#3BAB12","color":"#fff"});
		$("#buscarCliente").css({"background-color":"#3BAB12","color":"#fff"}); 		
	});
	 

        
    
	$("#buscarCliente").click(function(){
		$("#contenido").load("buscarCliente.html");
		$(document).ajaxStart($.blockUI(confLoad)).ajaxStop($.unblockUI);
		$("#contenido2").empty();
		$("#listaDesplegable").empty();
		$("#buscarCliente").css({"background-color":"#99E479","color":"#1368A1","border-top-right-radius":"4px","border-top-left-radius":"4px","marginRight":"2px","marginLeft":"2px","paddingRight":"4px","paddingLeft":"4px"}); 
		$("#ingreso").css({"background-color":"#3BAB12","color":"#fff"});
		$("#listarClientes").css({"background-color":"#3BAB12","color":"#fff"}); 
		
	});
	
        
    
	
});

function modificarCliente(mm,cm,ml,digito){
	var rut_completo;
	if(digito == -1){
		var k = 'K';
		 rut_completo = mm+"."+cm+"."+ml+"-"+k;
	}else{
		rut_completo = mm+"."+cm+"."+ml+"-"+digito;
	}
	console.log(""+rut_completo);
	$("#contenido2").load("modificaCliente.php?rut="+rut_completo);
	$(document).ajaxStart($.blockUI(confLoad)).ajaxStop($.unblockUI);
}

function cargarDatosDeBusqueda(rut){
	console.log(rut);
	$("#contenido2").load("busquedaPorRut.php?rut="+rut);
	$(document).ajaxStart($.blockUI(confLoad)).ajaxStop($.unblockUI);
}

function recibeEliminar(mm,cm,ml,digito){
	if(confirm("Seguro que desea eliminar?")){
		var rut_completo = mm+"."+cm+"."+ml+"-"+digito;
		console.log(""+rut_completo);
		$("#contenido2").load("recibeBorrar.php?rut="+rut_completo);
		
	}

}

function cargarListaSegunSeleccion(seleccion){
	if(seleccion != 0){
		$(document).ajaxStart($.blockUI(confLoad)).ajaxStop($.unblockUI);
		$("#contenido").load("listadoClientes.php?seleccion="+seleccion);
		$("#contenido2").empty();
	}
}

function cargarPaginacion(paginacion,limit,offset){
		$(document).ajaxStart($.blockUI(confLoad)).ajaxStop($.unblockUI);
		console.log(paginacion);
		console.log(limit);
		console.log(offset);
		$("#contenido").load("listadoClientes.php?pag="+paginacion+"&limit="+limit+"&offset="+offset);
		$("#contenido2").empty();
		$("#btn_paginacion").css({"background-color":"#3BAB12","color":"#fff"});
		
	
}

function cargar(){
			$(document).ajaxStart($.blockUI(confLoad)).ajaxStop($.unblockUI);
			$(document).ready(function(){
				$("#contenido").load("listadoClientes.php");
				$("#listaDesplegable").load("listaDesplegable.html");
				
				$("#listarClientes").css({"background-color":"#99E479","color":"#1368A1","border-top-right-radius":"4px","border-top-left-radius":"4px","marginRight":"2px","marginLeft":"1px","paddingLeft":"4px"}); 		
				$("#ingreso").css({"background-color":"#3BAB12","color":"#fff"});
				$("#buscarCliente").css({"background-color":"#3BAB12","color":"#fff"}); 
			});
			}