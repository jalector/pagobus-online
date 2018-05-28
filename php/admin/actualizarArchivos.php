<?php
    /**
    * Nombre: Juan Pablo Gallardo Ochoa
    * Descripción: Archivo que actualiza los estados de los archivos
    * Fecha: 27 de Mayo del 2018
    */

    include '../conexion.php';
    //Nos conectamos a bases de datos.
    $conexion = conectar();

    //Obtenemos tanto los valores de los id como los estados nuevos
    $id = $_POST['id'];
    $estado = $_POST['estado'];
    //variable de contador
    $cont = 0;

    //ciclo para saber cuantos documentos son en total los que hay que actualizar
    foreach ($id as $e) {
        $cont = $cont+1; 
    }

    //Ciclo para actualizar los estados de cada documento
    for ($i=0; $i < $cont; $i++) { 
        $consulta = "UPDATE Documento SET Documento.estado='".$estado[$i]."'
                    WHERE Documento.id_Documento=".$id[$i].";";
        $conexion->query($consulta);
    }

    $conexion->close();

?>
<script>
    window.history.back();
</script>
