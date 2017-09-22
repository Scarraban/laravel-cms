@extends('layouts.app')

@section('content')
{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PATCH']) !!}
  <div class="form-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('content', 'Content') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
  </div>
{!! Form::close() !!}
@endsection
@section('footer')

@endsection
