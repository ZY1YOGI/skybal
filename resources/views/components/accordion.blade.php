<div id={{ $id }} x-data="{open: false}" @click="open = ! open" class="accordion my-8 bg-white shadow-sm cursor-pointer outline outline-2 outline-offset-4 outline-red-700 max-md:my-4 rounded-xl dark:bg-gray-200">
  <div class="flex flex-row items-center justify-between h-16 px-6 text-left select-none max-md:h-14">
    <h5 class="flex-1 overflow-hidden font-bold" data-aos="fade-up" data-aos-delay="350"><span class="text-blue-400">{{ $id }}</span> {{ $title }}</h5>
    <div id="icon-accordion" class="pl-2 text-3xl font-bold rounded-md" x-text="open ? '&#x21D7;' : '&#x21D9;'"></div>
  </div>
  <div id="content-accordion" class="px-6 pt-0 overflow-hidden transition-[max-height] duration-200 ease-in max-h-0" :class="{ 'max-h-40': open == 1 }">
    <p class="pb-4 text-left">
      {{ $content }}
    </p>
  </div>
</div>
