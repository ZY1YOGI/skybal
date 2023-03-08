<x-app-layout title="Categories">

    <div class="container mx-auto border-x-4 border-fuchsia-600 my-5 min-h-[50vh]">
      <h1 class="text-4xl text-center font-bold py-2 dark:text-white decoration-slice underline underline-offset-[5px] decoration-fuchsia-700" data-aos="fade-up" data-aos-delay="200"><a href={{ route('categories') }} class="transition-all hover:text-3xl">Categories</a></h1>

      <div class="grid grid-cols-4 gap-10 m-4 max-lg:grid-cols-2 max-sm:grid-cols-1">

        <div class="flex flex-col items-center py-8 border border-red-600 shadow-md rounded-xl outline-dotted outline-2 outline-offset-4 outline-gray-800 shadow-red-600">
          <img src={{ Vite::asset('resources/image/clients/client-1.png') }} alt="" class="object-cover border border-red-600 h-[195px] w-[195px] transition-all p-1 rounded-full m-5 hover:border-[3px]" />
          <div class="text-center">
            <h2 class="text-2xl font-bold transition-all cursor-pointer dark:text-white hover:tracking-widest">
              < PC>
            </h2>
            <p class="px-5 text-sm dark:text-gray-300">Lorem ipsum, dolo elit. Ad, iure.consectetur adipisicing elit. Ad, iure.consectetur adipisicing elit. Ad, iure.</p>
            <a href={{ route('category.show', "pc") }} type="button" class="outline cursor-pointer outline-2 outline-offset-4 outline-red-700 my-5 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Show Products..</a>
          </div>
        </div>

        <div class="flex flex-col items-center py-8 border border-red-600 shadow-md rounded-xl outline-dotted outline-2 outline-offset-4 outline-gray-800 shadow-red-600">
          <img src={{ Vite::asset('resources/image/clients/client-2.png') }} alt="" class="object-cover border border-red-600 h-[195px] w-[195px] transition-all p-1 rounded-full m-5 hover:border-[3px]" />
          <div class="text-center">
            <h2 class="text-2xl font-bold transition-all cursor-pointer dark:text-white hover:tracking-widest">
              < Printer>
            </h2>
            <p class="px-5 text-sm dark:text-gray-300">Lorem ipsum, dolo elit. Ad, iure.consectetur adipisicing elit. Ad, iure.consectetur adipisicing elit. Ad, iure.</p>
            <a href={{ route('category.show', "printer") }} type="button" class="outline cursor-pointer outline-2 outline-offset-4 outline-red-700 my-5 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Show Products..</a>
          </div>
        </div>

        <div class="flex flex-col items-center py-8 border border-red-600 shadow-md rounded-xl outline-dotted outline-2 outline-offset-4 outline-gray-800 shadow-red-600">
          <img src={{ Vite::asset('resources/image/clients/client-3.png') }} alt="" class="object-cover border border-red-600 h-[195px] w-[195px] transition-all p-1 rounded-full m-5 hover:border-[3px]" />
          <div class="text-center">
            <h2 class="text-2xl font-bold transition-all cursor-pointer dark:text-white hover:tracking-widest">
              < PC>
            </h2>
            <p class="px-5 text-sm dark:text-gray-300">Lorem ipsum, dolo elit. Ad, iure.consectetur adipisicing elit. Ad, iure.consectetur adipisicing elit. Ad, iure.</p>
            <a type="button" class="outline cursor-pointer outline-2 outline-offset-4 outline-red-700 my-5 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Show Products..</a>
          </div>
        </div>

        <div class="flex flex-col items-center py-8 border border-red-600 shadow-md rounded-xl outline-dotted outline-2 outline-offset-4 outline-gray-800 shadow-red-600">
          <img src={{ Vite::asset('resources/image/clients/client-3.png') }} alt="" class="object-cover border border-red-600 h-[195px] w-[195px] transition-all p-1 rounded-full m-5 hover:border-[3px]" />
          <div class="text-center">
            <h2 class="text-2xl font-bold transition-all cursor-pointer dark:text-white hover:tracking-widest">
              < PC>
            </h2>
            <p class="px-5 text-sm dark:text-gray-300">Lorem ipsum, dolo elit. Ad, iure.consectetur adipisicing elit. Ad, iure.consectetur adipisicing elit. Ad, iure.</p>
            <a type="button" class="outline cursor-pointer outline-2 outline-offset-4 outline-red-700 my-5 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Show Products..</a>
          </div>
        </div>
        <div class="flex flex-col items-center py-8 border border-red-600 shadow-md rounded-xl outline-dotted outline-2 outline-offset-4 outline-gray-800 shadow-red-600">
          <img src={{ Vite::asset('resources/image/clients/client-3.png') }} alt="" class="object-cover border border-red-600 h-[195px] w-[195px] transition-all p-1 rounded-full m-5 hover:border-[3px]" />
          <div class="text-center">
            <h2 class="text-2xl font-bold transition-all cursor-pointer dark:text-white hover:tracking-widest">
              < PC>
            </h2>
            <p class="px-5 text-sm dark:text-gray-300">Lorem ipsum, dolo elit. Ad, iure.consectetur adipisicing elit. Ad, iure.consectetur adipisicing elit. Ad, iure.</p>
            <a type="button" class="outline cursor-pointer outline-2 outline-offset-4 outline-red-700 my-5 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Show Products..</a>
          </div>
        </div>
      </div>

    </div>

  </x-app-layout>
