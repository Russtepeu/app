@extends('pages.admin.layouts.app')


@section('title', 'New Post')

@section('content')

<form method="POST" class="space-y-3" action="{{  route('posts.store') }}" enctype="multipart/form-data">
    @csrf
    <div>
        <input required name='title' placeholder="Post title" type="text" class="border rounded  p-3" />
    </div>
    <div class="mb-4">
        <label class="block text-grey-darker text-sm font-bold mb-2" for="categorie_id">
            categorie
        </label>
        <select value="{{ old('categorie_id') }}" name="categorie_id" id="inputGroupSelect1"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker">
            <option selected disabled> select categorie</option> value="{{ old('categorie_id') }}
            @foreach ($categories as $categorie)
            <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
            @endforeach
        </select>
    </div>
    <label for="">Upload Image</label>
    <input type="file" name="cover_image" id="cover_image">
    <div>

        <input type="text" placeholder="post content" name="body" id="body" value="{{  old('body') }}">

    </div>

    <div>
        <button class="border rounded-full px-2 py-1" type="submit">Save</button>
    </div>
</form>

@endsection