@extends('layouts.app')

@section('content')
    <header class="mb-6 rounded-lg relative">
        <img src="{{ asset('images/cover.jpg') }}" alt="cover" class="rounded-lg">

        <div class="flex items-center justify-between my-2">
            <div>
                <h2 class="font-bold text-2xl">
                    {{ $user->name }}
                </h2>
                <p class="text-sm text-gray-400">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
                <button type="submit" class="border border-blue-400 font-semibold text-blue-400 text-sm px-4 py-2 rounded-full shadow">Edit Profile</button>
                <button type="submit" class="font-semibold bg-blue-400 text-white text-sm px-4 py-2 rounded-full shadow">Follow</button>
            </div>
        </div>

        <p class="text-sm text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente quo optio ullam quasi eaque voluptates, aspernatur cupiditate praesentium. Aut a consequuntur blanditiis temporibus dolores doloremque facere obcaecati quam laborum excepturi?</p>
        
        <img src="{{ $user->avatar }}" alt="avatar" class="rounded-full mr-2 absolute" style="width: 150px; left: calc(50% - 75px); bottom: 20%">

    </header>

    @include('_timeline', [
        'tweets' => $user->tweets
    ])
@endsection
