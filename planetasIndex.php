<?php include("header.php") ?>
<div class="navbar">
    <div class="container">
        <ul class="nav bar-nav">
            <li><a href="index.php" class="class">INICIO</a></li>
            <li><a href="" class="class">AGREGAR</a></li>
        </ul>
    </div>
</div>

<div>
    <h1 class="Titulo">Planetas del Sistema Solar</h1>
</div>
<div class="">
    <h2>Nombre de los Planetas</h2>
    <?php
    include("php_entities/planetas.php");
    $registros = getAll();
    if (count($registros) > 0) {
        foreach ($registros as $row) {
            echo "<p class='parrafo'>" . $row->Nombre . "</p>";
            echo "<img src='imagen/" . $row->src . "' alt='" . $row->Nombre . "' style='width:200px;height:auto;'/>";
        }
    }
    ?>
</div>
<?php include("footer.php") ?>
