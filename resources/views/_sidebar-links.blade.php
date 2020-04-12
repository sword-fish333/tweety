<ul>
    <li>
        <a href="{{route('home')}}" class="font-bold text-lg mb-4 block">Home</a>
    </li>
    <li>
        <a href="{{route('explore')}}" class="font-bold text-lg mb-4 block">Explorer</a>
    </li>

    <li>
        <a href="{{route('profile',current_user())}}" class="font-bold text-lg mb-4 block">Profile</a>
    </li>
    <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="font-bold text-lg">Logout</button>
    </form>
</ul>