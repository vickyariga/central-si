@extends('backend.layouts.app')

@section('breadcrumb')
    {!! cui_breadcrumb([
        'Home' => route('admin.home'),
        'Dosen2' => route('admin.dosen2.index'),
        'Index' => '#'
    ]) !!}
@endsection 

@section('toolbar')
    {!! cui_toolbar_btn(route('admin.dosen2.create'), 'icon-plus', 'Tambah Riwayat Pendidikan') !!}
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">

                {{-- CARD HEADER--}}
                <div class="card-header">
                    <strong>List Riwayat Pendidikan Dosen</strong>
                </div>

                {{-- CARD BODY--}}
                <div class="card-body">

                    <div class="row justify-content-end">
                        <div class="col-md-6 text-right">
                    
                        </div>
                        <div class="col-md-6 justify-content-end">
                            <div class="row justify-content-end">
                                {{ $dosen2s->links() }}
                            </div>
                        </div>
                    </div>

                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th class="text-center">User Id</th>
                            <th class="text-center">Jenjang Id</th>
                            <th class="text-center">Nama Sekolah</th>
                            <th class="text-center">Jurusan</th>
                            <th class="text-center">Tahun Masuk</th>
                            <th class="text-center">Tahun Lulus</th>
                            <th class="text-center">Lokasi Sekolah</th>
                            <th class="text-center">Nomor Ijazah</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dosen2s as $dosen2)
                            <tr>
                                <td class="text-center">{{ $dosen2->user_id }}</td>
                                <td class="text-center">{{ $dosen2->jenjang_id }}</td>
                                <td class="text-center">{{ $dosen2->nama_sekolah }}</td>
                                <td class="text-center">{{ $dosen2->jurusan }}</td>
                                <td class="text-center">{{ $dosen2->tahun_masuk }}</td>
                                <td class="text-center">{{ $dosen2->tahun_lulus }}</td>
                                <td class="text-center">{{ $dosen2->lokasi_sekolah }}</td>
                                <td class="text-center">{{ $dosen2->nomor_ijazah }}</td>
                                <td class="text-center">
                                    {!! cui_btn_view(route('admin.dosen2.show', [$dosen2->id])) !!}
                                    {!! cui_btn_edit(route('admin.dosen2.edit', [$dosen2->id])) !!}
                                    {!! cui_btn_delete(route('admin.dosen2.destroy', [$dosen2->id]), "Anda yakin akan menghapus data riwayat pendidikan ini?") !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="row justify-content-end">
                        <div class="col-md-6 text-right">

                        </div>
                        <div class="col-md-6 justify-content-end">
                            <div class="row justify-content-end">
                                {{ $dosen2s->links() }}
                            </div>
                        </div>
                    </div>

                </div><!--card-body-->

                {{-- CARD FOOTER--}}
                <div class="card-footer">
                </div>

            </div><!--card-->
        </div><!--col-->
    </div><!--row-->

@endsection
