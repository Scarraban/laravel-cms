@extends('layouts.app')

@section('content')
  {{$post->title}}
  <a href="{{route('posts.edit', $post->id)}}">
    <button>Edit</button>
    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
      {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
  </a>
@endsection
@section('footer')

@endsection
