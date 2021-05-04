<div class="border border-gray-300 rounded-lg p-4 pt-0 my-6">
    @foreach ($tweets as $tweet)
        @include('_tweet')
    @endforeach
</div>