
<section class="flex w-full h-32 bg-gray-900 items-center justify-center flex-col pb-2">

    <div class="w-11/12 text-white flex items-center justify-between">

        @section('logo')
            @include('/components/logo')
        @endsection
        @yield('logo')

        <div class="flex">
            <ul class="flex items-center justify-center text-center gap-x-10 ">
                <li class="flex gap-y-2 hover:bg-white hover:text-black transition-2 cursor-pointer rounded-xl p-2 "><a href="/">Home</a></li>
                <li class="flex gap-y-2 hover:bg-white hover:text-black transition-2 cursor-pointer rounded-xl p-2 "><a href="/about">About</a></li>
                <li class="flex gap-y-2 hover:bg-white hover:text-black transition-2 cursor-pointer rounded-xl p-2 "><a href="/event">Events</a></li>
                <li class="flex gap-y-2 hover:bg-white hover:text-black transition-2 cursor-pointer rounded-xl p-2 "><a href="/contact">Contact</a ></li>
            </ul>
        </div>


        <div class="flex gap-x-2">
            <button class="text-gray-500 border-solid border-2 border-gray-500 rounded-lg p-2 hover:bg-gray-500 hover:text-gray-900 transition-all duration-500">Se registrar</button>
            <button class="bg-blue-500 px-12 py-2 border-solid border-blue-500 border-2 hover:bg-blue-400 rounded-lg hover:border-blue-400 transition-all duration-500">Entrar</button>
        </div>
    </div>

    <div class="mt-2">
        <form>
            <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="search" class="h-[40px] block w-[600px] p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar" required />
                <button type="submit" class="text-white absolute end-2.5 bottom-1.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buscar</button>
            </div>
        </form>

    </div>
</section>

