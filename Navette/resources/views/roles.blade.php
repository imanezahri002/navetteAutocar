<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permissions Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <a href="{{route('createRole')}}" class="mb-4 inline-block px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
            Add Role
        </a>

        <table class="w-full border-collapse border border-gray-300 mt-4">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border border-gray-300 px-4 py-2">ID</th>
                    <th class="border border-gray-300 px-4 py-2">Name</th>
                    <th class="border border-gray-300 px-4 py-2">Permissions</th>
                    <th class="border border-gray-300 px-4 py-2">Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $role)
                <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $role->id }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $role->name }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                    <!-- @forelse($roles->permission as $permission)
                    {{ $permission->name }}
                   @empty
                   <td>
                    hgfd
                   </td>
                    @endforelse -->
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <a href="" class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 transition">Edit</a>
                        <a href="" class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 transition">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
