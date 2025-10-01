<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Events</title>
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
  
  .card-hover {
    transition: all 0.3s ease;
  }
  
  .card-hover:hover {
    transform: translateY(-4px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
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
    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
  }
  
  .animate-slide-up {
    animation: slideUp 0.6s ease-out;
  }
  
  .animate-fade-in {
    animation: fadeIn 0.8s ease-out;
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
  
  @keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }
  
  .stagger-1 { animation-delay: 0.1s; }
  .stagger-2 { animation-delay: 0.2s; }
  .stagger-3 { animation-delay: 0.3s; }
  .stagger-4 { animation-delay: 0.4s; }
  
  .table-row-hover {
    transition: all 0.3s ease;
  }
  
  .table-row-hover:hover {
    background: linear-gradient(90deg, rgba(102, 126, 234, 0.05), rgba(255, 255, 255, 0.05));
    transform: scale(1.02);
  }
  
  .action-btn {
    transition: all 0.2s ease;
  }
  
  .action-btn:hover {
    transform: scale(1.05);
  }
  
  .empty-state {
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
  }
</style>
</head>
<body class="gradient-bg min-h-screen">
 <!-- Decorative elements -->
 <div class="fixed inset-0 overflow-hidden pointer-events-none">
   <div class="absolute -top-40 -right-40 w-80 h-80 bg-white opacity-10 rounded-full"></div>
   <div class="absolute -bottom-32 -left-32 w-64 h-64 bg-white opacity-5 rounded-full"></div>
   <div class="absolute top-20 left-20 w-32 h-32 bg-white opacity-10 rounded-full"></div>
   <div class="absolute bottom-40 right-20 w-48 h-48 bg-white opacity-5 rounded-full"></div>
 </div>

 <div class="relative z-10 max-w-7xl mx-auto py-12 px-6">
   <!-- Header Section -->
   <div class="mb-12 animate-slide-up">
     <div class="flex items-center justify-between">
       <div>
         <div class="flex items-center mb-4">
           <div class="inline-flex items-center justify-center w-16 h-16 bg-white bg-opacity-20 rounded-2xl mr-4">
             <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
             </svg>
           </div>
           <div>
             <h1 class="text-5xl font-bold text-white mb-2">Events Dashboard</h1>
             <p class="text-xl text-white text-opacity-80">Manage your events with style</p>
           </div>
         </div>
       </div>
       
       <a href="{{ route('admin.create') }}" class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-emerald-500 to-teal-600 text-white font-bold rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 btn-hover animate-slide-up stagger-1">
         <svg class="w-6 h-6 mr-3 group-hover:rotate-90 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
         </svg>
         Add New Event
       </a>
     </div>
   </div>

   <!-- Stats Cards (Optional - you can remove if not needed) -->
   <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10 animate-slide-up stagger-2">
     <div class="glass-effect rounded-2xl p-6 text-center">
       <div class="text-3xl font-bold text-purple-600 mb-2">{{ count($events) }}</div>
       <div class="text-gray-600 font-medium">Total Events</div>
     </div>
     <div class="glass-effect rounded-2xl p-6 text-center">
       <div class="text-3xl font-bold text-emerald-600 mb-2">{{ count($events->where('date', '>=', date('Y-m-d'))) }}</div>
       <div class="text-gray-600 font-medium">Upcoming Events</div>
     </div>
     <div class="glass-effect rounded-2xl p-6 text-center">
       <div class="text-3xl font-bold text-orange-600 mb-2">{{ count($events->where('date', '<', date('Y-m-d'))) }}</div>
       <div class="text-gray-600 font-medium">Past Events</div>
     </div>
   </div>

   <!-- Events Table -->
   <div class="glass-effect rounded-3xl shadow-2xl overflow-hidden animate-slide-up stagger-3">
     <div class="overflow-x-auto">
       <table class="min-w-full">
         <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
           <tr>
             <th class="py-6 px-8 text-left text-sm font-bold text-gray-700 uppercase tracking-wider border-b border-gray-200">
               <div class="flex items-center">
                 <svg class="w-4 h-4 mr-2 text-purple-500" fill="currentColor" viewBox="0 0 20 20">
                   <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                 </svg>
                 Event Title
               </div>
             </th>
             <th class="py-6 px-8 text-left text-sm font-bold text-gray-700 uppercase tracking-wider border-b border-gray-200">
               <div class="flex items-center">
                 <svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                   <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                 </svg>
                 Description
               </div>
             </th>
             <th class="py-6 px-8 text-left text-sm font-bold text-gray-700 uppercase tracking-wider border-b border-gray-200">
               <div class="flex items-center">
                 <svg class="w-4 h-4 mr-2 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                   <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L5.05 4.05zM10 18a8 8 0 100-16 8 8 0 000 16z" clip-rule="evenodd"></path>
                 </svg>
                 Location
               </div>
             </th>
             <th class="py-6 px-8 text-left text-sm font-bold text-gray-700 uppercase tracking-wider border-b border-gray-200">
               <div class="flex items-center">
                 <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                   <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                 </svg>
                 Date
               </div>
             </th>
             <th class="py-6 px-8 text-left text-sm font-bold text-gray-700 uppercase tracking-wider border-b border-gray-200">
               <div class="flex items-center">
                 <svg class="w-4 h-4 mr-2 text-orange-500" fill="currentColor" viewBox="0 0 20 20">
                   <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                 </svg>
                 Actions
               </div>
             </th>
           </tr>
         </thead>
         <tbody class="divide-y divide-gray-100">
           @forelse($events as $event)
           <tr class="table-row-hover group">
             <td class="py-6 px-8">
               <div class="font-semibold text-gray-900 text-lg group-hover:text-purple-600 transition-colors duration-200">
                 {{ $event->title }}
               </div>
             </td>
             <td class="py-6 px-8">
               <div class="text-gray-600 text-sm leading-relaxed max-w-xs">
                 {{ Str::limit($event->description, 100) }}
               </div>
             </td>
             <td class="py-6 px-8">
               <div class="flex items-center text-gray-700">
                 <svg class="w-4 h-4 mr-2 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                   <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L5.05 4.05zM10 18a8 8 0 100-16 8 8 0 000 16z" clip-rule="evenodd"></path>
                 </svg>
                 {{ $event->location }}
               </div>
             </td>
             <td class="py-6 px-8">
               <div class="flex items-center">
                 @php
                   $eventDate = \Carbon\Carbon::parse($event->date);
                   $isUpcoming = $eventDate->isFuture();
                 @endphp
                 <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ $isUpcoming ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                   <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                     <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                   </svg>
                   {{ $eventDate->format('M d, Y') }}
                 </span>
               </div>
             </td>
             <td class="py-6 px-8">
               <div class="flex items-center space-x-3">
                 <a href="{{ route('admin.edit', $event->id) }}" 
                    class="action-btn inline-flex items-center px-4 py-2 bg-gradient-to-r from-amber-400 to-orange-500 text-white text-sm font-medium rounded-xl hover:from-amber-500 hover:to-orange-600 shadow-md hover:shadow-lg transition-all duration-200">
                   <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                   </svg>
                   Edit
                 </a>
                 
                 <form action="{{ route('admin.delete', $event->id) }}" method="POST" onsubmit="return confirm('Delete this event?')" class="inline">
                   @csrf
                   @method('DELETE')
                   <button type="submit" class="action-btn inline-flex items-center px-4 py-2 bg-gradient-to-r from-red-500 to-pink-600 text-white text-sm font-medium rounded-xl hover:from-red-600 hover:to-pink-700 shadow-md hover:shadow-lg transition-all duration-200">
                     <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                     </svg>
                     Delete
                   </button>
                 </form>
               </div>
             </td>
           </tr>
           @empty
           <tr>
             <td colspan="5" class="py-20 text-center">
               <div class="empty-state rounded-2xl mx-8 p-12">
                 <div class="flex flex-col items-center">
                   <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mb-6">
                     <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                     </svg>
                   </div>
                   <h3 class="text-2xl font-bold text-gray-700 mb-2">No Events Found</h3>
                   <p class="text-gray-500 text-lg mb-8 max-w-md">Get started by creating your first event. It's easy and takes just a few minutes!</p>
                   <a href="{{ route('admin.create') }}" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white font-semibold rounded-xl hover:from-purple-700 hover:to-pink-700 transition-all duration-300 btn-hover">
                     <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                     </svg>
                     Create Your First Event
                   </a>
                 </div>
               </div>
             </td>
           </tr>
           @endforelse
         </tbody>
       </table>
     </div>
   </div>
 </div>

 <script>
   // Add some interactive enhancements
   document.addEventListener('DOMContentLoaded', function() {
     // Add smooth scrolling for any anchor links
     document.querySelectorAll('a[href^="#"]').forEach(anchor => {
       anchor.addEventListener('click', function (e) {
         e.preventDefault();
         document.querySelector(this.getAttribute('href')).scrollIntoView({
           behavior: 'smooth'
         });
       });
     });

     // Add loading states for delete buttons
     document.querySelectorAll('form[method="POST"]').forEach(form => {
       form.addEventListener('submit', function(e) {
         const button = form.querySelector('button[type="submit"]');
         if (button && confirm('Delete this event?')) {
           button.innerHTML = `
             <svg class="animate-spin w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24">
               <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
               <path class="opacity-75" fill="currentColor" d="m4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
             </svg>
             Deleting...
           `;
           button.disabled = true;
         }
       });
     });
   });
 </script>
</body>

</html>