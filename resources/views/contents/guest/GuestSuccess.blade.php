@extends('apps.app-guest')
@section('content-1')
<div class="col-md-6">
              
  <div class="box text-center">
    <img class="text-center" style="max-width: 90%" src="{{ asset('template/production/images/Logo Atas BKPSDM 2021 putih.png') }}" alt="">
  <br>
    <h3 class="heading">Kota Denpasar</h3>
    <p style="font-size: 20px; color: black; font-style: bold" style="font-style: bold">Terimakasih {{ Session::get('name') }} telah berkunjung di BKPSDM Kota Denpasar</p>
    <i class="material-icons " style="font-size:48px;color:green">check_circle</i>
    {{-- <h3 style="color: black">Submit Data {{ Session::get('name') }} Berhasil</h3> --}}
    
    <p style="color:grey">Silahkan mengisi survey tamu melalui button dibawah ini!</p>
    <div class="text-center">
      <a href="https://bit.ly/skm-bkpsdm2022" target="_blank"> 
        <button type="reset" class="btn btn-primary"> <i class="fa fa-print"></i>Survey Tamu</button>
      </a> 
   </div>
   
  </div>
</div>
@endsection