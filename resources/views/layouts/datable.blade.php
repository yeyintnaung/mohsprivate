
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/hospital/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Dec 2020 11:29:18 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>MOHS DEMO</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{{url('nm/jsgrid/jsgrid-theme.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="{{url('nm/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{url('nm/datatables.net-bs4/css/responsive.dataTables.min.css')}}">
{{--    <link href="{{url('nm/morrisjs/morris.css')}}" rel="stylesheet">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css" integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==" crossorigin="anonymous" />    <!--Toaster Popup message CSS -->--}}
{{--    <link href="{{url('nm/toast-master/css/jquery.toast.css')}}" rel="stylesheet">--}}
{{--    <!-- Custom CSS -->--}}
    <link href="{{url('dist/css/style.min.css')}}" rel="stylesheet">

    <!-- Dashboard 1 Page CSS -->
{{--    <link href="{{url('dist/css/pages/dashboard1.css')}}" rel="stylesheet">--}}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="skin-megna fixed-layout">
@yield('content')
</div>
<script src="{{url('nm/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{url('nm/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{url('dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--Wave Effects -->
<script src="{{url('dist/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{url('dist/js/sidebarmenu.js')}}"></script>
<!--stickey kit -->
<script src="{{url('nm/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
<script src="{{url('nm/sparkline/jquery.sparkline.min.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{url('dist/js/custom.min.js')}}"></script>
<!-- This is data table -->
<script src="{{url('nm/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('nm/datatables.net-bs4/js/dataTables.responsive.min.js')}}"></script>
<!-- start - This is for export functionality only -->
<script src="{{url('cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js')}}"></script>
<script src="{{url('cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js')}}"></script>
<script src="{{url('cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js')}}"></script>
<script src="{{url('cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js')}}"></script>
<script src="{{url('cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js')}}"></script>
<script src="{{url('cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js')}}"></script>
<script src="{{url('cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js')}}"></script>
@stack('script')
<!-- end - This is for export functionality only -->
<script>
    $(function () {
        $('#myTable').DataTable();
        var table = $('#example').DataTable({
            "columnDefs": [{
                "visible": false,
                "targets": 2
            }],
            "order": [
                [2, 'desc']
            ],
            "displayLength": 25,

            "drawCallback": function (settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;
                api.column(2, {
                    page: 'current'
                }).data().each(function (group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                        last = group;
                    }
                });
            }
        });
        // Order by the grouping
        $('#example tbody').on('click', 'tr.group', function () {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table.order([2, 'desc']).draw();
            } else {
                table.order([2, 'asc']).draw();
            }
        });
        // responsive table
        $('#config-table').DataTable({
            responsive: true
        });
        $('#example23').DataTable({
            dom: 'B<"clear">lfrtip',
            responsive:true,
            autoWidth: false,
            scrollX: true

            buttons: [
               // 'copy', 'csv', 'excel', 'pdf', 'print'
            ], order: [
                [0, 'desc']
            ],

        });

        $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
    });

</script>
</body>


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/hospital/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Dec 2020 11:29:30 GMT -->
</html>
