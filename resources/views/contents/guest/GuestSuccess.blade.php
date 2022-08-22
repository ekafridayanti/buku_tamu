



@extends('apps.app-guest')
@section('content-1')
<div class="col-md-6">
              
  <div class="box text-center">
    <img class="text-center" style="max-width: 90%" src="{{ asset('template/production/images/Logo Atas BKPSDM 2021 putih.png') }}" alt="">
  <br>
    <h3 class="heading">Kota Denpasar</h3>
    <br>
    <i class="material-icons " style="font-size:48px;color:green">check_circle</i>
    {{-- <h3 style="color: black">Submit Data {{ Session::get('name') }} Berhasil</h3> --}}
    <p style="font-size: 25px; color: black; font-style: bold" style="font-style: bold">Submit Data {{ Session::get('name') }} Berhasil</p>
  </div>
</div>
@endsection