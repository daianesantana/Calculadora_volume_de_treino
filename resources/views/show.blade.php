<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('css/style.css')}}">
    <title>Detalhes</title>
</head>
<body>
    <div class="container">
        <div class="titulo">
            <h1>Detalhes do calculo</h1>
        </div>
        <div class="conteudoDetalhes">
            @if($calculo)
                <p><strong>ID:</strong> {{$calculo->id}}</p>
                <p><strong>Exercicio:</strong>{{$calculo->exercicio}}</p>
                <p><strong>Série:</strong>{{$calculo->serie}}</p>
                <p><strong>Repeticões:</strong>{{$calculo->repeticao}}</p>
                <p><strong>Carga:</strong>{{$calculo->carga}}</p>
                <p><strong>Resultado:</strong>{{$resultado}}</p>
                <div class="containerbotao">
                    <a href="{{ route('calcular.index')}}">
                        <button class="btnVoltar" type="submit">Voltar</button>
                    </a>
                </div>
            @else
                <p>Dados do calculo não encontrado.</p>
            @endif
       
    </div>
  

</body>
</html>
