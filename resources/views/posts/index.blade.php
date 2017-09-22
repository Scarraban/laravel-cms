@extends('layouts.app')

@section('content')
  <ul>
    @foreach($posts as $post)
      <li>
        <a href="{{route('posts.show', $post->id)}}">
          {{$post->title}}
        </a>
      </li>
    @endforeach
  </ul>
  <a href="{{route('posts.create')}}">
    <button className="btn btn-primary">
      New Post
    </button>
  </a>
@endsection
@section('footer')

@endsection
