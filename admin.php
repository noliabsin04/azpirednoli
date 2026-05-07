
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<div   class=" h-full bg-white  ">

  <div 
    class="container  flex justify-center     mx-auto relative md:px-0 px-4 md:my-10 bg-[#111111]  rounded-none md:rounded-xl overflow-hidden">
    <!-- Nav -->
    <nav    class="bg-[#482728] max-w-7xl fixed top-0 md:top-5 left-0 md:left-auto  md:fixed shadow-lg w-full z-50 rounded-none md:rounded-lg" >
      <div   class=" mx-auto   px-4 sm:px-6 lg:px-8 " >
        <div class="flex justify-between items-center h-16">
          <!-- Logo -->
          <div class="flex-shrink-0">
            <a href="#" class="lg:text-xl md:text-lg text-sm font-bold text-gray-700 dark:text-white capitalize">
              <span class="px-1 bg-orange-400 dark:bg-green-600 rounded-full animate-[ping_1.9s_linear_infinite]">A</span>
              <span class="px-1 bg-orange-400 dark:bg-green-600 rounded-full animate-[ping_2s_linear_infinite]">Z</span>
              <span class="px-1 bg-orange-400 dark:bg-green-600 rounded-full animate-[ping_2.1s_linear_infinite]">P</span>
              <span class="px-1 bg-orange-400 dark:bg-green-600 rounded-full animate-[ping_2.21s_linear_infinite]">I</span>
              <span class="px-1 bg-orange-400 dark:bg-green-600 rounded-full animate-[ping_2.3s_linear_infinite]">R</span>
              <span class="px-1 bg-orange-400 dark:bg-green-600 rounded-full animate-[ping_2.4s_linear_infinite]">E</span>
              <span class="px-1 bg-orange-400 dark:bg-green-600 rounded-full animate-[ping_2.4s_linear_infinite]">D</span>
            </a>
          </div>

          <!-- Desktop Menu -->
          <div class="hidden md:flex space-x-8 text-gray-400 ">
            <a href="#about" class="text-orange-400 dark:text-green-600">Home</a>
            <a href="#what-i-do" class="hover:text-orange-400 dark:hover:text-green-600 ">What I Do</a>
            <a href="#testimonials" class="hover:text-orange-400 dark:hover:text-green-600 ">Testimonials</a>
            <a href="#clients" class="hover:text-orange-400 dark:hover:text-green-600 ">Clients</a>
            <a href="#fun-facts" class="hover:text-orange-400 dark:hover:text-green-600 ">Fun Facts</a>
          </div>

          <!-- Mobile Menu Button -->
          <div class="md:hidden flex items-center">
            <button id="mobile-menu-button" class="text-green-400 dark:text-green-600 hover:text-green-600 focus:outline-none">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
          </button>
          </div>
        </div>
      </div>

      <!-- Mobile Menu -->
      <div id="mobile-menu" class="absolute inset-0 bg-[#111111]  bg-opacity-50 z-50 hidden">
        <div class="fixed inset-y-0 left-0 bg-[#111111] dark:bg-white w-64 p-6 transform -translate-x-full transition-transform">
          <button id="close-menu-button" class="text-green-400 dark:text-green-600 hover:text-green-600 focus:outline-none mb-4">
          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
          <nav class="space-y-4 text-gray-400 dark:text-gray-700">
            <a href="#about" class="block text-green-400 dark:text-green-600">Home</a>
            <a href="#what-i-do" class="block hover:text-green-400 dark:hover:text-green-600 ">What I Do</a>
            <a href="#testimonials" class="block hover:text-green-400 dark:hover:text-green-600 ">Testimonials</a>
            <a href="#clients" class="block hover:text-green-400 dark:hover:text-green-600 ">Clients</a>
            <a href="#fun-facts" class="block hover:text-green-400 dark:hover:text-green-600 ">Fun Facts</a>
          </nav>
        </div>
      </div>
      
    </nav>

    <section class="text-center mt-20">
  <h1 class="text-5xl font-bold text-gray-800">
    Hi, I'm <span class="text-orange-500">Your Name</span>
  </h1>
  <p class="mt-4 text-gray-600 text-lg">
    Web Developer | Designer | Freelancer
  </p>

  <button class="mt-6 bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600">
    Hire Me
  </button>
</section>

  </div>

</div>

<script>
  const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMenuButton = document.getElementById('close-menu-button');

    mobileMenuButton.addEventListener('click', () => {
      mobileMenu.classList.remove('hidden');
      mobileMenu.querySelector('div').classList.remove('-translate-x-full');
    });

    closeMenuButton.addEventListener('click', () => {
      mobileMenu.querySelector('div').classList.add('-translate-x-full');
      setTimeout(() => mobileMenu.classList.add('hidden'), 300);
    });

    mobileMenu.addEventListener('click', (e) => {
      if (e.target === mobileMenu) {
        closeMenuButton.click();
      }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>