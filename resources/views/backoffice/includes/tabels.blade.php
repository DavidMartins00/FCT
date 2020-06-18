


    <link rel="stylesheet" href="{{asset('assetsTabel/css/bootstrap.css')}}">
    <link href="{{asset('assetsTabel/css/fresh-bootstrap-table.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">

    <script src="{{asset('assetsTabel/js/bootstrap.js')}}"></script>
    <script src="{{asset('assetsTabel/js/jquery.js')}}"></script>
    <script src="{{asset('assetsTabel/js/bootstrap-table.js')}}"></script>
</head>
<body>

<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="fresh-table full-color-orange">
                    <!--
                      Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
                      Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
                    -->
                    <div class="toolbar">
                        <button href="#" class="btn btn-default">Novo</button>
                    </div>

                    <table id="fresh-table" class="table">
                        <thead>
                        <th data-field="id">ID</th>
                        <th data-field="name" data-sortable="true">Name</th>
                        <th data-field="salary" data-sortable="true">Salary</th>
                        <th data-field="country" data-sortable="true">Country</th>
                        <th data-field="city">City</th>
                        <th data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">Actions</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dakota Rice</td>
                            <td>$36,738</td>
                            <td>Niger</td>
                            <td>Oud-Turnhout</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Minerva Hooper</td>
                            <td>$23,789</td>
                            <td>Curaçao</td>
                            <td>Sinaai-Waas</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Sage Rodriguez</td>
                            <td>$56,142</td>
                            <td>Netherlands</td>
                            <td>Baileux</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Philip Chaney</td>
                            <td>$38,735</td>
                            <td>Korea, South</td>
                            <td>Overland Park</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Doris Greene</td>
                            <td>$63,542</td>
                            <td>Malawi</td>
                            <td>Feldkirchen in Kärnten</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Mason Porter</td>
                            <td>$78,615</td>
                            <td>Chile</td>
                            <td>Gloucester</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Doris Greene</td>
                            <td>$63,542</td>
                            <td>Malawi</td>
                            <td>Feldkirchen in Kärnten</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Mason Porter</td>
                            <td>$78,615</td>
                            <td>Chile</td>
                            <td>Gloucester</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Doris Greene</td>
                            <td>$63,542</td>
                            <td>Malawi</td>
                            <td>Feldkirchen in Kärnten</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Mason Porter</td>
                            <td>$78,615</td>
                            <td>Chile</td>
                            <td>Gloucester</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Doris Greene</td>
                            <td>$63,542</td>
                            <td>Malawi</td>
                            <td>Feldkirchen in Kärnten</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Mason Porter</td>
                            <td>$78,615</td>
                            <td>Chile</td>
                            <td>Gloucester</td>
                            <td></td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>



</body>
<script type="text/javascript">
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
            '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
            '<i class="fa fa-heart"></i>',
            '</a>',
            '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
            '<i class="fa fa-edit"></i>',
            '</a>',
            '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
            '<i class="fa fa-remove"></i>',
            '</a>'
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

    $('#sharrreTitle').sharrre({
        share: {
            twitter: true,
            facebook: true
        },
        template: '',
        enableHover: false,
        enableTracking: true,
        render: function (api, options) {
            $("#sharrreTitle").html('Thank you for ' + options.total + ' shares!')
        },
        enableTracking: true,
        url: location.href
    })

    $('#twitter').sharrre({
        share: {
            twitter: true
        },
        enableHover: false,
        enableTracking: true,
        buttons: { twitter: {via: 'CreativeTim'}},
        click: function (api, options) {
            api.simulateClick()
            api.openPopup('twitter')
        },
        template: '<i class="fa fa-twitter"></i> {total}',
        url: location.href
    })

    $('#facebook').sharrre({
        share: {
            facebook: true
        },
        enableHover: false,
        enableTracking: true,
        click: function (api, options) {
            api.simulateClick()
            api.openPopup('facebook')
        },
        template: '<i class="fa fa-facebook-square"></i> {total}',
        url: location.href
    })
</script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga')

    ga('create', 'UA-46172202-1', 'auto')
    ga('send', 'pageview')

</script>

