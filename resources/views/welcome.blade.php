<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('css/style.css')}}">
    <title>Saúde</title>
</head>
<body>
    <div class="container">
        <div class="titulo">
            <h1>Bem vindo</h1>
        </div>
       
        <div class="paragrafo">
            <p>Insira as informações para calcular seu volume de treino.</p>
        </div>

        <div class="formulario">
            <form action="{{ route('calcular.salvar')}}" method="post">
                @csrf
                <div class="exercicio">
                    <label for="exercicio">Exercicio:</label>
                    <input type="text" name="exercicio" id="exercicio">
                    <br><br>
                </div>
                
                <div class="serie">
                    <label for="serie">Série</label>
                    <input type="number" name="serie" id="serie">
                    <br><br>
                </div>

                <div class="repeticao">
                    <label for="repeticao">Repetição</label>
                    <input type="number" name="repeticao" id="repeticao">
                    <br><br>
                </div>

                <div class="carga">
                    <label for="carga">Carga:</label>
                    <input type="text" name="carga" id="carga">
                    <br><br>
                </div>

                <div class="botao">
                    <a href="calcular.salvar">
                        <button class="conteudoBotao" type="submit">Calcular</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>