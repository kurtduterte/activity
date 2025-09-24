<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Details - Tomasino Gigs</title>
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
          <a href="{{ route('user.dashboard') }}" class="text-gray-600 hover:text-blue-600 transition-colors duration-200 font-medium">Events</a>
          <a href="{{ route('user.about') }}" class="text-gray-600 hover:text-blue-600 transition-colors duration-200 font-medium">About</a>
          <a href="{{ route('user.faqs') }}" class="text-gray-600 hover:text-blue-600 transition-colors duration-200 font-medium">FAQs</a>
          <a href="{{ route('user.create') }}"
             class="px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
            Register
          </a>
        </div>
      </div>
    </div>
  </nav>

  <div class="max-w-5xl mx-auto py-16 px-6">
    <a href="{{ route('user.dashboard') }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 mb-8">
      <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
      </svg>
      Back to Events
    </a>

    <div class="bg-white/70 backdrop-blur-sm rounded-3xl overflow-hidden shadow-2xl border border-white/20">
      <div class="bg-gradient-to-r from-blue-600 to-purple-600 p-12 text-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-40 h-40 bg-white/10 rounded-full -translate-y-20 translate-x-20"></div>
        <div class="absolute bottom-0 left-0 w-32 h-32 bg-white/10 rounded-full translate-y-16 -translate-x-16"></div>
        <div class="relative z-10">
          <h1 class="text-4xl font-bold mb-4">{{ $event->title }}</h1>
          <div class="flex flex-wrap gap-4 text-blue-100">
            <div class="flex items-center space-x-2">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
              </svg>
              <span>{{ \Carbon\Carbon::parse($event->date)->format('F d, Y') }}</span>
            </div>
            <div class="flex items-center space-x-2">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
              <span>{{ $event->location }}</span>
            </div>
          </div>
        </div>
      </div>

      <div class="p-12">
        <div class="mb-8">
          <h2 class="text-2xl font-bold text-gray-900 mb-4">Event Description</h2>
          <p class="text-gray-600 leading-relaxed text-lg">
            {{ $event->description }}
          </p>
        </div>

        <div class="mb-8">
          <h2 class="text-2xl font-bold text-gray-900 mb-4">Event Details</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-gray-50 rounded-xl p-6">
              <div class="flex items-center space-x-3 mb-2">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <h3 class="font-semibold text-gray-900">Date</h3>
              </div>
              <p class="text-gray-600 ml-9">{{ \Carbon\Carbon::parse($event->date)->format('l, F d, Y') }}</p>
            </div>

            <div class="bg-gray-50 rounded-xl p-6">
              <div class="flex items-center space-x-3 mb-2">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <h3 class="font-semibold text-gray-900">Location</h3>
              </div>
              <p class="text-gray-600 ml-9">{{ $event->location }}</p>
            </div>

            <div class="bg-gray-50 rounded-xl p-6">
              <div class="flex items-center space-x-3 mb-2">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <h3 class="font-semibold text-gray-900">Status</h3>
              </div>
              <div class="ml-9">
                @if(\Carbon\Carbon::parse($event->date)->isFuture())
                  <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                    <div class="w-2 h-2 bg-green-500 rounded-full mr-2"></div>
                    Upcoming Event
                  </span>
                @else
                  <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gray-100 text-gray-800">
                    <div class="w-2 h-2 bg-gray-500 rounded-full mr-2"></div>
                    Past Event
                  </span>
                @endif
              </div>
            </div>

            <div class="bg-gray-50 rounded-xl p-6">
              <div class="flex items-center space-x-3 mb-2">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                </svg>
                <h3 class="font-semibold text-gray-900">Event ID</h3>
              </div>
              <p class="text-gray-600 ml-9">#{{ str_pad($event->id, 4, '0', STR_PAD_LEFT) }}</p>
            </div>
          </div>
        </div>

        <div class="flex flex-col sm:flex-row gap-4">
          <a href="{{ route('user.create') }}"
             class="flex-1 text-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
            <span class="flex items-center justify-center space-x-2">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
              </svg>
              <span>Register for Event</span>
            </span>
          </a>
          <a href="{{ route('user.dashboard') }}"
             class="flex-1 text-center px-8 py-4 bg-gray-100 text-gray-700 font-semibold rounded-xl hover:bg-gray-200 transition-all duration-200">
            Browse More Events
          </a>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-white/70 backdrop-blur-sm border-t border-white/20 mt-20">
    <div class="max-w-7xl mx-auto px-6 py-12">
      <div class="text-center">
        <p class="text-gray-600">&copy; 2025 Tomasino Gigs. All rights reserved.</p>
      </div>
    </div>
  </footer>

</body>
</html>