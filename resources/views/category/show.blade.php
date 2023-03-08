<x-app-layout title="Category: {{ $category['name'] }}">



  <div class="flex max-md:flex-col min-h-[50vh]">

    <div class="flex flex-col justify-center w-1/2 space-y-6 border-r max-md:w-full max-md:border-b border_gradient">
      <h3 class="mt-5 text-3xl font-bold text-center dark:text-white">Category: <span class="font-extrabold uppercase">{{ $category['name'] }}</span></h3>
      <div class="self-center">
        <img src={{ Vite::asset($category['image']) }} class="h-[450px] w-auto max-md:h-80 rounded-xl shadow shadow-red-600 border border-fuchsia-600 max-md:p-px" />
      </div>

      <h3 class="text-3xl font-bold text-center dark:text-white">clients</h3>

      <div class="grid items-center w-full grid-flow-col max-sm:grid-cols-2 justify-items-center" id="clients">
        <div class="cursor-pointer">
          <img src={{ Vite::asset("resources/image/clients/client-1.png") }} class="h-auto !max-w-[45%]" alt="" />
        </div>
        <div class="text-center cursor-pointer">
          <img src={{ Vite::asset("resources/image/clients/client-2.png") }} class="h-auto !max-w-[45%]" alt="" />
        </div>
        <div class="text-center cursor-pointer">
          <img src={{ Vite::asset("resources/image/clients/client-4.png") }} class="h-auto !max-w-[45%]" alt="" />
        </div>
      </div>
    </div>


    <div class="flex flex-col justify-center w-1/2 space-y-6 border-l max-md:w-full border_gradient">
      <h3 class="mt-5 text-2xl font-bold text-center dark:text-white">Category: <span class="font-extrabold uppercase">Details</span></h3>
      <div class="h-full">

        <ul class="bg-gray-700 text-gray-50 space-y-3 text-xl rounded-2xl h-1/4 w-3/4 max-md:w-[80%] flex flex-col justify-center  mx-auto px-6">
          <li>
            Category: <span class="font-extrabold uppercase">{{ $category['name'] }}</span>
          </li>
          <li>
            Clients: <span class="font-extrabold">Clients: Rangata, Syble, Opkos</span>
          </li>
          <li>
            Count Products: <span class="font-extrabold">{{ 168 }}</span>
          </li>
        </ul>

        <div class="h-full mt-5 text-xl">
          <h3 class="text-2xl text-center dark:text-white">Category information</h3>
          <p class="px-16 max-md:px-5 dark:text-gray-100">
            {{ $category['description'] }}
          </p>
        </div>

      </div>
    </div>

  </div>


  <div class="w-full min-h-[60vh] border-t-2 border_gradient">
    <h3 class="text-center text-3xl font-bold py-2 dark:text-white decoration-slice underline underline-offset-[5px] decoration-fuchsia-700" data-aos="fade-up" data-aos-delay="200">Products</h3>
    <div class="container flex flex-wrap items-center justify-center mx-auto my-6 gap-x-5 basis-2/4">
      <div class="w-[350px] flex flex-col items-center my-3 py-5 border border-red-600 shadow-md rounded-xl outline-dotted outline-2 outline-offset-4 outline-fuchsia-500 shadow-red-600">
        <img src={{ Vite::asset('resources/image/products/1.jpeg') }} alt="" class="object-cover border border-red-600 h-[195px] w-[195px] transition-all p-1 rounded-full m-5 hover:border-[3px]" />
        <div class="text-center">
          <h2 class="text-2xl font-bold transition-all cursor-pointer dark:text-white hover:tracking-widest">
            < XPrinter>
          </h2>
          <h3 class="font-semibold dark:text-white">Model: <span class="font-normal">850Mq</span></h3>
          <p class="px-5 text-sm dark:text-gray-300">Lorem ipsum, dolo elit. Ad, iure.consectetur adipisicing elit. Ad, iure.consectetur adipisicing elit. Ad, iure.</p>
          <a href={{ route('product', "x-printer-850mq") }} type="button" class="outline cursor-pointer outline-2 outline-offset-4 outline-red-700 my-5 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 transition-all hover:outline-offset-0">Show More..</a>
        </div>
      </div>

      <div class="w-[350px] flex flex-col items-center my-3 py-5 border border-red-600 shadow-md rounded-xl outline-dotted outline-2 outline-offset-4 outline-fuchsia-500 shadow-red-600">
        <img src={{ Vite::asset('resources/image/products/2.jpeg') }} alt="" class="object-cover border border-red-600 h-[195px] w-[195px] transition-all p-1 rounded-full m-5 hover:border-[3px]" />
        <div class="text-center">
          <h2 class="text-2xl font-bold transition-all cursor-pointer dark:text-white hover:tracking-widest">
            < XPrinter>
          </h2>
          <h3 class="font-semibold dark:text-white">Model: <span class="font-normal">850Mq</span></h3>
          <p class="px-5 text-sm dark:text-gray-300">Lorem ipsum, dolo elit. Ad, iure.consectetur adipisicing elit. Ad, iure.consectetur adipisicing elit. Ad, iure.</p>
          <a type="button" class="outline cursor-pointer outline-2 outline-offset-4 outline-red-700 my-5 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 transition-all hover:outline-offset-0">Show More..</a>
        </div>
      </div>

      <div class="w-[350px] flex flex-col items-center my-3 py-5 border border-red-600 shadow-md rounded-xl outline-dotted outline-2 outline-offset-4 outline-fuchsia-500 shadow-red-600">
        <img src={{ Vite::asset('resources/image/products/2.jpeg') }} alt="" class="object-cover border border-red-600 h-[195px] w-[195px] transition-all p-1 rounded-full m-5 hover:border-[3px]" />
        <div class="text-center">
          <h2 class="text-2xl font-bold transition-all cursor-pointer dark:text-white hover:tracking-widest">
            < XPrinter>
          </h2>
          <h3 class="font-semibold dark:text-white">Model: <span class="font-normal">850Mq</span></h3>
          <p class="px-5 text-sm dark:text-gray-300">Lorem ipsum, dolo elit. Ad, iure.consectetur adipisicing elit. Ad, iure.consectetur adipisicing elit. Ad, iure.</p>
          <a type="button" class="outline cursor-pointer outline-2 outline-offset-4 outline-red-700 my-5 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 transition-all hover:outline-offset-0">Show More..</a>
        </div>
      </div>

      <div class="w-[350px] flex flex-col items-center my-3 py-5 border border-red-600 shadow-md rounded-xl outline-dotted outline-2 outline-offset-4 outline-fuchsia-500 shadow-red-600">
        <img src={{ Vite::asset('resources/image/products/3.jpeg') }} alt="" class="object-cover border border-red-600 h-[195px] w-[195px] transition-all p-1 rounded-full m-5 hover:border-[3px]" />
        <div class="text-center">
          <h2 class="text-2xl font-bold transition-all cursor-pointer dark:text-white hover:tracking-widest">
            < XPrinter>
          </h2>
          <h3 class="font-semibold dark:text-white">Model: <span class="font-normal">850Mq</span></h3>
          <p class="px-5 text-sm dark:text-gray-300">Lorem ipsum, dolo elit. Ad, iure.consectetur adipisicing elit. Ad, iure.consectetur adipisicing elit. Ad, iure.</p>
          <a type="button" class="outline cursor-pointer outline-2 outline-offset-4 outline-red-700 my-5 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 transition-all hover:outline-offset-0">Show More..</a>
        </div>
      </div>

    </div>
  </div>
</x-app-layout>
