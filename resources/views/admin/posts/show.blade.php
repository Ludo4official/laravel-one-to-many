@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">
                <h1>
                    {{ $post->title }}
                </h1>

                <p>
                    {{ $post->content }}
                </p>

                <div>
                    Categoria: {{ $post->category ?  $post->category->name : 'Nessuna categoria!' }}
                </div>

                @if ($post->img)
                    <div>
                        <img src="{{ asset('storage/'.$post->img) }}" alt="" style="height: 300px">
                    </div>
                @endif
            
            </div>
        </div>
    </div>
@endsection