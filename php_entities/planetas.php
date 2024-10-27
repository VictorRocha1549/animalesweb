<?php
class planetas {
    public $id;
    public $Nombre;
    public $src;
}

function getAll() {
    $listaPlanetas = array();
    $path = $_SERVER['DOCUMENT_ROOT'];
    include($path . "/animalesweb/connection/db.php");
    $sql = "SELECT Nombre, src FROM planetas";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $planet = new planetas();
            $planet->Nombre = $row["Nombre"];
            $planet->src = $row["src"]; // src es el nombre de la imagen
            $listaPlanetas[] = $planet;
        }
    }
    return $listaPlanetas;
}
?>
