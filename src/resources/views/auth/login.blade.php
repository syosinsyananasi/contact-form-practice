@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection

@section('header-nav')
<nav class="header__nav">
    <a class="header__nav-link" href="{{ route('register') }}">register</a>
</nav>
@endsection

@section('content')
<div class="login">
    <h2 class="login__title">Login</h2>
    <div class="login__form-wrap">
        <form class="login__form" action="{{ route('login') }}" method="POST" novalidate>
            @csrf
            <div class="login__form-group">
                <label class="login__label" for="email">メールアドレス</label>
                <input class="login__input" type="email" name="email" id="email" placeholder="例: test@example.com" value="{{ old('email') }}">
                @error('email')
                    <p class="login__error">{{ $message }}</p>
                @enderror
            </div>
            <div class="login__form-group">
                <label class="login__label" for="password">パスワード</label>
                <input class="login__input" type="password" name="password" id="password" placeholder="例: coachtech1106">
                @error('password')
                    <p class="login__error">{{ $message }}</p>
                @enderror
            </div>
            <div class="login__button-wrap">
                <button class="login__button" type="submit">ログイン</button>
            </div>
        </form>
    </div>
</div>
@endsection
