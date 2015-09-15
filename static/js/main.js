$('.results .tab-links a').on('click', function(e)  {
    var currentAttrValue = $(this).attr('href');
    $('.results ' + currentAttrValue).show().siblings().hide();
    // Change/remove current tab to active
    $(this).parent('li').addClass('active').siblings().removeClass('active');
    e.preventDefault();
});
$('.compromisos_listado .tab-ejes a').on('click', function(e)  {
    var currentAttrValue = $(this).attr('href');
    $('.compromisos_listado ' + currentAttrValue).show().siblings().hide();
    // Change/remove current tab to active
    $(this).parent('li').addClass('active').siblings().removeClass('active');
    e.preventDefault();
});
/* disabled subitems */
$(".tab-compromisos input[type='checkbox']").change(function() {
    var subitems = $(this).parent().siblings(".subitems");
    if(this.checked) {
       subitems.css("opacity","1");
    }else{
        subitems.css("opacity","0.4");
    }
});
$(".consideraciones").fancybox({
    maxWidth    : 800,
    maxHeight   : 600,
    fitToView   : false,
    width       : '90%',
    height      : '70%',
    autoSize    : false,
    closeClick  : false,
    openEffect  : 'none',
    closeEffect : 'none'
});
/* PREGUNTAS */

$(window).load(function() {
    $('.tooltip').tooltipster({
        position: 'top',
        positionTracker: true,
        multiple: true,
        minWidth: 80,
        maxWidth: 180,
        functionReady: function(){
          var offset = $(this).offset();
          console.log(offset.top);
          $(".tooltipster-base").offset({top:offset.top - 20});
         }
    });
    /* $('a.resultado_tooltip[title]').qtip();*/
    var pregunta_actual = $(".viewed").attr('id');
    var numero_preg = $(".viewed").find("li").length;
    $(".num_actual").html("01");
    $(".num_final").html('0'+numero_preg+'');
    $("a.contador").on('click', function(e){
        var pregunta_actual = $(".viewed").attr('id');
        var numero_preg = $(".viewed").find("li").length;
        pregunta_ahora = $(".viewed").attr('id');
        numero_ahora = $(".viewed").find(".activo").index() + 1;
        $(".cuestionario .active").tooltipster('hide');
        num = numero_ahora+1;
        $(".num_actual").html('0'+num+''); //Aumentamos el numero de preguntas
        if( numero_ahora < numero_preg){

            /* Aca nos vamos a la siguiente pregunta */

            if(($('input[name="transporte5"]:checked').val())=="noVehiculo"){

                $('input[name="transporte5"]').attr('checked', false);
                li_ahora = $(".viewed .activo");
                li_ahora.removeClass("activo");
                li_ahora.next("li").next("li").next("li").next("li").addClass("activo");
                num = 7;
                $(".num_actual").html('0'+num+'');

            }else{

                li_ahora = $(".viewed .activo");
                li_ahora.removeClass("activo");
                li_ahora.next("li").addClass("activo");
            }


        }
        else if( numero_ahora == numero_preg ){

            /* Aca nos vamos a la sgte seccion
               Pero antes verificamos si no estamos en la ultima seccion*/
            if(pregunta_actual == "agua"){


                id = pregunta_actual;
                /* Pasamos toda la info al ajax */
                /*obtener_datos(id);
                resultados();*/

                $(".question").css("display", "none");
                $(".results").removeClass("hide");
                $(".results").addClass("show");

            }else{

                id = pregunta_actual;


                if((id == "inicio")&&(!$('input[name="personas"]').val()) || ($('input[name="personas"]').val()=="0")){

                    $("#inicio input[type='text']").addClass("error").parent().append("<span class='error_mssge'>Hola, necesitamos por favor que ingreses un número valido. </<span>");

                }else{

                    /*obtener_datos(id);*/
                    $(".alert").css("display","none");



                    ultima_seccion = $('#'+id+'');

                    /*Aca desactivamos todo lo quetenga que ver con la ultima seccion*/
                    $(".cuestionario").find(".active").removeClass("active").addClass("tested");
                    /*Aca deberia ir el reemplazo por el numero obtenido */
                    ultima_seccion.removeClass("viewed");


                    /*Aca activamos todo lo que tenga quever con la sgte seccion */

                    ultima_seccion.next("div").addClass("viewed");
                    pregunta_activa = $(".viewed").attr('id');
                    $(".cuestionario").find('.'+pregunta_activa+'').addClass("active");
                    $('#'+pregunta_activa+'').find("li:first-child").addClass("activo");

                    num_nuevo = $(".viewed").find("li").length;

                    $(".num_actual").html("01"); //Reseteamos el numero de pregunta actual
                    $(".num_final").html('0'+num_nuevo+''); //Ponemos la cantidad de preguntas que tocan

                    //Activamos el tooltip
                    $(".cuestionario .active").tooltipster('show');

                }


            }






        }
        else{
            console.log("algo raro esta pasando");
        }
        e.preventDefault();
    });
});
$('.ir_compromisos').on('click', function(e)  {
    $("#resultados").removeClass("active").css("display","none");
    $("#compromisos").addClass("active").css("display","block");;
    $(".tab-links .resultados").parent("li").removeClass("active");
    $(".tab-links .compromisos").parent("li").addClass("active");
    e.preventDefault();
});
$('.ir_contribucion').on('click', function(e)  {
    $("#compromisos").removeClass("active").css("display","none");
    $("#contribucion").addClass("active").css("display","block");;
    $(".tab-links .compromisos").parent("li").removeClass("active");
    $(".tab-links .contribucion").parent("li").addClass("active");
    e.preventDefault();
});
$('.ir_compartelo').on('click', function(e)  {
    $("#contribucion").removeClass("active").css("display","none");
    $("#compartelo").addClass("active").css("display","block");;
    $(".tab-links .contribucion").parent("li").removeClass("active");
    $(".tab-links .compartelo").parent("li").addClass("active");
    e.preventDefault();
});
$('.sumate').on('click', function(e)  {
    if($(this).hasClass("final")){
        window.location.href = 'preguntas';
    }else{
        $(this).parent().parent().addClass("hide").next(".message").removeClass("hide");
    }
    e.preventDefault();
});


/****************************
Pie Resultados
****************************/
var pieData = [
    {
        value: 40,
        color:"#727C79",
        highlight: "#8A9995",
        label: "Energia"
    },
    {
        value: 20,
        color: "#EEB15B",
        highlight: "#F2C381",
        label: "Residuos"
    },
    {
        value: 20,
        color: "#9ABC8A",
        highlight: "#AFDA9A",
        label: "Transporte"
    },
    {
        value: 20,
        color: "#BF496A",
        highlight: "#E06386",
        label: "Alimentacion"
    }


];

window.onload = function(){
    var ctx = document.getElementById("chart-area").getContext("2d");
    window.myPie = new Chart(ctx).Pie(pieData,{
        tooltipFontSize: 10,
        tooltipTitleFontSize: 10
    });
    Chart.defaults.global.responsive = true;
};
