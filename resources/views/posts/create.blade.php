@extends('layouts.app')

@section('content')
<form method="POST" action="/posts">
  {{ csrf_field() }}
  <input type="text" name="title" placeholder="Enter title"/>
  <textarea name="content"></textarea>
  <input type="submit" name="submit" />
</form>

@section('footer')
