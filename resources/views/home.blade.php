<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>Hello World</h1>
        <h2>Benvenuto nella Home Page</h2>
        <p>Questo è il mio primo progetto di Laravel</p>
        <p>Ciao {{ $name }} {{$lastname}},</p>
        <p>alcune tue informazioni: </p>
        <ul>
            <li>Nome: {{ $name }}</li>
            <li>Cognome: {{ $lastname }}</li>
            <li>Email: {{ $email }}</li>
            <li>Età: {{ $age }}</li>
            <li>Telefono: {{$phone}}</li>      
            <li>Indirizzo: 
                <ul>
                    <li>{{$address}}</li>
                    <li>{{$city}}</li>
                    <li>{{$country}}</li>
                    <li>{{$postal_code}}</li>
                </ul>
            </li>
            <li>Sito Web: {{$website}}</li>
        </ul>

        <h3>Ci vediamo in classe Lunedì, Buon Weekend!</h3>
    </body>
</html>
