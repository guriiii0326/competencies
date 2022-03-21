@extends('layouts.movie')

@section('title', '動画のアップロード')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1　class="logo">Competencies</h1>
            </div>
            <div class="list-group">
                <h2>動画アップロード</h2>
                <ul>
                   <li>タイトル</li>
                </ul>
            </div>
            <div class="main">
                <a class="menu" href="{{ url('/admin/skill/movie') }}">動画を更新する</a>
            </div>
        </div>
    </div>
@endsection
