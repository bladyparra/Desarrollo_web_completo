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
})
