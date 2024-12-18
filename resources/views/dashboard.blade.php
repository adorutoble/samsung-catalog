<style>
    mark {
  background-color: rgb(212, 222, 255);
}
</style>
<x-layout>
  <section class="transparent dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-12 mx-auto lg:gap-8 xl:gap-0 lg:py-20 lg:grid-cols-12">
        <div class="ml-5 pl-5 place-self-center lg:col-span-7">
            <h1 class="max-w-4xl mb-4 text-5xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-7xl mark text-gray-900 dark:text-white">Find Your Dream Phone with <mark>Samsung</mark></h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Explore Samsung's smartphone collection with advanced features, superior performance, and stylish designs. Get detailed information on specifications, and prices.</p>

            @guest
            <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                Catalog
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
            @else
            <a href="/catalog" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                Catalog
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
            @endguest
        </div>
        <div class="hidden lg:mt-0 mr-0 lg:col-span-5 lg:flex">
            <img src="https://images.samsung.com/ca/smartphones/galaxy-z-flip5/images/galaxy-z-flip5-highlights-kv-a.jpg?imbypass=true" alt="samsung">
        </div>                
    </div>
</section>

<!-- Section with Full-Width Background and Centered Content -->
<section class="relative left-1/2 -translate-x-1/2 w-screen bg-white dark:bg-gray-900">
    <div class="max-w-5xl px-6 py-16 mx-auto lg:grid lg:grid-cols-2 lg:gap-16">
      <!-- Text Content -->
      <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
        <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white"><mark>What's New?</mark></h2>
        <p class="mb-4">The Samsung Galaxy S24 AI is a next-generation smartphone designed to enhance user experiences through cutting-edge artificial intelligence. Its standout AI features include Generative Photo Editing, allowing users to transform their photos with professional-level adjustments using simple taps.</p>
        <p>The device’s camera system, powered by the ProVisual Engine, supports Motion Photo, Instant Slow-mo, and Dual Recording, ensuring you capture every moment with clarity and creativity.</p>
      </div>
  
      <!-- Image Grid -->
      <div class="grid grid-cols-2 gap-4 mt-8 lg:mt-0">
        <img class="w-full rounded-lg" src="https://images.samsung.com/is/image/samsung/p6pim/id/feature/165610483/id-feature-galaxy-s24-fe-s721-543646184?$FB_TYPE_I_JPG$" alt="office content 1">
        <img class="w-full mt-4 lg:mt-10 rounded-lg" src="https://img.lazcdn.com/g/p/41a5bf7f0c4de00c8e3d87045a2ca6c2.jpg_960x960q80.jpg_.webp" alt="office content 2">
      </div>
    </div>
  </section>
  
  <section class="transparent dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold leading-tight text-gray-900 dark:text-white">Start to find! </h2>
            <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">See the catalog and find your dream phone</p>
            
            @guest
            <a href="{{ route('login') }}" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
              See Catalog
            </a>
            @else
            <a href="/catalog" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
              See Catalog
            </a>
            @endguest
        </div>
    </div>
  </section>
  
</x-layout>
