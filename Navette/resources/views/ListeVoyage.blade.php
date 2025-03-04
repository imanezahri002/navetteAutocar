<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Voyages</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100 p-6">
    <div class="w-full max-w-4xl bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Liste des Voyages</h2>
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 p-2">Places</th>
                    <th class="border border-gray-300 p-2">Ville de Départ</th>
                    <th class="border border-gray-300 p-2">Ville d'Arrivée</th>
                    <th class="border border-gray-300 p-2">Heure de Départ</th>
                    <th class="border border-gray-300 p-2">Heure d'Arrivée</th>
                    <th class="border border-gray-300 p-2">Prix</th>
                    <th class="border border-gray-300 p-2">Options</th>

                </tr>
            </thead>
            <tbody>
                <!-- Exemple de ligne, à remplacer par une boucle dynamique -->
                @foreach($voyages as $voyage)
                <tr class="bg-white border border-gray-300">
                    <td class="border border-gray-300 p-2 text-center">{{$voyage->place}}</td>
                    <td class="border border-gray-300 p-2 text-center">{{$voyage->ville_depart}}</td>
                    <td class="border border-gray-300 p-2 text-center">{{$voyage->ville_arrivee}}</td>
                    <td class="border border-gray-300 p-2 text-center">{{$voyage->heure_depart}}</td>
                    <td class="border border-gray-300 p-2 text-center">{{$voyage->heure_arrivee}}</td>
                    <td class="border border-gray-300 p-2 text-center">{{$voyage->prix}}</td>
                    <td class="border border-gray-300 p-2 text-center flex justify-center space-x-2"><button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                        ✏️ Edit
                    </button>
                    <button class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
                        🗑️ Delete
                    </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
