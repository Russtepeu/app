<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
           <link rel="stylesheet" href="{{ asset('css/app.css') }}">

            <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body>


    @foreach ($posts as $post)
    <div class="max-w-4xl px-10 my-4 py-6 bg bg-gray-200 rounded-xl shadow-3xl">
        <div class="flex justify-between items-center">
            <span class="font-bold text-gray-700">{{ $post->created_at->format('m/Y') }}</span>
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
    @endforeach
</body>

</html>