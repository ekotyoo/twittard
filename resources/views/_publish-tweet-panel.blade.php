<form method="post" action="/tweet">
    @csrf
    <textarea name="body" class="w-full outline-none" placeholder="Tweet something cringe!"></textarea>

    <div class="flex justify-between pt-4 border-t border-gray-200">

        <img src="{{ auth()->user()->avatar }}" alt="avatar" class="rounded-full">

        <button type="submit" class="bg-blue-400 text-white px-4 py-2 rounded-full shadow">Twit a tard!!</button>

    </div>
</form>

@error('body')
    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
@enderror