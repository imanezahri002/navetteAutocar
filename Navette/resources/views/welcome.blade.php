<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plateforme de Réservation de Voyages</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <span class="text-blue-600 font-bold text-2xl">Voyage<span class="text-amber-500">Express</span></span>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="#" class="border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Accueil
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Destinations
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Sociétés
                        </a>
                        <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Contact
                        </a>
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <a href="{{route('connexion')}}" class="text-gray-500 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Connexion</a>
                </div>
                <div class="-mr-2 flex items-center sm:hidden">
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                        <span class="sr-only">Ouvrir le menu</span>
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-blue-500 to-blue-700 overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-none sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-blue-700 transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="50,0 100,0 50,100 0,100"></polygon>
                </svg>

                <div class="pt-10 sm:pt-16 lg:pt-8 xl:pt-16">
                    <div class="sm:text-center lg:text-left px-4 sm:px-8 xl:pl-12">
                        <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">
                            <span class="block">Voyagez en toute</span>
                            <span class="block text-amber-400">simplicité</span>
                        </h1>
                        <p class="mt-3 text-base text-blue-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto lg:mx-0">
                            Trouvez les meilleurs trajets entre villes marocaines. Comparez les prix, horaires et services des différentes sociétés de transport.
                        </p>
                        <div class="mt-8 sm:mt-10 space-y-4 sm:space-y-0 sm:flex sm:space-x-4">
                            <a href="{{route('registerSoc')}}" class="w-full sm:w-auto flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-white hover:bg-blue-50 md:py-4 md:text-lg md:px-10">
                                S'inscrire en tant que société
                            </a>
                            <a href="{{route('registerCl')}}" class="w-full sm:w-auto flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-amber-500 hover:bg-amber-600 md:py-4 md:text-lg md:px-10">
                                S'inscrire en tant que client
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="/api/placeholder/800/600" alt="Bus voyageant sur une route">
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">Notre plateforme</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Voyager n'a jamais été aussi simple
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Découvrez notre service unique pour trouver et réserver votre prochain voyage.
                </p>
            </div>

            <div class="mt-10">
                <div class="space-y-10 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-10">
                    <div class="flex flex-col items-center md:items-start">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                            <i class="fas fa-search"></i>
                        </div>
                        <div class="mt-5 text-center md:text-left">
                            <h3 class="text-lg font-medium text-gray-900">Recherche facile</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Trouvez rapidement des voyages entre villes avec notre moteur de recherche intuitif.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col items-center md:items-start">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <div class="mt-5 text-center md:text-left">
                            <h3 class="text-lg font-medium text-gray-900">Meilleurs prix</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Comparez les tarifs des différentes sociétés pour économiser sur vos trajets.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col items-center md:items-start">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                            <i class="fas fa-ticket-alt"></i>
                        </div>
                        <div class="mt-5 text-center md:text-left">
                            <h3 class="text-lg font-medium text-gray-900">Réservation en ligne</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Réservez et payez vos billets directement en ligne, sans vous déplacer.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-blue-600">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                <span class="block">Prêt à voyager ?</span>
                <span class="block text-amber-400">Commencez dès aujourd'hui.</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-blue-600 bg-white hover:bg-blue-50">
                        Rechercher un voyage
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="space-y-8 xl:col-span-1">
                    <span class="text-blue-400 font-bold text-2xl">Voyage<span class="text-amber-400">Express</span></span>
                    <p class="text-gray-300 text-base">
                        La meilleure façon de voyager à travers le Maroc. Trouvez et réservez vos billets en quelques clics.
                    </p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-gray-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
                <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Navigation</h3>
                            <ul class="mt-4 space-y-4">
                                <li><a href="#" class="text-base text-gray-300 hover:text-white">Accueil</a></li>
                                <li><a href="#" class="text-base text-gray-300 hover:text-white">Destinations</a></li>
                                <li><a href="#" class="text-base text-gray-300 hover:text-white">Sociétés</a></li>
                                <li><a href="#" class="text-base text-gray-300 hover:text-white">Contact</a></li>
                            </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Support</h3>
                            <ul class="mt-4 space-y-4">
                                <li><a href="#" class="text-base text-gray-300 hover:text-white">Centre d'aide</a></li>
                                <li><a href="#" class="text-base text-gray-300 hover:text-white">FAQ</a></li>
                                <li><a href="#" class="text-base text-gray-300 hover:text-white">Conditions d'utilisation</a></li>
                                <li><a href="#" class="text-base text-gray-300 hover:text-white">Politique de confidentialité</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-12 border-t border-gray-700 pt-8">
                <p class="text-base text-gray-400 xl:text-center">
                    &copy; 2025 VoyageExpress. Tous droits réservés.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
