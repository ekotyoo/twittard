@extends('layouts.app')

@section('content')
    <div class="lg:flex lg:justify-between">
        <div class="lg:w-1/6">
            @include('_sidebar-links')
        </div>

        <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
            <div class="border-2 border-blue-400 rounded-lg p-6">
                @include('_publish-tweet-panel')
            </div>

            <div class="border border-gray-300 rounded-lg p-4 pt-0 my-6">
                @foreach ($tweets as $tweet)
                    @include('_tweet')  
                @endforeach
                
            </div>
        </div>

        <div class="lg:w-1/6">
            @include('_friends-list')
        </div>
    </div>
@endsection
