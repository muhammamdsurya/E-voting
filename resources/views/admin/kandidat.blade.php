@extends('master.index')

@section('container')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="font-weight-bold text-primary">Data Kandidat</h5>
                <button class="btn btn-success" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                    Tambah Kandidat
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Visi</th>
                            <th>Misi</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($kandidatList as $kandidat)
                                <td>{{ $kandidat->nama }}</td>
                                <td>{{ $kandidat->visi }}</td>
                                <td>{{ $kandidat->misi }}</td>
                                <td>{{ $kandidat->foto }}</td>
                                <td>
                                    <button class="btn btn-primary" href="#" data-toggle="modal"
                                        data-target="#logModal">
                                        Detail
                                    </button>
                                    <a href="" class="btn btn-danger">Hapus</a>
                                </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="modal fade" id="logModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Kandidat</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nama Kandidat: </label>
                            <input type="text" class="form-control" id="recipient-name" value="{{ $kandidat->nama }}">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Foto Kandidat: </label>
                            <input type="file" class="form-control-file" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Visi: </label>
                            <textarea class="form-control" id="message-text">{{ $kandidat->visi }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Misi: </label>
                            <textarea class="form-control" id="message-text">{{ $kandidat->misi }}</textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="#">Edit</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kandidat</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nama Kandidat: </label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Foto Kandidat: </label>
                            <input type="file" class="form-control-file" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Visi</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Misi</label>
                            <textarea class="form-control" id="message-text"></textarea>
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
