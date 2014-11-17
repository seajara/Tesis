
function filtrarCategoria(){
    document.getElementById("filtro-form").submit();
}

/*function setearFecha(){
    var dia = document.getElementById("dia").value;
    var mes = document.getElementById("mes").value;
    var anho = document.getElementById("anho").value;
    var fecha = anho+"-"+mes+"-"+dia;
    document.getElementById("fecha_nac").value=fecha;
}*/

function ajaxget(){
        var conexion;
        if(window.XMLHttpRequest){
            conexion=new XMLHttpRequest(); 
        }else{
            conexion=new ActiveXObject("Microsoft.XMLHTTP");
        }
        //alert("holi");
        conexion.onreadystatechange=function(){
            if(conexion.readyState==4 && conexion.status==200){ 
                document.getElementById("midiv").innerHTML=conexion.responseText;
                alert("hola");
            }
        }
        conexion.open("GET", "accion.php?variable=Soy una variable", true);
        conexion.send();
    }

