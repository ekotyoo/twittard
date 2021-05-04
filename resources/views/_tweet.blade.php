<div class="flex border-b-2 border-gray-200 items-center">
    <div class="mx-4 my-6 flex-shrink-0 ">
        <a href="{{ route('profile', $tweet->user) }}">
            <img src="{{ $tweet->user->avatar }}" alt="avatar" class="rounded-full w-10">
        </a>
    </div>

    <div>
        <a href="{{ route('profile', $tweet->user) }}">
            <h5 class="font-bold mb-1">{{ $tweet->user->name }}</h5>
        </a>

        <p class="text-sm">{{ $tweet->body }}</p>
    </div>
</div>