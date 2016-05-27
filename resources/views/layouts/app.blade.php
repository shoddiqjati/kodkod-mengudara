<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Informasi Persuratan dan Letter Generator UGM</title>
    <meta name="author" content="Vinsensius Satya, Yosef Brian, Shoddiq Jati">

    <link href="{{ URL::asset('img/favicon.ico') }}" rel="shortcut icon" />


<link href="css/app.css" rel="stylesheet">
   <!--  <link href="css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://npmcdn.com/angular-toastr/dist/angular-toastr.css" />

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL::asset('css/get-shit-done.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/demo.css') }}" rel="stylesheet">
    @yield('head.style')

    @yield('head.script')

    <style>
        body {
            font-family: 'Lato';
            background-color: #C4D7EC;
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>

<script>
        var baseUrl='{{url('/')}}';
    </script>
</head>


<body id="app-layout" ng-app="myApp">
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                Manajemen Surat
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/home') }}">Home</a></li>
            </ul>

            @role(1)
               <ul class="nav navbar-nav">
                <li><a href="{{ url('/admin/listmahasiswa') }}">List Mahasiswa</a></li>
                <li><a href="{{ url('/admin/listpegawai') }}">List Pegawai</a></li>
                <li><a href="{{ url('/admin/record') }}">Record</a></li>
            </ul>
            @endrole

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                <!--     <li><a href="{{ url('/register') }}">Register</a></li> -->
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">

                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>

                        </ul>
                    </li>
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
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
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
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('alert')

@yield('content')


<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
@yield('body.script')
</body>

    

<script type="text/javascript">
    // enable the option for savegin as a file, the PHP script will test if it is running on localhost anyway.
    //if (window.location.hostname=='localhost') document.getElementById('save_as_file').style.display='table-row';
</script>
</body>
</html>
