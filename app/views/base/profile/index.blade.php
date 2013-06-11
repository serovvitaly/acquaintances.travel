@extends('base.layouts.private')

@section('content')

<div class="row">
  <div class="span12" style="height: 100px;">
    
  </div>
</div>

<div class="row">
  <div class="span3">
    <img src="/skins/base/img/camera_a.gif" border="0" width="200" height="200" alt="camera_a.gif (26 950 bytes)">
  </div>
  <div class="span5">текст</div>
  <div class="span4">кнопки</div>
</div>
<div class="row" style="margin-top: 20px;">
  <div class="span3">
    <div>
      <button style="width: 91%;" class="btn btn-primary" onclick="tripCreate()">Создать путешествие</button>
    </div>
  </div>
  <div class="span9">
    <div class="hider" id="profile-index">
      @include('base.profile.tabs.start')
    </div>
    <div class="hider" id="profile-adding" style="display: none;">
      @include('base.profile.tabs.trip')
    </div>
  </div>
</div>

@include('base.profile.templates')

@stop