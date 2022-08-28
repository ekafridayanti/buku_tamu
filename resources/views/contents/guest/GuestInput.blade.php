@php
    $currentTime = Carbon\Carbon::now()->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y h:i a');
@endphp

@extends('apps.app-guest')

@section('content-1')
<div class="col-md-6">

    <div class="box">
      <img class="text-center" style="max-width: 90%" src="{{ asset('template/production/images/Logo Atas BKPSDM 2021 putih.png') }}" alt="">
      <h3 class="heading">Kota Denpasar</h3>
      <p class="text-center" style="color:#ccda46;">~Silahkan lengkapi data tamu Anda!~</p>
      <form class="mb-5" method="post" id="contactForm" name="contactForm">
        @csrf
        <div class="row">
          <div class="col-md-12 form-group">
            <label for="date" class="col-form-label">Tanggal *</label>
            <input name="date" id="datetime-picker" type="text" class='form-control readonly'  id="dp" placeholder="Tanggal" data-date-format="dd M yyyy" value="{{ $currentTime  }}" readonly/>
            <i class="fa-calendar-o" required='required'></i>
          </div>
       </div>
        <div class="row">
          <div class="col-md-6 form-group">
            <label for="name" class="col-form-label">Name *</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama Lengkap" required='required'>
          </div>
          <div class="col-md-6 form-group">
            <label for="institute" class="col-form-label">Instansi</label>
            <input type="text" class="form-control" name="institute" id="institute" placeholder="Instansi Anda" required='required'>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 form-group">
            <label for="notlp" class="col-form-label">No Telepon *</label>
            <input type="number" class="form-control" name="notlp" id="notlp" placeholder="No Handphone" required='required'>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 form-group">
            <label for="needs" class="col-form-label">Keperluan *</label>
            <textarea class="form-control" name="needs" id="needs" cols="30" rows="5" required='required'></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 form-group">
            <label class="col-form-label" for="">Tanda Tangan:</label>
            <br/>
            <div id="sig"></div>
            <br><br>
            <button id="clear" class="btn btn-danger">Clear Signature</button>
            <button class="btn btn-success">Save</button>
            <textarea id="signature" name="signature" style="display: none"></textarea>
          </div>
        </div>
        {{-- <div class="row">
          <div class="col-md-6">
            <input type="submit" value="Send Message" class="btn btn-block btn-primary rounded-0 py-2 px-4">

          </div>
        </div> --}}
      </form>
   </div>
  </div>
@endsection

