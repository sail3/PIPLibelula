<?php
/**
 * Modelo para la tabla Usuario.
 */
class UsuarioModel extends Model {

  public function retrieveById($id) {
    $sql = "SELECT
            us.id_usuario as id,
            us.nombre as nombre,
            us.apellido as apellido,
            us.email as email,
            us.miembros_familia as miembrosFamilia,
            us.fecha_creacion as fechaCreacion
            from usuarios us where us.id_usuario = {$id}";
    return $this->query($sql);
  }
  public function insert($datos = array()) {
    $nombres = isset($datos['nombres'])? $datos['nombres']: "";
    $apellidos = isset($datos['apellidos'])? $datos['apellidos']: "";
    $email = isset($datos['email'])? $datos['email']: "";
    $miembrosFamilia = isset($datos['miembrosFamilia'])? $datos['miembrosFamilia']: 1;
    $fechaCreacion = isset($datos['fechaCreacion'])? $datos['fechaCreacion']: date('Y-m-d');
    $sql = "INSERT INTO usuarios (
              nombre,
              apellido,
              email,
              miembros_familia,
              fecha_creacion
            ) VALUES ('{$nombres}','{$apellidos}','{$email}','{$miembrosFamilia}','{$fechaCreacion}')";
    $this->execute($sql);
    return $this->last_id();
  }
}
