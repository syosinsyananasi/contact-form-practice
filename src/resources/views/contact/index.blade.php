@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact/index.css') }}">
@endsection

@section('content')
<div class="contact">
    <h2 class="contact__title">Contact</h2>
    <form class="contact__form" action="{{ route('contact.confirm') }}" method="POST" novalidate>
        @csrf
        <table class="contact__table">
            <tr class="contact__row">
                <th class="contact__label">
                    <span class="contact__label-text">お名前</span>
                    <span class="contact__required">※</span>
                </th>
                <td class="contact__input">
                    <div class="contact__input-name">
                        <input class="contact__input-text" type="text" name="last_name" placeholder="例: 山田" value="{{ old('last_name', request('last_name')) }}">
                        <input class="contact__input-text" type="text" name="first_name" placeholder="例: 太郎" value="{{ old('first_name', request('first_name')) }}">
                    </div>
                    @error('last_name')
                        <p class="contact__error">{{ $message }}</p>
                    @enderror
                    @error('first_name')
                        <p class="contact__error">{{ $message }}</p>
                    @enderror
                </td>
            </tr>
            <tr class="contact__row">
                <th class="contact__label">
                    <span class="contact__label-text">性別</span>
                    <span class="contact__required">※</span>
                </th>
                <td class="contact__input">
                    <div class="contact__input-gender">
                        <label class="contact__radio-label">
                            <input class="contact__radio" type="radio" name="gender" value="1" {{ old('gender', request('gender', 1)) == 1 ? 'checked' : '' }}>
                            <span>男性</span>
                        </label>
                        <label class="contact__radio-label">
                            <input class="contact__radio" type="radio" name="gender" value="2" {{ old('gender', request('gender')) == 2 ? 'checked' : '' }}>
                            <span>女性</span>
                        </label>
                        <label class="contact__radio-label">
                            <input class="contact__radio" type="radio" name="gender" value="3" {{ old('gender', request('gender')) == 3 ? 'checked' : '' }}>
                            <span>その他</span>
                        </label>
                    </div>
                    @error('gender')
                        <p class="contact__error">{{ $message }}</p>
                    @enderror
                </td>
            </tr>
            <tr class="contact__row">
                <th class="contact__label">
                    <span class="contact__label-text">メールアドレス</span>
                    <span class="contact__required">※</span>
                </th>
                <td class="contact__input">
                    <input class="contact__input-text contact__input-text--full" type="email" name="email" placeholder="例: test@example.com" value="{{ old('email', request('email')) }}">
                    @error('email')
                        <p class="contact__error">{{ $message }}</p>
                    @enderror
                </td>
            </tr>
            <tr class="contact__row">
                <th class="contact__label">
                    <span class="contact__label-text">電話番号</span>
                    <span class="contact__required">※</span>
                </th>
                <td class="contact__input">
                    <div class="contact__input-tel">
                        <input class="contact__input-text contact__input-text--tel" type="text" name="tel1" placeholder="080" value="{{ old('tel1', request('tel1')) }}">
                        <span class="contact__input-tel-separator">-</span>
                        <input class="contact__input-text contact__input-text--tel" type="text" name="tel2" placeholder="1234" value="{{ old('tel2', request('tel2')) }}">
                        <span class="contact__input-tel-separator">-</span>
                        <input class="contact__input-text contact__input-text--tel" type="text" name="tel3" placeholder="5678" value="{{ old('tel3', request('tel3')) }}">
                    </div>
                    @if ($errors->has('tel1') || $errors->has('tel2') || $errors->has('tel3'))
                        <p class="contact__error">{{ $errors->first('tel1') ?: ($errors->first('tel2') ?: $errors->first('tel3')) }}</p>
                    @endif
                </td>
            </tr>
            <tr class="contact__row">
                <th class="contact__label">
                    <span class="contact__label-text">住所</span>
                    <span class="contact__required">※</span>
                </th>
                <td class="contact__input">
                    <input class="contact__input-text contact__input-text--full" type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address', request('address')) }}">
                    @error('address')
                        <p class="contact__error">{{ $message }}</p>
                    @enderror
                </td>
            </tr>
            <tr class="contact__row">
                <th class="contact__label">
                    <span class="contact__label-text">建物名</span>
                </th>
                <td class="contact__input">
                    <input class="contact__input-text contact__input-text--full" type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building', request('building')) }}">
                </td>
            </tr>
            <tr class="contact__row">
                <th class="contact__label">
                    <span class="contact__label-text">お問い合わせの種類</span>
                    <span class="contact__required">※</span>
                </th>
                <td class="contact__input">
                    <select class="contact__select" name="category_id">
                        <option value="">選択してください</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id', request('category_id')) == $category->id ? 'selected' : '' }}>{{ $category->content }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <p class="contact__error">{{ $message }}</p>
                    @enderror
                </td>
            </tr>
            <tr class="contact__row">
                <th class="contact__label">
                    <span class="contact__label-text">お問い合わせ内容</span>
                    <span class="contact__required">※</span>
                </th>
                <td class="contact__input">
                    <textarea class="contact__textarea" name="detail" placeholder="お問い合わせ内容をご記載ください">{{ old('detail', request('detail')) }}</textarea>
                    @error('detail')
                        <p class="contact__error">{{ $message }}</p>
                    @enderror
                </td>
            </tr>
        </table>
        <div class="contact__button-wrap">
            <button class="contact__button" type="submit">確認画面</button>
        </div>
    </form>
</div>
@endsection
