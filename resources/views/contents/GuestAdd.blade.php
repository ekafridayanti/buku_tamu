@extends('app')

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
                <br />
                <form action= {{ route("guest.create") }} method="POST" data-parsley-validate class="form-horizontal form-label-left">
                    @csrf
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="name" id="name" required="required" class="form-control ">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Instansi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="institute" name="institute" required="required" class="form-control">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Keperluan</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input id="needs" class="form-control" type="text" name="needs">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">No Telepon</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input id="notlp" class="form-control" type="text" name="notlp">
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