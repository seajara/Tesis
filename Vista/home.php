<?php 

session_start();
		$nombre = $_SESSION['nombre'];
		$rut = $_SESSION['rut'];
		if(!isset($nombre)){
			header("Location: ../index.php");
		}else{
		
		
		
?>
<html>
	<head>
		<meta charset="utf-8">
		<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
		<script type="text/javascript" src="js/cliente.js"></script>
		 <script type="text/javascript" src="js/jquery.blockUI.js"></script>
		<link href="css/estilos.css" rel="stylesheet" type="text/css">
		
		<script type="text/javascript">
		function confirmarSalir(){
			if(confirm("Realmente desea abandonar?")){
					location.href = "cerrarSesion.php";
			}
		}
	
	</script>
		
		
		<script type="text/javascript">
			function validacion(){
				var rut = document.getElementById("rut").value;
				var nombre = document.getElementById("nombre").value;
				var apellido = document.getElementById("apellido").value;
				var direccion = document.getElementById("direccion").value;
				var ciudad = document.getElementById("ciudad").value;
				
			if(!Rut(rut)){
				return 0;
			}
			
			if (nombre.length==0){ 
				alert("Tiene que escribir el nombre"); 
				document.form1.nombre.focus() 
				return 0; 
			} 
			
			if (apellido.length==0){ 
				alert("Tiene que escribir el apellido");
				document.form1.apellido.focus() 
				return 0; 
			} 
			
			if (direccion.length==0){ 
				alert("Tiene que escribir la direccion");
				document.form1.direccion.focus() 
				return 0; 
			} 
			
			if (ciudad.length==0){ 
				alert("Tiene que escribir la ciudad");
				document.form1.ciudad.focus() 
				return 0; 
			} 
			
			
			
			alert("Enviando datos"); 
			
			document.form1.submit();
			
			
			
			}
		</script>
		<script type="text/javascript">
			function validacionBuscar(){
				var rut = document.getElementById("rut").value;
			if(!Rut(rut)){
				$("#contenido2").empty();
				return 0;
				
			}else{
				cargarDatosDeBusqueda(document.form1.rut.value);
			}
		
		}
		</script>
		<script type="text/javascript">
			function validacionModificar(){
				var nombre = document.getElementById("nombre").value;
				var apellido = document.getElementById("apellido").value;
				var direccion = document.getElementById("direccion").value;
				var ciudad = document.getElementById("ciudad").value;
				
				if(nombre.length==0){
					alert("Tiene que escribir el nombre");
					document.form2.nombre.focus();
					return 0;
				
				}
				
				if(apellido.length==0){
					alert("Tiene que escribir el apellido");
					document.form2.apellido.focus();
					return 0;
				}
				
				if (direccion.length==0){ 
				alert("Tiene que escribir la direccion");
				document.form1.direccion.focus() 
				return 0; 
				} 
				
				if (ciudad.length==0){ 
					alert("Tiene que escribir la ciudad");
					document.form1.ciudad.focus() 
					return 0; 
				}
				
				if(confirm("Seguro que desea actualizar?")){
					document.form2.submit();
					
				}
				
				
				
				
			
			}
		</script>
		<script>
			function revisarDigito( dvr )
{	
	dv = dvr + ""	
	if ( dv != '0' && dv != '1' && dv != '2' && dv != '3' && dv != '4' && dv != '5' && dv != '6' && dv != '7' && dv != '8' && dv != '9' && dv != 'k'  && dv != 'K')	
	{		
		alert("Debe ingresar un digito verificador valido");		
		window.document.form1.rut.focus();		
		window.document.form1.rut.select();		
		return false;	
	}	
	return true;
}

function revisarDigito2( crut )
{	
	largo = crut.length;	
	if ( largo < 2 )	
	{		
		alert("Debe ingresar el rut completo")		
		window.document.form1.rut.focus();		
		window.document.form1.rut.select();		
		return false;	
	}	
	if ( largo > 2 )		
		rut = crut.substring(0, largo - 1);	
	else		
		rut = crut.charAt(0);	
	dv = crut.charAt(largo-1);	
	revisarDigito( dv );	

	if ( rut == null || dv == null )
		return 0	

	var dvr = '0'	
	suma = 0	
	mul  = 2	

	for (i= rut.length -1 ; i >= 0; i--)	
	{	
		suma = suma + rut.charAt(i) * mul		
		if (mul == 7)			
			mul = 2		
		else    			
			mul++	
	}	
	res = suma % 11	
	if (res==1)		
		dvr = 'k'	
	else if (res==0)		
		dvr = '0'	
	else	
	{		
		dvi = 11-res		
		dvr = dvi + ""	
	}
	if ( dvr != dv.toLowerCase() )	
	{		
		alert("EL rut es incorrecto")		
		window.document.form1.rut.focus();		
		window.document.form1.rut.select();		
		return false	
	}

	return true
}

function Rut(texto)
{	
	var tmpstr = "";	
	for ( i=0; i < texto.length ; i++ )		
		if ( texto.charAt(i) != ' ' && texto.charAt(i) != '.' && texto.charAt(i) != '-' )
			tmpstr = tmpstr + texto.charAt(i);	
	texto = tmpstr;	
	largo = texto.length;	

	if ( largo < 2 )	
	{		
		alert("Debe ingresar el rut completo")		
		window.document.form1.rut.focus();		
		window.document.form1.rut.select();		
		return false;	
	}	

	for (i=0; i < largo ; i++ )	
	{			
		if ( texto.charAt(i) !="0" && texto.charAt(i) != "1" && texto.charAt(i) !="2" && texto.charAt(i) != "3" && texto.charAt(i) != "4" && texto.charAt(i) !="5" && texto.charAt(i) != "6" && texto.charAt(i) != "7" && texto.charAt(i) !="8" && texto.charAt(i) != "9" && texto.charAt(i) !="k" && texto.charAt(i) != "K" )
 		{			
			alert("El valor ingresado no corresponde a un R.U.T valido");			
			window.document.form1.rut.focus();			
			window.document.form1.rut.select();			
			return false;		
		}	
	}	

	var invertido = "";	
	for ( i=(largo-1),j=0; i>=0; i--,j++ )		
		invertido = invertido + texto.charAt(i);	
	var dtexto = "";	
	dtexto = dtexto + invertido.charAt(0);	
	dtexto = dtexto + '-';	
	cnt = 0;	

	for ( i=1,j=2; i<largo; i++,j++ )	
	{		
		//alert("i=[" + i + "] j=[" + j +"]" );		
		if ( cnt == 3 )		
		{			
			dtexto = dtexto + '.';			
			j++;			
			dtexto = dtexto + invertido.charAt(i);			
			cnt = 1;		
		}		
		else		
		{				
			dtexto = dtexto + invertido.charAt(i);			
			cnt++;		
		}	
	}	

	invertido = "";	
	for ( i=(dtexto.length-1),j=0; i>=0; i--,j++ )		
		invertido = invertido + dtexto.charAt(i);	

	window.document.form1.rut.value = invertido.toUpperCase()		

	if ( revisarDigito2(texto) )		
		return true;	

	return false;
}


function MM_openBrWindow(theURL,winName,features) { 
  window.open(theURL,winName,features);
}
		</script>
	</head>
	<body onload="javascript:cargar();">
		<div id="bienvenida">
			Bienvenido <?php echo $nombre?>
			<a href="#" onClick="confirmarSalir()" style="float: right;">Salir</a>
		</div>
		<div id="contenido1">
			
			<a id="listarClientes"><font size=5>Listar</font>  </a>
			<a id="ingreso"><font size=5>Ingresar</font> </a>
			<a id="buscarCliente"><font size=5>Buscar</font>   </a>
		</div>
		<div id="listaDesplegable">
		</div>
		<div id="contenido">
		</div>
		<div id="contenido2">
		</div>
		<div id="paginacion">
		</div>
	</body>

</html>
<?php
}
?>