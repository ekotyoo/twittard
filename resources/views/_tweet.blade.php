<div class="flex border-b border-gray-300 py-4">
    <div class="mr-2 flex-shrink-0">
        <img src="{{ $tweet->user->avatar }}" alt="avatar" class="rounded-full mr-2">
    </div>

    <div>
        <h5 class="font-bold mb-1">{{ $tweet->user->name }}</h5>

        <p class="text-sm">{{ $tweet->body }}</p>
    </div>
</div>