<?php include ("header.php")?>

<script src="./script/ejemplo.js"></script>    
    <div class="container">
        <h1>Ejemplo de Javascript</h1>
        <h2>Otra cosa</h2>

        <input type="number" id="valor1"></input>
        <input type="number" id="valor2"></input>

        <button onclick="sumar()">Sumar</button>
        <button onclick="restar()">Restar</button>
        <button onclick="multiplicar()">Multiplicar</button>
        <button onclick="dividir()">Dividir</button>
        <p id="resultado1">Esperando valores para sumar...</p>
        <p id="resultado2">Esperando valores para restar...</p>
        <p id="resultado3">Esperando valores para multiplicar...</p>
        <p id="resultado4">Esperando valores para dividir...</p>

       
    </div>

<?php include("footer.php")?>