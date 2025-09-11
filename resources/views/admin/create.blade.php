<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Event</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="max-w-lg mx-auto py-10">
        <h1 class="text-3xl font-bold mb-6">Create Event</h1>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.store') }}" method="POST" class="bg-white p-6 rounded shadow">
            @csrf

            <div class="mb-4">
                <label for="title" class="block font-semibold mb-1">Title</label>
                <input type="text" name="title" id="title" class="w-full border border-gray-300 rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block font-semibold mb-1">Description</label>
                <textarea name="description" id="description" class="w-full border border-gray-300 rounded px-3 py-2" rows="3" required></textarea>
            </div>

            <div class="mb-4">
                <label for="location" class="block font-semibold mb-1">Location</label>
                <input type="text" name="location" id="location" class="w-full border border-gray-300 rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label for="date" class="block font-semibold mb-1">Date</label>
                <input type="date" name="date" id="date" class="w-full border border-gray-300 rounded px-3 py-2" required>
            </div>

            <div class="flex justify-between">
                <a href="/events" class="px-4 py-2 bg-gray-300 rounded">Cancel</a>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Save</button>
            </div>
        </form>
    </div>

</body>
</html>
