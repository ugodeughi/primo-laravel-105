@php
    // qui scrivo codice php
@endphp


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ciao Laravel</title>
</head>
<body>

    @dump($colori)

    <h1>Ciao {{ $name }} {{ $lastname }}</h1>


    @if ($stampaParagrafo)
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, voluptatem similique facilis asperiores alias nesciunt provident in nisi, quibusdam repellat impedit culpa, earum unde animi sunt officia. Ut, nam incidunt!
        </p>
    @else
        <p>Nessun paragrafo da stampare</p>
    @endif

    @if($num1 > $num2)
        <p>il numero 1 è maggiore del numero 2</p>
    @elseif($num1 < $num2)
        <p>il nnumero 2 è maggiore del numero 1</p>
    @else
        <p>I due numeri sono uguali</p>
    @endif

    <ul>
        @foreach ($colori as $colore)

            @if($loop->first)
             <li>Il promo colore è: {{ $colore }}</li>
            @elseif($loop->last)
             <li>Questo è l'ultimo colore: {{ $colore }}</li>
            @else
             <li>{{ $colore }}</li>
            @endif

        @endforeach
    </ul>




</body>
</html>
