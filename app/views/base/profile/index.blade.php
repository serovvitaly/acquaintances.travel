@extends('base.layouts.private')

@section('content')

<div class="row">
  <div class="span12 sidebar" style="height: 100px; background: aliceblue;">
    
  </div>
</div>

<div class="row">
  <div class="span3">
    <div class="profile-image">
      <img src="/data/img/{{$user->id}}.jpg" alt="">
    </div>
    <div style="padding: 5px 0; text-align: center; margin-right: 20px;"><a href="/profile">Настройки</a></div>
    <div class="profile-sidebar">
      <div class="main-menu">
        @include('base.profile.mainmenu')
      </div>
    </div>
  </div>
  <div class="span9">
    <div class="profile-content">
      {{$content}}
    </div>
  </div>
</div>
@include('base.profile.footer')
@include('base.profile.templates')

@stop