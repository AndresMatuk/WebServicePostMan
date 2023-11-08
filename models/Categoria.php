<?php
    class Categoria extends Conectar{
        public function get_categoria(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM `consignaciones`";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
   
        public function get_Categoria_x_id($id_usuario){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT usuarios.nombre, usuarios.apellido, consignaciones.id_consignaciones, consignaciones.fecha_horan, consignaciones.Valor_consignación  FROM `consignaciones` inner join `usuarios` where usuarios.id_usuario = consignaciones.fk_id_usuario AND id_usuario = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $id_usuario);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
        public function insert_Categoria($id_usuario,$fecha_horan,$Valor){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO Consignaciones (Fk_Id_Usuario, fecha_horan, Valor_consignación) VALUES (?,?,?)";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $id_usuario);
            $sql->bindValue(2, $fecha_horan);
            $sql->bindValue(3, $Valor);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }
//SELECT usuarios.nombre, usuarios.apellido, consignaciones.*  FROM `consignaciones` inner join `usuarios` where usuarios.id_usuario = consignaciones.fk_id_usuario AND id_usuario = ?
?>