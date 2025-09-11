<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $event->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 p-8">
                    <h1 class="text-3xl font-bold text-white mb-2">{{ $event->title }}</h1>
                    <p class="text-indigo-100">Event Details</p>
                </div>
                
                <div class="p-8">
                    <div class="mb-6">
                        <p class="text-gray-700 text-lg leading-relaxed">{{ $event->description }}</p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="bg-blue-50 p-6 rounded-xl">
                            <div class="flex items-center mb-2">
                                <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span class="text-sm font-semibold text-gray-700">Date & Time</span>
                            </div>
                            <div class="text-blue-800 font-bold text-xl">
                                {{ \Carbon\Carbon::parse($event->date)->format('F j, Y (l)') }}
                            </div>
                        </div>
                        
                        <div class="bg-green-50 p-6 rounded-xl">
                            <div class="flex items-center mb-2">
                                <svg class="w-6 h-6 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span class="text-sm font-semibold text-gray-700">Location</span>
                            </div>
                            <div class="text-green-800 font-bold text-xl">{{ $event->location }}</div>
                        </div>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('dashboard') }}" 
                           class="flex-1 bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-3 px-6 rounded-lg font-semibold text-center hover:from-indigo-700 hover:to-purple-700 transition-all duration-300">
                            Back to Dashboard 🏠
                        </a>
                        <button onclick="window.print()" 
                                class="flex-1 bg-gray-100 text-gray-700 py-3 px-6 rounded-lg font-semibold hover:bg-gray-200 transition-colors duration-200">
                            Print Details 🖨️
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>