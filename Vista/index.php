<?php
	if(!isset($_GET['codigo'])){
		$codigo = 0;
		
	}else{
		$codigo = $_GET['codigo'];
		
	}
	

?>


<html>
	<head>
		<meta charset="utf-8">
		<script type="text/javascript" src="../js/jquery-2.1.1.js"></script>
		<script type="text/javascript" src="../js/cliente.js"></script>
		<script type="text/javascript" src="../js/jquery.blockUI.js"></script>
		<link href="../css/estilos.css" rel="stylesheet" type="text/css">
		
		
		<script>
			function validarRut(){
				var rut = document.getElementById("rut").value;
				console.log(rut);
				if(!Rut(rut)){
					return 0;
				}
				document.formularioInicio.submit();
			}
		</script>
		
		<script>
			function revisarDigito( dvr )
{	
	dv = dvr + ""	
	if ( dv != '0' && dv != '1' && dv != '2' && dv != '3' && dv != '4' && dv != '5' && dv != '6' && dv != '7' && dv != '8' && dv != '9' && dv != 'k'  && dv != 'K')	
	{		
		alert("Debe ingresar un digito verificador valido");		
		window.document.formularioInicio.rut.focus();		
		window.document.formularioInicio.rut.select();		
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
		window.document.formularioInicio.rut.focus();		
		window.document.formularioInicio.rut.select();		
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
		window.document.formularioInicio.rut.focus();		
		window.document.formularioInicio.rut.select();		
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
		window.document.formularioInicio.rut.focus();		
		window.document.formularioInicio.rut.select();		
		return false;	
	}	

	for (i=0; i < largo ; i++ )	
	{			
		if ( texto.charAt(i) !="0" && texto.charAt(i) != "1" && texto.charAt(i) !="2" && texto.charAt(i) != "3" && texto.charAt(i) != "4" && texto.charAt(i) !="5" && texto.charAt(i) != "6" && texto.charAt(i) != "7" && texto.charAt(i) !="8" && texto.charAt(i) != "9" && texto.charAt(i) !="k" && texto.charAt(i) != "K" )
 		{			
			alert("El valor ingresado no corresponde a un R.U.T valido");			
			window.document.formularioInicio.rut.focus();			
			window.document.formularioInicio.rut.select();			
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

	window.document.formularioInicio.rut.value = invertido.toUpperCase()		

	if ( revisarDigito2(texto) )		
		return true;	

	return false;
}


function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
		</script>
		
	</head>
	<body>
		<h4> Hola mundo </h4>
		
<div id="inicio" style="float:middle">
<form name="formularioInicio" method="POST" action="recibeLogin.php" >
	<fieldset >
		
				<table>
				<tr>
					<td>
						Rut
					</td>
					<td>
						<input type="text" id="rut" name= "rut">
					</td>
				</tr>
				<tr>
					<td>
						Password
					</td>
					<td>
						<input type="password"id="password" name= "password" >
					</td>
				</tr>
				
				<tr>
					<td>
						 
					</td>
					<td>
						<input name="btnGuardar" type="button" value="Ingresar" onclick="validarRut()">
					</td>
					
				</tr>
			
				
			
		</legend>
    </fieldset>
</form>

</div>
<div id="alerta">
	<?php
						if($codigo === '1'){
							echo "<h6>No se encuentra registrado !<h6>";
						}
					?>
</div>
		
	</body>

</html>