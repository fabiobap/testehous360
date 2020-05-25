@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Novo Post</div>
                <form action="{{ route('posts.store') }}" method="POST" class="needs-validation" role="form">
                    @csrf
                    @include('posts._form')
                    <div class="d-flex justify-content-start">
                        <div class="p-2 bd-highlight">
                            <a href="{{ URL::to('posts/') }}" class="btn btn-secondary">Voltar</a>
                        </div>
                        <div class="p-2 bd-highlight">
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
