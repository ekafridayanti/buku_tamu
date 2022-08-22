@extends('apps.app-admin')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Data Tamu</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="col-md-12 col-sm-12  ">
            <div class="profile_title">
                <div class="col-md-6">
                  <h2 style="font-size: 15px">Pilih Rentangan Waktu</h2>
                </div>
                <div class="col-md-6">
                  <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                    <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                  </div>
                </div>
              </div>
         </div>
         <br><br><br><br>
         <div class="text-center">
            <button type="reset" class="btn btn-success"> <i class="fa fa-print"></i> Print</button>
         </div>
        </div>
      </div>
    </div>
</div> 
@endsection