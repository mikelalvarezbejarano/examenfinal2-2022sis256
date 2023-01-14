function cargar(abrir) {
    var contenedor = document.getElementById('contenido');
    fetch(abrir)
    .then(response => response.text())
    .then(data => contenedor.innerHTML=data);
}

var preguntaNum = 2;
var materia = "SIS256";
var cuadros = 0;

/* Pregunta 2 */
function ejercicio2() {
    var contenido = document.getElementById("contenido");
    var formulario = '<form action="javascript:alumnosListado()" method="get">' + 
    '<label>Nro de Cuadros</label> <input type="number" name="cuadros" id="cuadros"><br>'+
    '<input type="submit" value="Obtener"></form>';
    contenido.innerHTML = formulario;
}

function alumnosListado() {
    document.getElementById('titulo').innerHTML = "Lista " + materia;
    var numeroCuadros = document.getElementById("cuadros").value;
    cuadros = numeroCuadros;
    preguntaNum = 2;
	var contenedor = document.getElementById('contenido');
	fetch("listarAlumnos.php?cuadros="+cuadros+"&materia="+materia)
    .then(response => response.text())
    .then(data => contenedor.innerHTML=data);
}

function listadoRecarga() {
    document.getElementById('titulo').innerHTML = "Lista " + materia;
    preguntaNum = 2;
	var contenedor = document.getElementById('contenido');
	fetch("listarAlumnos.php?cuadros="+cuadros+"&materia="+materia)
    .then(response => response.text())
    .then(data => contenedor.innerHTML=data);
}

/* Pregunta 5 */
function insertarInforme() {
    document.getElementById('titulo').innerHTML = "Informe " + materia;
    preguntaNum = 5;
    var formulario = document.getElementById("informe");
    var parametros = new FormData(formulario);
    var contenedor = document.getElementById('contenido');
    fetch("insertarInforme.php", {body:parametros, method:"POST"})
        .then(response => response.text())
        .then(data => contenedor.innerHTML=data);
}

function actualizarInformeMateria() {
    var titulo = document.getElementById('titulo');
    titulo.innerHTML = "Informe " + materia;
    var contenedor = document.getElementById('contenido');
    fetch("listarInformes.php?materia="+materia)
        .then(response => response.text())
        .then(data => contenedor.innerHTML=data);
}


/* Pregunta 4 */
function calificacionesListado() {
    document.getElementById('titulo').innerHTML = "Calificaciones " + materia;
    preguntaNum = 4;
    var contenedor = document.getElementById('contenido');
    fetch("editarCalificaciones.php?materia="+materia)
        .then(response => response.text())
        .then(data => contenedor.innerHTML=data);
}

function nuevaCalificacion(id){
    var nota = document.getElementById("nota").value;
    xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function(){
        if (this.readyState==4 && this.status==200){
            document.getElementById("contenido").innerHTML=this.responseText;
        }
    };
    var url="cambiarCalificacion.php?id="+id+"&nota="+nota+"&materia="+materia;
    xhttp.open("GET",url,true);
    xhttp.send();
}



function cambioMaterias(mat) {
    materia = mat
    if(preguntaNum == 2) {
        listadoRecarga(materia);
    } else if(preguntaNum == 4) {
        calificacionesListado(materia);
    } else if(preguntaNum == 5) {
        actualizarInformeMateria(materia);
    }
}