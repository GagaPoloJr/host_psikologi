/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!********************************************!*\
  !*** ./resources/assets/js/posts/posts.js ***!
  \********************************************/


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
    'targets': [4],
    // 'orderable': false,
    // 'className': 'text-center',
    render: function render(data, type, row) {
      switch (data) {
        case "publish":
          return '<span class="badge badge-primary">Publish</span>';
          break;

        case "belum publish":
          return '<span class="badge badge-warning">Belum Publish</span>';
          break;

        case 2:
          return '<span class="label label-danger">Suspended</span>';
          break;
      }
    }
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
    data: 'kategori_pembagian',
    name: 'kategori_pembagian'
  }, {
    data: 'nama_kat_peng',
    name: 'nama_kat_peng'
  }, {
    data: 'status',
    name: 'status'
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
  var recordId = $(event.currentTarget).data('id');
  deleteItem(recordsURL + recordId, tableName, 'Post');
});
$(document).on('click', '.konfirmasi-btn', function (event) {
  var recordId = $(event.currentTarget).data('id');
  deleteItem(recordsURL + recordId, tableName, 'Post');
});
/******/ })()
;