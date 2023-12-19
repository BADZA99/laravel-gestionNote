<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Notes</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="jumbotron mt-5">
            <h1 class="display-4">Bienvenue dans l'application de gestion des notes!</h1>
            <p class="lead">Cette application vous permet de gérer les notes des étudiants et les matières.</p>
            <hr class="my-4">
            <p>Choisissez une option ci-dessous pour commencer.</p>
            <a class="btn btn-primary btn-lg mr-2" href="{{ route('liste-apprenants') }}" role="button">Gérer les Apprenants</a>
            <a class="btn btn-secondary btn-lg" href="{{ route('liste-matieres') }}" role="button">Gérer les Matières</a>
        </div>
    </div>
</body>

</html>