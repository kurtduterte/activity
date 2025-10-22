<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery - Tomasino Gigs</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: {
              50: '#eff6ff',
              500: '#3b82f6',
              600: '#2563eb',
              700: '#1d4ed8',
              900: '#1e3a8a'
            }
          }
        }
      }
    }
  </script>
</head>
<body class="bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 min-h-screen">

  <nav class="bg-white/80 backdrop-blur-md sticky top-0 z-50 shadow-lg border-b border-white/20">
    <div class="max-w-7xl mx-auto px-6">
      <div class="flex justify-between items-center h-20">
        <div class="flex items-center space-x-3">
          <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl flex items-center justify-center">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
          </div>
          <h1 class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
            Tomasino Gigs
          </h1>
        </div>

        <div class="hidden md:flex items-center space-x-8">
          <a href="{{ url('/') }}" class="text-gray-600 hover:text-blue-600 transition-colors duration-200 font-medium">Home</a>
          <a href="{{ url('/events') }}" class="text-gray-600 hover:text-blue-600 transition-colors duration-200 font-medium">Events</a>
          <a href="{{ url('/about') }}" class="text-gray-600 hover:text-blue-600 transition-colors duration-200 font-medium">About</a>
          <a href="{{ url('/gallery') }}" class="text-blue-600 font-medium">Gallery</a>
          <a href="{{ url('/faq') }}" class="text-gray-600 hover:text-blue-600 transition-colors duration-200 font-medium">FAQ</a>
          @guest
            <a href="{{ route('login') }}"
               class="px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
              Login
            </a>
          @else
            <a href="{{ route('admin.dashboard') }}"
               class="px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
              Dashboard
            </a>
          @endguest
        </div>
      </div>
    </div>
  </nav>

  <div class="max-w-7xl mx-auto py-16 px-6">
    <!-- Header -->
    <div class="text-center mb-12">
      <h1 class="text-4xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-4">
        Event Gallery
      </h1>
      <p class="text-xl text-gray-600 max-w-2xl mx-auto">
        Relive the best moments from past events and see what makes the UST community special
      </p>
    </div>

    <!-- Gallery Filter -->
    <div class="bg-white/70 backdrop-blur-sm rounded-3xl p-6 shadow-lg border border-white/20 mb-12">
      <div class="flex flex-wrap justify-center gap-4">
        <button class="px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl shadow-lg transition-all duration-200">
          All Events
        </button>
        <button class="px-6 py-3 bg-white/70 text-gray-700 font-semibold rounded-xl border border-white/20 hover:bg-white/80 transition-all duration-200">
          Academic
        </button>
        <button class="px-6 py-3 bg-white/70 text-gray-700 font-semibold rounded-xl border border-white/20 hover:bg-white/80 transition-all duration-200">
          Cultural
        </button>
        <button class="px-6 py-3 bg-white/70 text-gray-700 font-semibold rounded-xl border border-white/20 hover:bg-white/80 transition-all duration-200">
          Sports
        </button>
        <button class="px-6 py-3 bg-white/70 text-gray-700 font-semibold rounded-xl border border-white/20 hover:bg-white/80 transition-all duration-200">
          Social
        </button>
      </div>
    </div>

    <!-- Gallery Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">

      <!-- Gallery Item 1 -->
      <div class="bg-white/70 backdrop-blur-sm rounded-3xl overflow-hidden shadow-lg border border-white/20 hover:transform hover:-translate-y-2 transition-all duration-300 group cursor-pointer">
        <div class="relative h-64 bg-gradient-to-r from-blue-400 to-purple-500 overflow-hidden">
          <div class="absolute inset-0 bg-black bg-opacity-20 group-hover:bg-opacity-10 transition-all duration-300"></div>
          <div class="absolute top-4 left-4">
            <span class="px-3 py-1 bg-white/90 text-gray-800 text-sm font-medium rounded-full">Academic</span>
          </div>
          <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300">
            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
          </div>
        </div>
        <div class="p-6">
          <h3 class="text-lg font-bold text-gray-900 mb-2">Tech Innovation Summit 2024</h3>
          <p class="text-gray-600 text-sm mb-3">Amazing turnout at our annual tech summit with industry leaders sharing insights.</p>
          <div class="flex items-center justify-between">
            <span class="text-sm text-gray-500">October 15, 2024</span>
            <span class="text-sm text-blue-600 font-medium">25 photos</span>
          </div>
        </div>
      </div>

      <!-- Gallery Item 2 -->
      <div class="bg-white/70 backdrop-blur-sm rounded-3xl overflow-hidden shadow-lg border border-white/20 hover:transform hover:-translate-y-2 transition-all duration-300 group cursor-pointer">
        <div class="relative h-64 bg-gradient-to-r from-green-400 to-blue-500 overflow-hidden">
          <div class="absolute inset-0 bg-black bg-opacity-20 group-hover:bg-opacity-10 transition-all duration-300"></div>
          <div class="absolute top-4 left-4">
            <span class="px-3 py-1 bg-white/90 text-gray-800 text-sm font-medium rounded-full">Cultural</span>
          </div>
          <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300">
            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
          </div>
        </div>
        <div class="p-6">
          <h3 class="text-lg font-bold text-gray-900 mb-2">Filipino Arts Festival</h3>
          <p class="text-gray-600 text-sm mb-3">Vibrant celebration of Filipino culture with traditional dances and performances.</p>
          <div class="flex items-center justify-between">
            <span class="text-sm text-gray-500">September 22, 2024</span>
            <span class="text-sm text-blue-600 font-medium">40 photos</span>
          </div>
        </div>
      </div>

      <!-- Gallery Item 3 -->
      <div class="bg-white/70 backdrop-blur-sm rounded-3xl overflow-hidden shadow-lg border border-white/20 hover:transform hover:-translate-y-2 transition-all duration-300 group cursor-pointer">
        <div class="relative h-64 bg-gradient-to-r from-purple-400 to-pink-500 overflow-hidden">
          <div class="absolute inset-0 bg-black bg-opacity-20 group-hover:bg-opacity-10 transition-all duration-300"></div>
          <div class="absolute top-4 left-4">
            <span class="px-3 py-1 bg-white/90 text-gray-800 text-sm font-medium rounded-full">Sports</span>
          </div>
          <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300">
            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
          </div>
        </div>
        <div class="p-6">
          <h3 class="text-lg font-bold text-gray-900 mb-2">Intramural Championships</h3>
          <p class="text-gray-600 text-sm mb-3">Intense competition and team spirit during the annual intramural games.</p>
          <div class="flex items-center justify-between">
            <span class="text-sm text-gray-500">August 30, 2024</span>
            <span class="text-sm text-blue-600 font-medium">60 photos</span>
          </div>
        </div>
      </div>

      <!-- Gallery Item 4 -->
      <div class="bg-white/70 backdrop-blur-sm rounded-3xl overflow-hidden shadow-lg border border-white/20 hover:transform hover:-translate-y-2 transition-all duration-300 group cursor-pointer">
        <div class="relative h-64 bg-gradient-to-r from-orange-400 to-red-500 overflow-hidden">
          <div class="absolute inset-0 bg-black bg-opacity-20 group-hover:bg-opacity-10 transition-all duration-300"></div>
          <div class="absolute top-4 left-4">
            <span class="px-3 py-1 bg-white/90 text-gray-800 text-sm font-medium rounded-full">Social</span>
          </div>
          <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300">
            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
          </div>
        </div>
        <div class="p-6">
          <h3 class="text-lg font-bold text-gray-900 mb-2">Welcome Orientation</h3>
          <p class="text-gray-600 text-sm mb-3">New students getting acquainted with UST campus and community.</p>
          <div class="flex items-center justify-between">
            <span class="text-sm text-gray-500">July 15, 2024</span>
            <span class="text-sm text-blue-600 font-medium">35 photos</span>
          </div>
        </div>
      </div>

      <!-- Gallery Item 5 -->
      <div class="bg-white/70 backdrop-blur-sm rounded-3xl overflow-hidden shadow-lg border border-white/20 hover:transform hover:-translate-y-2 transition-all duration-300 group cursor-pointer">
        <div class="relative h-64 bg-gradient-to-r from-teal-400 to-green-500 overflow-hidden">
          <div class="absolute inset-0 bg-black bg-opacity-20 group-hover:bg-opacity-10 transition-all duration-300"></div>
          <div class="absolute top-4 left-4">
            <span class="px-3 py-1 bg-white/90 text-gray-800 text-sm font-medium rounded-full">Academic</span>
          </div>
          <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300">
            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
          </div>
        </div>
        <div class="p-6">
          <h3 class="text-lg font-bold text-gray-900 mb-2">Research Symposium</h3>
          <p class="text-gray-600 text-sm mb-3">Students and faculty presenting innovative research projects and findings.</p>
          <div class="flex items-center justify-between">
            <span class="text-sm text-gray-500">June 20, 2024</span>
            <span class="text-sm text-blue-600 font-medium">30 photos</span>
          </div>
        </div>
      </div>

      <!-- Gallery Item 6 -->
      <div class="bg-white/70 backdrop-blur-sm rounded-3xl overflow-hidden shadow-lg border border-white/20 hover:transform hover:-translate-y-2 transition-all duration-300 group cursor-pointer">
        <div class="relative h-64 bg-gradient-to-r from-indigo-400 to-purple-500 overflow-hidden">
          <div class="absolute inset-0 bg-black bg-opacity-20 group-hover:bg-opacity-10 transition-all duration-300"></div>
          <div class="absolute top-4 left-4">
            <span class="px-3 py-1 bg-white/90 text-gray-800 text-sm font-medium rounded-full">Cultural</span>
          </div>
          <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300">
            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
          </div>
        </div>
        <div class="p-6">
          <h3 class="text-lg font-bold text-gray-900 mb-2">Music Concert Night</h3>
          <p class="text-gray-600 text-sm mb-3">Talented UST students showcasing their musical abilities in a spectacular night.</p>
          <div class="flex items-center justify-between">
            <span class="text-sm text-gray-500">May 25, 2024</span>
            <span class="text-sm text-blue-600 font-medium">45 photos</span>
          </div>
        </div>
      </div>

    </div>

    <!-- Stats Section -->
    <div class="bg-white/70 backdrop-blur-sm rounded-3xl p-12 shadow-lg border border-white/20 mb-12">
      <div class="text-center mb-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Gallery Statistics</h2>
        <p class="text-gray-600">Capturing memories from the UST community</p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div class="text-center">
          <div class="text-3xl font-bold text-blue-600 mb-2">50+</div>
          <div class="text-gray-600">Events Documented</div>
        </div>
        <div class="text-center">
          <div class="text-3xl font-bold text-purple-600 mb-2">1,200+</div>
          <div class="text-gray-600">Photos Captured</div>
        </div>
        <div class="text-center">
          <div class="text-3xl font-bold text-green-600 mb-2">5,000+</div>
          <div class="text-gray-600">Memories Made</div>
        </div>
        <div class="text-center">
          <div class="text-3xl font-bold text-orange-600 mb-2">100+</div>
          <div class="text-gray-600">Happy Faces</div>
        </div>
      </div>
    </div>

    <!-- Load More Button -->
    <div class="text-center">
      <button class="px-8 py-4 bg-white/70 backdrop-blur-sm text-gray-700 font-semibold rounded-xl border border-white/20 hover:bg-white/80 transition-all duration-200">
        Load More Galleries
      </button>
    </div>

    <!-- CTA Section -->
    <div class="mt-20">
      <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl p-12 text-white text-center">
        <h2 class="text-3xl font-bold mb-4">Want to Be Featured?</h2>
        <p class="text-xl mb-8 text-blue-100">
          Join our upcoming events and be part of the next amazing gallery collection!
        </p>
        <a href="{{ url('/events') }}"
           class="inline-flex items-center px-8 py-4 bg-white text-blue-600 font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
          </svg>
          Browse Upcoming Events
        </a>
      </div>
    </div>
  </div>

  <footer class="bg-white/70 backdrop-blur-sm border-t border-white/20 mt-20">
    <div class="max-w-7xl mx-auto px-6 py-12">
      <div class="text-center">
        <div class="flex items-center justify-center space-x-3 mb-4">
          <div class="w-8 h-8 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
          </div>
          <span class="text-xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
            Tomasino Gigs
          </span>
        </div>
        <p class="text-gray-600">&copy; 2025 Tomasino Gigs. All rights reserved.</p>
      </div>
    </div>
  </footer>

</body>
</html>