<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Avaliação {{ $Avaliacao->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>Edição da avaliação {{ $Avaliacao->id }}</h1>

            <form method="POST" action="{{ route('avaliacoes.update', $Avaliacao->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control" value="{{ $Avaliacao->nome }}">
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="{{ $Avaliacao->email }}">
                </div>

                <div class="mb-3">
                    <label>Nota</label>
                    <input type="number" name="nota" class="form-control" value="{{ $Avaliacao->nota }}">
                </div>

                <div class="mb-3">
                    <label>Mensagem</label>
                    <input type="text" name="mensagem" class="form-control" value="{{ $Avaliacao->mensagem }}">
                </div>

                <div>
                    <input type="submit" value="Atualizar Avaliacao" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>
