<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Create Event</title>
<script src="https://cdn.tailwindcss.com"></script>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
  
  body {
    font-family: 'Inter', sans-serif;
  }
  
  .glass-effect {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
  }
  
  .gradient-bg {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  }
  
  .input-focus {
    transition: all 0.3s ease;
  }
  
  .input-focus:focus {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(102, 126, 234, 0.2);
  }
  
  .btn-hover {
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
  }
  
  .btn-hover::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s ease;
  }
  
  .btn-hover:hover::before {
    left: 100%;
  }
  
  .btn-hover:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
  }
  
  .floating-label {
    transition: all 0.3s ease;
  }
  
  .form-group:focus-within .floating-label {
    transform: translateY(-24px) scale(0.85);
    color: #667eea;
  }
  
  .form-group input:not(:placeholder-shown) + .floating-label,
  .form-group textarea:not(:placeholder-shown) + .floating-label {
    transform: translateY(-24px) scale(0.85);
    color: #667eea;
  }
  
  .animate-slide-up {
    animation: slideUp 0.6s ease-out;
  }
  
  @keyframes slideUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
  
  .stagger-1 { animation-delay: 0.1s; }
  .stagger-2 { animation-delay: 0.2s; }
  .stagger-3 { animation-delay: 0.3s; }
  .stagger-4 { animation-delay: 0.4s; }
  .stagger-5 { animation-delay: 0.5s; }
</style>
</head>
<body class="gradient-bg min-h-screen">
 <!-- Decorative elements -->
 <div class="fixed inset-0 overflow-hidden pointer-events-none">
   <div class="absolute -top-40 -right-40 w-80 h-80 bg-white opacity-10 rounded-full"></div>
   <div class="absolute -bottom-32 -left-32 w-64 h-64 bg-white opacity-5 rounded-full"></div>
   <div class="absolute top-20 left-20 w-32 h-32 bg-white opacity-10 rounded-full"></div>
 </div>

 <div class="relative z-10 max-w-2xl mx-auto py-12 px-6">
   <!-- Header Section -->
   <div class="text-center mb-12 animate-slide-up">
     <div class="inline-flex items-center justify-center w-20 h-20 bg-white bg-opacity-20 rounded-2xl mb-6">
       <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
       </svg>
     </div>
     <h1 class="text-5xl font-bold text-white mb-4">Create Event</h1>
     <p class="text-xl text-white text-opacity-80">Bring your ideas to life</p>
   </div>

   @if ($errors->any())
   <div class="mb-8 p-6 bg-red-50 border border-red-200 rounded-2xl animate-slide-up stagger-1">
     <div class="flex items-center mb-3">
       <svg class="w-5 h-5 text-red-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
         <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
       </svg>
       <h3 class="text-red-800 font-semibold">Please fix the following errors:</h3>
     </div>
     <ul class="space-y-1">
       @foreach ($errors->all() as $error)
       <li class="text-red-700 flex items-start">
         <span class="text-red-500 mr-2">•</span>
         <span>{{ $error }}</span>
       </li>
       @endforeach
     </ul>
   </div>
   @endif

   <!-- Form Section -->
   <form action="{{ route('admin.store') }}" method="POST" class="glass-effect rounded-3xl shadow-2xl overflow-hidden animate-slide-up stagger-2">
     @csrf
     <div class="p-8 space-y-8">
       
       <!-- Title Field -->
       <div class="form-group relative animate-slide-up stagger-3">
         <input type="text" name="title" id="title" placeholder=" " 
                class="w-full bg-transparent border-0 border-b-2 border-gray-200 px-0 py-4 text-lg font-medium text-gray-800 placeholder-transparent focus:border-purple-500 focus:ring-0 input-focus" required>
         <label for="title" class="floating-label absolute left-0 top-4 text-gray-500 font-medium pointer-events-none">
           Event Title
         </label>
         <div class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-purple-500 to-pink-500 transform scale-x-0 transition-transform duration-300 origin-left focus-within:scale-x-100"></div>
       </div>

       <!-- Description Field -->
       <div class="form-group relative animate-slide-up stagger-4">
         <textarea name="description" id="description" placeholder=" " rows="4"
                   class="w-full bg-transparent border-0 border-b-2 border-gray-200 px-0 py-4 text-lg text-gray-800 placeholder-transparent focus:border-purple-500 focus:ring-0 resize-none input-focus" required></textarea>
         <label for="description" class="floating-label absolute left-0 top-4 text-gray-500 font-medium pointer-events-none">
           Event Description
         </label>
         <div class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-purple-500 to-pink-500 transform scale-x-0 transition-transform duration-300 origin-left focus-within:scale-x-100"></div>
       </div>

       <!-- Location Field -->
       <div class="form-group relative animate-slide-up stagger-5">
         <input type="text" name="location" id="location" placeholder=" "
                class="w-full bg-transparent border-0 border-b-2 border-gray-200 px-0 py-4 text-lg font-medium text-gray-800 placeholder-transparent focus:border-purple-500 focus:ring-0 input-focus" required>
         <label for="location" class="floating-label absolute left-0 top-4 text-gray-500 font-medium pointer-events-none">
           Location
         </label>
         <div class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-purple-500 to-pink-500 transform scale-x-0 transition-transform duration-300 origin-left focus-within:scale-x-100"></div>
       </div>

       <!-- Date Field -->
       <div class="form-group relative animate-slide-up stagger-6">
         <input type="date" name="date" id="date" placeholder=" "
                class="w-full bg-transparent border-0 border-b-2 border-gray-200 px-0 py-4 text-lg font-medium text-gray-800 placeholder-transparent focus:border-purple-500 focus:ring-0 input-focus" required>
         <label for="date" class="floating-label absolute left-0 top-4 text-gray-500 font-medium pointer-events-none">
           Event Date
         </label>
         <div class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-purple-500 to-pink-500 transform scale-x-0 transition-transform duration-300 origin-left focus-within:scale-x-100"></div>
       </div>

     </div>

     <!-- Action Buttons -->
     <div class="bg-gray-50 px-8 py-6 flex justify-between items-center animate-slide-up stagger-6">
       <a href="/events" class="group inline-flex items-center px-6 py-3 text-gray-600 font-semibold rounded-xl hover:bg-white transition-all duration-300 btn-hover">
         <svg class="w-5 h-5 mr-2 group-hover:-translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
         </svg>
         Cancel
       </a>
       
       <button type="submit" class="group inline-flex items-center px-8 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white font-bold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 btn-hover">
         <span>Create Event</span>
         <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
         </svg>
       </button>
     </div>
   </form>
 </div>

 <script>
   // Add some interactive enhancements
   document.addEventListener('DOMContentLoaded', function() {
     // Auto-resize textarea
     const textarea = document.getElementById('description');
     textarea.addEventListener('input', function() {
       this.style.height = 'auto';
       this.style.height = this.scrollHeight + 'px';
     });

     // Add focus/blur effects for floating labels
     const inputs = document.querySelectorAll('input, textarea');
     inputs.forEach(input => {
       input.addEventListener('focus', function() {
         this.parentElement.classList.add('focused');
       });
       
       input.addEventListener('blur', function() {
         if (!this.value) {
           this.parentElement.classList.remove('focused');
         }
       });
     });
   });
 </script>
</body>

</html>