<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editMatiere</title>
</head>

<body>
    <h1 style="text-align: center; color: #4CAF50;">Modifier une matière</h1>

    <form action="{{ route('update-matiere', $matiere->id) }}" method="POST" style="max-width: 500px; margin: auto;">
        @csrf
        <div style="margin-bottom: 15px;">
            <label for="libelle" style="display: block; margin-bottom: 5px;">libelle de la matière</label>
            <input type="text" id="libelle" name="libelle" value="{{ $matiere->libelle }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            @error('libelle')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div style="margin-bottom: 15px;">
            <label for="coefficient" style="display: block; margin-bottom: 5px;">Coefficient</label>
            <input type="number" id="coefficient" name="coefficient" value="{{ $matiere->coefficient }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            @error('coefficient')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Modifier</button>
    </form>

</body>

</html>