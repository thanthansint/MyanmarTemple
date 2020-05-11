@extends('layouts.appAdmin')

@section('content')
<div class="container">
   <edit-announcement-form id="{{$id}}" title="{{$title}}" date="{{$date}}" time="{{$time}}" location="{{$location}}" content="{{$content}}"/>
</div>
@endsection
