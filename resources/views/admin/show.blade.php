<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Event Details: {{ $event->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <div class="mb-6 flex justify-between items-start">
                        <div>
                            <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $event->title }}</h1>
                        </div>
                        <div class="flex space-x-2">
                            <a href="{{ route('admin.events.edit', $event) }}" 
                               class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                                Edit
                            </a>
                            <form action="{{ route('admin.events.destroy', $event) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700"
                                        onclick="return confirm('Are you sure you want to delete this event?')">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <h3 class="font-semibold text-blue-900 mb-2">Date</h3>
                            <p class="text-blue-800">{{ \Carbon\Carbon::parse($event->date)->format('F j, Y (l)') }}</p>
                        </div>
                        
                        <div class="bg-green-50 p-4 rounded-lg">
                            <h3 class="font-semibold text-green-900 mb-2">Location</h3>
                            <p class="text-green-800">{{ $event->location }}</p>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h3 class="font-semibold text-gray-900 mb-2">Description</h3>
                        <div class="text-gray-700 leading-relaxed">
                            {{ $event->description }}
                        </div>
                    </div>

                    <div class="border-t pt-4">
                        <div class="text-sm text-gray-500">
                            <p>Created: {{ $event->created_at->format('F j, Y g:i A') }}</p>
                            @if($event->updated_at != $event->created_at)
                                <p>Last Updated: {{ $event->updated_at->format('F j, Y g:i A') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('admin.dashboard') }}" 
                           class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">
                            Back to Dashboard
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>