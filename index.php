<?php include("header.php") ?>

<h1>Registro de animales</h1>
<h2>Consulte e ingrese los registros de animales existentes</h2>
<table class="table">
    <thead>
        <tr>
            <th>Apodo</th>
            <th>Especie</th>
            <th>Color</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include("php_entities/Animal.php");
            $registros = getAll();
            if (count($registros) > 0) {
                foreach ($registros as $row) {
                    echo"<tr>".
                    "<td>". $row ->apodo."</td>".
                    "<td>". $row -> especie."</td>".
                    "<td>". $row -> color."</td>".
                    "</tr>";
                }
            }
        ?>
    </tbody>
</table>
<?php include("footer.php") ?>