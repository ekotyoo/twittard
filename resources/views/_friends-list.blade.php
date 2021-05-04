<div class="flex flex-col px-6 py-4 bg-blue-50 rounded-lg">
    <h3 class="font-bold text-lg mb-4">Friends</h3>

    <ul>
        @foreach (range(1, 8) as $index)
            <li>
                <div class="flex items-center text-sm mb-4">
                    <img src="https://i.pravatar.cc/40" alt="avatar" class="rounded-full mr-2">

                    John Doe
                </div>
            </li>
        @endforeach
    </ul>

</div>
