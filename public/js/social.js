$(document).ready(function() {
  $('#btn-comentario').on('click', function() {
    var proyectoId = $('#proyecto').val();
    var url = '/proyecto/dislike/'+proyectoId;
    var con = $('#contenido').val();
    $.post(url, {
      contenido: con
    }).done(function(res) {
      console.log(JSON.stringify(res));
    });
  });
});
