
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
    



  </div>

  <div class="items-center mt-10 md:mt-5 w-10/12 grid-cols-2 mx-auto overflow-x-hidden lg:grid md:py-14 lg:py-24 xl:py-14 lg:mt-3 xl:mt-5" data-aos="fade-right" data-aos-duration="800">
    <div class="pr-2 md:mb-14 py-14 md:py-0">
      <h1 class="text-3xl font-semibold text-blue-900 xl:text-5xl lg:text-3xl"><span class="block w-full">Why Choose Us?</span> for growing your business!</h1>
      <p class="py-4 text-lg text-gray-500 2xl:py-8 md:py-6 2xl:pr-5">
        At AZPIRED, our topmost priority is your success. We make it our company’s mission to help clients grow their businesses in the most cost-efficient way possible. The first step in achieving that is to create professional first impression. As a result, this will help establish a positive image for your brand, building customer loyalty and maximizing revenues..
      </p>

          <ul
        class="mt-0 mx-auto  text-left font-medium text-lg leading-none border-gray-200 divide-y divide-gray-200">
        <li>
            <a class="py-3.5 w-full flex items-center text-gray-500 hover:text-orange-700 hover:bg-gray-50" href="#">
                <span class="ml-5 mr-2.5 w-1 h-7 bg-orange-700 rounded-r-md"></span>
                Outsourcing services at the most competitive rates
            </a>
        </li>
        <li>
            <a class="py-3.5 w-full flex items-center text-gray-500 hover:text-orange-700 hover:bg-gray-50" href="#">
                <span class="ml-5 mr-2.5 w-1 h-7 bg-orange-700 rounded-r-md"></span>
                Committed to offer the highest form of reliability, security and cost savings to our clients
            </a>
        </li>
        <li>
            <a class="py-3.5 w-full flex items-center text-gray-500 hover:text-orange-700 hover:bg-gray-50" href="#">
                <span class="ml-5 mr-2.5 w-1 h-7 bg-orange-700 rounded-r-md"></span>
               Provide solutions that no other company can par at A price that you and your shareholders or partners will think it is not possible.
            </a>
        </li> 

    </ul>
    <br>


      <div class="mt-4">
        <a href="#contact" class="px-5 py-4 text-lg tracking-wider text-white bg-orange-500 rounded-lg md:px-8 hover:bg-blue-600 group"><span>Explore More</span> </a>
      </div>
      <div class="mt-2 relative z-100">

</div>
    </div>

    <div class="pb-10 overflow-hidden md:p-20 lg:p-0 sm:pb-0">
      <img id="heroImg1" class="transition-all duration-300 ease-in-out hover:scale-105 lg:w-full sm:mx-auto sm:w-6/6 sm:pb-12 lg:pb-0" src="images/logo1.png" alt="Awesome hero page image" width="500" height="488"/>
    </div>
  </div>

 <div class="items-center w-10/12 grid-cols-2 mx-auto overflow-x-hidden lg:grid md:py-14 lg:py-24 xl:py-14 lg:mt-3 xl:mt-5" data-aos="fade-right" data-aos-duration="800">
    <div class="pr-2 md:mb-14 py-14 md:py-0">
      <h1 class="text-3xl font-semibold text-blue-900 xl:text-5xl lg:text-3xl"><span class="block w-full">Get a financial experience</span> for growing your business!</h1>
      <p class="py-4 text-lg text-gray-500 2xl:py-8 md:py-6 2xl:pr-5">
        Empowering you to make better financial decisions, We truly are professional money planners...
      </p>
      <div class="mt-4">
        <a href="#contact" class="px-5 py-3 text-lg tracking-wider text-white bg-blue-500 rounded-lg md:px-8 hover:bg-blue-600 group"><span>Explore More</span> </a>
      </div>
    </div>

    <div class="pb-10 overflow-hidden md:p-10 lg:p-0 sm:pb-0">
      <img id="heroImg1" class="transition-all duration-300 ease-in-out hover:scale-105 lg:w-full sm:mx-auto sm:w-5/6 sm:pb-12 lg:pb-0" src="images/logo2.png" alt="Awesome hero page image" width="500" height="600"/>
    </div>
  </div>

<div class="min-h-screen flex flex-col p-8 sm:p-16 md:p-24 justify-center bg-white">
  <!-- Themes: blue, purple and teal -->
  <div data-theme="teal" class="mx-auto max-w-6xl">
    <h2 class="sr-only">Featured case study</h2>
    <section class="font-sans text-black">
      <div class="[ lg:flex lg:items-center ] [ fancy-corners fancy-corners--large fancy-corners--top-left fancy-corners--bottom-right ]">
        <div class="flex-shrink-0 self-stretch sm:flex-basis-40 md:flex-basis-50 xl:flex-basis-60">
          <div class="h-full">
            <article class="h-full">
              <div class="h-full">
                <img class="h-full object-cover" src="images/logo3.png" width="733" height="412" alt='""' typeof="foaf:Image" />
              </div>
            </article>
          </div>
        </div>
        <div class="p-6 bg-grey">
          <div class="leading-relaxed">
            <h2 class="leading-tight text-4xl font-bold">CXcon: Experience Transformation</h2>
            <p class="mt-4">Our second CXcon in October was dedicated to experience transformation. The free one-day virtual event&nbsp;brought together 230+ heads of digital, thought leaders, and UX practitioners to discuss all aspects of experience design..</p>
            <p class="mt-4">In a jam-packed day filled with keynote sessions, panels, and virtual networking we explored topics including design leadership, UX ethics, designing for emotion and innovation at scale.</p>
            <p><a class="mt-4 button button--secondary" href="https://inviqa.com/cxcon-experience-transformation">Explore this event</a></p>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<section class="py-20 bg-white dark:bg-gray-900" x-data="{ inView: false }" x-init="setTimeout(() => inView = true, 500)">
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-16 text-center">
            <div :class="{ 'opacity-100 translate-y-0': inView, 'opacity-0 translate-y-8': !inView }" class="transition-all duration-1000 ease-out">
                <h2 class="mb-4 text-4xl font-bold text-gray-900 sm:text-5xl dark:text-white">
                    Our Services
                </h2>
                <p class="mx-auto text-xl text-gray-600 dark:text-gray-300">
                    Comprehensive solutions designed to accelerate your business growth and digital transformation.
                </p>
            </div>
        </div>
        <div class="grid gap-8 mb-20 md:grid-cols-2 lg:grid-cols-3">
            <div :class="{ 'opacity-100 translate-y-0': inView, 'opacity-0 translate-y-8': !inView }" class="group transition-all duration-1000 ease-out delay-200 p-8 rounded-2xl bg-gray-50 dark:bg-gray-800">
                <div class="items-center justify-center group-hover:bg-blue-600 transition-colors duration-300 flex w-[64px] h-[64px] mb-6 rounded-full bg-blue-100 dark:bg-blue-900">
                    <div>
                        <svg class="w-8 h-8 text-blue-600 dark:text-blue-400 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                </div>
                <h3 class="mb-4 text-2xl font-bold text-gray-900 dark:text-white">
                    Web Development
                </h3>
                <p class="mb-6 text-gray-600 dark:text-gray-300">
                    Custom websites and web applications built with modern technologies for optimal performance and user experience.
                </p>
                <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                    <li class="items-center flex">
                        <svg class="w-4 h-4 text-blue-600 mr-2 rtl:ml-2 rtl:mr-0" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-gray-700 dark:text-gray-300">Responsive Design</span>
                    </li>
                    <li class="items-center flex">
                        <svg class="w-4 h-4 text-blue-600 mr-2 rtl:ml-2 rtl:mr-0" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-gray-700 dark:text-gray-300">SEO Optimization</span>
                    </li>
                    <li class="items-center flex">
                        <svg class="w-4 h-4 text-blue-600 mr-2 rtl:ml-2 rtl:mr-0" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-gray-700 dark:text-gray-300">Performance Optimization</span>
                    </li>
                </ul>
            </div>
            <div :class="{ 'opacity-100 translate-y-0': inView, 'opacity-0 translate-y-8': !inView }" class="group transition-all duration-1000 ease-out delay-400 p-8 rounded-2xl bg-gray-50 dark:bg-gray-800">
                <div class="items-center justify-center group-hover:bg-green-600 transition-colors duration-300 flex w-[64px] h-[64px] mb-6 rounded-full bg-green-100 dark:bg-green-900">
                    <div>
                        <svg class="w-8 h-8 text-green-600 dark:text-green-400 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                </div>
                <h3 class="mb-4 text-2xl font-bold text-gray-900 dark:text-white">
                    Mobile Apps
                </h3>
                <p class="mb-6 text-gray-600 dark:text-gray-300">
                    Native and cross-platform mobile applications that deliver exceptional user experiences on iOS and Android.
                </p>
                <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                    <li class="items-center flex">
                        <svg class="w-4 h-4 text-green-600 mr-2 rtl:ml-2 rtl:mr-0" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-gray-700 dark:text-gray-300">iOS & Android</span>
                    </li>
                    <li class="items-center flex">
                        <svg class="w-4 h-4 text-green-600 mr-2 rtl:ml-2 rtl:mr-0" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-gray-700 dark:text-gray-300">Cross-platform</span>
                    </li>
                    <li class="items-center flex">
                        <svg class="w-4 h-4 text-green-600 mr-2 rtl:ml-2 rtl:mr-0" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-gray-700 dark:text-gray-300">App Store Ready</span>
                    </li>
                </ul>
            </div>
            <div :class="{ 'opacity-100 translate-y-0': inView, 'opacity-0 translate-y-8': !inView }" class="group transition-all duration-1000 ease-out delay-600 p-8 rounded-2xl bg-gray-50 dark:bg-gray-800">
                <div class="items-center justify-center group-hover:bg-purple-600 transition-colors duration-300 flex w-[64px] h-[64px] mb-6 rounded-full bg-purple-100 dark:bg-purple-900">
                    <div>
                        <svg class="w-8 h-8 text-purple-600 dark:text-purple-400 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path></svg>
                    </div>
                </div>
                <h3 class="mb-4 text-2xl font-bold text-gray-900 dark:text-white">
                    Cloud Solutions
                </h3>
                <p class="mb-6 text-gray-600 dark:text-gray-300">
                    Scalable cloud infrastructure and services to ensure your applications run smoothly and securely at any scale.
                </p>
                <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                    <li class="items-center flex">
                        <svg class="w-4 h-4 text-purple-600 mr-2 rtl:ml-2 rtl:mr-0" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-gray-700 dark:text-gray-300">AWS & Azure</span>
                    </li>
                    <li class="items-center flex">
                        <svg class="w-4 h-4 text-purple-600 mr-2 rtl:ml-2 rtl:mr-0" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-gray-700 dark:text-gray-300">Auto-scaling</span>
                    </li>
                    <li class="items-center flex">
                        <svg class="w-4 h-4 text-purple-600 mr-2 rtl:ml-2 rtl:mr-0" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-gray-700 dark:text-gray-300">Security First</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <p class="mt-8 container mx-auto p-6 text-center">Get More Components | Templates in multiple Frameowkr by visiting <a href="https://wavykits.com" class="text-blue-600">wavykits.com</a>
</section>
  




<section
  class="relative z-10 overflow-hidden py-12 sm:py-20 lg:py-[120px] bg-white text-gray-900 dark:bg-gray-900 dark:text-gray-100 transition-colors duration-300"
>
  <div class="container mx-auto">
    <div class="mx-4 flex flex-wrap justify-center lg:justify-between">
      <!-- Contact Form -->
      <div class="order-2 w-full px-4 lg:order-1 lg:w-1/2 xl:w-5/12">
        <div
          class="relative rounded-lg p-4 shadow-2xl sm:p-12 bg-orange-50 dark:bg-orange-800 transition-colors duration-300"
        >
          <form
            class="rounded-xl bg-orange-100 dark:bg-gray-700 p-5 transition-colors duration-300"
            id="contactForm"
          >
            <!-- Name -->
            <div class="mb-6">
              <div class="relative">
                <div
                  class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                >
                  <i class="fas fa-user text-gray-500 dark:text-gray-400"></i>
                </div>
                <input
                  type="text"
                  name="name"
                  placeholder="Name"
                  class="w-full pl-10 pr-3 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                  required
                />
              </div>
            </div>

            <!-- Email -->
            <div class="mb-6">
              <div class="relative">
                <div
                  class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                >
                  <i class="fas fa-envelope text-gray-500 dark:text-gray-400"></i>
                </div>
                <input
                  type="email"
                  name="email"
                  placeholder="Email Address"
                  class="w-full pl-10 pr-3 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                  required
                />
              </div>
            </div>

            <!-- Message -->
            <div class="mb-6">
              <div class="relative">
                <div
                  class="absolute top-3 left-3 pointer-events-none"
                >
                  <i class="fas fa-comment text-gray-500 dark:text-gray-400"></i>
                </div>
                <textarea
                  rows="6"
                  name="message"
                  placeholder="Message"
                  class="w-full pl-10 pr-3 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                  required
                ></textarea>
              </div>
            </div>

            <!-- Submit -->
            <div>
              <button
                type="submit"
                class="w-full p-3 bg-orange-600 text-white rounded-lg hover:bg-orange-700 dark:hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900 transition-colors"
              >
                Submit
              </button>
            </div>
          </form>

          <!-- Decorative elements -->
          <div>
            <span class="absolute -right-9 -top-10 z-[-1]">
              <svg
                width="100"
                height="100"
                viewBox="0 0 100 100"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z"
                  class="fill-orange-500 dark:fill-orange-700"
                />
              </svg>
            </span>
            <span class="absolute -right-10 top-[90px] z-[-1]">
             <svg width="107" height="134" viewBox="0 0 107 134" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="104.999" cy="132" r="1.66667" transform="rotate(180 104.999 132)" fill="#4338ca"></circle><circle cx="104.999" cy="117.333" r="1.66667" transform="rotate(180 104.999 117.333)" fill="#4338ca"></circle><circle cx="104.999" cy="102.667" r="1.66667" transform="rotate(180 104.999 102.667)" fill="#4338ca"></circle><circle cx="104.999" cy="88" r="1.66667" transform="rotate(180 104.999 88)" fill="#4338ca"></circle><circle cx="104.999" cy="73.3333" r="1.66667" transform="rotate(180 104.999 73.3333)" fill="#4338ca"></circle><circle cx="104.999" cy="45" r="1.66667" transform="rotate(180 104.999 45)" fill="#4338ca"></circle><circle cx="104.999" cy="16" r="1.66667" transform="rotate(180 104.999 16)" fill="#4338ca"></circle><circle cx="104.999" cy="59" r="1.66667" transform="rotate(180 104.999 59)" fill="#4338ca"></circle><circle cx="104.999" cy="30.6666" r="1.66667" transform="rotate(180 104.999 30.6666)" fill="#4338ca"></circle><circle cx="104.999" cy="1.66665" r="1.66667" transform="rotate(180 104.999 1.66665)" fill="#4338ca"></circle><circle cx="90.3333" cy="132" r="1.66667" transform="rotate(180 90.3333 132)" fill="#4338ca"></circle><circle cx="90.3333" cy="117.333" r="1.66667" transform="rotate(180 90.3333 117.333)" fill="#4338ca"></circle><circle cx="90.3333" cy="102.667" r="1.66667" transform="rotate(180 90.3333 102.667)" fill="#4338ca"></circle><circle cx="90.3333" cy="88" r="1.66667" transform="rotate(180 90.3333 88)" fill="#4338ca"></circle><circle cx="90.3333" cy="73.3333" r="1.66667" transform="rotate(180 90.3333 73.3333)" fill="#4338ca"></circle><circle cx="90.3333" cy="45" r="1.66667" transform="rotate(180 90.3333 45)" fill="#4338ca"></circle><circle cx="90.3333" cy="16" r="1.66667" transform="rotate(180 90.3333 16)" fill="#4338ca"></circle><circle cx="90.3333" cy="59" r="1.66667" transform="rotate(180 90.3333 59)" fill="#4338ca"></circle><circle cx="90.3333" cy="30.6666" r="1.66667" transform="rotate(180 90.3333 30.6666)" fill="#4338ca"></circle><circle cx="90.3333" cy="1.66665" r="1.66667" transform="rotate(180 90.3333 1.66665)" fill="#4338ca"></circle><circle cx="75.6654" cy="132" r="1.66667" transform="rotate(180 75.6654 132)" fill="#4338ca"></circle><circle cx="31.9993" cy="132" r="1.66667" transform="rotate(180 31.9993 132)" fill="#4338ca"></circle><circle cx="75.6654" cy="117.333" r="1.66667" transform="rotate(180 75.6654 117.333)" fill="#4338ca"></circle><circle cx="31.9993" cy="117.333" r="1.66667" transform="rotate(180 31.9993 117.333)" fill="#4338ca"></circle><circle cx="75.6654" cy="102.667" r="1.66667" transform="rotate(180 75.6654 102.667)" fill="#4338ca"></circle><circle cx="31.9993" cy="102.667" r="1.66667" transform="rotate(180 31.9993 102.667)" fill="#4338ca"></circle><circle cx="75.6654" cy="88" r="1.66667" transform="rotate(180 75.6654 88)" fill="#4338ca"></circle><circle cx="31.9993" cy="88" r="1.66667" transform="rotate(180 31.9993 88)" fill="#4338ca"></circle><circle cx="75.6654" cy="73.3333" r="1.66667" transform="rotate(180 75.6654 73.3333)" fill="#4338ca"></circle><circle cx="31.9993" cy="73.3333" r="1.66667" transform="rotate(180 31.9993 73.3333)" fill="#4338ca"></circle><circle cx="75.6654" cy="45" r="1.66667" transform="rotate(180 75.6654 45)" fill="#4338ca"></circle><circle cx="31.9993" cy="45" r="1.66667" transform="rotate(180 31.9993 45)" fill="#4338ca"></circle><circle cx="75.6654" cy="16" r="1.66667" transform="rotate(180 75.6654 16)" fill="#4338ca"></circle><circle cx="31.9993" cy="16" r="1.66667" transform="rotate(180 31.9993 16)" fill="#4338ca"></circle><circle cx="75.6654" cy="59" r="1.66667" transform="rotate(180 75.6654 59)" fill="#4338ca"></circle><circle cx="31.9993" cy="59" r="1.66667" transform="rotate(180 31.9993 59)" fill="#4338ca"></circle><circle cx="75.6654" cy="30.6666" r="1.66667" transform="rotate(180 75.6654 30.6666)" fill="#4338ca"></circle><circle cx="31.9993" cy="30.6666" r="1.66667" transform="rotate(180 31.9993 30.6666)" fill="#4338ca"></circle><circle cx="75.6654" cy="1.66665" r="1.66667" transform="rotate(180 75.6654 1.66665)" fill="#4338ca"></circle><circle cx="31.9993" cy="1.66665" r="1.66667" transform="rotate(180 31.9993 1.66665)" fill="#4338ca"></circle><circle cx="60.9993" cy="132" r="1.66667" transform="rotate(180 60.9993 132)" fill="#4338ca"></circle><circle cx="17.3333" cy="132" r="1.66667" transform="rotate(180 17.3333 132)" fill="#4338ca"></circle><circle cx="60.9993" cy="117.333" r="1.66667" transform="rotate(180 60.9993 117.333)" fill="#4338ca"></circle><circle cx="17.3333" cy="117.333" r="1.66667" transform="rotate(180 17.3333 117.333)" fill="#4338ca"></circle><circle cx="60.9993" cy="102.667" r="1.66667" transform="rotate(180 60.9993 102.667)" fill="#4338ca"></circle><circle cx="17.3333" cy="102.667" r="1.66667" transform="rotate(180 17.3333 102.667)" fill="#4338ca"></circle><circle cx="60.9993" cy="88" r="1.66667" transform="rotate(180 60.9993 88)" fill="#4338ca"></circle><circle cx="17.3333" cy="88" r="1.66667" transform="rotate(180 17.3333 88)" fill="#4338ca"></circle><circle cx="60.9993" cy="73.3333" r="1.66667" transform="rotate(180 60.9993 73.3333)" fill="#4338ca"></circle><circle cx="17.3333" cy="73.3333" r="1.66667" transform="rotate(180 17.3333 73.3333)" fill="#4338ca"></circle><circle cx="60.9993" cy="45" r="1.66667" transform="rotate(180 60.9993 45)" fill="#4338ca"></circle><circle cx="17.3333" cy="45" r="1.66667" transform="rotate(180 17.3333 45)" fill="#4338ca"></circle><circle cx="60.9993" cy="16" r="1.66667" transform="rotate(180 60.9993 16)" fill="#4338ca"></circle><circle cx="17.3333" cy="16" r="1.66667" transform="rotate(180 17.3333 16)" fill="#4338ca"></circle><circle cx="60.9993" cy="59" r="1.66667" transform="rotate(180 60.9993 59)" fill="#4338ca"></circle><circle cx="17.3333" cy="59" r="1.66667" transform="rotate(180 17.3333 59)" fill="#4338ca"></circle><circle cx="60.9993" cy="30.6666" r="1.66667" transform="rotate(180 60.9993 30.6666)" fill="#4338ca"></circle><circle cx="17.3333" cy="30.6666" r="1.66667" transform="rotate(180 17.3333 30.6666)" fill="#4338ca"></circle><circle cx="60.9993" cy="1.66665" r="1.66667" transform="rotate(180 60.9993 1.66665)" fill="#4338ca"></circle><circle cx="17.3333" cy="1.66665" r="1.66667" transform="rotate(180 17.3333 1.66665)" fill="#4338ca"></circle><circle cx="46.3333" cy="132" r="1.66667" transform="rotate(180 46.3333 132)" fill="#4338ca"></circle><circle cx="2.66536" cy="132" r="1.66667" transform="rotate(180 2.66536 132)" fill="#4338ca"></circle><circle cx="46.3333" cy="117.333" r="1.66667" transform="rotate(180 46.3333 117.333)" fill="#4338ca"></circle><circle cx="2.66536" cy="117.333" r="1.66667" transform="rotate(180 2.66536 117.333)" fill="#4338ca"></circle><circle cx="46.3333" cy="102.667" r="1.66667" transform="rotate(180 46.3333 102.667)" fill="#4338ca"></circle><circle cx="2.66536" cy="102.667" r="1.66667" transform="rotate(180 2.66536 102.667)" fill="#4338ca"></circle><circle cx="46.3333" cy="88" r="1.66667" transform="rotate(180 46.3333 88)" fill="#4338ca"></circle><circle cx="2.66536" cy="88" r="1.66667" transform="rotate(180 2.66536 88)" fill="#4338ca"></circle><circle cx="46.3333" cy="73.3333" r="1.66667" transform="rotate(180 46.3333 73.3333)" fill="#4338ca"></circle><circle cx="2.66536" cy="73.3333" r="1.66667" transform="rotate(180 2.66536 73.3333)" fill="#4338ca"></circle><circle cx="46.3333" cy="45" r="1.66667" transform="rotate(180 46.3333 45)" fill="#4338ca"></circle><circle cx="2.66536" cy="45" r="1.66667" transform="rotate(180 2.66536 45)" fill="#4338ca"></circle><circle cx="46.3333" cy="16" r="1.66667" transform="rotate(180 46.3333 16)" fill="#4338ca"></circle><circle cx="2.66536" cy="16" r="1.66667" transform="rotate(180 2.66536 16)" fill="#4338ca"></circle><circle cx="46.3333" cy="59" r="1.66667" transform="rotate(180 46.3333 59)" fill="#4338ca"></circle><circle cx="2.66536" cy="59" r="1.66667" transform="rotate(180 2.66536 59)" fill="#4338ca"></circle><circle cx="46.3333" cy="30.6666" r="1.66667" transform="rotate(180 46.3333 30.6666)" fill="#4338ca"></circle><circle cx="2.66536" cy="30.6666" r="1.66667" transform="rotate(180 2.66536 30.6666)" fill="#4338ca"></circle><circle cx="46.3333" cy="1.66665" r="1.66667" transform="rotate(180 46.3333 1.66665)" fill="#4338ca"></circle><circle cx="2.66536" cy="1.66665" r="1.66667" transform="rotate(180 2.66536 1.66665)" fill="#4338ca"></circle></svg>
            </span>
            <span class="absolute -bottom-7 -left-7 z-[-1]">
             <svg width="107" height="134" viewBox="0 0 107 134" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="104.999" cy="132" r="1.66667" transform="rotate(180 104.999 132)" fill="#4338ca"></circle><circle cx="104.999" cy="117.333" r="1.66667" transform="rotate(180 104.999 117.333)" fill="#4338ca"></circle><circle cx="104.999" cy="102.667" r="1.66667" transform="rotate(180 104.999 102.667)" fill="#4338ca"></circle><circle cx="104.999" cy="88" r="1.66667" transform="rotate(180 104.999 88)" fill="#4338ca"></circle><circle cx="104.999" cy="73.3333" r="1.66667" transform="rotate(180 104.999 73.3333)" fill="#4338ca"></circle><circle cx="104.999" cy="45" r="1.66667" transform="rotate(180 104.999 45)" fill="#4338ca"></circle><circle cx="104.999" cy="16" r="1.66667" transform="rotate(180 104.999 16)" fill="#4338ca"></circle><circle cx="104.999" cy="59" r="1.66667" transform="rotate(180 104.999 59)" fill="#4338ca"></circle><circle cx="104.999" cy="30.6666" r="1.66667" transform="rotate(180 104.999 30.6666)" fill="#4338ca"></circle><circle cx="104.999" cy="1.66665" r="1.66667" transform="rotate(180 104.999 1.66665)" fill="#4338ca"></circle><circle cx="90.3333" cy="132" r="1.66667" transform="rotate(180 90.3333 132)" fill="#4338ca"></circle><circle cx="90.3333" cy="117.333" r="1.66667" transform="rotate(180 90.3333 117.333)" fill="#4338ca"></circle><circle cx="90.3333" cy="102.667" r="1.66667" transform="rotate(180 90.3333 102.667)" fill="#4338ca"></circle><circle cx="90.3333" cy="88" r="1.66667" transform="rotate(180 90.3333 88)" fill="#4338ca"></circle><circle cx="90.3333" cy="73.3333" r="1.66667" transform="rotate(180 90.3333 73.3333)" fill="#4338ca"></circle><circle cx="90.3333" cy="45" r="1.66667" transform="rotate(180 90.3333 45)" fill="#4338ca"></circle><circle cx="90.3333" cy="16" r="1.66667" transform="rotate(180 90.3333 16)" fill="#4338ca"></circle><circle cx="90.3333" cy="59" r="1.66667" transform="rotate(180 90.3333 59)" fill="#4338ca"></circle><circle cx="90.3333" cy="30.6666" r="1.66667" transform="rotate(180 90.3333 30.6666)" fill="#4338ca"></circle><circle cx="90.3333" cy="1.66665" r="1.66667" transform="rotate(180 90.3333 1.66665)" fill="#4338ca"></circle><circle cx="75.6654" cy="132" r="1.66667" transform="rotate(180 75.6654 132)" fill="#4338ca"></circle><circle cx="31.9993" cy="132" r="1.66667" transform="rotate(180 31.9993 132)" fill="#4338ca"></circle><circle cx="75.6654" cy="117.333" r="1.66667" transform="rotate(180 75.6654 117.333)" fill="#4338ca"></circle><circle cx="31.9993" cy="117.333" r="1.66667" transform="rotate(180 31.9993 117.333)" fill="#4338ca"></circle><circle cx="75.6654" cy="102.667" r="1.66667" transform="rotate(180 75.6654 102.667)" fill="#4338ca"></circle><circle cx="31.9993" cy="102.667" r="1.66667" transform="rotate(180 31.9993 102.667)" fill="#4338ca"></circle><circle cx="75.6654" cy="88" r="1.66667" transform="rotate(180 75.6654 88)" fill="#4338ca"></circle><circle cx="31.9993" cy="88" r="1.66667" transform="rotate(180 31.9993 88)" fill="#4338ca"></circle><circle cx="75.6654" cy="73.3333" r="1.66667" transform="rotate(180 75.6654 73.3333)" fill="#4338ca"></circle><circle cx="31.9993" cy="73.3333" r="1.66667" transform="rotate(180 31.9993 73.3333)" fill="#4338ca"></circle><circle cx="75.6654" cy="45" r="1.66667" transform="rotate(180 75.6654 45)" fill="#4338ca"></circle><circle cx="31.9993" cy="45" r="1.66667" transform="rotate(180 31.9993 45)" fill="#4338ca"></circle><circle cx="75.6654" cy="16" r="1.66667" transform="rotate(180 75.6654 16)" fill="#4338ca"></circle><circle cx="31.9993" cy="16" r="1.66667" transform="rotate(180 31.9993 16)" fill="#4338ca"></circle><circle cx="75.6654" cy="59" r="1.66667" transform="rotate(180 75.6654 59)" fill="#4338ca"></circle><circle cx="31.9993" cy="59" r="1.66667" transform="rotate(180 31.9993 59)" fill="#4338ca"></circle><circle cx="75.6654" cy="30.6666" r="1.66667" transform="rotate(180 75.6654 30.6666)" fill="#4338ca"></circle><circle cx="31.9993" cy="30.6666" r="1.66667" transform="rotate(180 31.9993 30.6666)" fill="#4338ca"></circle><circle cx="75.6654" cy="1.66665" r="1.66667" transform="rotate(180 75.6654 1.66665)" fill="#4338ca"></circle><circle cx="31.9993" cy="1.66665" r="1.66667" transform="rotate(180 31.9993 1.66665)" fill="#4338ca"></circle><circle cx="60.9993" cy="132" r="1.66667" transform="rotate(180 60.9993 132)" fill="#4338ca"></circle><circle cx="17.3333" cy="132" r="1.66667" transform="rotate(180 17.3333 132)" fill="#4338ca"></circle><circle cx="60.9993" cy="117.333" r="1.66667" transform="rotate(180 60.9993 117.333)" fill="#4338ca"></circle><circle cx="17.3333" cy="117.333" r="1.66667" transform="rotate(180 17.3333 117.333)" fill="#4338ca"></circle><circle cx="60.9993" cy="102.667" r="1.66667" transform="rotate(180 60.9993 102.667)" fill="#4338ca"></circle><circle cx="17.3333" cy="102.667" r="1.66667" transform="rotate(180 17.3333 102.667)" fill="#4338ca"></circle><circle cx="60.9993" cy="88" r="1.66667" transform="rotate(180 60.9993 88)" fill="#4338ca"></circle><circle cx="17.3333" cy="88" r="1.66667" transform="rotate(180 17.3333 88)" fill="#4338ca"></circle><circle cx="60.9993" cy="73.3333" r="1.66667" transform="rotate(180 60.9993 73.3333)" fill="#4338ca"></circle><circle cx="17.3333" cy="73.3333" r="1.66667" transform="rotate(180 17.3333 73.3333)" fill="#4338ca"></circle><circle cx="60.9993" cy="45" r="1.66667" transform="rotate(180 60.9993 45)" fill="#4338ca"></circle><circle cx="17.3333" cy="45" r="1.66667" transform="rotate(180 17.3333 45)" fill="#4338ca"></circle><circle cx="60.9993" cy="16" r="1.66667" transform="rotate(180 60.9993 16)" fill="#4338ca"></circle><circle cx="17.3333" cy="16" r="1.66667" transform="rotate(180 17.3333 16)" fill="#4338ca"></circle><circle cx="60.9993" cy="59" r="1.66667" transform="rotate(180 60.9993 59)" fill="#4338ca"></circle><circle cx="17.3333" cy="59" r="1.66667" transform="rotate(180 17.3333 59)" fill="#4338ca"></circle><circle cx="60.9993" cy="30.6666" r="1.66667" transform="rotate(180 60.9993 30.6666)" fill="#4338ca"></circle><circle cx="17.3333" cy="30.6666" r="1.66667" transform="rotate(180 17.3333 30.6666)" fill="#4338ca"></circle><circle cx="60.9993" cy="1.66665" r="1.66667" transform="rotate(180 60.9993 1.66665)" fill="#4338ca"></circle><circle cx="17.3333" cy="1.66665" r="1.66667" transform="rotate(180 17.3333 1.66665)" fill="#4338ca"></circle><circle cx="46.3333" cy="132" r="1.66667" transform="rotate(180 46.3333 132)" fill="#4338ca"></circle><circle cx="2.66536" cy="132" r="1.66667" transform="rotate(180 2.66536 132)" fill="#4338ca"></circle><circle cx="46.3333" cy="117.333" r="1.66667" transform="rotate(180 46.3333 117.333)" fill="#4338ca"></circle><circle cx="2.66536" cy="117.333" r="1.66667" transform="rotate(180 2.66536 117.333)" fill="#4338ca"></circle><circle cx="46.3333" cy="102.667" r="1.66667" transform="rotate(180 46.3333 102.667)" fill="#4338ca"></circle><circle cx="2.66536" cy="102.667" r="1.66667" transform="rotate(180 2.66536 102.667)" fill="#4338ca"></circle><circle cx="46.3333" cy="88" r="1.66667" transform="rotate(180 46.3333 88)" fill="#4338ca"></circle><circle cx="2.66536" cy="88" r="1.66667" transform="rotate(180 2.66536 88)" fill="#4338ca"></circle><circle cx="46.3333" cy="73.3333" r="1.66667" transform="rotate(180 46.3333 73.3333)" fill="#4338ca"></circle><circle cx="2.66536" cy="73.3333" r="1.66667" transform="rotate(180 2.66536 73.3333)" fill="#4338ca"></circle><circle cx="46.3333" cy="45" r="1.66667" transform="rotate(180 46.3333 45)" fill="#4338ca"></circle><circle cx="2.66536" cy="45" r="1.66667" transform="rotate(180 2.66536 45)" fill="#4338ca"></circle><circle cx="46.3333" cy="16" r="1.66667" transform="rotate(180 46.3333 16)" fill="#4338ca"></circle><circle cx="2.66536" cy="16" r="1.66667" transform="rotate(180 2.66536 16)" fill="#4338ca"></circle><circle cx="46.3333" cy="59" r="1.66667" transform="rotate(180 46.3333 59)" fill="#4338ca"></circle><circle cx="2.66536" cy="59" r="1.66667" transform="rotate(180 2.66536 59)" fill="#4338ca"></circle><circle cx="46.3333" cy="30.6666" r="1.66667" transform="rotate(180 46.3333 30.6666)" fill="#4338ca"></circle><circle cx="2.66536" cy="30.6666" r="1.66667" transform="rotate(180 2.66536 30.6666)" fill="#4338ca"></circle><circle cx="46.3333" cy="1.66665" r="1.66667" transform="rotate(180 46.3333 1.66665)" fill="#4338ca"></circle><circle cx="2.66536" cy="1.66665" r="1.66667" transform="rotate(180 2.66536 1.66665)" fill="#4338ca"></circle></svg>
            </span>
          </div>
        </div>
      </div>

      <!-- Contact Information -->
      <div class="order-1 w-full px-4 lg:order-2 lg:w-1/2 xl:w-6/12">
        <div class="mb-12 px-5 pt-3 sm:max-w-[570px] lg:mb-0">
          <span class="mb-4 block text-base font-semibold text-orange-500">
            Contacts
          </span>
          <h2
            class="mb-6 text-[32px] font-bold uppercase sm:text-[40px] lg:text-[36px] xl:text-[40px]"
          >
            Contact with us
          </h2>
          <p class="text-base leading-relaxed">
            If you have any question and feedback contact with us
          </p>
          <p class="mb-9 text-base leading-relaxed">
            We’d love to help you with all of your outsourcing needs. To find out more about our services or get a quote.
          </p>

          <!-- Phone -->
          <div class="mb-8 flex w-full max-w-[330px] gap-3">
            <div
              class="mr-6 flex h-[40px] w-full max-w-[40px] items-center justify-center overflow-hidden rounded-sm bg-orange-500/10 dark:bg-orange-400/10 text-orange-500 dark:text-orange-400 sm:h-[70px] sm:max-w-[70px]"
            >
              <i class="fas fa-phone text-xl"></i>
            </div>
            <div class="w-full">
              <h4 class="mb-1 text-base sm:text-xl font-bold">Phone Number</h4>
              <p class="text-xs sm:text-base">+1 805 708 5656</p>
            </div>
          </div>

          <!-- Email -->
          <div class="mb-8 flex w-full max-w-[330px] gap-3">
            <div
              class="mr-6 flex h-[40px] w-full max-w-[40px] items-center justify-center overflow-hidden rounded-sm bg-orange-500/10 dark:bg-orange-400/10 text-orange-500 dark:text-orange-400 sm:h-[70px] sm:max-w-[70px]"
            >
              <i class="fas fa-envelope text-xl"></i>
            </div>
            <div class="w-full">
              <h4 class="mb-1 text-base sm:text-xl font-bold">Email Address</h4>
              <p class="text-xs sm:text-base">support.azpired.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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