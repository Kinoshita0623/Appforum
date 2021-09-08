@extends('adminlte::page')

@section('title', 'アプリ・サービス詳細')

@section('content_header')
    <!-- nothing -->
@stop

@section('content')
    <div>

        <img src="{{$app->header_image_path}}" class="position-relative w-100" style="height: 300px;">

        <div class="row position-absolute" style="top: 270px;">
            <img src="/assets/app_icon_skyblue.png" class="img-rounded ml-4" width="200" height="200">
            <p class="h1 mt-auto ml-3">{{$app->name}}</p>
        </div>

        


        <ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-top: 90px;">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p class="h3">アプリ詳細</p>
                <p>アプリID : {{$app->id}}</p>
                <p>作成者 : {{$app->user_id}}</p>
                <p>作成日 : {{$app->created_at}}</p>
                <p>更新日: {{$app->updated_at}}</p>
                <p>{{$app->text}}</p>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                Lorem ipsum dolor sit amet.
            </div>
        </div>


    </div>
@stop

@section('css')
    {{-- ページごとCSSの指定
    <link rel="stylesheet" href="/css/xxx.css">
    --}}
@stop

@section('js')
<script> console.log('ページごとJSの記述'); </script>
@stop