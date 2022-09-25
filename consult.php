<?php
//incluimos la base de datos
include("db.php");

if (isset($_POST["buscar"])) {
    //variable de los radio button
    $modo_consulta = $_POST["modo_consulta"];
    $dato = $_POST["dato"];
    //consulta del nit
    if ($modo_consulta == "nit") {
        $query = "SELECT * FROM registros WHERE nit = '$dato'";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo "no hay consulta";
        } else {
            $fila = mysqli_fetch_array($result);
            $_SESSION["message"] = "checked";
            $_SESSION["cui"] = $fila["cui"];
            $_SESSION["nit"] = $fila["nit"];
            $_SESSION["nombre"] = $fila["nombre"];
            $_SESSION["fecha_nacimiento"] = $fila["fecha_nacimiento"];
            $_SESSION["lugar_nit"] = $fila["lugar_nit"];
            $_SESSION["fecha_nit"] = $fila["fecha_nit"];
            header("Location:../index.php");
        }
    }
    //consulta del cui
    if ($modo_consulta == "cui") {
        $query = "SELECT * FROM registros WHERE cui='$dato'";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo "no hay consulta";
        } else {
            $fila = mysqli_fetch_array($result);
            $_SESSION["message"] = "checked";
            $_SESSION["cui"] = $fila["cui"];
            $_SESSION["nit"] = $fila["nit"];
            $_SESSION["nombre"] = $fila["nombre"];
            $_SESSION["fecha_nacimiento"] = $fila["fecha_nacimiento"];
            $_SESSION["lugar_nit"] = $fila["lugar_nit"];
            $_SESSION["fecha_nit"] = $fila["fecha_nit"];
            header("Location:../index.php");
        }
    }
}
