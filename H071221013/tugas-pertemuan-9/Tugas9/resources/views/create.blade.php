@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card p-4 mt-5">
                <form method="POST" action="/product/store" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Makanan :</label>
                        <input type="text" class="form-control" name="nama" value="{{ old('nama') }}"
                            placeholder="Masukkan nama Makanan">
                        @if ($errors->has('nama'))
                            <span class="text-danger">{{ $errors->first('nama') }}</span>
                        @endif
                    </div>

                    <div class="mb-3 mt-3">
                        <label class="form-label">Harga Makanan :</label>
                        <input type="text" class="form-control" name="harga" value="{{ old('harga') }}"
                            placeholder="Masukkan harga Makanan">
                        @if ($errors->has('harga'))
                            <span class="text-danger">{{ $errors->first('harga') }}</span>
                        @endif
                    </div>

                    <div class="mb-3 mt-3">
                        <label class="form-label">Jenis :</label>
                        <select class="form-select" name="jenis">
                            <option></option>
                            {{-- <option>{{ $product->jenis }}</option> --}}
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
                        <textarea class="form-control" rows="4" name="deskripsi" placeholder="Masukkan Catatan">{{ old('deskripsi') }}</textarea>
                        @if ($errors->has('deskripsi'))
                            <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                        @endif
                    </div>

                    <div class="mb-3 mt-3">
                        <label class="form-label">Gambar Makanan :</label>
                        <input type="file" class="form-control" name="image" placeholder="Masukkan gambar Makanan">
                        @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-dark mt-4">Add Product</button>
                </form>
            </div>
        </div>
    </div>
@endsection
