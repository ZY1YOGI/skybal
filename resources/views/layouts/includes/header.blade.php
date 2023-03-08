<header id="header">
  <nav class="negative">
    <div class="flex items-center space-x-3 max-md:space-x-1">
      <img src={{ Vite::asset('resources/image/logo.svg') }} alt="" class="w-6 h-auto dark:invert-[100%]" />
      <h1 class="text-3xl max-md:text-lg font-bold dark:text-white">Skybal</h1>
    </div>
    <ul class="nav-links">
      <li class="nav-link"><a href={{ route('home') }}>Home</a></li>
      <li class="nav-link"><a href="#clients">Clintes</a></li>
      <li class="nav-link"><a href="#services">Services</a></li>
      <li class="nav-link"><a href="#about">About</a></li>
      <li class="nav-link"><a href={{ route('categories') }}>Category</a></li>
      <button class="btn-search" role="search" id="model-search">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
        </svg>
      </button>
      <button class="btn-theme" x-data @click="localStorage.getItem('theme') === 'light' ? (document.documentElement.className = 'dark', document.documentElement.setAttribute('data-theme', 'dark'), localStorage.setItem('theme', 'dark')) : (document.documentElement.className = 'light', document.documentElement.setAttribute('data-theme', 'light'), localStorage.setItem('theme', 'light'))" role="switch" id="switch-theme">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="dark:text-white" height="35">
          <circle cx="185.6708" cy="183.8122" r="65.625" />
          <path d="M185.6708,87.5622a13.1256,13.1256,0,0,0,13.125-13.125V52.5622a13.125,13.125,0,1,0-26.25,0v21.875A13.1257,13.1257,0,0,0,185.6708,87.5622Z" />
          <path d="M99.051,115.7519a13.1236,13.1236,0,1,0,18.56-18.56L102.1442,81.726a13.1236,13.1236,0,0,0-18.5595,18.56Z" />
          <path d="M89.4208,183.8122a13.1257,13.1257,0,0,0-13.125-13.125H54.4208a13.125,13.125,0,0,0,0,26.25h21.875A13.1256,13.1256,0,0,0,89.4208,183.8122Z" />
          <path d="M99.051,251.8725,83.5847,267.3431a13.1236,13.1236,0,1,0,18.56,18.56l15.4663-15.4706a13.1236,13.1236,0,1,0-18.5595-18.56Z" />
          <path d="M185.6708,280.0622a13.1258,13.1258,0,0,0-13.125,13.125v21.875a13.125,13.125,0,0,0,26.25,0v-21.875A13.1257,13.1257,0,0,0,185.6708,280.0622Z" />
          <path d="M272.2907,251.8725a13.1236,13.1236,0,1,0-18.56,18.56l15.4663,15.4706a13.1236,13.1236,0,1,0,18.56-18.56Z" />
          <path d="M330.0458,183.8122a13.1257,13.1257,0,0,0-13.125-13.125h-21.875a13.125,13.125,0,0,0,0,26.25h21.875A13.1256,13.1256,0,0,0,330.0458,183.8122Z" />
          <path d="M263.0109,119.5971a13.0824,13.0824,0,0,0,9.28-3.8452l15.4663-15.4663a13.1236,13.1236,0,1,0-18.56-18.56L253.7312,97.1923a13.125,13.125,0,0,0,9.28,22.4048Z" />
          <path d="M456.9379,401.6714a63.97,63.97,0,0,1-14.9963,7.2055c-19.6448,6.5283-41.8787,2.9566-58.1439-9.8523a68.9311,68.9311,0,0,1-10.835-10.8339c-12.8088-16.2663-16.3806-38.5-9.8523-58.1471a63.8444,63.8444,0,0,1,7.2077-14.9931,8.8036,8.8036,0,0,0-10.1172-13.3034,87.5188,87.5188,0,1,0,110.0372,110.04A8.8,8.8,0,0,0,456.9379,401.6714Z" />
          </g></svg>
      </button>
    </ul>
    <button class="hidden max-md:block aos-init aos-animate">
      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="dark:text-white" height="30" width="30" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
      </svg>
    </button>
    <div>
      <button class="px-6 py-2 text-sm font-bold text-white transition bg-black dark:bg-gray-50 dark:text-fuchsia-800 hover:bg-gray-800 dark:hover:bg-gray-300 rounded-xl">Auth</button>
    </div>
  </nav>
</header>
