@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.pelanggan.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.pelanggans.update", [$pelanggan->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="nama_produk">{{ trans('cruds.pelanggan.fields.nama_produk') }}</label>
                <input class="form-control {{ $errors->has('nama_produk') ? 'is-invalid' : '' }}" type="text" name="nama_produk" id="nama_produk" value="{{ old('nama_produk', $pelanggan->nama_produk) }}" required>
                @if($errors->has('nama_produk'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nama_produk') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pelanggan.fields.nama_produk_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="author">{{ trans('cruds.pelanggan.fields.author') }}</label>
                <input class="form-control {{ $errors->has('author') ? 'is-invalid' : '' }}" type="text" name="author" id="author" value="{{ old('author', $pelanggan->author) }}" required>
                @if($errors->has('author'))
                    <div class="invalid-feedback">
                        {{ $errors->first('author') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pelanggan.fields.author_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection