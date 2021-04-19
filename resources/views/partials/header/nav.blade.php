<nav class="w-full p-2 flex flex-row justify-start items-center">
    @if (auth()->user())
    <div class="w-2/12 flex">
        <a href="{{ route('dashboard') }}" title="Dashboard">
            <img src="images/logo1.png" alt="logo" class="object-scale-down"/>
        </a>
    </div>
    <div class="w-4/12 flex">
        <div class="flex justify-start w-full items-center">
            <form action="" method="" class="w-3/4">
                @csrf
                <div class="w-full flex">
                    <div class="relative text-gray-700 w-full">
                        <button type="submit" class="absolute right-0 -top-0.5 mt-3 mr-4 focus:outline-none">
                            <i class="fi fi-search"></i>
                        </button>
                        <input type="search" name="search" placeholder="Unesite pojam za pretragu..." class="w-full bg-white h-10 px-5 pr-10 border rounded-full text-sm focus:outline-none focus:border-p">

                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="w-6/12 flex items-center">
        <ul class="w-full flex flex-row justify-end items-center">
                <li><h3 class="text-p text-base mr-5 align-middle">{{ auth()->user()->name }}</h3></li>
                <li class="nav-icon flex justify-center items-center border-solid border-1 border-transparent rounded mr-3 hover:border-queen-blue hover:bg-queen-blue hover:shadow" style="width: 40px; height: 40px;"
                    title="Notifikacije">
                    <a href="#">
                        <span class="p-3 align-middle"><i class="fi fi-bell text-lg text-icon"></i></span>
                    </a>
                </li>

                <li class="nav-icon flex justify-center items-center border-solid border-1 border-transparent rounded mr-3 hover:border-fiery-red hover:bg-fiery-red hover:shadow" style="width: 40px; height: 40px;"
                    title="Favoriti">
                    <a href="#">
                        <span class="p-3 align-middle"><i class="fi fi-heart-alt text-lg text-icon"></i></span>
                    </a>
                </li>

                <li class="nav-icon flex justify-center items-center border-solid border-1 border-transparent rounded mr-3 hover:border-queen-blue hover:bg-queen-blue hover:shadow" style="width: 40px; height: 40px;"
                    title="Moje grupe">
                    <a href="#">
                        <span class="p-3 align-middle"><i class="fi fi-persons text-lg text-icon"></i></span>
                    </a>
                </li>

                <li class="nav-icon flex justify-center items-center border-solid border-1 border-transparent rounded mr-3 hover:border-queen-blue hover:bg-queen-blue hover:shadow" style="width: 40px; height: 40px;"
                    title="Moj nalog">
                    <a href="#">
                        <span class="p-3 align-middle"><i class="fi fi-person text-lg text-icon"></i></span>
                    </a>
                </li>

                <li class="nav-icon flex justify-center items-center border-solid border-1 border-transparent rounded hover:border-queen-blue hover:bg-queen-blue hover:shadow" style="width: 40px; height: 40px;"
                    title="Izloguj se">
                    <a href="#">
                        <span class="p-3 align-middle"><i class="fi fi-power text-lg text-icon"></i></span>
                    </a>
                </li>
        </ul>
    </div>
@endif
</nav>
