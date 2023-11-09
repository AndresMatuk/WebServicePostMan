<?php
    require_once("../conexion.php");
    require_once("../models/Categoria.php");
    $categoria = new Categoria();

    $body = json_decode(file_get_contents("php://input"), true);

    switch($_GET["op"]){
        case "GetAll":
            $datos=$categoria->get_categoria();
            echo json_encode($datos);
        break;

        case "GetId":
            $datos=$categoria->get_Categoria_x_id($body["id_usuario"]);
            echo json_encode($datos);
        break;

        case "insert":
            $datos=$categoria->insert_Categoria($body["Fk_Id_Usuario"],$body["fecha_horan"],$body["Valor_consignación"]);
            $mostrar_datos=$categoria->get_Categoria_x_id($body["Fk_Id_Usuario"]);
            echo json_encode($mostrar_datos);
        break;

        case "Update":
            $datos=$categoria->update_Categoria($body["id_consignaciones"],$body["Fk_Id_Usuario"],$body["Valor_consignación"]);
            $mostrar_datos=$categoria->get_Categoria_x_id($body["Fk_Id_Usuario"]);
            echo json_encode($mostrar_datos);
        break;

        case "Delete":
            $datos=$categoria->delete_Categoria($body["id_consignaciones"]);
            echo "eliminado correctamente";
        break;
    }
?>