<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" />     
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
    <style>
      .kbw-signature { width: 100%; height: 200px;}
      #sig canvas{ width: 100% !important; height: auto;}
    </style>
    <title>BKPSDM Denpasar | Tamu</title>
    <link rel="icon" href="{{ asset('template/production') }}/images/Logo BKPSDM.png" type="image/icon type">
    <!-- Bootstrap -->
    <link href="{{ asset('template') }}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('template') }}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('template') }}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('template') }}/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('template') }}/build/css/custom.min.css" rel="stylesheet">
    
  </head>

  <body class="login">
    <div class="text-center">
      <img src="{{ asset('template/production') }}/images/Logo Atas Layanan BKPSDM.png" alt="logo header" class="rounded">
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">       
        <div class="animate form login_form">
          <section class="login_content">            
            <form action="{{ route('guestinput.create') }}" method="POST">
              @csrf              
              <h1>Submit Data Tamu</h1>
              @include('_components.alert-massage')
              <div>
                <input name="name" type="text" class="form-control" placeholder="Nama" required="" />
              </div>
              <div>
                <input name="institute" type="text" class="form-control" placeholder="Instansi" required="" />
              </div>
              <div>
                <input name="needs" type="text" class="form-control" placeholder="Keperluan" required="" />
              </div>
              <div>
                <input name="notlp" type="text" class="form-control" placeholder="No Telepon" required="" />
              </div>
              <div class="col-md-12">
                <label class="" for="">Tanda Tangan:</label>
                <br/>
                <div id="sig"></div>
                <br><br>
                <button id="clear" class="btn btn-danger">Clear Signature</button>
                <button class="btn btn-success">Save</button>
                <textarea id="signature" name="signature" style="display: none"></textarea>
              </div>
              {{-- <div>
                <button type="submit" class="btn btn-primary submit">Submit</button>
              </div> --}}
              <div class="clearfix"></div>
            </form>
          </section>
        </div>

      </div>
    </div>

    <script src="{{ asset('template') }}/vendors/jquery/dist/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
    <script type="text/javascript">
        var sig = $('#sig').signature({syncField: '#signature', syncFormat: 'PNG'});
        $('#clear').click(function(e) {
            e.preventDefault();
            sig.signature('clear');
            $("#signature").val('');
        });
    </script>
  </body>
</html>
