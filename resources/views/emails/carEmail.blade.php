<x-mail::message>
# Nouveau Post de voiture

## Fiche d'information de la marque  <strong>{{ $data['marque'] }} </strong>:

<x-mail::table>
| Designation   |  Noms                           |
| ------------- |:-------------------------------:|
| Marque        | {{ $data['marque'] }}           |
| Modèle        | {{ $data['modele'] }}           |
| Carrosserie   | {{ $data['carrosserie'] }}      |
| Killometrage  | {{ $data['killometrage'] }}     |
| Annee         | {{ $data['annee'] }}            |
| Moteur        | {{ $data['moteur'] }}           |
| Couleur       | {{ $data['couleur'] }}          |
| Etat          | {{ $data['etat'] }}             |
| Carburant     | {{ $data['carburant'] }}        |
| Transmission  | {{ $data['transmission'] }}     |
| Volant        | {{ $data['volant'] }}           |
| Cliamatisation| {{ $data['climatisation'] }}    |
| Prix          | {{ $data['prix'] }}             |
| Negociable    | {{ $data['negociable'] }}       |
| Description   | {{ $data['description'] }}      |
| User          | {{ $data['user_id'] }}          |
| Ville         | {{ $data['ville'] }}            |
</x-mail::table>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
