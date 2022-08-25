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
          <div class="col-md-12 col-sm-12  ">
            <div class="profile_title">
                <div class="col-md-6">
                  <h2 style="font-size: 15px">Pilih Rentangan Waktu</h2>
                </div>
                <div class="col-md-6">
                  <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                    <span id="date-range">January 12, 2022 - January 28, 2022</span> <b class="caret"></b>
                    <input type="hidden" value="" id="date-range-value" name="date_range">
                  </div>
                </div>
              </div>
         </div>
         <br><br><br><br>
         <div class="text-center">

            <button type="submit" class="btn btn-success"> <i class="fa fa-print"></i> Print</button>

            <button type="submit" class="btn btn-success"> <i class="fa fa-print"></i> Cetak</button>

         </div>
        </div>
        </form>
      </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $(document).on('ready', function() {
            // function addMonths(date, months) {
            //     let d = date.getDate();
            //     date.setMonth(date.getMonth() + +months);
            //     if (date.getDate() != d) {
            //         date.setDate(0);
            //     }
            //     return date;
            // }

            // const today =  new Date();

            // const options = { month: 'long'};
            // currentMonth = new Intl.DateTimeFormat('en-US', options).format(today);

            // let last30Day = today.setDate(today.getDate() - 30);
            // last30Day = new Date(last30Day)
            // lastMonth = new Intl.DateTimeFormat('en-US', options).format(last30Day);

            // $('#date-range-value').val($('#date-range').text(`${lastMonth} ${last30Day.getDate()}, ${last30Day.getFullYear()} - ${currentMonth} ${today.getDate()}, ${today.getFullYear()}`))

            $('#date-range').on('DOMSubtreeModified', function(){
                $('#date-range-value').val($('#date-range').text())
            });
        })
    </script>
@endpush
