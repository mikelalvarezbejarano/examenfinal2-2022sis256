<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <script src="main.js"></script>
    <title>Document</title>
</head>
<body class="container">
    <br><br><br>
    <div class="vista">
        <header class="elementosFlex">
            <img src="images/universidad.png" alt="" width="150px">
            <div class="preguntas">
                <div class="menuNavegacion orden">
                    <a href="examenfinal.php">Inicio</a>
                    <a href="javascript:ejercicio2()">Lista</a>
                    <a href="#">Horarios</a>
                    <a href="javascript:calificacionesListado()">Calificaciones</a>
                    <a href="javascript:cargar('informeMateias.html')">Informes</a>
                </div>
    
                <div class="titulo" id="titulo">
                    <h3>Inicio</h3>
                </div>
            </div>
        </header>
        
        <div class="elementosFlex">
            <div class="menu" id="menu">
                <h3>Asignaturas</h3>
                <button value="SIS256" onclick="cambioMaterias('SIS256')" class="opcion activo">SIS256</button>
                <button value="SIS258" onclick="cambioMaterias('SIS258')" class="opcion">SIS258</button>
                <button value="SIS406" onclick="cambioMaterias('SIS406')" class="opcion">SIS406</button>
            </div>
        
            <div class="contenido" id="contenido">
                <div class="alumno">
                    <p>Examen Final de SIS256</p>
                    <p>Estudiante:Mikel Alvarez Bejarano</p>
                    <p>CU: 35-3513 </p>
                    <p>Semestre: 2-2022</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        var menu = document.getElementById("menu");
        var btns = menu.getElementsByClassName("opcion");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("activo");
                current[0].className = current[0].className.replace(" activo", "");
                this.className += " activo";
            });
        }
    </script>


</body>
</html>