@extends('layouts.app')

@section('content')
  {{$post->title}}
  <a href="{{route('posts.edit', $post->id)}}">
    <button>Edit</button>
    <form method="POST" action="/posts/{{$post->id}}">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="DELETE"/>
      <input type="submit" name="submit" value="Delete"/>
    </form>
  </a>
@endsection
@section('footer')

@endsection
