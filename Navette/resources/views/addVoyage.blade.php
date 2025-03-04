<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Voyage</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-lg bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Ajouter un Voyage</h2>
        <form action="/voyages" method="POST" class="space-y-4">
            <div>
                <label class="block text-sm font-medium">Nombre de places</label>
                <input type="number" name="place" class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
            </div>
            <div>
                <label class="block text-sm font-medium">Ville de départ</label>
                <input type="text" name="ville_depart" class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
            </div>
            <div>
                <label class="block text-sm font-medium">Ville d'arrivée</label>
                <input type="text" name="ville_arrivee" class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
            </div>
            <div>
                <label class="block text-sm font-medium">Heure de départ</label>
                <input type="date" name="heure_depart" class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
            </div>
            <div>
                <label class="block text-sm font-medium">Heure d'arrivée</label>
                <input type="date" name="heure_arrivee" class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
            </div>
            <div>
                <label class="block text-sm font-medium">Heure d'arrivée</label>
                <input type="date" name="date_depart" class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
            </div>
            <div>
                <label class="block text-sm font-medium">Heure d'arrivée</label>
                <input type="date" name="date_arrivee" class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
            </div>
            <div>
                <label class="block text-sm font-medium">Prix</label>
                <input type="number" step="0.01" name="prix" class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
            </div>
            
            <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700">Ajouter</button>
        </form>
    </div>
</body>
</html>
