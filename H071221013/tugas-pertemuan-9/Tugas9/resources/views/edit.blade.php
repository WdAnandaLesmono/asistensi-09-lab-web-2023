@extends('layouts.main')
@section('container')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card p-4 mt-5">
                <h3>Edit Product</h3>
                <form method="POST" action="/Menu/{{ $product->id }}/update" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Nama Makanan :</label>
                        <input type="text" class="form-control" name="nama" value="{{ old('nama', $product->nama) }}"
                            placeholder="Masukkan nama Makanan">
                        @if ($errors->has('nama'))
                            <span class="text-danger">{{ $errors->first('nama') }}</span>
                        @endif
                    </div>

                    <div class="mb-3 mt-3">
                        <label class="form-label">Harga Makanan :</label>
                        <input type="text" class="form-control" name="harga"
                            value="{{ old('harga', $product->harga) }}" placeholder="Masukkan harga Makanan">
                        @if ($errors->has('harga'))
                            <span class="text-danger">{{ $errors->first('harga') }}</span>
                        @endif
                    </div>

                    <div class="mb-3 mt-3">
                        <label class="form-label">Jenis :</label>
                        <select class="form-select" name="jenis">
                            <option>{{ $product->jenis }}</option>
                            <option value="Ikan dan SeaFood">Ikan dan SeaFood</option>
                            <option value="Soup">Soup</option>
                            <option value="Dessert">Dessert</option>
                            <option value="Ayam dan Daging">Ayam dan Daging</option>
                            <option value="Drink">Drink</option>
                        </select>
                        @if ($errors->has('jenis'))
                            <span class="text-danger">{{ $errors->first('jenis') }}</span>
                        @endif
                    </div>

                    <div class="mb-3 mt-3">
                        <label class="form-label">Deskripsi :</label>
                        <textarea class="form-control" rows="4" name="deskripsi" placeholder="Masukkan Catatan">{{ old('deskripsi', $product->deskripsi) }}</textarea>
                        @if ($errors->has('deskripsi'))
                            <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                        @endif
                    </div>

                    <div class="mb-3 mt-3">
                        <label class="form-label">Gambar Makanan :</label>
                        <input type="file" class="form-control" name="image" placeholder="Masukkan Gambar Makanan">
                        @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-dark mt-4">Add Menu</button>
                </form>
            </div>
        </div>
    </div>
@endsection
