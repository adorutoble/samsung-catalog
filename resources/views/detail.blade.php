<x-layout>
    <div class="py-2 px-4 mx-auto max-w-screen-xl lg:py-6 lg:px-6 ">
        <div class="mx-auto max-w-screen-sm text-center mt-6 mb-2 lg:mb-8">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Detail</h2>
        </div>
        <section class="transparent antialiased dark:transparent">
            <div class="mx-auto grid max-w-screen-xl rounded-xl bg-gray-50 p-4 dark:bg-gray-800 md:p-8 lg:grid-cols-12 lg:gap-8 lg:p-16 xl:gap-16">
              <div class="lg:col-span-5 lg:mt-0">
                <a href="#">
                <img class="mb-4 h-100 w-56 dark:hidden sm:w-96 md:w-full" src="{{ $catalog['image'] }}" alt="{{ $catalog->name }}"/>
                </a>
              </div>
              <div class="me-auto place-self-center lg:col-span-7">
                <h1 class="mb-3 text-2xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white md:text-4xl">
                  {{ $catalog['name'] }}
                </h1>
                <p class="mb-6 text-gray-500 dark:text-gray-400">
                    {{ $catalog->description }}
                </p>
                <ul class="mb-6 text-gray-500 dark:text-gray-400">
                    <li>
                        <span class="font-bold">Display:</span> {{ $catalog['display'] }}
                    </li>
                    <li>
                        <span class="font-bold">Camera:</span> {{ $catalog['camera'] }}
                    </li>
                    <li>
                        <span class="font-bold">Battery:</span> {{ $catalog['battery'] }}
                    </li>
                    <li>
                        <span class="font-bold">Storage:</span> {{ $catalog['storage'] }}
                    </li>
                    <li>
                        <span class="font-bold">Price:</span> Rp {{ number_format($catalog['price'], 0, ',', '.') }}
                    </li>
                </ul>                
                <a href="/catalog" class="inline-flex items-center justify-center rounded-lg bg-primary-700 px-5 py-3 text-center text-base font-medium text-white hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900"> Got It </a>
              </div>
            </div>
          </section>
</x-layout>