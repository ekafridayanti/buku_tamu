@extends('app')

@section('title', 'Dasboard')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 ">

        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="x_panel tile fixed_height_320">
                    <div class="x_title">
                        <h2>Total Tamu <i class="fa fa-user"></i></h2>
                        <div class="clearfix"></div>
                    </div>
                    <br><br>

                    <div class="tile_count" style="margin-left: 30%">
                        <div class="col-md-12 col-sm-12 tile_stats_count">
                            <br>
                          <div class="count" style="font-size: 80px">{{ $guestTotal }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="x_panel tile fixed_height_320">
                    <div class="x_title">
                        <h2>Total Tamu hari Ini<i class="fa fa-user"></i></h2>
                        <div class="clearfix"></div>
                    </div>
                    <br><br>

                    <div class="tile_count" style="margin-left: 30%">
                        <div class="col-md-12 col-sm-12 tile_stats_count">
                            <br>
                          <div class="count" style="font-size: 80px">{{ $guestTotalToday }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="x_panel tile fixed_height_320">
                    <div class="x_title">
                        <h2>Total Tamu <i class="fa fa-user"></i></h2>
                        <div class="clearfix"></div>
                    </div>
                    <br><br>

                    <div class="tile_count" style="margin-left: 30%">
                        <div class="col-md-12 col-sm-12 tile_stats_count">
                            <br>
                          <div class="count" style="font-size: 80px">{{ $userTotal  }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <img src="{{ asset('template/production/images/dashboard.png')  }}" alt="">

    </div>
</div>

@endsection