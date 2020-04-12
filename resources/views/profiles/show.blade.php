@component('components.app')
    <header class="mb-6 relative">
        <div class="relative">
        <img src="{{asset('/images/dimitry klokov.jpg')}}" alt="profile img" class="border-r-4 mb-2" style="width: 100%;border-radius: 30px;height: 300px;">
        <img src="{{$user->avatar}}" class="rounded-full mr-3 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" width="150"
        style="left: 50%;"
        >
        </div>
        <div class="flex justify-between items-center">
       <div style="max-width: 300px;">
           <h3 class="font-bold text-2xl mb-0">{{$user->name}}</h3>
           <p class="text-sm">{{$user->created_at->diffForHumans()}}</p>
       </div>
       <div class="flex">
           @can('edit',$user)

           <a  href="{{$user->path('edit')}}" class=" rounded-full border border-grey-300 mr-2 py-2 px-4 text-black text-xs">Edit  profile</a>
            @endcan
           @include('components.follow_button',['user'=>$user])

       </div>
   </div>
        <p class="text-sm text-center mt-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab culpa et excepturi illo, illum necessitatibus possimus repudiandae. Animi cum debitis deserunt ducimus fuga temporibus totam, voluptatum! A ab, accusantium assumenda cumque dolor harum in minima natus nesciunt quasi ullam velit?</p>
    </header>
  <h3> User {{$user->name}}</h3>
    @include('_timeline',['tweets'=>$tweets])
@endcomponent
