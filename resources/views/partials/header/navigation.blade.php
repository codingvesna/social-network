<ul class="w-full hidden lg:flex flex-row justify-end items-center">
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
        <a href="{{ route('logout') }}">
            <span class="p-3 align-middle"><i class="fi fi-power text-lg text-icon"></i></span>
        </a>
    </li>
</ul>
