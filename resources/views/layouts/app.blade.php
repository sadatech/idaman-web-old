<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Metronic | Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    
    <script type="text/javascript">window.paceOptions = {"ajax":false,"document":true}</script>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <link href="assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <link href="assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="assets/layouts/layout5/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/layouts/layout5/css/custom.min.css" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="favicon.ico" /> 
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-md">
    <!-- BEGIN CONTAINER -->
    <div class="wrapper">
        <!-- BEGIN HEADER -->
        <header class="page-header">
            <nav class="navbar mega-menu" role="navigation">
                <div class="container-fluid">
                    <div class="clearfix navbar-fixed-top">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </span>
                        </button>
                        <!-- End Toggle Button -->
                        <!-- BEGIN LOGO -->
                        <a id="index" class="page-logo" href="index.html">
                            <H1>ID AMAN</H1> </a>
                            <!-- END LOGO -->
                            <!-- BEGIN SEARCH -->
                            <form class="search" action="extra_search.html" method="GET">
                                <input type="name" class="form-control" name="query" placeholder="Search...">
                                <a href="javascript:;" class="btn submit md-skip">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                            <!-- END SEARCH -->
                            <!-- BEGIN TOPBAR ACTIONS -->
                            <div class="topbar-actions">
                                <!-- BEGIN GROUP NOTIFICATION -->
                                <div class="btn-group-notification btn-group" id="header_notification_bar">
                                    <button type="button" class="btn btn-sm md-skip dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <i class="icon-bell"></i>
                                        <span class="badge">7</span>
                                    </button>
                                    <ul class="dropdown-menu-v2">
                                        <li class="external">
                                            <h3>
                                                <span class="bold">12 pending</span> notifications</h3>
                                                <a href="#">view all</a>
                                            </li>
                                            <li>
                                                <ul class="dropdown-menu-list scroller" style="height: 250px; padding: 0;" data-handle-color="#637283">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <span class="details">
                                                                <span class="label label-sm label-icon label-success md-skip">
                                                                    <i class="fa fa-plus"></i>
                                                                </span> New user registered. </span>
                                                                <span class="time">just now</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <span class="details">
                                                                    <span class="label label-sm label-icon label-danger md-skip">
                                                                        <i class="fa fa-bolt"></i>
                                                                    </span> Server #12 overloaded. </span>
                                                                    <span class="time">3 mins</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <span class="details">
                                                                        <span class="label label-sm label-icon label-warning md-skip">
                                                                            <i class="fa fa-bell-o"></i>
                                                                        </span> Server #2 not responding. </span>
                                                                        <span class="time">10 mins</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <span class="details">
                                                                            <span class="label label-sm label-icon label-info md-skip">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </span> Application error. </span>
                                                                            <span class="time">14 hrs</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <span class="details">
                                                                                <span class="label label-sm label-icon label-danger md-skip">
                                                                                    <i class="fa fa-bolt"></i>
                                                                                </span> Database overloaded 68%. </span>
                                                                                <span class="time">2 days</span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <span class="details">
                                                                                    <span class="label label-sm label-icon label-danger md-skip">
                                                                                        <i class="fa fa-bolt"></i>
                                                                                    </span> A user IP blocked. </span>
                                                                                    <span class="time">3 days</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:;">
                                                                                    <span class="details">
                                                                                        <span class="label label-sm label-icon label-warning md-skip">
                                                                                            <i class="fa fa-bell-o"></i>
                                                                                        </span> Storage Server #4 not responding dfdfdfd. </span>
                                                                                        <span class="time">4 days</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <span class="details">
                                                                                            <span class="label label-sm label-icon label-info md-skip">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </span> System Error. </span>
                                                                                            <span class="time">5 days</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <span class="details">
                                                                                                <span class="label label-sm label-icon label-danger md-skip">
                                                                                                    <i class="fa fa-bolt"></i>
                                                                                                </span> Storage server failed. </span>
                                                                                                <span class="time">9 days</span>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- END GROUP NOTIFICATION -->
                                                                        <!-- BEGIN GROUP INFORMATION -->
                                                                        <div class="btn-group-red btn-group">
                                                                            <button type="button" class="btn btn-sm md-skip dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                                <i class="fa fa-plus"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu-v2" role="menu">
                                                                                <li class="active">
                                                                                    <a href="#">New Post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#">New Comment</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#">Share</a>
                                                                                </li>
                                                                                <li class="divider"></li>
                                                                                <li>
                                                                                    <a href="#">Comments
                                                                                        <span class="badge badge-success">4</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#">Feedbacks
                                                                                        <span class="badge badge-danger">2</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- END GROUP INFORMATION -->
                                                                        <!-- BEGIN USER PROFILE -->
                                                                        <div class="btn-group-img btn-group">
                                                                            <button type="button" class="btn btn-sm md-skip dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                                <span>Hi, Marcus</span>
                                                                                <img src="assets/layouts/layout5/img/avatar1.jpg" alt=""> </button>
                                                                                <ul class="dropdown-menu-v2" role="menu">
                                                                                    <li>
                                                                                        <a href="page_user_profile_1.html">
                                                                                            <i class="icon-user"></i> My Profile
                                                                                            <span class="badge badge-danger">1</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="app_calendar.html">
                                                                                            <i class="icon-calendar"></i> My Calendar </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="app_inbox.html">
                                                                                                <i class="icon-envelope-open"></i> My Inbox
                                                                                                <span class="badge badge-danger"> 3 </span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="app_todo_2.html">
                                                                                                <i class="icon-rocket"></i> My Tasks
                                                                                                <span class="badge badge-success"> 7 </span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="divider"> </li>
                                                                                        <li>
                                                                                            <a href="page_user_lock_1.html">
                                                                                                <i class="icon-lock"></i> Lock Screen </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="{{ url('/logout') }}">
                                                                                                    <i class="icon-key"></i> Log Out </a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <!-- END USER PROFILE -->
                                                                                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                                                                                        <button type="button" class="quick-sidebar-toggler md-skip" data-toggle="collapse">
                                                                                            <span class="sr-only">Toggle Quick Sidebar</span>
                                                                                            <i class="icon-logout"></i>
                                                                                        </button>
                                                                                        <!-- END QUICK SIDEBAR TOGGLER -->
                                                                                    </div>
                                                                                    <!-- END TOPBAR ACTIONS -->
                                                                                </div>
                                                                                @include('layouts.sidebar')

                                                                                <div class="container-fluid">
                                                                                    <div class="page-content">
                                                                                        <!-- BEGIN BREADCRUMBS -->
                                                                                        <div class="breadcrumbs">
                                                                                            <h1>{!! ucwords(str_replace('-', ' ', Request::segment(1))) !!}</h1>
                                                                                            <ol class="breadcrumb">
                                                                                                <li>
                                                                                                    <a href="#">Home</a>
                                                                                                </li>
                                                                                                <li class="active">{!! ucwords(str_replace('-', ' ', Request::segment(1))) !!}</li>
                                                                                            </ol>
                                                                                        </div>
                                                                                        <!-- END BREADCRUMBS -->
                                                                                        <!-- BEGIN PAGE BASE CONTENT -->
                                                                                        <!-- BEGIN DASHBOARD STATS 1-->
                                                                                        <div class="row">
                                                                                            @yield('content')
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
                                                                            <!-- END CORE PLUGINS -->
                                                                            <!-- BEGIN PAGE LEVEL PLUGINS -->
                                                                            <script src="assets/global/plugins/moment.min.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
                                                                            <!-- END PAGE LEVEL PLUGINS -->
                                                                            <script src="assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
                                                                            <!-- BEGIN THEME GLOBAL SCRIPTS -->

                                                                            <script src="assets/global/scripts/datatable.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
                                                                            <script src="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>

                                                                            <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
                                                                            <!-- END THEME GLOBAL SCRIPTS -->

                                                                            <script src="assets/pages/scripts/table-datatables-editable.min.js" type="text/javascript"></script>
                                                                            <script src="assets/pages/scripts/ui-modals.min.js" type="text/javascript"></script>
                                                                            <!-- BEGIN PAGE LEVEL SCRIPTS -->
                                                                            <script src="assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>

                                                                            <script src="assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
                                                                            <!-- END PAGE LEVEL SCRIPTS -->
                                                                            <!-- BEGIN THEME LAYOUT SCRIPTS -->
                                                                            <script src="assets/layouts/layout5/scripts/layout.min.js" type="text/javascript"></script>
                                                                            <script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
                                                                            <script>
                                                                            function myMap() {
                                                                                var myLatLng = {lat: -25.363, lng: 131.044};
                                                                                var map = new google.maps.Map(document.getElementById('map'), {
                                                                                  center: myLatLng,
                                                                                  scrollwheel: false,
                                                                                  zoom: 4
                                                                              });
                                                                                var marker = new google.maps.Marker({
                                                                                  map: map,
                                                                                  position: myLatLng,
                                                                                  title: 'Hello World!'
                                                                              });
                                                                            }
                                                                            </script>

                                                                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAoPKRe4m2TAn9c9FKRkUolE0SkIDfyFXE&callback=myMap"
                                                                            async defer></script>
                                                                            @yield('additional-script')
                                                                            <!-- for kejadian-->
                                                                            <script type="text/javascript">
                                                                            $.ajaxSetup({
                                                                                headers: {
                                                                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                                                }
                                                                            });
                                                                            var arr = [];
                                                                            $(document).ready(function() {
                                                                                $("#id_kejadian").on('click', function() {
                                                                                    event.preventDefault();
                                                                                    console.log("a");
                                                                                });
                                                                            });
                                                                            function check_kejadian (id) {
                                                                                $('input[type=checkbox]').each(function(){
                                                                                    arr.push(id);
                                                                                });
                                                                                var uniqueSet = new Set(arr);
                                                                                var uniqueArr = Array.from(uniqueSet);
                                                                                // console.log(uniqueArr);
                                                                                $(".broadcast").attr('data-id',uniqueArr);
                                                                                $(".broadcast").attr('id',uniqueArr);
                                                                                
                                                                            }
        $('#brodcast').on('show.bs.modal', function(e) {
            var id = e.relatedTarget.id;
            console.log(id);

            $("#id_kejadians").val(id);
             $.ajax({
                url: "{{ url('api/searchLatLong') }}",
                type: 'POST',
                dataType: 'json',
                data: {id: id},
            })
            .done(function(data) {
                var datas_lat = "";
                var datas_long = "";
                for (var i = data.length - 1; i >= 0; i--) {
                    datas_lat += "<option value='"+data[i]['lat']+"'>"+data[i]['lat']+"</td>";
                    datas_long += "<option value='"+data[i]['lon']+"'>"+data[i]['lon']+"</td>";
                }
                $("#lat_id").html(datas_lat);
                $("#long_id").html(datas_long);
                // $("#judul").html(data.description);
                // $("#jam_kejadian").html(data.updated_at);
                // $("#alamat").html(data.lat);
                // console.log(data);
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });
        });

        $('#detail_kejadian').on('show.bs.modal', function(e) {

            var id = e.relatedTarget.id;
            $.ajax({
                url: "{{ url('api/showKejadian') }}",
                type: 'POST',
                dataType: 'json',
                data: {id: id},
            })
            .done(function(data) {
                $("#judul").html(data.description);
                $("#jam_kejadian").html(data.updated_at);
                $("#alamat").html("Latitude : "+data.lat+ ", Longitude : "+data.lon);

            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });
            // console.log(id);

        });

        //for report

$("#form_report").validate({
    rules: {
        startDate: "required",
        endDate: "required",
    },
    messages: {
        startDate: "Please enter your startDate",
        endDate: "Please enter your endDate",

    },
    submitHandler: function(form) {
       if($.fn.dataTable.isDataTable('#report')){
           $('#report').DataTable().clear();
           $('#report').DataTable().destroy();
       }
       var form = $("#form_report").serializeArray();
       var oTable = $('#report').DataTable({
        dom: 'Bfrtip',
        "processing": true,
        scrollX : true,
        searching : true,
        language: {
            aria: {
                sortAscending: ": activate to sort column ascending",
                sortDescending: ": activate to sort column descending"
            },
            emptyTable: "No data available in table",
            info: "Showing _START_ to _END_ of _TOTAL_ entries",
            infoEmpty: "No entries found",
            infoFiltered: "(filtered1 from _MAX_ total entries)",
            lengthMenu: "_MENU_ entries",
            search: "Search:",
            zeroRecords: "No matching records found"
        },
        buttons: [{
            extend: "print",
            className: "btn dark btn-outline"
        }, {
            extend: "copy",
            className: "btn red btn-outline"
        }, {
            extend: "pdf",
            className: "btn green btn-outline"
        }, {
            extend: "excel",
            className: "btn yellow btn-outline "
        }, {
            extend: "csv",
            className: "btn purple btn-outline "
        }, {
            extend: "colvis",
            className: "btn dark btn-outline",
            text: "Columns"
        }],
        responsive: !0,
        "serverSide": true,
        "ajax": {
            "url": "{{ url('api/report') }}",
            "type": "POST",
            "data" : {startDate : form[1].value, endDate : form[2].value, status : form[0].value}
        },
        columns: [
        { data: 'description', name: 'description' },
        { data: 'lat', name: 'lat' },
        { data: 'lon', name: 'lon' },
        { data: 'status', name: 'status' },
        { data: 'updated_at', name: 'updated_at' },
        { data: 'type', name: 'type' }
        ]
    });
    }
});
$("#form_news_report").validate({
    rules: {
        startDate: "required",
        endDate: "required",
    },
    messages: {
        startDate: "Please enter your startDate",
        endDate: "Please enter your endDate",

    },
    submitHandler: function(form) {
       if($.fn.dataTable.isDataTable('#news_report')){
           $('#news_report').DataTable().clear();
           $('#news_report').DataTable().destroy();
       }
       var form = $("#form_news_report").serializeArray();
       var oTable = $('#news_report').DataTable({
        dom: 'Bfrtip',
        "processing": true,
        scrollX : true,
        searching : true,
        language: {
            aria: {
                sortAscending: ": activate to sort column ascending",
                sortDescending: ": activate to sort column descending"
            },
            emptyTable: "No data available in table",
            info: "Showing _START_ to _END_ of _TOTAL_ entries",
            infoEmpty: "No entries found",
            infoFiltered: "(filtered1 from _MAX_ total entries)",
            lengthMenu: "_MENU_ entries",
            search: "Search:",
            zeroRecords: "No matching records found"
        },
        buttons: [{
            extend: "print",
            className: "btn dark btn-outline"
        }, {
            extend: "copy",
            className: "btn red btn-outline"
        }, {
            extend: "pdf",
            className: "btn green btn-outline"
        }, {
            extend: "excel",
            className: "btn yellow btn-outline "
        }, {
            extend: "csv",
            className: "btn purple btn-outline "
        }, {
            extend: "colvis",
            className: "btn dark btn-outline",
            text: "Columns"
        }],
        responsive: !0,
        "serverSide": true,
        "ajax": {
            "url": "{{ url('api/newsreport') }}",
            "type": "POST",
            "data" : {startDate : form[3].value, endDate : form[4].value, status : form[2].value, kejadian : form[1].value}
        },
        columns: [
        { data: 'description', name: 'description' },
        { data: 'lat', name: 'lat' },
        { data: 'lon', name: 'lon' },
        { data: 'category_news', name: 'category_news' },
        { data: 'status', name: 'status' },
        { data: 'updated_at', name: 'updated_at' }
        ]
    });
    }
});

</script>
</body>
</html>
