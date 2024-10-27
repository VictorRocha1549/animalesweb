<?php include("header.php")?>

    <script src="./script/anios.js"></script>
    <div class="años">
        <h2 class="tituloExamen">Identificar años bisiestos</h2>
        <input type="number" id="anoInicio" placeholder="Año de inicio">
        <input type="number" id="anoFinal" placeholder="Año final">
        <button onclick="Mostrar()">Mostar</button>
        <div id="divAnios"></div>
    </div>
    <div>
        <h2 class="tituloExamen">Cumpleaños</h2>
        <h3 class="subtitulo">DIAS TRANSCURRIDOS Y DIAS FALTANTES</h3>
        <div></div>
        <div class="fechaNacimiento">
            <p>Fecha de nacimiento</p>
           <input type="date" id="fechaNacimiento"> 
        </div>
        
        <button onclick="Transcurridos()" id="btnTranscurridos">Dias Transcurridos</button>
        <button onclick="Faltantes()" id="btnFaltantes">Dias Faltantes</button>
        <div id="div_dias"></div>
    </div>

<?php include("footer.php")?>

