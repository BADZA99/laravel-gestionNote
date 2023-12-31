<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modification apprenant</title>
</head>

<body>
    <h1 style="text-align: center; color: #4CAF50;">Formulaire de modification d'apprenant</h1>

    <form action="{{ route('update-apprenant', $apprenant->id) }}" method="POST" style="max-width: 500px; margin: auto;">
        @csrf
        <div style="margin-bottom: 15px;">
            <label for="nom" style="display: block; margin-bottom: 5px;">Nom</label>
            <input type="text" id="nom" name="nom" value="{{ $apprenant->nom }}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="prenom" style="display: block; margin-bottom: 5px;">Prenom</label>
            <input type="text" id="prenom" name="prenom" value="{{ $apprenant->prenom }}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="matricule" style="display: block; margin-bottom: 5px;">Matricule</label>
            <input type="text" id="matricule" name="matricule" value="{{ $apprenant->matricule }}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Modifier</button>
    </form>

</body>

</html>