<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="icon" href="{{ asset('template/production') }}/images/Logo BKPSDM.png" type="image/icon type">
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
    <title>BKPSDM Denpasar | Tamu</title>
    <!-- DATE-PICKER -->
		<link rel="stylesheet" href="{{ asset('template/tamplate-guest') }}/vendor/date-picker/css/datepicker.min.css">
</head>
<body>
    <div class="content">
        <div class="container">
          <div class="row">
            @yield('content-1')
            {{-- <div class="col-md-6"> 
              <div class="box">
                <img class="text-center" style="max-width: 90%" src="{{ asset('template/production/images/Logo Atas BKPSDM 2021 putih.png') }}" alt="">
                <h3 class="heading">Kota Denpasar</h3>
                <p style="font-style: italic; color:brown">~Silahkan lengkapi data tamu Anda!~</p>
                <form class="mb-5" method="post" id="contactForm" name="contactForm">
                  @csrf              
                  <div class="row">                    
                    <div class="col-md-6 form-group">
                      <label for="name" class="col-form-label">Name *</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama Lengkap">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="institute" class="col-form-label">Instansi</label>
                      <input type="text" class="form-control" name="institute" id="institute" placeholder="Instansi Anda">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="needs" class="col-form-label">Keperluan *</label>
                      <input type="text" class="form-control" name="needs" id="needs" placeholder="Masukkan Keperluan Anda">
                    </div>
                  </div>   
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="notlp" class="col-form-label">No Telepon *</label>
                      <input type="text" class="form-control" name="notlp" id="notlp" placeholder="No Handphone">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="tanggal" class="col-form-label">Tanggal * <i class="fa fa-calendar-o"></i></label>
                      <input type='text' class='datepicker-here form-control' data-language='en' id="dp" placeholder="Tanggal" data-date-format="dd M yyyy"/>
                      <i class="fa fa-calendar-o"></i>
                      
                    </div>
                    
                  </div>
                  <div class="row text-center">
                    <div class="col-md-12 form-group">
                      <label class="col-form-label" for="">Tanda Tangan:</label>
                      <br/>
                      <div id="sig"></div>
                      <br><br>
                      <button id="clear" class="btn btn-danger">Clear Signature</button>
                      <button class="btn btn-success ">Submit Data</button>
                      <textarea id="signature" name="signature" style="display: none"></textarea>
                    </div>
                  </div>
                  
                </form>
             </div>
            </div> --}}
            <br><br>
            
            <div class="col-md-5 mr-auto">
              <br>
              <h3 class="mb-3">Informasi Contact</h3>
              <p>Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Kota Denpasar</p>
              <ul>
                <li>
                  <span class="wrap-icon icon-room mr-3"></span>
                  <span class="text">Jl. Mataram No.2. Dauh Puri Kaja, Kec. Denpasar Utara, Kota Denpasar, Bali 80231 
                  </span>
                </li>         
                <li>
                  <span class="wrap-icon icon-phone mr-3"></span>
                  <span class="text">(0361) 229786</span>
                </li>
                <li >
                  <span class="wrap-icon icon-envelope mr-3"></span>
                  <span class="text">bkpsdm.kotadps@gmail.com</span>
                </li>
                <li >
                  <span class="wrap-icon icon-globe mr-3"></span>
                  <a href="https://www.bkpsdm.denpasarkota.go.id/">bkpsdm.kotadenpasar.go.id</a>
                </li>            
              </ul>
              <div class="peta" style="max-width: 5px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d986.1380506293593!2d115.2120666!3d-8.6389141!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23f681ffa280f%3A0xa6c0395ce85d2e1d!2sBadan%20Kepegawaian%20dan%20Pengembangan%20Sumber%20Daya%20Manusia%20BKPSDM!5e0!3m2!1sid!2sid!4v1659423027479!5m2!1sid!2sid" width="360" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                
              </div>
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
    <!-- DATE-PICKER -->
		<script src="{{ asset('template/tamplate-guest') }}/vendor/date-picker/js/datepicker.js"></script>
		<script src="{{ asset('template/tamplate-guest') }}/vendor/date-picker/js/datepicker.en.js"></script>
</body>
</html>