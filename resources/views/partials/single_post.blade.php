

@if ($posts->count())
    @foreach($posts as $post)
        <div class="w-full h-auto flex flex-col justify-center items-center mb-10">
            <div class="w-full lg:w-10/12 2xl:w-8/12 mx-auto border-solid border-1 border-border flex flex-col rounded-xl shadow">
                <div class="w-full border-b-1 border-solid border-border px-4 py-4">
                    <div class="w-full flex justify-start items-center">
                        <div class="w-2/12">
                            <a href="#">
                                <img class="inline object-cover w-8 h-8 md:w-12 md:h-12 rounded-full" src="https://images.pexels.com/photos/2589653/pexels-photo-2589653.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="profile picture"/>
                            </a>
                        </div>
                        <div class="w-10/12 flex items-center justify-between">
                            <div class="flex flex-col justify-start items-start">
                                <a href="#">
                                    <span class="font-bold text-base text-p">{{$post->user->name}} {{$post->user->last_name}} </span>
                                </a>
                                <span class="text-xs font-normal text-queen-blue"> {{$post->created_at->toTimeString()}}</span>
                            </div>
                            <div>
                                <form action="{{ route('posts.delete', $post) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="Obrisi" class="text-sm text-queen-blue hover:text-fiery-red focus:outline-none">
                                        <i class="fi fi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full border-b-1 border-solid border-border px-4 py-4">
                    <p class="text-p">{{ $post->post }}</p>
                </div>
                <div class="w-full border-b-1 border-solid border-border px-4 py-4 flex justify-between items-center">
                    <span class="text-icon text-sm"><i class="fi fi-heart text-fiery-red mr-1"></i> {{ $post->likes->count() }}</span>

                    <div class="flex items-center">
                        @if (!$post->likedBy(auth()->user()))
                            <form action="{{ route('posts.likes', $post) }}" method="post">
                                @csrf
                                <button type="submit" title="Like" class="text-sm text-icon hover:text-fiery-red focus:outline-none">
                                    <i class="fi fi-like"></i>
                                </button>
                            </form>
                        @else
                            <form action="{{ route('posts.likes', $post) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" title="Unlike" class="text-sm text-icon hover:text-queen-blue focus:outline-none">
                                    <i class="fi fi-dislike"></i>
                                </button>
                            </form>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    @endforeach
@else
    <div class="w-full h-auto flex flex-col justify-center items-center mb-10">
        <p> Nema objava.</p>
    </div>
@endif
