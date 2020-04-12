@component('components.app')
   
    <div>
        @foreach($users as $user)
            <div class="flex items-center mb-5">
                <a href="{{$user->path()}}">  <img src="{{$user->avatar}}" alt="{{$user->username}}'s avatar" class="mr-4 rounded" width="60">
                <div><h4 class="font-bold">{{'@'.$user->username}}</h4></div>
                </a>

            </div>
            @endforeach
    {{$users->links()}}
    </div>
    @endcomponent