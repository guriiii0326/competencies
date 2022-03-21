@extends('layouts.admin')

@section('title', 'スキルマップの作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1　class="logo">Competencies</h1>
            </div>
            <div class="list-group">
                <h2>スキルマップ一覧</h2>
                <ul>
                   <li>タイトル</li>
                </ul>
            </div>
            <div class="main">
                <a class="menu" href="{{ url('/admin/skill/make') }}">スキルマップを作る</a>
            </div>
        </div>
    </div>
@endsection
