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
        @forelse($items as $item)
        <li class="result-item">
            <div class="result-date">登録日：{{ $item->created_at->format('Y/m/d') }}</div>

            <div class="result-keyword-box">
                <span class="result-label">キーワード：</span>
                <span class="result-keyword">{{ $item->keyword }}</span>
            </div>

            <div class="result-description-box">
                <span class="result-label">説明：</span>
                <p class="result-description">{{ $item->description }}</p>
            </div>
        </li>
        @empty
        <li class="result-item">該当するキーワードはありません。</li>
        @endforelse
    </ul>
    

</div>