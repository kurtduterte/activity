<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="max-w-4xl mx-auto py-10">
        <h1 class="text-3xl font-bold mb-6">Events</h1>

        <a href="{{ route('admin.create') }}" class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded">
            Add Event
        </a>

        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="py-3 px-4 border-b">Title</th>
                    <th class="py-3 px-4 border-b">Description</th>
                    <th class="py-3 px-4 border-b">Location</th>
                    <th class="py-3 px-4 border-b">Date</th>
                    <th class="py-3 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($events as $event)
                    <tr class="hover:bg-gray-100">
                        <td class="py-3 px-4 border-b">{{ $event->title }}</td>
                        <td class="py-3 px-4 border-b">{{ $event->description }}</td>
                        <td class="py-3 px-4 border-b">{{ $event->location }}</td>
                        <td class="py-3 px-4 border-b">{{ $event->date }}</td>
                        <td class="py-3 px-4 border-b flex gap-2">
                            <a href="{{ route('admin.edit', $event->id) }}"
                               class="px-3 py-1 bg-yellow-500 text-white rounded">
                                Edit
                            </a>
                            <form action="{{ route('admin.delete', $event->id) }}" method="POST" onsubmit="return confirm('Delete this event?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-1 bg-red-600 text-white rounded">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="py-3 px-4 text-center text-gray-500">No events found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</body>
</html>
