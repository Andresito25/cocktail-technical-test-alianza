<x-app-layout>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">

          <div
            class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-10 text-center transition ease-in-out delay-150">
            {{-- @foreach ($cocktails as $cocktail)
              <div
                class="flex flex-col gap-5 border-2 border-green-600 rounded-lg h-max p-7 hover:shadow-lg hover:shadow-green-600 hover:translate-y-1 transition ease-in-out delay-150">
                <h1 class="text-wrap text-3xl">{{ $cocktail['name'] }}</h1>

                <img class="rounded-lg" src="{{ $cocktail['image'] }}" alt="cocktail">

                <p class="text-sm overflow-hidden truncate hover:text-balance transition ease-in-out delay-1000">
                  {{ $cocktail['preparation'] }}</p>

                <button type="button"
                  class="border-2 border-purple-700 p-3 rounded-lg text-slate-400 text-base  hover:bg-purple-500 hover:shadow-md hover:shadow-purple-500 hover:text-white">
                  Guardar
                </button>

                <button type="button"
                  class="border-2 border-green-700 p-3 rounded-lg text-slate-400 text-base  hover:bg-green-500 hover:shadow-md hover:shadow-green-500 hover:text-black">
                  Ver cóctel
                </button>
              </div>
            @endforeach --}}
            Vista del cóctel
          </div>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>
