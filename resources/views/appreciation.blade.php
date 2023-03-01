<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thanks</title>
</head>
<body>
<div class="container">
    <div class="d-flex flex-column justify-content-center text-bold">
        thanks {{ $user->nom}} for submit your message
        Here the form data:<br>
        <h4>Nom: {{$user->nom}}</h4>
        <h4>email: {{$user->email}}</h4>
        <h5>message: {{$user->message}}</h5>
    </div>
</div>
</body>
</html>