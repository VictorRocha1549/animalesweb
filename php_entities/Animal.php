<?php

class Animal{
    public $id;
    public $apodo;
    public $especie;
    public $color;
}

function getAll(){
    $listaAnimales = [];
    $path = $_SERVER['DOCUMENT_ROOT'];
    include($path."/animalesweb/connection/db.php");
    $sql = "SELECT id, apodo, especie, color FROM animal";
    $result = $connection -> query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $objet = new Animal();
            $objet -> id = $row["id"];
            $objet -> apodo = $row["apodo"];
            $objet -> especie = $row["especie"];
            $objet -> color = $row["color"];
            $listaAnimales[] = $objet;
        }
    }
    return $listaAnimales;
}
?>