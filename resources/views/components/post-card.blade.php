<div class="bg-white p-4 mb-4 border-tropicalPurple border-2 rounded-lg">
    <div class="flex items-center">
        @if ($post->user->profile_photo_path)
            <img class="rounded-full h-12 w-12 object-cover object-center" src="{{ asset('storage/' . $post->user->profile_photo_path) }}" alt="Profile Image">
        @else
            <div class="rounded-full h-12 w-12 bg-gray-300"></div>
        @endif
        <h3 class="text-lg font-bold mx-2">{{ $post->user->name }}</h3>
        <div>
            <small class="text-gray-600">{{ $post->created_at->diffForHumans() }}</small>
            {{-- <small>{{$post->created_at->format('j F')}}</small> --}}
        </div>
    </div>
    <p class="my-4">{{ $post->message }}</p>
    <img class="rounded-lg h-52 w-96 object-cover object-center" src="{{ asset('storage/' . $post->image) }}" alt="Post Image">
</div>