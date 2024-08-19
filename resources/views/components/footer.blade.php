<section class="text-white flex flex-col w-full items-center px-24 py-8">
    <div class="flex w-full items-center justify-between">


        @include('/components/logo')


        <div class="flex gap-x-16 ">
            <a class="cursor-pointer hover:-translate-y-2 transition-all duration-500">
                <img src="/icons/facebook.png">
            </a>
            <a class="cursor-pointer hover:-translate-y-2 transition-all duration-500">
                <img src="/icons/instagram.png">
            </a>
            <a class="cursor-pointer hover:-translate-y-2 transition-all duration-500">
                <img src="/icons/whatsapp.png">
            </a>

        </div>

        <div>
            <ul>
                <li class="flex gap-y-2 hover:bg-white hover:text-black transition-2 cursor-pointer rounded-xl p-2 "><a>Home</a></li>
                <li class="flex gap-y-2 hover:bg-white hover:text-black transition-2 cursor-pointer rounded-xl p-2 "><a>About</a></li>
                <li class="flex gap-y-2 hover:bg-white hover:text-black transition-2 cursor-pointer rounded-xl p-2 "><a>Events</a></li>
                <li class="flex gap-y-2 hover:bg-white hover:text-black transition-2 cursor-pointer rounded-xl p-2 "><a>Contact</a></li>
            </ul>
        </div>
    </div>

    <div class="mt-10">
       Todos os direitos reservados &copy; Copyright 2024
    </div>
</section>
