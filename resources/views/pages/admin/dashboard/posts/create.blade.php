@extends('pages.admin.layouts.app')


@section('title', 'New Post')

@section('content')

<form method="POST" class="space-y-3" action="{{  route('posts.store') }}">
    @csrf
    <div>
        <x-jet-input required name='title' placeholder="Title" type="text" class="border p-3" />
    </div>
    <div class="mb-4">
        <label class="block text-grey-darker text-sm font-bold mb-2" for="category_id">
            category
        </label>
        <select value="{{ old('category_id') }}" name="category_id" id="inputGroupSelect1"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker">
            <option selected disabled> select category</option> value="{{ old('category_id') }}
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <input name="body" id="body" value="{{  old('body') }}" type="hidden">
    <trix-editor input="body" class="trix-content"></trix-editor>
    <div>
        <x-jet-button class="border rounded-full px-2 py-1" type="submit">Save</x-jet-button>
    </div>
</form>

@endsection