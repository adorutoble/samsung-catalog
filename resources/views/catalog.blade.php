<x-layout>
    <div class="py-6 px-4 mx-auto max-w-screen-xl lg:py-6 lg:px-6 ">
        <div class="mx-auto max-w-screen-sm text-center mt-5 mb-2 lg:mb-8">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our Catalog</h2>
        </div>

        <section class="transparent dark:bg-gray-900 px-6 py-8">
            <div class="grid gap-8 lg:grid-cols-2">
                @foreach ($catalogs as $catalog)
                    <div class="flex items-center bg-gray-50 rounded-lg shadow-lg overflow-hidden dark:bg-gray-800 dark:border-gray-700">
                        <a href="/catalog/{{ $catalog['slug'] }}" class="w-1/2">
                            <img class="w-full h-full object-cover" src="{{ $catalog->image }}" alt="{{ $catalog->name }}">
                        </a>
                        <div class="p-6 w-1/2">
                            <a href="/catalog/{{ $catalog['slug'] }}">
                            <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline">{{ ($catalog['name']); }}
                            </h3>
                        </a>
                            <span class="block text-gray-500 dark:text-gray-400">{{ $catalog->series }}</span>
                            <p class="mt-3 mb-4 text-gray-500 dark:text-gray-400">{{ $catalog->body }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>        

  </x-layout>