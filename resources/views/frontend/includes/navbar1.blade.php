<nav class="relative px-2 py-4 bg-slate-100 shadow-lg ">
      
    <div class="container mx-auto flex justify-between items-center">
        <img src="img/vilogo.png" alt="Varni Infoweb">

        <ul class="hidden md:flex space-x-6">
          <li><a href="{{ route('frontend.index') }}"
            class="text-gray-600 border-transparent border-b-2 hover:border-orange-600 px-3 py-2 text-base font-medium transition ease-out duration-300">
            Home
        </a></li>
          
          <li class="flex relative group">
            <a href="#" class="mr-1 text-base font-medium">About Us</a> 
            <i class="fa-solid fa-chevron-down fa-2xs pt-3"></i>
            <!-- Submenu starts -->
            <ul class="absolute bg-white p-3 w-52 top-6 transform scale-0 group-hover:scale-100 transition duration-150 ease-in-out origin-top shadow-lg">
              <li class="text-sm hover:bg-slate-100 leading-8"><a href="#">Our Company</a></li>
              <li class="text-sm hover:bg-slate-100 leading-8"><a href="#">Our Vision</a></li>
              <li class="text-sm hover:bg-slate-100 leading-8"><a href="#">SEO</a></li>
              <li class="text-sm hover:bg-slate-100 leading-8"><a href="#">Ad campaigns</a></li>
              <li class="text-sm hover:bg-slate-100 leading-8"><a href="#">UX Design</a></li>
            </ul>
            <!-- Submenu ends -->
          </li>
          <li class="flex relative group">
            <a href="#" class="mr-1 text-base font-medium">Services</a> 
            <i class="fa-solid fa-chevron-down fa-2xs pt-3"></i>
            <!-- Submenu starts -->
            <ul class="absolute bg-white p-3 w-52 top-6 transform scale-0 group-hover:scale-100 transition duration-150 ease-in-out origin-top shadow-lg">
              <li class="text-sm hover:bg-slate-100 leading-8"><a href="#">Webdesign</a></li>
              <li class="text-sm hover:bg-slate-100 leading-8"><a href="#">Digital marketing</a></li>
              <li class="text-sm hover:bg-slate-100 leading-8"><a href="#">SEO</a></li>
              <li class="text-sm hover:bg-slate-100 leading-8"><a href="#">Ad campaigns</a></li>
              <li class="text-sm hover:bg-slate-100 leading-8"><a href="#">UX Design</a></li>
            </ul>
            <!-- Submenu ends -->

            <li> <a href="{{ route('frontend.portfolio') }}"
              class="text-gray-600 border-transparent border-b-2 hover:border-orange-600 px-3 py-2 text-base font-medium transition ease-out duration-300">
              Portfolio
          </a></li>
          
          </li>
          <li><a href="{{ route('frontend.contact') }}"
            class="text-gray-600 border-transparent border-b-2 hover:border-orange-600 px-3 py-2 text-base font-medium transition ease-out duration-300">
            Contact Us
        </a></li>
          

      
      <!-- Mobile menu icon -->
      <button id="mobile-icon" class="md:hidden">
        <i onclick="changeIcon(this)" class="fa-solid fa-bars"></i>
      </button>
      
      </div>
    
    <!-- Mobile menu -->
    <div class="md:hidden flex justify-center mt-3 w-full">
      <div id="mobile-menu" class="mobile-menu absolute top-23 w-full"> <!-- add hidden here later -->
        <ul class="bg-gray-100 shadow-lg leading-9 font-bold h-screen">
          <li class="border-b-2 border-white hover:bg-red-400 hover:text-white pl-4"><a href="https://google.com" class="block pl-7">Home</a></li>
          <li class="border-b-2 border-white hover:bg-red-400 hover:text-white pl-4"><a href="#" class="block pl-7">News</a></li>
          <li class="border-b-2 border-white hover:bg-red-400 hover:text-white">
            <a href="#" class="block pl-11">Services <i class="fa-solid fa-chevron-down fa-2xs pt-4"></i></a> 
            
            <!-- Submenu starts -->
            <ul class="bg-white text-gray-800 w-full">
              <li class="text-sm leading-8 font-normal hover:bg-slate-200"><a class="block pl-16" href="#">Webdesign</a></li>
              <li class="text-sm leading-8 font-normal hover:bg-slate-200"><a class="block pl-16" href="#">Digital marketing</a></li>
              <li class="text-sm leading-8 font-normal hover:bg-slate-200"><a class="block pl-16" href="#">SEO</a></li>
              <li class="text-sm leading-8 font-normal hover:bg-slate-200"><a class="block pl-16" href="#">Ad campaigns</a></li>
              <li class="text-sm leading-8 font-normal hover:bg-slate-200"><a class="block pl-16" href="#">UX Design</a></li>
            </ul>
            <!-- Submenu ends -->
          </li>
          <li class="border-b-2 border-white hover:bg-red-400 hover:text-white pl-4"><a href="#" class="block pl-7">About</a></li>
          <li class="border-b-2 border-white hover:bg-red-400 hover:text-white pl-4"><a href="#" class="block pl-7">Contact</a></li>
        </ul>
        </div>
    </div>

  </nav>