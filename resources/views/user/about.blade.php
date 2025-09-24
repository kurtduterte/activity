<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Tomasino Gigs</title>
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
          <a href="{{ route('user.about') }}" class="text-blue-600 font-medium">About</a>
          <a href="{{ route('user.faqs') }}" class="text-gray-600 hover:text-blue-600 transition-colors duration-200 font-medium">FAQs</a>
          <a href="{{ route('user.create') }}"
             class="px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
            Register
          </a>
        </div>
      </div>
    </div>
  </nav>

  <div class="max-w-4xl mx-auto py-16 px-6">
    <div class="text-center mb-12">
      <h1 class="text-4xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-4">
        About Tomasino Gigs
      </h1>
      <p class="text-xl text-gray-600">
        Connecting the UST community through amazing experiences
      </p>
    </div>

    <div class="space-y-8">
      <div class="bg-white/70 backdrop-blur-sm rounded-3xl p-12 shadow-lg border border-white/20">
        <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Mission</h2>
        <p class="text-lg text-gray-600 leading-relaxed mb-6">
          Tomasino Gigs is dedicated to creating a vibrant community hub where University of Santo Tomas students, faculty, and staff can discover, participate in, and organize meaningful events that enrich their university experience.
        </p>
        <p class="text-lg text-gray-600 leading-relaxed">
          We believe that every event is an opportunity to learn, connect, and create lasting memories. Our platform bridges the gap between event organizers and participants, making it easier than ever to find and join activities that align with your interests and passions.
        </p>
      </div>

      <div class="bg-white/70 backdrop-blur-sm rounded-3xl p-12 shadow-lg border border-white/20">
        <h2 class="text-3xl font-bold text-gray-900 mb-6">What We Offer</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div class="space-y-4">
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Event Discovery</h3>
                <p class="text-gray-600">Easily browse and discover events across different categories, from academic workshops to cultural performances.</p>
              </div>
            </div>

            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Community Building</h3>
                <p class="text-gray-600">Connect with fellow Tomasinos who share your interests and build lasting relationships through shared experiences.</p>
              </div>
            </div>
          </div>

          <div class="space-y-4">
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-purple-600 rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Easy Registration</h3>
                <p class="text-gray-600">Simple, streamlined registration process that gets you signed up for events in just a few clicks.</p>
              </div>
            </div>

            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-orange-600 rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Quality Assurance</h3>
                <p class="text-gray-600">All events are curated and verified to ensure high-quality experiences for all participants.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-white/70 backdrop-blur-sm rounded-3xl p-12 shadow-lg border border-white/20">
        <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Story</h2>
        <p class="text-lg text-gray-600 leading-relaxed mb-6">
          Founded by a group of passionate UST students, Tomasino Gigs was born from the simple observation that amazing events were happening across campus, but students often missed out because they didn't know about them or couldn't easily register.
        </p>
        <p class="text-lg text-gray-600 leading-relaxed mb-6">
          We recognized the need for a centralized platform that could connect event organizers with enthusiastic participants, while making the entire process seamless and enjoyable for everyone involved.
        </p>
        <p class="text-lg text-gray-600 leading-relaxed">
          Today, Tomasino Gigs serves as the premier event discovery platform for the UST community, helping thousands of students discover new opportunities, pursue their passions, and create meaningful connections.
        </p>
      </div>

      <div class="bg-white/70 backdrop-blur-sm rounded-3xl p-12 shadow-lg border border-white/20">
        <h2 class="text-3xl font-bold text-gray-900 mb-6">Join Our Community</h2>
        <p class="text-lg text-gray-600 leading-relaxed mb-8">
          Whether you're looking to expand your horizons, develop new skills, meet like-minded people, or simply have fun, Tomasino Gigs is here to help you make the most of your university experience.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="{{ route('user.dashboard') }}"
             class="px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200 text-center">
            Browse Events
          </a>
          <a href="{{ route('user.faqs') }}"
             class="px-8 py-4 bg-gray-100 text-gray-700 font-semibold rounded-xl hover:bg-gray-200 transition-all duration-200 text-center">
            Learn More
          </a>
        </div>
      </div>

      <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl p-12 text-white text-center">
        <h2 class="text-3xl font-bold mb-4">Ready to Get Started?</h2>
        <p class="text-xl mb-8 text-blue-100">
          Join thousands of Tomasinos who are already discovering amazing events
        </p>
        <a href="{{ route('user.create') }}"
           class="inline-flex items-center px-8 py-4 bg-white text-blue-600 font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
          </svg>
          Start Your Journey
        </a>
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