@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="title p-2">
            <h1 class="logo">Competencies</h1>
        </div>
        <div class="index">
            <ul class="navi">
                <li class="in-l"><a href="{{ url('/skill/check') }}">進捗率の確認</a></li>
                <li class="in-l"><a href="{{ url('/skill/update') }}">スキルマップ更新</a></li>
                <li class="in-r"><a href="{{ url('/admin/skill/create') }}">スキルマップ作成</a></li>
                <li class="in-r"><a href="#">動画のアップロード</a></li>
            </ul>
        </div>
    </div>