@extends('apps.app-admin')

@section('title', 'Buku Tamu')

@section('content')

<div class="row">
    {{-- <div class="col-md-12 col-sm-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Data Tamu</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
              <div class="x_title">  
                <a href="{{ route("guest.add") }}">
                  <button type="button" class="btn btn-primary">Tambah Tamu</button>
                </a>
                
              </div>
              
              <div id="datatable_wrapper" class="x_content">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card-box table-responsive">
                      @include('components.admin.alert-massage')
                      <table id="datatable" class="table table-striped table-bordered" style="overflow-x:auto; table-layout: fixed; width:100%">
                        <thead>
                          <tr>
                            <th class="text-center" style="width: 35px">No</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Instansi</th>
                            <th class="text-center">Keperluan</th>
                            <th class="text-center">Telepon</th>
                            <th class="text-center">TTD</th>
                            <th class="text-center">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($guest as $g)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $g->created }}</td>
                            <td>{{ $g->name }}</td>
                            <td>{{ $g->institute }}</td>
                            <td style=" word-wrap:break-word">{{ $g->needs }}</td>
                            <td>{{ $g->notlp }}</td>
                            <td>
                              <img src="{{ $g->signature }}" alt="ttd" style="max-width: 100px">
                            </td>
                            <td>
                              <button data-toggle="modal" data-target="#modal-view{{ $g->id }}" type="submit" class="btn btn-block btn-sm btn-success edit"><i class="fa fa-folder"></i> View</button>
                              <button data-toggle="modal" data-target="#modal-delete{{ $g->id }}" type="submit" class="btn btn-block btn-danger btn-sm delete"><i class="fa fa-trash-o"></i> Hapus</button>
                            </td>
                          </tr>
                          @endforeach  
                        </tbody>
                        <tfoot>
                            <th class="text-center">No</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Instansi</th>
                            <th class="text-center">Keperluan</th>
                            <th class="text-center">Telepon</th>
                            <th class="text-center">TTD</th>
                            <th class="text-center">Action</th>
                          
                        </tfoot>
                      </table>
                      <div>
                        {{ $guest->links() }}
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}

    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
        <div class="x_title">
          <a href="{{ route("guest.add") }}">
            <button type="button" class="btn btn-primary">Tambah Tamu</button>
          </a>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">                   
                    @include('components.admin.alert-massage')
                    <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th class="text-center" style="width: 35px">No</th>
                          <th class="text-center">Tanggal</th>
                          <th class="text-center">Nama</th>
                          <th class="text-center">Yang dituju</th>
                          <th class="text-center">Unit Kerja/Instansi</th>
                          <th class="text-center" style="width: 250px">Keperluan</th>
                          <th class="text-center">Telepon</th>
                          <th class="text-center">TTD</th>
                          <th class="text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($guest as $g)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{\Carbon\Carbon::parse($g->created)->translatedFormat('d-m-Y H:i:s')}}</td>
                          <td>{{ $g->name }}</td>
                          <td>{{ $g->sector }}</td>
                          <td>{{ $g->institute }}</td>
                          <td style=" word-wrap:break-word">{{ $g->needs }}</td>
                          <td>{{ $g->notlp }}</td>
                          <td>
                            <img src="{{ $g->signature }}" alt="ttd" style="max-width: 100px">
                          </td>
                          <td>
                            <ul class="list-inline display-layout">
                              <li>
                                <button data-toggle="modal" data-target="#modal-view{{ $g->id }}" type="submit" class="btn btn-block btn-success edit btn-xs"><i class="fa fa-folder"></i></button>

                              </li>
                              <li>
                                <button data-toggle="modal" data-target="#modal-delete{{ $g->id }}" type="submit" class="btn btn-block btn-danger btn-xs delete"><i class="fa fa-trash-o"></i></button>
                              </li>
                            </ul>  
                          </td>
                        </tr>
                        @endforeach  

                        {{-- search --}}
                        <form action="{{ route('guest.content') }}" method="GET">
                          <select name="key" id="key">
                            <option value="name">Nama</option>
                            <option value="sector">Yang dituju</option>
                            <option value="institute"> Unit Kerja/Intansi</option>
                            <option value="needs">Keperluan</option>
                            <option value="notlp">No Telepon</option>
                          </select>
                          <input type="text" name="value" id="value" placeholder="cari..">
                          
                          <input type="submit" value="Submit">
                          <a href="{{ route('guest.content') }}">
                            <button type="button" class="btn btn-secondary"><i class="fa fa-refresh"></i></button>
                        </a>
                        </form>
                        <br><br>
                        {{-- end search --}}

                      </tbody>
                      <tfoot>
                          <th class="text-center">No</th>
                          <th class="text-center">Tanggal</th>
                          <th class="text-center">Nama</th>
                          <th class="text-center">Yang Dituju</th>
                          <th class="text-center">Unit Kerja/Instansi</th>                         
                          <th class="text-center">Keperluan</th>
                          <th class="text-center">Telepon</th>
                          <th class="text-center">TTD</th>
                          <th class="text-center">Action</th>                       
                      </tfoot>
                    </table> 
                    {{ $guest->links() }}                   
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>

{{-- VIEW GUEST BOOK --}}

@foreach ($guest as $g)
  <div class="modal fade" id="modal-view{{ $g->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Detail Informasi Data Tamu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">

          <div class="form-group">
            <label>Nama</label>
            <input type="text" value="{{ $g->name }}" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Yang dituju</label>
            <input type="text" name="sector{{ $g->id }}" value="{{ $g->sector}}" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Unit Kerja/Instansi</label>
            <input type="text" name="institute{{ $g->id }}" value="{{ $g->institute}}" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Keperluan</label>
            {{-- <textarea name="needs{{ $g->id }}" value="{{ $g->needs }}" id="needs" cols="30" rows="10" class="form-control" readonly></textarea> --}}
            <input type="text" name="needs{{ $g->id }}" value="{{ $g->needs }}" id="needs" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>No Telepon</label>
            <input type="text" name="needs{{ $g->id }}" value="{{ $g->notlp }}" class="form-control" readonly>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endforeach

  {{-- DELETE GUEST BOOK --}}
  @foreach ($guest as $g)
    <div class="modal fade" id="modal-delete{{ $g->id }}">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Hapus Data Buku</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{ route('guest.delete', ['id' => $g->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-body">
              Yakin ingin menghapus data tamu {{ $g->name }}?
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-danger float-right">Hapus</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  @endforeach
  
@endsection