<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQs - Tomasino Gigs</title>
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
          <a href="{{ route('user.faqs') }}" class="text-blue-600 font-medium">FAQs</a>
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
        Frequently Asked Questions
      </h1>
      <p class="text-xl text-gray-600">
        Find answers to common questions about Tomasino Gigs
      </p>
    </div>

    <div class="space-y-6">
      <div class="bg-white/70 backdrop-blur-sm rounded-2xl shadow-lg border border-white/20 overflow-hidden">
        <button class="faq-toggle w-full px-8 py-6 text-left hover:bg-gray-50/50 transition-colors" onclick="toggleFAQ(this)">
          <div class="flex justify-between items-center">
            <h3 class="text-lg font-semibold text-gray-900">What is Tomasino Gigs?</h3>
            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </div>
        </button>
        <div class="faq-content hidden px-8 pb-6">
          <p class="text-gray-600 leading-relaxed">
            Tomasino Gigs is your premier destination for discovering and registering for amazing events at the University of Santo Tomas. We connect students and community members with exciting opportunities to learn, network, and create unforgettable experiences.
          </p>
        </div>
      </div>

      <div class="bg-white/70 backdrop-blur-sm rounded-2xl shadow-lg border border-white/20 overflow-hidden">
        <button class="faq-toggle w-full px-8 py-6 text-left hover:bg-gray-50/50 transition-colors" onclick="toggleFAQ(this)">
          <div class="flex justify-between items-center">
            <h3 class="text-lg font-semibold text-gray-900">How do I register for an event?</h3>
            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </div>
        </button>
        <div class="faq-content hidden px-8 pb-6">
          <p class="text-gray-600 leading-relaxed mb-4">
            Registering for an event is simple:
          </p>
          <ol class="list-decimal list-inside text-gray-600 space-y-2">
            <li>Browse events on the dashboard</li>
            <li>Click "Register" on any event that interests you</li>
            <li>Fill out the registration form with your details</li>
            <li>Submit your registration</li>
            <li>You'll receive confirmation details via email</li>
          </ol>
        </div>
      </div>

      <div class="bg-white/70 backdrop-blur-sm rounded-2xl shadow-lg border border-white/20 overflow-hidden">
        <button class="faq-toggle w-full px-8 py-6 text-left hover:bg-gray-50/50 transition-colors" onclick="toggleFAQ(this)">
          <div class="flex justify-between items-center">
            <h3 class="text-lg font-semibold text-gray-900">Is registration free?</h3>
            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </div>
        </button>
        <div class="faq-content hidden px-8 pb-6">
          <p class="text-gray-600 leading-relaxed">
            Most events on Tomasino Gigs are free for UST students and community members. Some special events or workshops may have a minimal fee to cover materials and refreshments. Any fees will be clearly indicated on the event details page.
          </p>
        </div>
      </div>

      <div class="bg-white/70 backdrop-blur-sm rounded-2xl shadow-lg border border-white/20 overflow-hidden">
        <button class="faq-toggle w-full px-8 py-6 text-left hover:bg-gray-50/50 transition-colors" onclick="toggleFAQ(this)">
          <div class="flex justify-between items-center">
            <h3 class="text-lg font-semibold text-gray-900">Can I cancel my registration?</h3>
            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </div>
        </button>
        <div class="faq-content hidden px-8 pb-6">
          <p class="text-gray-600 leading-relaxed">
            Yes, you can cancel your registration up to 24 hours before the event starts. To cancel, please contact us at events@tomasinogigs.com with your registration details. This helps us manage capacity and allows other students to participate.
          </p>
        </div>
      </div>

      <div class="bg-white/70 backdrop-blur-sm rounded-2xl shadow-lg border border-white/20 overflow-hidden">
        <button class="faq-toggle w-full px-8 py-6 text-left hover:bg-gray-50/50 transition-colors" onclick="toggleFAQ(this)">
          <div class="flex justify-between items-center">
            <h3 class="text-lg font-semibold text-gray-900">What types of events are available?</h3>
            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </div>
        </button>
        <div class="faq-content hidden px-8 pb-6">
          <p class="text-gray-600 leading-relaxed mb-4">
            Tomasino Gigs features a wide variety of events including:
          </p>
          <ul class="list-disc list-inside text-gray-600 space-y-1">
            <li>Academic workshops and seminars</li>
            <li>Cultural performances and festivals</li>
            <li>Sports competitions and tournaments</li>
            <li>Career development sessions</li>
            <li>Social networking events</li>
            <li>Community service activities</li>
            <li>Art exhibitions and creative showcases</li>
          </ul>
        </div>
      </div>

      <div class="bg-white/70 backdrop-blur-sm rounded-2xl shadow-lg border border-white/20 overflow-hidden">
        <button class="faq-toggle w-full px-8 py-6 text-left hover:bg-gray-50/50 transition-colors" onclick="toggleFAQ(this)">
          <div class="flex justify-between items-center">
            <h3 class="text-lg font-semibold text-gray-900">How do I stay updated on new events?</h3>
            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </div>
        </button>
        <div class="faq-content hidden px-8 pb-6">
          <p class="text-gray-600 leading-relaxed">
            Stay in the loop by regularly checking our events dashboard. We update it frequently with new and upcoming events. You can also follow our social media channels and enable notifications to get real-time updates about exciting opportunities.
          </p>
        </div>
      </div>

      <div class="bg-white/70 backdrop-blur-sm rounded-2xl shadow-lg border border-white/20 overflow-hidden">
        <button class="faq-toggle w-full px-8 py-6 text-left hover:bg-gray-50/50 transition-colors" onclick="toggleFAQ(this)">
          <div class="flex justify-between items-center">
            <h3 class="text-lg font-semibold text-gray-900">Can I organize my own event?</h3>
            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </div>
        </button>
        <div class="faq-content hidden px-8 pb-6">
          <p class="text-gray-600 leading-relaxed">
            Absolutely! We encourage student organizations and community groups to host events through Tomasino Gigs. Contact our events team at organize@tomasinogigs.com with your event proposal, and we'll help you get it featured on our platform.
          </p>
        </div>
      </div>

      <div class="bg-white/70 backdrop-blur-sm rounded-2xl shadow-lg border border-white/20 overflow-hidden">
        <button class="faq-toggle w-full px-8 py-6 text-left hover:bg-gray-50/50 transition-colors" onclick="toggleFAQ(this)">
          <div class="flex justify-between items-center">
            <h3 class="text-lg font-semibold text-gray-900">What if I need help or have other questions?</h3>
            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </div>
        </button>
        <div class="faq-content hidden px-8 pb-6">
          <p class="text-gray-600 leading-relaxed mb-4">
            We're here to help! You can reach us through:
          </p>
          <ul class="list-disc list-inside text-gray-600 space-y-1">
            <li>Email: support@tomasinogigs.com</li>
            <li>Phone: (02) 8123-4567</li>
            <li>Visit our office at the UST Student Activities Center</li>
            <li>Send us a message through our social media channels</li>
          </ul>
          <p class="text-gray-600 leading-relaxed mt-4">
            Our support team is available Monday to Friday, 9AM to 5PM.
          </p>
        </div>
      </div>
    </div>

    <div class="mt-16 text-center">
      <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-8 shadow-lg border border-white/20">
        <h3 class="text-2xl font-bold text-gray-900 mb-4">Still Have Questions?</h3>
        <p class="text-gray-600 mb-6">
          Can't find what you're looking for? Our friendly support team is here to help.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="mailto:support@tomasinogigs.com"
             class="px-8 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
            Contact Support
          </a>
          <a href="{{ route('user.dashboard') }}"
             class="px-8 py-3 bg-gray-100 text-gray-700 font-semibold rounded-xl hover:bg-gray-200 transition-all duration-200">
            Browse Events
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

  <script>
    function toggleFAQ(button) {
      const content = button.nextElementSibling;
      const icon = button.querySelector('svg');

      if (content.classList.contains('hidden')) {
        content.classList.remove('hidden');
        icon.style.transform = 'rotate(180deg)';
      } else {
        content.classList.add('hidden');
        icon.style.transform = 'rotate(0deg)';
      }
    }
  </script>

</body>
</html>