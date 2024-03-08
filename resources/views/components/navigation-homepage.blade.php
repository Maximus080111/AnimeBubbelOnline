<nav x-data="{ open: false }" class="absolute top-0 left-0 right-0 flex items-center justify-around px-4 py-4 bg-gray-800 text-white">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-8 h-8 mr-2">
    <div>
        <ul class="flex space-x-4">
            <li><a href="{{ route('posts.index')}}" class="text-white hover:text-gray-400">Posts</a></li>
            <li><a href="#" class="text-white hover:text-gray-400">Link 2</a></li>
            <li><a href="#" class="text-white hover:text-gray-400">Link 3</a></li>
        </ul>
    </div>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="bg-phantomRed px-4 py-2 rounded-lg font-semibold hover:opacity-80">Logout</button>
    </form>
    @auth
        @if (Auth::user()->is_admin == 1)
            <a href="{{ url('/dashboard') }}" class="text-white">Dashboard</a>
        @endif
    @endauth
    <a href="{{ route('profile.edit') }}" class="text-white">Edit Profile</a>
    
</nav>