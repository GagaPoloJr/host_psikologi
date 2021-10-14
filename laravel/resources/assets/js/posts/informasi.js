'use strict';

var tableName = '#postsTable';
$(tableName).DataTable({
  scrollX: true,
  deferRender: true,
  scroller: true,
  processing: true,
  serverSide: true,
  info: true,
  'order': [[0, 'asc']],
  ajax: {
    url: recordsURL
  },
  columnDefs: [{
    'targets': [1] // 'orderable': false,
    // 'className': 'text-center',

  }],
  columns: [{
    data: 'id',
    render: function render(data, type, row, meta) {
      return meta.row + 1 + ".";
    }
  }, {
    data: 'title',
    name: 'title'
  }, {
    data: 'id_kategori',
    name: 'id_kategori'
  }, {
    data: 'status',
    name: 'status'
  }, {
    data: function data(row) {
      var url = recordsURL + row.id;
      var data = [{
        'id_informasi': row.id,
        'url': url + '/edit'
      }];
      return prepareTemplateRender('#postsTemplate', data);
    },
    name: 'id'
  }]
});
$(document).on('click', '.delete-btn', function (event) {
  var recordId = $(event.currentTarget).data('id_informasi');
  deleteItem(recordsURL + recordId, tableName, 'Informasi');
});
$(document).on('click', '.konfirmasi-btn', function (event) {
  var recordId = $(event.currentTarget).data('id_informasi');
  deleteItem(recordsURL + recordId, tableName, 'Informasi');
});