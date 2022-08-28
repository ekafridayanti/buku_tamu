@php
    $currentTime = Carbon\Carbon::now()->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y h:i a');
@endphp

@extends('apps.app-admin')

@section('title', 'Tambah Data Tamu')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Tambah Data Tamu</h2>
                <div class="clearfix"></div>
            </div>
            <div class="login-content">
                @include('components.alert-massage')
                <br />
                <form action= {{ route("guest.create") }} method="POST" data-parsley-validate class="form-horizontal form-label-left">
                    @csrf
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="date">Tanggal <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input name="date" id="datetime-picker" type="text" class='form-control readonly'  id="dp" placeholder="Tanggal" data-date-format="dd M yyyy" value="{{ $currentTime  }}" readonly/>
                          {{-- <i class="fa-calendar-o" required='required'></i> --}}
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="name" id="name" required="required" class="form-control " value="{{ old ('name') }}">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Instansi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="institute" name="institute" required="required" class="form-control" value="{{ old ('institute') }}">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">No Telepon</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input id="notlp" class="form-control" type="text" name="notlp" value="{{ old ('notlp') }}">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Keperluan</label>
                        <div class="col-md-6 col-sm-6 ">
                            <textarea name="needs" id="needs" cols="30" rows="5" class="form-control" type="text" value="{{ old ('needs') }}" ></textarea>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Tanda Tangan</label>
                        <div class="col-md-6 col-sm-6">
                            <div id="sig"></div>
                            <br><br>
                            <a href="{{ route('guest.content') }}">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </a>
                            <button id="clear" class="btn btn-danger">Clear Signature</button>
                            <button type="submit" class="btn btn-success">Save</button>
                            <textarea id="signature" name="signature" style="display: none"></textarea>

                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

@endsection