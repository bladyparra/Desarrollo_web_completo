$(document).ready(function () {
  $('.sidebar-menu').tree()

  // DataTables
  $('#registros').DataTable({
    'paging': true,
    'pageLength': 10,
    'lengthChange': true,
    'searching': true,
    'ordering': true,
    'info': true,
    'autoWidth': false,
    'language': {
      oPaginate: {
        sNext: 'Siguiente',
        sPrevious: 'Anterior',
        sLast: 'Último',
        sFirst: 'Primero'
      },
      sInfo: 'Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros',
      sEmptyTable: 'Ningún dato disponible en esta tabla',
      sInfoEmpty: 'Mostrando registros del 0 al 0 de un total de 0 registros',
      sInfoFiltered: '(filtrado de un total de _MAX_ registros)',
      sInfoPostFix: '',
      sSearch: 'Buscar: ',
      sUrl: '',
      sInfoThousands: ',',
      sLengthMenu: 'Mostrar _MENU_ registros',
      sZeroRecords: 'No se encontraron resultados',
      sProcessing: 'Procesando...',
      sLoadingRecords: 'Cargando...',
      oAria: {
        sSortAscending: ': Activar para ordenar la columna de manera ascendente',
        sSortDescending: ': Activar para ordenar la columna de manera descendente'
      }
    }
  });

  $('#crear_registro_admin').attr('disabled', true);

  //Repetir Password
  $('#repetir_password').on('input', function () {
    var password_nuevo = $('#password').val();

    if ($(this).val() == password_nuevo) {
      $('#resultado_password').text('Correcto');
      $('#resultado_password').parents('.form-group').addClass('has-success').remove('has-error');
      $('input#password').parents('.form-group').addClass('has-success').remove('has-error');
      $('#crear_registro_admin').attr('disabled', false);
    } else {
      $('#resultado_password').text('No son iguales');
      $('#resultado_password').parents('.form-group').addClass('has-error').remove('has-success');
      $('input#password').parents('.form-group').addClass('has-error').remove('has-success');
    }
  })

  //Date picker
  $('#fecha').datepicker({
    autoclose: true
  })

  //Initialize Select2 Elements
  $('.seleccionar').select2()

  //Timepicker
  $('.timepicker').timepicker({
    showInputs: false
  })

})
