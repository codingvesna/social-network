@extends('layouts.master')

@section('title')
    {{ "Početna" }}
@endsection

@section('content')

            <div class="h-auto w-full lg:w-7/12">
                <!-- Post  -->
                @include('partials.post')
                <!-- All Posts -->
                @include('partials.single_post')
            </div>

@endsection
