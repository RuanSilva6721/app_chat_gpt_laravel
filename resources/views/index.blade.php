<form method="POST" action="/openaipost">
    @csrf
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>