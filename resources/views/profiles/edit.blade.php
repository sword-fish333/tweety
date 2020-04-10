@component('components.app')
  <form action="{{$user->path()}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="mb-6">
      <label for="name" class="block uppercase font-bold text-xs text-grey-700">Name</label>
      <input type="text" name="name" class="border border-grey-400 p-2 w-full" value="{{$user->name}}" id="name" required>
      @error('name')
      <p class="text-red-500 text-xs  mt-2" >{{$message}}</p>
      @enderror
    </div>
    <div class="mb-6">
      <label for="username" class="block uppercase font-bold text-xs text-grey-700">Username</label>
      <input type="text" name="username" class="border border-grey-400 p-2 w-full" value="{{$user->username}}" id="username" required>
      @error('username')
      <p class="text-red-500 text-xs  mt-2" >{{$message}}</p>
      @enderror
    </div>
    <div class="mb-6">
      <label for="email" class="block uppercase font-bold text-xs text-grey-700">Email</label>
      <input type="email" name="email" class="border border-grey-400 p-2 w-full" value="{{$user->email}}" id="email" required>
      @error('email')
      <p class="text-red-500 text-xs  mt-2" >{{$message}}</p>
      @enderror
    </div>
    <div class="mb-6">
      <label for="avatar" class="block uppercase font-bold text-xs text-grey-700">Avatar</label>
      <div class="flex">
      <input type="file" name="avatar" class="border border-grey-400 p-2 w-full" value="{{$user->avatar}}" id="avatar" required>
        <img src="{{asset('app/public/avatars/'.$user->avatar)}}" alt="Your avatar" width="100px" >
      </div>
      @error('email')
      <p class="text-red-500 text-xs  mt-2" >{{$message}}</p>
      @enderror
    </div>
    <div class="mb-6">
      <label for="password" class="block uppercase font-bold text-xs text-grey-700">Password</label>
      <input type="password" name="password" class="border border-grey-400 p-2 w-full" id="password" required>
      @error('email')
      <p class="text-red-500 text-xs  mt-2" >{{$message}}</p>
      @enderror
    </div>
    <div class="mb-6">
      <label for="password_confirmation" class="block uppercase font-bold text-xs text-grey-700">Password Confirmation</label>
      <input type="password" name="password_confirmation" class="border border-grey-400 p-2 w-full"  id="password_confirmation" required>
      @error('password_confirmation')
      <p class="text-red-500 text-xs  mt-2" >{{$message}}</p>
      @enderror
    </div>
    <div class="mb-6">
      <input type="submit" value="Submit" class="btn bg-blue-400 rounded py-2 px-4 hover:bg-blue-500 text-white">
    </div>
  </form>
@endcomponent
