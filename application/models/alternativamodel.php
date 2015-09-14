<?php
/**
 * Modelo para la tabla Alternativa.
 */
class AlternativaModel extends Model {
  public function retrieveById($id = "") {
    $sql = "SELECT
            alt.id_alternativa as id,
            alt.id_pregunta as pregunta,
            alt.tipo_alternativa as tipo,
            alt.titulo_alternativa as titulo,
            alt.subtitulo_alternativa as subtitulo,
            alt.orden as orden
            from alternativas alt
            where alt.id_alternativa = {$id}";
    return $this->query($sql);
  }
  public function insert($valores = array()) {
    $pregunta = isset($valores['pregunta'])? $valores['pregunta'] : NULL;
    $alternativaTipo = isset($valores['alternativaTipo'])? $valores['alternativaTipo'] : "";
    $alternativaTitulo = isset($valores['alternativaTitulo'])? $valores['alternativaTitulo'] : "";
    $alternativaSubtitulo = isset($valores['alternativaSubtitulo'])? $valores['alternativaSubtitulo'] : "";
    $orden = isset($valores['orden'])? $valores['orden'] : "";

    $sql = "INSERT into alternativas(
            	id_pregunta,
            	tipo_alternativa,
            	titulo_alternativa,
            	subtitulo_alternativa,
            	orden
            ) values ('{$pregunta}', '{$alternativaTipo}', '{$alternativaTitulo}', '{$alternativaSubtitulo}', '{$orden}')";
    return $this->query($sql);
  }
  public function retrieveByQuestionId($idQuestion = "") {
    $sql = "SELECT
            alt.id_alternativa as id,
            alt.id_pregunta as pregunta,
            alt.tipo_alternativa as tipo,
            alt.titulo_alternativa as titulo,
            alt.subtitulo_alternativa as subtitulo,
            alt.orden as orden
            from alternativas alt
            where alt.id_pregunta = {$idQuestion}";
    return $this->query($sql);
  }

}
