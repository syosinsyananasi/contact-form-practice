@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact/confirm.css') }}">
@endsection

@section('content')
<div class="confirm">
    <h2 class="confirm__title">Confirm</h2>
    <form class="confirm__form" action="{{ route('contact.store') }}" method="POST">
        @csrf
        <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
        <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
        <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
        <input type="hidden" name="email" value="{{ $contact['email'] }}">
        <input type="hidden" name="tel1" value="{{ $contact['tel1'] }}">
        <input type="hidden" name="tel2" value="{{ $contact['tel2'] }}">
        <input type="hidden" name="tel3" value="{{ $contact['tel3'] }}">
        <input type="hidden" name="address" value="{{ $contact['address'] }}">
        <input type="hidden" name="building" value="{{ $contact['building'] ?? '' }}">
        <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}">
        <input type="hidden" name="detail" value="{{ $contact['detail'] }}">

        <table class="confirm__table">
            <tr class="confirm__row">
                <th class="confirm__label">お名前</th>
                <td class="confirm__value">{{ $contact['last_name'] }}　{{ $contact['first_name'] }}</td>
            </tr>
            <tr class="confirm__row">
                <th class="confirm__label">性別</th>
                <td class="confirm__value">{{ $genderLabel }}</td>
            </tr>
            <tr class="confirm__row">
                <th class="confirm__label">メールアドレス</th>
                <td class="confirm__value">{{ $contact['email'] }}</td>
            </tr>
            <tr class="confirm__row">
                <th class="confirm__label">電話番号</th>
                <td class="confirm__value">{{ $contact['tel'] }}</td>
            </tr>
            <tr class="confirm__row">
                <th class="confirm__label">住所</th>
                <td class="confirm__value">{{ $contact['address'] }}</td>
            </tr>
            <tr class="confirm__row">
                <th class="confirm__label">建物名</th>
                <td class="confirm__value">{{ $contact['building'] ?? '' }}</td>
            </tr>
            <tr class="confirm__row">
                <th class="confirm__label">お問い合わせの種類</th>
                <td class="confirm__value">{{ $category->content }}</td>
            </tr>
            <tr class="confirm__row">
                <th class="confirm__label">お問い合わせ内容</th>
                <td class="confirm__value">{{ $contact['detail'] }}</td>
            </tr>
        </table>
        <div class="confirm__button-wrap">
            <button class="confirm__button" type="submit">送信</button>
            <a class="confirm__link" href="{{ route('contact.index') }}" onclick="event.preventDefault(); document.getElementById('back-form').submit();">修正</a>
        </div>
    </form>
    <form id="back-form" action="{{ route('contact.index') }}" method="GET" style="display: none;">
        <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
        <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
        <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
        <input type="hidden" name="email" value="{{ $contact['email'] }}">
        <input type="hidden" name="tel1" value="{{ $contact['tel1'] }}">
        <input type="hidden" name="tel2" value="{{ $contact['tel2'] }}">
        <input type="hidden" name="tel3" value="{{ $contact['tel3'] }}">
        <input type="hidden" name="address" value="{{ $contact['address'] }}">
        <input type="hidden" name="building" value="{{ $contact['building'] ?? '' }}">
        <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}">
        <input type="hidden" name="detail" value="{{ $contact['detail'] }}">
    </form>
</div>
@endsection
