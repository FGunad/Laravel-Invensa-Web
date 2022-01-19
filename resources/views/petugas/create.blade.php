@extends('layouts.main',['title'=>'Petugas Tambah'])

@section('content-header')
    <div class="container-fluid mb-2">
        <h1> <i class="fas fa-user-friends"></i> Petugas Tambah</h1>
    </div><!-- /.container-fluid -->
@endsection

@section('content')
<x-success/>
    <div class="row">
        <div class="col-5">
            <form class="card card-primary" action="{{ route('petugas.store') }}" method="POST">
                <div class="card-header">
                    <h3 class="card-title">[+] Tambah</h3>
                </div>
                <div class="card-body">
                    <x-input name="nama_petugas" label="Nama Petugas" placeholder="Nama Petugas"/>
                    <x-input name="username" label="Username" placeholder="Username"/>
                    <div class="form-group">
                        <label for="level">Level</label>
                        <select name="level" class="form-control" id="level">
                            @foreach ($level as $level)
                                <option>{{ $level->nama_level }}</option>
                            @endforeach
                        </select>
                      </div>
                    <x-input name="password" label="Password" placeholder="Password" type="password"/>
                    <x-input name="password_confirmation" label="Ulangi Password" placeholder="Re Password" type="password"/>
                </div>
                <div class="card-footer text-right">
                    <x-btn-simpan/>
                </div>
            </form>
        </div>
    </div>
@endsection

