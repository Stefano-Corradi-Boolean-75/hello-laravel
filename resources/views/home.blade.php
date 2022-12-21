@php

    $altra_var = "Altra Variabile";

@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>ciao Laravel</title>
</head>
<body>
    <h1>{{ $saluto }} {{ $utente }}</h1>
    <h3>{{ $altra_var  }}</h3>

   @if ($stampa_paragrafo)
     <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur architecto quidem eaque pariatur inventore cupiditate quam et, magnam accusantium nulla, obcaecati commodi quibusdam id. Quisquam eaque reprehenderit quos recusandae consequuntur!
    </p>
   @else
    <p>nessun paragrafo da stampare</p>
   @endif

   <ul>
    @foreach ($colori as $colore )

        @if ($loop->first)
            <li class="primo">  - primo - {{ $colore }}  - primo -  </li>
        @elseif ($loop->last)
            <li class="ultimo">- ultimo -  {{ $colore }} - ultimo -  </li>
        @else
            <li > {{ $colore }} </li>
        @endif

    @endforeach
   </ul>

   <ul>
    @for ($i = 0; $i < 10; $i++)
        <li> {{$i}} </li>
    @endfor
   </ul>


</body>
</html>
