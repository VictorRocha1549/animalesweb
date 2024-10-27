<?php
class Aviones{
    public $id;
    public $Empresa;
    public $Modelo;
    public $Serie;
    public $CantidadPasajeros;
    public $Rango;
}
function getAll() {
    $listaAviones = array();  // Inicializar el array correctamente
    $path = $_SERVER['DOCUMENT_ROOT'];
    include ($path . "/animalesweb/connection/db.php");
    $sql = "SELECT id, Empresa, Modelo, Serie, CantidadPasajeros, Rango FROM aviones";
    $result = $connection->query($sql);
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $objet = new Aviones();
            $objet->id = $row["id"];
            $objet->Empresa = $row["Empresa"];
            $objet->Modelo = $row["Modelo"];
            $objet->Serie = $row["Serie"];
            $objet->CantidadPasajeros = $row["CantidadPasajeros"];  // Corregir el nombre de la columna
            $objet->Rango = $row["Rango"];
            $listaAviones[] = $objet;
        }
    }
    return $listaAviones;
}

?>