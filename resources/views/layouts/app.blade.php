<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Sistem Informasi Persuratan dan Letter Generator</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ URL::asset('//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css')}}">
    <!-- Optional theme -->
    <link rel="stylesheet" href="{{ URL::asset('//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap-theme.min.css')}}">
    <!-- Latest compiled and minified JavaScript -->
    <script src="{{ URL::asset('//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js')}}"></script>
    <!-- carousel -->
    <link href="{{ URL::asset('css/gsd/get-shit-done.css')}}" rel="stylesheet" />
    <!-- readmore and less -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://tester3.yolasite.com/resources/javascript/jtruncate.js"></script>

    <script type="text/javascript">
        // Settings for script
        $(document).ready(function() {
            $('.text').jTruncate({length: 200,/* The number of characters to display before truncating. */ minTrail: 0, /* The minimum number of "extra" characters required to truncate. This option allows you to prevent truncation of a section of text that is only a few characters longer than the specified length. */
                moreText: "Read More", // The text to use for the "more" link.
                lessText: "Read Less", // The text to use for the "less" link.
                ellipsisText: "...",
                // The text to append to the truncated portion.
            });
        });

    </script>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
{{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

<!-- sidebar -->
    <!--   <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="{{ URL::asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{ URL::asset('css/custom.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/maps/jquery-jvectormap-2.0.3.css')}}" />
    <link href="{{ URL::asset('css/icheck/flat/green.css')}}" rel="stylesheet" />
    <link href="{{ URL::asset('css/floatexamples.css')}}" rel="stylesheet" type="text/css" />

    <!--  <script src="js/jquery.min.js"></script> -->
    <script src="{{ URL::asset('js/nprogress.js')}}"></script>
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>




<body class="nav-md">


<div class="container body">
    <div class="main_container">
        <div class="row">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="{{ url('/') }}" class="site_title"><i class="fa fa-desktop"></i>
                            <span>SIMPLE UGM</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        @role(3)
                        <div class="menu_section">
                            <ul  class="nav side-menu" style="margin-left:10px">
                                <!-- <h3>MENU</h3> -->
                                <li><a data-toggle="dropdown" role="button" aria-expanded="false">
                                        <i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" role="menu" style="display: none">
                                        <li><a href="{{ url('/home')}}">Surat</a></li>
                                        <li><a href="{{ url('/record')}}">Data</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="dropdown" role="button" aria-expanded="false">
                                        <i class="fa fa-cogs"></i> Pengaturan <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" role="menu" style="display: none">
                                        <li><a href="{{ url('/home')}}">Ubah Password</a></li>
                                        <li><a href="{{ url('/home')}}">Bantuan</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </li>

                            </ul>
                        </div>
                        @endrole

                        @role(2)
                        <div class="menu_section">
                            <ul  class="nav side-menu" style="margin-left:10px">
                                <!-- <h3>MENU</h3> -->
                                <li><a data-toggle="dropdown" role="button" aria-expanded="false">
                                        <i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" role="menu" style="display: none">
                                        <li><a href="{{ url('/home')}}">Surat</a></li>
                                        <li><a href="{{ url('/recordpgw')}}">Data</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="dropdown" role="button" aria-expanded="false">
                                        <i class="fa fa-cogs"></i> Pengaturan <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" role="menu" style="display: none">
                                        <li><a href="{{ url('/home')}}">Ubah Password</a></li>
                                        <li><a href="{{ url('/home')}}">Bantuan</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </li>

                            </ul>
                        </div>
                        @endrole

                        @role(1)
                        <div class="menu_section">
                            <ul  class="nav side-menu" style="margin-left:10px">
                                <!-- <h3>MENU</h3> -->
                                <li><a data-toggle="dropdown" role="button" aria-expanded="false">
                                        <i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" role="menu" style="display: none">
                                        <li><a href="{{ url('/home')}}">Surat</a></li>
                                        <li><a href="{{ url('/admin/cms')}}">Tambah Template</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/admin/listmahasiswa') }}"><i class="fa fa-graduation-cap"></i> List Mahasiswa</a>
                                </li>
                                <li><a href="{{ url('/admin/listpegawai') }}"><i class="fa fa-black-tie"></i> List Pegawai</a>
                                </li>
                                <li><a href="{{ url('/admin/record') }}"><i class="fa fa-book"></i> Record</a>
                                </li>
                                <li><a data-toggle="dropdown" role="button" aria-expanded="false">
                                        <i class="fa fa-cogs"></i> Pengaturan <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" role="menu" style="display: none">
                                        <li><a href="{{ url('/home')}}">Ubah Password</a></li>
                                        <li><a href="{{ url('/home')}}">Bantuan</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </li>

                            </ul>
                        </div>
                        @endrole

                    </div>
                    <!-- /sidebar menu -->

                </div>
            </div>

            <!-- top navigation -->

            <div class="top_nav">
                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        {{--<ul class="nav navbar-nav navbar-right">--}}
                            {{--<li class="">--}}
                                {{--<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">--}}
                                    {{--<span class=" fa fa-angle-down"></span>--}}

                                {{--</a>--}}
                                {{--<ul class="dropdown-menu dropdown-usermenu pull-right">--}}
                                    {{--<li><a href="javascript:;">  Bantuan</a>--}}
                                    {{--</li>--}}

                                    {{--@role(1)--}}
                                    {{--<li>--}}
                                        {{--<a href="{{ url('admin/new-post') }}">Add new post</a>--}}
                                    {{--</li>--}}

                                    {{--<li><a href="{{ url('admin/registeri') }}">Register</a></li>--}}
                                    {{--<li><a data-placement="bottom" title="Tambah Database Pegawai" href="#" data-toggle="modal" data-target="#modalimport">Import User</a></li>--}}
                                    {{--<li><a href="{{ url('/admin/slider') }}"> Edit Slider</a></li>--}}
                                    {{--@endrole--}}
                                    {{--<li><a href="{{ url('/gantipassword') }}">Ubah Password</a></li>--}}
                                    {{--<li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                    </nav>
                </div>

            </div>

            <!-- /top navigation -->


            <div class="modal fade" id="modalimport" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title"><b>Unggah Data</b></h4>
                        </div>
                        <div class="modal-body">
                            <div class="col-xs-12">
                                <label for="fileToUpload">Import file excel (xls)</label>
                                <form action="{{ action('ExportController@upload') }}" method="post" enctype="multipart/form-data" >
                                    <div class="col-xs-8 col-md-offset-1">
                                        <input type="file" class="btn btn-default btn-file" name="fileToUpload" id="fileToUpload" required="required">
                                    </div>
                                    <div class="col-xs-3">
                                        <input type="submit" class="btn btn-success" value="Upload" name="submit">
                                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Kembali</button>
                        </div>


                    </div>
                </div>
            </div>


            <!-- /page content -->
            <div class="right_col" role="main">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0">
                        <div class="dashboard_graph">
                            <div class="x_panel">
                                <h2>@yield('title')</h2>
                                @yield('title-meta')
                                <div class="panel-body">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="col-md-12 col-md-offset-0">
                        <div class="dashboard_graph pull-right" >
                            Developed by kodkod
                        </div>
                        <div class="clearfix"></div>
                    </footer>
                </div>
            </div>


        </div>
    </div>
</div>

<!-- <script src="js/bootstrap.min.js"></script> -->

<!-- gauge js -->
<script type="text/javascript" src="{{URL::asset('js/gauge/gauge.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/gauge/gauge_demo.js')}}"></script>
<!-- bootstrap progress js -->
<script src="{{URL::asset('js/progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="{{URL::asset('js/moment/moment.min.js')}}"></script>
<script type="text/javascript" src="js/datepicker/daterangepicker.js')}}"></script>
<!-- chart js -->
<script src="{{URL::asset('js/chartjs/chart.min.js')}}"></script>

<script src="{{URL::asset('js/custom.js')}}"></script>

<!-- flot js -->
<!-- [if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]
 -->

<script type="text/javascript" src="{{URL::asset('js/flot/jquery.flot.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/flot/jquery.flot.pie.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/flot/jquery.flot.orderBars.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/flot/jquery.flot.time.min.j')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/flot/date.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/flot/jquery.flot.spline.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/flot/jquery.flot.stack.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/flot/curvedLines.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/flot/jquery.flot.resize.js')}}"></script>
<script>
    $(document).ready(function() {
        // [17, 74, 6, 39, 20, 85, 7]
        //[82, 23, 66, 9, 99, 6, 2]
        var data1 = [
            [gd(2012, 1, 1), 17],
            [gd(2012, 1, 2), 74],
            [gd(2012, 1, 3), 6],
            [gd(2012, 1, 4), 39],
            [gd(2012, 1, 5), 20],
            [gd(2012, 1, 6), 85],
            [gd(2012, 1, 7), 7]
        ];

        var data2 = [
            [gd(2012, 1, 1), 82],
            [gd(2012, 1, 2), 23],
            [gd(2012, 1, 3), 66],
            [gd(2012, 1, 4), 9],
            [gd(2012, 1, 5), 119],
            [gd(2012, 1, 6), 6],
            [gd(2012, 1, 7), 9]
        ];
        $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
            data1, data2
        ], {
            series: {
                lines: {
                    show: false,
                    fill: true
                },
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 0.4
                },
                points: {
                    radius: 0,
                    show: true
                },
                shadowSize: 2
            },
            grid: {
                verticalLines: true,
                hoverable: true,
                clickable: true,
                tickColor: "#d5d5d5",
                borderWidth: 1,
                color: '#fff'
            },
            colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
            xaxis: {
                tickColor: "rgba(51, 51, 51, 0.06)",
                mode: "time",
                tickSize: [1, "day"],
                //tickLength: 10,
                axisLabel: "Date",
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelFontFamily: 'Verdana, Arial',
                axisLabelPadding: 10
                //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]
            },
            yaxis: {
                ticks: 8,
                tickColor: "rgba(51, 51, 51, 0.06)",
            },
            tooltip: false
        });

        function gd(year, month, day) {
            return new Date(year, month - 1, day).getTime();
        }
    });
</script>

<!-- worldmap -->
<script type="text/javascript" src="js/maps/jquery-jvectormap-2.0.3.min.js"></script>
<script type="text/javascript" src="js/maps/gdp-data.js"></script>
<script type="text/javascript" src="js/maps/jquery-jvectormap-world-mill-en.js"></script>
<script type="text/javascript" src="js/maps/jquery-jvectormap-us-aea-en.js"></script>
<!-- pace -->
<script src="js/pace/pace.min.js"></script>
<script>
    $(function() {
        $('#world-map-gdp').vectorMap({
            map: 'world_mill_en',
            backgroundColor: 'transparent',
            zoomOnScroll: false,
            series: {
                regions: [{
                    values: gdpData,
                    scale: ['#E6F2F0', '#149B7E'],
                    normalizeFunction: 'polynomial'
                }]
            },
            onRegionTipShow: function(e, el, code) {
                el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
            }
        });
    });
</script>
<!-- skycons -->
<script src="js/skycons/skycons.min.js"></script>
<script>
    var icons = new Skycons({
                "color": "#73879C"
            }),
            list = [
                "clear-day", "clear-night", "partly-cloudy-day",
                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                "fog"
            ],
            i;

    for (i = list.length; i--;)
        icons.set(list[i], list[i]);

    icons.play();
</script>

<!-- dashbord linegraph -->
<script>
    Chart.defaults.global.legend = {
        enabled: false
    };

    var data = {
        labels: [
            "Symbian",
            "Blackberry",
            "Other",
            "Android",
            "IOS"
        ],
        datasets: [{
            data: [15, 20, 30, 10, 30],
            backgroundColor: [
                "#BDC3C7",
                "#9B59B6",
                "#455C73",
                "#26B99A",
                "#3498DB"
            ],
            hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF",
                "#34495E",
                "#36CAAB",
                "#49A9EA"
            ]

        }]
    };

    var canvasDoughnut = new Chart(document.getElementById("canvas1"), {
        type: 'doughnut',
        tooltipFillColor: "rgba(51, 51, 51, 0.55)",
        data: data
    });
</script>
<!-- /dashbord linegraph -->
<!-- datepicker -->
<script type="text/javascript">
    $(document).ready(function() {

        var cb = function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
        }

        var optionSet1 = {
            startDate: moment().subtract(29, 'days'),
            endDate: moment(),
            minDate: '01/01/2012',
            maxDate: '12/31/2015',
            dateLimit: {
                days: 60
            },
            showDropdowns: true,
            showWeekNumbers: true,
            timePicker: false,
            timePickerIncrement: 1,
            timePicker12Hour: true,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            opens: 'left',
            buttonClasses: ['btn btn-default'],
            applyClass: 'btn-small btn-primary',
            cancelClass: 'btn-small',
            format: 'MM/DD/YYYY',
            separator: ' to ',
            locale: {
                applyLabel: 'Submit',
                cancelLabel: 'Clear',
                fromLabel: 'From',
                toLabel: 'To',
                customRangeLabel: 'Custom',
                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                firstDay: 1
            }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
            console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
            console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
            console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
            console.log("cancel event fired");
        });
        $('#options1').click(function() {
            $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
            $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
            $('#reportrange').data('daterangepicker').remove();
        });
    });
</script>
<script>
    NProgress.done();
</script>



</div>
</div>

</body>
</html>