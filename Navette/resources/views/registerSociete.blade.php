<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Inscription</h2>
        <form action="/register" method="POST" enctype="multipart/form-data" class="space-y-4">
            <div>
                <label class="block text-sm font-medium">Nom</label>
                <input type="text" name="name" class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300" required>
            </div>
            <div>
                <label class="block text-sm font-medium">Email</label>
                <input type="email" name="email" class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300" required>
            </div>
            <div>
                <label class="block text-sm font-medium">Mot de passe</label>
                <input type="password" name="password" class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300" required>
            </div>
            <div>
                <label class="block text-sm font-medium">Téléphone</label>
                <input type="tel" name="telephone" class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300" required>
            </div>
            <div>
                <label class="block text-sm font-medium">Adresse</label>
                <input type="text" name="adresse" class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300" required>
            </div>
            <div>
                <label class="block text-sm font-medium">Logo</label>
                <input type="file" name="logo" class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300" accept="image/*" required>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700">S'inscrire</button>
        </form>
    </div>
</body>
</html>
