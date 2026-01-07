@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact/thanks.css') }}">
@endsection

@section('content')
<div class="thanks">
    <div class="thanks__background-text">Thank you</div>
    <p class="thanks__message">お問い合わせありがとうございました</p>
    <a class="thanks__button" href="{{ route('contact.index') }}">HOME</a>
</div>
@endsection
