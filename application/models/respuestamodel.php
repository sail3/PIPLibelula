<?php
/**
 * Modelo para la tabla respuesta.
 */
class RespuestaModel extends Model {
  public function retrieveById($id = ""){
    $sql = "SELECT
            ur.id_usuario_respuesta as id,
            ur.id_usuario as usuario,
            ur.id_alternativa as respuesta,
            ur.valor_respuesta as valor,
            ur.factor_unitario as factorUnitario,
            ur.resultado_generado as resultadoGenerado,
            ur.fecha_creacion as fecha
            from usuarios_respuestas ur where  ur.id_usuario_respuesta = {$id}";
    return $this->query($sql);
  }
  public function insert($valores = array()) {

    // $idUsuario = isset($valores['idUsuario'])? $valores['idUsuario'] : NULL;
    // $idAlternativa = isset($valores['idAlternativa'])? $valores['idAlternativa'] : NULL;
    // $valorRespuesta = isset($valores['valorRespuesta'])? $valores['valorRespuesta'] : "";
    // $factorUnitario = isset($valores['factorUnitario'])? $valores['factorUnitario'] : 0;
    // $resultadoGenerado = isset($valores['resultadoGenerado'])? $valores['resultadoGenerado'] : 0;
    // $fechaCreacion = isset($valores['fechaCreacion'])? $valores['fechaCreacion'] : date('Y-m-d');
    extract($valores);
    $sql = "INSERT into usuarios_respuestas (
          	id_usuario,
          	id_alternativa,
          	valor_respuesta,
          	factor_unitario,
          	resultado_generado,
          	fecha_creacion
          ) values ('{$idUsuario}', '{$idAlternativa}', '{$valorRespuesta}', '{$factorUnitario}', '{$resultadoGenerado}', '{$fechaCreacion}' )";
    $this->execute($sql);
    return $this->last_id();
  }
  public function retrieveByUserId($idUsuario) {
    $sql = "SELECT
            ur.id_usuario_respuesta as id,
            ur.id_usuario as usuario,
            ur.id_alternativa as respuesta,
            ur.valor_respuesta as valor,
            ur.factor_unitario as factorUnitario,
            ur.resultado_generado as resultadoGenerado,
            ur.fecha_creacion as fecha
            from usuarios_respuestas ur where  ur.id_usuario = {$idUsuario}";
    return $this->query($sql);
  }

}
