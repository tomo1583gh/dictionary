@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="todo__alert">
    @if(session('message'))
    <div class="todo__alert--success">
        {{ session('message') }}
    </div>
    @endif
    @if ($errors->any())
    <div class="todo__alert--danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>

<div class="search-container">
    <div class="search-title">検索画面</div>

    <form class="search-form" action="{{ route('dictionary.index') }}" method="GET">
        <input type="text" name="keyword" value="{{request('keyword')}}">
        <button type="submit">検索</button>
    </form>

    @auth
    <a class="register-button" href="{{ route('dictionary.create') }}">
        <button type="button">登録画面へ</button>
    </a>
    @endauth


    <ul class="result-list">
        @foreach($items as $item)
        <li class="result-item">
            <span>{{ $item->created_at->format('Y/n/j') }}</span>
            <span>{{ $item->keyword }}</span>
            <span>{{ $item->description }}</span>
        </li>
        @endforeach
    </ul>
</div>