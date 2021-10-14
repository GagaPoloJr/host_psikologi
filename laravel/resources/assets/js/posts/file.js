'use strict';

var tableName = '#postsTable';
$(tableName).DataTable({
  scrollX: true,
  deferRender: true,
  scroller: true,
  processing: true,
  serverSide: true,
  paginate: true,
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
    data: 'nama_file',
    name: 'nama_file'
  }, {
    data: 'jenis_file',
    name: 'jenis_file'
  }, {
    data: function data(row) {
      var url = recordsURL + row.id;
      var data = [{
        'id_file': row.id,
        'url': url + '/edit'
      }];
      return prepareTemplateRender('#postsTemplate', data);
    },
    name: 'id'
  }]
});
$(document).on('click', '.delete-btn', function (event) {
  var recordId = $(event.currentTarget).data('id');
  deleteItem(recordsURL + recordId, tableName, 'Post');
});
$(document).on('click', '.konfirmasi-btn', function (event) {
  var recordId = $(event.currentTarget).data('id_file');
  deleteItem(recordsURL + recordId, tableName, 'Post');
});