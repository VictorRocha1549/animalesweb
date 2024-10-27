<?php include("header.php") ?>


<h1>Registros de aviones</h1>
<h2>Consulte e ingrese los registros de aviones existentes</h2>

<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>Empresa</th>
            <th>Modelo</th>
            <th>Serie</th>
            <th>Cantidad de Pasajeros</th>
            <th>Rango</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include("php_entities/Aviones.php");
        $registros = getAll();
        if (count(value: $registros) > 0) {
            foreach ($registros as $row) {
                echo "<tr>" .
                    "<td>" . $row->id . "</td>" .
                    "<td>" . $row->Empresa . "</td>" .
                    "<td>" . $row->Modelo . "</td>" .
                    "<td>" . $row->Serie . "</td>" .
                    "<td>" . $row->CantidadPasajeros . "</td>" .
                    "<td>" . $row->Rango . "</td>" .
                    "</tr>";
            }
        }


        ?>
    </tbody>
</table>
<?php include("footer.php") ?>