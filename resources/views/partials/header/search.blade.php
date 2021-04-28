<div class="flex justify-start w-full items-center">
    <form action="" method="" class="w-full lg:w-3/4" autocomplete="off">
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
