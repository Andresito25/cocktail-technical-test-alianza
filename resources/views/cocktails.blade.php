<x-app-layout>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">

          <div class="flex flex-col text-center transition ease-in-out delay-150">
            <div class="h-fit w-1/2 mx-auto flex flex-col gap-5 p-3">
              <h3 class="text-wrap text-3xl">{{ $cocktail->name }}</h3>
              <img class="rounded-2xl w-1/2 mx-auto hover:shadow-md hover:shadow-slate-300" src="{{ $cocktail->image }}"
                alt="cocktail">
              <p>{{ $cocktail->preparation }}</p>
            </div>

            <div class="flex flex-row-reverse gap-5 mt-12">

              <form action="{{ route('cocktail/{id}', [$cocktail->id]) }}">
                @csrf
                <button type="submit"
                  class="w-full border-2 border-purple-700 p-3 rounded-lg text-slate-400 text-base  hover:bg-purple-500 hover:shadow-md hover:shadow-purple-500 hover:text-white">
                  Guardar
                </button>
              </form>

              <a
                class="border-2 border-yellow-700 p-3 rounded-lg text-slate-400 text-base  hover:bg-yellow-500 hover:shadow-md hover:shadow-yellow-500 hover:text-white cursor-pointer">
                Editar
              </a>
              <a
                class="border-2 border-red-700 p-3 rounded-lg text-slate-400 text-base  hover:bg-red-500 hover:shadow-md hover:shadow-red-500 hover:text-white cursor-pointer">
                Eliminar
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>
