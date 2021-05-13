<ul class="w-full flex flex-row justify-end items-center">
{{--    <li><h3 class="text-p text-base mr-5 align-middle">{{ auth()->user()->name }}</h3></li>--}}
    <li class="navicon nav-icon" style="width: 40px; height: 40px;"
        title="Notifikacije">
        <a href="#">
            <span class="p-3 align-middle"><i class="fi fi-bell text-lg text-icon"></i></span>
        </a>
    </li>

    <li class="nav-red-icon nav-icon" style="width: 40px; height: 40px;"
        title="Favoriti">
        <a href="#">
            <span class="p-3 align-middle"><i class="fi fi-heart-alt text-lg text-icon"></i></span>
        </a>
    </li>

    <li class="navicon nav-icon" style="width: 40px; height: 40px;"
        title="Moje grupe">
        <a href="#">
            <span class="p-3 align-middle"><i class="fi fi-persons text-lg text-icon"></i></span>
        </a>
    </li>


    <div class="relative"  x-data="{ open: false }">
        <button class="focus:outline-none"
                @click="open = !open"
                >
            <img class="inline object-cover w-8 h-8 rounded-full" src="https://images.pexels.com/photos/2589653/pexels-photo-2589653.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="profile picture"/>
        </button>
        <ul x-show="open" @click.away="open = false"
            x-transition:enter="transition ease-out duration-75"
            x-transition:enter-start="opacity-0 transform scale-95"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-95"
            class="absolute font-normal bg-white shadow overflow-hidden w-48 border mt-6 right-0 z-20 avatar-dropdown">
            <li class="nav-icon w-full flex items-center hover:bg-queen-blue"
                title="Moj nalog">
                <a href="#" class="flex flex-row align-middle items-center justify-start w-full">
                    <span class="p-2 align-middle text-sm text-icon"><i class="fi fi-person text-lg text-icon mr-3 align-middle"></i>Moj nalog</span>
                </a>
            </li>
            <li class="nav-icon w-full flex items-center hover:bg-queen-blue"
                title="Podešavanja">
                <a href="#" class="flex flex-row align-middle items-center justify-start w-full">
                    <span class="p-2 align-middle text-sm text-icon"><i class="fi fi-player-settings text-lg text-icon mr-3 align-middle"></i>Podešavanja</span>
                </a>
            </li>
            <li class="nav-icon w-full flex items-center hover:bg-queen-blue"
                title="Logout">
                <a href="{{ route('logout') }}" class="flex flex-row align-middle items-center justify-start w-full">
                    <span class="p-2 align-middle text-sm text-icon flex items-center"><i class="fi fi-power text-lg text-icon mr-3 align-middle"></i>Logout</span>
                </a>
            </li>
        </ul>
    </div>
</ul>
