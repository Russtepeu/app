<!DOCTYPE html>
<html lang="en">

<head>
    <x-partials.head />
</head>

<body>
    <x-partials.nav />

    @foreach ($posts as $post)
    <div class="max-w-4xl px-10 my-4 py-6 bg bg-gray-200 rounded-xl shadow-3xl">
        <div class="flex justify-between items-center">
            <span class="font-bold text-gray-700">{{ $post->created_at->format('d/m/Y') }}</span>
            <span class="px-2 py-1 bg-green-800 text-white font-bold rounded">
                {{ $post->categorie->name}}</span>
        </div>
        <div class="mt-4">
            <div>
                <h1 class="text-3xl text-green-500 uppercase">
                    {{ $post->title }} <br>
                </h1>

                <p>
                    {{ Str::words(strip_tags($post->body), 50) }}
                </p>
            </div>
            <div class="flex justify-between items-center mt-4">
                <a class="text-blue-600 hover:underline" href="">Read more</a>
                <span class="font-bold text-gray-700">{{ $post->user->name}}</span>
            </div>
        </div>
    </div>
    @foreach ($post->comments as $comment )
    <span>{{$comment->content}}</span>
    @endforeach
    @endforeach

    <footer>

        <x-partials.footer />
    </footer>

</body>

</html>