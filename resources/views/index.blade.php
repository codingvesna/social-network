@extends('layouts.master')

@section('title')
    {{ "Početna" }}
@endsection

@section('content')
    <main class="px-4 lg:px-10 py-4 lg:py-6 mt-5">
        <section class="w-full flex flex-col md:flex-row justify-center items-start">
            <aside class="h-auto w-full md:w-2/12 px-4">
                <!-- Sidebar -->
                @include('partials.aside.sidebar')
                <!-- Button Group -->
                <div class="w-full h-auto flex flex-col justify-center items-center mb-10">
                    <button class="w-full px-4 py-3 mb-4 bg-queen-blue font-normal text-sm tracking-wide rounded-full text-white cursor-pointer hover:bg-fiery-red focus:bg-fiery-red focus:outline-none">
                        <a href="#">Nova objava</a>
                    </button>
                    <button class="w-full px-4 py-3 mb-4 bg-fiery-red font-normal text-sm tracking-wide rounded-full text-white cursor-pointer hover:bg-queen-blue focus:bg-queen-blue focus:outline-none">
                        <a href="#">Napravi grupu</a>
                    </button>
                </div>
            </aside>
            <div class="h-auto w-full md:w-7/12">
                <!-- Post  -->
                @include('partials.post')
                <!-- All Posts -->
                @include('partials.single_post')
            </div>
            <aside class="h-auto w-full md:w-3/12">
                <!-- Profile Card -->
                @include('partials.aside.profile_card')
                <!-- Who to follow - View All -->
                @include('partials.aside.who_to_follow')
                <!-- Group Suggestions - View All -->
                @include('partials.aside.my_groups')
                <!-- Popular Tags -->
            </aside>
        </section>
    </main>
@endsection
