<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event - Admin Dashboard | Tomasino Gigs</title>
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
                        },
                        admin: {
                            50: '#fafafa',
                            100: '#f4f4f5',
                            200: '#e4e4e7',
                            300: '#d4d4d8',
                            400: '#a1a1aa',
                            500: '#71717a',
                            600: '#52525b',
                            700: '#3f3f46',
                            800: '#27272a',
                            900: '#18181b'
                        }
                    },
                    animation: {
                        'fade-in-up': 'fadeInUp 0.6s ease-out',
                        'fade-in': 'fadeIn 0.4s ease-out',
                        'slide-down': 'slideDown 0.3s ease-out',
                        'bounce-in': 'bounceIn 0.5s ease-out',
                        'shake': 'shake 0.5s ease-in-out',
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite'
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
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
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

            0%,
            100% {
                transform: translateX(0);
            }

            10%,
            30%,
            50%,
            70%,
            90% {
                transform: translateX(-5px);
            }

            20%,
            40%,
            60%,
            80% {
                transform: translateX(5px);
            }
        }

        .input-focus:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .admin-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
    </style>
</head>

<body class="bg-gradient-to-br from-gray-50 via-blue-50 to-indigo-50 min-h-screen">

    <!-- Admin Navigation -->
    <nav class="bg-white/90 backdrop-blur-md sticky top-0 z-50 shadow-xl border-b border-white/20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center h-20">

                <!-- Admin Logo & Breadcrumb -->
                <div class="flex items-center space-x-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 admin-gradient rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h1
                                class="text-xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                                Admin Panel
                            </h1>
                            <p class="text-sm text-gray-500">Event Management System</p>
                        </div>
                    </div>

                    <!-- Breadcrumb -->
                    <div class="hidden md:flex items-center space-x-2 ml-8">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <span class="text-sm text-gray-600">Dashboard</span>
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <span class="text-sm font-medium text-indigo-600">Edit Event</span>
                    </div>
                </div>

                <!-- Admin Actions -->
                <div class="flex items-center space-x-4">
                    <a href="{{ route('admin.dashboard') }}"
                        class="flex items-center space-x-2 px-4 py-2 text-gray-600 hover:text-indigo-600 transition-colors duration-200 font-medium">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        <span>Back to Dashboard</span>
                    </a>
                    <div
                        class="w-8 h-8 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Admin Hero Section -->
    <div class="relative overflow-hidden py-12">
        <div class="max-w-6xl mx-auto px-6">
            <div class="animate-fade-in-up">
                <!-- Status Badge -->
                <div class="flex items-center space-x-3 mb-4">
                    <span
                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-amber-100 text-amber-800 border border-amber-200">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        Editing Mode
                    </span>
                    <span class="text-sm text-gray-500">Event ID: #{{ $event->id }}</span>
                </div>

                <h1
                    class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-indigo-600 via-purple-600 to-blue-800 bg-clip-text text-transparent mb-4">
                    Edit Event Details
                </h1>
                <p class="text-xl text-gray-600 max-w-2xl leading-relaxed">
                    Update event information and manage event settings from the admin panel
                </p>
            </div>
        </div>

        <!-- Background decoration -->
        <div class="absolute top-0 right-1/4 transform translate-x-1/2 -translate-y-1/2">
            <div
                class="w-64 h-64 admin-gradient rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse-slow">
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-4xl mx-auto py-8 px-6">

        <!-- Event Overview Card -->
        <div class="glass-effect rounded-2xl p-6 shadow-xl border border-white/20 mb-8 animate-fade-in">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-gray-900">Current Event Information</h3>
                <div class="flex items-center space-x-2 text-sm text-gray-500">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Last updated: {{ $event->updated_at->diffForHumans() }}</span>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-white/50 rounded-xl p-4">
                    <h4 class="font-medium text-gray-700 mb-2">Current Title</h4>
                    <p class="text-gray-900">{{ $event->title }}</p>
                </div>
                <div class="bg-white/50 rounded-xl p-4">
                    <h4 class="font-medium text-gray-700 mb-2">Current Location</h4>
                    <p class="text-gray-900">{{ $event->location }}</p>
                </div>
                <div class="bg-white/50 rounded-xl p-4">
                    <h4 class="font-medium text-gray-700 mb-2">Current Date</h4>
                    <p class="text-gray-900">{{ \Carbon\Carbon::parse($event->date)->format('F d, Y') }}</p>
                </div>
                <div class="bg-white/50 rounded-xl p-4">
                    <h4 class="font-medium text-gray-700 mb-2">Event Status</h4>
                    @if (\Carbon\Carbon::parse($event->date)->isFuture())
                        <span
                            class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            <div class="w-1.5 h-1.5 bg-green-500 rounded-full mr-1.5"></div>
                            Upcoming
                        </span>
                    @else
                        <span
                            class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                            <div class="w-1.5 h-1.5 bg-gray-500 rounded-full mr-1.5"></div>
                            Past Event
                        </span>
                    @endif
                </div>
            </div>
        </div>

        <!-- Error Messages -->
        @if ($errors->any())
            <div class="mb-8 animate-bounce-in">
                <div class="glass-effect rounded-2xl p-6 border-l-4 border-red-500 shadow-xl animate-shake">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-red-500 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-red-800">Validation Errors</h3>
                            <p class="text-red-600">Please fix the following issues before updating:</p>
                        </div>
                    </div>
                    <ul class="space-y-2">
                        @foreach ($errors->all() as $error)
                            <li class="flex items-center text-red-700">
                                <svg class="w-4 h-4 mr-2 text-red-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <!-- Edit Form Container -->
        <div class="glass-effect rounded-3xl shadow-2xl border border-white/20 overflow-hidden animate-fade-in-up">

            <!-- Form Header -->
            <div class="admin-gradient p-8 text-white relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -translate-y-16 translate-x-16">
                </div>
                <div
                    class="absolute bottom-0 left-0 w-24 h-24 bg-white/10 rounded-full translate-y-12 -translate-x-12">
                </div>
                <div class="relative z-10">
                    <div class="flex items-center space-x-3 mb-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        <h2 class="text-2xl font-bold">Update Event Information</h2>
                    </div>
                    <p class="text-indigo-100">Modify the event details below and save your changes</p>
                </div>
            </div>

            <!-- Form Content -->
            <form action="{{ route('admin.update', $event->id) }}" enctype="multipart/form-data" method="POST"
                class="p-8 space-y-8">
                @csrf
                @method('PUT')

                <!-- Title Field -->
                <div class="space-y-2">
                    <label for="title" class="flex items-center text-sm font-semibold text-gray-700 mb-3">
                        <svg class="w-4 h-4 mr-2 text-indigo-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                        </svg>
                        Event Title
                        <span class="ml-1 text-red-500">*</span>
                    </label>
                    <div class="relative">
                        <input type="text" name="title" id="title"
                            value="{{ old('title', $event->title) }}"
                            class="w-full px-4 py-4 bg-gray-50 border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:bg-white transition-all duration-300 input-focus text-gray-800 placeholder-gray-400"
                            placeholder="Enter event title..." required>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Description Field -->
                <div class="space-y-2">
                    <label for="description" class="flex items-center text-sm font-semibold text-gray-700 mb-3">
                        <svg class="w-4 h-4 mr-2 text-indigo-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                        Event Description
                        <span class="ml-1 text-red-500">*</span>
                    </label>
                    <textarea name="description" id="description" rows="4"
                        class="w-full px-4 py-4 bg-gray-50 border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:bg-white transition-all duration-300 input-focus text-gray-800 placeholder-gray-400 resize-none"
                        placeholder="Describe the event details..." required>{{ old('description', $event->description) }}</textarea>
                </div>

                <!-- Location Field -->
                <div class="space-y-2">
                    <label for="location" class="flex items-center text-sm font-semibold text-gray-700 mb-3">
                        <svg class="w-4 h-4 mr-2 text-indigo-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Event Location
                        <span class="ml-1 text-red-500">*</span>
                    </label>
                    <div class="relative">
                        <input type="text" name="location" id="location"
                            value="{{ old('location', $event->location) }}"
                            class="w-full px-4 py-4 bg-gray-50 border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:bg-white transition-all duration-300 input-focus text-gray-800 placeholder-gray-400"
                            placeholder="Enter event location..." required>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Date Field -->
                <div class="space-y-2">
                    <label for="date" class="flex items-center text-sm font-semibold text-gray-700 mb-3">
                        <svg class="w-4 h-4 mr-2 text-indigo-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Event Date
                        <span class="ml-1 text-red-500">*</span>
                    </label>
                    <div class="relative">
                        <input type="date" name="date" id="date" value="{{ old('date', $event->date) }}"
                            class="w-full px-4 py-4 bg-gray-50 border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:bg-white transition-all duration-300 input-focus text-gray-800"
                            required>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Image Upload Field -->
                <div class="space-y-2">
                    <label for="new_image" class="flex items-center text-sm font-semibold text-gray-700 mb-3">
                        <svg class="w-4 h-4 mr-2 text-indigo-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Event Image
                    </label>

                    <!-- Current Image Preview -->
                    <div class="mb-4 bg-gray-50 rounded-xl p-4 border-2 border-gray-200">
                        <p class="text-sm font-medium text-gray-700 mb-2">Current Image:</p>
                        <img src="{{ asset($event->image_url) }}" alt="Event Image"
                            class="w-full max-w-md h-48 object-cover rounded-lg shadow-md">
                    </div>

                    <!-- New Image Upload -->
                    <div class="relative">
                        <input type="file" id="new_image" name="new_image" accept="image/*"
                            class="w-full px-4 py-4 bg-gray-50 border-2 border-gray-200 rounded-xl focus:border-indigo-500 focus:bg-white transition-all duration-300 input-focus text-gray-800 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        <p class="text-xs text-gray-500 mt-2">Upload a new image to replace the current one (Optional).
                            Supported formats: JPG, PNG, GIF, SVG. Max size: 2MB</p>
                    </div>

                    <!-- Hidden field to preserve current image URL -->
                    <input type="hidden" name="current_image" value="{{ $event->image_url }}">
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-gray-200">
                    <a href="{{ route('admin.dashboard') }}"
                        class="flex-1 px-6 py-4 bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold rounded-xl transition-all duration-200 text-center border-2 border-gray-200 hover:border-gray-300">
                        <span class="flex items-center justify-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            <span>Cancel Changes</span>
                        </span>
                    </a>
                    <button type="submit"
                        class="flex-1 px-6 py-4 admin-gradient hover:opacity-90 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                        <span class="flex items-center justify-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Update Event</span>
                        </span>
                    </button>
                </div>
            </form>
        </div>

        <!-- Admin Help Section -->
        <div class="mt-12 glass-effect rounded-2xl p-6 shadow-lg border border-white/20 animate-fade-in">
            <div class="flex items-start space-x-4">
                <div class="w-10 h-10 admin-gradient rounded-xl flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-900 mb-2">Admin Guidelines</h3>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Ensure all event information is accurate and up-to-date</li>
                        <li>• Verify location details for attendee navigation</li>
                        <li>• Double-check dates to avoid scheduling conflicts</li>
                        <li>• Keep event descriptions clear and informative</li>
                        <li>• Changes will be immediately visible to all users</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced Admin Scripts -->
    <script>
        // Enhanced form validation and interaction effects for admin
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const inputs = document.querySelectorAll('input, textarea');
            const submitBtn = document.querySelector('button[type="submit"]');
            const originalTitle = "{{ $event->title }}";

            // Track changes
            let hasChanges = false;
            const originalValues = {};

            // Store original values
            inputs.forEach(input => {
                originalValues[input.name] = input.value;
            });

            // Add enhanced focus and blur effects
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('focused');
                    this.classList.add('ring-2', 'ring-indigo-200', 'scale-102');
                });

                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('focused');
                    this.classList.remove('ring-2', 'ring-indigo-200', 'scale-102');

                    // Enhanced validation feedback
                    if (this.value.trim() === '' && this.hasAttribute('required')) {
                        this.classList.add('border-red-300', 'bg-red-50');
                        this.classList.remove('border-gray-200', 'border-green-300');
                        showFieldError(this, 'This field is required');
                    } else {
                        this.classList.remove('border-red-300', 'bg-red-50');
                        this.classList.add('border-green-300', 'bg-green-50');
                        hideFieldError(this);
                    }
                });

                // Track changes for unsaved warning
                input.addEventListener('input', function() {
                    if (this.value !== originalValues[this.name]) {
                        hasChanges = true;
                        updateChangeIndicator();
                    } else {
                        checkAllChanges();
                    }

                    // Real-time validation
                    if (this.value.trim() !== '') {
                        this.classList.remove('border-red-300', 'bg-red-50', 'border-gray-200');
                        this.classList.add('border-green-300', 'bg-green-50');
                        hideFieldError(this);
                    }
                });
            });

            // Check if all fields match original values
            function checkAllChanges() {
                hasChanges = false;
                inputs.forEach(input => {
                    if (input.value !== originalValues[input.name]) {
                        hasChanges = true;
                    }
                });
                updateChangeIndicator();
            }

            // Update change indicator
            function updateChangeIndicator() {
                const indicator = document.getElementById('changeIndicator') || createChangeIndicator();
                if (hasChanges) {
                    indicator.classList.remove('hidden');
                } else {
                    indicator.classList.add('hidden');
                }
            }

            // Create change indicator
            function createChangeIndicator() {
                const indicator = document.createElement('div');
                indicator.id = 'changeIndicator';
                indicator.className =
                    'fixed bottom-6 right-6 bg-amber-500 text-white px-4 py-2 rounded-lg shadow-lg animate-bounce hidden z-50';
                indicator.innerHTML = `
                    <div class="flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>Unsaved changes</span>
                    </div>
                `;
                document.body.appendChild(indicator);
                return indicator;
            }

            // Show field error
            function showFieldError(field, message) {
                hideFieldError(field); // Remove existing error first
                const errorDiv = document.createElement('div');
                errorDiv.className = 'text-red-500 text-sm mt-1 animate-fade-in field-error';
                errorDiv.textContent = message;
                field.parentElement.appendChild(errorDiv);
            }

            // Hide field error
            function hideFieldError(field) {
                const existingError = field.parentElement.querySelector('.field-error');
                if (existingError) {
                    existingError.remove();
                }
            }

            // Warn about unsaved changes
            window.addEventListener('beforeunload', function(e) {
                if (hasChanges) {
                    e.preventDefault();
                    e.returnValue = 'You have unsaved changes. Are you sure you want to leave?';
                    return e.returnValue;
                }
            });

            // Form submission with loading state
            form.addEventListener('submit', function(e) {
                if (!hasChanges) {
                    e.preventDefault();
                    showNotification('No changes detected', 'info');
                    return;
                }

                submitBtn.innerHTML = `
                    <span class="flex items-center justify-center space-x-2">
                        <svg class="w-4 h-4 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                        <span>Updating Event...</span>
                    </span>
                `;
                submitBtn.disabled = true;
                submitBtn.classList.add('opacity-75', 'cursor-not-allowed');
                hasChanges = false; // Prevent unsaved changes warning
            });

            // Character counter for description
            const descriptionField = document.getElementById('description');
            const maxLength = 1000;

            // Create character counter
            const counterDiv = document.createElement('div');
            counterDiv.className = 'text-sm text-gray-500 mt-1 text-right';
            counterDiv.textContent = `${descriptionField.value.length} / ${maxLength} characters`;
            descriptionField.parentElement.appendChild(counterDiv);

            descriptionField.addEventListener('input', function() {
                const currentLength = this.value.length;
                counterDiv.textContent = `${currentLength} / ${maxLength} characters`;

                if (currentLength > maxLength * 0.9) {
                    counterDiv.classList.add('text-orange-500');
                    counterDiv.classList.remove('text-gray-500');
                } else if (currentLength > maxLength) {
                    counterDiv.classList.add('text-red-500');
                    counterDiv.classList.remove('text-gray-500', 'text-orange-500');
                } else {
                    counterDiv.classList.remove('text-orange-500', 'text-red-500');
                    counterDiv.classList.add('text-gray-500');
                }
            });

            // Show notification
            function showNotification(message, type = 'info') {
                const notification = document.createElement('div');
                const bgColor = type === 'info' ? 'bg-blue-500' : type === 'success' ? 'bg-green-500' :
                    'bg-red-500';
                notification.className =
                    `fixed top-6 right-6 ${bgColor} text-white px-6 py-3 rounded-lg shadow-lg animate-slide-down z-50`;
                notification.textContent = message;
                document.body.appendChild(notification);

                setTimeout(() => {
                    notification.remove();
                }, 3000);
            }

            // Add smooth animations on page load
            const animatedElements = document.querySelectorAll('.animate-fade-in-up, .animate-fade-in');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, {
                threshold: 0.1
            });

            animatedElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
                observer.observe(el);
            });

            // Enhanced hover effects for admin elements
            document.querySelectorAll('.glass-effect').forEach(element => {
                element.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-2px)';
                    this.style.boxShadow =
                        '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)';
                });

                element.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = '';
                });
            });
        });
    </script>

</body>

</html>
