/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!****************************************************!*\
  !*** ./resources/assets/js/posts/kategori_info.js ***!
  \****************************************************/


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
    data: 'nama_kategori',
    name: 'nama_kategori'
  }, {
    data: function data(row) {
      var url = recordsURL + row.id;
      var data = [{
        'id': row.id,
        'url': url + '/edit'
      }];
      return prepareTemplateRender('#postsTemplate', data);
    },
    name: 'id'
  }]
});
$(document).on('click', '.delete-btn', function (event) {
  var recordId = $(event.currentTarget).data('id_kategori');
  deleteItem(recordsURL + recordId, tableName, 'Post');
});
/******/ })()
;