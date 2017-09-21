@extends('layouts.app')

@section('content')
<form method="POST" action="/posts/{{$post->id}}">
  {{ csrf_field() }}
  <input name="_method" type="hidden" value="PUT" />
  <input type="text" name="title" value="{{$post->title}}" placeholder="Enter title"/>
  <textarea name="content">{{$post->content}}</textarea>
  <input type="submit" name="submit" />
</form>
@endsection
@section('footer')

@endsection
