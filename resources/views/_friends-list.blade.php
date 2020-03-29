<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>

    @foreach(auth()->user()->follows as $user)
        @isset($user)
    <li class="mb-4">
        <div>
            <a href="{{route('profile',$user)}}"  class="flex items-center text-sm">   <img src="https://i.pravatar.cc/40?u={{$user->email}}" class="rounded-full mr-3" alt="">
           {{$user->name }}</a>
        </div>
    </li>
        @endisset
        @endforeach
</ul>