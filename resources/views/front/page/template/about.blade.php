@extends('front.layouts.master')

@section('title', 'about')

@section('main')
<main>
    <div class="main">
        <h1 class="page-name">aboutページです。</h1>
        <h2>ユーザー一覧</h2>
        @foreach($users as $user)
        <div class="user-card">
            <p>{{$user->name}}</p>
            <p>所属企業：{{ $user->company->name}}</p>
        </div>
        @endforeach
    </div>
</main>
@endsection
