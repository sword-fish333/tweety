<div class="border border-grey-300 rounded-lg border-lg mb-6">

    @foreach($tweets as $tweet)
        @include('_tweet')
    @endforeach

</div>