@extends('layouts.app')

@section('content')
<div class="container">
    <h2>辞書編集</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('dictionary.update', $dictionary->id) }}">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="keyword">キーワード</label>
            <input type="text" class="form-control" name="keyword" value="{{ old('keyword', $dictionary->keyword) }}">
        </div>

        <div class="form-group">
            <label for="description">説明</label>
            <textarea class="form-control" name="description">{{ old('description', $dictionary->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">更新</button>
    </form>
</div>
@endsection