@extends('front.layouts.master')

@section('title', 'top')

@section('main')
<main>
    <div class="main">
        <h1 class="page-name">topページです。</h1>
        <h2>企業一覧</h2>
        @foreach($companies as $company)
        <div class="company-card">
          <p>{{$company->company_name}}</p>
        </div>
        @endforeach
    </div>
</main>
@endsection
