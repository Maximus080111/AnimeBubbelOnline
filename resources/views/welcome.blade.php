<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite('resources/css/app.css')
    </head>
    <body>
        <x-navigation-homepage />
        <div class="min-h-screen-80 bg-gray-600 flex justify-center items-center flex-col">
            <h1>Welcome {{Auth::user()->name}}!</h1>
            <h2>to AnimebubbelOnline</h2>
        </div>
            {{-- <h1>welcome, {{Auth::user()->name}}</h1>   
            <h2>{{Auth::user()->email}}</h2> --}}
        <main class="px-6">
            <h1 class="font-bold text-3xl text-phantomRed my-4">Posts</h1>
            @foreach($posts->sortByDesc('created_at') as $post)
                <x-post-card :post=$post />
            @endforeach
        </main>
    </body>
</html>