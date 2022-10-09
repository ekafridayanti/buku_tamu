@php
    $currentTime = Carbon\Carbon::now()->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y h:i a');
@endphp

@extends('apps.app-guest')

@section('content-1')

<div class="col-md-6"> 
    <div class="box">
      <img class="text-center" style="max-width: 90%" src="{{ asset('template/production/images/Logo Atas BKPSDM 2021.png') }}" alt="">
      <br><br>
      <p class="text-center" style="color:#ccda46;">~Silahkan lengkapi data tamu Anda!~</p>
      <form class="mb-5" method="post" id="contactForm" name="contactForm">
        @csrf
        @include('components.alert-massage')
        <div class="row">
          <div class="col-md-12 form-group" >
            <label for="date" class="col-form-label">Tanggal <span class="required" style="color: red">*</span>
            </label>
            <input name="date" id="datetime-picker" type="text" class='form-control readonly'  id="dp" placeholder="Tanggal" data-date-format="dd M yyyy" value="{{ $currentTime  }}" readonly/>
            <i class="fa-calendar-o" required='required' style=" word-wrap:break-word"></i>
          </div>
       </div>
        <div class="row">
          <div class="col-md-6 form-group">
            <label for="name" class="col-form-label">Name <span class="required" style="color: red">*</span>
            </label>
            <input type="text" class="form-control" name="name" value="{{ old ('name') }}" id="name" placeholder="Nama Lengkap" required='required'>
          </div>
          <div class="col-md-6 form-group">
            <label for="institute" class="col-form-label">Unit Kerja/Instansi <span class="required" style="color: red">*</span></label>
            <input type="text" class="form-control" name="institute" value="{{ old ('institute') }}" id="institute" placeholder="Unit Kerja/Instansi Anda" required='required'>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 form-group">
            <label for="notlp" class="col-form-label">Yang dituju <span class="required" style="color: red">*</span>
            </label>
            <select name="sector" id="sector" class="form-control" required >
              <option value="">-- Pilih yang dituju --</option>
              <option value="Bagian Umum dan Kepegawaian">Bagian Umum dan Kepegawaian</option>
              <option value="Bagian Keuangan">Bagian Keuangan</option>
              <option value="Bidang Pengembangan Kompetensi Aparatur">Bidang Pengembangan Kompetensi Aparatur</option>
              <option value="Bidang Penilaian Kinerja dan Penghargaan Aparatur">Bidang Penilaian Kinerja dan Penghargaan Aparatur</option>
              <option value="Bidang Pengadaan, Pemberhentian dan Informasi">Bidang Pengadaan, Pemberhentian dan Informasi</option>
              <option value="Bidang Mutasi dan Promosi">Bidang Mutasi dan Promosi</option>
              
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 form-group">
            <label for="notlp" class="col-form-label">No Telepon <span class="required" style="color: red">*</span>
            </label>
            <input type="number" class="form-control" name="notlp" value="{{ old ('notlp') }}" id="notlp" placeholder="No Handphone" required='required'>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-12 form-group">
            <label for="needs" class="col-form-label">Keperluan <span class="required" style="color: red">*</span>              
            </label>
            <select id="needs1" name="needs1" class="form-control" required>
              <option value="">-- Pilih Layanan --</option>
              <option value="another">Lainnya</option>
              <option value="Layanan Pengajuan Karis / Karsu / Karpeg">Layanan Pengajuan Karis / Karsu / Karpeg</option>
              <option value="Layanan Update Data PNS pada Aplikasi Simpeg">Layanan Update Data PNS pada Aplikasi Simpeg</option>
              <option value="Layanan Cuti Sakit, Cuti Besar, Cuti di Luar Tanggungan Negara">Layanan Cuti Sakit, Cuti Besar, Cuti di Luar Tanggungan Negara</option>
              <option value="Layanan Permohonan Ijin Perceraian">Layanan Permohonan Ijin Perceraian</option>
              <option value="Layanan Pembinaan Disiplin ASN">Layanan Pembinaan Disiplin ASN</option>
              <option value="Layanan Pemberian Tanda Penghargaan Satyalancana Karya Satya yang sudah mengabdi selama X, XX, dan XXX Tahun">Layanan Pemberian Tanda Penghargaan Satyalancana Karya Satya yang sudah mengabdi selama X, XX, dan XXX Tahun</option>
              <option value="Layanan Perbaikan Data Pada Aplikasi E-Kinerja">Layanan Perbaikan Data Pada Aplikasi E-Kinerja</option>
              <option value="Layanan Perbaikan Daftar Kegiatan Pada Aplikasi E-Kinerja">Layanan Perbaikan Daftar Kegiatan Pada Aplikasi E-Kinerja</option>
              <option value="Layanan Penilaian Kinerja Pegawai ASN">Layanan Penilaian Kinerja Pegawai ASN</option>
              <option value="Layanan Permohonan Tugas Belajar">Layanan Permohonan Tugas Belajar</option>
              <option value="Layanan Pengiriman Pegawai dalam Pelatihan, Bimtek/Workshop, Sosialisasi/Pembekalan Teknis/Fungsional/Magang/Pertukaran Pegawai">Layanan Pengiriman Pegawai dalam Pelatihan, Bimtek/Workshop, Sosialisasi/Pembekalan Teknis/Fungsional/Magang/Pertukaran Pegawai</option>
              <option value="Layanan Pembekalan dan Ujian Sertifikasi Pengadaan Barang/Jasa Pemerintah">Layanan Pembekalan dan Ujian Sertifikasi Pengadaan Barang/Jasa Pemerintah</option>
              <option value="Layanan Penyelenggaraan Pelatihan Teknik/Fungsional">Layanan Penyelenggaraan Pelatihan Teknik/Fungsional</option>
              <option value="Layanan Pelatihan Kepemimpinan Nasional Pola Kontribusi">Layanan Pelatihan Kepemimpinan Nasional Pola Kontribusi</option>
              <option value="Layanan Pelatihan Kepemimpinan Administrator Pola Kontribusi">Layanan Pelatihan Kepemimpinan Administrator Pola Kontribusi</option>
              <option value="Layanan Pelatihan Kepemimpinan Pengawas Pola Kontribusi">Layanan Pelatihan Kepemimpinan Pengawas Pola Kontribusi</option>
              <option value="Layanan Latsar Prajabatan Calon PNS Gol. I, II, dan III dengan pola Kontribusi">Layanan Latsar Prajabatan Calon PNS Gol. I, II, dan III dengan pola Kontribusi</option>
              <option value="Layanan Pelaksanaan Penilaian Kompetensi">Layanan Pelaksanaan Penilaian Kompetensi</option>
              <option value="Layanan Kenaikan Gaji Berkala Pimpinan OPD">Layanan Kenaikan Gaji Berkala Pimpinan OPD</option>
              <option value="Layanan Kenaikan Pangkat Gol III/d Kebawah">Layanan Kenaikan Pangkat Gol III/d Kebawah</option>
              <option value="Layanan Kenaikan Pangkat Golongan IV/c Keatas">Layanan Kenaikan Pangkat Golongan IV/c Keatas</option>
              <option value="Layanan Kenaikan Pangkat Golongan IV/a dan IV/b">Layanan Kenaikan Pangkat Golongan IV/a dan IV/b</option>
              <option value="Layanan Seleksi Penerimaan CPNS">Layanan Seleksi Penerimaan CPNS</option>
              <option value="Layanan Prosedur Kenaikan Pangkat Penyesuaian Ijasah">Layanan Prosedur Kenaikan Pangkat Penyesuaian Ijasah</option>
              <option value="Layanan Proses Bangkir Jabatan Fungsional dan Kenaikan Jenjang Jabatan Fungsional">Layanan Proses Bangkir Jabatan Fungsional dan Kenaikan Jenjang Jabatan Fungsional</option>
              <option value="Layanan Masa Persiapan Pensiun (MPP)">Layanan Masa Persiapan Pensiun (MPP)</option>
              <option value="Layanan Pelayanan Pensiun Janda/Duda">Layanan Pelayanan Pensiun Janda/Duda</option>
              <option value="Layanan Pelayanan Pensiun Non BUP dan BUP">Layanan Pelayanan Pensiun Non BUP dan BUP</option>
              <option value="Layanan Prosedur Perpindahan PNS (Keluar)">Layanan Prosedur Perpindahan PNS (Keluar)</option>
              <option value="Layanan Prosedur Perpindahan PNS (Masuk)">Layanan Prosedur Perpindahan PNS (Masuk)</option>
              <option value="Layanan Proses Peninjauan Masa Kerja PNS">Layanan Proses Peninjauan Masa Kerja PNS</option>
              <option value="Layanan Proses Pengukuhan/Peningkatan Pendidikan">Layanan Proses Pengukuhan/Peningkatan Pendidikan</option>
              <option value="Layanan Mutasi Jabatan bagi PNS yang Menduduki Jabatan Pelaksana">Layanan Mutasi Jabatan bagi PNS yang Menduduki Jabatan Pelaksana</option>
              <option value="Layanan RESPON">Layanan RESPON</option>
              <option value="Layanan Konseling Online">Layanan Konseling Online</option>
              <option value="Layanan Pengajuan Cuti Online">Layanan Pengajuan Cuti Online</option>
              <option value="Layanan LHKPN">Layanan LHKPN</option>
              <option value="Layanan Pengantaran Surat"></option>
              
            </select>
            
            <textarea class="form-control" name="needs2" id="needs2" cols="30" rows="5"  placeholder="Masukkan Keperluan Lainnya.."></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 form-group">
            <label class="col-form-label" for="">Tanda Tangan <span class="required" style="color: red">*</span>
            </label>
            <br/>
            <div id="signature-pad" class="signature-pad">
              <div class="signature-pad--body" style="">
                <canvas style="display: block;
                position: relative;
                border: 1px solid; "></canvas>
              </div>             
            </div>
            <input type="hidden" id="signature-base64" name="signature">
            <br>
            <button id="clearButton" class="btn btn-danger">Clear Signature</button>
            <button type="submit" class="btn btn-success">Save</button>
          </div>
        </div>
      </form>
   </div>
  </div>
@endsection

