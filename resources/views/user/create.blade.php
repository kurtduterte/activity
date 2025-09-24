<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Event - Tomasino Gigs</title>
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
                    },
                    animation: {
                        'fade-in-up': 'fadeInUp 0.6s ease-out',
                        'fade-in': 'fadeIn 0.4s ease-out',
                        'slide-down': 'slideDown 0.3s ease-out',
                        'bounce-in': 'bounceIn 0.5s ease-out',
                        'shake': 'shake 0.5s ease-in-out'
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: scale(0.3);
            }
            50% {
                transform: scale(1.05);
            }
            70% {
                transform: scale(0.9);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }
        .input-focus:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 min-h-screen">

    <!-- Navigation -->
    <nav class="bg-white/80 backdrop-blur-md sticky top-0 z-50 shadow-lg border-b border-white/20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center h-20">
                
                <!-- Logo -->
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

                <!-- Back Button -->
                <a href="/events" 
                   class="flex items-center space-x-2 px-4 py-2 text-gray-600 hover:text-blue-600 transition-colors duration-200 font-medium">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    <span>Back to Events</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative overflow-hidden py-16">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <div class="animate-fade-in-up">
                <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-blue-600 via-purple-600 to-blue-800 bg-clip-text text-transparent mb-6">
                    Create Amazing Event
                </h1>
                <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto leading-relaxed">
                    Share your event with the community and bring people together for unforgettable experiences
                </p>
            </div>
        </div>
        
        <!-- Background decoration -->
        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <div class="w-96 h-96 bg-gradient-to-r from-blue-400 to-purple-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-2xl mx-auto py-12 px-6">
        
        <!-- Error Messages -->
        @if ($errors->any())
            <div class="mb-8 animate-bounce-in">
                <div class="glass-effect rounded-2xl p-6 border-l-4 border-red-500 shadow-lg animate-shake">
                    <div class="flex items-center mb-3">
                        <div class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-red-800">Oops! Please fix the following errors:</h3>
                    </div>
                    <ul class="space-y-2">
                        @foreach ($errors->all() as $error)
                            <li class="flex items-center text-red-700">
                                <svg class="w-4 h-4 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <!-- Form Container -->
        <div class="glass-effect rounded-3xl shadow-2xl border border-white/20 overflow-hidden animate-fade-in-up">
            
            <!-- Form Header -->
            <div class="bg-gradient-to-r from-blue-600 to-purple-600 p-8 text-white relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -translate-y-16 translate-x-16"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/10 rounded-full translate-y-12 -translate-x-12"></div>
                <div class="relative z-10">
                    <h2 class="text-2xl font-bold mb-2">Event Details</h2>
                    <p class="text-blue-100">Fill in the information below to create your event</p>
                </div>
            </div>

            <!-- Form Content -->
            <form action="{{ route('user.store') }}" method="POST" class="p-8 space-y-8">
                @csrf

                <!-- Title Field -->
                <div class="space-y-2">
                    <label for="title" class="flex items-center text-sm font-semibold text-gray-700 mb-3">
                        <svg class="w-4 h-4 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                        </svg>
                        Event Title
                    </label>
                    <div class="relative">
                        <input type="text" 
                               name="title" 
                               id="title" 
                               value="{{ old('title') }}"
                               class="w-full px-4 py-4 bg-gray-50 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:bg-white transition-all duration-300 input-focus text-gray-800 placeholder-gray-400" 
                               placeholder="Enter an engaging event title..."
                               required>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Description Field -->
                <div class="space-y-2">
                    <label for="description" class="flex items-center text-sm font-semibold text-gray-700 mb-3">
                        <svg class="w-4 h-4 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/>
                        </svg>
                        Event Description
                    </label>
                    <textarea name="description" 
                              id="description" 
                              rows="4"
                              class="w-full px-4 py-4 bg-gray-50 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:bg-white transition-all duration-300 input-focus text-gray-800 placeholder-gray-400 resize-none" 
                              placeholder="Describe your event in detail. What makes it special?"
                              required>{{ old('description') }}</textarea>
                </div>

                <!-- Location Field -->
                <div class="space-y-2">
                    <label for="location" class="flex items-center text-sm font-semibold text-gray-700 mb-3">
                        <svg class="w-4 h-4 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Event Location
                    </label>
                    <div class="relative">
                        <input type="text" 
                               name="location" 
                               id="location" 
                               value="{{ old('location') }}"
                               class="w-full px-4 py-4 bg-gray-50 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:bg-white transition-all duration-300 input-focus text-gray-800 placeholder-gray-400" 
                               placeholder="Where will your event take place?"
                               required>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Date Field -->
                <div class="space-y-2">
                    <label for="date" class="flex items-center text-sm font-semibold text-gray-700 mb-3">
                        <svg class="w-4 h-4 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        Event Date
                    </label>
                    <div class="relative">
                        <input type="date" 
                               name="date" 
                               id="date" 
                               value="{{ old('date') }}"
                               min="{{ date('Y-m-d') }}"
                               class="w-full px-4 py-4 bg-gray-50 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:bg-white transition-all duration-300 input-focus text-gray-800" 
                               required>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-6">
                    <a href="/events" 
                       class="flex-1 px-6 py-4 bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold rounded-xl transition-all duration-200 text-center border-2 border-gray-200 hover:border-gray-300">
                        <span class="flex items-center justify-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                            <span>Cancel</span>
                        </span>
                    </a>
                    <button type="submit" 
                            class="flex-1 px-6 py-4 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                        <span class="flex items-center justify-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Create Event</span>
                        </span>
                    </button>
                </div>
            </form>
        </div>

        <!-- Additional Info Section -->
        <div class="mt-12 glass-effect rounded-2xl p-6 shadow-lg border border-white/20 animate-fade-in">
            <div class="flex items-start space-x-4">
                <div class="w-10 h-10 bg-gradient-to-r from-green-500 to-green-600 rounded-xl flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-900 mb-2">Tips for Creating Great Events</h3>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Choose a clear, descriptive title that captures attention</li>
                        <li>• Provide detailed information about what attendees can expect</li>
                        <li>• Include specific location details for easy navigation</li>
                        <li>• Select a date that gives people enough time to plan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced Scripts -->
    <script>
        // Form validation and interaction effects
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const inputs = document.querySelectorAll('input, textarea');
            const submitBtn = document.querySelector('button[type="submit"]');
            
            // Add floating label effect
            inputs.forEach(input => {
                // Focus and blur effects
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('focused');
                    this.classList.add('ring-2', 'ring-blue-200');
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('focused');
                    this.classList.remove('ring-2', 'ring-blue-200');
                    
                    // Validation feedback
                    if (this.value.trim() === '' && this.hasAttribute('required')) {
                        this.classList.add('border-red-300', 'bg-red-50');
                        this.classList.remove('border-gray-200');
                    } else {
                        this.classList.remove('border-red-300', 'bg-red-50');
                        this.classList.add('border-green-300', 'bg-green-50');
                    }
                });
                
                // Real-time validation
                input.addEventListener('input', function() {
                    if (this.value.trim() !== '') {
                        this.classList.remove('border-red-300', 'bg-red-50', 'border-gray-200');
                        this.classList.add('border-green-300', 'bg-green-50');
                    }
                });
            });
            
            // Form submission with loading state
            form.addEventListener('submit', function(e) {
                submitBtn.innerHTML = `
                    <span class="flex items-center justify-center space-x-2">
                        <svg class="w-4 h-4 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                        <span>Creating Event...</span>
                    </span>
                `;
                submitBtn.disabled = true;
                submitBtn.classList.add('opacity-75', 'cursor-not-allowed');
            });
            
            // Character counter for description
            const descriptionField = document.getElementById('description');
            const maxLength = 500;
            
            // Create character counter
            const counterDiv = document.createElement('div');
            counterDiv.className = 'text-sm text-gray-500 mt-1 text-right';
            counterDiv.textContent = `0 / ${maxLength} characters`;
            descriptionField.parentElement.appendChild(counterDiv);
            
            descriptionField.addEventListener('input', function() {
                const currentLength = this.value.length;
                counterDiv.textContent = `${currentLength} / ${maxLength} characters`;
                
                if (currentLength > maxLength * 0.9) {
                    counterDiv.classList.add('text-orange-500');
                    counterDiv.classList.remove('text-gray-500');
                } else {
                    counterDiv.classList.remove('text-orange-500');
                    counterDiv.classList.add('text-gray-500');
                }
            });
            
            // Date validation
            const dateField = document.getElementById('date');
            const today = new Date().toISOString().split('T')[0];
            dateField.min = today;
            
            dateField.addEventListener('change', function() {
                const selectedDate = new Date(this.value);
                const todayDate = new Date();
                
                if (selectedDate < todayDate) {
                    this.classList.add('border-red-300', 'bg-red-50');
                    // Show tooltip or error message
                } else {
                    this.classList.remove('border-red-300', 'bg-red-50');
                    this.classList.add('border-green-300', 'bg-green-50');
                }
            });
            
            // Add smooth animations on page load
            const animatedElements = document.querySelectorAll('.animate-fade-in-up, .animate-fade-in');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });
            
            animatedElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
                observer.observe(el);
            });
        });
        
        // Add some interactive hover effects
        document.querySelectorAll('.glass-effect').forEach(element => {
            element.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
                this.style.boxShadow = '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)';
            });
            
            element.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '';
            });
        });
    </script>

</body>
</html>
