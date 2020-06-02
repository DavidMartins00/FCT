var $table = $('#fresh-table')
var $alertBtn = $('#alertBtn')

window.operateEvents = {
    'click .like': function (e, value, row, index) {
        alert('You click like icon, row: ' + JSON.stringify(row))
        console.log(value, row, index)
    },
    'click .edit': function (e, value, row, index) {
        alert('You click edit icon, row: ' + JSON.stringify(row))
        console.log(value, row, index)
    },
    'click .remove': function (e, value, row, index) {
        $table.bootstrapTable('remove', {
            field: 'id',
            values: [row.id]
        })
    }
}

function operateFormatter(value, row, index) {
    return [
        '&lt;a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
        '&lt;i class="fa fa-heart">&lt;/i>',
        '&lt;/a>',
        '&lt;a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
        '&lt;i class="fa fa-edit">&lt;/i>',
        '&lt;/a>',
        '&lt;a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
        '&lt;i class="fa fa-remove">&lt;/i>',
        '&lt;/a>'
    ].join('')
}

$(function () {
    $table.bootstrapTable({
        classes: 'table table-hover table-striped',
        toolbar: '.toolbar',

        search: true,
        showRefresh: true,
        showToggle: true,
        showColumns: true,
        pagination: true,
        striped: true,
        sortable: true,
        pageSize: 8,
        pageList: [8, 10, 25, 50, 100],

        formatShowingRows: function (pageFrom, pageTo, totalRows) {
            return ''
        },
        formatRecordsPerPage: function (pageNumber) {
            return pageNumber + ' rows visible'
        }
    })

    $alertBtn.click(function () {
        alert('You pressed on Alert')
    })
})
