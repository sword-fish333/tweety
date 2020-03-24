<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>

    @foreach(auth()->user()->fallows as $user)
        @isset($user)
    <li class="mb-4">
        <div class="flex items-center text-sm">
            <img src="https://i.pravatar.cc/40?u={{$user->email}}" class="rounded-full mr-3" alt="">
         {{$user->name }}
        </div>
    </li>
        @endisset
        @endforeach
</ul>