<?php
/**
 * Modelo para la tabla pregunta.
 */
class PreguntaModel extends Model {

  const TRANSPORTE = "TRANSPORTE";
  const ENERGIA = "ENERGIA";
  const ALIMENTACION = "ALIMENTACION";
  const RESIDUOS = "RESIDUOS";
  const AGUA = "AGUA";

  public function retrieveById($id) {
    $sql = "SELECT
            pr.id_pregunta as id,
            pr.titulo as titulo,
            pr.id_pregunta_padre as padre,
            pr.categoria as categoria,
            pr.fecha_creacion as fecha
            from preguntas pr
            where pr.id_pregunta = {$id}";
    return $this->query($sql);
  }
  public function insert($valores = array()) {
    $titulo = isset($valores['titulo']) ? $valores['titulo'] : "";
    $preguntaPadre = isset($valores['preguntaPadre']) ? $valores['preguntaPadre'] : "";
    $categoria = isset($valores['categoria']) ? $valores['categoria'] : "";
    $fecha = isset($valores['fecha']) ? $valores['fecha'] : date('Y-m-d');

    $sql = "INSERT into preguntas (
            	titulo,
            	id_pregunta_padre,
            	categoria,
            	fecha_creacion
            )
            values('{$titulo}', '{$preguntaPadre}', '{$categoria}', '{$fecha}', '{$sql}')";
    $this->execute($sql);
    return $this->last_id();
  }
  public function retrieveByCategory($category = "") {
    $sql = "SELECT
            pr.id_pregunta as id,
            pr.titulo as titulo,
            pr.id_pregunta_padre as padre,
            pr.categoria as categoria,
            pr.fecha_creacion as fecha,
            pr.fecha_creacion as alternativas
            from preguntas pr
            where pr.categoria = '{$category}'";
    return $this->query($sql);
  }

}
