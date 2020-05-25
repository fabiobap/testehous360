@extends('layouts.app')

@section('content')
<div class="container">
    @include('flash::message')
    <h1>Posts</h1>
    <hr>
    <div class="d-flex justify-content-end">
        <div class="p-2 bd-highlight">
            <a href="{{ URL::to('posts/create') }}" class="btn btn-primary">Novo Post</a>
        </div>
    </div>
    @if ($posts->isEmpty())
        <p class="alert alert-warning">Você não possui nenhum post</p>
    @else
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-sm-6 col-lg-3 py-2">
            <div class="card h-100">
                <img class="card-img-top img-fluid" src="{{ $post->urlDaImagem }}" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->titulo }}</h5>
                    <p class="card-text">{{ $post->descricao }}</p>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-between">
                        <div class="p-2 bd-highlight">
                            <a href='{{ route('posts.edit', ['post'=>$post->id]) }}'
                                class="btn btn-secondary">Editar</a>
                        </div>
                        <div class="p-2 bd-highlight">
                            <form action="{{ route('posts.destroy', ['post'=>$post->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                            <button
                            onclick="return confirm('Deseja realmente remover este item?');"
                                class="btn btn-danger">Remover</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <hr>
    {{ $posts->links() }}
    @endif
</div>
@endsection
