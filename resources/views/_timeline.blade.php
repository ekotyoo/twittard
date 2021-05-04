<div class="border-2 border-gray-200 rounded-lg my-6">
    @foreach ($tweets as $tweet)
        @include('_tweet')
    @endforeach
</div>