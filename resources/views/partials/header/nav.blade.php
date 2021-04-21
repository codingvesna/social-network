<nav class="w-full p-2 flex flex-row justify-start items-center">
    @if (auth()->user())
    <div class="w-2/12 flex">
        <a href="{{ route('dashboard') }}" title="Dashboard">
            <img src="images/logo1.png" alt="logo" class="object-scale-down"/>
        </a>
    </div>
    <div class="w-4/12 flex">
        @include('partials.header.search')
    </div>
    <div class="w-6/12 flex items-center">
        @include('partials.header.navigation')
    </div>
@endif
</nav>
