
function prueba(){
    alert("holi");
}

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

