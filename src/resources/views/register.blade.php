@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="container">
    <h2>登録画面</h2>

    <form action="{{ route('dictionary.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="keyword">キーワード</label>
            <input type="text" name="keyword" id="keyword" required>
        </div>
        <div class="form-group">
            <label for="description">説明</label>
            <textarea name="description" id="description" required></textarea>
        </div>
        <div class="button-group">
            <a href="{{ route('dictionary.index') }}">
                <button type="button">検索画面へ</button>
            </a>
            <button type="submit">登録</button>
        </div>
    </form>
</div>
@endsection