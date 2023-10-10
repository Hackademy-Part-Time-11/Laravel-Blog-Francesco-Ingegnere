<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Messaggio da contatti {{config('app.name')}}</title>
    </head>
    <body>
        Nuovo contatto ricevuto il {{date('d-m-Y H:i')}} da {{config('app.name')}}
        <br>
        <br>
        Nome Utente: {{$name}}
        <br>
        Email: {{$email}}
        <br>
        Messaggio: {{$messageInfo}}
    </body>
</html>