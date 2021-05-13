@extends('layouts.master')

@section('title')
    {{ "Početna" }}
@endsection

@section('content')
    <main class="px-4 lg:px-10 py-4 lg:py-6">
        <section class="w-full flex flex-col md:flex-row justify-center items-center">
            <aside class="h-auto w-full md:w-2/12 px-4 border-1 border-solid border-pink-100">
                <!-- Sidebar -->
                @include('partials.aside.sidebar')
                <!-- My Groups -->

                <!-- Create Group -->
            </aside>
            <div class="h-auto w-full md:w-7/12 border-1 border-solid border-pink-100">
                <!-- Top Posts -->
                <!-- Post something -->d
                <!-- All Posts -->
            </div>
            <aside class="h-auto w-full md:w-3/12 border-1 border-solid border-pink-100">
                profile
                <!-- Who to follow - View All -->
                <!-- Group Suggestions - View All -->d
                <!-- Popular Tags -->
            </aside>
        </section>
    </main>
@endsection
