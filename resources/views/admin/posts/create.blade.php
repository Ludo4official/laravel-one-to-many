@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">
                <h1>
                    Crea Progetto
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div>
                        <label for="title" class="form-label">Nome Progetto</label>
                        <input type="text" name="title" id="title" class="form-control" required maxlength="128" placeholder="Inserisci Nome del Progetto">
                    </div>
                    <div>
                        <label for="content" class="form-label">Contenuto</label>
                        <input type="text" name="content" id="content" class="form-control" required placeholder="Inserisci il contenuto del progetto">
                    </div>
                    <div>
                        <label for="img" class="form-label">

                        </label>
                        <input type="file" name="img" id="img" class="form-control" value="{{ old('img') }}" accept="image/*" >
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success mt-5">
                            Aggiungi
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection