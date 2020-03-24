<h3 class="font-bold text-xl mb-4">Friends</h3>
<ul>
    @foreach(auth()->user()->follows() as $user)
    <li class="mb-4">
        <div class="flex items-center text-sm">
            <img src="https://i.pravatar.cc/40?u={{auth()->user()->email}}" class="rounded-full mr-3" alt="">
         {{$user->name}}
        </div>
    </li>

        @endforeach
</ul>