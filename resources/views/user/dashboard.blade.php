<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Events</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">

    <div class="max-w-6xl mx-auto py-10">
        <h1 class="text-3xl font-bold mb-6">Available Events</h1>

        <!-- Register button (optional, if user can create/register for events) -->
        <a href="{{ route('user.create') }}"
            class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            Register
        </a>
        {{ $events->links() }}

        @if (session('success'))
            <div
                class="mb-6 p-4 bg-green-50 border-l-4 border-green-500 text-green-800 rounded-lg shadow-sm flex items-center justify-between">
                <div class="flex items-center">
                    <svg class="w-6 h-6 mr-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="font-medium">{{ session('success') }}</span>
                </div>
                <button onclick="this.parentElement.style.display='none'"
                    class="text-green-700 hover:text-green-900 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
        @endif

        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="py-3 px-4 border-b">Title</th>
                    <th class="py-3 px-4 border-b">Description</th>
                    <th class="py-3 px-4 border-b">Location</th>
                    <th class="py-3 px-4 border-b">Date</th>
                </tr>
            </thead>
            <tbody>
                @forelse($events as $event)
                    <tr class="hover:bg-gray-100">
                        <td class="py-3 px-4 border-b">{{ $event->title }}</td>
                        <td class="py-3 px-4 border-b">{{ $event->description }}</td>
                        <td class="py-3 px-4 border-b">{{ $event->location }}</td>
                        <td class="py-3 px-4 border-b">{{ $event->date }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="py-3 px-4 text-center text-gray-500">No events available</td>
                    </tr>
                @endforelse
            </tbody>

        </table>
    </div>

</body>

</html>
