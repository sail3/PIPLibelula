<?php
/**
 * Controlador para la calculadora.
 */
class CalculadoraController extends Controller {
  public function index(){
    print "hola Calculadora";
    print_r($this->input);
    exit();
  }
  public function transporte() {
    $usuarioModel = $this->loadModel('UsuarioModel');
    $preguntaModel = $this->loadModel('PreguntaModel');
    $alternativaModel = $this->loadModel('AlternativaModel');

    $nombres = $this->input['nombres'];
    $apellidos = $this->input['apellidos'];
    $email = $this->input['email'];
    $miembrosFamilia = $this->input['miembrosFamilia'];
    $fechaCreacion = date('Y-m-d');
    $data = array_keys($this->input);
    $data = compact($data, "fechaCreacion");
    $lastId = $usuarioModel->insert($data);

    $preguntas = $preguntaModel->retrieveByCategory(PreguntaModel::TRANSPORTE);
    foreach ($preguntas as $pregunta) {
      $pregunta->alternativas = $alternativaModel->retrieveByQuestionId($pregunta->id);
    }
    $this->make_response(array('data' => $preguntas));
  }
  public function energia() {
    $usuarioModel = $this->loadModel('UsuarioModel');
    $preguntaModel = $this->loadModel('PreguntaModel');
    $alternativaModel = $this->loadModel('AlternativaModel');



    $preguntas = $preguntaModel->retrieveByCategory(PreguntaModel::ENERGIA);
    foreach ($preguntas as $pregunta) {
      $pregunta->alternativas = $alternativaModel->retrieveByQuestionId($pregunta->id);
    }
    $this->make_response(array('data' => $preguntas));
  }
  public function alimentacion() {
    $usuarioModel = $this->loadModel('UsuarioModel');
    $preguntaModel = $this->loadModel('PreguntaModel');
    $alternativaModel = $this->loadModel('AlternativaModel');


    $preguntas = $preguntaModel->retrieveByCategory(PreguntaModel::ALIMENTACION);
    foreach ($preguntas as $pregunta) {
      $pregunta->alternativas = $alternativaModel->retrieveByQuestionId($pregunta->id);
    }
    $this->make_response(array('data' => $preguntas));
  }
  public function residuos() {
    $usuarioModel = $this->loadModel('UsuarioModel');
    $preguntaModel = $this->loadModel('PreguntaModel');
    $alternativaModel = $this->loadModel('AlternativaModel');


    $preguntas = $preguntaModel->retrieveByCategory(PreguntaModel::RESIDUOS);
    foreach ($preguntas as $pregunta) {
      $pregunta->alternativas = $alternativaModel->retrieveByQuestionId($pregunta->id);
    }
    $this->make_response(array('data' => $preguntas));
  }
  public function agua() {
    $usuarioModel = $this->loadModel('UsuarioModel');
    $preguntaModel = $this->loadModel('PreguntaModel');
    $alternativaModel = $this->loadModel('AlternativaModel');


    $preguntas = $preguntaModel->retrieveByCategory(PreguntaModel::AGUA);
    foreach ($preguntas as $pregunta) {
      $pregunta->alternativas = $alternativaModel->retrieveByQuestionId($pregunta->id);
    }
    $this->make_response(array('data' => $preguntas));
  }
  public function resultado() {
    $respuestaModel = $this->loadModel('RespuestaModel');
    $idUsuario = isset($this->input['idUsuario'])? $this->input['idUsuario']: 17;
    $idAlternativa = isset($this->input['idAlternativa'])? $this->input['idAlternativa']: 22;
    $valorRespuesta = isset($this->input['valorRespuesta']) ? $this->input['valorRespuesta'] : "";
    $factorUnitario = isset($this->input['factorUnitario']) ? $this->input['factorUnitario'] : 0;
    $resultadoGenerado = isset($this->input['resultadoGenerado']) ? $this->input['resultadoGenerado']: 0;
    $fechaCreacion = date('Y-m-d');
    $data = array_keys($this->input);
    $data = compact($data, "fechaCreacion",'valorRespuesta', 'factorUnitario','resultadoGenerado');
    $lastId = $respuestaModel->insert($data);

    $resultado = $respuestaModel->retrieveByUserId($idUsuario);
    $this->make_response($resultado);
  }
}
