<form method="POST" action="/profile/{{ $user->name }}/follow">
    @csrf
    <button type="submit" class="font-semibold bg-blue-400 focus:outline-none hover:bg-blue-500 transition ease-in-out duration:200 text-white text-sm px-4 py-2 rounded-full shadow">{{ auth()->user()->following($user) ? 'Unfollow' : 'Follow' }}</button>
</form>