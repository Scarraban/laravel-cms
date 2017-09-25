@extends('layouts.app')

@section('content')
{!! Form::open(['route' => 'posts.store']) !!}
  <div class="form-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('content', 'Content') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>
              {{ $error }}
            </li>
          @endforeach
        </ul>
      </div>
    @endif
    {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
  </div>
{!! Form::close() !!}
@endsection
@section('footer')

@endsection
