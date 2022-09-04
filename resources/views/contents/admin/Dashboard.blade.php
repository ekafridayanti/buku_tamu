@extends('apps.app-admin')

@section('title', 'Dasboard')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 ">

        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="x_panel tile fixed_height_320" style="height: 200px">
                    <div class="x_title">
                        <h2>Total Tamu <i class="fa fa-user"></i></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="tile_count" style="margin-left: 40%" style="margin-top: 0%">
                        <div class="count" style="font-size: 80px" style="margin-top: 0cm">{{ $guestTotal }}</div> 
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="x_panel tile fixed_height_320" style="height: 200px">
                    <div class="x_title">
                        <h2>Total Tamu hari Ini <i class="fa fa-user"></i></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="tile_count" style="margin-left: 40%">
                        <div class="count green" style="font-size: 80px" style="margin-top: 0cm">{{ $guestTotalToday }}</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="x_panel tile fixed_height_320" style="height: 200px">
                    <div class="x_title">
                        <h2>Total Admin <i class="fa fa-user"></i></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="tile_count" style="margin-left: 40%">
                        <div class="count" style="font-size: 80px" style="margin-top: 0cm;">{{ $userTotal  }}</div>
                    </div>
                </div>
            </div>
            
            {{-- <div class="col-md-4 col-sm-4">
                <div class="x_panel tile fixed_height_320" style="height: 170px">
                    <div class="x_title">
                        <h2>Total Admin <i class="fa fa-user"></i></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="tile_count" style="margin-left: 30%">
                        <div class="col-md-12 col-sm-12 tile_stats_count">
                            <br>
                          <div class="count" style="font-size: 80px">{{ $userTotal  }}</div>
                        </div>
                    </div>
                </div>
            </div> --}}
            
            
        </div>

        <img src="{{ asset('template/production/images/dashboard.jpeg') }}" alt="" style="width: 100%; height:400px;"  style="background-size: 100% 100%">  

    </div>
</div>

@endsection