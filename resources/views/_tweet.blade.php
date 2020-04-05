<div class="flex p-4 {{$loop->last  ? '': 'border-b border-b-gray-400'}}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{route('profile',$tweet->user)}}"><img src="https://i.pravatar.cc/50" class="rounded-full mr-3" alt="">
        </a>
    </div>
    <div>
        <h5 class="font-bold mb-4"><a href="{{route('profile',$tweet->user)}}">{{$tweet->user->name}}</a></h5>
        <p class="text-sm">{{$tweet->body}}</p>
    </div>

</div>