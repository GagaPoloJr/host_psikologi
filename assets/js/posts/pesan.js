/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!********************************************!*\
  !*** ./resources/assets/js/posts/pesan.js ***!
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
  //   'targets': [4],
  //   "render": function render(data, type, row, meta) {
  //     return moment(data);
  //   }
  // },{
    'targets': [4],
    // 'orderable': false,
    // 'className': 'text-center',
    render: function render(data, type, row) {
      switch (data) {
        case "Sudah Dibalas":
          return '<span class="badge badge-primary">Sudah Dibalas</span>';
          break;

        case "belum dibalas":
          return '<span class="badge badge-warning">Belum Dibalas</span>';
          break;

        case 2:
          return '<span class="label label-danger">Suspended</span>';
          break;
      }
    }
  }, {
    'targets': [6],
    // 'orderable': false,
    // 'className': 'text-center',
    render: function render(data, type, row) {
      var url = recordsURL + row.id;
      var data = [{
        'id': row.id,
        'url': url + '/balas_pesan'
      }];

      switch (row.status) {
        case "Sudah Dibalas":
          return '<a title="Balas Pesan" class="disabled btn btn-success action-btn edit-btn" data-id="{{:id}}" href="{{:url}}"><i class="fa fa-reply"></i></a>';
          break;

        case "belum dibalas":
          return prepareTemplateRender('#postsTemplate', data);
      }
    }
  }],
  columns: [{
    data: 'id',
    render: function render(data, type, row, meta) {
      return meta.row + 1 + ".";
    }
  }, {
    data: 'nama',
    name: 'nama'
  }, {
    data: 'email',
    name: 'email'
  }, {
    data: 'pesan',
    name: 'pesan'
  }, {
    data: 'status',
    name: 'status'
  }, {
    data: 'created_at',
    name: 'created_at'
  }, {
    data: function data(row) {
      var url = recordsURL + row.id;
      var data = [{
        'id': row.id,
        'url': url + '/balas_pesan'
      }];
      return prepareTemplateRender('#postsTemplate', data);
    },
    name: 'id'
  }]
});
$(document).on('click', '.delete-btn', function (event) {
  var recordId = $(event.currentTarget).data('id');
  deleteItem(recordsURL + recordId, tableName, 'Pesan');
});
/******/ })()
;