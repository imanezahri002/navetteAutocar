<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Connexion</h2>
        <form action="/login" method="POST" class="space-y-4">
            <div>
                <label class="block text-sm font-medium">Email</label>
                <input type="email" name="email" class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300" required>
            </div>
            <div>
                <label class="block text-sm font-medium">Mot de passe</label>
                <input type="password" name="password" class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300" required>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700">Se connecter</button>
        </form>
    </div>
</body>
</html>
