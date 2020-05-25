<div class="card-body">
    <div class="form-group">
        <label for="titulo">Titulo</label>
        <input type="text" class="form-control @error('titulo') is-invalid @enderror" id="titulo" name="titulo" placeholder="Titulo"
            value="{{ old('titulo', $post->titulo ?? null) }}" required autofocus>
        @error('titulo')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea class="form-control @error('descricao') is-invalid @enderror" rows="3" name="descricao" id="descricao"
            placeholder="Descrição" required>{{ old('descricao', $post->descricao ?? null) }}</textarea>
        @error('descricao')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="urlDaImagem">URL da imagem</label>
        <input type="text" class="form-control @error('urlDaImagem') is-invalid @enderror" id="urlDaImagem" name="urlDaImagem" placeholder="URL da imagem"
            value="{{ old('urlDaImagem', $post->urlDaImagem ?? null) }}" required>
        @error('urlDaImagem')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>
