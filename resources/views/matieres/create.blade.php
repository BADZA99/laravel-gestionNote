<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter Matiere</title>
</head>

<body>
    <h1 style="text-align: center; color: #4CAF50;">Formulaire ajout matière</h1>

    <form action="{{ route('store-matiere') }}" method="POST" style="max-width: 500px; margin: auto;">
        @csrf
        <div style="margin-bottom: 15px;">
            <label for="libelle" style="display: block; margin-bottom: 5px;">libelle de la matière</label>
            <input type="text" id="libelle" name="libelle" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="coefficient" style="display: block; margin-bottom: 5px;">coef de la matière</label>
            <input type="text" id="coefficient" name="coefficient" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Ajouter</button>
    </form>

</body>

</html>