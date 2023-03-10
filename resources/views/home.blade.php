<x-app-layout title="Home">

  <x-section id="hero" class="hero">
    <div class="container flex items-center mx-auto max-sm:flex-col">
      <div class="text-center max-sm:order-2">
        <h1 class="text-3xl font-bold max-sm:text-xl dark:text-gray-100">Skybal > The best solutions for your Business</h1>
        <p class="capitalize max-sm:text-xs dark:text-gray-400">We are a company that manufactures web software, desktop software, mobile app software, and all accounting software</p>
        <div class="flex justify-center mt-3 space-x-5">
          <button type="button" class="px-5 py-2 bg-gray-700 dark:hover:bg-transparent hover:bg-gray-900 text-fuchsia-500 dark:bg-white dark:text-fuchsia-700 outline outline-2 outline-offset-1 rounded-3xl">Get Started</button>
          <button type="button" class="flex items-center px-5 py-1 text-fuchsia-500 dark:text-white hover:bg-gray-50 dark:hover:bg-white dark:hover:text-gray-900 transition-al outline outline-2 outline-offset-1 rounded-3xl">Watch Video</button>
        </div>
      </div>
      <div class="flex items-center justify-center mt-0 text-center">
        <img src={{ Vite::asset('resources/image/logo.svg') }} alt="" class="w-full h-auto max-sm:w-3/5 dark:invert-[95%]" />
      </div>
    </div>
  </x-section>


  <x-section id="clients" class="clients">
    <div class="grid items-center grid-cols-6 max-sm:grid-cols-3 container mx-auto rounded-b-2xl bg-[#e5eaff] dark:bg-[#0b101d] border-b border-fuchsia-600 overflow-hidden">
      @for($i = 1; $i < 7; $i++) <div class="text-center cursor-pointer">
        <img src={{ Vite::asset("resources/image/clients/client-$i.png") }} class="h-auto" alt="" />
    </div>
    @endfor
    </div>
  </x-section>


  <x-section id="services" class="services">
    <div class="container mx-auto my-16">

      <div class="text-center">
        <h1 class="text-3xl font-bold py-2 dark:text-white decoration-slice underline underline-offset-[5px] decoration-fuchsia-700" data-aos="fade-up" data-aos-delay="200">SERVICES</h1>
        <p class="text-gray-700 capitalize dark:text-gray-300" data-aos="fade-down">We always care about our services, whether it is software, hardware, hardware or software maintenance.</p>
      </div>

      <div class="mt-5 grid grid-cols-4 gap-10 max-lg:gap-3 max-sm:grid-cols-2 max-lg:grid-cols-3 max-lg:px-[3%]">

        <div class="transition-all duration-300 hover:-translate-y-6 hover:text-fuchsia-600">
          <div class="h-full p-5 border shadow-md bg-gray-50 dark:bg-gray-800 shadow-fuchsia-700 rounded-xl border-fuchsia-600" data-aos="fade-left" data-aos-delay="250">
            <h1 class="text-xl dark:text-white">POS Software</h1>
            <p class="text-gray-700 dark:text-gray-300">Point of Sale system (Web Applications, DeskTop Applications, Mobile App)</p>
          </div>
        </div>

        <div class="transition-all duration-300 hover:-translate-y-6 hover:text-fuchsia-600">
          <div class="h-full p-5 border shadow-md bg-gray-50 dark:bg-gray-800 shadow-fuchsia-700 rounded-xl border-fuchsia-600" data-aos="fade-right" data-aos-delay="400">
            <h1 class="text-xl dark:text-white">POS Hardware</h1>
            <p class="text-gray-700 dark:text-gray-300">Selling all kinds of POS devices (printers, scanners, printer, PC, all one..)</p>
          </div>
        </div>

        <div class="transition-all duration-300 hover:-translate-y-6 hover:text-fuchsia-600">
          <div class="h-full p-5 border shadow-md bg-gray-50 dark:bg-gray-800 shadow-fuchsia-700 rounded-xl border-fuchsia-600" data-aos="fade-left" data-aos-delay="400">
            <h1 class="text-xl dark:text-white">Maintenance</h1>
            <p class="text-gray-700 dark:text-gray-300">Immediate maintenance for all faults, whether they are software or hardware or App</p>
          </div>
        </div>

        <div class="transition-all duration-300 hover:-translate-y-6 hover:text-fuchsia-600">
          <div class="h-full p-5 border shadow-md bg-gray-50 dark:bg-gray-800 shadow-fuchsia-700 rounded-xl border-fuchsia-600" data-aos="fade-right" data-aos-delay="250">
            <h1 class="text-xl dark:text-white">Support</h1>
            <p class="text-gray-700 dark:text-gray-300">We always care about after-sales service and always support you all the time</p>
          </div>
        </div>

      </div>
    </div>
  </x-section>


  <x-section id="about" class="about">
    <div class="container mx-auto my-16 overflow-hidden">
      <h1 class="text-3xl text-center font-bold py-2 dark:text-white decoration-slice underline underline-offset-[5px] decoration-fuchsia-700" data-aos="fade-up" data-aos-delay="200">ABOUT US</h1>
      <div class="flex space-x-8 max-sm:block max-sm:space-y-8 max-sm:space-x-3">
        <div class="w-3/6 p-3 max-sm:w-full">
          <h2 class="dark:text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt tempor ut labore et doloreExcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia ulpa qui officia deserunt mollit anim id est laborum. deserunt mollit anim id est laborum.</h2>
          <ul class="mt-5">
            <li class="flex space-x-1 text-gray-700 cursor-default hover:-translate-y-1 dark:text-gray-400 hover:font-bold hover:text-fuchsia-600 dark:hover:text-white" data-aos="fade-left" data-aos-delay="150"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="25" width="25" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path d="M18 7l-1.41-1.41-6.34 6.34 1.41 1.41L18 7zm4.24-1.41L11.66 16.17 7.48 12l-1.41 1.41L11.66 19l12-12-1.42-1.41zM.41 13.41L6 19l1.41-1.41L1.83 12 .41 13.41z"></path>
              </svg>
              <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            </li>
            <li class="flex space-x-1 text-gray-700 cursor-default hover:-translate-y-1 dark:text-gray-400 hover:font-bold hover:text-fuchsia-600 dark:hover:text-white" data-aos="fade-right" data-aos-delay="350"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="25" width="25" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path d="M18 7l-1.41-1.41-6.34 6.34 1.41 1.41L18 7zm4.24-1.41L11.66 16.17 7.48 12l-1.41 1.41L11.66 19l12-12-1.42-1.41zM.41 13.41L6 19l1.41-1.41L1.83 12 .41 13.41z"></path>
              </svg>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit</p>
            </li>
            <li class="flex space-x-1 text-gray-700 cursor-default hover:-translate-y-1 dark:text-gray-400 hover:font-bold hover:text-fuchsia-600 dark:hover:text-white" data-aos="fade-left" data-aos-delay="500"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="25" width="25" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path d="M18 7l-1.41-1.41-6.34 6.34 1.41 1.41L18 7zm4.24-1.41L11.66 16.17 7.48 12l-1.41 1.41L11.66 19l12-12-1.42-1.41zM.41 13.41L6 19l1.41-1.41L1.83 12 .41 13.41z"></path>
              </svg>
              <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            </li>
          </ul>
        </div>

        <div class="p-3 w-3/6 max-sm:w-[93%] max-sm:px-0">
          <p class="dark:text-white">Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
            officia deserunt mollit anim id est laborum.
          </p>
          <button class="px-5 py-2 mt-5 dark:hover:bg-transparent hover:bg-gray-900 text-fuchsia-500 dark:bg-gray-800 dark:text-fuchsia-700 outline outline-2 outline-offset-1 rounded-3xl">
            Learn More
          </button>
        </div>
      </div>
    </div>
  </x-section>


  <x-section id="why-us" class="my-20 bg-white dark:bg-gray-800 border-x-[5px] border-red-600 dark:border-fuchsia-600">
    <div class="flex items-center justify-center mx-20 space-x-8 max-md:mx-3 max-md:flex-col max-md:space-x-0 max-md:space-y-5 overflow-hidden">
      <div class="max-md:order-2">
        <div class="p-3">
          <h3 class="text-3xl max-md:text-xl text-[#37517e] dark:text-gray-50">That we are an <strong>Skybal</strong> company <strong>You acknowledge the undertaking with the following work.</strong></h3>
          <p class="dark:text-gray-300">
            Credibility with the customer, the agreement with the customer, privacy, and customer support
            throughout the week and around the clock is the most important thing that distinguishes us
          </p>
        </div>

        <div id="accordions" class="px-1 max-md:my-5">
          <x-accordion id="1" title="Privacy" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit" />
          <x-accordion id="2" title="Credibility" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit" />
          <x-accordion id="3" title="Agreement" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit" />
        </div>
      </div>

      <div class="overflow-hidden max-md:order-1">
        <img class="" src={{ Vite::asset('resources/image/why-us.png') }} data-aos="zoom-out" data-aos-delay="350" />
      </div>
    </div>
  </x-section>


  <x-section id="categories" class="my-16">
    <div class="container mx-auto w-full">
      <h1 class="text-4xl text-center font-bold py-2 dark:text-white decoration-slice underline underline-offset-[5px] decoration-fuchsia-700" data-aos="fade-up" data-aos-delay="200"><a href={{ route('categories') }} class="transition-all hover:text-3xl">Categories</a></h1>
      <div class="grid grid-cols-4 gap-10 m-4 max-lg:grid-cols-2 max-sm:grid-cols-1">

        <div class="flex flex-col items-center py-8 border border-red-600 shadow-md rounded-xl outline-dotted outline-2 outline-offset-4 outline-gray-800 shadow-red-600">
          <img src={{ Vite::asset('resources/image/clients/client-1.png') }} alt="" class="object-cover border border-red-600 h-[195px] w-[195px] transition-all p-1 rounded-full m-5 hover:border-[3px]" />
          <div class="text-center">
            <h2 class="text-2xl font-bold transition-all cursor-pointer dark:text-white hover:tracking-widest">
              < PC>
            </h2>
            <p class="px-5 text-sm dark:text-gray-300">Lorem ipsum, dolo elit. Ad, iure.consectetur adipisicing elit. Ad, iure.consectetur adipisicing elit. Ad, iure.</p>
            <a type="button" class="outline cursor-pointer outline-2 outline-offset-4 outline-red-700 my-5 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Show More..</a>
          </div>
        </div>

        <div class="flex flex-col items-center py-8 border border-red-600 shadow-md rounded-xl outline-dotted outline-2 outline-offset-4 outline-gray-800 shadow-red-600">
          <img src={{ Vite::asset('resources/image/clients/client-2.png') }} alt="" class="object-cover border border-red-600 h-[195px] w-[195px] transition-all p-1 rounded-full m-5 hover:border-[3px]" />
          <div class="text-center">
            <h2 class="text-2xl font-bold transition-all cursor-pointer dark:text-white hover:tracking-widest">
              < PC>
            </h2>
            <p class="px-5 text-sm dark:text-gray-300">Lorem ipsum, dolo elit. Ad, iure.consectetur adipisicing elit. Ad, iure.consectetur adipisicing elit. Ad, iure.</p>
            <a type="button" class="outline cursor-pointer outline-2 outline-offset-4 outline-red-700 my-5 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Show More..</a>
          </div>
        </div>

        <div class="flex flex-col items-center py-8 border border-red-600 shadow-md rounded-xl outline-dotted outline-2 outline-offset-4 outline-gray-800 shadow-red-600">
          <img src={{ Vite::asset('resources/image/clients/client-3.png') }} alt="" class="object-cover border border-red-600 h-[195px] w-[195px] transition-all p-1 rounded-full m-5 hover:border-[3px]" />
          <div class="text-center">
            <h2 class="text-2xl font-bold transition-all cursor-pointer dark:text-white hover:tracking-widest">
              < PC>
            </h2>
            <p class="px-5 text-sm dark:text-gray-300">Lorem ipsum, dolo elit. Ad, iure.consectetur adipisicing elit. Ad, iure.consectetur adipisicing elit. Ad, iure.</p>
            <a type="button" class="outline cursor-pointer outline-2 outline-offset-4 outline-red-700 my-5 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Show More..</a>
          </div>
        </div>

      </div>
      <div class="my-10 text-center">
        <a href={{ route('categories') }} class="px-2 py-3 text-xl font-semibold transition-all bg-white rounded-xl hover:bg-slate-50">Show All Categories</a>
      </div>
    </div>
  </x-section>


  <x-section id="skills" class="my-20 max-md:my-0 py-5 bg-white dark:bg-body-dark border-x-[5px] border-fuchsia-600 dark:border-red-600">
    <div class="flex items-center justify-center mx-20 space-x-8 max-md:mx-3 max-lg:flex-col max-md:space-x-0 max-md:space-y-5">

      <div class="flex justify-center xl:w-[60%] min-lg:w-[20%] overflow-hidden">
        <img src={{ Vite::asset('resources/image/skills.png') }} class="w-auto h-auto rounded-2xl" data-aos="zoom-out" data-aos-delay="300" />
      </div>

      <div class="m-16">

        <div class="font-normal">
          <h3 class="text-3xl max-md:text-xl text-[#37517e] dark:text-gray-50">The company's programming skills</h3>
          <p class="dark:text-gray-300">To make your own program, the company uses some or both of these skills.</p>
        </div>

        <div class="mt-5 space-y-5">
          @for($i = 0; $i < 10; $i++) <div class="transition-all cursor-pointer hover:scale-105">
            <div class="flex justify-between">
              <div class="flex items-center mb-1 space-x-3 text-base font-medium dark:text-white" data-aos="fade-right" data-aos-delay="300">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z"></path>
                </svg>
                <h3>JAVASCRIPT</h3>
              </div>
              <div class="mb-1 text-base font-medium dark:text-white" data-aos="fade-left" data-aos-delay="350">{{ $i*10 }}%</div>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-1.5 mb-4 dark:bg-gray-700" data-aos="fade-left">
              <div class="bg-red-600 h-1.5 rounded-full dark:bg-fuchsia-500" style="width: {{ $i*10 }}%"></div>
            </div>
        </div>
        @endfor
      </div>
    </div>
    </div>
  </x-section>


  <x-section id="contact" class="my-20 p-10">
    <div class="container mx-auto">
      <div class="flex flex-wrap  lg:justify-between">
        <div class="w-full px-4 lg:w-1/2 xl:w-6/12">
          <div class="mb-12 max-w-[570px] lg:mb-0 max-sm:mx-3 dark:text-white">
            <span class="block mb-4 text-base font-semibold text-primary" data-aos="fade-right">
              Contact Us
            </span>
            <h2 class="text-dark mb-6 text-[32px] font-bold uppercase sm:text-[40px] lg:text-[36px] xl:text-[40px]" data-aos="fade-up">
              GET IN TOUCH WITH US
            </h2>
            <p class="text-base leading-relaxed text-body-color mb-9 dark:text-gray-100`                                                                                                                                                                                                                                                                                                q" data-aos="fade-down">
              مرحبا نحن شركه للانشاء اي برنامج سوفت وير هارد وير اي حاجه احنا معاك فيه حضرتك اهم حاجه عندنا راحه فخاد حضرتك ف هل انت مبسوط ؟
            </p>
            <div class="mb-8 flex w-full max-w-[370px]">
              <div class="bg-primary text-primary mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center rounded bg-opacity-5 sm:h-[70px] sm:max-w-[70px]">
                <svg width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                  <path d="M21.8182 24H16.5584C15.3896 24 14.4156 23.0256 14.4156 21.8563V17.5688C14.4156 17.1401 14.0649 16.7893 13.6364 16.7893H10.4026C9.97403 16.7893 9.62338 17.1401 9.62338 17.5688V21.8173C9.62338 22.9866 8.64935 23.961 7.48052 23.961H2.14286C0.974026 23.961 0 22.9866 0 21.8173V8.21437C0 7.62972 0.311688 7.08404 0.818182 6.77223L11.1039 0.263094C11.6494 -0.0876979 12.3896 -0.0876979 12.9351 0.263094L23.2208 6.77223C23.7273 7.08404 24 7.62972 24 8.21437V21.7783C24 23.0256 23.026 24 21.8182 24ZM10.3636 15.4251H13.5974C14.7662 15.4251 15.7403 16.3995 15.7403 17.5688V21.8173C15.7403 22.246 16.0909 22.5968 16.5195 22.5968H21.8182C22.2468 22.5968 22.5974 22.246 22.5974 21.8173V8.25335C22.5974 8.13642 22.5195 8.01949 22.4416 7.94153L12.1948 1.4324C12.0779 1.35445 11.9221 1.35445 11.8442 1.4324L1.55844 7.94153C1.44156 8.01949 1.4026 8.13642 1.4026 8.25335V21.8563C1.4026 22.285 1.75325 22.6358 2.18182 22.6358H7.48052C7.90909 22.6358 8.25974 22.285 8.25974 21.8563V17.5688C8.22078 16.3995 9.19481 15.4251 10.3636 15.4251Z" />
                </svg>
              </div>
              <div class="w-full">
                <h4 class="mb-1 text-xl font-bold text-dark">Our Location</h4>
                <p class="text-base text-body-color">
                  6 شارع السلام مطاريه معتمديه
                </p>
              </div>
            </div>
            <div class="mb-8 flex w-full max-w-[370px]">
              <div class="bg-primary text-primary mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center rounded bg-opacity-5 sm:h-[70px] sm:max-w-[70px]">
                <svg width="24" height="26" viewBox="0 0 24 26" class="fill-current">
                  <path d="M22.6149 15.1386C22.5307 14.1704 21.7308 13.4968 20.7626 13.4968H2.82869C1.86042 13.4968 1.10265 14.2125 0.97636 15.1386L0.092295 23.9793C0.0501967 24.4845 0.21859 25.0317 0.555377 25.4106C0.892163 25.7895 1.39734 26 1.94462 26H21.6887C22.1939 26 22.6991 25.7895 23.078 25.4106C23.4148 25.0317 23.5832 24.5266 23.5411 23.9793L22.6149 15.1386ZM21.9413 24.4424C21.8992 24.4845 21.815 24.5687 21.6466 24.5687H1.94462C1.81833 24.5687 1.69203 24.4845 1.64993 24.4424C1.60783 24.4003 1.52364 24.3161 1.56574 24.1477L2.4498 15.2649C2.4498 15.0544 2.61819 14.9281 2.82869 14.9281H20.8047C21.0152 14.9281 21.1415 15.0544 21.1835 15.2649L22.0676 24.1477C22.0255 24.274 21.9834 24.4003 21.9413 24.4424Z" />
                  <path d="M11.7965 16.7805C10.1547 16.7805 8.84961 18.0855 8.84961 19.7273C8.84961 21.3692 10.1547 22.6742 11.7965 22.6742C13.4383 22.6742 14.7434 21.3692 14.7434 19.7273C14.7434 18.0855 13.4383 16.7805 11.7965 16.7805ZM11.7965 21.2008C10.9966 21.2008 10.3231 20.5272 10.3231 19.7273C10.3231 18.9275 10.9966 18.2539 11.7965 18.2539C12.5964 18.2539 13.2699 18.9275 13.2699 19.7273C13.2699 20.5272 12.5964 21.2008 11.7965 21.2008Z" />
                  <path d="M1.10265 7.85562C1.18684 9.70794 2.82868 10.4657 3.67064 10.4657H6.61752C6.65962 10.4657 6.65962 10.4657 6.65962 10.4657C7.92257 10.3815 9.18552 9.53955 9.18552 7.85562V6.84526C10.5748 6.84526 13.7742 6.84526 15.1635 6.84526V7.85562C15.1635 9.53955 16.4264 10.3815 17.6894 10.4657H17.7315H20.6363C21.4782 10.4657 23.1201 9.70794 23.2043 7.85562C23.2043 7.72932 23.2043 7.26624 23.2043 6.84526C23.2043 6.50847 23.2043 6.21378 23.2043 6.17169C23.2043 6.12959 23.2043 6.08749 23.2043 6.08749C23.078 4.90874 22.657 3.94047 21.9413 3.18271L21.8992 3.14061C20.8468 2.17235 19.5838 1.62507 18.6155 1.28828C15.795 0.193726 12.2587 0.193726 12.0903 0.193726C9.6065 0.235824 8.00677 0.446315 5.60716 1.28828C4.681 1.58297 3.41805 2.13025 2.36559 3.09851L2.3235 3.14061C1.60782 3.89838 1.18684 4.86664 1.06055 6.04539C1.06055 6.08749 1.06055 6.12959 1.06055 6.12959C1.06055 6.21378 1.06055 6.46637 1.06055 6.80316C1.10265 7.18204 1.10265 7.68722 1.10265 7.85562ZM3.37595 4.15097C4.21792 3.3932 5.27038 2.93012 6.15444 2.59333C8.34355 1.79346 9.7749 1.62507 12.1745 1.58297C12.3429 1.58297 15.6266 1.62507 18.1525 2.59333C19.0365 2.93012 20.089 3.3511 20.931 4.15097C21.394 4.65615 21.6887 5.32972 21.7729 6.12959C21.7729 6.25588 21.7729 6.46637 21.7729 6.80316C21.7729 7.22414 21.7729 7.68722 21.7729 7.81352C21.7308 8.78178 20.8047 8.99227 20.6784 8.99227H17.7736C17.3526 8.95017 16.679 8.78178 16.679 7.85562V6.12959C16.679 5.7928 16.4685 5.54021 16.1738 5.41392C15.9213 5.32972 8.55405 5.32972 8.30146 5.41392C8.00677 5.49811 7.79628 5.7928 7.79628 6.12959V7.85562C7.79628 8.78178 7.1227 8.95017 6.70172 8.99227H3.79694C3.67064 8.99227 2.74448 8.78178 2.70238 7.81352C2.70238 7.68722 2.70238 7.22414 2.70238 6.80316C2.70238 6.46637 2.70238 6.29798 2.70238 6.17169C2.61818 5.32972 2.91287 4.65615 3.37595 4.15097Z" />
                </svg>
              </div>
              <div class="w-full">
                <h4 class="mb-1 text-xl font-bold text-dark">Phone Number</h4>
                <p class="text-base text-body-color">(+20)0100000000</p>
              </div>
            </div>
            <div class="mb-8 flex w-full max-w-[370px]">
              <div class="bg-primary text-primary mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center rounded bg-opacity-5 sm:h-[70px] sm:max-w-[70px]">
                <svg width="28" height="19" viewBox="0 0 28 19" class="fill-current">
                  <path d="M25.3636 0H2.63636C1.18182 0 0 1.16785 0 2.6052V16.3948C0 17.8322 1.18182 19 2.63636 19H25.3636C26.8182 19 28 17.8322 28 16.3948V2.6052C28 1.16785 26.8182 0 25.3636 0ZM25.3636 1.5721C25.5909 1.5721 25.7727 1.61702 25.9545 1.75177L14.6364 8.53428C14.2273 8.75886 13.7727 8.75886 13.3636 8.53428L2.04545 1.75177C2.22727 1.66194 2.40909 1.5721 2.63636 1.5721H25.3636ZM25.3636 17.383H2.63636C2.09091 17.383 1.59091 16.9338 1.59091 16.3499V3.32388L12.5 9.8818C12.9545 10.1513 13.4545 10.2861 13.9545 10.2861C14.4545 10.2861 14.9545 10.1513 15.4091 9.8818L26.3182 3.32388V16.3499C26.4091 16.9338 25.9091 17.383 25.3636 17.383Z" />
                </svg>
              </div>
              <div class="w-full">
                <h4 class="mb-1 text-xl font-bold text-dark">Email Address</h4>
                <p class="text-base text-body-color">Skybal@Gmail.com</p>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
          <div class="relative p-8 bg-white rounded-lg shadow-lg sm:p-12">
            <form>
              <div class="mb-6">
                <input type="text" placeholder="Your Name" class="text-body-color border-[f0f0f0] focus:border-primary w-full rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none" />
              </div>
              <div class="mb-6">
                <input type="email" placeholder="Your Email" class="text-body-color border-[f0f0f0] focus:border-primary w-full rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none" />
              </div>
              <div class="mb-6">
                <input type="text" placeholder="Your Phone" class="text-body-color border-[f0f0f0] focus:border-primary w-full rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none" />
              </div>
              <div class="mb-6">
                <textarea rows="6" placeholder="Your Message" class="text-body-color border-[f0f0f0] focus:border-primary w-full resize-none rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none"></textarea>
              </div>
              <div>
                <button type="submit" class="w-full p-3 text-white transition bg-blue-500 border rounded border-primary hover:bg-opacity-90">
                  Send Message
                </button>
              </div>
            </form>
            <div>
              <span class="absolute -top-10 -right-9 z-[-1]">
                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fillRule="evenodd" clipRule="evenodd" d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z" fill="#3056D3" />
                </svg>
              </span>
              <span class="absolute -right-10 top-[90px] z-[-1]">
                <svg width="34" height="134" viewBox="0 0 34 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="31.9993" cy="132" r="1.66667" transform="rotate(180 31.9993 132)" fill="#13C296" />
                  <circle cx="31.9993" cy="117.333" r="1.66667" transform="rotate(180 31.9993 117.333)" fill="#13C296" />
                  <circle cx="31.9993" cy="102.667" r="1.66667" transform="rotate(180 31.9993 102.667)" fill="#13C296" />
                  <circle cx="31.9993" cy="88" r="1.66667" transform="rotate(180 31.9993 88)" fill="#13C296" />
                  <circle cx="31.9993" cy="73.3333" r="1.66667" transform="rotate(180 31.9993 73.3333)" fill="#13C296" />
                  <circle cx="31.9993" cy="45" r="1.66667" transform="rotate(180 31.9993 45)" fill="#13C296" />
                  <circle cx="31.9993" cy="16" r="1.66667" transform="rotate(180 31.9993 16)" fill="#13C296" />
                  <circle cx="31.9993" cy="59" r="1.66667" transform="rotate(180 31.9993 59)" fill="#13C296" />
                  <circle cx="31.9993" cy="30.6666" r="1.66667" transform="rotate(180 31.9993 30.6666)" fill="#13C296" />
                  <circle cx="31.9993" cy="1.66665" r="1.66667" transform="rotate(180 31.9993 1.66665)" fill="#13C296" />
                  <circle cx="17.3333" cy="132" r="1.66667" transform="rotate(180 17.3333 132)" fill="#13C296" />
                  <circle cx="17.3333" cy="117.333" r="1.66667" transform="rotate(180 17.3333 117.333)" fill="#13C296" />
                  <circle cx="17.3333" cy="102.667" r="1.66667" transform="rotate(180 17.3333 102.667)" fill="#13C296" />
                  <circle cx="17.3333" cy="88" r="1.66667" transform="rotate(180 17.3333 88)" fill="#13C296" />
                  <circle cx="17.3333" cy="73.3333" r="1.66667" transform="rotate(180 17.3333 73.3333)" fill="#13C296" />
                  <circle cx="17.3333" cy="45" r="1.66667" transform="rotate(180 17.3333 45)" fill="#13C296" />
                  <circle cx="17.3333" cy="16" r="1.66667" transform="rotate(180 17.3333 16)" fill="#13C296" />
                  <circle cx="17.3333" cy="59" r="1.66667" transform="rotate(180 17.3333 59)" fill="#13C296" />
                  <circle cx="17.3333" cy="30.6666" r="1.66667" transform="rotate(180 17.3333 30.6666)" fill="#13C296" />
                  <circle cx="17.3333" cy="1.66665" r="1.66667" transform="rotate(180 17.3333 1.66665)" fill="#13C296" />
                  <circle cx="2.66536" cy="132" r="1.66667" transform="rotate(180 2.66536 132)" fill="#13C296" />
                  <circle cx="2.66536" cy="117.333" r="1.66667" transform="rotate(180 2.66536 117.333)" fill="#13C296" />
                  <circle cx="2.66536" cy="102.667" r="1.66667" transform="rotate(180 2.66536 102.667)" fill="#13C296" />
                  <circle cx="2.66536" cy="88" r="1.66667" transform="rotate(180 2.66536 88)" fill="#13C296" />
                  <circle cx="2.66536" cy="73.3333" r="1.66667" transform="rotate(180 2.66536 73.3333)" fill="#13C296" />
                  <circle cx="2.66536" cy="45" r="1.66667" transform="rotate(180 2.66536 45)" fill="#13C296" />
                  <circle cx="2.66536" cy="16" r="1.66667" transform="rotate(180 2.66536 16)" fill="#13C296" />
                  <circle cx="2.66536" cy="59" r="1.66667" transform="rotate(180 2.66536 59)" fill="#13C296" />
                  <circle cx="2.66536" cy="30.6666" r="1.66667" transform="rotate(180 2.66536 30.6666)" fill="#13C296" />
                  <circle cx="2.66536" cy="1.66665" r="1.66667" transform="rotate(180 2.66536 1.66665)" fill="#13C296" />
                </svg>
              </span>
              <span class="absolute -left-7 -bottom-7 z-[-1]">
                <svg width="107" height="134" viewBox="0 0 107 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="104.999" cy="132" r="1.66667" transform="rotate(180 104.999 132)" fill="#13C296" />
                  <circle cx="104.999" cy="117.333" r="1.66667" transform="rotate(180 104.999 117.333)" fill="#13C296" />
                  <circle cx="104.999" cy="102.667" r="1.66667" transform="rotate(180 104.999 102.667)" fill="#13C296" />
                  <circle cx="104.999" cy="88" r="1.66667" transform="rotate(180 104.999 88)" fill="#13C296" />
                  <circle cx="104.999" cy="73.3333" r="1.66667" transform="rotate(180 104.999 73.3333)" fill="#13C296" />
                  <circle cx="104.999" cy="45" r="1.66667" transform="rotate(180 104.999 45)" fill="#13C296" />
                  <circle cx="104.999" cy="16" r="1.66667" transform="rotate(180 104.999 16)" fill="#13C296" />
                  <circle cx="104.999" cy="59" r="1.66667" transform="rotate(180 104.999 59)" fill="#13C296" />
                  <circle cx="104.999" cy="30.6666" r="1.66667" transform="rotate(180 104.999 30.6666)" fill="#13C296" />
                  <circle cx="104.999" cy="1.66665" r="1.66667" transform="rotate(180 104.999 1.66665)" fill="#13C296" />
                  <circle cx="90.3333" cy="132" r="1.66667" transform="rotate(180 90.3333 132)" fill="#13C296" />
                  <circle cx="90.3333" cy="117.333" r="1.66667" transform="rotate(180 90.3333 117.333)" fill="#13C296" />
                  <circle cx="90.3333" cy="102.667" r="1.66667" transform="rotate(180 90.3333 102.667)" fill="#13C296" />
                  <circle cx="90.3333" cy="88" r="1.66667" transform="rotate(180 90.3333 88)" fill="#13C296" />
                  <circle cx="90.3333" cy="73.3333" r="1.66667" transform="rotate(180 90.3333 73.3333)" fill="#13C296" />
                  <circle cx="90.3333" cy="45" r="1.66667" transform="rotate(180 90.3333 45)" fill="#13C296" />
                  <circle cx="90.3333" cy="16" r="1.66667" transform="rotate(180 90.3333 16)" fill="#13C296" />
                  <circle cx="90.3333" cy="59" r="1.66667" transform="rotate(180 90.3333 59)" fill="#13C296" />
                  <circle cx="90.3333" cy="30.6666" r="1.66667" transform="rotate(180 90.3333 30.6666)" fill="#13C296" />
                  <circle cx="90.3333" cy="1.66665" r="1.66667" transform="rotate(180 90.3333 1.66665)" fill="#13C296" />
                  <circle cx="75.6654" cy="132" r="1.66667" transform="rotate(180 75.6654 132)" fill="#13C296" />
                  <circle cx="31.9993" cy="132" r="1.66667" transform="rotate(180 31.9993 132)" fill="#13C296" />
                  <circle cx="75.6654" cy="117.333" r="1.66667" transform="rotate(180 75.6654 117.333)" fill="#13C296" />
                  <circle cx="31.9993" cy="117.333" r="1.66667" transform="rotate(180 31.9993 117.333)" fill="#13C296" />
                  <circle cx="75.6654" cy="102.667" r="1.66667" transform="rotate(180 75.6654 102.667)" fill="#13C296" />
                  <circle cx="31.9993" cy="102.667" r="1.66667" transform="rotate(180 31.9993 102.667)" fill="#13C296" />
                  <circle cx="75.6654" cy="88" r="1.66667" transform="rotate(180 75.6654 88)" fill="#13C296" />
                  <circle cx="31.9993" cy="88" r="1.66667" transform="rotate(180 31.9993 88)" fill="#13C296" />
                  <circle cx="75.6654" cy="73.3333" r="1.66667" transform="rotate(180 75.6654 73.3333)" fill="#13C296" />
                  <circle cx="31.9993" cy="73.3333" r="1.66667" transform="rotate(180 31.9993 73.3333)" fill="#13C296" />
                  <circle cx="75.6654" cy="45" r="1.66667" transform="rotate(180 75.6654 45)" fill="#13C296" />
                  <circle cx="31.9993" cy="45" r="1.66667" transform="rotate(180 31.9993 45)" fill="#13C296" />
                  <circle cx="75.6654" cy="16" r="1.66667" transform="rotate(180 75.6654 16)" fill="#13C296" />
                  <circle cx="31.9993" cy="16" r="1.66667" transform="rotate(180 31.9993 16)" fill="#13C296" />
                  <circle cx="75.6654" cy="59" r="1.66667" transform="rotate(180 75.6654 59)" fill="#13C296" />
                  <circle cx="31.9993" cy="59" r="1.66667" transform="rotate(180 31.9993 59)" fill="#13C296" />
                  <circle cx="75.6654" cy="30.6666" r="1.66667" transform="rotate(180 75.6654 30.6666)" fill="#13C296" />
                  <circle cx="31.9993" cy="30.6666" r="1.66667" transform="rotate(180 31.9993 30.6666)" fill="#13C296" />
                  <circle cx="75.6654" cy="1.66665" r="1.66667" transform="rotate(180 75.6654 1.66665)" fill="#13C296" />
                  <circle cx="31.9993" cy="1.66665" r="1.66667" transform="rotate(180 31.9993 1.66665)" fill="#13C296" />
                  <circle cx="60.9993" cy="132" r="1.66667" transform="rotate(180 60.9993 132)" fill="#13C296" />
                  <circle cx="17.3333" cy="132" r="1.66667" transform="rotate(180 17.3333 132)" fill="#13C296" />
                  <circle cx="60.9993" cy="117.333" r="1.66667" transform="rotate(180 60.9993 117.333)" fill="#13C296" />
                  <circle cx="17.3333" cy="117.333" r="1.66667" transform="rotate(180 17.3333 117.333)" fill="#13C296" />
                  <circle cx="60.9993" cy="102.667" r="1.66667" transform="rotate(180 60.9993 102.667)" fill="#13C296" />
                  <circle cx="17.3333" cy="102.667" r="1.66667" transform="rotate(180 17.3333 102.667)" fill="#13C296" />
                  <circle cx="60.9993" cy="88" r="1.66667" transform="rotate(180 60.9993 88)" fill="#13C296" />
                  <circle cx="17.3333" cy="88" r="1.66667" transform="rotate(180 17.3333 88)" fill="#13C296" />
                  <circle cx="60.9993" cy="73.3333" r="1.66667" transform="rotate(180 60.9993 73.3333)" fill="#13C296" />
                  <circle cx="17.3333" cy="73.3333" r="1.66667" transform="rotate(180 17.3333 73.3333)" fill="#13C296" />
                  <circle cx="60.9993" cy="45" r="1.66667" transform="rotate(180 60.9993 45)" fill="#13C296" />
                  <circle cx="17.3333" cy="45" r="1.66667" transform="rotate(180 17.3333 45)" fill="#13C296" />
                  <circle cx="60.9993" cy="16" r="1.66667" transform="rotate(180 60.9993 16)" fill="#13C296" />
                  <circle cx="17.3333" cy="16" r="1.66667" transform="rotate(180 17.3333 16)" fill="#13C296" />
                  <circle cx="60.9993" cy="59" r="1.66667" transform="rotate(180 60.9993 59)" fill="#13C296" />
                  <circle cx="17.3333" cy="59" r="1.66667" transform="rotate(180 17.3333 59)" fill="#13C296" />
                  <circle cx="60.9993" cy="30.6666" r="1.66667" transform="rotate(180 60.9993 30.6666)" fill="#13C296" />
                  <circle cx="17.3333" cy="30.6666" r="1.66667" transform="rotate(180 17.3333 30.6666)" fill="#13C296" />
                  <circle cx="60.9993" cy="1.66665" r="1.66667" transform="rotate(180 60.9993 1.66665)" fill="#13C296" />
                  <circle cx="17.3333" cy="1.66665" r="1.66667" transform="rotate(180 17.3333 1.66665)" fill="#13C296" />
                  <circle cx="46.3333" cy="132" r="1.66667" transform="rotate(180 46.3333 132)" fill="#13C296" />
                  <circle cx="2.66536" cy="132" r="1.66667" transform="rotate(180 2.66536 132)" fill="#13C296" />
                  <circle cx="46.3333" cy="117.333" r="1.66667" transform="rotate(180 46.3333 117.333)" fill="#13C296" />
                  <circle cx="2.66536" cy="117.333" r="1.66667" transform="rotate(180 2.66536 117.333)" fill="#13C296" />
                  <circle cx="46.3333" cy="102.667" r="1.66667" transform="rotate(180 46.3333 102.667)" fill="#13C296" />
                  <circle cx="2.66536" cy="102.667" r="1.66667" transform="rotate(180 2.66536 102.667)" fill="#13C296" />
                  <circle cx="46.3333" cy="88" r="1.66667" transform="rotate(180 46.3333 88)" fill="#13C296" />
                  <circle cx="2.66536" cy="88" r="1.66667" transform="rotate(180 2.66536 88)" fill="#13C296" />
                  <circle cx="46.3333" cy="73.3333" r="1.66667" transform="rotate(180 46.3333 73.3333)" fill="#13C296" />
                  <circle cx="2.66536" cy="73.3333" r="1.66667" transform="rotate(180 2.66536 73.3333)" fill="#13C296" />
                  <circle cx="46.3333" cy="45" r="1.66667" transform="rotate(180 46.3333 45)" fill="#13C296" />
                  <circle cx="2.66536" cy="45" r="1.66667" transform="rotate(180 2.66536 45)" fill="#13C296" />
                  <circle cx="46.3333" cy="16" r="1.66667" transform="rotate(180 46.3333 16)" fill="#13C296" />
                  <circle cx="2.66536" cy="16" r="1.66667" transform="rotate(180 2.66536 16)" fill="#13C296" />
                  <circle cx="46.3333" cy="59" r="1.66667" transform="rotate(180 46.3333 59)" fill="#13C296" />
                  <circle cx="2.66536" cy="59" r="1.66667" transform="rotate(180 2.66536 59)" fill="#13C296" />
                  <circle cx="46.3333" cy="30.6666" r="1.66667" transform="rotate(180 46.3333 30.6666)" fill="#13C296" />
                  <circle cx="2.66536" cy="30.6666" r="1.66667" transform="rotate(180 2.66536 30.6666)" fill="#13C296" />
                  <circle cx="46.3333" cy="1.66665" r="1.66667" transform="rotate(180 46.3333 1.66665)" fill="#13C296" />
                  <circle cx="2.66536" cy="1.66665" r="1.66667" transform="rotate(180 2.66536 1.66665)" fill="#13C296" />
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </x-section>

</x-app-layout>
