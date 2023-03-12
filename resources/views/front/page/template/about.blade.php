@extends('front.layouts.master')

@section('title', 'about')

@section('main')
<main>
    <div class="main">
        <h1 class="page-name">aboutページです。</h1>
        <h2>ユーザー一覧</h2>
        @foreach($companies as $company)
        <div class="user-card">
            <p>ユーザー名：{{$company->user_name}}</p>
            <p>所属企業：{{ $company->company_name }}</p>
        </div>
        @endforeach
    </div>
</main>
@endsection
