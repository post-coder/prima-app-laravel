<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Prima app in Laravel</h1>


  <ul>
    @foreach ($nomi as $nome)
      <li>{{$nome}}</li>
    @endforeach
  </ul>

  @if($controllo)
    Il controllo è vero
  @else 
    <strong>Il controllo è falso</strong> 
  @endif

  <hr>

  <ul>

    @for ($i = 0; $i < 10; $i ++) 
      <li>
        Ciao
      </li>
    @endfor
  </ul>


  <footer>
    <hr>
    <ul>
      <li>
        <a href="/prova">Vai alla pagina di prova</a>
      </li>
    </ul>
  </footer>
</body>
</html>