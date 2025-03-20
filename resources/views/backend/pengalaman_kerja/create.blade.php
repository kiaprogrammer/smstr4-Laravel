@extends('backend.layouts.template')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="icon_document_alt"></i> Tambah Pengalaman Kerja</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{ url('dashboard') }}">Home</a></li>
                    <li><i class="icon_document_alt"></i> Pengalaman Kerja</li>
                    <li><i class="fa fa-plus"></i> Tambah</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Tambah Pengalaman Kerja
                    </header>
                    <div class="panel-body">
                        <form class="form_validate form-horizontal" id="pengalaman_kerja_form" action="{{ isset($pengalaman_kerja) ? route('pengalaman_kerja_update', $pengalaman_kerja->id) :
                        route('pengalaman_kerja.store') }}" method="POST">
                            @csrf  {{-- Pastikan ada CSRF token --}}
                            {!! isset($pengalaman_kerja) ? method_field('PUT') : '' !!}
                            <div class="form-group">
                                    <input type="hidden" name="id" value="{{ $pengalaman_kerja->id }}"> <br/>
                                        <label for="cname" class="control-label col-lg-2">Nama Perusahaan
                                        <span class="required">*</span>
                                        </label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="nama" name="nama" minlength="5" type="text"
                                    value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->nama : '' }}"
                                    required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cname" class="control-label col-lg-2">Jabatan <span
                                    class="required">*</span>
                                </label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="jabatan" name="jabatan" minlength="2" type="text"
                                    value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->jabatan : '' }}"
                                    required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="curl" class="control-label col-lg-2">Tahun Masuk <span
                                    class="required">*</span>
                                </label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="tahun_masuk" name="tahun_masuk" type="text"
                                    value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->tahun_masuk : '' }}"
                                    required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="curl" class="control-label col-lg-2">Tahun Selesai <span
                                    class="required">*</span>
                                </label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="tahun_keluar" name="tahun_keluar" type="text"
                                    value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->tahun_keluar : '' }}"
                                    required />
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('pengalaman_kerja.index') }}" class="btn btn-default">Batal</a>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
@push('control-css')
<link href="{{ asset('backend/css/bootstrap-datepicker.css') }}" rel="stylesheet"/>
@endpush
@push('content-js')
    <script src="{{ asset('backend/js/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript">
        $('#tahun_masuk, #tahun_keluar').datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years",
            autoclose: true
        });
    </script>
@endpush
@endsection