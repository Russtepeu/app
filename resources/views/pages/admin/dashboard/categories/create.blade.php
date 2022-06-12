@extends('pages.admin.layouts.app')


@section('content')

<form method="post" action="{{ route(" categories.store") }}">
    @csrf
    <!-- component -->
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="category">
                Category
            </label>
            <input name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                id="category" type="text" placeholder="category">
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue hover:bg-blue-dark text-red-400 font-bold py-2 px-4 rounded" type="submit">
                add
            </button>
        </div>
    </div>
</form>

@endsection