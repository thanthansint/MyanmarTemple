@extends('layouts.appAdmin')

@section('content')
<div class="container">
   <edit-form id="{{$id}}" title="{{$title}}" date="{{$date}}" time="{{$time}}" location="{{$location}}" content="{{$content}}"/>
</div>
@endsection
