<?php 
    require_once "Conexion.php";
    class Crud extends Conexion{
        public function mostrarDatos(){
           $sql="SELECT idEquipo,
                        codigo,
                        nombre,
                        FK_ambiente,
                        estado
                from equipo";
            $query=Conexion::conectar()->prepare($sql);
            $query->execute();
            return $query->fetchAll();
            $query->close(); 
        }
        public function insertarDatos($datos){
        $sql="INSERT INTO equipo (codigo,nombre, FK_ambiente, estado, novedad)

                values(:codigo,:nombre, :ambiente, :estado, :novedad)";
                $query=Conexion::conectar()->prepare($sql);
                $query->bindParam(":codigo",$datos["codigo"],PDO::PARAM_STR);
                $query->bindParam(":nombre",$datos["nombre"],PDO::PARAM_STR);
                $query->bindParam(":ambiente",$datos["ambiente"],PDO::PARAM_STR);
                $query->bindParam(":estado",$datos["estado"],PDO::PARAM_STR);
                return $query->execute();
                $query->close();
        } 
        public function obtenerDatos($idEquipo){
            $sql="SELECT idEquipo,
                        codigo,
                        nombre,
                        FK_ambiente,
                        estado
            from equipo where idEquipo=:idEquipo";
            $query=Conexion::conectar()->prepare($sql);
                $query->bindParam(":idEquipo",$idEquipo, PDO::PARAM_INT);
                $query->execute();
                return $query->fetch();
                $query->close();
        }
        public function actualizarDatos($datos){
            $sql="UPDATE equipo set codigo = :codigo,
                                    nombre = :nombre,
                                    ambiente=:ambiente,
                                    estado=:estado,
                                    novedad=:novedad
                                    where idEquipo=:idEquipo";
            $query=Conexion::conectar()->prepare($sql);
                $query->bindParam(":codigo",$datos["codigo"],PDO::PARAM_STR);
                $query->bindParam(":nombre",$datos["nombre"],PDO::PARAM_STR);
                $query->bindParam(":ambiente",$datos["ambiente"],PDO::PARAM_STR);
                $query->bindParam(":estado",$datos["estado"],PDO::PARAM_STR);
                $query->bindParam(":novedad",$datos["novedad"],PDO::PARAM_STR);
                $query->bindParam(":idEquipo",$datos["idEquipo"],PDO::PARAM_INT);
                return $query->execute();
                $query->close();
        }
        public function eliminarDatos($idEquipo){
            $sql="DELETE from equipo where id=:id";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":id",$id,PDO::PARAM_INT);
            return $query->execute();
            $query->close();

        }
    }
?>