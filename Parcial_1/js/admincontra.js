function validar()
{
    var texto="";
	var error="";
    var textal="";
    
    var dato1=document.getElementById("u").value;
    if(dato1=="") error+="Falta Nombre de usuario<br>";
    else error+="Ingresado correctamente";

    var dato2=document.getElementById("c").value;
	if(dato2=="") error+="Falta contraseña<br>";
    else error+="Ingresado correctamente";
    alert(error)


    if(dato1=="admin" && dato2=="admin") {
        textal +="Correcto";
        alert(textal);
        window.open("https://sites.google.com/view/zapateriaoto2022pw2iti/inicio?authuser=2");
    }
    else {
        textal +="Incorrecto";
        alert(textal);
    }
    
    
    


}