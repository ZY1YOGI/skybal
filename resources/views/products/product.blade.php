<x-app-layout title="product: {{ $product['name'] }}">


  <div class="flex max-md:flex-col">

    <div class="flex flex-col justify-center w-1/2 border-r max-md:w-full max-md:border-b border_gradient">
      <h3 class="mt-5 text-3xl font-bold text-center dark:text-white">Product: <span class="font-extrabold uppercase">{{ $product['name'] }}</span></h3>
      <div class="self-center">
        <img src={{ Vite::asset($product['image']) }} class="h-[450px] w-auto m-5 max-md:h-80 rounded-xl shadow shadow-red-600 border border-fuchsia-600 max-md:p-px" />
      </div>
    </div>


    <div class="flex flex-col w-1/2 border-l max-md:w-full border_gradient">
      <h3 class="mt-5 text-2xl font-bold text-center dark:text-white">Product: <span class="font-extrabold uppercase">Details</span></h3>

      <div class="h-full">

        <ul class="w-2/3 mx-auto my-5 space-y-6 dark:text-white">
          <li class="p-3 border border-fuchsia-600 rounded-xl">
            Name: <span class="font-extrabold uppercase">{{ $product['name'] }}</span>
          </li>
          <li class="p-3 border border-fuchsia-600 rounded-xl">
            Model: <span class="font-extrabold">{{ $product['model'] }}</span>
          </li>
          <li class="p-3 border border-fuchsia-600 rounded-xl">
            Name Compny: <span class="font-extrabold">{{ "syble" }}</span>
          </li>
          <li class="p-3 border border-fuchsia-600 rounded-xl">
            To Category: <span class="font-extrabold">{{ "Printer" }}</span>
          </li>
          <li class="p-3 border border-fuchsia-600 rounded-xl ">
            Info Products: <p class="inline font-extrabold">{{ $product['description'] }}</p>
          </li>
        </ul>

        {{-- <h3>{{ $product['description'] }}</h3> --}}

      </div>
    </div>

  </div>



  <div class="border-t-2 border_gradient">
    <div class="container w-full mx-auto">
      <h1 class="text-4xl text-center font-bold py-2 dark:text-white decoration-slice underline underline-offset-[5px] decoration-fuchsia-700" data-aos="fade-up" data-aos-delay="200"><a href={{ route('categories') }} class="transition-all hover:text-3xl">Products More</a></h1>

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
      <div class="my-10 text-center">
        <a href={{ route('categories') }} class="px-2 py-3 text-xl font-semibold transition-all bg-white rounded-xl hover:bg-slate-50">Show All Products For Product</a>
      </div>
    </div>
  </div>

</x-app-layout>
