
<nav class="w-full lg:hidden p-2 flex flex-row flex-wrap justify-start items-center z-50">

    @if (auth()->user())
        <div class="w-2/12 flex">
            <a href="{{ route('dashboard') }}" title="Dashboard">
                <img src="images/logo1.png" alt="logo" class="object-scale-down"/>
            </a>
        </div>

        <div class="w-8/12 flex justify-end">
            @include('partials.header.search')
        </div>

        <div class="w-2/12 flex justify-end items-center">
            <ul>
                <li class="nav-icon flex justify-center items-center border-solid border-1 border-transparent rounded hover:border-queen-blue hover:bg-queen-blue hover:shadow" style="width: 40px; height: 40px;"
                    title="Izloguj se">
                    <a href="{{ route('logout') }}">
                        <span class="p-3 align-middle"><i class="fi fi-power text-lg text-icon"></i></span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-full h-auto flex flex-wrap justify-center items-start">
            <ul class="flex flex-col justify-start items-start w-full mt-3">
{{--                    <li><h3 class="text-p text-sm mr-5 align-middle">{{ auth()->user()->name }}</h3></li>--}}
                    <li class="nav-icon mr-3 w-full flex justify-self-start items-center"
                        title="Notifikacije">
                        <a href="#" class="flex items-center justify-self-start w-full">
                            <span class="p-3 align-middle flex justify-center items-center" style="width:40px;height: 40px;"><i class="fi fi-bell text-lg text-icon"></i></span>
                            <span class="ml-3 text-p text-sm">Obaveštenja</span>
                        </a>
                    </li>

                <li class="nav-icon mr-3 w-full flex justify-self-start items-center"
                    title="Favoriti">
                    <a href="#" class="flex items-center justify-self-start w-full">
                        <span class="p-3 align-middle flex justify-center items-center" style="width:40px;height: 40px;"><i class="fi fi-heart-alt text-lg text-icon"></i></span>
                        <span class="ml-3 text-p text-sm">Favoriti</span>
                    </a>
                </li>

                <li class="nav-icon mr-3 w-full flex justify-self-start items-center"
                    title="Grupe">
                    <a href="#" class="flex items-center justify-self-start w-full">
                        <span class="p-3 align-middle flex justify-center items-center" style="width:40px;height: 40px;"><i class="fi fi-persons text-lg text-icon"></i></span>
                        <span class="ml-3 text-p text-sm">Moje grupe</span>
                    </a>
                </li>
                <li class="nav-icon mr-3 w-full flex justify-self-start items-center"
                    title="Grupe">
                    <a href="#" class="flex items-center justify-self-start w-full">
                        <span class="p-3 align-middle flex justify-center items-center" style="width:40px;height: 40px;"><i class="fi fi-person text-lg text-icon"></i></span>
                        <span class="ml-3 text-p text-sm">Moj nalog</span>
                    </a>
                </li>

            </ul>
        </div>
        @endif
</nav>
