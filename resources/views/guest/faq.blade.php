<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQ - Tomasino Gigs</title>
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
          <a href="{{ url('/gallery') }}" class="text-gray-600 hover:text-blue-600 transition-colors duration-200 font-medium">Gallery</a>
          <a href="{{ url('/faq') }}" class="text-blue-600 font-medium">FAQ</a>
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

  <div class="max-w-4xl mx-auto py-16 px-6">
    <!-- Header -->
    <div class="text-center mb-12">
      <h1 class="text-4xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-4">
        Frequently Asked Questions
      </h1>
      <p class="text-xl text-gray-600 max-w-2xl mx-auto">
        Find answers to common questions about Tomasino Gigs and our events
      </p>
    </div>

    <!-- Search Bar -->
    <div class="bg-white/70 backdrop-blur-sm rounded-3xl p-6 shadow-lg border border-white/20 mb-12">
      <div class="relative">
        <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
        </svg>
        <input type="text" placeholder="Search FAQs..." class="w-full pl-12 pr-4 py-4 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg">
      </div>
    </div>

    <!-- FAQ Categories -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
      <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-white/20 text-center hover:transform hover:-translate-y-1 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mx-auto mb-4">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Account & Registration</h3>
        <p class="text-sm text-gray-600">Questions about creating accounts and signing up</p>
      </div>

      <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-white/20 text-center hover:transform hover:-translate-y-1 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-xl flex items-center justify-center mx-auto mb-4">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Events & Booking</h3>
        <p class="text-sm text-gray-600">How to find and register for events</p>
      </div>

      <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-white/20 text-center hover:transform hover:-translate-y-1 transition-all duration-300">
        <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mx-auto mb-4">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Technical Support</h3>
        <p class="text-sm text-gray-600">Platform issues and troubleshooting</p>
      </div>
    </div>

    <!-- FAQ Accordion -->
    <div class="space-y-6">
      <!-- FAQ Item 1 -->
      <div class="bg-white/70 backdrop-blur-sm rounded-3xl shadow-lg border border-white/20 overflow-hidden">
        <button class="w-full px-8 py-6 text-left focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset faq-toggle" data-target="faq-1">
          <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold text-gray-900">How do I create an account on Tomasino Gigs?</h3>
            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </div>
        </button>
        <div id="faq-1" class="faq-content hidden px-8 pb-6">
          <p class="text-gray-600 leading-relaxed">
            Creating an account is simple! Click on the "Login" button in the top right corner, then select "Register" to create a new account. You'll need to provide your UST email address, create a password, and verify your email. Once verified, you can start exploring and registering for events immediately.
          </p>
        </div>
      </div>

      <!-- FAQ Item 2 -->
      <div class="bg-white/70 backdrop-blur-sm rounded-3xl shadow-lg border border-white/20 overflow-hidden">
        <button class="w-full px-8 py-6 text-left focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset faq-toggle" data-target="faq-2">
          <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold text-gray-900">How do I register for an event?</h3>
            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </div>
        </button>
        <div id="faq-2" class="faq-content hidden px-8 pb-6">
          <p class="text-gray-600 leading-relaxed">
            Browse events on our Events page or dashboard. Click on any event that interests you to view details. If the event is open for registration and you meet the requirements, you'll see a "Register" button. Click it, fill out any required information, and confirm your registration. You'll receive a confirmation email with event details.
          </p>
        </div>
      </div>

      <!-- FAQ Item 3 -->
      <div class="bg-white/70 backdrop-blur-sm rounded-3xl shadow-lg border border-white/20 overflow-hidden">
        <button class="w-full px-8 py-6 text-left focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset faq-toggle" data-target="faq-3">
          <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold text-gray-900">Can I cancel my event registration?</h3>
            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </div>
        </button>
        <div id="faq-3" class="faq-content hidden px-8 pb-6">
          <p class="text-gray-600 leading-relaxed">
            Yes, you can cancel your registration from your dashboard under "My Events." Please note that cancellation policies may vary by event. Some events may have cancellation deadlines, especially if they have limited spots or require materials preparation. Always check the event details for specific cancellation terms.
          </p>
        </div>
      </div>

      <!-- FAQ Item 4 -->
      <div class="bg-white/70 backdrop-blur-sm rounded-3xl shadow-lg border border-white/20 overflow-hidden">
        <button class="w-full px-8 py-6 text-left focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset faq-toggle" data-target="faq-4">
          <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold text-gray-900">Are all events free to attend?</h3>
            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </div>
        </button>
        <div id="faq-4" class="faq-content hidden px-8 pb-6">
          <p class="text-gray-600 leading-relaxed">
            Most events on Tomasino Gigs are free for UST students, faculty, and staff. However, some special events, workshops with materials, or external speaker sessions may have fees to cover costs. Event fees, if any, are clearly displayed on the event details page before registration.
          </p>
        </div>
      </div>

      <!-- FAQ Item 5 -->
      <div class="bg-white/70 backdrop-blur-sm rounded-3xl shadow-lg border border-white/20 overflow-hidden">
        <button class="w-full px-8 py-6 text-left focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset faq-toggle" data-target="faq-5">
          <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold text-gray-900">How do I know if an event is cancelled or rescheduled?</h3>
            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </div>
        </button>
        <div id="faq-5" class="faq-content hidden px-8 pb-6">
          <p class="text-gray-600 leading-relaxed">
            We'll notify you immediately via email and through your dashboard notifications if an event you're registered for is cancelled or rescheduled. You can also check the event page for updates. We recommend checking your email and dashboard regularly, especially close to event dates.
          </p>
        </div>
      </div>

      <!-- FAQ Item 6 -->
      <div class="bg-white/70 backdrop-blur-sm rounded-3xl shadow-lg border border-white/20 overflow-hidden">
        <button class="w-full px-8 py-6 text-left focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset faq-toggle" data-target="faq-6">
          <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold text-gray-900">Can non-UST students attend events?</h3>
            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </div>
        </button>
        <div id="faq-6" class="faq-content hidden px-8 pb-6">
          <p class="text-gray-600 leading-relaxed">
            Tomasino Gigs is primarily designed for the UST community (students, faculty, and staff). However, some events may be open to external participants, especially public lectures or community outreach programs. Event eligibility requirements are clearly stated on each event page.
          </p>
        </div>
      </div>

      <!-- FAQ Item 7 -->
      <div class="bg-white/70 backdrop-blur-sm rounded-3xl shadow-lg border border-white/20 overflow-hidden">
        <button class="w-full px-8 py-6 text-left focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset faq-toggle" data-target="faq-7">
          <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold text-gray-900">How can I organize my own event?</h3>
            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </div>
        </button>
        <div id="faq-7" class="faq-content hidden px-8 pb-6">
          <p class="text-gray-600 leading-relaxed">
            Event organization through Tomasino Gigs requires approval from the platform administrators. If you're a recognized UST organization, faculty member, or authorized student group, you can submit an event proposal through the contact form or reach out to our admin team. We'll review your proposal and help you get your event listed.
          </p>
        </div>
      </div>

      <!-- FAQ Item 8 -->
      <div class="bg-white/70 backdrop-blur-sm rounded-3xl shadow-lg border border-white/20 overflow-hidden">
        <button class="w-full px-8 py-6 text-left focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset faq-toggle" data-target="faq-8">
          <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold text-gray-900">What should I do if I'm having technical issues?</h3>
            <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </div>
        </button>
        <div id="faq-8" class="faq-content hidden px-8 pb-6">
          <p class="text-gray-600 leading-relaxed">
            If you're experiencing technical difficulties, try clearing your browser cache and cookies first. If the issue persists, please contact our support team with details about the problem, including your browser type, device, and what you were trying to do when the issue occurred. We'll respond as quickly as possible to help resolve the issue.
          </p>
        </div>
      </div>
    </div>

    <!-- Contact Section -->
    <div class="mt-16">
      <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl p-12 text-white text-center">
        <h2 class="text-3xl font-bold mb-4">Still Have Questions?</h2>
        <p class="text-xl mb-8 text-blue-100">
          Can't find the answer you're looking for? Our support team is here to help!
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="mailto:support@tomasinogigs.com"
             class="inline-flex items-center px-8 py-4 bg-white text-blue-600 font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            Email Support
          </a>
          <a href="{{ url('/about') }}"
             class="inline-flex items-center px-8 py-4 bg-white/20 text-white font-semibold rounded-xl border border-white/30 hover:bg-white/30 transition-all duration-200">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            Learn More About Us
          </a>
        </div>
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

  <script>
    // FAQ Accordion functionality
    document.addEventListener('DOMContentLoaded', function() {
      const faqToggles = document.querySelectorAll('.faq-toggle');

      faqToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
          const targetId = this.getAttribute('data-target');
          const content = document.getElementById(targetId);
          const icon = this.querySelector('.faq-icon');

          if (content.classList.contains('hidden')) {
            // Close all other FAQs
            document.querySelectorAll('.faq-content').forEach(item => {
              item.classList.add('hidden');
            });
            document.querySelectorAll('.faq-icon').forEach(item => {
              item.classList.remove('rotate-180');
            });

            // Open clicked FAQ
            content.classList.remove('hidden');
            icon.classList.add('rotate-180');
          } else {
            // Close clicked FAQ
            content.classList.add('hidden');
            icon.classList.remove('rotate-180');
          }
        });
      });
    });
  </script>

</body>
</html>