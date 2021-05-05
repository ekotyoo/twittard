<div class="flex {{ $loop->last ? '' : 'border-b-2 border-gray-200'}} items-center">
    <div class="mx-4 my-6 flex-shrink-0 ">
        <a href="{{ $tweet->user->path() }}">
            <img src="{{ $tweet->user->avatar }}" alt="avatar" class="rounded-full w-10">
        </a>
    </div>

    <div>
        <a href="{{ $tweet->user->path() }}">
            <h5 class="font-bold mb-1">{{ $tweet->user->name }}</h5>
        </a>

        <p class="text-sm">{{ $tweet->body }}</p>
    </div>
</div>