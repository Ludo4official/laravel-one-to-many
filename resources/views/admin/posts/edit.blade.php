@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">
                <h1>
                    Modifica Progetto
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('admin.posts.update', $post) }}" method="POST">

                    @csrf
                    @method('PUT')

                    <div>
                        <label for="title" class="form-label">Nome Progetto</label>
                        <input type="text" name="title" id="title" class="form-control" required maxlength="128" value="{{ old('title', $post->title) }}" placeholder="Inserisci Nome del Progetto">
                    </div>
                    <div>
                        <label for="content" class="form-label">Contenuto</label>
                        <input type="text" name="content" id="content" class="form-control" value="{{ old('content', $post->content) }}" required placeholder="Inserisci il contenuto del progetto">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success mt-5">
                            Salva
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection