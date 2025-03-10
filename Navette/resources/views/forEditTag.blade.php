<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Formulaire</title>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">

    <form action="{{ route('updateTag',$tag->id)}}" method="POST" class="bg-white p-6 rounded-lg shadow-md w-80">
        @csrf
        <label for="name" class="block text-gray-700 font-semibold mb-2">Name:</label>
        <input type="text" id="name" name="name"
               class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
               placeholder="Enter name" required value="{{$tag->name}}">

        <button type="submit"
                class="w-full mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-lg">
            EDIT
        </button>
    </form>

</body>
</html>
