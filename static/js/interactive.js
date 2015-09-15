INVENTARTE.Libelula = {
  request : "",
  getValores : function () {
    $.ajax({
      method: "POST",
      url: "http://localhost/libelula.dev/CalculadoraController/transporte",
      data : {nombres : "NOMBRE", apellidos : "NOMBRE", email : "NOMBRE@nombre.com", miembrosFamilia : 2}
    }).done(function( msg ) {
      this.request = msg;
    });
  },
  setValores : function (datos) {
    $.ajax({
      method : "POST"
    }).done();
  }

}

function ejecutarAjax() {
  var valoresDevueltos;
  var request = $.ajax({
    method: "POST",
    url: "http://localhost/libelula.dev/CalculadoraController/transporte",
    data : {nombres : "NOMBRE", apellidos : "NOMBRE", email : "NOMBRE@nombre.com", miembrosFamilia : 2}
  });
  request.done(function( msg ) {
      valoresDevueltos = msg;
      console.log(valoresDevueltos);
    });
    return valoresDevueltos;
}
