@extends('master.index')

@section('container')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="font-weight-bold text-primary">Data Pemilih</h5>
                <div class="button">
                <button class="btn btn-success" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                    Export Excel
                </button>
                <button class="btn btn-success" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                    Tambah Pemilih
                </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NISN</th>
                            <th>Kelas</th>
                            <th>Angkatan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($pemilihList as $pemilih )

                            <td>{{$pemilih->nama}}</td>
                            <td>{{$pemilih->nisn}}</td>
                            <td>{{$pemilih->kelas}}</td>
                            <td>{{$pemilih->angkatan}}</td>
                            <td>{{$pemiih->status}}</td>
                            <td>
                                <a href="" class="btn btn-danger">Hapus</a>
                            </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pemilih</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nama Lengkap: </label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">NISN: </label>
                            <input type="number" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Kelas:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Angkatan:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="#">Tambah</a>
                </div>
            </div>
        </div>
    </div>
@endsection
