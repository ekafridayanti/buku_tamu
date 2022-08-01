<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {{-- SCRIPT SIGNATURE --}}
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" />     
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">

    

    <style>
        .kbw-signature {
            width: 100%;
            height: 200px;
        }
    </style>

    {{-- STYLE TEMPLATE --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template/tamplate-guest') }}/fonts/icomoon/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('template/tamplate-guest') }}/css/bootstrap.min.css">  
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('template/tamplate-guest') }}/css/style.css">

    <title>Document</title>
</head>
<body>
    <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="box text-center">
                <h3 class="heading">How Can We Help?</h3>
                <br>
                <i class="material-icons " style="font-size:48px;color:green">check_circle</i>
                {{-- <h3 style="color: black">Submit Data {{ Session::get('name') }} Berhasil</h3> --}}

                <p style="font-size: 25px; color: black; font-style: bold" style="font-style: bold">Submit Data {{ Session::get('name') }} Berhasil</p>

   
              </div>
            </div>
            
            <div class="col-md-5 mr-auto">
              <h3 class="mb-3">Let's work together</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae sequi, ipsa hic alias officia facilis eveniet, neque laborum cumque maxime soluta. Neque atque necessitatibus ipsam sequi soluta magni, iste vero fuga inventore, explicabo totam quis quia nemo possimus cupiditate doloribus?</p>
              <p>Quasi optio numquam pariatur amet laudantium, dicta ullam obcaecati nihil eveniet et aperiam beatae illum vitae in asperiores, a ex. Voluptates accusantium, beatae dolorem natus delectus nostrum, iusto nemo optio quas eum, quis a in reprehenderit totam, sequi distinctio impedit.</p>
              <p>Dolor aliquid, commodi vitae dolorum veniam amet error! Nemo nam quibusdam delectus dolore eveniet officia harum eum sit magnam possimus. Eum optio dolores repellat ea impedit, in unde, rem ipsam rerum autem iusto vero facilis blanditiis explicabo sapiente consequatur provident? <a href="#">info@mywebsite.com</a></p>
            </div>
          </div>
    
        </div>
      </div>
    
    
    {{-- <script src="{{ asset('template/tamplate-guest') }}/js/jquery-3.3.1.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> 
    <script src="{{ asset('template/tamplate-guest') }}/js/popper.min.js"></script>
    <script src="{{ asset('template/tamplate-guest') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('template/tamplate-guest') }}/js/jquery.validate.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
    <script type="text/javascript">
      var sig = $('#sig').signature({syncField: '#signature', syncFormat: 'PNG'});
      $('#clear').click(function (e) {
          e.preventDefault();
          sig.signature('clear');
          $("#signature64").val('');
      });
    </script>
</body>
</html>