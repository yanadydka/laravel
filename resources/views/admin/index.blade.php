@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Админская панель</h1>
    <a href="{{ route('category.create') }}" class="btn btn-success">Создать категорию</a>

    <h2>Список категорий</h2>
    <form method="POST" action="{{ route('category.destroy') }}">
        @csrf
        @method('DELETE')
        <select name="category_id" class="form-control">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-danger mt-2">Удалить категорию</button>
    </form>
</div>
@endsection