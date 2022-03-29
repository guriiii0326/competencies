@extends('layouts.make')

@section('title', 'スキルマップの作成')

@section('content')
    <div class="container">
        <h1　class="logo">Competencies</h1>
        <h2>スキルマップ作成</h2>
    </div>
    <form action="{{ action('Admin\SkillController@create') }}" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-md-2" for="title">タイトル</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-2" for="category">カテゴリー</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="category" value="{{ old('category') }}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-2" for="name">業務名</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="name">
        </div>
    </div>
    {{ csrf_field() }}
    <input type="submit" class="btn btn-primary" value="更新">
    </form>
@endsection
