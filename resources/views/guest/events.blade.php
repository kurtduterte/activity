<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Events - Tomasino Gigs</title>
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
          <a href="{{ url('/events') }}" class="text-blue-600 font-medium">Events</a>
          <a href="{{ url('/about') }}" class="text-gray-600 hover:text-blue-600 transition-colors duration-200 font-medium">About</a>
          <a href="{{ url('/gallery') }}" class="text-gray-600 hover:text-blue-600 transition-colors duration-200 font-medium">Gallery</a>
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
        Discover Amazing Events
      </h1>
      <p class="text-xl text-gray-600 max-w-2xl mx-auto">
        Explore exciting events, workshops, and activities happening in the UST community
      </p>
    </div>

    <!-- Search and Filter Section -->
    <div class="bg-white/70 backdrop-blur-sm rounded-3xl p-8 shadow-lg border border-white/20 mb-12">
      <div class="flex flex-col md:flex-row gap-4">
        <div class="flex-1">
          <div class="relative">
            <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
            <input type="text" placeholder="Search events..." class="w-full pl-12 pr-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
          </div>
        </div>
        <div class="flex gap-4">
          <select class="px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            <option>All Categories</option>
            <option>Academic</option>
            <option>Cultural</option>
            <option>Sports</option>
            <option>Technology</option>
            <option>Social</option>
          </select>
          <button class="px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-200">
            Search
          </button>
        </div>
      </div>
    </div>

    <!-- Events Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
      <!-- Sample Event Card 1 -->
      <div class="bg-white/70 backdrop-blur-sm rounded-3xl overflow-hidden shadow-lg border border-white/20 hover:transform hover:-translate-y-2 transition-all duration-300">
        <div class="h-48 bg-gradient-to-r from-blue-400 to-purple-500"></div>
        <div class="p-6">
          <div class="flex items-center justify-between mb-3">
            <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm font-medium rounded-full">Academic</span>
            <span class="text-sm text-gray-500">Nov 15, 2025</span>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Tech Innovation Summit</h3>
          <p class="text-gray-600 mb-4">Join industry leaders and innovators for a day of inspiring talks about the future of technology.</p>
          <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
              <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
              <span class="text-sm text-gray-500">Main Auditorium</span>
            </div>
            <button class="px-4 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white text-sm font-semibold rounded-lg hover:shadow-lg transition-all duration-200">
              Learn More
            </button>
          </div>
        </div>
      </div>

      <!-- Sample Event Card 2 -->
      <div class="bg-white/70 backdrop-blur-sm rounded-3xl overflow-hidden shadow-lg border border-white/20 hover:transform hover:-translate-y-2 transition-all duration-300">
        <div class="h-48 bg-gradient-to-r from-green-400 to-blue-500"></div>
        <div class="p-6">
          <div class="flex items-center justify-between mb-3">
            <span class="px-3 py-1 bg-green-100 text-green-800 text-sm font-medium rounded-full">Cultural</span>
            <span class="text-sm text-gray-500">Nov 20, 2025</span>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Filipino Arts Festival</h3>
          <p class="text-gray-600 mb-4">Celebrate Filipino culture through traditional arts, music, and dance performances.</p>
          <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
              <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
              <span class="text-sm text-gray-500">UST Plaza</span>
            </div>
            <button class="px-4 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white text-sm font-semibold rounded-lg hover:shadow-lg transition-all duration-200">
              Learn More
            </button>
          </div>
        </div>
      </div>

      <!-- Sample Event Card 3 -->
      <div class="bg-white/70 backdrop-blur-sm rounded-3xl overflow-hidden shadow-lg border border-white/20 hover:transform hover:-translate-y-2 transition-all duration-300">
        <div class="h-48 bg-gradient-to-r from-purple-400 to-pink-500"></div>
        <div class="p-6">
          <div class="flex items-center justify-between mb-3">
            <span class="px-3 py-1 bg-purple-100 text-purple-800 text-sm font-medium rounded-full">Sports</span>
            <span class="text-sm text-gray-500">Nov 25, 2025</span>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Intramural Championships</h3>
          <p class="text-gray-600 mb-4">Join the excitement as different faculties compete in various sports events.</p>
          <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
              <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
              <span class="text-sm text-gray-500">Sports Complex</span>
            </div>
            <button class="px-4 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white text-sm font-semibold rounded-lg hover:shadow-lg transition-all duration-200">
              Learn More
            </button>
          </div>
        </div>
      </div>

      <!-- Sample Event Card 4 -->
      <div class="bg-white/70 backdrop-blur-sm rounded-3xl overflow-hidden shadow-lg border border-white/20 hover:transform hover:-translate-y-2 transition-all duration-300">
        <div class="h-48 bg-gradient-to-r from-orange-400 to-red-500"></div>
        <div class="p-6">
          <div class="flex items-center justify-between mb-3">
            <span class="px-3 py-1 bg-orange-100 text-orange-800 text-sm font-medium rounded-full">Social</span>
            <span class="text-sm text-gray-500">Dec 1, 2025</span>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Christmas Celebration</h3>
          <p class="text-gray-600 mb-4">Join the UST community for a festive Christmas celebration with food, music, and fun.</p>
          <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
              <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
              <span class="text-sm text-gray-500">Quadricentennial Pavilion</span>
            </div>
            <button class="px-4 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white text-sm font-semibold rounded-lg hover:shadow-lg transition-all duration-200">
              Learn More
            </button>
          </div>
        </div>
      </div>

      <!-- Sample Event Card 5 -->
      <div class="bg-white/70 backdrop-blur-sm rounded-3xl overflow-hidden shadow-lg border border-white/20 hover:transform hover:-translate-y-2 transition-all duration-300">
        <div class="h-48 bg-gradient-to-r from-teal-400 to-green-500"></div>
        <div class="p-6">
          <div class="flex items-center justify-between mb-3">
            <span class="px-3 py-1 bg-teal-100 text-teal-800 text-sm font-medium rounded-full">Academic</span>
            <span class="text-sm text-gray-500">Dec 5, 2025</span>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Research Symposium</h3>
          <p class="text-gray-600 mb-4">Discover groundbreaking research from UST students and faculty across various disciplines.</p>
          <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
              <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
              <span class="text-sm text-gray-500">Medicine Auditorium</span>
            </div>
            <button class="px-4 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white text-sm font-semibold rounded-lg hover:shadow-lg transition-all duration-200">
              Learn More
            </button>
          </div>
        </div>
      </div>

      <!-- Sample Event Card 6 -->
      <div class="bg-white/70 backdrop-blur-sm rounded-3xl overflow-hidden shadow-lg border border-white/20 hover:transform hover:-translate-y-2 transition-all duration-300">
        <div class="h-48 bg-gradient-to-r from-indigo-400 to-purple-500"></div>
        <div class="p-6">
          <div class="flex items-center justify-between mb-3">
            <span class="px-3 py-1 bg-indigo-100 text-indigo-800 text-sm font-medium rounded-full">Technology</span>
            <span class="text-sm text-gray-500">Dec 10, 2025</span>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">AI Workshop Series</h3>
          <p class="text-gray-600 mb-4">Learn about artificial intelligence and machine learning in this hands-on workshop series.</p>
          <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
              <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
              <span class="text-sm text-gray-500">Computer Lab A</span>
            </div>
            <button class="px-4 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white text-sm font-semibold rounded-lg hover:shadow-lg transition-all duration-200">
              Learn More
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Load More Button -->
    <div class="text-center">
      <button class="px-8 py-4 bg-white/70 backdrop-blur-sm text-gray-700 font-semibold rounded-xl border border-white/20 hover:bg-white/80 transition-all duration-200">
        Load More Events
      </button>
    </div>

    <!-- CTA Section -->
    <div class="mt-20">
      <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl p-12 text-white text-center">
        <h2 class="text-3xl font-bold mb-4">Can't Find What You're Looking For?</h2>
        <p class="text-xl mb-8 text-blue-100">
          We're always adding new events. Sign up to get notified about upcoming activities!
        </p>
        @guest
          <a href="{{ route('register') }}"
             class="inline-flex items-center px-8 py-4 bg-white text-blue-600 font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Join Tomasino Gigs
          </a>
        @else
          <a href="{{ route('admin.dashboard') }}"
             class="inline-flex items-center px-8 py-4 bg-white text-blue-600 font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
            </svg>
            Go to Dashboard
          </a>
        @endguest
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