<div class="w-full h-auto flex justify-center items-center mb-10">
    <div class="container mx-auto max-w-xs rounded-lg overflow-hidden shadow-lg my-2 bg-white">
        <div class="relative mb-6">
            <img class="w-full h-72 object-cover" src="https://cdn.pixabay.com/photo/2016/11/22/22/18/morning-1850893_960_720.jpg"
                 alt="Profile picture" />
            <div class="text-center absolute w-full" style="bottom: -30px">
                <div class="mb-10">
                    <p class="text-white tracking-wide uppercase text-lg font-bold">{{ auth()->user()->name }}</p>
                </div>
                <a href="#" title="Uredi profil">
                    <button class="p-4 rounded-full transition ease-in duration-200 focus:outline-none profile-card-btn">
                    <svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" class="w-6 h-6">
                        <path fill="#FFFFFF" d="M16,10c0,0.553-0.048,1-0.601,1H11v4.399C11,15.951,10.553,16,10,16c-0.553,0-1-0.049-1-0.601V11H4.601
                     C4.049,11,4,10.553,4,10c0-0.553,0.049-1,0.601-1H9V4.601C9,4.048,9.447,4,10,4c0.553,0,1,0.048,1,0.601V9h4.399
                     C15.952,9,16,9.447,16,10z" />
                    </svg>
                    </button>
                </a>
            </div>
        </div>
        <div class="py-10 px-6 text-center tracking-wide grid grid-cols-3 gap-6">
            <div class="posts">
                <p class="text-lg">324</p>
                <p class="text-gray-400 text-sm">Objave</p>
            </div>
            <div class="followers">
                <p class="text-lg">7542</p>
                <p class="text-gray-400 text-sm">Followers</p>
            </div>
            <div class="following">
                <p class="text-lg">295</p>
                <p class="text-gray-400 text-sm">Following</p>
            </div>
        </div>
    </div>
</div>

