<div class="w-full h-auto flex flex-col justify-center items-center mb-10">
    <div class="container mx-auto max-w-xs rounded-lg overflow-hidden shadow-lg my-2 bg-white">
        <div class="relative mb-6">
            <img class="w-full h-40 object-cover" src="https://cdn.pixabay.com/photo/2016/11/22/22/18/morning-1850893_960_720.jpg"
                 alt="Profile picture" />
            <div class="text-center absolute w-full" style="bottom: -30px">
                <a href="#">
                    <img class="inline object-cover w-20 h-20 rounded-full border-2 border-solid border-white" src="https://images.pexels.com/photos/2589653/pexels-photo-2589653.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="profile picture"/>
                </a>
            </div>
        </div>
        <div class="mt-12 w-full">
            <h3 class="font-bold text-center text-sm">{{ auth()->user()->name }} {{ auth()->user()->last_name }}</h3>
        </div>
        <div class="py-10 px-6 text-center tracking-wide grid grid-cols-3 gap-6">
            <div class="posts">
                <p class="text-lg">{{ auth()->user()->posts->count()  }}</p>
                <p class="text-gray-400 text-sm">Objave</p>
            </div>
            <div class="followers">
                <p class="text-lg">7542</p>
                <p class="text-gray-400 text-sm">Pratioci</p>
            </div>
            <div class="following">
                <p class="text-lg">295</p>
                <p class="text-gray-400 text-sm">Praćenja</p>
            </div>
        </div>
    </div>
</div>

