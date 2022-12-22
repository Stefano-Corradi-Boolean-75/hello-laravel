
<!-- estendo il main layout -->
@extends('layouts.main')

@section('title')
    HOME
@endsection

<!-- innome della section deve essere qullo dello yield -->
@section('content')
    <h1>{{ $saluto }} {{ $utente }}</h1>


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
@endsection
