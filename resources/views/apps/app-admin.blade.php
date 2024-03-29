<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('template/production') }}/images/Logo BKPSDM.png" type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" />

    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('template/tamplate-guest') }}/css/jquery.signature.css"> --}}
    
    {{-- <style>
        .kbw-signature { width: 100%; height: 200px;}
      #sig canvas{ width: 100% !important; height: auto;}
    </style> --}}

    <link rel="stylesheet" type="text/css" href="{{ asset('template/tamplate-guest/signature-pad-main') }}/css/jquery.signature.css">
    <style>
      .signature-pad { width: 100%; height: 200px; }
    #canvas{ width: 100% !important; height: auto;}
    </style>

    <!-- STYLE SIGNATURE PAD NEW -->
    {{-- <link rel="stylesheet" href="{{ asset('template/tamplate-guest/signature-pad-main') }}/styles.css">
    <link rel="stylesheet" href="{{ asset('template/tamplate-guest/signature-pad-main') }}/css/signature-pad.css"> --}}

    <title>BKPSDM Denpasar | @yield('title') </title>

    <!-- Bootstrap -->
    <link href="{{ asset('template') }}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('template') }}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('template') }}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('template') }}/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('template') }}/build/css/custom.min.css" rel="stylesheet">
    <!-- Datatables -->
    
    <link href="{{ asset('template') }}/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('template') }}/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('template') }}/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('template') }}/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('template') }}/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('components.admin.sidebar')

        @include('components.admin.navigation')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>@yield('title')</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            @yield('content')
          </div>
        </div>

        <!-- /page content -->
        @include('components.admin.footer')
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('template') }}/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="{{ asset('template') }}/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="{{ asset('template') }}/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{ asset('template') }}/vendors/nprogress/nprogress.js"></script>

     <!-- Datatables -->
     <script src="{{ asset('template') }}/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
     <script src="{{ asset('template') }}/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
     <script src="{{ asset('template') }}/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
     <script src="{{ asset('template') }}/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
     <script src="{{ asset('template') }}/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
     <script src="{{ asset('template') }}/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
     <script src="{{ asset('template') }}/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
     <script src="{{ asset('template') }}/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
     <script src="{{ asset('template') }}/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
     <script src="{{ asset('template') }}/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
     <script src="{{ asset('template') }}/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
     <script src="{{ asset('template') }}/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
     <script src="{{ asset('template') }}/vendors/jszip/dist/jszip.min.js"></script>
     <script src="{{ asset('template') }}/vendors/pdfmake/build/pdfmake.min.js"></script>
     <script src="{{ asset('template') }}/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('template') }}/build/js/custom.min.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    {{-- <script type="text/javascript" src="{{  asset('template/tamplate-guest')  }}/js/jquery.signature.js"></script> --}}
    {{-- <script type="text/javascript">
        var sig = $('#sig').signature({syncField: '#signature', syncFormat: 'PNG'});
        $('#clear').click(function(e) {
            e.preventDefault();
            sig.signature('clear');
            $("#signature").val('');
        });
    </script> --}}

     <!-- SIGNATURE PADA NEW -->
     <script src="{{ asset('template/tamplate-guest/signature-pad-main') }}/js/signature_pad.umd.js"></script>
     <script src="{{ asset('template/tamplate-guest/signature-pad-main') }}/js/app.js"></script>
     
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('template') }}/vendors/moment/min/moment.min.js"></script>
    <script src="{{ asset('template') }}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    @stack('scripts')
  </body>
</html>
