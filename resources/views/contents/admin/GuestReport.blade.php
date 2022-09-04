@extends('apps.app-admin')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Data Tamu</h2>
          <div class="clearfix"></div>
        </div>
        <form action="{{ route('guest.doPrint') }}" method="post">
            @csrf
        <div class="x_content">
        @include('components.alert-massage')
          <div class="col-md-12 col-sm-12">
            <div class="profile_title">
              <div class="col-md-6">
                <h2 style="font-size: 15px">Pilih Rentangan Waktu</h2>
              </div>

              <div class="col-md-6">
                <div id="" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: none solid #E6E9ED">
                  <input type="date" name="custom_start"> -
                  <input type="date" name="custom_end">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-sm-12">
            <div class="profile_title">
              <div class="col-md-6">
                <h2 style="font-size: 15px">Atau pilih rentang tersedia</h2>
              </div>

              <div class="col-md-6">
                <div id="" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border:none">
                    <select name="range">
                        <option value="">-- Pilih rentang waktu--</option>
                        <option value="7">Seminggu Terakhir</option>
                        <option value="30">Sebulan Terakhir</option>
                        <option value="365">Setahun Terakhir</option>
                    </select>
                </div>
              </div>
              </div>
            </div>
          </div>

          <br><br><br><br>
          <p class="text-center" style="color: red">Silahkan pilih salah satu rentangan waktu antara custom atau tersedia!</p>
          
          <div class="text-center">
            <a href="{{ url("buku-tamu-cetak") }}" target="_blank">
              <button type="submit" class="btn btn-success"> <i class="fa fa-print"></i> Unduh </button>
            </a> 
            
          </div>
        </div>
        </form>
      </div>
    </div>
</div>
@endsection
