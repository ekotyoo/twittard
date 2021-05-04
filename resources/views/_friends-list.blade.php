<div class="flex flex-col px-6 py-4 bg-blue-50 rounded-lg">
    <h3 class="font-bold text-lg mb-4">Following</h3>

    <ul>
        @foreach (auth()->user()->follows as $user)
            <li>
                
                <div>
                    <a href="{{ route('profile', $user) }}" class="flex items-center text-sm mb-4">
                        <img src="{{ $user->avatar }}" alt="avatar" class="rounded-full mr-2 w-10">
                        {{ $user->name }}
                    </a>
                </div>
            </li>
        @endforeach
    </ul>

</div>
