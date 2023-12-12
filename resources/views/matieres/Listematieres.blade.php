<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>matieres</title>
    <link rel="stylesheet" href="{{('../css/matiere.css')}}">
</head>

<body>
    <!-- affiches les matieres -->
    <h1 style="text-align: center; color: #4CAF50;">Liste des matieres</h1>
    <a href="{{ route('add-new-matiere') }}" class="btn btn-primary" style="margin-top: 5px;margin-bottom: 5px; display: inline-block; font-weight: 400; color: #fff; text-align: center; vertical-align: middle; cursor: pointer; background-color: #4CAF50; border: 1px solid transparent; padding: .375rem .75rem; font-size: 1rem; line-height: 1.5; border-radius: .25rem; transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;">Ajouter</a>
    <table style="width: 90%; border-collapse: collapse; margin: 0 auto; font-family: Arial, sans-serif;">
        <table style="width: 90%; border-collapse: collapse; margin: 0 auto; font-family: Arial, sans-serif;">
            <thead>
                <tr>
                    <th scope="col" style="border: 1px solid #ddd; padding: 15px; text-align: left; background-color: #4CAF50; color: white;">id</th>
                    <th scope="col" style="border: 1px solid #ddd; padding: 15px; text-align: left; background-color: #4CAF50; color: white;">libelle</th>
                    <th scope="col" style="border: 1px solid #ddd; padding: 15px; text-align: left; background-color: #4CAF50; color: white;">coef</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($matieres as $matiere)
                <tr>
                    <th scope="row" style="border: 1px solid #ddd; padding: 15px;">{{$matiere->id}}</th>
                    <td style="border: 1px solid #ddd; padding: 15px;">{{$matiere->libelle}}</td>
                    <td style="border: 1px solid #ddd; padding: 15px;">{{$matiere->coefficient}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('liste-apprenants') }}" style=" font-weight: 400; color: #fff; text-align: center; vertical-align: middle; cursor: pointer; background-color: #4CAF50; border: 1px solid transparent; padding: .375rem .75rem; font-size: 1rem; line-height: 1.5; border-radius: .25rem; transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;">page Apprenants</a>
</body>

</html>