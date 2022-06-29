<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@foreach ($trains as $train)
<ul>
    <li>azienda: {{ $train->azienda }}</li>
    <li>data di partenza: {{ $train->data_di_partenza }}</li>
    <li>stazione di partenza: {{ $train->stazione_di_partenza }}</li>
    <li>stazione di arrivo: {{ $train->stazione_di_arrivo }}</li>
    <li>orario di partenza: {{ $train->orario_di_partenza }}</li>
    <li>orario di arrivo: {{ $train->orario_di_arrivo }}</li>
    <li>codice treno: {{ $train->codice_treno }} </li>
    <li>numero carrozze: {{ $train->numero_carrozze}} </li>
    <li>in orario: {{ $train->in_orario }}</li>
    <li>cancellato: {{ $train->cancellato }}</li>
</ul>
@endforeach
</body>
</html>
