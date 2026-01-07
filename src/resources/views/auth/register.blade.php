@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endsection

@section('header-nav')
<nav class="header__nav">
    <a class="header__nav-link" href="{{ route('login') }}">login</a>
</nav>
@endsection

@section('content')
<div class="register">
    <h2 class="register__title">Register</h2>
    <div class="register__form-wrap">
        <form class="register__form" action="{{ route('register') }}" method="POST" novalidate>
            @csrf
            <div class="register__form-group">
                <label class="register__label" for="name">お名前</label>
                <input class="register__input" type="text" name="name" id="name" placeholder="例: 山田　太郎" value="{{ old('name') }}">
                @error('name')
                    <p class="register__error">{{ $message }}</p>
                @enderror
            </div>
            <div class="register__form-group">
                <label class="register__label" for="email">メールアドレス</label>
                <input class="register__input" type="email" name="email" id="email" placeholder="例: test@example.com" value="{{ old('email') }}">
                @error('email')
                    <p class="register__error">{{ $message }}</p>
                @enderror
            </div>
            <div class="register__form-group">
                <label class="register__label" for="password">パスワード</label>
                <input class="register__input" type="password" name="password" id="password" placeholder="例: coachtech1106">
                @error('password')
                    <p class="register__error">{{ $message }}</p>
                @enderror
            </div>
            <div class="register__button-wrap">
                <button class="register__button" type="submit">登録</button>
            </div>
        </form>
    </div>
</div>
@endsection
