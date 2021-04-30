<nav class="w-full flex p-2 flex flex-row justify-start items-center">
    @if (auth()->user())
    <div class="w-2/12 flex justify-center">
        <a href="{{ route('dashboard') }}" title="Dashboard">
            <img src="images/logo.jpg" alt="logo" class="object-scale-down logo"/>
        </a>
    </div>
    <div class="hidden sm:w-4/12 sm:flex">
        @include('partials.header.search')
    </div>
    <div class="w-10/12 sm:w-6/12 sm:flex items-center">
        @include('partials.header.navigation')
    </div>
@endif
</nav>


