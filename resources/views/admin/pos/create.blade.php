@extends('layouts.admin')

@section('content')
    <h2>Tambah Pos Baru</h2>
    <hr>

    <form action="{{ url('/admin/pos') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label><b>Judul Pos:</b></label>
            <input type="text" name="judul" class="form-control" placeholder="Tulis judul di sini...">
        </div>

        <div class="mb-3">
            <label><b>Isi Artikel:</b></label>
            <textarea name="isi_pos" id="editor" class="form-control" rows="10"></textarea>
        </div>

        <div class="mb-4">
            <label><b>Foto Sampul:</b></label>
            <br>
            <input type="file" name="foto">
        </div>

        <button type="submit" class="btn btn-primary px-4">Terbitkan</button>
        <button type="reset" class="btn btn-danger">Batal</button>

    </form>

    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    
@endsection