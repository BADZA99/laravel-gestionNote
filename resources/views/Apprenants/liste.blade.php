 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Apprenants</title>
 </head>

 <body>
     <h1 style="text-align: center; color: blue;">Liste des Apprenants</h1>
     <!-- affiche correctement les apprenants -->
     <a href="{{ route('add-new-student') }}" class="btn btn-primary" style="margin-top: 5px;margin-bottom: 5px; display: inline-block; font-weight: 400; color: #fff; text-align: center; vertical-align: middle; cursor: pointer; background-color: blue; border: 1px solid transparent; padding: .375rem .75rem; font-size: 1rem; line-height: 1.5; border-radius: .25rem; transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;">Ajouter</a>
     <table style="width: 90%; border-collapse: collapse; margin: 0 auto; font-family: Arial, sans-serif;">
         <thead>
             <tr>
                 <th scope="col" style="border: 1px solid #ddd; padding: 15px; text-align: left; background-color: blue; color: white;">id</th>
                 <th scope="col" style="border: 1px solid #ddd; padding: 15px; text-align: left; background-color: blue; color: white;">nom</th>
                 <th scope="col" style="border: 1px solid #ddd; padding: 15px; text-align: left; background-color: blue; color: white;">prenom</th>
                 <th scope="col" style="border: 1px solid #ddd; padding: 15px; text-align: left; background-color: blue; color: white;">matricule</th>
                 <th scope="col" style="border: 1px solid #ddd; padding: 15px; text-align: left; background-color: blue; color: white;">actions</th>
             </tr>
         </thead>
         <tbody>
             @foreach ($apprenants as $apprenant)
             <tr>
                 <th scope="row" style="border: 1px solid #ddd; padding: 15px;">{{$apprenant->id}}</th>
                 <td style="border: 1px solid #ddd; padding: 15px;">{{$apprenant->nom}}</td>
                 <td style="border: 1px solid #ddd; padding: 15px;">{{$apprenant->prenom}}</td>
                 <td style="border: 1px solid #ddd; padding: 15px;">{{$apprenant->matricule}}</td>
                    <td style="border: 1px solid #ddd; padding: 15px;">
                        <a href="{{ route('edit-apprenant', $apprenant->id) }}" class="btn btn-primary" style="margin-top: 5px;margin-bottom: 5px; display: inline-block; font-weight: 400; color: #fff; text-align: center; vertical-align: middle; cursor: pointer; background-color: green; border: 1px solid transparent; padding: .375rem .75rem; font-size: 1rem; line-height: 1.5; border-radius: .25rem; transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;">Modifier</a>
                        <a href="{{ route('delete-apprenant', $apprenant->id) }}" class="btn btn-primary" style="margin-top: 5px;margin-bottom: 5px; display: inline-block; font-weight: 400; color: #fff; text-align: center; vertical-align: middle; cursor: pointer; background-color: red; border: 1px solid transparent; padding: .375rem .75rem; font-size: 1rem; line-height: 1.5; border-radius: .25rem; transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;">Supprimer</a>
             </tr>
             @endforeach
         </tbody>
     </table>
     <a href="{{ route('liste-matieres') }}" class="btn btn-primary" style="margin-top: 15px;display: inline-block; font-weight: 400; color: #fff; text-align: center; vertical-align: middle; cursor: pointer; background-color: blue; border: 1px solid transparent; padding: .375rem .75rem; font-size: 1rem; line-height: 1.5; border-radius: .25rem; transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;">page matière</a>

 </body>