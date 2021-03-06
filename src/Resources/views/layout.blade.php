<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin 2 - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="/vendor/abtm/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="/vendor/abtm/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.1.2/css/buttons.dataTables.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/select/1.1.2/css/select.dataTables.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.0.2/css/responsive.dataTables.min.css" />
        
        <!-- Custom CSS -->
        <link href="/vendor/abtm/dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="/vendor/abtm/vendor/morrisjs/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="/vendor/abtm/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Flag Icon CSS -->
        <link href="/vendor/abtm/vendor/flag-icon-css/css/flag-icon.min.css" rel="stylesheet" type="text/css">

        <!-- Common CSS -->
        <link href="/vendor/abtm/css/common.css" rel="stylesheet">
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>

    <body>
        @inject('appService', 'AB\Laravel\TranslationManager\Services\AppService')
        
        <div id="wrapper">
            
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('translator_dashboard') }}">SB Admin v2.0</a>
                </div>
                <!-- /.navbar-header -->

                <!--@ include('abtmViews::Common.NavbarHeader')-->
                <!-- /.navbar-top-links -->

                @include('abtmViews::Common.NavbarSidebar')
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">{{ $title }}</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                
                @yield('translator_content')
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js" ></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/vendor/abtm/vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="/vendor/abtm/vendor/metisMenu/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="/vendor/abtm/vendor/raphael/raphael.min.js"></script>
        <script src="/vendor/abtm/vendor/morrisjs/morris.min.js"></script>
{{--        <script src="/vendor/abtm/data/morris-data.js"></script>--}}

        <!-- DataTables JavaScript -->
        <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" ></script>
        <script src="https://cdn.datatables.net/buttons/1.1.2/js/dataTables.buttons.min.js" ></script>
        <script src="https://cdn.datatables.net/select/1.1.2/js/dataTables.select.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
        <script src="https://cdn.datatables.net/responsive/2.0.2/js/dataTables.responsive.min.js" ></script>

        <!-- DataTable AltEditor -->
        <script src="/vendor/abtm/datatables/AltEditor/src/dataTables.altEditor.free.js" ></script>

        <!-- Custom Theme JavaScript -->
        <script src="/vendor/abtm/dist/js/sb-admin-2.js"></script>

        @stack('translator_javascripts')
    </body>
    
</html>