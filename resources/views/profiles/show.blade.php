@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <img src="{{asset('/images/dimitry klokov.jpg')}}" alt="profile img" class="border-r-4 mb-2" style="width: 100%;border-radius: 30px;height: 300px;">
   <div class="flex justify-between items-center">
       <div>
           <h3 class="font-bold text-2xl mb-0">{{$user->name}}</h3>
           <p class="text-sm">{{$user->created_at->diffForHumans()}}</p>
       </div>
       <div>
           <a  class=" rounded-full border border-grey-300 mr-2 py-2 px-4 text-black text-xs">Edit  profile</a>
           <a  class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">Fallow me</a>

       </div>
   </div>
        <p class="text-sm text-center mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab culpa et excepturi illo, illum necessitatibus possimus repudiandae. Animi cum debitis deserunt ducimus fuga temporibus totam, voluptatum! A ab, accusantium assumenda cumque dolor harum in minima natus nesciunt quasi ullam velit?</p>
        <img src="https://i.pravatar.cc/200" class="rounded-full mr-3 absolute"  style=" width:150px;left:40%; top:50%">
    </header>
  <h3> User {{$user->name}}</h3>
  <hr>
    @include('_timeline',['tweets'=>$user->tweets])
@endsection
